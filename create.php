<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Create new record</title>
  </head>
  <body class="container">
    <h1>Create a new record</h1>
    
    <form class="form-group" action="db.php" method="post">
        <label>Enter a page name:</label>
        <br>
        <input type="text" name="pg" placeholder="Write page name here" class="form-control">
        <br>
        <label>Enter a Main Heading:</label>
        <br>
        <input type="text" name="h1" placeholder="Main heading here" class="form-control">
        <br>
        <label>Enter a Secondary Heading:</label>
        <br>
        <input type="text" name="h2" placeholder="Secondary heading here" class="form-control">
        <br>
        <label>Paragraph 1:</label>
        <br>
        <input type="text" name="p1" placeholder="Write p1 here" class="form-control">
        <br>
        <label>Paragraph 2:</label>
        <br>
        <input type="text" name="p2" placeholder="Write p2 here" class="form-control">
        <br>
        <label>Paragraph 3:</label>
        <br>
        <input type="text" name="p3" placeholder="Write p3 here" class="form-control">
        <br>
        <label>Enter image address:</label>
        <br>
        <input type="text" name="images" placeholder="e.g images/pic.jpg" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>