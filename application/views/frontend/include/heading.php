<style>
/** 23. Headings
*************************************************** **/
div.heading-title {
	position:relative;
	margin-bottom:40px;
}
	.heading-title.parallax h1,
	.heading-title.parallax h2,
	.heading-title.parallax h3,
	.heading-title.parallax h4,
	.heading-title.parallax h5,
	.heading-title.parallax h6 {
		margin:0;
		padding:0;
	}
		.heading-title.parallax p {
			margin-top:0;
		}
	div.heading-title h1,
	div.heading-title h2,
	div.heading-title h3,
	div.heading-title h4,
	div.heading-title h5,
	div.heading-title h6 {
		margin:0;
		padding:0;
		background-color:#fff;
		position:relative;
		display:inline-block;
		padding-left: 0;
		padding-right: 15px;
	}
	div.heading-title.text-center h1,
	div.heading-title.text-center h2,
	div.heading-title.text-center h3,
	div.heading-title.text-center h4,
	div.heading-title.text-center h5,
	div.heading-title.text-center h6 {
		padding-left:15px;
		padding-right:15px;
	}
	div.heading-title.text-right h1,
	div.heading-title.text-right h2,
	div.heading-title.text-right h3,
	div.heading-title.text-right h4,
	div.heading-title.text-right h5,
	div.heading-title.text-right h6 {
		padding-left:15px;
		padding-right:0;
	}
	div.heading-title p {
		margin:0;
		padding:0;
		font-weight:300;
	}
/* Line : Single|Double */
div.heading-title.heading-line-single:before,
div.heading-title.heading-line-double:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 0;
	left: auto;
	right: 0;
}

	div.heading-title.heading-line-single:before {
		top: 54%;
		border-top:#EEE 1px solid;
	}
		section.dark div.heading-title.heading-line-single:before {
			border-top-color: #666;
		}
	div.heading-title.heading-line-double:before {
		top: 50%;
		border-top: 3px double #E5E5E5;
	}
		section.dark div.heading-title.heading-line-double:before {
			border-top-color: #666;
		}


/* Border Bottom */
div.heading-title.heading-border-bottom {
	border-bottom:#ccc 2px solid;
}
	section.dark div.heading-title.heading-border-bottom {
		border-bottom-color: #666;
	}

/* Border Left */
div.heading-title.heading-border {
	padding-left:15px;
	border-left:#ccc 5px solid;
	text-align:left;
}
	section.dark div.heading-title.heading-border {
		border-left-color:#666;
	}
div.heading-title.heading-border.heading-inverse {
	padding-right:15px;
	border-left:0;
	border-right:#ccc 5px solid;
	text-align:right;
}
	section.dark div.heading-title.heading-border.heading-inverse {
		border-right-color:#666;
	}

/* Dotted */
div.heading-title.heading-dotted {
	background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAABlBMVEX///+QkJApn3LQAAAAAnRSTlMAgJsrThgAAAAOSURBVHheYwCCUAdcJAAnnALqo5TBzAAAAABJRU5ErkJggg==') repeat-x center;
}
section.alternate div.heading-title h1,
section.alternate div.heading-title h2,
section.alternate div.heading-title h3,
section.alternate div.heading-title h4,
section.alternate div.heading-title h5,
section.alternate div.heading-title h6 {
	background-color:#F9F9F9;
}
section.dark div.heading-title h1,
section.dark div.heading-title h2,
section.dark div.heading-title h3,
section.dark div.heading-title h4,
section.dark div.heading-title h5,
section.dark div.heading-title h6 {
	background-color:#212121;
}
section.dark.alternate div.heading-title h1,
section.dark.alternate div.heading-title h2,
section.dark.alternate div.heading-title h3,
section.dark.alternate div.heading-title h4,
section.dark.alternate div.heading-title h5,
section.dark.alternate div.heading-title h6 {
	background-color:#151515;
}



/* Arrow Heading */
.heading-title.heading-arrow-top,
.heading-title.heading-arrow-bottom {
	color:#fff;
	background-color:#252525;
}
.heading-title.heading-arrow-top h1,
.heading-title.heading-arrow-bottom h1,
.heading-title.heading-arrow-top h2,
.heading-title.heading-arrow-bottom h2,
.heading-title.heading-arrow-top h3,
.heading-title.heading-arrow-bottom h3,
.heading-title.heading-arrow-top h4,
.heading-title.heading-arrow-bottom h4,
.heading-title.heading-arrow-top h5,
.heading-title.heading-arrow-bottom h5,
.heading-title.heading-arrow-top h6,
.heading-title.heading-arrow-bottom h6,
.heading-title.heading-arrow-top p,
.heading-title.heading-arrow-bottom p {
	color:#fff;
	margin:0;
}

	.heading-title.heading-arrow-top h1,
	.heading-title.heading-arrow-bottom h1 {
		font-size:70px;
		line-height:100px;
	}
	.heading-title.heading-arrow-top h2,
	.heading-title.heading-arrow-bottom h2 {
		font-size:60px;
		line-height:90px;
	}
	.heading-title.heading-arrow-top h3,
	.heading-title.heading-arrow-bottom h3 {
		font-size:50px;
		line-height:80px;
	}
	@media only screen and (max-width: 760px) {
		.heading-title.heading-arrow-top h1,
		.heading-title.heading-arrow-bottom h1 {
			font-size:55px;
			line-height:85px;
		}
		.heading-title.heading-arrow-top h2,
		.heading-title.heading-arrow-bottom h2 {
			font-size:45px;
			line-height:75px;
		}
		.heading-title.heading-arrow-top h3,
		.heading-title.heading-arrow-bottom h3 {
			font-size:45px;
			line-height:75px;
		}
	}
	@media only screen and (max-width: 500px) {
		.heading-title.heading-arrow-top h1,
		.heading-title.heading-arrow-bottom h1 {
			font-size:36px;
			line-height:66px;
		}
		.heading-title.heading-arrow-top h2,
		.heading-title.heading-arrow-bottom h2 {
			font-size:30px;
			line-height:60px;
		}
		.heading-title.heading-arrow-top h3,
		.heading-title.heading-arrow-bottom h3 {
			font-size:30px;
			line-height:60px;
		}
	}

.heading-title.heading-arrow-bottom:after {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	border-left: 20px solid transparent;
	border-right: 20px solid transparent;
	border-top: 20px solid #252525;
	left: 50%;
	margin-left: -20px;
	bottom: -20px;
}
.heading-title.heading-arrow-top:after {
content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-bottom: 20px solid #252525;
  left: 50%;
  margin-left: -20px;
  top: -20px;
  </style>