<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'creator_id',
        'updator_id',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function lastUpdator()
    {
        return $this->belongsTo(User::class);
    }
}
