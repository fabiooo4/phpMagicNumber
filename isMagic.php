<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Mega form</h1>
        <?php
          // Get the values from the form
          $randomNumber = $_POST['randomNumber'];

          // Check if the number is divisible by 2 and 3 and 5
          if ($randomNumber % 2 == 0 && $randomNumber % 3 == 0 && $randomNumber % 5 == 0) {
            //print an image
            echo "<iframe src='https://giphy.com/embed/FNgkRWqW4M3NDNP95Q' width='480' height='480' frameBorder='0' class='giphy-embed' allowFullScreen></iframe>";
          } else {
            echo "<h2>Non sei un mago :(</h2>";
          }
          
        ?>
        <form action="numberGenerator.php">
          <button class="button" type="submit">Indietro</button>
        </form>
      </body>
</div>
</html>