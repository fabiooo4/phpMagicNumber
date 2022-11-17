<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Numero Magico Generator2000</h1>
        <div>
          <form action="numberGenerator.php" method="post">
            <button class="button" type="submit" name="genera">Genera</button>
          </form> 
          <?php
            $randomNumber = rand(1, 1000);

            function updateRandomNumber() {
              $randomNumber = rand(1, 100);
              return $randomNumber;
            }

            if (isset($_POST['genera'])) {
              updateRandomNumber();
            }
            
            echo "<form action='isMagic.php' method='post'>";
            echo "<label for='randomNumber'>Numero:</label>";
            echo "<input class='input' type='number' id='randomNumber' name='randomNumber' value='$randomNumber'><br>";
            echo "<button class='button' type='submit'>È magico?</button>";
            echo "</form>";
          ?>
        </div>
      </body>
</div>
</html>