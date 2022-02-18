<?php
include "database.php";

$sql = "SELECT * FROM personnes ORDER BY id DESC";
$result = mysqli_query($conn,$sql);