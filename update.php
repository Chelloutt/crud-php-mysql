<?php include 'update2.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body>
<form class="container" action="update2.php" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control"  name="id" value="<?=$row['ID'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="first" value="<?=$row['First Name'] ?>" >
    </div>
    <div class="col">
      <input type="text" class="form-control"  name="last" value="<?=$row['Last Name'] ?>">
    </div>
    <div class="col">
      <input type="date" class="form-control"  name="birth" value="<?=$row['Date of Birth'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="depart" value="<?=$row['department'] ?>">
    </div>
    <div class="col">
      <input type="number" class="form-control" name="salary" value="<?=$row['Salary'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="function" value="<?=$row['Function'] ?>">
    </div>
  <div>
    <input type="file" class="form-control-file" name="img" value="<?=$row['Photo'] ?>">
  </div>
  </div>
  <button type="submit" class="btn btn-primary" name="creat">Save</button>
  <a href="read.php" class="link">Back</a>
</form>

</body>
</html>