      <div class="container" style='min-height:550px;'>
         <div class="row">
            <div class="row browse-works">
               <div class="infinite-container">
<!--- remove this after test-->
              <?php
              $limit = 16;
              $items = loadallitem($limit);
foreach($items['items'] as $key=>$val) {	  
			  ?>
                  <div class="infinite-item">
                     <a href="browse-item.php?artistId=<?php echo $val['artistId'];?>&itemId=<?php echo $val['itemId'];?>">
                     <img style='width:200px;' class="img-responsive" src="http://chelra.com/thumb/phpThumb.php?src=<?php echo urlencode($val['pictures'][0]);?>&w=200&q=85" alt="<?php echo $val['title'];?> by <?php echo $val['firstName'];?> <?php echo $val['lastName'];?>"></a>
                     <div class="caption">
                        <a href="browse-item.php?artistId=<?php echo $val['artistId'];?>&itemId=<?php echo $val['itemId'];?>">
                        <?php echo $val['title'];?><br><b><?php echo $val['firstName'];?> <?php echo $val['lastName'];?></b>								</a>
                     </div>
                  </div>
<?php
}
?>				  
<!-- weeee -->					  
               </div>
			   </div>
			   
	    
			   <?php
               $total = ceil($items['total'] / $limit);
               $page = 1;
               if($page<$total)
               {

            ?>
               <nav id="page-nav" style="display: none;">
                  <a class="infinite-more-link" href="load-more-browse-works.php?page=2&limit=<?php echo $limit;?>">More</a>
               </nav>
            <?php
               }
            ?>
            </div>
         </div>