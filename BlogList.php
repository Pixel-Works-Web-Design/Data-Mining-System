<?php
while ($blog = mysql_fetch_array($getblog)) {
							 ?>
							 <div class="col-md-4 col-sm-12 col-xs-12">
									<div class="feature-image">
										<a href="blog-detail.php?blogid=<?php echo $blog['blog_id'] ; ?>" class="entry-thumbnail">
											<?php 
											if($blog['blog_img'] == NULL ||$blog['blog_img'] == '')
											{
												?>
												<div style="width: 100%; height: 240px; background-color: #ECEEEC;"></div>
												<?php
											}
											else{
												?>
												<img width="370" height="260" src="palash/photos/<?php echo $blog['blog_img'] ; ?>" alt="Image" title="<?php echo $blog['blog_title'] ; ?>" style="width: 100%; height: 240px;">
												<?php
											}

											 ?>
											
										</a>
									</div>
									<div class="post-list-content">
										<div class="post_list_inner_content_unit">
											<h3 class="post_list_title" style="text-transform: capitalize; overflow: hidden; width: 100%; height: 27px; word-break: normal; margin-bottom: 13px;">
												<a href="blog-detail.php?blogid=<?php echo $blog['blog_id'] ; ?>" rel="bookmark">
												<?php echo $blog['blog_title'] ; ?>
												</a>
											</h3>
											<div class="wrapper-meta">
												<div class="date-time">
											<?php 
											// Date Format
											$date = date_create($blog['blog_date']) ;
											$dates_format =DATE_FORMAT($date , 'F d ,Y') ;
											echo $dates_format;
											 ?>
												</div>
												<div class="post_list_cats">
													<a href="#" rel="category tag">
													
										<?php
										//  Blog Tag
										
										if(!($blog['blog_tags'] == NULL || $blog['blog_tags'] == ''))
										{
											$tags = explode(',', $blog['blog_tags']) ;
											$tot = count($tags);

											foreach ($tags as $key => $mytag) {

											$tag = $mytag ;

												if($key == $tot-1)
												{
													?>
													<a href="blog.php?category=<?php echo $tag ; ?>">
														<?php echo $tag ; ?>
													</a>
													<?php
												}
												else{
													?>
													<a href="blog.php?category=<?php echo $tag ; ?>">
														<?php echo $tag . ' , '; ?>
													</a>
													<?php
												}
											}
										}

										  ?>
													</a>
												</div>
											</div>
											<div class="post_list_item_excerpt" style="text-transform: capitalize; width: 100%; height: 90px; overflow: hidden; font-weight: normal;">
											<?php
											 echo rtrim(  substr($blog['blog_description'], 0 , 190) , '&nbsp;') ;
											 if(strlen($blog['blog_description']) > 187)
											 {
											 	echo '..';
											 }
											?>
											</div>
										</div>
									</div>
								</div> <!-- end of blog -->
							 <?php
							}

?>