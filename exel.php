
    <head>
        <link rel="stylesheet" href="Librairies/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
        
        
  
        <title>datables</title>
    </head>

<body>
    <div class="container">
    <div class="row">
        <br>
        <br>
        <br>
    <ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a >Prestations</a></li>
</ul>
<?php

    $i=$_GET['id'];
    switch ($i) {
    case 1:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Janvier </h2>';
    break; 
    case 2:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Fevrier </h2>';
   
    break;
    case 3:
   echo '<h2 class="text-center">Liste des prestations pour le mois de Mars </h2>';
        break;
    case 4:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Avril </h2>';
    break;
    case 5:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Mai </h2>';   
    break;
    case 6:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Juin </h2>';
    break;
    case 7:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Juillet </h2>';
    break;
    case 8:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Août </h2>';
    break;
    case 9:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Septembre </h2>';     
    break;
    case 10:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Octobre </h2>';   
    break;
    case 11:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Novembre </h2>';
    break;
    case 12:
    echo '<h2 class="text-center">Liste des prestations pour le mois de Décembre</h2>';  
    break;
} ?>

    <div class="table-responsive">

<?php
try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=modaxinet;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


$service = $bdd->query('select ID_prestation,Description, Ville, Nbr_heure, Prix, Date, YEAR(date) from prestation where month(Date)='. $_GET['id'].'');

?>
<table id="example" style="width:100%">
       <thead>


                <tr>
                    <th>N°</th>
                 
                    
                    <th>Description</th>
                    <th>Ville</th>
                    <th>Nbr heure</th>
                    <th>Prix</th>
                    <th>Date</th>
                  
                   
                </tr>
            </thead>
       <?php $i=0 ?>
        
          
        <?php foreach ($service as $prest): ?>

                
                <?php $i++ ?>
             
            <tr class="table-success" >      
                
                 
                    
                    <td><?php echo $i ?></td>
                    <td><?php echo $prest['Description']  ?></td>
                    <td><?php echo $prest['Ville'] ?></td>
                    <td><?php echo $prest['Nbr_heure'] ?> </td>
                    <td><?php echo $prest['Prix'] ?> €</td>
                    <td><?php echo $prest['Date'] ?> </td>
                
             </tr>


            <?php endforeach; ?>
      
        </table>
     
     
    </table>

</div>
</div>
</div>
</body>

<script src="Librairies/bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<style>

</style>
 
 
<script type="text/javascript" >
  $(document).ready(function() {
    $('#example').DataTable( {

        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]



    } );
} );

   </script>