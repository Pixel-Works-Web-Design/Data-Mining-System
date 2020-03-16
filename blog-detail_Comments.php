	
	<div> <!-- Show Comments -->
		<?php 
		$getcomment = mysql_query("SELECT * from blogs_comment where blog_comment_blogid = '$blogID' AND blog_comment_approved = 'YES'") ;
		if(mysql_num_rows($getcomment) > 0)
		{
			while ($comment = mysql_fetch_array($getcomment)) {
			   ?>
					<div class="col-md-1 col-xs-3">
						<i class="fa fa-user" aria-hidden="true" style="font-size: 40px;"></i>
					</div>
					<div class="col-md-11 col-xs-9">
						<p style="text-transform: capitalize; margin: 0; padding: 0;"><?php echo '<b>'.$comment['blog_comment_name'].'</b>'. '  Says : ' ; ?></p>
						<p style="margin: 0; padding: 0;"><?php 
						// date Format
							$date = date_create($comment['blog_comment_date']);
          					$dates_format = DATE_FORMAT($date, 'F d, Y');
          					echo $dates_format;
						 ?></p>

						 <p style="text-transform: capitalize;">
						 	<br>
						 	<?php echo $comment['blog_comment_message'] ; ?>
						 	
						 	
						 </p>
					</div>	
					<div class="col-md-12 col-xs-12"><hr></div>   
			   <?php
			} // end of while  Loop
		}

		 ?>
		
	</div> <!-- End of Show Comments -->
	

	<div id="review_form_wrapper">
		<div id="review_form">
			<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title">Add a review</h3>
				<form action="blog-detail.php" method="post" id="commentform" class="comment-form">
					<p class="comment-notes">
						<span id="email-notes">Your email address will not be published.</span> Required fields are marked
						<span class="required">*</span></p>

						<input type="hidden" name="blod_ids" id="blod_ids" value="<?php echo $blog['blog_id'] ; ?>">
					

					<p class="comment-form-author"><label for="author">Name
						<span class="required">*</span></label>
						<input id="author" name="comment_name" type="text" value="" size="30" required="required">
					</p>
					<p class="comment-form-email"><label for="email">Email
						<span class="required">*</span></label>
						<input id="email" name="comment_email" type="email" value="" size="30" required="required">
					</p>
					

					<p class="comment-form-comment">
						<label for="comment">Your Review
							<span class="required">*</span></label><textarea id="comment" name="comment_msg" cols="45" rows="8" required=""></textarea>
					</p>
					<p class="form-control-submit">
						<input name="comment_submit" type="submit" id="submit" class="submit" value="Submit">
					</p>
				</form>
			</div>
		</div>
	</div>