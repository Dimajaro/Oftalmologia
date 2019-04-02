<?php

//require('../clases/fpdf181/fpdf.php');

require_once('../clases/cls_pdf.php');

$myJSON = json_decode($_GET['myJSON1']);

report($myJSON, $total_servicio);

function report($myJSON, $total_servicio) {
// Instanciation of inherited class
    $pdf = new PDF('L', 'mm', 'Letter');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times', '', 5);
//$pdf->ChapterTitle(1,'HOLA');
// $fecha = '2017-11-20';
    $pdf->FECHATitle('', 'FECHA:' . date('d/m/Y H:i '));
    $pdf->Cell(0, 4, '', 0, 1);
    //$pdf->ChapterTitle2(' Reporte agenda - paciente: '.getnombrepaciente($id_paciente),' ');
// $fecha = cambiaf_a_mysql($_POST['fecha_atencion_in']);
    imprimirrpt($myJSON, $pdf);
    $pdf->Output();
}

function imprimirrpt($arr, $pdf) {

    $w = array(20, 20, 20, 20, 20, 20);
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Lejos", 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Esf", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "Cil", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "Eje", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "OD:", 0, 0, 'L');
    $pdf->Cell($w[1], 6, $arr[18], 0, 0, 'C');
    $pdf->Cell($w[1], 6, "$arr[20]", 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[22], 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "OI:", 0, 0, 'L');
    $pdf->Cell($w[1], 6, $arr[19], 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[21], 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[23], 0, 0, 'C');

    $pdf->Ln();
    $pdf->Ln();

    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Cerca", 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Esf", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "Cil", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "Eje", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "OD:", 0, 0, 'L');
    $pdf->Cell($w[1], 6, $arr[29], 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[31], 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[33], 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "OI:", 0, 0, 'L');
    $pdf->Cell($w[1], 6, $arr[30], 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[32], 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[34], 0, 0, 'C');

    $pdf->Ln();
    $pdf->Ln();

    $arrOtc;
    $optico;
    $pdf->Cell(100, 6, "Lentes Opticos", 0, 0, 'L');
    $pdf->Ln();
    $i = 0;
//    for ($i = 41; $i < 55; $i++)
    if ($arr[40]) {
        $arrOtc[$i++] = "Organico";
    }if ($arr[41]) {
        $arrOtc[$i++] = "Vidrio";
    }
    if ($arr[42]) {
        $arrOtc[$i++] = "Policarbonato";
    }if ($arr[43]) {
        $arrOtc[$i++] = "UV";
    }
    if ($arr[44]) {
        $arrOtc[$i++] = "Antireflex";
    }if ($arr[45]) {
        $arrOtc[$i++] = "Fotocromatico";
    }
    if ($arr[46]) {
        $arrOtc[$i++] = "Polarizado";
    }if ($arr[47]) {
        $arrOtc[$i++] = "Road";
    }
    if ($arr[48]) {
        $arrOtc[$i++] = "Filtro Azul";
    }if ($arr[49]) {
        $arrOtc[$i++] = "Antirayas";
    }
    if ($arr[50]) {
        $arrOtc[$i++] = "2 Lentes";
    }if ($arr[51]) {
        $arrOtc[$i++] = "Bifocales";
    }
    if ($arr[52]) {
        $arrOtc[$i++] = "Multifocales";
    }if ($arr[53]) {
        $arrOtc[$i++] = "Alto Indice";
    }
    for ($j = 0; $j < sizeof($arrOtc) - 1; $j++)
        $optico = $optico . $arrOtc[$j] . "-";
    $optico = $optico . $arrOtc[sizeof($arrOtc) - 1];
    $pdf->Cell($w[1], 6, $optico, 0, 0, 'L');
    $pdf->Ln();
    $pdf->Ln();

    $arrCtt;
    $contacto;
    $pdf->Cell(100, 6, "Lentes de Contacto", 0, 0, 'L');
    $pdf->Ln();
    $i = 0;
//    for ($i = 41; $i < 55; $i++)
    if ($arr[54]) {
        $arrCtt[$i++] = "Blando";
    }if ($arr[55]) {
        $arrCtt[$i++] = "Torico";
    }
    if ($arr[56]) {
        $arrCtt[$i++] = "Desechables";
    }if ($arr[57]) {
        $arrCtt[$i++] = "Uso prolongado";
    }
    if ($arr[58]) {
        $arrCtt[$i++] = "Multifocal";
    }

    for ($j = 0; $j < sizeof($arrCtt) - 1; $j++)
        $contacto = $contacto . $arrCtt[$j] . "-";
    $contacto = $contacto . $arrCtt[sizeof($arrCtt) - 1];
    $pdf->Cell($w[1], 6, $contacto, 0, 0, 'L');

    $pdf->Ln();
    $pdf->Ln();

    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Distancia Pupilar", 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Lejos", 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[26], 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "Cerca", 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[37], 0, 0, 'C');
}

?>