<div class="content">
<div class="content_up">
    <div class="content_up_left">
    <div class="box1">
     <?php foreach($chairman as $cm){?>   
    <h2><?php echo $cm->title;?></h2>
    <div class="inner_box">
        <img src="<?php echo base_url()?>images/<?php echo $cm->image;?>">
    </div><!-- inner_box ends-->
    <br> <?php echo substr($cm->description, 0,500);?>
     <?php } ?>
    <p id ="hide"style="color: red" >Read More ++ </p>
    </div>
            <!--Read More-->
        <div class="box11"  >
             <?php foreach($chairman as $cm){?>   
                <h2 style="color:green"><?php echo $cm->title;?></h2>
            <div class="inner_box">
                <img src="<?php echo base_url()?>images/<?php echo $cm->image;?>"/>
            </div><!-- inner_box ends-->
            <br/> <?php echo $cm->description;?>
             <?php } ?>

            <p id ="show"style="color: red" >Less-- </p>
            </div>

    </div><!-- content_up_left ends-->
    <div class="content_up_right">
    <?php foreach($welcome as $wel){
     ?>   
        <h2><?php echo strtoupper($wel->pagetitle);?></h2>
       <?php echo substr($wel->description,0,1800);?>
    <?php } ?>
        <div class="learn_div" id="learn_div"><h1>LEARN MORE</h1></div>
    </div><!-- content_up_right ends-->
    
    <!--read more -->
        <div class="content_up_right_more">
       <?php foreach($welcome as $wel){
        ?>   
           <h2><?php echo strtoupper($wel->pagetitle);?></h2>
          <?php echo $wel->description;?>
       <?php } ?>
          <div class="learn_div" id="learn_div_less"><h1>LESS -- </h1></div>
       </div>
    
</div><!-- content_up ends-->
<div class="content_down">
<div class="b1">
    <?php foreach($first_testa as $ft){?>
    <h2><?php echo strtoupper($ft->title);?></h2>
    <div class="b1_inner"><img src="<?php echo base_url();?>images/<?php echo $ft->image;?>" height="119px" width="280px"/></div><!-- b1_inner ends-->
    <?php echo substr($ft->description,0,200);?>
    <?php } ?>
     <div id="firsttest"><p style="color:green"> Read More++ </div>
</div><!-- b1 ends-->
<div class="b1">
<?php foreach($second_testa as $st){?>
<h2><?php echo strtoupper($st->title);?></h2>
<div class="b1_inner"><img src="<?php echo base_url();?>images/<?php echo $st->image;?>" height="119px" width="280px"/></div><!-- b1_inner ends-->
<?php echo substr($st->description,0,200);?>
<?php } ?>
 <div id="secondtest"><p style="color:green"> Read More++ </div>
</div>
            <!--For the div hide and show-->
            <div class="c1">
                <?php foreach($first_testa as $ft){?>
                <h2><?php echo strtoupper($ft->title);?></h2>
                <div class="b1_inner"><img src="<?php echo base_url();?>images/<?php echo $ft->image;?>" height="119px" width="280px"/></div><!-- b1_inner ends-->
                <?php echo $ft->description;?>
                <?php } ?>
                <div id="firstless"><p style="color:green"> Less-- </div>
            </div><!-- b1 ends-->
            <div class="c1">
            <?php foreach($second_testa as $st){?>
            <h2><?php echo strtoupper($st->title);?></h2>
            <div class="b1_inner"><img src="<?php echo base_url();?>images/<?php echo $st->image;?>" height="119px" width="280px"/></div><!-- b1_inner ends-->
            <?php echo $st->description;?>
            <?php } ?>
            <div id="secondless"><p style="color:green"> Less-- </div>
            </div>

<div class="last_div">
<h2>LATEST NEWS AND EVENTS</h2>
<?php    foreach ($news_event as $news){?>
<a href="welcome/newsevent/<?php echo $news->id;?>" style="text-decoration: none;">
<div class="last1">
<h2><?php echo $news->date_time;?></h2><br>
<h5 style="float: left"><stong><?php echo $news->name;?></stong></h5>

<p><?php echo substr($news->description,0,195);?></p>
</div><!-- last1 ends-->
</a>
<?php } ?>

</div><!-- last_div ends-->
</div><!-- content_down ends-->
</div><!-- content ends-->
