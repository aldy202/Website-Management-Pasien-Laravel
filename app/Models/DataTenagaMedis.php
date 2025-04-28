<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTenagaMedis extends Model
{
    use HasFactory;
    protected $fillable = ['nama','umur','email','no_telp','gender'];
    protected $table = 'data_tenaga_medis';
    public $timestamps = false;
}
