<?php

namespace App\Exports;

use App\Models\PPDBSMP;
use Maatwebsite\Excel\Concerns\FromCollection;

class SMPExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PPDBSMP::all();
    }
}
