<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>																									
 <head>
  
  
   

  <title> ยินดีต้อนรับเข้าสู่ระบบ </title>
	
	<link href="<?php echo base_url('asesst/css/bootstrap.min.css');?>" rel="stylesheet" >
	<link href="<?php echo base_url('asesst/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('asesst/css/freelancer.css');?>" rel="stylesheet">

	<script src="<?php echo base_url('asesst/js/jquery-1.11.2.min.js');?>"></script>
	<script src="<?php echo base_url('asesst/js/bootstrap.min.js');?>"></script>

 	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		/*

		* Based on Cover by https://twitter.com/mdo"  @mdo
		* added cover image and background color to match (green)
		*
		* Globals

		*/

		/* Links */
		a,
		a:focus,
		a:hover {
		  color: #fff;
		}

		/* Custom default button */
		.btn-default,
		.btn-default:hover,
		.btn-default:focus {
		  color: #330000;
		  text-shadow: none; /* Prevent inheritence from `body` */
		  background-color: #fff;
		  border: 1px solid #fff;
		}


		/*
		 * Base structure
		 */

		 html,
    body {
    /*css for full size background image*/
      background: url(img/55.jpg)  no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      
      height: 100%;
      background-color: #330000;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 3px rgba(0,0,0,.5);
     
    }

		/* Extra markup and styles for table-esque vertical and horizontal centering */
		.site-wrapper {
		  display: table;
		  width: 100%;
		  height: 100%; /* For at least Firefox */
		  min-height: 100%;
		  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
		          box-shadow: inset 0 0 100px rgba(0,0,0,.5);
		}
		.site-wrapper-inner {
		  display: table-cell;
		  vertical-align: top;
		}
		.cover-container {
		  margin-right: auto;
		  margin-left: auto;
		}

		/* Padding for spacing */
		.inner {

		  padding: 30px;
		}


		/*
		 * Header
		 */
		.masthead-brand {
		  margin-top: 10px;
		  margin-bottom: 10px;
		}

		.masthead-nav > li {
		  display: inline-block;
		}
		.masthead-nav > li + li {
		  margin-left: 20px;
		}
		.masthead-nav > li > a {
		  padding-right: 0;
		  padding-left: 0;
		  font-size: 16px;
		  font-weight: bold;
		  color: #fff; /* IE8 proofing */
		  color: rgba(255,255,255,.95);
		  border-bottom: 2px solid transparent;
		}
		.masthead-nav > li > a:hover,
		.masthead-nav > li > a:focus {
		  background-color: transparent;
		  border-bottom-color: #a9a9a9;
		  border-bottom-color: rgba(255,255,255,.25);
		}
		.masthead-nav > .active > a,
		.masthead-nav > .active > a:hover,
		.masthead-nav > .active > a:focus {
		  color: #fff;
		  border-bottom-color: #fff;
		}

		@media (min-width: 768px) {
		  .masthead-brand {
		    float: left;
		  }
		  .masthead-nav {
		    float: right;
		  }
		}


		/*
		 * Cover
		 */

		.cover {
		  padding: 0 20px;
		}
		.cover .btn-lg {
		  padding: 10px 20px;
		  font-weight: bold;
		}


		/*
		 * Footer
		 */

		.mastfoot {
		  color: #999; /* IE8 proofing */
		  color: rgba(255,255,255,.5);
		}


		/*
		 * Affix and center
		 */

		@media (min-width: 768px) {
		  /* Pull out the header and footer */
		  .masthead {
		    position: fixed;
		    top: 0;
		  }
		  .mastfoot {
		    position: fixed;
		    bottom: 0;
		  }
		  /* Start the vertical centering */
		  .site-wrapper-inner {
		    vertical-align: middle;
		  }
		  /* Handle the widths */
		  .masthead,
		  .mastfoot,
		  .cover-container {
		    width: 100%; /* Must be percentage or pixels for horizontal alignment */
		  }
		}

		@media (min-width: 992px) {
		  .masthead,
		  .mastfoot,
		  .cover-container {
		    width: 700px;
		  }
		}

		.showerror{
			color: #FF0000;
		  text-align: center;
		  text-shadow: 0 1px 70px rgba(0,0,0,.5);
		

		}

	</style>


	
 </head>

 <body>


 		<div class="site-wrapper" action="<?php echo base_url('index.php/show_add');?>">
		  <div class="site-wrapper-inner">
		    <div class="cover-container">
		      <div class="masthead clearfix">
		        <div class="inner">
		          <h3 class="masthead-brand">CATALOG</h3>

		          <ul class="nav masthead-nav">
		            <li >
                  <a href="<?php echo base_url('index.php/Logincatalog');?>">หน้าหลัก</a>
                </li>
				<li >
                  <a href="<?php echo base_url('index.php/Allcatalog');?>">แสดงสินค้าทั้งหมด</a>
                </li>	          

		            <li>
		              <a href="<?php echo base_url('index.php/login/Addcatalog');?>">แก้ไขข้อมูล</a>
		            </li>

		          </ul>
		        </div>
		      </div>
  			
		      <div class="inner cover" >
		        <form class="form-horizontal" action="<?php echo base_url('index.php/UpdateBook/checkupdate');?>" method="post" >
				 <div class="form-group">
              <div class="col-sm-offset-1 col-sm-10">
                  <h4>  <label for="inputEmail3" class="col-sm-6 control-label">เพิ่มข้อมมูลสินค้า</label></br></br>     </h4> 
              </div>
            </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อสินค้า</label>
				    <div class="col-sm-5">
				      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">ราคาขาย</label>
				    <div class="col-sm-5">
				      <input type="text" name="moldsale" class="form-control" id="inputPassword3" placeholder="moldsale">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">ราคาสมาชิก</label>
				    <div class="col-sm-5">
				      <input type="text" name="membersmold" class="form-control" id="inputPassword3" placeholder="membersmold">
				    </div>
				  </div>	
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">ประกัน</label>
				    <div class="col-sm-5">
				      <input type="text" name="insurace" class="form-control" id="inputPassword3" placeholder="insurace">
				    </div>
				  </div>	
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-2">
				      <button type="submit" class="btn btn-default" >เพิ่มสินค้า</button>
				      	
				    </div>
				  </div>  
				
						<div class="showerror"> <!-- showerror -->	
				           <div class="form-group">
				               <div class="col-sm-offset-1 col-sm-6">
				               
				                  <?php echo validation_errors(); ?>
    
				   
				              </div>
				           	</div>
				     	 </div>	  <!-- showerror -->

			</div>

			<div class="mastfoot">
		        <div class="inner">
		          <!-- Validation -->
		          <p>Template by<a href=
		          "http://bootsnipp.com//"> bootsnipp</a></p>
		        </div>
		      </div>
		    </div>
		</div>
		</div>
 				

 </body>
</html>