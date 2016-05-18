<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = ['title', 'time', 'street_address', 'city', 'state', 'venue_details', 'venue_name', 'details'];

    protected $dates = ['time'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function scopeFuture($query)
    {
        $query->where('time', '>=', Carbon::now());
    }

    public function setTimeAtAttribute($time)
    {
        $this->attributes['time'] = Carbon::parse($time);
    }
}
