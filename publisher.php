<?php require_once 'actions/db_connect.php';
if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM `books` WHERE pub_name = '${id}' " ;
   $result = $connect->query($sql);

};
?>

<head>
	<style>
		table{
			margin: auto;
		}
		tr{
			padding-top: 5px;
		}
	</style>
</head>

<html>
<body>
	
</body>

<table  border="1" cellspacing= "1" cellpadding="0" class="table table-dark">
       <thead>
           <tr>
               <th scope="col">ID</th>
               <th scope="col">Title</th>               
               <th scope="col">Author</th>               
               <th scope="col">Type</th>
               <th scope="col">Publisher</th>
               
           </tr>
       </thead>
       <tbody>
       		<?php   if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo "

                   <tr>
                       <td>" .$row['book_id']."
                       <td>" .$row['title']."
                       </td>
                       <td>" .$row['author']."
                       </td>
                       <td>" .$row['type']."</td>
                       <td>" .$row['pub_name']."</td> 
                       <td> <a href='index.php'><button type='button'>Back</button></a></td>                     
                   </tr>" ;
               }
           }
   $connect->close();

   ?>
       </tbody>
   </table>
</html>