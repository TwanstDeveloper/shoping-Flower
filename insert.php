
<?php include 'config.php';include 'nav.php';


$name=fltar($_POST["names"]);
$price=fltar($_POST["prices"]);
$detail=fltar($_POST["details"]);
$rsm=fltar($_POST["imgs"]);
$color=fltar($_POST["colors"]);

$sql="INSERT INTO flowers(name,price,detail,color,image) VALUES ('$name','$price','$detail',
    '$color','$rsm')";
if (mysqli_query($ccoonn,$sql)) {
    echo "<p><script>
 var x=confirm();
 if(x== true){
    window.location.href='admin.php';
 }else{
     window.location.href='admin.php';
 }

    </script></p>";
  }?>


  