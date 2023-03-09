<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialModel as MM;
use App\Models\ProjectModel;
use App\Models\EmployeeModel;
use PDF;

class PDFController extends Controller
{
    //
    public function generatePDF($id)

    {
        $select_proj = ProjectModel::select('proj_name')->where('id', $id)->first();
        $fetch_mat = MM::selectRaw('new_mat_desc')->where('proj_id','=', $id)->first();
        $exp = EmployeeModel::where('project_id',$id)->get();

        $data = [
            'materials' => json_decode($fetch_mat->new_mat_desc, TRUE),
            'materials_exp' => $exp,
            'dates' => date('m/d/Y')
        ];

          

        $pdf = PDF::loadView('client/pdf/myPDF', $data);


        $pdf->setPaper('Legal', 'Landscape');

        $pdf->output();

        $canvas = $pdf->getDomPDF()->getCanvas();


        $height = $canvas->get_height();

        $width = $canvas->get_width();


        $canvas->set_opacity(.2,"Multiply");


        $canvas->set_opacity(.1);


        $canvas->page_text($width/5, $height/2, 'MyHome.com', null,

        55, array(0,0,0),2,2,-30);

        $name = str_replace(' ', '_', $select_proj->proj_name);

        return $pdf->download($name.'.pdf');

    }
}
