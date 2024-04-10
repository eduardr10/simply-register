<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportToExcel implements FromCollection, WithHeadings
{

    public function __construct(protected $data, protected $headers)
    {
    }

    public function headings(): array
    {
        return $this->headers;
    }

    public function collection()
    {
        return $this->data;
    }
}
