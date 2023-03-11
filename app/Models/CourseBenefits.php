<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseBenefits extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'course_id',
        'name',
        'description',
        'slug',
        'status',
        'image',
        'icon',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
