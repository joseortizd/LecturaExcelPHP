<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$inputFileName = './test/ejemplo.xlsx';

/** Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

$hoja1 = $spreadsheet->getActiveSheet();
$ColumnaActual = 'A';
$AcumuladorPrimeraFila = 0;
$AcumuladorSegundaFila = 0;
for ($i=0; $i <=3; $i++) {
    $FilaActual = 1;
    $valor = $hoja1->getCell($ColumnaActual."1");
    $AcumuladorPrimeraFila+= $valor->getValue();
    
    $valor = $hoja1->getCell($ColumnaActual."2");
    $AcumuladorSegundaFila+= $valor->getValue();
    $ColumnaActual++;
}
echo "<br><hr>";    
echo "La suma de la fila uno es: ".$AcumuladorPrimeraFila;
echo "<br><hr>";
echo "La suma de la fila dos es: ".$AcumuladorSegundaFila;
echo "<hr>";