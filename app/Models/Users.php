<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    //table name
    protected $table = 'users';

    //Primary Key
    public $primaryKey = 'id';
    
    //timestamp
    public $timeStamps = true;
}
