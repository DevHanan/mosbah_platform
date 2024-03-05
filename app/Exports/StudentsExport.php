<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExport implements FromCollection, WithHeadings, WithMapping
{
    

    /**
     * @return Collection
     */
    public function collection()
    {
        return Student::all(); // replace with your query to get the table data
    }

    /**
     * @inheritDoc
     */
    public function headings(): array
    {
        return [
            'ID',
            'First Name',
            'Last Name',
            'userName',
            'Phone',
            'Email',
            'country',
            'track',
            'qualifications',
            'About Student'
        ];
    }

    /**
     * @inheritDoc
     */
    public function map($student): array
    {
        return [
            $student->id,
            $student->first_name,
            $student->last_name,
            $student->userName,
            $student->phone,
            $student->email,
            $student->country ? $student->country->name : "",
           $student->track ?  $student->track->name :"",
            $student->qualifications,
            $student->about_student
        ];
    }
}
