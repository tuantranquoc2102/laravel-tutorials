<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use PDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Dompdf;

class ExportPdfFromExcelController extends Controller
{
    public function exportPdfFromExcel()
    {
        // Create a new PhpSpreadsheet spreadsheet
        $spreadsheet = new Spreadsheet();

        // Add data to the spreadsheet
        $spreadsheet->getActiveSheet()
            ->setCellValue('A1', 'Name')
            ->setCellValue('B1', 'Email')
            ->setCellValue('A2', 'John Doe')
            ->setCellValue('B2', 'john@example.com')
            ->setCellValue('A3', 'Jane Doe')
            ->setCellValue('B3', 'jane@example.com');

        // Create a Dompdf writer
        $dompdf = new Dompdf($spreadsheet);

        // Create a PhpSpreadsheet writer for Dompdf
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($dompdf, 'Dompdf');

        // Save the PDF file (public/exported/exported_file.pdf)
        $pdfPath = public_path('exported/exported_file.pdf');
        $writer->save($pdfPath);

        // Return a response with a download link to the PDF
        return response()->download($pdfPath, 'exported_file.pdf');
    }
}
