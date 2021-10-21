<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    // protected $table = ''
    protected $fillable = [
        'vendorName',
        'vendorDescription',
        'vendorPhone',
        'vendorAddress'
    ];
}
