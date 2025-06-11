<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\Eloquent\Model;

class MaxUsage implements ValidationRule
{
    protected string $modelClass;
    protected string $column;
    protected int $max;

    public function __construct(string $modelClass, string $column, int $max)
    {
        $this->modelClass = $modelClass;
        $this->column = $column;
        $this->max = $max;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!class_exists($this->modelClass) || !is_subclass_of($this->modelClass, Model::class)) {
            $fail('Internal validation error: invalid model class.');
            return;
        }

        $count = $this->modelClass::where($this->column, $value)->count();

        if ($count >= $this->max) {
            $fail("The :attribute has already been used {$this->max} times.");
        }
    }
}
