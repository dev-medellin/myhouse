<?php

namespace App\Http\Controllers\Common\Contructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;


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
            
            Excel::import(new EmployeeImport($requestId), $request->file('file')->store('temp'));
            return back();
        }

        /**
        * @return \Illuminate\Support\Collection
        */
        public function fileExport(Request $request) 
        {        
            return Excel::download(new EmployeeExport, 'employee-collection.xlsx');
        }

}
