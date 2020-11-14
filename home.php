<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: login.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>

	  <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      

      <style type= "text/css">
         .logout:hover{
            color: red !important;
         }
      </style>

<title>Welcome - <?php echo $userRow['userName' ]; ?></title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add Meal</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="invoice.php">Invoice</a>
      </li>
      <li class="nav-item">
         <a class="nav-link logout" href="logout.php?logout">Log-out</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
<body >
           <H2>Hi <?php echo $userRow['userName' ]; ?>
           </H2>
           
 
       
	<h1>Menu</h1>
	<div class ="manageMenu">
	   <a href= "create.php"><button type="button" >Add Meal</button></a>
	   <table  border="1" cellspacing= "1" cellpadding="0">
	       <thead>
	           <tr>
	               <th>ID</th>
	               <th>Name</th>
	               <th>Allergens</th>
	               <th>Ingredients</th>               
	               <th>Price</th>
	               <th>Picture</th>
	           </tr>
	       </thead>
	       <tbody>

	            <?php
	           $sql = "SELECT * FROM meals";
	           $result = $connect->query($sql);

	            if($result->num_rows > 0) {
	                while($row = $result->fetch_assoc()) {
	                   echo  "<tr>
	                       <td>" .$row['meal_id']."
	                       <td>" .$row['name']."
	                       </td>
	                       <td>" .$row['allergens']."
	                       </td>
	                       <td>" .$row['ingredients']."</td>
	                       <td> <img src=".$row['picture']." alt='meal- picture' border=3 height=100 width=100></img></td>
	                        <td>" .$row['price'].",- EUR</td>
	                       <td>
	                           <a href='update.php?id=" .$row['meal_id']."'><button type='button'>Edit</button></a>
	                           <a href='delete.php?id=" .$row['meal_id']."'><button type='button'>Delete</button></a>
	                       </td>
	                   </tr>" ;
	               }
	           } else  {
	               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
	           }
	            ?>

	           
	       </tbody>
	   </table>
	</div>

</body>
</html>
<?php ob_end_flush(); ?>