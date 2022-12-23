<?php
ob_start();
 
define('FPDF_FONTPATH','fpdf/font/');
require('fpdf/fpdf.php');
/**
 Judul  : Laporan Tools:
 Author : Lemo Group
 
 **/
//Menampilkan data dari tabel di database
$nama = $_POST['nama'] ;
$domain = $_POST['domain'] ;
$domainTotal = $_POST['tot-domain'];
$email = $_POST['email'] ;
$emailTotal = $_POST['tot-email'];
$webDesign = $_POST['web-design'] ;
$webDesignTotal = $_POST['tot-web-design'];
$assetsTotal = $_POST['tot-assets'] ;
$crTotal = $_POST['tot-cr'];
$ml = $_POST['ml'] ;
$mlTotal = $_POST['tot-ml'];
$cta = $_POST['cta'] ;
$ctaTotal = $_POST['tot-cta'];
$iklan = $_POST['iklan'] ;
$iklanTotal = $_POST['tot-iklan'];
if(isset($_POST['motion'])){
    
    $motion = $_POST['motion'] ;
} else {
    $motion = "tidak" ;
}
$motionTotal = $_POST['tot-motion'];
if(isset($_POST['design-iklan'])){
    
    $designIklan = $_POST['design-iklan'] ;
} else {
    $designIklan = 0 ;
}

$designIklanTotal = $_POST['tot-design-iklan'];
$total = $_POST['total'] ;

//Inisiasi untuk membuat header kolom
$column_nama = "";
$column_domain = "";
$column_domainTotal = "";
$column_email = "";
$column_emailTotal = "";
$column_webDesign = "";
$column_webDesignTotal = "";
$column_assetsTotal = "";
$column_crTotal = "";
$column_ml = "";
$column_mlTotal = "";
$column_cta = "";
$column_ctaTotal = "";
$column_iklan = "";
$column_iklanTotal = "";
$column_motion = "";
$column_motionTotal = "";
$column_designIklan = "";
$column_designIklanTotal = "";
$column_total = "";

//isi column
$column_nama = $column_nama.$nama."\n";
$column_domain = $column_domain.$domain."\n";
$column_domainTotal = $column_domainTotal.$domainTotal."\n";
$column_email = $column_email.$email."\n";
$column_emailTotal = $column_emailTotal.$emailTotal."\n";
$column_webDesign = $column_webDesign.$webDesign."\n";
$column_webDesignTotal = $column_webDesignTotal.$webDesignTotal."\n";
$column_assetsTotal = $column_assetsTotal.$assetsTotal."\n";
$column_crTotal = $column_crTotal.$crTotal."\n";
$column_ml = $column_ml.$ml."\n";
$column_mlTotal = $column_mlTotal.$mlTotal."\n";
$column_cta = $column_cta.$cta."\n";
$column_ctaTotal = $column_ctaTotal.$ctaTotal."\n";
$column_iklan = $column_iklan.$iklan."\n";
$column_iklanTotal = $column_iklanTotal.$iklanTotal."\n";
$column_motion = $column_motion.$motion."\n";
$column_motionTotal = $column_motionTotal.$motionTotal."\n";
$column_designIklan = $column_designIklan.$designIklan."\n";
$column_designIklanTotal = $column_designIklanTotal.$designIklanTotal."\n";
$column_total = $column_total.$total."\n";

//ukuran / size isi tabel
$Y_Cust = 60;
$Y_Judul = 90;
$Y_Total = 205;  
$y1 = 100;      
$y2 = 110;      
$y3 = 120;
$y4 = 130;
$y5 = 140;
$y6 = 150;
$y7 = 160;
$y8 = 170;
$y9 = 180;
$y10 = 190;
$X_Items = 20;
$X_Keterangan = 110;
$X_Harga = 160;


//Create a new PDF file
$pdf = new FPDF('P','mm','A4'); //L For Landscape / P For Portrait
$pdf->AddPage();

