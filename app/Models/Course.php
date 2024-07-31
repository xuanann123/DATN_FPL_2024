<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'course_name',
        'course_image',
        'course_desc',
        'course_slug',
        'course_duration',
        'sort_description',
        'course_price',
        'course_price_sale',
        'course_free',
        'total_student',
        'is_active',
        'is_booking_teacher',
    ];
}
