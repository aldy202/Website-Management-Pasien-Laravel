<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama','umur','gender','no_telp','tgl_perawatan','keluhan','tindakan','status'];
    protected $table = 'data_pasiens';
    public $timestamps = true;
}