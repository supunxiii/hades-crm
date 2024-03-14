<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = '_payments';
    protected $primaryKey = 'id';
    protected $fillable = ['customer', 'amount', 'date'];
}
