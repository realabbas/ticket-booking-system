
 			<div class="listview_1_of_3 images_1_of_3">
					<h3>Book Match Tickets</h3>
					
					<?php
          	 $today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select * from  tbl_match where status='0' order by rand() limit 3");
						
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
            <div class="content-left">
					<div class="listimg listimg_1_of_2">
					<?php
						
						?>
						 <a href="about.php?id=<?php echo $m['ticket_id'];?>">
						 <img src="<?php echo $m['image'];?>"></a>
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap1">
										 <a href="about.php?id=<?php echo $m['ticket_id'];?>" 
										 class="link4"><?php echo $m['ticket_name'];?></a><br>
                                        <span class="data">Match Date:<?php echo $m['match_date'];?></span><br>
                                        Type:<b><?php echo $m['type'];?></b><br>
                                        Description: <b><?php echo $m['desc'];?></b><br>
                                    </div>
					</div>
					
					<div class="clear"></div>
					<hr/>
				</div>
  	    <?php
  	    	}
  	    	?>

</div>		
	<div class="clear"></div>		
			
