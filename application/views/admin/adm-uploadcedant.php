
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <?php $this->load->view('admin/include/adm-head');?>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">

        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          
        <?php $this->load->view('admin/include/adm-logo');?>  
        <?php $this->load->view('admin/include/adm-leftmenu');?>  
		
        </nav>
        <div class="content">
		<?php $this->load->view('admin/include/adm-topmenu');?>
		
		<div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(<?= base_url(); ?>adminassets/img/icons/spot-illustrations/corner-4.png);">
            </div>
            <!--/.bg-holder-->

            <div class="card-body position-relative">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <h3><?= $title; ?></h3>
				  <hr/>
                  
					<div class="hide-it">
					<!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
					<?php if ($this->session->flashdata('message')) :
						echo $this->session->flashdata('message');
					endif; ?>
					</div>
					
					<div class="container">
								<?php foreach($c_cedant as $u){ ?>
								<!--
								<form action="<?php echo base_url('Admin/aksi_insertcedant/').$u->id; ?>" method="post" enctype="multipart/form-data">
								-->
								<form action="<?php echo base_url('Admin/update_upload_cdn/').$u->id; ?>" method="post" enctype="multipart/form-data">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $u->id ?>" readonly>
										<input type="hidden" name="bhs" value="<?php echo $u->bahasa ?>" readonly>
								
										
										
										<div class="row mb-3">
										  <label class="col-sm-2 col-form-label col-form-label-sm" for="colFormLabelSm">Bahasa</label>
										  <div class="col-sm-10">
											
											<?php 											
											$langu = $u->bahasa;
											$langnya = ($langu == 'ENG') ? 'Indonesia' : 'Inggris';
											echo '<b>'.$langnya.'</b>';
											?>
											
										  </div>
						
										</div>
										
										
										<div class="row mb-3">
										  <label class="col-sm-2 col-form-label col-form-label-sm" for="colFormLabelSm">Nama Asuransi</label>
										  <div class="col-sm-10">
											
											<input class="form-control form-control-sm" id="colFormLabelSm" type="text" placeholder="col-form-label-sm" name="insurance" value="<?php echo $u->asuransi ?>" />
										  </div>
						
										</div>
										
										
										<div class="row mb-3">
										  <label class="col-sm-2 col-form-label col-form-label-sm" for="url">Link Asuransi</label>
										  <div class="col-sm-10">
										  
										  <input class="form-control form-control-sm" id="url" type="text" placeholder="masukan url perusahaan asuransi" name="url" value="<?php echo $u->link_perusahaan ?>" />
											
											
										  </div>
										</div>
										
										
										<div class="row mb-3">
										  <label class="col-sm-2 col-form-label col-form-label-sm" for="url">Upload Cedant</label>
										<div class="col-sm-10">
											<input class="form-control form-control-sm" type="file" name="logo" data-bs-placement="top" value="<?php echo $u->upload_cedant ?>">
										</div>
										</div>	

													
										

										<div class="row mb-3">
										  <div class="col-sm-2"></div>
										 <div class="col-sm-3 d-grid gap-2"> 
										   <a class="btn btn-outline-primary me-1 mb-1" type="icon" href="<?= base_url('Admin/mn3b'); ?>">Kembali</a>
										   </div>
											
											<div class="col-sm-7 d-grid gap-2">  
											<button class="btn btn-outline-danger me-1 mb-1" type="submit" value="Simpan">Simpan</button>									
										  </div>
										</div>

									</div>
								</form>	
								<?php } ?>
					</div>
					
                </div>
              </div>
            </div>
          </div>
		  
		  
         
		  
		  
          <footer class="footer">
            <?php $this->load->view('admin/include/footer');?>
          </footer>
        </div>
        
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
 <?php $this->load->view('admin/include/adm-custom');?>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <?php $this->load->view('admin/include/adm-javascriptdefault'); ?>
	
	<script src="<?= base_url(); ?>adminassets/vendors/tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({
		  selector: 'textarea',
		  menubar: true,
			menu: {
			file: { title: 'File', items: 'preview' },
			edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
			view: { title: 'View', items: 'visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
			
			format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
			tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
			table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },

			},

		  
		  powerpaste_word_import: 'clean',
		  powerpaste_html_import: 'clean',
		  branding: false,
		  statusbar: false,
		});

  
	</script>
	
	 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	 <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
	 
	 <script>
		$(document).ready(function () {
			$('#example').DataTable({
				order: [[0, 'desc']],
			});
		});
	</script>
	
	<script type="text/javascript">			
	var timeout = 4000;
	$('.hide-it').delay(timeout).fadeOut(300);
	</script>
	

  </body>

</html>