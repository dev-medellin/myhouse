<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialModel as MM;
use PDF;

class PDFController extends Controller
{
    //
    public function generatePDF()

    {


        // $query = MM::where('proj_id','=', $id)->first();

        $data = [

            // 'body' => $query->materials_desc,

            'dates' => date('m/d/Y')

        ];

          

        $pdf = PDF::loadView('admin/pdf/myPDF', $data);


        $pdf->setPaper('Legal', 'Portrait');

        $pdf->output();

        $canvas = $pdf->getDomPDF()->getCanvas();


        $height = $canvas->get_height();

        $width = $canvas->get_width();


        $canvas->set_opacity(.2,"Multiply");


        $canvas->set_opacity(.1);


        $canvas->page_text($width/5, $height/2, 'MyHome.com', null,

        55, array(0,0,0),2,2,-30);


        return $pdf->stream('printing.pdf');

    }
}
