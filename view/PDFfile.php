<?php
/**
 * Created by PhpStorm.
 * User: Startklar
 * Date: 26.11.2018
 * Time: 16:17
 */

include('../fpdf181/fpdf.php'); //Pfad zu fpdf.php
//include('../DAO/DB_Connection.php');

Class PDFcreator extends FPDF
{

    public function createPDF(int $id, $school,$address)
    {
        $pdf = new PDFcreator();
        $pdf->AddPage();
        $pdf->Kopf();

        $pdf->Cell(80, 20,'', 0, 1);
        $pdf->InvoceData($id);
        $pdf->Cell(80, 10,'', 0, 1);
        $pdf->clientData($school,$address);
        $pdf->Cell(80, 10,'', 0, 1);
        $pdf->invoiceBill();
        $pdf->ZahlungsSchein();
        $pdf->Output('F','invoice.pdf');
    }

// utf8_decode(): $str = utf8_decode($str);


    function Kopf()
    {
        $this->Image('../Logo.png',10,6,30);
        $this->SetFont('Arial', 'B', 14);
        //Cellwidth, height, text, border, end line, [algin]
        $this->Cell(130, 5, '', 0,0 );
        $this->Cell(60, 5, 'Rechnung.pdf',0,1);
    }

    function InvoceData(int $id)
    {
        $heute = new DateTime();
//Set font to arial regular, 12
        $this->SetFont('Arial', '', 12);
//Oben Rechts
        $this->cell(130, 5, '', 0, 0);
        $this->cell(30, 5, 'CustomerID' , 0, 0);
        $this->cell(30, 5, $id, 0, 1);
        $this->cell(130, 5, '', 0, 0);
        $this->cell(30, 5, 'Invoice: ', 0, 0);
        $this->cell(30, 5,$heute->format('d.m.Y'),0, 1);
        $this->cell(190, 15, '', 0, 1);
    }

//Kunde beschreiben (Empfänger)
    function clientData($school,$address)
    {
        $this->cell(130, 5, 'Rechnung fuer : ', 0, 1);
        $this->cell(130, 5, $school, 0, 1);
        $this->cell(130, 5, $address, 0, 1);
        $this->cell(130, 5, '', 0, 1);
        $this->cell(190, 10, '', 0, 1);
    }

//Rechnung und Betrag
    function invoiceBill()
    {

        $this->SetFont('Arial', 'B', 14);
        $this->Cell(110, 5, 'Beschreibung', 0, 0);
        $this->Cell(80, 5, 'Betrag(CHF)', 0, 1, 'R');
        $this->SetFont('Arial', '', 12);
        $this->Cell(110, 5, 'Einfuegen Modul', 0, 0);
        $this->Cell(80, 5, '30.- CHF', 0, 1, 'R');
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(110, 5, 'Total: ', 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(80, 5, '30.- CHF', 0, 1, 'R');

    }

    function ZahlungsSchein(){
        $this->Image('../ES.jpg',0,195,210,100);
    }




}

?>