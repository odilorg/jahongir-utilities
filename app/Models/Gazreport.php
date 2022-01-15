<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gazreport extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setReportDateAttribute($value) {
        $this->attributes['report_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
    public function getReportDateAttribute($value) {
     return Carbon::parse($value)->format('F - d');
 }


}
