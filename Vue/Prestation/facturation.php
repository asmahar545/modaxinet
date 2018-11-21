<?php $this->titre = "Accueil"; ?>

<br>
<br>
<br>
<br>



<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">


<?php require 'Vue/_Commun/barreNavigation.php'; ?>

<div class="row">
    <ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span><a> Facturation</a></li>
</ul>
 <h2 class="text-center">Liste des facturations du mois</h2>
    <div class="table-responsive">
      <table id="example1"  class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom du client</th>
                    <th>Adresse du client</th>
                    <th>Chantier</th>
                    <th>Description</th>
                    <th>Prix hors TVA</th>
                    <th>Année</th>
                    <th>Facturations</th>
                    
                    
                </tr>
            </thead>
             <?php $i=0 ?>
            <?php foreach ($facturationaout as $cli): ?>
                <?php $i++ ?>
                <tr>
                  
                    <td> <?php echo $i ?></td>
                    <td><?= $this->nettoyer($cli['nomClient']) ?> </td>
                    <td><?= $this->nettoyer($cli['adresseClient']) ?></td>
                    <td><?= $this->nettoyer($cli['chantierPrestation']) ?></td>
                    <td><?= $this->nettoyer($cli['descriptionPrestation']) ?></td>
                    <td><?= $this->nettoyer($cli['prixFacture']) ?></td>

                    <td><?= $this->nettoyer($cli['yearPrestation']) ?></td>
                    <td>  
                    <a href="printer.php?idprestation=<?= $this->nettoyer($cli['idPrest'])?>&idclient=<?= $this->nettoyer($cli['idClient'])?>&idmois=<?= $this->nettoyer($id) ?>&chantier=<?= $this->nettoyer($cli['VillePrestation'])?> " type="button" class="btn btn-xs btn-danger" ><i class="far fa-file-pdf"></i>
                    <span class="glyphicon glyphicon-file">
                
                    </a> </td>
                    <!--
                    <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#MyModal">
                        <span class="glyphicon glyphicon-file">
                
                       </button> 
                       <div>
<div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  
  <div id="printThis" class="modal-dialog modal-lg">
    
    <!-- Modal Content: begins 
    <div   class="modal-content">
      
      <!-- Modal Header 
      <div class="modal-header">
         
          <h4 class="modal-title" id="gridSystemModalLabel">
              
          </h4>
          
          <img class="img-responsive" height= "150px" width="55%" src="Contenu/Images/logo.png"/>
          <p data-dismiss="modal" aria-hidden="true">
            Rue Charles Meert, 9 <br>
        1030 bruxelles</br>
        TVA BE06507811512 <br>
        TEL: +32 483546550<br>
        COMPTE ING BE04363159690231
          </p>
          <a href="http://www.modaxinet.be/" id="pop">
           site </a>

      </div>
    
      <!-- Modal Body 
      <div class="modal-body">
        
         
    
       <table style="width:100%">
      
      <td>
      <br>
       
     
    
    
     
    </table>
    <table style="width:200%">
    <tr>
    <td></td>
    <td></td> 
    <td>
 
  Date d'échéance: ########
    Août
     

    </td>
     </tr>
   
    
    </table>
   
    

</div>

      <p id="btnPrint">And a paragraph with a full sentence or something else...</p>
        

</div>
          
      </div>-->
    
      <!-- Modal Footer 
      <div class="modal-footer">
       <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
      <button  type="button" class="btn btn-default">Imprimer</button>
      </div>
    
    </div>
    <!-- Modal Content: ends -->
    
  </div>
    </div>
</div>
                    
                    
                     </td>
                </tr>
            <?php endforeach; ?>
          
        </table>
    </div>

  




    </div>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<style type="text/css">
    @media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}


$("#pop").on("click", function(e) {
   e.preventDefault();
   $('#the-modal').modal('toggle');
});



</style>
<script>

    

    document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("printThis"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
$(function () {
    $("#example3").DataTable();
    $('#example4').DataTable({

      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false

    });
  });
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({

      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false

    });
  });
</script>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
    <script type="text/javascript" class="init">
    <!-- Partie principale de la page d'accueil -->
    