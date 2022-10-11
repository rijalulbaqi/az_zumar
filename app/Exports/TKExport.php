<?php

namespace App\Exports;

use App\Models\PPDBTK;
use Maatwebsite\Excel\Concerns\FromCollection;

class TKExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PPDBTK::all();
    }
}
