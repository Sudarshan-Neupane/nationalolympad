<div class="content">
<div class="content_contactus" style="margin: 10px;">
<h3><ul>News And Events </ul></h3>
<br />
<?php foreach($news as $news){?>
<h3>
<?php echo $news->name;?>
</h3>
<?php echo $news->date_time;?>
<br /><br />
<?php echo $news->description;?>
<br />
<hr />
<br />
<?php }?>

</div><!-- content_aboutus ends-->


</div>
</div>