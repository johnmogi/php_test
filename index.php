<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>John Mogi Search Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <link rel="icon" type="image/png" href="favicon.webp">
</head>

<body class="container">
  <div class="card">
  <?php
    echo "<form action='https://www.google.co.il/search' class='needs-validation' novalidate> 
      <div class='form-group'>
      <div class='card-body'>
        <h5 class=card-title'>Custom Search Page</h5> 
        <label for='custom-search'>What would you like to search for?</label> 
        <input type='text' name='q' class='form-control' placeholder='Search Google for...' id='custom-search'
          aria-describedby='customGoogleSearch' required>
        <div class='valid-feedback'> Looks good! </div>
         <div class='invalid-feedback'>
        Please fill out your search term
        </div>
        <br/>
        <input type='submit' class='btn btn-info mb-2'>
        </div>
    </form>
   
    <br />  
<h5> today's date: </h5>" . date('l jS \of F Y h:i:s A');

 ?>

  </div>
  <footer class="text-center">
  All rights reserved <a href="https://www.johnmogi.com" target="_blank">John Mogi</a>  <?php echo date("Y"); ?>
  </footer>
</body>

</html>
