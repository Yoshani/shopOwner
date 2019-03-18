
    <?php

if(isset($_POST['search'])){
    require 'conct.php';
	$q = $_POST['query'];
	$query = $mysqli->query($conn,"SELECT * FROM `shop_details` WHERE `shopdescription` LIKE '%$q%' ") or die(mysqli_error($conn)); 
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
		while($row = mysqli_fetch_array($query)){
		$s = $row['shopcontact']; // Replace column_to_display with the column you want the results from
                $output .= '<h2>'.$s.'</h2><br>';
                echo $output;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
    </head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<form method="POST" action="search.php">
			<input type="text" name="query" placeholder="query">
			<input type="submit" name="search" value="Search">
		</form>
        <?php
          
          ?>
	</body>
</html>