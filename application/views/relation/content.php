<form action="http://localhost/yatrahelpline/trunk/index.php/relation/add" method="post" >
        
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Submit New Relation</h2>
					<!--<p class="error">Something went wronk.</p>-->

                                         <span style="color:red">
                                        <?php echo validation_errors(); ?>
                                        </span>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">X value <small></small></label>
						<input type="text" name="xvalue" id="xvalue" value="<?php print set_value('xvalue'); ?>" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Y value <small></small></label>
						<input type="text" name="yvalue" id="yvalue" value='<?php print set_value('yvalue');?>' />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Latitude</label>
						<input type="text" name="latitude" id="latitude" value='<?php print set_value('latitude');?>' />
					</p>
				</div>
             

				<div class="grid_16">
					<p>
						<label>Longitude <small></small></label>
						<input type="text" name="longitude" id="longitude" value='<?php print set_value('longitude');?>'/>
					</p>
				</div>
                   <div class="grid_6">
					<p>
						<label for="title">How to reach</label>
						<input type="text" name="howtoreach"  id="howtoreach" value='<?php print set_value('howtoreach');?>' />
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
