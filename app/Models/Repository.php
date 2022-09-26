<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'reference_id',
        'name',
        'private',
        'archived',
        'disabled',
        'reference_created_at',
        'reference_pushed_at',
    ];
}
