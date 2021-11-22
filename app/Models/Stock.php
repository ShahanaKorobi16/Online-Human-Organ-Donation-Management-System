<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organ;

class Stock extends Model
{
    use HasFactory;

    protected $table="stocks";
    protected $guarded=[];
    public function organ(){
        return $this->belongsTo(Organ::class);
    }
}
