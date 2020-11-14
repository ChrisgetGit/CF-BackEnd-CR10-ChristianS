<?php 

require_once 'db_connect.php';

if ($_POST) {
   $title = $_POST['title'];
   $author = $_POST[ 'author'];
   $isbn =  $_POST[ 'isbn'];
   $image = $_POST[ 'image'];
   $publisher = $_POST[ 'publisher'];
   $short_description = $_POST['short_description'];
   $type = $_POST['type'];
   $book_status = $_POST ['book_status'];

   $sql = "INSERT INTO books (title, author, isbn_code, image, pub_name, short_description, type, book_status) VALUES ('$title', '$author', '$isbn', '$image', '$publisher', '$short_description', '$type', '$book_status')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>