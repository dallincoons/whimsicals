<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'start_day',
        'start_month',
        'start_year',
        'end_day',
        'end_month',
        'end_year',
        'street_address',
        'city',
        'state',
        'venue_details',
        'venue_name',
        'details'
    ];

    protected $dates = [
        'start_day',
        'start_year',
        'end_day',
        'end_month',
        'end_year',];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function scopeFuture($query)
    {
        $query->where('start_date', '>=', Carbon::now());
    }

    public function getStartDateAttribute($time)
    {
        return Carbon::parse($time);
    }

    public function getEndDateAttribute($time)
    {
        return Carbon::parse($time);
    }
}
