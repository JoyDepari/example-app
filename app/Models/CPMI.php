<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms;

class CPMI extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        
    ];
}
