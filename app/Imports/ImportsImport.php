<?php

namespace App\Imports;

use App\Import;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Import([
            'name'     => $row['name'],
            'mobilenumber'    => $row['mobilenumber'], 
        ]);
    }
}
