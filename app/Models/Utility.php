<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utility extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function setReportDateAttribute($value)
   {
    $this->attributes['report_date'] = date('Y-m-d', strtotime($value) );
   }
//    public function getReportDateAttribute($value)
// {
//     return Carbon::parse($value)->format('d/m/Y');
// }
}
