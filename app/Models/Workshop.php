<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{

	/**
     * Get the event that owns the workshop.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

}
