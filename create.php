<!DOCTYPE html>
<html>
  <head>
            <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <title>PHP CRUD  |  Add Media</title>

     <style type= "text/css">
         fieldset {
             margin: auto;
             margin-top: 100px;
             width: 50% ;
         }

         table tr th  {
             padding-top: 20px;
         }

         input{
            padding-top: 13px;
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
          <li class="nav-item active">
            <a class="nav-link" href="create.php">Add Media</a>
          </li>
        </ul>
    </div>
</nav>
  <fieldset >
     <legend>Add Media</legend>

<form action="actions/a_create.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Title</th>
               <td><input type= "text" name="title" placeholder="Title" ></td >
           </tr>
           <tr>
               <th >Author</th>
               <td><input type ="text" name= "author" placeholder= "Author" ></td>
           </tr>
           <tr>
               <th >ISBN</th>
               <td><input type ="text" name= "isbn" placeholder= "ISBN" ></td>
           </tr>
           <tr>
                 <th>Image</th>
                 <td><input type="text"  name="image" placeholder ="Image"></td>
            </tr>
            <tr>
                 <th>Publisher</th>
                 <td><input type="text"  name="publisher" placeholder ="Publisher" ></td>
             </tr>
            <tr>
                 <th>Short Desription</th>
                 <td><input type="text"  name="short_description" placeholder ="Short Description" ></td>
             </tr>
             <tr>
                 <th>Type</th>
                 <td><input type="text"  name="type" placeholder ="Book, CD or DVD"></td>
             </tr>
             <tr>
                 <th>Status</th>
                 <td><input type="text"  name="book_status" placeholder ="Available | Not Available"></td>
             </tr>
              <tr>
                 <td><button type ="submit">Insert Media</button></td>
                 <td ><a href= "index.php"><button type="button">Back</button></a></td>
             </tr >
         </table>
         </table>
       </form>

  </fieldset >

  </body>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>