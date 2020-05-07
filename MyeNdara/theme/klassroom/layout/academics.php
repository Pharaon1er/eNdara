<!-- Start Academic Section -->
<?php if($displaywelcomesection) { ?>
<div class="academics">
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span7">
            <?php if($welcometagline) { ?>
            <h6><?php echo $welcometagline ?></h6>
            <?php } ?>
            <?php if($welcomeheading) { ?>
            <h1><?php echo $welcomeheading ?></h1>
            <?php } ?>
            <?php if($welcomedescription) { ?>    
            <p><?php echo $welcomedescription ?></p>
            <?php } ?>
            <?php if($welcomelistone) { ?>       
            <div class="item_featured">
               <span class="item_number">1</span>	
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="<?php echo $welcomelistoneurl ?>"><?php echo $welcomelistone ?></a></h4>
                  </div>
               </div>
            </div>
            <?php } ?>
            <?php if($welcomelisttwo) { ?>
            <div class="item_featured">
               <span class="item_number">2</span>	
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="<?php echo $welcomelisttwourl ?>"><?php echo $welcomelisttwo ?></a></h4>
                  </div>
               </div>
            </div>
            <?php } ?>
            <?php if($welcomelistthree) { ?>
            <div class="item_featured">
               <span class="item_number">3</span>	
               <div class="item_info">
                  <div class="item_header">
                     <h4 class="item_title"><a href="<?php echo $welcomelistthreeurl ?>"><?php echo $welcomelistthree ?></a></h4>
                  </div>
               </div>
            </div>
            <?php } ?>    
         </div>
         <div class="span5 welcome-image"><img class="img-responsive" src="<?php echo $CFG->wwwroot ?>/theme/klassroom/pix/welcomebg.png" alt="" /></div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Academic Section -->