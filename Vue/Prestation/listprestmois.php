<?php $this->titre = "Accueil"; ?>

<br>
<br>
<br>
<br>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">


<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<div class="row">
    <ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-th"></span> <a>Prestations</a></li>
    <li> <a >Service</a>
    <button  type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalLong"><span style="font-size:16px" class="glyphicon glyphicon-wrench"></button></li>
      <li> <a></i>Tableau</a></li>
      <butto>  <a href="exel.php?id=<?= $this->nettoyer($id)?>"
        class="btn btn-sm btn-success"> <i class="far fa-file-excel" style="font-size:20px"></i></a> 
    </span></button>

     <butto>  <a href="exel.php?id=<?= $this->nettoyer($id)?>"
        class="btn btn-sm btn-info"> <i class="fas fa fa-copy" style="font-size:20px" ></i></a> 
    </span></button>
    <butto>  <a href="exel.php?id=<?= $this->nettoyer($id)?>"
        class="btn btn-sm btn-danger"> <i class="far fa-file-pdf" style="font-size:20px"></i></a> 
    </span></button>
    <butto>  <a href="exel.php?id=<?= $this->nettoyer($id)?>"
        class="btn btn-sm btn-success"> <i class="fas fa-file-csv " style="font-size:20px"></i></a> 
    </span></button>

    <butto>  <a href="exel.php?id=<?= $this->nettoyer($id)?>"
        class="btn btn-sm btn-primary"> <i class="fas fa-print" style="font-size:20px" ></i></a> 
    </span></button>
    <butto>  <a href="prestation/loger"
        class="btn btn-sm btn-warning"> <i class="fas fa-reply" style="font-size:20px" ></i></a> 
    </span></button>

    <a href="prestation/jour"  alt="Ajouter des prestations par semaine"class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-plus"></span> par jour </a>

    <a href="prestation"  alt="Ajouter des prestations par semaine"class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> par semaine </a>
    <a href="prestation/trimestre" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span> par mois</a> 
 
</button>
</ul>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="example1"  class="table table-bordered table-striped">
            <thead>


                <tr>
                    <th>N°</th>
                    <th>Chantier</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Prix</th>
                    <th>#</th>
                </tr>
            </thead>
       <?php $i=0 ?>
            <?php foreach ($service as $prest): ?>
             
                
                <?php $i++ ?>
             
            <tr>      
                
                 
                    <td> <?php echo $i ?></td>
                    <td><?= $this->nettoyer($prest['chantier']) ?></td>
                    <td><?= $this->nettoyer($prest['description']) ?></td>


                    <td><?= $this->nettoyer($prest['date_service']) ?></td>
                    <td><?= $this->nettoyer($prest['prixService']) ?> € </td>
                    <td><a  href="prestation/pdfservices/<?=$this->nettoyer($prest['id_service'])?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-file"></span> </a></td>
                    


                    

                      </tr>


            <?php endforeach; ?>
      
        </table>
     
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>
 <h2 class="text-center">Liste des prestations</h2>
 <br>
  <span id="span_txt" style="display:none;"> <a   alt="Ajouter des prestations par semaine"class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>s</a>  : Une fois par semaine

   <a   alt="Ajouter des prestations par semaine"class="btn btn-xs btn-success">
    <span class="glyphicon glyphicon-plus"></span>2j</a>  : Deux fois par semaine

       <a   alt="Ajouter des prestations par semaine"class="btn btn-xs btn-success">
    <span class="glyphicon glyphicon-plus"></span>3j</a>  : Trois fois par semaine



<a class="btn btn-xs btn-info"><span class="glyphicon glyphicon-plus"></span>t </a> : Une fois par trimestre

     
<a  class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-file"></span> </a>: feuille de prestation 

<a  class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> </a>: suppression d'une prestation <br>
 <a  href="prestation/ajoutServices" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a> :ajouter un service

</span>

</span>

