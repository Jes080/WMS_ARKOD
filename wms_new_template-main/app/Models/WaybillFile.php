<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaybillFile extends Model
{
    use HasFactory;


    protected $fillable = [
        'waybill_id',
        'file_path',
        'file_name',
    ];

    public function waybill()
    {
        return $this->belongsTo(Waybill::class);
    }
}
