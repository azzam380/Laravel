<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'email',
        'email_verified_at',
        'username',
        'password',
        'telp',
        'provider_id',
        'provider',
    ];
}
