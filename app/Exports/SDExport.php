<?php

namespace App\Exports;

use App\Models\PPDBSD;
use Maatwebsite\Excel\Concerns\FromCollection;

class SDExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PPDBSD::all();
    }
}
