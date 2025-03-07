<?php



require_once __DIR__ . '/standalone_autoload.php';

use \Linfo\Exceptions\FatalException;
use \Linfo\Linfo;
use \Linfo\Common;

// If we're using php's built in server, enable static files
if (php_sapi_name() == 'cli-server') {
    if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico)$/', $_SERVER["REQUEST_URI"])) {
        return false;
    }
}

try {

    // Load settings file..
    // Support legacy config files
    define('IN_LINFO', 'true');
    define('IN_INFO', 'true');
    if (!is_file(__DIR__.'/config.inc.php') && is_file(__DIR__.'/sample.config.inc.php')) {
        // If we have permissions, try to just copy the sample file and avoid needing that manual step
        if (!(is_writable(__DIR__) && @copy(__DIR__.'/sample.config.inc.php', __DIR__.'/config.inc.php'))) {
            throw new FatalException('Make changes to sample.config.inc.php then rename as config.inc.php');
        }
    } elseif (!is_file(__DIR__.'/config.inc.php')) {
        throw new FatalException('Config file not found.');
    }

    $settings = Common::getVarFromFile(__DIR__.'/config.inc.php', 'settings');

    $linfo = new Linfo($settings);
    $linfo->scan();

    if (isset($_SERVER['LINFO_NCURSES']) && php_sapi_name() == 'cli') {
        $output = new \Linfo\Output\Ncurses($linfo);
    }
    else {
        switch (array_key_exists('out', $_GET) ? strtolower($_GET['out']) : 'html') {
            default:
            case 'html':
                $output = new \Linfo\Output\Html($linfo);
            break;

            case 'json':
            case 'jsonp': // To use JSON-P, pass the GET arg - callback=function_name
                $output = new \Linfo\Output\Json($linfo, array_key_exists('callback', $_GET) ? $_GET['callback'] : null);
            break;

            case 'php_array':
                $output = new \Linfo\Output\Serialized($linfo);
            break;
        }
    }

    $output->output();

} catch (FatalException $e) {
    echo $e->getMessage()."\n";
    exit(1);
}
