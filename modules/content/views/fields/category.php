<?php
$obj = obj('\modules\content\models\category');
$category = $obj->getTree($data[$field]);
?>



<?php if($category){?>
	  <div class="form-group">
	    <label ><?php echo $label;?></label>
		<p>
		    <select name="<?php echo $field;?>" class="select form-control">
		    	<?php echo $category;?>
		    </select>
	    </p>
	  </div>
	  <?php }?>