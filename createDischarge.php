<?php

require_once 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$dateOfBirth = $_POST["dateOfBirth"];
$address = $_POST["address"];
$zipCode = $_POST["zipCode"];
$city = $_POST["city"];
$emergencyPhone = $_POST["emergencyPhone"];

try {
    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->pdf->SetDisplayMode('fullpage');

    ob_start();
    include 'testContent.php';
    $content = ob_get_clean();

    $html2pdf->writeHTML($content);
    $html2pdf->output('/Users/nicolas/Web/gppark/decharges/' . $lastName . '-' . $firstName . '.pdf', 'F');
    echo "Test";
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
?>