<div class="container">
   <div class="row">
      <div class="col-md-6">
         <h1>Artists</h1>
         <?php
         	$artists = loadallartist();
         ?>
      </div>
   </div>
   <div class="row">
      <div class="infinite-container">
	  <div class="row">
         <!--  each row of artist thumbs --> 
			 <?php
			 foreach($artists['artists'] as $key=>$val) {
			 ?>
			 
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
				   <!-- 2 per row small screen, 4 per row large screen --> 
				   <div class="thumbnail text-center infinite-item">
					  <div class="row text-center">
						 <table align="center" style="height: 200px;">
							<tbody>
							   <tr>
								  <td valign="top" align="center">
									 <a href="artist-details.php?artistId=<?php echo $val['artistId'];?>"><img src="<?php echo $val['picture'];?>" alt="<?php echo $val['firstName']." ".$val['lastName'] ;?>"></a>
								  </td>
							   </tr>
							</tbody>
						 </table>
					  </div>
					  <div class="row caption text-center">
						 <a href="artist-details.php?artistId=<?php echo $val['artistId'];?>"><?php echo $val['firstName']." ".$val['lastName'] ;?></a>
					  </div>
				   </div>
				</div>
			 
			 <?php
			 }
			 ?>
		 </div>
         <!-- /row  DITO LOADAN -->
         <!--<span><a href="load-more-artists.php?type=&amp;page=2" class="infinite-more-link"></a></span>-->
         <!--  each row of artist thumbs --> 
         <!-- /row  -->
         <span></span>
      </div>
   </div>
</div>