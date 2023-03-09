<?php

namespace App\Imports;

use App\Models\EmployeeModel;
use GuzzleHttp\Psr7\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class EmployeeImport implements ToModel, WithStartRow
{
    private $requestId;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function __construct($requestId)
    {
        $this->requestId = $requestId;
    }

    public function model(array $row)
    {
            try{
                $data = [
                    //
                    "material_category"     => $row[1],
                    "material_name"         => $row[2],
                    "material_pack"         => $row[3],
                    "material_price"        => $row[4],
                    "material_quantity"     => $row[5],
                    "total_price"           => ($row[4] * $row[5]),
                    "project_id"            => $this->requestId
                ];
    
              return EmployeeModel::updateOrCreate(["project_id"=> $this->requestId,"material_category" => $row[1],"material_name" => $row[2],"material_pack" => $row[3]],$data);
            }catch (\Exception $e){
                return $e->getMessage();
            }
    }

    public function startRow(): int
    {
        return 2;
    }
}
