<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueEmailInStudentInstructor implements Rule
{
    protected $table1;
    protected $table2;
    protected $column;

    /**
     * Create a new rule instance.
     *
     * @param string $table1
     * @param string $table2
     * @param string $column
     */
    public function __construct(string $table1, string $table2, string $column)
    {
        $this->table1 = $table1;
        $this->table2 = $table2;
        $this->column = $column;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return DB::table($this->table1)
            ->where($this->column, $value)
            ->count() === 0 && DB::table($this->table2)
            ->where($this->column, $value)
            ->count() === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute has already been taken.';
    }
}
