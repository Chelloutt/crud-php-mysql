<?php 
include "read2.php"
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Personnes</h4><br>
			<?php if (isset($_GET['success'])) { ?>
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">ID</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Birth</th>
			      <th scope="col">Depart</th>
			      <th scope="col">Salary</th>
			      <th scope="col">Function</th>
			      <th scope="col">Photo</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['ID']?></td>
			      <td><?=$rows['First Name']?></td>
			      <td><?=$rows['Last Name']?></td>
			      <td><?=$rows['Date of Birth']?></td>
			      <td><?=$rows['department']?></td>
			      <td><?=$rows['Salary']?></td>
			      <td><?=$rows['Function']?></td>
			      <td><?php echo $rows['Photo']; ?></td>
				  <td><a href=""class="btn">Update</a></td>

			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
</body>
</html>