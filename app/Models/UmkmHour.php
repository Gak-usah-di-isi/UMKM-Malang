<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UmkmHour extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'umkm_id',
        'day',
        'open_time',
        'close_time',
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
