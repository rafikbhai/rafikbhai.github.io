<?php
function subname(){
include("config.php");
$db="select * from category where cat_pid=0";
$query=mysqli_query($link,$db);
while($row=mysqli_fetch_assoc($query)){
$brand='<p>'.$row['cat_nm'].'</p>';
echo $brand;	

}
return $brand;
}
//echo subname();
?>