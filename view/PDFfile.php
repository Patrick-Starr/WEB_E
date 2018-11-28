<?php
/**
 * Created by PhpStorm.
 * User: Startklar
 * Date: 26.11.2018
 * Time: 16:17
 */

Require("../../../fpdf181/fpdf.php"); //Pfad zu fpdf.php

class PDF extends FPDF
{
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(55,15,'Rechnung FH-Kurse',1,0,'C');
        // Line break
        $this->Ln(20);
    }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Text color in gray
        $this->SetTextColor(128);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }

    function ChapterTitle($num, $label)
    {
        // Arial 12
        $this->SetFont('Arial','B',12);
        // Background color
        $this->SetFillColor(200,200,200);
        // Title
        $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
        // Line break
        $this->Ln(4);
    }



    function ChapterBody()
    {

        $this->Cell(0,5,'Wir bedanken uns bei Ihnen fr ihren Kunden treue. ');
    }

    function PrintChapter($num, $title)
    {
        $this->AddPage();
        $this->ChapterTitle($num,$title);
    }
}
$pdf = new PDF();
$title = 'Rechnung FH-Kurse';
//$pdf->SetAuthor('Jules Verne');
$pdf->PrintChapter(1,'Rechnung von $datum');
$pdf->ChapterBody();
$pdf->Output();

?>