<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nik', 'nama', 'telepon', 'alamat'];

}
