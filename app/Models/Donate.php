<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donate extends Model
{
    protected $fillable = [
        'donor', 'purpose', 'memoriam', 'amount'
    ];

    use HasFactory;
    use SoftDeletes;

}
