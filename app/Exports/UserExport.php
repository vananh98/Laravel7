<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;


class UserExport implements FromCollection, withHeadings, WithCustomStartCell
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return
            [
                "id",
                "name",
                "",
                "",
                "",
                "",
                "email",
                "phone"
            ];
    }
    public function startCell(): string
    {
        return 'B5';
    }
    public function collection()
    {
        return User::all();
    }
}
