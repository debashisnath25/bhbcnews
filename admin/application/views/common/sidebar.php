<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar">
		
		<ul class="side-menu">
			<!-- Dashboard STARTS -->
			<li class="sidebar_header">
				<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'home')?'active':'');?>" href="<?php echo base_url('home');?>">Home</a>
			</li>
			<!-- Dashboard Ends -->
		
			<!-- News Management STARTS -->
			<li class="sidebar_header">
               <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible " data-target="#News_Management"> News Management </a>
            </li>
			<div id="News_Management" class="collapse">
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url('add_news_management');?>"><span class="side-menu__label"> Add </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="#"><span class="side-menu__label"> Update </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item " href="<?php echo base_url('listing_news_management');?>"><span class="side-menu__label"> Delete </span></a>
				</li>
			</div>
			<!-- News Management ENDS -->

			<!-- Image Manage STARTS -->
			<li class="sidebar_header">
               <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible " data-target="#Image_Manage"> Image Manage </a>
            </li>
			<div id="Image_Manage" class="collapse">
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url('add_image_manage');?>"><span class="side-menu__label"> Add </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="#"><span class="side-menu__label"> Update </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item " href="<?php echo base_url('listing_image_manage');?>"><span class="side-menu__label"> Delete </span></a>
				</li>
			</div>
			<!-- Image Manage ENDS -->

			<!-- Video Manage STARTS -->
			<li class="sidebar_header">
               <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible " data-target="#Video_Manage"> Video Manage </a>
            </li>
			<div id="Video_Manage" class="collapse">
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url('add_video-manage');?>"><span class="side-menu__label"> Add </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="#"><span class="side-menu__label"> Update </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item " href="<?php echo base_url('listing_video_manage');?>"><span class="side-menu__label"> Delete </span></a>
				</li>
			</div>
			<!-- Video Manage ENDS -->

			<!-- Reporter Manage STARTS -->
			<li class="sidebar_header">
               <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible " data-target="#Reporter_Manage"> Reporter Manage </a>
            </li>
			<div id="Reporter_Manage" class="collapse">
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url('add_reporter_manage');?>"><span class="side-menu__label"> Add </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="#"><span class="side-menu__label"> Update </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item " href="<?php echo base_url('listing_reporter_manage');?>"><span class="side-menu__label"> Delete </span></a>
				</li>
			</div>
			<!-- Reporter Manage ENDS -->

			<!-- Advertisement Manage STARTS -->
			<li class="sidebar_header">
               <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible " data-target="#Advertisement_Manage"> Advertisement Manage </a>
            </li>
			<div id="Advertisement_Manage" class="collapse">
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url('add_advertisement_manage');?>"><span class="side-menu__label"> Add </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="#"><span class="side-menu__label"> Update </span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item " href="<?php echo base_url('listing_advertisement_manage');?>"><span class="side-menu__label"> Delete </span></a>
				</li>
			</div>
			<!-- Advertisement Manage ENDS -->
		</ul>
	</aside>