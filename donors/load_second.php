<?php
$last_msg_id=$_GET['last_msg_id'];
 $sql=mysqli_query($bd,"SELECT * FROM donors WHERE d_id < '$last_msg_id' ORDER BY donated DESC LIMIT 10");
 $last_msg_id="";

		while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
		{
		$msgID= $row['d_id'];
		$msgs= $row['name'];
$hospital=$row['donated'];
	?>
		
		<div id="<?php echo $msgID; ?>"  align="left" class="message_box" >
<?php





{


echo '<a href="#"><div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-person">
							<figure class="animate-box fadeInUp animated">
<div style="width:200px;height:200px;margin-left:auto;margin-right:auto; " >
							<img src="../images/user.png" style="max-width:200px;max-height:200px;width:auto;height:auto;"></img>
</div>
							</figure>
							

							
	<p class="vblr-lead animate-box fadeInUp animated" style="font-size:20px;text-align:center;font-weight:bold;">'.ucfirst($msgs).'</p>
				
<p class="vblr-lead animate-box fadeInUp animated" style="font-size:20px;text-align:center;">'.$hospital.'</p>

						</div>
					</div></a>';


}



?> 
</div>
		

<?php
}
?>
