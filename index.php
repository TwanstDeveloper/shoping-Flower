<?php include 'nav.php';
     include 'config.php';
?>

<!--Website Html-->
<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://cdn-icons-png.flaticon.com/128/4098/4098389.png" alt="Bootstrap" width="30" height="24">
      <span class="text-danger" style="font-family: comic sans ms ; font-size: 40px;">Flower Shoping Online</span>
    </a>
  </div>
</nav>
 <div class="row m-2 justify-content-center">
<?php

$query=mysqli_query($ccoonn,"SELECT * FROM `flowers`");
while ($row=mysqli_fetch_assoc($query)) {
?>
  <div class="card" style="width: 18rem;">
  <img src="image/<?php echo $row['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo $row['name']?></h5>
    <div class="row justify-content-center">
    <a href="detail.php?details=<?php echo $row['id']?>" class="btn btn-success w-50 m-2">Details</a><br>
    <a href="buy.php?details=<?php echo $row['id']?>" class="btn btn-warning w-50 m-2"><img src="image/i1.png" width="50px"></a></div>
  </div>
</div>
<?php }; ?>
</div>
