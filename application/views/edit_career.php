<br /><br /><br /><h2>
Adde New vacency</h2>
<div id="content" style="border: 1px solid white; padding: 5px;" >
<?php echo form_open('careers/submit_careers') 
?><strong>
<label>Job Title</label>
<?php foreach($values as $val):?>
<input  type="hidden" name="id" value="<?php echo $val->id;?>"/>
<p><input  type="text" name="job_title" size="50" value="<?php echo $val->job_title;?>"/></p>
<label>Job descriptions</label>
<textarea class="ckeditor" name="description" id="dedscription">
<?php echo $val->description;?>
</textarea>
<br />
<?php endforeach;?>
<input  type="submit" name="submit" value="Update vacency"/>
<?php echo form_close();?>
</strong>
</div>