
        
<form action="http://localhost/yatrahelpline/trunk/index.php/gallery/add" method="post" >
        
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Submit New Gallery</h2>
					<!--<p class="error">Something went wronk.</p>-->
                                         <span style="color:red">
                                        <?php echo validation_errors(); ?>
                                        </span>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Title <small></small></label>
						<input type="text" name="title" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Keyword <small></small></label>
						<input type="text" name="keyword" />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Description</label>
						<input type="text" name="descr" />
					</p>
				</div>
             

			
                   <div class="grid_6">
					<p>
						<label for="title">Name</label>
						<input type="text" name="name" />
					</p>
				</div>
                
                
                
                
              
                
                   

				<div class="grid_16">
					
					<p class="submit">
						<input type="reset" value="Reset" />
						<input type="submit" value="Post" />
					</p>
				</div>
			</div>
 </form>