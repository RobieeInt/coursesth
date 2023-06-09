<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mentor extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'user_id',
        'uuid',
        'name',
        'slug',
        'description',
        'image',
        'status',
        'created_by',
        'updated_by',
        'profession',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
