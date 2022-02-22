<?php 

if (isset($_GET['id'])) {
	include "database.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM personnes WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "databse.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $id = validate($_POST['ID']);
	$first = validate($_POST['first']);
	$last = validate($_POST['last']);
	$birth = validate($_POST['birth']);
	$depart = validate($_POST['depart']);
	$salary = validate($_POST['salary']);
	$function = validate($_POST['function']);
	$img = validate($_POST['img']);

	if (empty($first)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($last)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {

       $sql = "UPDATE personnes
               SET id='$id', first='$first', last='$last', birth='$birth', depart='$depart', salary='$salary', function='$function', 
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: read.php?success=successfully updated");
       }else {
          header("Location: update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}