
        
<form action="http://localhost/yatrahelpline/trunk/index.php/spot/add" method="post" >
        
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Submit New Spot</h2>
					<!--<p class="error">Something went wronk.</p>-->
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
             

				<div class="grid_16">
					<p>
						<label>Data <small></small></label>
						<textarea name="data"></textarea>
					</p>
				</div>
                   <div class="grid_6">
					<p>
						<label for="title">Relation</label>
						<input type="text" name="relationid" />
					</p>
				</div>
                
                
                
                
                <div class="grid_5" style="clear:both">
					<p>
						<label for="title">Image1 <small></small></label>
						<input type="file" name="imageid1" />
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
						<select name="primary">
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