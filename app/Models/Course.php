<?php

namespace App\Models;

use App\Models\Mentor;
use App\Models\Category;
use App\Models\Chapters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'mentor_id',
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'certificate',
        'status',
        'type',
        'price',
        'level',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapters::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
