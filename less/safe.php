							<?php
$sql="SELECT * FROM videos limit 3";
$pass_sql=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($pass_sql,MYSQLI_ASSOC)){
echo'<div class="col-md-4 col-sm-6 col-xs-12">';
echo'<div class="fh5co-person">	';
echo'<figure class="animate-box fadeInUp animated">';
$v_id=$row['link'];


$sub2 = substr($v_id,0,-20);
$msg2="https://www.youtube.com";

$sub = substr($v_id,0,-20);
$msg="http://www.youtube.com";
if($sub==$msg)
{
$mess=substr($v_id,31);
echo '<iframe width="350" height="200px" style="margin:10px;" src="//www.youtube.com/embed/'.$mess.'" frameborder="0" allowfullscreen></iframe>';
}
else if($sub2==$msg2)
{
$mess=substr($v_id,32);
echo '<iframe width="350px" height="200px" style="margin:10px" src="//www.youtube.com/embed/'.$mess.'" frameborder="0" allowfullscreen></iframe>';
}
echo'</figure>';
echo'</div>';
echo'</div>';

}

							?>