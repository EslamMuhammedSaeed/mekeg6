<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foundationsupport extends Model
{
    use HasFactory;
    protected $table = 'foundation_support';

    protected $fillable = [
        'foundation_id',
        'support_id',
    ];
    
}
