

<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Display Spots</h2>
					<!--<p class="error">Something went wronk.</p>-->

                                         <span style="color:red">
                                        <?php echo validation_errors(); ?>
                                        </span>
				</div>
<table>
    <tr>
            <th>s</th>
            <th>Title</th>
            <th>Keyword</th>
            <th>Description</th>
            <th>Name</th>
            <th>Data</th>
            <th>Relationid</th>
            <th>Primary</th>
            <th>Actions</th>
    </tr>


    <?php
    $i=0;
    foreach($query as $row){
    $i++;
    ?>
    <tr>
            <td><?php echo $i;  ?></td>
            <td><?php  echo $row->title;  ?></td>
            <td><?php  echo $row->keyword;  ?></td>
            <td><?php  echo $row->descr;  ?></td>
            <td><?php  echo $row->name;  ?></td>
            <td><?php  echo $row->data;  ?></td>
            <td><?php  echo $row->relationid;  ?></td>
            <td><?php  echo $row->primary;  ?></td>
            <td>
                <a href="<?php echo base_url('index.php/displayspot/edit/');  ?>/<?php echo $row->spotid; ?>" style="text-decoration: none;color: red">Edit</a>
                
            </td>
    </tr>

    <?php
    } ?>
</table>

				
			</div>
