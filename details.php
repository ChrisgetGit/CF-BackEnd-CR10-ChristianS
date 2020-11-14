<?php require_once 'actions/db_connect.php';
if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM books WHERE book_id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();
};
?>



<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <title>Details</title>

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

       .description{
        min-width: 25vw;
       }


   </style>
<body>
  <h1>Media</h1>
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
               <th scope="col">Short Description</th>
               <th scope="col">Handle</th>
               <th scope="col">Status</th>
           </tr>
       </thead>
       <tbody>

            <tr>
                       <td><?php echo($data['book_id']) ?></td>
                       <td><?php echo($data['title']) ?>
                       </td>
                       <td><?php echo($data['author']) ?>
                       </td>
                       <td><?php echo($data['type']) ?></td>
                       <td> <img src="<?php echo($data['image']) ?>" alt='media- picture' border=3 height=100 width=100></img></td>
                        <td><?php echo($data['pub_name']) ?></td>
                        <td class = 'description'><?php echo($data['short_description']) ?></td>
                        <td>
                             <a href='update.php?id="<?php echo $data['book_id']?>"'.><button type='button'  class = 'btn btn-success'>Edit</button></a>
                             <a href='delete.php?id="<?php echo $data['book_id']?>"'><button type='button'  class = 'btn btn-danger'>Delete</button></a>
                             <a href='index.php'><button type='button'  class = 'btn btn-secondary'>Back</button></a>
                         </td>
                         <td><?php echo($data['book_status']) ?> </td>
                   </tr>

           
       </tbody>
   </table>
</div>