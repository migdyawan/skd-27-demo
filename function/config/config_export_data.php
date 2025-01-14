<?php
include "../../database/db.php";
session_start();

require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$today = date('Y-m-d');

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();


$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Pangkat');
$sheet->setCellValue('D1', 'Nrp');
$sheet->setCellValue('E1', 'Flight');
$sheet->setCellValue('F1', 'System');
$sheet->setCellValue('G1', 'Tanggal');
$sheet->setCellValue('H1', 'Jam');

$data = mysqli_query($mysql, "SELECT * FROM data WHERE tanggal='{$today}'");

$i = 2;
$no = 1;
while($row = mysqli_fetch_array($data))
{
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['nama']);
    $sheet->setCellValue('C' . $i, $row['pangkat']);
    $sheet->setCellValue('D' . $i, $row['nrp']);
    $sheet->setCellValue('E' . $i, $row['flight']);
    $sheet->setCellValue('F' . $i, $row['system']);
    $sheet->setCellValue('G' . $i, $row['tanggal']);
    $sheet->setCellValue('H' . $i, $row['jam']);
    $i++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('Data Absen.xlsx');
echo "<script>window.location = 'Data Absen.xlsx'</script>";


?>



