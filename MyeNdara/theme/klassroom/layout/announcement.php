<!-- Start Announcement Section -->
<?php if($displayannouncementsection) { ?>
<div class="announcement">
   <div class="container-fluid">
      <div class="content">
         <?php if($announcementheading) { ?>
         <h2><?php echo $announcementheading ?></h2>
         <?php } ?>
         <?php if($announcementtagline) { ?>   
         <p><?php echo $announcementtagline ?></p>
         <?php } ?>
      </div>
      <div class="con-buttons">
         <?php if($buttonreadmore) { ?>   
         <a href="<?php echo $buttonreadmoreurl ?>" title="Read more" target="_blank" class="btn btn-lg"><?php echo $buttonreadmore ?></a>
         <?php } ?>
         <?php if($buttonbuynow) { ?>   
         <a href="<?php echo $buttonbuynowurl ?>" title="Buy now" target="_blank" class="btn primary btn-lg"><?php echo $buttonbuynow ?></a>
         <?php } ?>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Announcement Section -->