<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lessons extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'chapter_id',
        'name',
        'slug',
        'description',
        'video',
        'duration',
        'type',
        'status',
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapters::class);
    }


}
