<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama',
        'nip',
        'jenisgratif',
        'desksingkat',
        'perkirharga',
        'perispeneri',
        'tglpemberi',
        'lokasipemberi',
        'pemberigratif',
        'image',
        'namalengkap',
        'nip1',
        'jabatan',
        'pangkat',
        'bagian',
        'namalengkap1',
        'jabatan1',
        'pangkat1',
        'bagian1',
        'bentukpoten',
    ];
}
