<?php
  
  if(isset($_POST['submit'])){
    require 'conct.php';
    if(isset($_POST['image'])){
      $photo = $_POST['image'];}
    $name = $_POST['UserName'];
    $email = $_POST['email'];
    $contact = $_POST['number'];
    $shopname = $_POST['ShopName'];
    $description = $_POST['desc'];
    /*$shopaddress = $_POST['shopaddress'];
    $shoplatitude = $_POST['shoplatitude'];
    $shoplongitude = $_POST['shoplongitude'];*/
    if(empty($photo) || empty($email) || empty($name) || empty($contact) || empty($shopname)  || empty($description) ){
     
      echo "empty";
      exit();
    }
    else{
      $sql = "INSERT INTO shop_details (shopownername, shopemail, shopcontact, shopname, shopownerphoto, shopdescription) 
      VALUES ('$name', '$email', '$contact', '$shopname', '$photo', '$description')";
      if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
  
mysqli_close($conn);
}
else{
  echo "error2";
exit();
}
?>


  
