<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    protected $table = 'registrasi_event';

    protected $fillable = [
        'nama_partisipasi',
        'nama_event',
        'tanggal_event',
        'nomor_registrasi',
        'kategori',
    ];

    public $timestamps = true;
}

