<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFlight extends Model
{
    use HasFactory;
    protected $fillable = [
        'price', 'airline', 'number_scales', 'duration_hours'
    ];
    public function flight(){
        return $this->belongsTo(Fligth::class);
    }
}
