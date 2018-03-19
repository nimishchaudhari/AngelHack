<?php

$pass="SELECT * FROM patients ORDER BY p_id DESC LIMIT 9";
$sql=mysqli_query($bd,$pass);
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
		{
				$msgID= $row['p_id'];
		$msgs= $row['name'];
		$disease=$row['disease'];

?>
<div id="<?php echo $msgID; ?>"  align="left" class="message_box" >
<?php





{


echo '<a href="../patient?id='.$msgID.'"><div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-person">
							

							<figure class="animate-box fadeInUp animated">
<div style="width:200px;height:auto;margin-left:auto;margin-right:auto; " >
							<img src="../images/user.png" style="max-width:200px;max-height:200px;width:auto;height:auto;"></img>
</div>
							</figure>
	<p class="vblr-lead animate-box fadeInUp animated" style="font-size:20px;text-align:center;font-weight:bold;">'.ucfirst($msgs).'</p>
				
<p class="vblr-lead animate-box fadeInUp animated" style="font-size:20px;text-align:center;">'.$disease.'</p>

					


						</div>


					</div></a>';


}



?> 
</div>

<?php
}
?>
