<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE 'DOCUMENT_ROOT'</title>
</head>
<body>
    <header>
        <h1>EXERCICE 'DOCUMENT_ROOT'</h1>

    </header>
    <section>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRspqEA96iIubALYguy2iF-5hibwoPJI_mDkKm9Ac9pzYjvIqJZ9sYALO4plJqu4yb-7g&s" alt="">
        <?php

            $chemin = $_SERVER['DOCUMENT_ROOT'];
            $tab = scandir($chemin);

            foreach ($tab as $element) {
                if ($element != "." &&  $element != ".." && $element != ".DS_Store") {
                    echo "<div class='element'>" . $element . "</div><br>";
                }
            }
        ?>

    </section>
 
    
</body>
</html>
