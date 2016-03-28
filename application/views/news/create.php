<section>
	<h2><?php echo $title; ?></h2>
	<?php 
		$attributes = array('class' => 'form');
		echo form_open('news/create', $attributes); 
	?>
	    <label for="title">Title</label>
	    <input type="text" name="title" />
	    <label for="text">Text</label>
	    <textarea name="text"></textarea>
	    <input type="submit" name="submit" class="button" value="Create news item" />
	</form>
	<div class="warning">
		<?php echo validation_errors(); ?>
	</div>

	<div class="success">
		<?php 
			if(isset($msg_success))
				echo "<p>$msg_success</p>";
		?>
	</div>
</section>