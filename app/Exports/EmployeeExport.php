<?php

namespace App\Exports;

use App\Models\EmployeeModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class EmployeeExport implements FromCollection, WithHeadings,ShouldAutoSize,WithColumnFormatting,WithEvents
{

     private $requestId;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct($requestId)
    {
        $this->requestId = $requestId;
    }
    public function collection()
    {
        return EmployeeModel::where('project_id',$this->requestId)->get(['id','material_category','material_name','material_pack','material_price','material_quantity','total_price']);
    }

    public function headings() :array
    {
        return ["#","Material Category","Material Name","Type","Price","Quantity","TOTAL PRICE"];
    }

     public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function columnFormats(): array
    {
        return [
            'G:G' => "General"
        ];
    }

}
