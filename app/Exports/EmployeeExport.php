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

     public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);

                 $cellRanges = 'E:E*F:F'; // Replace E with the column you want to sum
                 $rows = $event->sheet->getHighestRow(); 
                 for ($row = count($this->collection()); $row <= $rows; $row++) {
                    $event->sheet->setCellValue('G'.$row
                        , '=SUM('.$cellRanges.')');
                }
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
