<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <base href="/modaxinet/" >

        <!-- Feuilles de style -->
        <link rel="stylesheet" href="Librairies/bootstrap/css/bootstrap.min.css">
        
  <!-- Theme style -->
        
        <link rel="shortcut icon" weight="5px" height="10px" href="Contenu/Images/logo.png">

        <!-- Titre -->
        <title>Modaxinet - <?= $titre ?></title>
    </head>
    <?php require 'Vue/_Commun/barreNavigation.php'; ?>
    <body>
        <div class="container">
                       <?= $contenu ?>
        
            <footer class="well well-sm">
                <p class="text-center">Modaxinet service  </p>
            </footer>
        </div>


        
        <!-- jQuery -->
        <script src="Librairies/jquery/jquery-1.10.1.min.js"></script>
        <!-- Plugin JavaScript Boostrap -->
      
        <script src="Librairies/bootstrap/js/bootstrap.min.js"></script>
       
    </body>
</html>
