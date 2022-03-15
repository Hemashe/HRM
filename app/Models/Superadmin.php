<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    protected $table = 'superadmin';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'email', 'mobile','pswd'];
}
