<?php
if (isset ($_POST['creat'])){
    include "./database.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
    $id = validate($_POST['id']);
	$first = validate($_POST['first']);
	$last = validate($_POST['last']);
	$birth = validate($_POST['birth']);
	$depart = validate($_POST['depart']);
	$salary = validate($_POST['salary']);
	$function = validate($_POST['function']);
	$img = validate($_POST['img']);

    $user_data = 'id='.$id. '&first='.$first. '&last='.$last. '&birth='.$birth. '&depart='.$depart. '&salary='.$salary. 'function='.$function. 'img='.$img;
echo $user_data;

$sql = "INSERT INTO `personnes`(`ID`, `First Name`, `Last Name`, `Date of Birth`, `department`, `Salary`, `Function`, `Photo`)
 VALUES
 ('$id','$first','$last','$birth','$depart',$salary,'$function','$img')";
$result = mysqli_query($conn, $sql);




}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>