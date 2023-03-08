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
            $data = [
                //
                "material_name"         => $row[1],
                "material_pack"         => $row[2],
                "material_price"        => $row[3],
                "material_quantity"     => $row[4],
                "project_id"            => $this->requestId
            ];

          return EmployeeModel::updateOrCreate(["project_id"=> $this->requestId,"material_name" => $row[1],"material_pack" => $row[2]],$data);
    }

    public function startRow(): int
    {
        return 2;
    }
}
