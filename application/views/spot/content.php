
        

 <form action="http://localhost/yatrahelpline/trunk/index.php/spot/add/" method="post" enctype="multipart/form-data">

			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Submit New Spot <?php //pa($query); //echo $query->title; ?></h2>
					<!--<p class="error">Something went wronk.</p>-->

                                         <span style="color:red">
                                        <?php echo validation_errors(); ?><br/>

                                        <?php echo $msg;?>
                                        </span>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Title <small></small></label>
			<input type="text" name="title" id="title" value="<?php print set_value('title'); //echo $query->title; ?>" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Keyword <small></small></label>
						<input type="text" name="keyword" id="keyword" value="<?php print set_value('keyword'); ?>" />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Description</label>
						<input type="text" name="descr" id="descr" value="<?php print set_value('descr'); ?>" />
					</p>
				</div>
             

				<div class="grid_16">
					<p>
						<label>Data <small></small></label>
						<textarea name="data"></textarea>
					</p>
				</div>
                   <div class="grid_6">
					<p>
						<label for="title">Relation</label>
						<input type="text" name="relationid" id="relationid" value="<?php print set_value('relationid'); ?>"/>
					</p>
				</div>
                
                
                
                
                <div class="grid_5" style="clear:both">
					<p>
						<label for="title">Image1 <small></small></label>
						<input type="file" name="imageid1" id="imageid1" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Image2 <small></small></label>
						<input type="file" name="imageid2" />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Image3</label>
						<input type="file" name="imageid3" />
					</p>
				</div>
                
                <div class="grid_6">
					<p>
						<label for="title">Primary Spot</label>
						<select name="primary" id="primary" value="<?php print set_value('primary'); ?>">
                        <option value="">Select </option>
                        <option value="yes">Yes </option>
                        <option value="no">No </option>
                        
                        </select>
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