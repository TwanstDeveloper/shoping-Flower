<?php include 'nav.php';
     include 'config.php';
?>

<div class="row m-2 justify-content-center">
<?php
$iddetails=fltar($_GET['details']);
$query=mysqli_query($ccoonn,"SELECT * FROM `flowers` WHERE `id`='$iddetails'");
while ($row=mysqli_fetch_assoc($query)) {
?>
  <div class="card" style="width: 18rem;">
  <img src="image/<?php echo $row['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo $row['name']?></h5>
    <p class="card-text"><b>Color:  <?php echo $row['color']?></b></p>
     <p class="card-text"><b>Price: <?php echo $row['price']?>$</b> </p>
      <p class="card-text">Detail: <?php echo $row['detail'] ?></p>
     <a href="index.php" class="btn btn-warning w-100">Home</a>
  </div>
</div>
<?php }; ?>
</div>