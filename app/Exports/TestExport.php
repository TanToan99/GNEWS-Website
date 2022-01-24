<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromCollection;

class TestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            'name',
            'email',
            'create_at'
        ];
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            Date::dateTimeToExcel($user->created_at),
        ];
    }
}
