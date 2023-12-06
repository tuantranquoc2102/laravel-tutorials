<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Data\DummyData;

class ExportPdfController extends Controller
{
    public function generatePDF()
    {
        // Call getData method from DummyData class
        $data3Columns = DummyData::getData3Columns();
        $data4Columns = DummyData::getData4Columns();
              
        $pdf = PDF::loadView('viewExportPdf', ['data1' => $data3Columns, 'data2' => $data4Columns]);

        return $pdf->download('ExportPdf.pdf');
    }
}
