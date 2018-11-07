<link rel="stylesheet" href="Contenu/style.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
       

<?php require 'Vue/_Commun/barreNavigation.php'; ?>
<div   id='printMe'class="row" >
 
 <caption  ><h4 onclick="printDiv('printMe')">Facturation Total </h4></caption>
	

     <table  id="example2" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>N° Client</th>
                    <th>Clients</th>
                    <th>N°Facture</th>
                    <th>Date de F</th>
                    <th>Echeance</th>
                    <th>TVA</th>
                    <th>Montant Factures</th>
                   
                </tr>
            </thead>
            <?php $i=0 ?>
            <?php foreach ($facturationaout as $cli): ?>
                <?php $i=$i+ $this->nettoyer($cli['prixFacture']) ?> 
                <tr>
                     
                    <td>MO/<?= $this->nettoyer($cli['numcli']) ?></td>
                    <td><?= $this->nettoyer($cli['nomClient']) ?></td>
                    <td>N° facture</td>
                    <td>30/<?= $this->nettoyer($cli['moisPrestation']) ?>/<?= $this->nettoyer($cli['yearPrestation']) ?></td>
                    
                    
                    <td></td>
                    <td></td>
                    <td><?= $this->nettoyer($cli['prixFacture']) ?> €</td>
                   

                  
                 
                    
                </tr>
            <?php endforeach; ?>
          <tr>

             <td></td>
              <td></td>
               <td></td>
                <td></td>
                 <td></td>
                  <td></td>
            <td> <b>Prix total: </b><?php echo $i ?> € </td>




          </tr>
        </table>
     
    
        
    
	</div>
	 
   
	 	

</div>

   



<script>

		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>


<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>