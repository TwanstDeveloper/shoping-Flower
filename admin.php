<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
</head>
<body>
     <div class="text-center">
    <h1 >Welcome Addmin Please Enter Info </h1></div>
</body>
</html>

<?php include 'nav.php';
     include 'config.php';
?>



<div class="card text-center m-auto justify-content-center" style="width: 18rem;">
<form action="insert.php" method="post">

     <input   required  type="text" name="names"  style="font-family:comic sans ms; border: 1px dotted black; border-radius: 5px; box-shadow: 0px 0px 5px 0px teal; margin: 5px;" placeholder="Enter Name Flower">
     
     <input  required  type="number" name="prices"  style="font-family:comic sans ms; border: 1px dotted black; border-radius: 5px; box-shadow: 0px 0px 5px 0px teal; margin: 5px;"  placeholder="Enter price Flower">

     <input  required  type="text" name="details" style="font-family:comic sans ms; border: 1px dotted black; border-radius: 5px; box-shadow: 0px 0px 5px 0px teal; margin: 5px;"   placeholder="Enter detail Flower">

   

     <input  required  type="text" name="colors" placeholder="Enter Color" style="font-family:comic sans ms; border: 1px dotted black; border-radius: 5px; box-shadow: 0px 0px 5px 0px teal; margin: 5px;">
  <input   required type="file" name="imgs"  ><br>
     <input type="submit" class="btn btn-success" value="ADD+" name="btn">

</form>
  </div>
 <div class="row m-2 justify-content-center">
<?php

$query=mysqli_query($ccoonn,"SELECT * FROM `flowers`");
while ($row=mysqli_fetch_assoc($query)) {
?>
  <div class="card" style="width: 18rem;">
  <img src="image/<?php echo $row['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo $row['name']?></h5>
    <p class="card-text"><b>Color:  <?php echo $row['color']?></b></p>
     <p class="card-text"><b>Price: <?php echo $row['price']?></b> </p>
      <p class="card-text">Detail: <?php echo $row['detail'] ?></p>
    <a href="admin.php?delete=<?php echo $row['id']?>" class="btn btn-danger w-100">DELET</a>
    
  </div>
</div>
<?php }; ?>
</div>

<?php

if (isset($_GET['delete'])) {
$dle=fltar($_GET['delete']);
$ss=mysqli_query($ccoonn,"DELETE FROM `flowers` WHERE `id`='$dle'");
if ($ss) {
     header("location:admin.php");
}
}


?>