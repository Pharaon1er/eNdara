<!-- Start Internal Banner Section -->
<div class="internalbanner">
   <div class="container-fluid">
      <?php echo $html->heading; ?>
      <?php if($internalbannertagline) { ?>
      <p class="tagline"><?php echo $internalbannertagline ?></p>
      <div class="mini-block"></div>
      <?php } ?>
   </div>
</div>
<!-- End Internal Banner Section -->
<?php require_once(dirname(__FILE__).'/breadcrumb.php'); ?>