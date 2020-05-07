<!-- Start Event Section -->
<?php if($displayeventsection) { ?>
<div class="events">
   <div class="container-fluid">
      <?php if($eventtagline) { ?>
      <h6><?php echo $eventtagline ?></h6>
      <?php } ?>
      <?php if($eventheading) { ?>
      <h2><?php echo $eventheading ?></h2>
      <?php } ?>
      <div class="row-fluid">
         <?php if($displayevent1box) { ?>
         <div class="span6">
            <div class="pull-left customimage">
               <a href="#">
               <img src="<?php echo $event1image ?>" />
               <span class="event-date">
               <?php if($event1day) { ?>
               <span class="day"><?php echo $event1day ?></span>
               <?php echo $event1monthyear ?>
               </span>
               <?php } ?>
               </a>
            </div>
            <div class="pull-left content">
               <?php if($event1title) { ?>
               <h3><a href="<?php echo $event1titleurl ?>"><?php echo $event1title ?></a></h3>
               <?php } ?>
               <?php if($event1location) { ?>
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $event1location ?></div>
               <?php } ?>
               <?php if($event1description) { ?>
               <div class="event-summary">
                  <p><?php echo $event1description ?></p>
               </div>
               <?php } ?>
               <div class="event-metas">
                  <?php if($event1viewmap) { ?>
                  <a class="event-map" href="<?php echo $event1viewmapurl ?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $event1viewmap ?>
                  </a>
                  <?php } ?>
                  <?php if($event1price) { ?>
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> <?php echo $event1price ?></span>
                  <?php } ?>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <?php } ?>
         <?php if($displayevent2box) { ?>
         <div class="span6">
            <div class="pull-left customimage">
               <a href="#">
               <img src="<?php echo $event2image ?>" />
               <span class="event-date">
               <?php if($event2day) { ?>
               <span class="day"><?php echo $event2day ?></span>
               <?php echo $event2monthyear ?>
               </span>
               <?php } ?>
               </a>
            </div>
            <div class="pull-left content">
               <?php if($event2title) { ?>
               <h3><a href="<?php echo $event2titleurl ?>"><?php echo $event2title ?></a></h3>
               <?php } ?>
               <?php if($event2location) { ?>
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $event2location ?></div>
               <?php } ?>
               <?php if($event2description) { ?>
               <div class="event-summary">
                  <p><?php echo $event2description ?></p>
               </div>
               <?php } ?>
               <div class="event-metas">
                  <?php if($event2viewmap) { ?>
                  <a class="event-map" href="<?php echo $event2viewmapurl ?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $event2viewmap ?>
                  </a>
                  <?php } ?>
                  <?php if($event2price) { ?>
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> <?php echo $event2price ?></span>
                  <?php } ?>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <?php } ?>
         <?php if($displayevent3box) { ?>
         <div class="span6">
            <div class="pull-left customimage">
               <a href="#">
               <img src="<?php echo $event3image ?>" />
               <span class="event-date">
               <?php if($event3day) { ?>
               <span class="day"><?php echo $event3day ?></span>
               <?php echo $event3monthyear ?>
               </span>
               <?php } ?>
               </a>
            </div>
            <div class="pull-left content">
               <?php if($event3title) { ?>
               <h3><a href="<?php echo $event3titleurl ?>"><?php echo $event3title ?></a></h3>
               <?php } ?>
               <?php if($event3location) { ?>
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $event3location ?></div>
               <?php } ?>
               <?php if($event3description) { ?>
               <div class="event-summary">
                  <p><?php echo $event3description ?></p>
               </div>
               <?php } ?>
               <div class="event-metas">
                  <?php if($event3viewmap) { ?>
                  <a class="event-map" href="<?php echo $event3viewmapurl ?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $event3viewmap ?>
                  </a>
                  <?php } ?>
                  <?php if($event3price) { ?>
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> <?php echo $event3price ?></span>
                  <?php } ?>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <?php } ?>
         <?php if($displayevent4box) { ?>
         <div class="span6">
            <div class="pull-left customimage">
               <a href="#">
               <img src="<?php echo $event4image ?>" />
               <span class="event-date">
               <?php if($event4day) { ?>
               <span class="day"><?php echo $event4day ?></span>
               <?php echo $event4monthyear ?>
               </span>
               <?php } ?>
               </a>
            </div>
            <div class="pull-left content">
               <?php if($event4title) { ?>
               <h3><a href="<?php echo $event4titleurl ?>"><?php echo $event4title ?></a></h3>
               <?php } ?>
               <?php if($event4location) { ?>
               <div class="event-venue"> <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $event4location ?></div>
               <?php } ?>
               <?php if($event4description) { ?>
               <div class="event-summary">
                  <p><?php echo $event4description ?></p>
               </div>
               <?php } ?>
               <div class="event-metas">
                  <?php if($event4viewmap) { ?>
                  <a class="event-map" href="<?php echo $event4viewmapurl ?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $event4viewmap ?>
                  </a>
                  <?php } ?>
                  <?php if($event4price) { ?>
                  <span class="event-price"><i class="fa fa-buysellads" aria-hidden="true"></i> <?php echo $event4price ?></span>
                  <?php } ?>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <?php } ?>
      </div>
      <a class="btn" href="<?php echo $CFG->wwwroot ?>/calendar/view.php">View All Events <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
   </div>
</div>
<?php } ?>
<!-- End Event Section -->