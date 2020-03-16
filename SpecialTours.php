
<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");
 ?>

	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="TourList-International-Domestics.php">Tours</a></li>
					</ul>
				</div>
				<?php 
				if(isset($_REQUEST['destination']))
				{
				?>
				<h1 class="heading_primary"><?php echo $_REQUEST['destination']; ?></h1>
				<?php	
				}
				else{
					?>
				<h1 class="heading_primary"><?php echo $_REQUEST['TourTags']; ?></h1>
				<?php	
				
				}
				 ?>
				</div>
				
		</div>

<?php 
if(isset($_REQUEST['destination']))
{
?>
	<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9">
						<ul class="tours products wrapper-tours-slider">
		<?php 
		$country = $_REQUEST['destination'] ;
		$per_page=9;
 		$list=mysql_query("SELECT count(*)  from tours where tours_destination = '$country'");
		$pages=ceil(mysql_result($list,0)/$per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start=($page-1)*$per_page; 
		$num_rows=mysql_num_rows($list);
		$qty_pages = ceil($num_rows / $per_page); 
		$prev_page = $page >1 ? $page - 1 : null; 
		$next_page = $page < $pages ? $page +1 : null; 
		
		$gettours = mysql_query("SELECT * from tours  where tours_destination = '$country' order by tours_title asc limit $start,$per_page");
		if(mysql_num_rows($gettours) > 0)
		{

			// get Tour List
			include("TourList.php") ;
			// End of get Tour List				 
			
		}
		 ?>
						
						</ul>
					<div class="navigation paging-navigation" role="navigation">


							<ul class="page-numbers">
								<?php if($prev_page){  ?> 
                                     <li><a class="next page-numbers" href="SpecialTours.php?destination=<?php echo $country ; ?>&page=<?php echo $prev_page;?>"><i class="fa fa-long-arrow-left"></i></a> </li>
<?php }else {?>
 <!-- <li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-left"></i></a> </li> -->
<?php } ?>
								<?php for($i = 1; $i <= $pages; $i++){  ?>
			<li><a class="page-numbers <?php if(isset($_REQUEST['page'])) { if($_REQUEST['page']==$i) { echo "current";} }?>" href="SpecialTours.php?destination=<?php echo $country ; ?>&page=<?php echo $i;?>"><?php echo $i;?></a></li> 
			                   
			                    <?php } ?>
								

  <?php if($next_page){   ?> 
                                    
                                    <li><a href="SpecialTours.php?destination=<?php echo $country ; ?>&page=<?php echo $next_page;?>" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a> </li>
 
<!--tours Post Control Part End-->
<?php }else {?>
 <!-- <li><a href="#" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a> </li> -->
<?php }?>
							</ul>
						</div>
				
					</div> <!-- end of col 9 -->
					<div class="widget-area align-right col-sm-3">
					
					<?php 
						 include_once("sidebar.php");
					 ?>
					 	
					</div> <!-- Widget Area -->
				</div>
			</div>
		</section>
<?php
} // End of isset($_REQUEST['destination'])
else{
?>
	<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9">
						<ul class="tours products wrapper-tours-slider">
		<?php 
		$Requesttag = $_REQUEST['TourTags'] ;
		$per_page=9;
 		$list=mysql_query("SELECT count(*)  from tours where tours_tag like '%$Requesttag%'");
		$pages=ceil(mysql_result($list,0)/$per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start=($page-1)*$per_page; 
		$num_rows=mysql_num_rows($list);
		$qty_pages = ceil($num_rows / $per_page); 
		$prev_page = $page >1 ? $page - 1 : null; 
		$next_page = $page < $pages ? $page +1 : null; 
		
		$gettours = mysql_query("SELECT * from tours  where tours_tag like '%$Requesttag%' order by tours_title asc limit $start,$per_page");
		if(mysql_num_rows($gettours) > 0)
		{

			// get Tour List
			include("TourList.php") ;
			// End of get Tour List				 
			
		}
		 ?>
						
						</ul>
					<div class="navigation paging-navigation" role="navigation">


							<ul class="page-numbers">
								<?php if($prev_page){  ?> 
                                     <li><a class="next page-numbers" href="SpecialTours.php?TourTags=<?php echo $Requesttag ; ?>&page=<?php echo $prev_page;?>"><i class="fa fa-long-arrow-left"></i></a> </li>
<?php }else {?>
 <!-- <li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-left"></i></a> </li> -->
<?php } ?>
								<?php for($i = 1; $i <= $pages; $i++){  ?>
			<li><a class="page-numbers <?php if(isset($_REQUEST['page'])) { if($_REQUEST['page']==$i) { echo "current";} }?>" href="SpecialTours.php?TourTags=<?php echo $Requesttag ; ?>&page=<?php echo $i;?>"><?php echo $i;?></a></li> 
			                   
			                    <?php } ?>
								

  <?php if($next_page){   ?> 
                                    
                                    <li><a href="SpecialTours.php?TourTags=<?php echo $Requesttag ; ?>&page=<?php echo $next_page;?>" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a> </li>
 
<!--tours Post Control Part End-->
<?php }else {?>
 <!-- <li><a href="#" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a> </li> -->
<?php }?>
							</ul>
						</div>
				
					</div> <!-- end of col 9 -->
					<div class="widget-area align-right col-sm-3">
					
					<?php 
						 include_once("sidebar.php");
					 ?>
					 	
					</div> <!-- Widget Area -->
				</div>
			</div>
		</section>
<?php

} // End of Else Tour TourTags
 ?>
	
	</div>
<?php 
	// Include Footer
	include_once("footer.php");
 ?>