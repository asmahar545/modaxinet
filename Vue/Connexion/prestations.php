<?php $this->titre = "Accueil"; ?>

<br>
<br>
<br>
<br>


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<div class="row">
   

<ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a>Prestations</a></li>
    
    <butto> <a href="prestation/loger"
        class="btn btn-sm btn-warning"> <i class="fas fa-reply" style="font-size:20px" ></i></a> 
    </span></button>

    <a href="prestation/jour"  alt="Ajouter des prestations par semaine"class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-plus"></span> par jour </a>

    <a href="prestation"  alt="Ajouter des prestations par semaine"class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> par semaine </a>
    <a href="prestation/trimestre" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span> par mois</a> 
 
</button>
</ul>

<h2 class="text-center">Liste des prestations par mois </h2>
    <div class="table-responsive">

         <table id="example1"  class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>mois</th>
                    <th>#</th>
                    <!--th></th-->  <!-- Colonne des boutons d'action -->
                </tr>
            </thead>
            
     
            
                <tr>
                    <td>1</td>
                    <td>Janvier</td>
                    <td> <a  href="prestation/listprestmois/1" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fevrier</td>
                    <td> <a  href="prestation/listprestmois/2" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mars</td>
                    <td> <a  href="prestation/listprestmois/3" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>4</td>
                    <td>Avril</td>
                    <td> <a  href="prestation/listprestmois/4" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mai</td>
                    <td> <a  href="prestation/listprestmois/5" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>6</td>
                    <td>Juin</td>
                    <td> <a  href="prestation/listprestmois/6" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>7</td>
                    <td>Juillet</td>
                    <td> <a  href="prestation/listprestmois/7" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>8</td>
                    <td>Août</td>
                    <td> <a  href="prestation/listprestmois/8" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                 <tr>
                    <td>9</td>
                    <td>Septembre</td>
                    <td> <a  href="prestation/listprestmois/9" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                 <tr>
                    <td>10</td>
                    <td>Octobre</td>
                    <td> <a  href="prestation/listprestmois/10" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                 <tr>
                    <td>11</td>
                    <td>Novembre</td>
                    <td> <a  href="prestation/listprestmois/11" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>
                <tr>
                    <td>12</td>
                    <td>Décembre</td>
                    <td> <a href="prestation/listprestmois/12" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-th-list"></span> </a></td>
                    
                </tr>

           
           
        </table>
     
 
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

        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
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
    
    