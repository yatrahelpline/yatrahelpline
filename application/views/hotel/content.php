
        
<form action="http://localhost/yatrahelpline/trunk/index.php/hotel/add" method="post" >
        
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Submit New Hotels</h2>
					<!--<p class="error">Something went wronk.</p>-->

                                         <span style="color:red">
                                        <?php echo validation_errors(); ?>
                                        </span>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Title <small></small></label>
						<input type="text" name="title" id="title" value="<?php print set_value('title'); ?>" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Keyword <small></small></label>
						<input type="text" name="keyword" id="keyword" value='<?php print set_value('keyword');?>' />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Description</label>
						<input type="text" name="descr" id="descr" value='<?php print set_value('descr');?>' />
					</p>
				</div>
             

				<div class="grid_16">
					<p>
						<label>Data <small></small></label>
						<textarea name="data" id="data" value='<?php print set_value('data');?>'></textarea>
					</p>
				</div>
                   <div class="grid_6">
					<p>
						<label for="title">Relation</label>
						<input type="text" name="relationid"  id="relationid" value='<?php print set_value('relationid');?>' />
					</p>
				</div>
                
                
                
                
                <div class="grid_5" style="clear:both">
					<p>
						<label for="title">Image1 <small></small></label>
						<input type="file" name="imageid1" id="imageid1" value='<?php print set_value('imageid1');?>' />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Image2 <small></small></label>
						<input type="file" name="imageid2" id="imageid2" value='<?php print set_value('imageid2');?>' />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Image3</label>
						<input type="file" name="imageid3" id="imageid3" value='<?php print set_value('imageid3');?>' />
					</p>
				</div>
                
                <div class="grid_6">
					<p>
						<label for="title">Category</label>
						<select name="category" id="category" value='<?php print set_value('category');?>'>
                        <option value="">Select </option>
                        <option value="5">5 </option>
                        <option value="4">4 </option>
3                        <option value="3">3 </option>
                        </select>
					</p>
				</div>
                
                                
                    <div class="grid_6">
					<p>
						<label for="title">Room Rate</label>
						<input type="text" name="roomrate" id="roomrate" value='<?php print set_value('roomrate');?>' />
					</p>
		</div>

                <div class="grid_7" style="clear: both">
					<p>
						<label for="title">Contact Info</label>
						<textarea name="contactinfo" id="contactinfo" value='<?php print set_value('contactinfo');?>'></textarea>
					</p>
		</div>

               <div class="grid_7" style="clear: both">
					<p>
						<label for="title">Faclitiies</label>
						<textarea name="faclitiies" id="faclitiies" value='<?php print set_value('faclitiies');?>'></textarea>
					</p>
		</div>

                            <div class="grid_6" style="clear: both">
					<p>
						<label for="title">Peak Season</label>
						<select name="peakseason" id="peakseason" value='<?php print set_value('peakseason');?>'>
                        <option value="">Select </option>
                        <option value="yes">Yes </option>
                        <option value="no">No </option>

                        </select>
					</p>
				</div>ss 

				<div class="grid_16">
					
					<p class="submit">
						<input type="reset" value="Reset" />
						<input type="submit" value="Post" />
					</p>
				</div>
			</div>
 </form>
