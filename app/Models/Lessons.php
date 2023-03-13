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
        'chapters_id',
        'name',
        'slug',
        'description',
        'video',
        'duration',
        'type',
        'status',
    ];

    //foreign key chapters_id
    public function chapters()
    {
        return $this->belongsTo(Chapters::class);
    }


}
