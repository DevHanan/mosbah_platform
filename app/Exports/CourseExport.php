<?php

namespace App\Exports;

use App\Models\Course;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CourseExport implements FromCollection, WithHeadings, WithMapping
{
      
    
        /**
         * @return Collection
         */
        public function collection()
        {
            return Course::all(); // replace with your query to get the table data
        }
    
        /**
         * @inheritDoc
         */
        public function headings(): array
        {
            return [
                'ID',
                'Name',
                'Price',
                'Instructor',
                'Track',
                'Course Type',
                'Published Date',
                'Promo Url',
                'level',
                'description',
                'goals',
                'description',
                'goals',
                'directedTo',
               
            ];
        }
    
        /**
         * @inheritDoc
         */
        public function map($course): array
        {
            return [
                $course->id,
                $course->name,
                $course->price,
                optional($course->instructor)->first_name . ' ' . optional($course->instructor)->last_name,
                optional($course->track)->name,
                optional($course->courseTypes)->name,
                $course->published_at,
                $course->promo_url,
                $course->level,
                $course->description,
                $course->goals,
                $course->directedTo
             

            ];
        }
}
