
 <div class="row">
<?php
			   include("api.php");
			$limit = $_GET['limit'];
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
   $page = $_GET['page'];
   $pagex = $_GET['page'];
   $pagenext = $page + 1;
   if($pagenext<=$total)
   {
   ?>
   load-more-artwork.php?page=<?php echo $pagenext;?>&limit=<?php echo $limit;?>&artistId=<?php echo $artistId;?><br/>
 <span><a href="load-more-artwork.php?page=<?php echo $pagenext;?>&limit=<?php echo $limit;?>&artistId=<?php echo $artistId;?>" class="infinite-more-link"></a></span>

   <?php
   }
   ?>