<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img','title', 'details','admin_id',
    ];

    //  public function area() {
    //     return $this->belongsTo(Area::class, 'location');
    // }
}
