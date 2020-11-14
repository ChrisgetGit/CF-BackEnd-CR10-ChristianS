<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];
   $title = $_POST['title'];
   $author = $_POST[ 'author'];
   $isbn =  $_POST[ 'isbn'];
   $image = $_POST[ 'image'];
   $publisher = $_POST[ 'publisher'];
   $short_description = $_POST['short_description'];
   $type = $_POST['type'];
   $book_status = $_POST['book_status'];


   $sql = "UPDATE books SET book_id = '$id', title = '$title', author = '$author', isbn_code = '$isbn', pub_name = '$publisher', image = '$image', short_description = '$short_description', type = '$type', book_status = '$book_status' WHERE book_id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 