

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

$req = $bdd->query('SELECT * FROM factvue where idPrest='. $_GET['idprestation'].' and idClient ='. $_GET['idclient'].'');
$facturation= $req->fetch();

$chantierget=$facturation['chantierPrestation'];

$requete=$bdd->query('SELECT*, month(date_service) as mois FROM service where num_cli='. $_GET['idclient'].'');
$service= $requete->fetch();

$pdf->Cell(50,20,'Facturation:  '.$facturation['yearPrestation'].'-168',0,0,'C');
// Décalage à droite
$pdf->Cell(80);
    $pdf->Cell(42,20,''.$facturation['nomClient'].'',0,0,'C');


$pdf->Ln(5);
$pdf->Cell(43,20,'Date: 30/'. $_GET['idmois'].'/ '.$facturation['yearPrestation'].' ',0,0,'C');
// Décalage à droite
    $pdf->Cell(80);
    $pdf->Cell(50,20,''.$facturation['adresseClient'].'',0,0,'C');

$pdf->Ln(5);
$pdf->Cell(41,20,' Client: MO/'.$facturation['numcli'].'',0,0,'C');
// Décalage à droite
    $pdf->Cell(80);
    $pdf->Cell(56,20,''.$facturation['codepostalClient'].' '.$facturation['villeClient'].'',0,0,'C');

$pdf->Ln(5);


$i=$_GET['idmois'];
    switch ($i) {
    case 1:
    $moishtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Janvier </td>
</tr>
</table>';
    break; 
    case 2:
    $moishtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Fevrier </td>
</tr>
</table>';
   
    break;
    case 3:
   $moishtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Mars </td>
</tr>
</table>';
        break;
    case 4:
            $moishtml='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Avril </td>
</tr>
</table>';
        break;
    case 5:
            $moishtml='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Mai </td>
</tr>
</table>';
        break;

    case 6:
           $moishtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Juin </td>
</tr>
</table>';
        break;
    case 7:
$moishtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Juillet </td>
</tr>
</table>';
    break;
    case 8:
 $moishtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Aout </td>
</tr>
</table>';
        break;
     case 9:
            $moishtml='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Septembre </td>
</tr>
</table>';
        break;
     case 10:
            $moishtml='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Octobre </td>
</tr>
</table>';
        break;
     case 11:
            $moishtml='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Novembre </td>
</tr>
</table>';
        break;
     case 12:
            $moishtml='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Mois: </td><td width="100" height="50" >Decembre </td>
</tr>
</table>';
        break;
}
  
   
$pdf->Ln(10);

$html='<table border="1">
<tr>
<td width="615" bgcolor="#D0D0FF" height="50">Travaux a executes</td><td width="120" height="50" bgcolor="#D0D0FF">Montant</td>
</tr>

</tr>

</table>';


$tva='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">TVA: </td><td width="100" height="50" > *0  </td>
</tr>
</table>';

if(isset($service['prixService'])&& $_GET['idmois'] == $service['mois'])

{

$prixtotal = $service['prixService']+$facturation['prixFacture'];


$prixfinal='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Total: </td><td width="100" height="50" >'.$prixtotal.' euros </td>
</tr>
</table>';

$prixhtva='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Prix hors TVA: </td><td width="100" height="50" >'.$prixtotal.' euros </td>
</tr>
</table>';

}

else
{

$prixfinal='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Total: </td><td width="100" height="50" >'.$facturation['prixFacture'].' euros </td>
</tr>
</table>';



$prixhtva='<table border="1">

<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Prix hors TVA: </td><td width="100" height="50" >'.$facturation['prixFacture'].' euros </td>
</tr>
</table>';


}







$descriptionPrestation='<table border="1">
<tr>
<td width="615" bgcolor="#D0D0FF" height="400">'.$facturation['descriptionPrestation'].' </td><td width="120" height="400" >'.$facturation['prixFacture'].' euros</td>

</tr>

<tr>

</table>';

$htmltab='<table border="1">

<td width="735" height="30"><br>* TVA a aquitter par le co-contractant: AR1 Art. 20 Code TVA</td>
</tr>

</table>';




$datehtml='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Date d echeance : </td><td width="100" height="50" >########## </td>
</tr>
<tr>

</table>';

$chantier='<table border="1">
<tr>
<td width="150" bgcolor="#D0D0FF" height="50">Chantier : </td><td width="250" height="50" >'.$facturation['chantierPrestation'].'  </td>
</tr>
<tr>

</table>';





$pdf->Cell(120);
$pdf->WriteHTML($datehtml);
$pdf->Cell(120);
$pdf->WriteHTML($moishtml);
$pdf->Ln(5);
$pdf->WriteHTML($chantier);
$pdf->Ln(2);
$pdf->WriteHTML($html);
$pdf->Ln(2);
$pdf->WriteHTML($descriptionPrestation);


if($_GET['idmois'] == $service['mois']){

$service='<table border="1">
<tr>
<td width="615" bgcolor="#D0D0FF" height="50">Service = '.$service['description'].' </td><td width="120" height="50" bgcolor="#D0D0FF">
'.$service['prixService'].' euros</td>
</tr>
</tr>
</table>';

 $pdf->WriteHTML($service);
}


$pdf->WriteHTML($htmltab);
$pdf->Ln(3);
$pdf->Cell(120);




 $pdf->WriteHTML($prixhtva);
 $pdf->Cell(120);
 $pdf->WriteHTML($tva);

 $pdf->Cell(120);
  $pdf->WriteHTML($prixfinal);
 $pdf->Cell(120);
$pdf->Ln(1);
$pdf->Cell(50,20,'*Taxe TVA-autoliquidation',0,0,'C');
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