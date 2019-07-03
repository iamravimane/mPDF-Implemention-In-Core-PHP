<?php


require_once __DIR__ . '/vendor/autoload.php';

$html='<p><span>First Name:</span>'. $GET['firstname'].
'<span>Last Name:</span>'.  $GET['lastname'].
'<span>Address:</span>'. $GET['address'].'</p>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
