<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesperson extends Model
{
    use HasFactory;
    protected $table = 'Salespersons';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'phone', 'email'];
}
