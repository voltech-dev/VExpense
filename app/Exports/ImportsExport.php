<?php

namespace App\Exports;

use App\Import;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImportsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Import::all();
    }
}
