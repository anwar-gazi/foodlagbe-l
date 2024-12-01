<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiderLocation extends Model
{
    protected $table = 'rider_location';

    protected $fillable = [
        'lat', 'lon', 'rider_username'
    ];

    protected $guarded = ['id'];

    public $timestamps = true;

    public function getDateFormat() {
        return 'Y-m-d H:i:s.u';
    }
}
