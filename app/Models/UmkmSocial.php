<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UmkmSocial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'umkm_id',
        'platform',
        'url',
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
