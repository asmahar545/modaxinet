
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
<div  id='printMe'class="row" >
  <div class="col-lg-6" >
 
	<table class="table table-bordered  table-dark table-striped" > 
<caption><h4> Bon de prestation  </h4></caption>
     
     
     <tbody>
        <th class="text-center"colspan="15">
        <div class="col-lg-12">
           <div class="col-lg-6">

 <img class="img-responsive" id="imgAccueil"  onclick="printDiv('printMe')"height= "70px" width="50%" src="Contenu/Images/logo.png"/> </div>
 <div class="col-lg-6">
      9,Rue Charles Meert 1030 Bruxelles - Tél: 02/242.47.51 - info@modaxinet.be

    </div>
 <div class="col-lg-6">
    

    </div>
    </div>

      </th>
     	 </tr>
        <tr >
          <th  rowspan="5" colspan="1" scope="rowgroup">Données du client</th>
          <th  scope="row">Nom</th>
         
          
          <td  colspan="5"><?= $this->nettoyer($client['Nom']) ?></td>

          
        </tr>
        <tr >
          <th scope="row">Numéro du client:</th>
          <td  colspan="5">MO/<?= $this->nettoyer($client['numero_client']) ?></td>
          
        </tr>
        <tr >
          <th  scope="row">Adresse</th>
          <td  colspan="5"><?=  $this->nettoyer($prestation['Ville']) ?></td>
          
        </tr>
        <tr >
          <th scope="row">Date de la prestation: </th>
          <td colspan="5"><b><?=  $this->nettoyer($prestation['Date']) ?></b></td>
          
        </tr>

        <tr  >
          <th   scope="row">Contact:</th>
           <td  colspan="5"><b><?=  $this->nettoyer($client['Contact']) ?></b></td>
          
        </tr>
        <tr>
        	
       <th colspan="15"> 
       <b>Description des prestations a réaliser pour cette intervention:<b><br><?=  $this->nettoyer($prestation['Description']) ?> </th>
       	
       </tr>
        
       <th  colspan="15"> 
        Remarques: <br>
        <br>
        Signature & cachet:
        
        
        </th>
        </tr>
        <th   colspan="15"> Merci de communiquer vos remarques éventuelles dans les 48 heures de la présente..
        </th>
       </tr>
        
     
      </tbody>
    </table>
	</div>
	 <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------------------------------------------------------------------------------------------------------------------------------------
	 <div class="col-lg-6">
    <table   class="table table-bordered table-striped">
     

     <caption ><h4> Bon de prestation  </h4></caption>
     
     <tbody>
     	<th class="text-center"colspan="15">
        <div class="col-lg-12">
           <div class="col-lg-6">
      <img class="img-responsive" 
      id="imgAccueil"  height= "70px" width="55%" src="Contenu/Images/logo.png"/>
      </div>

 <div class="col-lg-6">
      9,Rue Charles Meert 1030 Bruxelles - Tél: 02/242.47.51 - info@modaxinet.be

    </div>
    </div>

      </th>
       </tr>
     	
        <tr>
          <th rowspan="5" colspan="1" scope="rowgroup">Données du client</th>
          <th scope="row">Nom</th>
         
          <td colspan="5"><?= $this->nettoyer($client['Nom']) ?></td>
          
        </tr>
        <tr>
          <th scope="row">Numéro du client:</th>
          <td colspan="5">MO/<?= $this->nettoyer($client['numero_client']) ?></td>
          
        </tr>
        <tr>
          <th scope="row">Adresse</th>
          <td colspan="5"><?=  $this->nettoyer($prestation['Ville']) ?></td>
          
        </tr>
        <tr>
          <th scope="row">Date de la prestation:</th>
          <td colspan="5"><b><?=  $this->nettoyer($prestation['Date']) ?></b></td>
          
        </tr>

        <tr>
          <th scope="row">Contact:</th>
          <td colspan="5"><?=  $this->nettoyer($client['Contact']) ?></td>
          
        </tr>
        <tr>
      
       <th colspan="15"  > 
        <b>Description des prestations à réaliser pour cette intervention:<b> <br>
       		<?=  $this->nettoyer($prestation['Description']) ?> </th>
       </tr>
       
       <th colspan="15"  > 
        Remarques: <br>
        <br>
        Signature & cachet:
        <br>
       
        </th>
       </tr>
        <th colspan="15"> Merci de communiquer vos remarques éventuelles dans les 48 heures de la présente.
        </th>
       </tr>
        
     
      </tbody>
    </table>
</div>	

</div>

   
   <style>

   .titre {
   
  
    
} 
</style>


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