<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    // protected $table = ''
    protected $fillable = [
        'serviceName',
        'serviceDescription',
        'serviceType',
        'servicePortfolio'
    ];
}
