<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = ['department_id', 'name', 'position', 'salary', 'joined_at'];

    protected function casts(): array
    {
        return ['joined_at' => 'date', 'salary' => 'decimal:2'];
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}