<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable = [
        'email', 'client_type', 'date', 'sex', 'age', 'region', 
        'service_availed', 'transaction_mode', 'awareness_cc', 
        'visibility_cc', 'usefulness_cc',
        'SQD0', 'SQD1', 'SQD2', 'SQD3', 'SQD4', 'SQD5', 'SQD6', 'SQD7', 'SQD8'
    ];
    
}

