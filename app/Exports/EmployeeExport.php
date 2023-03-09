<?php

namespace App\Exports;

use App\Models\EmployeeModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EmployeeModel::get(['id','material_category','material_name','material_pack','material_price','material_quantity','total_price']);
    }

    public function headings() :array
    {
        return ["ID","Material Category","Material Name","Type","Price","Quantity","TOTAL PRICE"];
    }
}
