<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'device';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'device_id';

  /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * Get the athlete associated with the device.
     */
    public function athlete()
    {
        return $this->belongsTo(Athlete::class,'athlete_id');
    }
}
