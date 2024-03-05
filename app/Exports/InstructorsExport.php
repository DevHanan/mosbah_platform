<?php

namespace App\Exports;

use App\Models\Instructor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InstructorsExport implements FromCollection, WithHeadings, WithMapping
{
   
        
    
        /**
         * @return Collection
         */
        public function collection()
        {
            return Instructor::all(); // replace with your query to get the table data
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
                'track',
                'qualifications',
                'About Instructor',
                'Bank Account'
            ];
        }
    
        /**
         * @inheritDoc
         */
        public function map($instructor): array
        {
            return [
                $instructor->id,
                $instructor->first_name,
                $instructor->last_name,
                $instructor->userName,
                $instructor->phone,
                $instructor->email,
                optional($instructor->track)->name,
                $instructor->qualifications,
                $instructor->about_teacher,
                $instructor->bank_account
            ];
        }
        
    }

