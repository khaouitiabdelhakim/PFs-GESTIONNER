<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Dompdf\Dompdf;
use App\Models\Student; // Add this line at the top of the file

use Illuminate\Support\Facades\View; // Add this line at the top of the file


class PDFController extends Controller
{
   
    public function generatePDF()
    {
        $students = Student::all();
    
        $html = View::make('pdf.convocation')->with('students', $students)->render();
    
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
    
        $dompdf->render();
    
        $dompdf->stream('example.pdf', ['Attachment' => false]);
    
        exit();
    }

}

