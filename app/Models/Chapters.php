<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapters extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'course_id',
        'name',
        'slug',
        'description',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    //hasmany lesson foreignkey chapters_id
    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }

}
