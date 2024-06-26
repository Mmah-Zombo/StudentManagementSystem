<?php

namespace App\Models;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'course_name',
        'department',
        'description',
        'fee',
        'course_level',
        'detail',
    ];

    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }
}
