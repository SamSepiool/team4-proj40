<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Order;

class Plate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plate_name', 'price', 'visible',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
