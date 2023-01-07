<?php include 'config.php';include 'nav.php';
?>
<?php

$fname=fltar($_POST["fname"]);
$email=fltar($_POST["emails"]);
$citys=fltar($_POST["city"]);
$numbers=fltar($_POST["number"]);
$nfastpay=fltar($_POST["namefastpay"]);


$tk="INSERT INTO users(fname,email,city,phone,nfastpay) VALUES ('$fname','$email','$citys','$numbers',
    '$nfastpay')";
if (mysqli_query($ccoonn,$tk)) {
    echo "<p><script>
 var x=confirm();
 if(x== true){
    window.location.href='buy.php';
 }else{
     window.location.href='buy.php';
 }

    </script></p>";
  }?>

