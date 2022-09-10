<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funds extends Model
{
    use HasFactory;
     //table name
    protected $table = 'fundtransactions';

     //Primary Key
    public $primaryKey = 'id';
}
