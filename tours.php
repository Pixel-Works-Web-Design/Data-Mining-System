
<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");

	if(isset($_REQUEST['tour']))
	{
		$TourType = isset($_REQUEST['tour']) ? $_REQUEST['tour'] : '' ;
		$ExplodeTourType = explode(' ', $TourType) ;
		$type = $ExplodeTourType[0] ;	
	}
	else{
		$tourcategory = isset($_REQUEST['category']) ? $_REQUEST['category'] : '' ;
	}
	
	
	
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
				<h1 class="heading_primary">
				<?php 
				if(isset($_REQUEST['tour']))
				{
					echo $type.' Tours' ;
				}
				else{
					echo isset($_REQUEST['category']) ? $_REQUEST['category'] : '' ;
				}
				?>
				</h1></div>
		</div>
		<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9">
						<ul class="tours products wrapper-tours-slider">
		<?php 
		$per_page=9;

		if(isset($_REQUEST['tour'])){
			$list=mysql_query("SELECT count(*)  from tours where tours_domestic_international = '$type'");	
		}
		else{
			$list=mysql_query("SELECT count(*)  from tours where tours_category like '%$tourcategory%'");
		}
 		
		$pages=ceil(mysql_result($list,0)/$per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start=($page-1)*$per_page; 
		$num_rows=mysql_num_rows($list);
		$qty_pages = ceil($num_rows / $per_page); 
		$prev_page = $page >1 ? $page - 1 : null; 
		$next_page = $page < $pages ? $page +1 : null; 
		
		if(isset($_REQUEST['tour'])){
			$gettours = mysql_query("SELECT * from tours where tours_domestic_international = '$type' order by tours_title asc limit $start,$per_page");	
		}
		else{
			$gettours = mysql_query("SELECT * from tours  where tours_category like '%$tourcategory%' order by tours_title asc limit $start,$per_page");
		}
		
		if(mysql_num_rows($gettours) > 0)
		{
			// Include TourList file
			include("TourList.php") ;
		}
		 ?>
						
						</ul>
					<div class="navigation paging-navigation" role="navigation">


							<ul class="page-numbers">
								<?php if($prev_page){  ?> 

                             <li>
                             	<?php 
                             	if(isset($_REQUEST['tour'])){
                             		?>
                             		<a class="next page-numbers" href="tours.php?tour=<?php echo $TourType; ?>&page=<?php echo $prev_page;?>"><i class="fa fa-long-arrow-left"></i>
                             		</a> 
                             		<?php
                             	}
                             	else
                             	{
                             		?>
                             		<a class="next page-numbers" href="tours.php?category=<?php echo $tourcategory; ?>&page=<?php echo $prev_page;?>"><i class="fa fa-long-arrow-left"></i>
                             		</a> 
                             		<?php
                             	}
                             	?>
                             
                             </li>
<?php }else {?>
 <!-- <li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-left"></i></a> </li> -->
<?php } ?>
						<?php 
						for($i = 1; $i <= $pages; $i++){  ?>

				<li>
				<?php 
				if(isset($_REQUEST['tour'])){
					?>
					<a class="page-numbers <?php if(isset($_REQUEST['page'])) { if($_REQUEST['page']==$i) { echo "current";} }?>" href="tours.php?tour=<?php echo $TourType; ?>&page=<?php echo $i;?>"><?php echo $i;?>
					</a>
					<?php
				}
				else{
					?>
					<a class="page-numbers <?php if(isset($_REQUEST['page'])) { if($_REQUEST['page']==$i) { echo "current";} }?>" href="tours.php?category=<?php echo $tourcategory; ?>&page=<?php echo $i;?>"><?php echo $i;?>
					</a>
					<?php
				}
				 ?>
					
				</li> 
			                   
			              <?php } ?>
								

  <?php if($next_page){   ?> 
                        

                        <li>
                        	<?php 
                             	if(isset($_REQUEST['tour'])){
                             		?>
                             		<a href="tours.php?tour=<?php echo $TourType; ?>&page=<?php echo $next_page;?>" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a>  
                             		<?php
                             	}
                             	else
                             	{
                             		?>
                             		<a href="tours.php?category=<?php echo $tourcategory; ?>&page=<?php echo $next_page;?>" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a> 
                             		<?php
                             	}
                             	?>
                        	
                        </li>
 
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
	</div>
<?php 
	// Include Footer
	include_once("footer.php");
 ?>