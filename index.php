<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CRUD Example</title>
  </head>
  <body class="container">
      
      <?php include 'db.php'; ?>
      
      <div class="row">
          <div class="col">
              <ul class="nav navbar-light bg-light">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  
                  <!--loop thru table to retrieve pg names that will serve as our menu-->
                  <?php foreach($record as $menu): ?>
                  
                  <li class="nav-item active">
                      
                      <a href="index.php?page='<?php echo $menu['pg']; ?>'" class="nav-link"><?php echo $menu['pg']; ?></a>
                      
                  </li>
                  
                  <?php endforeach; ?>
                   <li><a href="create.php" class="nav-link">Create new record</a></li>
              </ul>
          </div>
      </div>
      
      <div class="row">
          <div class="col">
              <?php 
                    
                    if(isset($_GET['page']))
                    {
                        $pg = trim($_GET['page'], "'");
                        
                        // run sql query based on our $pg value
                        $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error());
                        
                        $single = $record->fetch_assoc();
                        
                        // create variables to hold all our field names from table
                        $h1 = $single['h1'];
                        $h2 = $single['h2'];
                        
                        $p1 = $single['p1'];
                        $p2 = $single['p2'];
                        $p3 = $single['p3'];
                        
                        $images = $single['images'];
                        
                        $id = $single['id'];
                        $update = "update.php?update=" . $id;
                        
                        echo "
                        
                        <h1>{$h1}</h1>
                        <h2>{$h2}</h2>
                        
                        <p>{$p1}</p>
                        <p>{$p2}</p>
                        <p>{$p3}</p>
                        
                        <p><a href='{$update}' class='btn btn-danger'>Update</a><p>
                        
                        
                        ";
                        
                    }
                    else
                    {
                        // default view of index.php
                        
                        echo "
                        
                        <h1>CRUD Application Example</h1>
                        <p>This is an example application of using PHP and MySQL to create a CRUD application.</p>
                        <p>By clicking on the links above you will access the appropriate record from the database.</p>
                        
                        ";
                    }
              
              ?>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>