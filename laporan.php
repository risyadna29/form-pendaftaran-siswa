<?php
// memanggil library FPDF
require('library/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(190, 7, 'SMK DAY DREAM KEY', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR CALON SISWA SMK DAY DREAM KEY', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 6, 'NAMA', 1, 0);
$pdf->Cell(50, 6, 'ALAMAT', 1, 0);
$pdf->Cell(30, 6, 'JENIS KELAMIN', 1, 0);
$pdf->Cell(30, 6, 'AGAMA', 1, 0);
$pdf->Cell(35, 6, 'SEKOLAH ASAL', 1, 1);

$pdf->SetFont('Arial', '', 10);

include 'config.php';
$siswa = mysqli_query($db, "SELECT * FROM calon_siswa");
while ($row = mysqli_fetch_array($siswa)) {
    $pdf->Cell(45, 6, $row['nama'], 1, 0);
    $pdf->Cell(50, 6, $row['alamat'], 1, 0);
    $pdf->Cell(30, 6, $row['jenis_kelamin'], 1, 0);
    $pdf->Cell(30, 6, $row['agama'], 1, 0);
    $pdf->Cell(35, 6, $row['sekolah_asal'], 1, 1);
}

$pdf->Output();
?>
