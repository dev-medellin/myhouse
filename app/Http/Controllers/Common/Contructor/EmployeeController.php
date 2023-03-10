<?php

namespace App\Http\Controllers\Common\Contructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\EmployeeModel;


class EmployeeController extends Controller
{

    public function fileImportExport()
    {
        return view('file-import');
    }
    
        /**
        * @return \Illuminate\Support\Collection
        */
        public function fileImport(Request $request) 
        {
            $requestId = $request->proj_id;

            EmployeeModel::where('project_id', $requestId)->delete();
            
            Excel::import(new EmployeeImport($requestId), $request->file('file')->store('temp'));
            return back();
        }

        /**
        * @return \Illuminate\Support\Collection
        */
        public function fileExport(Request $request) 
        {        
            $proj = request()->query('proj');
            $name = EmployeeModel::where('project_id', $proj)->first();
            $title = 'Template';
            if($name){
                $title = ucfirst($name->material_category);
            }
            return Excel::download(new EmployeeExport($proj), $title.'-materials-collection-'.date('Y-m-d').'.xlsx');
        }

}
