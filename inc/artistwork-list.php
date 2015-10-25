<?php

$artist = $_GET['artistdet'];
?>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <h1><?php echo $artist['firstName']." ".$artist['lastName'];?></h1>
      </div>
   </div>
   <div class="row">
      <div class="infinite-container">
         <!--  each row of artist thumbs --> 
          <div class="row">
			<?php
			$limit = 16;
			$artistId = $_GET['artistId'];
			$items = loadallitembyartist($limit,$artistId);
			foreach($items['items'] as $key=>$val) {	
			 ?>			 
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
				   <!-- 2 per row small screen, 4 per row large screen --> 
				   <div class="thumbnail text-center infinite-item">
					  <div class="row text-center">
						 <table align="center" style="height: 200px;">
							<tbody>
							   <tr>
								  <td valign="top" align="center">
									 <a href="browse-item.php?artistId=<?php echo $val['artistId'];?>&itemId=<?php echo $val['itemId'];?>">
									 	<img src="http://chelra.com/thumb/phpThumb.php?src=<?php echo urlencode($val['pictures'][0]);?>&w=200&q=85" alt="<?php echo $val['title'];?>">
									 </a>
								  </td>
							   </tr>
							</tbody>
						 </table>
					  </div>
					  <div class="row caption text-center">
						 <a href="browse-item.php?artistId=<?php echo $val['artistId'];?>&itemId=<?php echo $val['itemId'];?>"><?php echo $val['title'];?></a>
					  </div>
				   </div>
				</div>			 
			 <?php
			 }
			 ?>
			</div>
	    
			   <?php

               $total = ceil($items['total'] / $limit);
               $page = 1;

               if($page<$total)
               {

            ?>		 
         <span><a href="load-more-artwork.php?page=2&limit=<?php echo $limit;?>&artistId=<?php echo $artistId;?>" class="infinite-more-link"></a></span>
         <?php
         		}
         ?>
      </div>
   </div>
</div>