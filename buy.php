<?php include 'nav.php';
     include 'config.php';
?>
<div class="row m-2 justify-content-center">  
<?php


$query=mysqli_query($ccoonn,"SELECT * FROM `flowers`");

while ($row=mysqli_fetch_assoc($query)) {
?>
  <div class="card m-2" style="width: 18rem;">
  <img src="image/<?php echo $row['image']?>" class="card-img-top" alt="...">
  <form class="m-2" action="wait.php" method="post">

    <input type="text"  style="margin: 5px; background-color: #ffe135; color: black; font-family: comic sans ms; border-radius:10px; " name="fname" placeholder="FULL NAME" required>

     <input type="email"  style="margin: 5px; background-color: #ffe135; color: black; font-family: comic sans ms; border-radius:10px; " name="emails" placeholder="EMAIL" required>

 <input type="text"  style="margin: 5px; background-color: #ffe135; color: black; font-family: comic sans ms; border-radius:10px; " name="city" placeholder="CITY" required>

      <input type="text"  style="margin: 5px; background-color: #ffe135; color: black; font-family: comic sans ms; border-radius:10px; " name="number" placeholder="PHONE NUMBER" required>

       <input type="text"  style="margin: 5px; background-color: #ffe135; color: black; font-family: comic sans ms; border-radius:10px; " name="namefastpay" placeholder="NAME YOUR FASTPAY" required><BR>

       <b><span style="margin: 20px;">SEND MONE FOR FASTPAY</span></b>

       <br><span style="margin:60px;">0750-119-42-58</span><br>

       <input type="submit" value="SEND" class="btn btn-info w-100" >
  </form>
</div>
<?php }; ?>
</div>