<br>
    <div id="dernieresnouvelles" class="table-responsive">
      <br>
        <table id="example3"  class="table table-bordered table-striped">
            <thead>


                <tr>
                    <th>N°</th>
                     <th>Ville</th>
                    <th>Description</th>
                   
                   
                    <th>Prix</th>
                    <th>Date</th>
                    <th>Année</th>
                    <th>#  <th>
                   
                </tr>
            </thead>
            <?php $i=0 ?>
            <?php foreach ($list as $prest): ?>

                
                <?php $i++ ?>
              <?php $prestation=  $this->nettoyer($prest['Description']) ?>
              <?php if ($this->nettoyer($prest['extra'])==0):?>
                <tr>
                <?php else : ?>
                  <tr class="danger">  
             <?php endif; ?>
              
            
                 
                    <td> <?php echo $i ?></td>
                    <td ><?= $this->nettoyer($prest['Ville']) ?></td>
                    <td><?= $this->nettoyer($prest['Description']) ?></td>
                    
                    <td><?= $this->nettoyer($prest['Prix']) ?> €</td>
                    <td><?= $this->nettoyer($prest['Date']) ?> </td>
                    <td><?= $this->nettoyer($prest['YEAR(date)']) ?></td>


                    <td>
                   
                    <!--
                    <a href="prestation/ajoutjour" alt="Ajouter des prestations 2 fois semaine"class="btn btn-xs btn-success  disabled"><span class="glyphicon glyphicon-plus"></span>2j </a> 
                    <a href="prestation/ajoutjours" alt="Ajouter des prestations 3 fois semaine"class="btn btn-xs btn-success disabled"><span class="glyphicon glyphicon-plus"></span>3j </a>  --> 
                   
                         
                    <a  href="prestation/pdf/<?=$this->nettoyer($prest['ID_prestation'])?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-file"></span> </a>
                    <a  href="prestation/pdfmois/<?=$this->nettoyer($prest['ID_prestation'])?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-file"></span>m </a>
                    <a  href="prestation/updateService/<?=$this->nettoyer($prest['ID_prestation'])?>" class="btn btn-xs btn-warning"><span class="fa fa-edit"></span> </a>
                    <!--
                    <a  href="prestation/ajoutServices" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>-->


                  
                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal">
                    <span class="glyphicon glyphicon-remove"></span>
                    </button>

                   <button type="button" class="btn btn-xs btn-default" onclick="toggle_textsemaine();"><span class="glyphicon glyphicon-info-sign"></span></button>
                   
                  </td>
                  <td> </td>
                    
                </tr>


            <?php endforeach; ?>
      
        </table>
    </div>

 

          <div style="Background-Color: #dc3545;"class="modal"  id="exampleModal" tabindex="-1" role="dialog">
                     <div  class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title"><b>Suppression</b></h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                            </div>
                      <div class="modal-body">
                       Choisissez la prestation que vous voulez supprimer: </p>
                      
                    <p><b>Sélection de la prestation</b></p>
                   <form class="form-signin form-horizontal" role="form" action="prestation/exesupprprestation" method="post">
                   
                
                <select name="idprestation" type="text" class="form-control" placeholder="" required>
                     <option value="">Faites votre choix</option>
                    <?php
                    foreach ($prestationtoute as $cli):
                     echo '<option value="' . $this->nettoyer($cli['ID_prestation']) . '">' 
                       .  $this->nettoyer($cli['Ville'])  . ', le  ' .  date($this->nettoyer($cli['Date']) ) .'</option>';
                          ?>
                     <?php endforeach; ?>

                </select> 
                  
                   </div>
                    <div class="modal-footer">
                  <button  type="submit" class="btn btn-default btn-danger"><span class="glyphicon glyphicon-log-in"type="button"
                   class="btn btn-secondary" >Supprimer</button>
                    <button type="button"  data-dismiss="modal" class="btn btn-primary">Annuler</button>
                 </div>      
                    

             
                    
                    
                  </div>
                </div>
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
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
<!-- AdminLTE App -->

<script>


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


$(function () {
  $('#example3').DataTable( {
    buttons: [
        {
            extend: 'excelHtml5',
            text: 'Save as Excel',
            customize: function( xlsx ) {
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                $('row:first c', sheet).attr( 's', '42' );
            }
        }
    ]
} );
} );

  

   


</script>

    <script type="text/javascript"  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    
    <script type="text/javascript" class="init">
    

    