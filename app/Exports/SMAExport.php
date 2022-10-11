<?php

namespace App\Exports;

use App\Models\PPDBSMA;
use Maatwebsite\Excel\Concerns\FromCollection;

class SMAExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PPDBSMA::all();
    }
}
