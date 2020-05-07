<!-- Start Custom Section -->
<?php if($displaycustomsection) { ?>
<section class="customsection row-fluid">
   <article class="span3">
      <i class="fa fa-pencil-square-o"></i>
      <?php if($custombox1heading) { ?>
      <h5><?php echo $custombox1heading ?></h5>
      <?php } ?>
      <?php if($custombox1description) { ?>
      <p><?php echo $custombox1description ?></p>
      <?php } ?>
   </article>
   <article class="span3">
      <i class="fa fa-clock-o"></i>
      <?php if($custombox2heading) { ?>
      <h5><?php echo $custombox2heading ?></h5>
      <?php } ?>
      <?php if($custombox2description) { ?>
      <p><?php echo $custombox2description ?></p>
      <?php } ?>
   </article>
   <article class="span3">
      <i class="fa fa-check-square-o"></i>
      <?php if($custombox3heading) { ?>
      <h5><?php echo $custombox3heading ?></h5>
      <?php } ?>
      <?php if($custombox3description) { ?>
      <p><?php echo $custombox3description ?></p>
      <?php } ?>
   </article>
   <article class="span3">
      <i class="fa fa-file-text-o"></i>
      <?php if($custombox4heading) { ?>
      <h5><?php echo $custombox4heading ?></h5>
      <?php } ?>
      <?php if($custombox4description) { ?>
      <p><?php echo $custombox4description ?></p>
      <?php } ?>
   </article>
</section>
<?php } ?>
<!-- End Custom Section -->