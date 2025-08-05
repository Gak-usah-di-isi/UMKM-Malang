<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UmkmDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'umkm_id',
        'type',
        'file_path',
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