// $pdf->Image('icons.png',10,10,30,20);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(200,40,'Pembuatan Website di Projasa',0,1,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Text(12, 40, 'Tanggal : '. date('d - M - Y'));
$pdf->Ln();
$pdf->Line(0,50,210,50);             
$pdf->SetLineWidth(0);        
$pdf->Ln();

//pemesan
$pdf->SetFont('Arial','B',13);
$pdf->SetY($Y_Cust);
$pdf->SetX(20);
$pdf->Cell(25,10,'Dipesan Oleh : ','',0,'L',0);
$pdf->SetY($Y_Cust);
$pdf->SetX(55);
$pdf->Cell(50,10,$column_nama,'',0,'L',0);

//Judul
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Judul);
$pdf->SetX(20);
$pdf->Cell(90,10,'ITEM','B',0,'L',0);
$pdf->SetY($Y_Judul);
$pdf->SetX(110);
$pdf->MultiCell(50,10,'KETERANGAN','B','C');
$pdf->SetY($Y_Judul);
$pdf->SetX(160);
$pdf->MultiCell(30,10,'HARGA','B','C');

//Item List
$pdf->SetFont('Arial','',10);
$pdf->SetY($y1);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Domain','B',0,'L',0);
$pdf->SetY($y2);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Email Bisnis','B',0,'L',0);
$pdf->SetY($y3);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Web Design (Page)','B',0,'L',0);
$pdf->SetY($y4);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Asset Design','B',0,'L',0);
$pdf->SetY($y5);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Copywritting','B',0,'L',0);
$pdf->SetY($y6);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Multi Language','B',0,'L',0);
$pdf->SetY($y7);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Call To Action (Whatsapp, Email & Social Media)','B',0,'L',0);
$pdf->SetY($y8);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Iklan','B',0,'L',0);
$pdf->SetY($y9);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Motion Graphic','B',0,'L',0);
$pdf->SetY($y10);
$pdf->SetX($X_Items);
$pdf->Cell(90,10,'Design Iklan','B',0,'L',0);
$pdf->Ln();

//Keterangan List
$pdf->SetFont('Arial','',10);
$pdf->SetY($y1);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_domain,'B','C');
$pdf->SetY($y2);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_email,'B','C');
$pdf->SetY($y3);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_webDesign,'B','C');
$pdf->SetY($y4);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,'-','B','C');
$pdf->SetY($y5);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,'-','B','C');
$pdf->SetY($y6);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_ml,'B','C');
$pdf->SetY($y7);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_cta,'B','C');
$pdf->SetY($y8);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_iklan,'B','C');
$pdf->SetY($y9);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_motion,'B','C');
$pdf->SetY($y10);
$pdf->SetX($X_Keterangan);
$pdf->MultiCell(50,10,$column_designIklan,'B','C');

//Harga List
$pdf->SetFont('Arial','',10);
$pdf->SetY($y1);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_domainTotal,'B','L');
$pdf->SetY($y2);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_emailTotal,'B','L');
$pdf->SetY($y3);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_webDesignTotal,'B','L');
$pdf->SetY($y4);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_assetsTotal,'B','L');
$pdf->SetY($y5);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_crTotal,'B','L');
$pdf->SetY($y6);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_mlTotal,'B','L');
$pdf->SetY($y7);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_ctaTotal,'B','L');
$pdf->SetY($y8);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_iklanTotal,'B','L');
$pdf->SetY($y9);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_motionTotal,'B','L');
$pdf->SetY($y10);
$pdf->SetX($X_Harga);
$pdf->MultiCell(30,10,'Rp.'.$column_designIklanTotal,'B','L');

//Total
$pdf->SetFont('Arial','B',11);
$pdf->SetY($Y_Total);
$pdf->SetX(20);
$pdf->MultiCell(140,10,'TOTAL HARGA','','L');
$pdf->SetY($Y_Total);
$pdf->SetX(160);
$pdf->MultiCell(30,10,'Rp.'.$column_total,'','L');

$pdf->Output();	
?>