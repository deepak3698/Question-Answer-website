<?php

$page=$_GET['page'];
if($page==""||$page=="1")
{
	$page1=0;
}
else
{
	$page1=($page*5)-5;
}
include "conn.php";
$sql="SELECT * from msg limit $page1,5";
$res=" ";
$result=mysqli_query($con,$sql);
$i=1;
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$res=$res.'<div class="lead">';
		
		$res=$res.$i;
		$res=$res.'<h>:-</h>';
		$res=$res.$row['msgs'];
		$res=$res.'</div>';
		$res=$res.'<br>';
		$i=$i+1;
	}
}
echo $res;



?>

<?php
$pagesql="select * from msg";

$pageres=mysqli_query($con,$pagesql);

$count=mysqli_num_rows($pageres);

$a=$count/5;

$a=ceil($a);

for($b=1;$b<=$a;$b++)
	
	{
		
		?>
		
		<a href="index.php?page=<?php echo $b ?> "><?php echo "next".$b; ?>  </a>
		
		
		<?php
		
	}


?>
