<html>
  <head>
  <title><?php echo $title;?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/style.css"/>
  <script type="text/javascript" src="<?php echo base_url()?>jquery/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>ckeditor/ckeditor.js"></script>
   
        <link rel="stylesheet" href="<?php echo  base_url()?>superfish-master/css/superfish.css" media="screen"/>
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery_ui.css"/>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url()?>superfish-master/js/hoverIntent.js"></script>
		<script src="<?php echo base_url()?>superfish-master/js/superfish.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery_ui.js"></script>
      
		<script>

		(function($){ //create closure so we can safely use $ as alias for jQuery

			$(document).ready(function(){

				// initialise plugin
				var example = $('#example').superfish({
					//add options here if required
				});

				// buttons to demonstrate Superfish's public methods
				$('.destroy').on('click', function(){
					example.superfish('destroy');
				});

				$('.init').on('click', function(){
					example.superfish();
				});

				$('.open').on('click', function(){
					example.children('li:first').superfish('show');
				});

				$('.close').on('click', function(){
					example.children('li:first').superfish('hide');
				});
			});

		})(jQuery);


		</script>
  
  
  
  </head>
  <body>
  <div id="wrapper">  
      <p align="right" style="color: white;">
       <a href="<?php echo site_url('users/manageuser')?>" style="color: white;text-decoration: none;">Change Password</a> &nbsp;
       <a href="<?php echo site_url('check_login/logout')?>" 
                                          style="color: white; text-decoration: none;">Logout</a>
  </p>
  <h1>Welcome To <i style="color: red;">National Olympiad</i> Admin Panel</h1>
  <div id="header">
  <div id="menu">
 	<ul class="sf-menu" id="example">
			<li class="current">
				<a href="<?php echo site_url('dashboard');?>">HOME</a>
				<ul>
					<!--<li>
						<a href="<?php echo site_url('home/home_submenu/1');?>">Co-Curricular Activities </a>
					</li>-->
					<!--<li class="current">
						<a href="<?php echo site_url('home/home_submenu/2');?>">Mid Footer</a>
					</li>
                    <li class="current">
                       <a href="<?php echo site_url('home/home_submenu/3');?>">Right Footer</a>
                    </li>-->
                    <!--<li class="current">
                       <a href="<?php echo site_url('home/home_submenu/4');?>">Message From Chairman</a>
                    </li>
                    	-->		
				</ul>
			</li>
			<!-- <li>
			   <a href="<?php echo site_url('aboutus');?>">About Us</a>
			</li>-->
             <li>
			   <a href="#">About Us</a>
               <ul>
               <li class="current">
						<a href="<?php echo site_url('home/home_submenu/2');?>">Mission</a>
					</li>
                    <li class="current">
                       <a href="<?php echo site_url('home/home_submenu/3');?>">Vissions</a>
             </li>
              <li class="current">
                       <a href="<?php echo site_url('home/home_submenu/4');?>">Objectives</a>
              </li>
               
               </ul>
			</li>
            <li> <a href="#">Add</a>
                  <ul><li><a href="<?php echo site_url('categories');?>">Menu</a>
                      </li>
                      <li><a href="<?php echo site_url('additems')?>">Add Sub Menu</a></li>
                  </ul>
            </li>
           <!--<li><a href="#">Categories</a>
               <ul>
                   <?php foreach($categories as $cat){?>
                   <li> <a href="#"><?php echo $cat->categories;?></a>
                       <ul>  <?php foreach($cat_items as $items){
                            if($cat->cat_id==$items->cat_id){
                            ?>
                            <li><a href="<?php echo base_url(); ?>categories/hardware/<?php echo $items->id;?> "> <?php echo $items->name;?> </a></li>
                            <?php }
                            } ?>
                       </ul>
                  </li>
                <?php } ?>
               </ul>
           
           </li>--> 
          <!--<li>
           <a href="#">Hardware List</a>
               <ul>
					<?php foreach($hardware as $hw):
					   ?>
                    <li>
						<a href="<?php echo site_url('categories/hardware/'.$hw->id);?>"><?php echo $hw->name;?> </a>
					</li>
                    <?php 
                    endforeach;?>
              </ul>
           </li>
             <li>
           <a href="<?php echo site_url('hardware');?>">System List</a>
               <ul>
					<?php foreach($system as $s):
					   ?>
                    <li>
						<a href="<?php echo site_url('categories/hardware/'.$s->id);?>"><?php echo $s->name;?> </a>
					</li>
                    <?php 
                    endforeach;?>
              </ul>
           </li>-->
            <li>
				<a href="<?php echo site_url('clients');?>">Our Team</a>
			</li>
            <li>
				<a href="<?php echo site_url('slidebanner');?>">Slide Banner</a>
			</li>
		    <!--<li>
				<a href="<?php echo site_url('careers');?>">Career</a>
			</li> -->
            <li>
				<a href="<?php echo site_url('gallery');?>">Gallery</a>
			</li>
           
            <li>
				<a href="<?php echo site_url('header_links');?>"> Links</a>
			</li>
            <li>
              <a href="<?php echo site_url('careers');?>">Careers</a>
            </li>
            <li><a href="<?php echo site_url('service');?>">NEWS And Events</a></li>
            <li>
             <a href="<?php echo site_url('dashboard/logo')?>">Top banner</a>
            </li>
            <li>
             <a href="<?php echo site_url('dashboard/video')?>">video</a>
            </li>
          
				
		</ul>
   </div>
 
 </div>
  