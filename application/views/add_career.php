<br /><br /><br /><h2>
Adde New vacency</h2>
<div id="content" style="border: 1px solid white; padding: 5px;" >
<?php echo form_open('careers/submit_careers') 
?><strong>
<label>Job Title</label>
<p><input  type="text" name="job_title" size="50" required/></p>
<label>Job descriptions</label>
<textarea class="ckeditor" name="description" id="dedscription"></textarea>
<br />
<input  type="submit" name="submit" value="Add vacency"/>
<?php echo form_close();?>
</strong>
</div>