

<?php
require('html_table.php');
require('tfpdf.php');

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=modaxinet;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
define('EURO', chr(128));
$req = $bdd->query('SELECT * FROM factvue where idPrest='. $_GET['idprestation'].' and idClient ='. $_GET['idclient'].'');
$facturation= $req->fetch();

$chantierget=$facturation['chantierPrestation'];

$requete=$bdd->query('SELECT*, month(date_service) as mois FROM service where num_cli='. $_GET['idclient'].'');
$service= $requete->fetch();

$reqt= $bdd->query('SELECT numfact FROM `admin`');
$numfact=$reqt->fetch();

try
{
    $bddee = new PDO('mysql:host=localhost;dbname=modaxinet;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//nom de chantier à noter pour les regies 
$regiereq=$bddee->query('SELECT * FROM factvueregie where VillePrestation="'. $_GET['chantier'].'" and moisPrestation= '. $_GET['idmois'].' and idClient ='. $_GET['idclient'].' and yearPrestation ='. $_GET['idannee'].'');
$regie= $regiereq->fetch();

//num de chantier

$numchantierreq=$bddee->query('SELECT `numContrat` FROM `chantier` WHERE Nom="'. $_GET['chantier'].'"');
$reqchantier= $numchantierreq->fetch();


// numéro de facture 


$pdf->Ln(5);
$pdf->Cell(35,20,'Facture: '.$facturation['yearPrestation'].'- '.$numfact['numfact'].'',0,0,'C');
// Décalage à droite
$pdf->Cell(80);



$pdf->Ln(5);

$pdf->Cell(33,20, 'Date: '.date("d-m-Y").' ',0,0,'C');
// Décalage à droite
$pdf->Cell(80);


$pdf->Ln(5);
$pdf->Cell(29,20,'Client: MO/0'.$facturation['numcli'].'',0,0,'C');
// Décalage à droite
    $pdf->Cell(80);
   ;

$pdf->Ln(5);
$pdf->Cell(51,20,'TVA Client: '.$facturation['numtvaClient'].'',0,0,'C');
// Décalage à droite
    $pdf->Cell(80);
   ;

$pdf->Ln(5);


$i=$_GET['idmois'];
    switch ($i) {
    case 1:
    $datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >31/01/'.$facturation['yearPrestation'].' </td>
</tr>
<tr

</table>';
    $moishtml='<table border="1">
<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Janvier </td>
</tr>
</table>';
    break; 
    case 2:
    $moishtml='<table border="1">
<tr>
<td width="150" " height="50">Mois: </td><td width="120" height="50" >Fevrier </td>
</tr>
</table>';
 $datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >28/02/'.$facturation['yearPrestation'].' </td>
</tr>
<tr

</table>';
   
    break;
    case 3:
   $moishtml='<table border="1">
<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Mars </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >31/03/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
        break;
    case 4:
            $moishtml='<table border="1">

<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Avril </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >30/04/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
 break;
    case 5:
            $moishtml='<table border="1">

<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Mai </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >31/05/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';


    break;

    case 6:
           $moishtml='<table border="1">
<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Juin </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >30/06/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
    break;
    case 7:
$moishtml='<table border="1">
<tr>
<td width="150" height="50">Mois: </td><td width="120" heigh="50" >Juillet </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150" height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >31/07/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
    break;
    case 8:
 $moishtml='<table border="1">
<tr>
<td width="150"  height="50">Mois: </td><td width="100" height="50" >Aout </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="100" height="50" >31/08/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
     break;
     case 9:
            $moishtml='<table border="1">

<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Septembre </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >30/09/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
        break;
     case 10:
            $moishtml='<table border="1">

<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Octobre </td>
</tr>
</table>';
$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >31/10/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
        break;
     case 11:
            $moishtml='<table border="1">

<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >Novembre  </td>
</tr>
</table>';
 $datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >30/11/'.$facturation['yearPrestation'].' </td>
</tr>
<tr

</table>';
        break;
     case 12:
 $moishtml='<table border="1">
<tr>
<td width="150"  height="50">Mois: </td><td width="120" height="50" >'.utf8_decode("Décembre").'</td>
</tr>
</table>';

$datehtml='<table border="1">
<tr>
<td width="150"  height="50">'.utf8_decode("Date d'échéance :").'</td><td width="120" height="50" >31/12/'.$facturation['yearPrestation'].'</td>
</tr>
<tr

</table>';
        break;
}
  
   
$pdf->Ln(15);




//si il ya régie 
if(isset($regie['prixFacture'])&& $_GET['idmois'] == $regie['moisPrestation'])

{
$html='<table border="1">
<tr>
<td width="615"  height="50"> '.utf8_decode('Travaux exécutés').'</td><td width="120" height="50" >Montant HTVA</td>
</tr>
<td width="615"  height="400"> '. utf8_decode($facturation['descriptionPrestation']).'
</td><td width="120" height="400" >'.$facturation['prixFacture'].' euros</td>
</tr>
<td width="615"  height="50"> Travaux en REGIE
</td><td width="120" height="50" >'.$regie['prixFacture'].' euros</td>
</tr>
</tr>

</table>';
$prixtotal = $regie['prixFacture'] + $facturation['prixFacture'];

    //si la tva est de 0
    if($facturation['tvaClient']==0){
              // calcul prix sans tva 
$prixfinal='<table border="1">

<tr>
<td width="134"  height="50">Total: </td><td width="120" height="50" >'.$prixtotal.' euros </td>
</tr>
</table>';

$prixhtva='<table border="1">

<tr>
<td width="134"  height="50">Prix hors TVA: </td><td width="120" height="50" >'.$prixtotal.' euros </td>
</tr>
</table>';

$tva='<table border="1">

<tr>
<td width="134"  height="50">TVA: </td><td width="120" height="50" > 0 euros  </td>
</tr>
</table>';

}
else
{
//calcul prix avec tva 21 
if($facturation['tvaClient']==1){
$prixtotal = $regie['prixFacture']+$facturation['prixFacture'];
 $tvacalcul= ($prixtotal*21)/100;   
$prixtotaltva=round($prixtotal+$tvacalcul,2);


//arrondir la tva 

$tvaarondir=round($tvacalcul,2);
$prixfinal='<table border="1">

<tr>
<td width="134"  height="50">Total: </td><td width="120" height="50" >'.$prixtotaltva.' euros </td>
</tr>
</table>';

$prixhtva='<table border="1">

<tr>
<td width="134"  height="50">Prix hors TVA: </td><td width="120" height="50" >'.$prixtotal.' euros </td>
</tr>
</table>';
$tva='<table border="1">

<tr>
<td width="134"  height="50">TVA 21%: </td><td width="120" height="50" >'.$tvaarondir.' euros </td>
</tr>
</table>';
   }
   
   else{ 

// tva 6 pour cent
$prixtotal = $regie['prixFacture']+$facturation['prixFacture'];
$tvacalcul= ($prixtotal*6)/100;   
$prixtotaltva=round($prixtotal+$tvacalcul,2);


//arrondir la tva 

$tvaarondir=round($tvacalcul,2);
$prixfinal='<table border="1">

<tr>
<td width="134"  height="50">Total: </td><td width="120" height="50" >'.$prixtotaltva.' euros </td>
</tr>
</table>';

$prixhtva='<table border="1">

<tr>
<td width="134"  height="50">Prix hors TVA: </td><td width="120" height="50" >'.$prixtotal.' euros </td>
</tr>
</table>';
$tva='<table border="1">

<tr>
<td width="134"  height="50">TVA 6%: </td><td width="120" height="50" >'.$tvaarondir.' euros</td>
</tr>
</table>';


}


}
}


// pas de Régie
else
    {
      $html='<table border="1">
<tr>
<td width="615"  height="50"> '.utf8_decode('Travaux exécutés').'</td><td width="120" height="50" >Montant HTVA</td>
</tr>
<td width="615"  height="300"> '. utf8_decode($facturation['descriptionPrestation']).'
</td><td width="120" height="300" >'.$facturation['prixFacture'].' euros</td>
</tr>



</table>';
    if($facturation['tvaClient']==0){
    //calcul sans tva hors services
$prixfinal='<table border="1">

<tr>
<td width="134"  height="50">Total: </td><td width="120" height="50" >'.$facturation['prixFacture'].' euros </td>
</tr>
</table>';



$prixhtva='<table border="1">

<tr>
<td width="134"  height="50">Prix hors TVA: </td><td width="120" height="50" >'.$facturation['prixFacture'].' euros </td>
</tr>
</table>';

$tva='<table border="1">

<tr>
<td width="134"  height="50">TVA: </td><td width="120" height="50" > 0* euros </td>
</tr>
</table>';

    }
    else{

        if($facturation['tvaClient']==1){
    //calcul prix avec tva 21 % sans régie

$tvacalcul= ($facturation['prixFacture']*21)/100;   
$prixtotaltva=round($facturation['prixFacture']+$tvacalcul,2);

    //arrondir la tva 

$tvaarondir=round($tvacalcul,2);
$prixfinal='<table border="1">

<tr>
<td width="134"  height="50">Total: </td><td width="120" height="50" >'.$prixtotaltva.' euros </td>
</tr>
</table>';

$prixhtva='<table border="1">

<tr>
<td width="134"  height="50">Prix hors TVA: </td><td width="120" height="50" >'.$facturation['prixFacture'].' euros </td>
</tr>
</table>';

$tva='<table border="1">

<tr>
<td width="134"  height="50">TVA 21 %: </td><td width="120" height="50" > '.$tvaarondir.' euros </td>
</tr>
</table>';
    }
    else{
        //tva client est à 6 % sans régie

$tvacalcul= ($facturation['prixFacture']*6)/100;   
$prixtotaltva=round($facturation['prixFacture']+$tvacalcul,2);

 //arrondir la tva 

$tvaarondir=round($tvacalcul,2);
$prixfinal='<table border="1">

<tr>
<td width="134"  height="50">Total: </td><td width="120" height="50" >'.$prixtotaltva.' euros </td>
</tr>
</table>';

$prixhtva='<table border="1">

<tr>
<td width="134"  height="50">Prix hors TVA: </td><td width="120" height="50" >'.$facturation['prixFacture'].' euros </td>
</tr>
</table>';

$tva='<table border="1">

<tr>
<td width="134"  height="50">TVA 6%: </td><td width="120" height="50" > '.$tvaarondir.' euros </td>
</tr>
</table>';
    



    }

    }

}

/*
$descriptionPrestation='<table border="0">
<tr>
<td width="615"  height="400">'. utf8_decode($facturation['descriptionPrestation']).' </td><td width="120" height="400" >'.$facturation['prixFacture'].' euros</td>

</tr>

<tr>

</table>';*/

$htmltab='<table border="">

<td width="735" height="30"><br>'.utf8_decode('* TVA à aquitter par le co-contractant: AR1 Art. 20 Code TVA').'</td>
</tr>

</table>';


$chantier='<table border="0">
<tr>
<td width="80"  height="50">Chantier : </td><td width="466" height="50" >'.utf8_decode($facturation['VillePrestation']).''.$reqchantier['numContrat'].'  </td>
</tr>
<tr>

</table>';





$pdf->Cell(116);
$pdf->WriteHTML($datehtml);
$pdf->Cell(116);
$pdf->WriteHTML($moishtml);
$pdf->Ln(5);
$pdf->WriteHTML($chantier);
$pdf->Ln(2);
$pdf->WriteHTML($html);
$pdf->Ln(1);
//$pdf->WriteHTML($descriptionPrestation);

/*if($_GET['idmois'] == $regie['moisPrestation']){

$service='<table border="1">
<tr>
<td width="615"  height="50">REGIE/EXTRA = '.$regie['descriptionPrestation'].' </td><td width="120" height="50" >
'.$regie['prixFacture'].' euros</td>
</tr>
</tr>
</table>';

 $pdf->WriteHTML($service);
}*/


$pdf->Ln(3);
$pdf->Cell(120);




 $pdf->WriteHTML($prixhtva);
 $pdf->Cell(120);
 $pdf->WriteHTML($tva);

 $pdf->Cell(120);
  $pdf->WriteHTML($prixfinal);
 $pdf->Cell(120);
$pdf->Ln(1);
if($facturation['tvaClient']==0){

}
if($facturation['tvaClient']==0){
    //si il y pas de tva
$pdf->WriteHTML($htmltab);


}
$pdf->Output();
?>







$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->Cell(80);


$pdf->Cell(30,10,'Facturation: '.$facturation['nomClient'].'',0,0,'C');
$pdf->Ln(8);
 /*
 $pdf->Cell(0,10,'Date : ',1,1);
 $pdf->Ln(3);
  $datee = date("d-m-Y ", strtotime($date['jour']));
 $pdf->Cell(0,10,''.$datee.' ',0,1);
 $pdf->Cell(0,10,'Signalitique du patient: ',1,1);
 
 

 $pdf->Ln(3);
 $pdf->Cell(0,10,'Nom  : '.$patient['nom'].' ',0,1);
 $pdf->Cell(0,10,'Prenom : '.$patient['prenom'].' ',0,1);
 $daten = date("d-m-Y ", strtotime($patient['datedenaissance']));
 $pdf->Cell(0,10,'Date de naissance : '.$daten.'',0,1);
 $pdf->Cell(0,10,'Sexe : '.$patient['sexe'].' ',0,1);

 $pdf->Cell(0,10,'Adresse : '.$patient['adresse'].' ',0,1);
 
 $pdf->Cell(0,10,'Commentaire de '.$personnel['nom'].' '.$personnel['prenom'].' ',1,1);
 $pdf->Ln(3);
 $str = iconv('UTF-8', 'windows-1252', $prestation['commentaire']);
 $pdf->MultiCell(0,5,$str); 
 $pdf->Cell(0,10,'Prix de la prestation: ',1,1);
 $pdf->Ln(3);
 define('EURO', chr(128));
 $pdf->Cell(0,10,'Le prix de la prestation:  '. $prestation['prix'].' Euro ',0,1);
 $pdf->Ln(3);


$pdf->Output();*/
?>