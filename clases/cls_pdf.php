<?php
require_once('fpdf181/fpdf.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of clsreport 43214
 *
 * @author alexis
 */
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
 //   $this->Image('../imagenes/linux.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(40);
    // Title
    $this->Cell(170,10,'Receta  ',1,0,'C');
    // Line break
    $this->Ln(20);
}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',10);
    // Page number
    $this->Cell(0,8,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',7);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,12,"Atencion $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(4);
}
function ChapterTitle2($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',7);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,12," $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(4);
}
function FECHATitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',9);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,6,"$label",0,1,'L',true);
    // Line break
    $this->Ln(5);
}
}?>