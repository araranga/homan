<div class="container hidden-print">
   <div class="row artist-item ">
      <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6 ">
         <div class="row artist-column">
            <a id="image-link" href="<?php echo $_GET['itemdata']['pictures'][0];?>" data-toggle="lightbox">
            <img id="page-image" class="img-responsive" src="http://chelra.com/thumb/phpThumb.php?src=<?php echo urlencode($_GET['itemdata']['pictures'][0]);?>&h=500" alt="<?php echo $_GET['itemdata']['title'];?> by <?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?>">
            </a>
            <div id="enlarge-link"><small><em>click image above to enlarge</em></small></div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
         <div class="row artist-column info-column">
            <ul class="item-info">
               <li class="list-group-item item-info">
                  <a href="#">
                     <h3><?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?></h3>
                  </a>
               </li>
               <li class="list-group-item item-info">
                  <table>
                     <tbody>
                        <tr>
                           <td class="artist-item-label">Title:</td>
                           <td><?php echo $_GET['itemdata']['title'];?></td>
                        </tr>
                     </tbody>
                  </table>
               </li>
               <li class="list-group-item item-info">
                  <table>
                     <tbody>
                        <tr>
                           <td class="artist-item-label">Inventory#:</td>
                           <td><?php echo $_GET['itemdata']['scancode'];?></td>
                        </tr>
                     </tbody>
                  </table>
               </li>
               <?php
               if($_GET['itemdata']['height']!="0.00" || $_GET['itemdata']['width']!="0.00"):
               ?>
               <li class="list-group-item item-info">
                  <table>
                     <tbody>
                        <tr>
                           <td class="artist-item-label">Size:</td>
                           <td><?php echo $_GET['itemdata']['height'];?>" x <?php echo $_GET['itemdata']['width'];?>"</td>
                        </tr>
                     </tbody>
                  </table>
               </li>
               <?php
               endif;
               ?>
               <?php
               if($_GET['itemdata']['frameHeight']!="0.00" || $_GET['itemdata']['frameWidth']!="0.00"):
               ?>               
               <li class="list-group-item item-info">
                  <table>
                     <tbody>
                        <tr>
                           <td class="artist-item-label">Frame Size:</td>
                           <td><?php echo $_GET['itemdata']['frameHeight'];?>" x <?php echo $_GET['itemdata']['frameWidth'];?>"</td>
                        </tr>
                     </tbody>
                  </table>
               </li>
               <?php
               endif;
               ?>
               <li class="list-group-item item-info">
                  <table>
                     <tbody>
                        <tr>
                           <td class="artist-item-label">Medium:</td>
                           <td><?php echo $_GET['itemdata']['medium'];?></td>
                        </tr>
                     </tbody>
                  </table>
               </li>
               
               <?php
               if($_GET['itemdata']['retailPrice']=="0.00"){
               ?>
               <li class="list-group-item item-info">
                  PRICE ON REQUEST   &nbsp;
                  <a href="#price-on-request-popup" data-toggle="modal"><small><span class="mixed-case">(why no price?)</span></small></a>
               </li>
               <?php
                }
                else 
                {
                  ?>
               <li class="list-group-item item-info">
                  <table>
                     <tbody>
                        <tr>
                           <td class="artist-item-label">Price:</td>
                           <td>₱<?php echo number_format($_GET['itemdata']['retailPrice'],2); ?></td>
                        </tr>
                     </tbody>
                  </table>
               </li>
                  <?php
                }
               ?>
 					
               <li class="list-group-item item-info">
                  <button type="button" data-toggle="modal" data-target="#inquire" class="btn btn-primary btn-sm wide-button">Inquire</button>
                  <button type="button" onclick="window.print(); return false;" class="btn btn-primary btn-sm wide-button">Print</button>
                  <button type="button" class="btn btn-primary dropdown-toggle btn-sm wide-button" data-toggle="dropdown">Share<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-share" role="menu">
                     <li><a href="#email-to-friend" data-toggle="modal">Email To A Friend</a></li>
                     <li><a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo urlencode($_GET['itemdata']['pictures'][0]);?>&url=<?php echo urlencode(pageurl()); ?>&description=<?php echo urlencode($_GET['itemdata']['title']." by ".$_GET['itemdata']['firstName']." ".$_GET['itemdata']['lastName']);?>" target="_blank">Pinterest</a></li>
                     <li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(pageurl()); ?>" target="_blank">Facebook</a></li>
                     <li><a href="http://twitter.com/home?status=<?php echo urlencode(pageurl()); ?>" target="_blank">Twitter</a></li>
                  </ul>
               </li>
               <li class="list-group-item item-info">
                  <a href="artist-works.php?artistId=<?php echo $_GET['artistId'];?>">
                  <button type="button" class="btn btn-primary btn-sm widest-button">More Work By This Artist</button>
                  </a>                   
               </li>
<li class="list-group-item item-info">
   <div class="row">
      <ul class="list-inline" id="multiple-thumbs">
         <?php 
            if(count($_GET['itemdata']['pictures'])>=2):
            foreach($_GET['itemdata']['pictures'] as $pics)
            {
         ?>
         <li><a class="thumb" href="http://chelra.com/thumb/phpThumb.php?src=<?php echo urlencode($pics);?>&w=500&q=95" data-zoom-image="<?php echo $pics; ?>">
            <img class="img-responsive" src="http://chelra.com/thumb/phpThumb.php?src=<?php echo urlencode($pics);?>&w=150&h=100&q=95" alt="">
            </a>
         </li>
         <?php
            }
            endif;
         ?>
      </ul>
   </div>
</li>
             
               
				<?php include("forms/det-inquire-form.php"); ?>
				<?php include("forms/det-email-form.php"); ?>
				<?php include("forms/det-ship-form.php"); ?>
				<?php include("forms/det-price-req-form.php"); ?>
            </ul>
         </div>
         <!-- /row  -->

      </div>

<?php
$next = loaditemnext();
$prev = loaditemprev();
$tots = loadallitembyartist(1,$_GET['artistId']);
?>
            <?php 
			if($tots>1)
			{
            if($prev!='')
            {
            ?>
            <a class="left carousel-control hidden-print" href="browse-item.php?artistId=<?php echo $_GET['artistId'];?>&itemId=<?php echo $prev; ?>">
               <span class="glyphicon glyphicon-chevron-left"></span>
            </a>    
            <?php
            }
            ?>  

            <?php 
            if($next!='')
            {
            ?>

            <a class="right carousel-control hidden-print" href="browse-item.php?artistId=<?php echo $_GET['artistId'];?>&itemId=<?php echo $next; ?>">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <?php
            }
			}
            ?>  

   </div>
   <!--  /row  -->
   <!--  bio, photo...  -->
   <div class="row artist-bio">
      <div class="col-sm-2 col-xs-12 artist-photo-block">
         <div class="artist-photo">
            <img class="img-responsive" src="<?php echo $_GET['artistdata']['picture'];?>" alt="<?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?>">
         </div>
      </div>
      <div class="col-sm-4 col-xs-12 artist-links-block item-info">
         <div class="text-left">
            We only feature selected examples online. 
            Please contact the gallery for additional works or if you would like to be notified of new arrivals by this artist.
			<?php
			if($_GET['artistdata']['biography']!='')
			{
			?>
            <br/><button data-target="#biography" data-toggle="modal" type="button" class="btn btn-primary btn-sm wide-button">VIEW BIOGRAPHY</button>
			<?php
			}
			?>
         </div>
      </div>
      <div class="col-sm-6 col-xs-12">
         <?php echo nl2br($_GET['artistdata']['description']);?>
      </div>
   </div>
</div>