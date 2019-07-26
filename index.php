<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Question Answer Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
       

  <h1>
your question is here:--Go to Bottom Of the page For The Solution of your Question.

</h1>  

<hr>


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
if(mysqli_num_rows($result)>0)
{
	$i=1;
	while($row=mysqli_fetch_assoc($result))
	{
		$res=$res.'<div class="lead">';
		$res=$res.'<i>';
		$res=$res."Question No ".$i;
		$res=$res.'<h>:-</h>';
		$res=$res.$row['msgs'];
		$res=$res.'</i>';	
		
		$res=$res.'</div>';
		$res=$res.'<br>';
		$i=$i+1;
	}
}
echo $res;



?>
<hr>


<?php
$pagesql="select * from msg";

$pageres=mysqli_query($con,$pagesql);

$count=mysqli_num_rows($pageres);

$a=$count/5;

$a=ceil($a);

for($b=1;$b<=$a;$b++)
	
	{
		
		?>
		
	<a href="index.php?page=<?php echo $b ?> "> <?php echo "Page ".$b; ?> </a>
		
		
		<?php
		
	}


?>



<hr>
<hr>

          <!-- this comment is for sending form request -->
        

          <!-- Single Comment -->
 
          <!-- Comment with nested comments -->
         

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
           <div class="card my-4">
            <h5 class="card-header">Ask Your Question:</h5>
            <div class="card-body">
              <form action="insert.php" method="post">
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Side Widget -->
       <div class="card my-4">
            <h5 class="card-header">Solution:</h5>
            <div class="card-body">
              <form action="insert.php" method="post">
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright@Solution2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
