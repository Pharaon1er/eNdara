<!-- Start Top Header Section -->
<div class="top-header">
   <div class="container-fluid">
      <!-- Start Top Social Section -->
      <ul class="social pull-left">
         <?php if($hasfacebook) { ?>
         <li>
            <a href="<?php echo $hasfacebook; ?>" target="_blank">
            <i class="fa fa-facebook"></i>
            </a>
         </li>
         <?php } ?>
         <?php if($hastwitter) { ?>
         <li>
            <a href="<?php echo $hastwitter; ?>" target="_blank">
            <i class="fa fa-twitter"></i>
            </a>
         </li>
         <?php } ?>
         <?php if($hasgoogleplus) { ?>    
         <li>
            <a href="<?php echo $hasgoogleplus; ?>" target="_blank">
            <i class="fa fa-google-plus"></i>
            </a>
         </li>
         <?php } ?>
         <?php if($haspinterest) { ?>
         <li>
            <a href="<?php echo $haspinterest; ?>" target="_blank">
            <i class="fa fa-pinterest"></i>
            </a>
         </li>
         <?php } ?>   
         <?php if($hasinstagram) { ?>
         <li>
            <a href="<?php echo $hasinstagram; ?>" target="_blank">
            <i class="fa fa-instagram"></i>
            </a>
         </li>
         <?php } ?>   
         <?php if($hasyoutube) { ?>
         <li>
            <a href="<?php echo $hasyoutube; ?>" target="_blank">
            <i class="fa fa-youtube"></i>
            </a>
         </li>
         <?php } ?>   
         <?php if($hasflickr) { ?>
         <li>
            <a href="<?php echo $hasflickr; ?>" target="_blank">
            <i class="fa fa-flickr"></i>
            </a>
         </li>
         <?php } ?> 
         <?php if($haswhatsapp) { ?>
         <li>
            <a href="<?php echo $haswhatsapp; ?>" target="_blank">
            <i class="fa fa-whatsapp"></i>
            </a>
         </li>
         <?php } ?>  
         <?php if($hasskype) { ?>
         <li>
            <a href="<?php echo $hasskype; ?>" target="_blank">
            <i class="fa fa-skype"></i>
            </a>
         </li>
         <?php } ?>  
         <?php if($hasgithub) { ?>
         <li>
            <a href="<?php echo $hasgithub; ?>" target="_blank">
            <i class="fa fa-github"></i>
            </a>
         </li>
         <?php } ?>  
      </ul>
      <!-- End Top Social Section -->
      <div class="loginsection pull-right">
         <?php if(isloggedin()){
            if(isguestuser()){
            ?>
         <div class="line">
            <a class="login" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
            <?php echo get_string('login') ?>
            </a>
         </div>
         <?php
            }else{
            ?>
         <div class="line usermenu-con">
            <?php echo $OUTPUT->user_menu(); ?>
         </div>
         <?php
            }
            }else{ ?>	
         <?php
            if(!empty($CFG->registerauth)){
            	 $authplugin = get_auth_plugin($CFG->registerauth);
            	 if($authplugin->can_signup()){
            		
            		?>
         <div class="line">
            <a class="signup" href="<?php echo $CFG->wwwroot.'/login/signup.php' ?>">Register</a>
         </div>
         <?php
            }
            }
            ?>
         <div class="line">
            <a class="login" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
            <?php echo get_string('login') ?>
            </a>
         </div>
         <?php
            }
            ?>
      </div>
      <!-- end div .loginsection -->
      <div class="pull-right">
         <?php echo $OUTPUT->navbar_plugin_output(); ?>
      </div>
      <?php if($contactno) { ?>
      <div class="contact pull-right">
         <i class="fa fa-phone"></i> <?php echo $contactno ?>
      </div>
      <?php } ?>
   </div>
</div>
<!-- End Top Header Section -->