<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <title>PHP-Day-3</title>

   <style type="text/css">
       .manageMenu {
           width : 50%;
           margin: auto;
       }

      table {
        width: 100%;
        margin-top: 20px;
       }

       h1{
        margin: auto;
        text-align: center;
       }

       th{
       padding-left: 5px !important;
       }

       td{
        padding-left: 5px !important;
       }


   </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Show Media <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Add Media</a>
        </li>

      </ul>
    </div>
  </nav>
<h1>Media</h1>
<p style= "text-align:center;">click on publisher link to see his published media</p>
<div class ="manageMenu">
   
   <table  border="1" cellspacing= "1" cellpadding="0" class="table table-dark">
       <thead>
           <tr>
               <th scope="col">ID</th>
               <th scope="col">Title</th>               
               <th scope="col">Author</th>               
               <th scope="col">Type</th>
               <th scope="col">Image</th>
               <th scope="col">Publisher</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM books";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['book_id']."
                       <td>" .$row['title']."
                       </td>
                       <td>" .$row['author']."
                       </td>
                       <td>" .$row['type']."</td>
                       <td> <img src=".$row['image']." alt='media- picture' border=3 height=100 width=100></img></td>
                        <td><a href='publisher.php?id=" .$row['pub_name']."'>".$row['pub_name']."</td>
                        <td>
                             <a href='update.php?id=" .$row['book_id']."'><button type='button'  class = 'btn btn-success'>Edit</button></a>
                             <a href='delete.php?id=" .$row['book_id']."'><button type='button'  class = 'btn btn-danger'>Delete</button></a>
                             <a href='details.php?id=" .$row['book_id']."'><button type='button'  class = 'btn btn-primary'>Details</button></a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>