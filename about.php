<?php include('header.php');
	$qry2=mysqli_query($con,"select * from tbl_movie where ticket_id='".$_GET['id']."'");
	$match=mysqli_fetch_array($qry2);
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3><?php echo $match['ticket_name']; ?></h3>	
							<div class="about-top">	
								<div class="grid images_3_of_2">
									<img src="<?php echo $match['image']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px">Type : <?php echo $match['cast']; ?></p>
									<p class="p-link" style="font-size:15px">Match Date : <?php echo date('d-M-Y',strtotime($match['match_date'])); ?></p>
									<p style="font-size:15px"><?php echo $match['desc']; ?></p>
									<a href="<?php echo $match['video_url']; ?>" target="_blank" class="watch_but">Watch Match</a>
								</div>
								<div class="clear"></div>
							</div>
							<?php $s=mysqli_query($con,"select DISTINCT theatre_id from tbl_shows where ticket_id='".$match['ticket_id']."'");
							if(mysqli_num_rows($s))
							{?>
							<table class="table table-hover table-bordered text-center">
							<?php
								
								while($shw=mysqli_fetch_array($s))
								{
									$t=mysqli_query($con,"select * from tbl_theatre where id='".$shw['theatre_id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
										<td>
											<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										<td>
											<?php $tr=mysqli_query($con,"select * from tbl_shows where ticket_id='".$match['ticket_id']."' and theatre_id='".$shw['theatre_id']."'");
											while($shh=mysqli_fetch_array($tr))
											{
												$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shh['st_id']."'");
												$ttme=mysqli_fetch_array($ttm);
												
												?>
												
												<a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['ticket_id'];?>&theatre=<?php echo $shw['theatre_id'];?>"><button class="btn btn-default"><?php echo date('h:i A',strtotime($ttme['start_time']));?></button></a>
												<?php
											}
											?>
										</td>
									</tr>
									<?php
								}
							?>
						</table>
							<?php
							}
						
							else
							{
								?>
								<h3>No Ticket Available</h3>
								<?php
							}
							?>
						
					</div>			
				<?php include('match_sidebar.php');?>
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>