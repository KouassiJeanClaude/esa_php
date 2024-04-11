
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
   transition: background-color 0.3s ease; /* Ajout de transition pour un effet de changement de couleur fluide */
  }
  .case.blanc {
    background-color: white;
  }
  .case.noir {
    background-color: black;
  }
  .case:active { /* Style pour la case lorsqu'elle est cliquée */
    filter: brightness(0.7); /* Réduit la luminosité lorsqu'elle est cliquée */
  }
  .case:active .pion { /* Style pour le pion lorsqu'il est cliqué */
    filter: brightness(1.5); /* Augmente la luminosité lorsqu'il est cliqué */
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
      // Boucle pour générer les cases du damier
      for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
          // Détermination de la classe de la case en fonction de sa position
          $class = ($i + $j) % 2 == 0 ? 'blanc' : 'noir';
          echo "<div class='case $class'>";
          // Ajout de pions au damier
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
