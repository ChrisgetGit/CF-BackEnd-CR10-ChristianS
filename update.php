<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM books WHERE book_id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Media</title>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
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
      <li class="nav-item">
        <a class="nav-link" href="index.php">Show Media</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add Media</a>
      </li>
    </ul>
  </div>
</nav>
<fieldset>
   <legend>Update Media</legend>

<form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Id</th>
               <td><input type="text"  name="id" placeholder ="First Name" value="<?php echo $data['book_id'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Title</th>
               <td><input type= "text" name="title"  placeholder="Last Name" value ="<?php echo $data['title'] ?>" /></td >
           </tr>
           <tr>
               <th >Author</th>
               <td><input type ="text" name= "author" placeholder= "Ingredients" value= "<?php echo $data['author'] ?>" /></td>
           </tr>
           <tr>
               <th >ISBN</th>
               <td><input type ="text" name= "isbn" placeholder= "ISBN" value= "<?php echo $data['isbn_code']?>" /></td>
           </tr>
           <tr>
                 <th>Image</th>
                 <td><input type="text"  name="image" placeholder ="Image" value= "<?php echo $data['image']?>"/></td>
             </tr>
             <tr>
                 <th>Publisher</th>
                 <td><input type="text"  name="publisher" placeholder ="Publisher" value= "<?php echo $data['pub_name']?>"/></td>
             </tr>
              <tr>
                 <th>Short Description</th>
                 <td><input type="text"  name="short_description" placeholder ="Short Description" value= "<?php echo $data['short_description']?>"/></td>
             </tr>
             <tr>
                 <th>Type</th>
                 <td><input type="text"  name="type" placeholder ="Type" value= "<?php echo $data['type']?>"/></td>
             </tr>
             <tr>
                 <th>Status</th>
                 <td><input type="text"  name="book_status" placeholder ="Available | Not Available" value= "<?php echo $data['book_status']?>"/></td>
             </tr>
           <tr>
               <input type= "hidden" name= "book_id" value= "<?php echo $data['book_id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" >Back</button ></a ></td>
           </tr>
         </table>
       </form>
</fieldset >

</body >
</html >

<?php
}
?> 

