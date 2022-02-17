<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Gestion des employés</title>
</head>
<body>
<form class="container" action="creat.php" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="number" class="form-control" placeholder="ID" name="id">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="first" >
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="last">
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="Birth day" name="birth">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="department" name="depart">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Salary" name="salary">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="function" name="function">
    </div>
  <div>
    <input type="file" class="form-control-file" name="img">
  </div>
  </div>
  <button type="submit" class="btn btn-primary" name="creat">Submit</button>
</form>

</body>
</html>