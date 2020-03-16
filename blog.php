
<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");

	$tag = isset($_REQUEST['category']) ? $_REQUEST['category'] : '' ;
 ?>

 <div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="blog.php">Blogs</a></li>
					</ul>
				</div>
				<h1 class="heading_primary">
				<?php 
				if(isset($_REQUEST['category']))
				{
					echo $tag ;
				}
				else{
					echo 'Blogs';
				}
				?>
				
				</h1></div>
		</div>
		<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 align-left">
						<div class="wrapper-blog-content">
					<?php 
		$per_page=6;

		if(isset($_REQUEST['category']))
		{
			$list=mysql_query("SELECT count(*)  from blog where blog_tags like '%$tag%'");
		}
		else{
			$list=mysql_query("SELECT count(*)  from blog");
		}
 		
		$pages=ceil(mysql_result($list,0)/$per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start=($page-1)*$per_page; 
		$num_rows=mysql_num_rows($list);
		$qty_pages = ceil($num_rows / $per_page); 
		$prev_page = $page >1 ? $page - 1 : null; 
		$next_page = $page < $pages ? $page +1 : null; 

		if(isset($_REQUEST['category']))
		{
			$getblog = mysql_query("SELECT * from blog where blog_tags like '%$tag%' limit $start,$per_page") ;
		}	
		else
		{
			$getblog = mysql_query("SELECT * from blog limit $start,$per_page") ;	
		}
		
					if(mysql_num_rows($getblog) > 0)
					{
						while ($blog = mysql_fetch_array($getblog)) {
						?>
						<article class="type-post">
								<div class="img_post"><a href="blog-detail.php?blogid=<?php echo $blog['blog_id'] ; ?>">
									<?php 
								if($blog['blog_img'] == NULL ||$blog['blog_img'] == '')
								{
								?>
									<div style="width: 100%; height: 170px; background-color: #ECEEEC;"></div>
								<?php
								}
								else{
									?>
										<img src="palash/photos/<?php echo $blog['blog_img'] ; ?>" class="wp-post-image" alt="Image" title="<?php echo $blog['blog_title'] ; ?>" style="width: 100%; height: 170px;">
									<?php
								}
								?>
								</a></div>
								<div class="entry-content content-thumbnail">
									<header class="entry-header">
										<h2 class="entry-title" style="text-transform: capitalize; width: 100%; height: 26px; overflow: hidden;">
											<a href="blog-detail.php?blogid=<?php echo $blog['blog_id'] ; ?>" rel="bookmark">
											<?php echo $blog['blog_title'] ; ?>
											</a>
										</h2>
										<div class="entry-meta">
											<span class="posted-on">Posted on <a href="#" rel="bookmark">
												<?php
												 // Date Format
											$date = date_create($blog['blog_date']) ;
											$dates_format =DATE_FORMAT($date , 'F d, 	Y') ;
											echo $dates_format;
												  ?>
											</a></span>
										</div>
									</header>
									<div class="entry-desc">
										<p>
											<?php 
										echo rtrim(  substr($blog['blog_description'], 0 , 360) , '&nbsp;') ;
											 if(strlen($blog['blog_description']) > 357)
											 {
											 	echo '..';
											 }
											 ?>
										 </p>
									</div>
								</div>
							</article>
							
						<?php
						}
					}
					 ?>
							
						</div>
						<div class="navigation paging-navigation" role="navigation">


							<ul class="page-numbers">
								<?php if($prev_page){  ?> 
                                <li>
                                <?php 
                                if(isset($_REQUEST['category']))
                                {
                                	?>
                                	<a class="next page-numbers" href="blog.php?category=<?php echo $tag ; ?>&page=<?php echo $prev_page; ?>"><i class="fa fa-long-arrow-left"></i>
                               		 </a> 
                                	<?php
                                }
                                else {
                                	?>
                                	<a class="next page-numbers" href="blog.php?page=<?php echo $prev_page;?>"><i class="fa fa-long-arrow-left"></i>
                                	</a> 
                                	<?php
                                }

                                 ?>
                                </li>
<?php }else {?>
 <!-- <li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-left"></i></a> </li> -->
<?php } ?>
								
							<?php for($i = 1; $i <= $pages; $i++){  ?>

			<li>
				<?php 
                if(isset($_REQUEST['category']))
                {
                	?>
                	<a class="page-numbers <?php if(isset($_REQUEST['page'])) { if($_REQUEST['page']==$i) { echo "current";} }?>" href="blog.php?category=<?php echo $tag ; ?>&page=<?php echo $i; ?>"><?php echo $i;?>
					</a>
                	<?php
                }
                else{
                	?>
                	<a class="page-numbers <?php if(isset($_REQUEST['page'])) { if($_REQUEST['page']==$i) { echo "current";} }?>" href="blog.php?page=<?php echo $i;?>"><?php echo $i;?>
					</a>
                	<?php
                }
               	?>
				
			</li> 
			                   
			                    <?php } ?>
								

  <?php if($next_page){   ?> 
                                    
                        <li>
                        <?php 
		                if(isset($_REQUEST['category']))
		                {
		                	?>
		                	<a href="blog.php?category=<?php echo $tag ; ?>&page=<?php echo $next_page;?>" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a>
		                	<?php
		                }
		                else{
		                	?>
		                	<a href="blog.php?page=<?php echo $next_page;?>" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a>
		                	<?php
		                }
		               	?>
                        </li>
 
<!--Blog Post Control Part End-->
<?php }else {?>
 <!-- <li><a href="#" class="next page-numbers"><i class="fa fa-long-arrow-right"></i></a> </li> -->
<?php }?>
							</ul>
						</div>
							
					</div>
					<div class="widget-area col-sm-3 alignright">
						<?php 
						include_once("sidebar.php");
					 ?>
					</div>
				</div>
			</div>
		</section>
	</div>
 <?php 
	// Include Footer
	include_once("footer.php");
 ?>