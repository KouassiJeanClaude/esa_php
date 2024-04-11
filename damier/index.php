
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Damier avec Pions</title>
<style>
  .damier {
    display: flex;
    flex-wrap: wrap;
    width: 400px;
    border: solid black;
    padding: 1px;
    height: 400px;
    border: solid black;
    padding: 1px;
  }
  .case {
    width: 50px;
    height: 50px;
    position: relative;
    cursor: pointer;
   transition: background-color 0.3s ease; 
  }
  .case.blanc {
    background-color: white;
  }
  .case.noir {
    background-color: black;
  }
  .case:active { 
    filter: brightness(0.7); 
  }
  .case:active .pion { 
    filter: brightness(1.5); 
  }
  .pion {
    width: 80%;
    height: 80%;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .pion.blanc {
    background-color: #ccc;
  }
  .pion.noir {
    background-color: #fcc;
  }
</style>
</head>
<body>
  <div class="damier">
    <?php
      
      for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
          $class = ($i + $j) % 2 == 0 ? 'blanc' : 'noir';
          echo "<div class='case $class'>";
          if ($i < 3 && $class == 'noir') {
            echo "<div class='pion noir'></div>";
          } elseif ($i > 4 && $class == 'noir') {
            echo "<div class='pion blanc'></div>";
          }
          echo "</div>";
        }
      }
    ?>
  </div>
</body>
</html>
