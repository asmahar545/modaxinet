<?php $this->titre = "Accueil"; ?>

<br>
<br>
<br>
<br>



<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



<?php require 'Vue/_Commun/barreNavigation.php'; ?>

<div class="row">
    <ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span><a> Clients</a></li>
    <li><span class="glyphicon glyphicon-home"></span><a>Home</a></li>
     <butto>  <a href="prestation/loger"
        class="btn btn-sm btn-warning"> <i class="fas fa-reply" style="font-size:20px" ></i></a> 
    </span></button>

</ul>
 <h2 class="text-center">Liste des clients</h2>
    <div class="table-responsive">
        <table  id="example2" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Codepostal</th>
                    <th>Ville</th>
                    <th>Contact</th>
                    <th>Téléphone</th>
                    <th>Num_TVA</th>
                    <th>Mobile</th>
                    <th>#</th>
                    <!--th></th-->  <!-- Colonne des boutons d'action -->
                </tr>
            </thead>
            <?php $i=0 ?>
            <?php foreach ($clients as $cli): ?>
                <?php $i++ ?>
                <tr>
                    <td> <?php echo $i ?></td>
                    <td><?= $this->nettoyer($cli['Nom']) ?></td>
                    <td><?= $this->nettoyer($cli['Adresse']) ?></td>
                    <td><?= $this->nettoyer($cli['Codepostal']) ?></td>
                    <td><?= $this->nettoyer($cli['Ville']) ?></td>
                    
                    <td><?= $this->nettoyer($cli['Contact']) ?></td>
                   
                    <td><?= $this->nettoyer($cli['TelFixe']) ?></td>
                    <td><?= $this->nettoyer($cli['Num_tva']) ?></td>
                    <td><?= $this->nettoyer($cli['Mobile']) ?></td>

                  
                    <td>
                 <a href="prestation/Ajoutclients" class="btn btn-xs btn-success">
                    <span class="glyphicon glyphicon-plus"></span> </a>
                    <a  class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal">
                    <span class="glyphicon glyphicon-remove"></span>
                   </button>
                    </td>
                    
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
                       Choisissez le client que vous voulez supprimer: </p>
                      
                    <p><b>Sélection du client:</b></p>
                   <form class="form-signin form-horizontal" role="form" action="prestation/exesupprclient" method="post">
                   
                
                <select name="id" type="text" class="form-control" placeholder="" required>
                     <option value="">Faites votre choix</option>
                    <?php
                    foreach ($clienttoute as $cli):
                     echo '<option value="' . $this->nettoyer($cli['ID_client']) . '">' 
                       .  $this->nettoyer($cli['Nom'])  . '</option>';
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

   
    