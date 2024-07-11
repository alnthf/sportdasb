<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'athlete';
    protected $fillable = ['athlete_name', 'age', 'gender'
    , 'height', 'weight', 'jersey_no', 'sport_name', 'position'
    , 'athlete_pic', 'is_active','team_id'];

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'athlete_id';

  /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     /**
     * Get the device associated with the athlete.
     */
    public function device()
    {
        return $this->hasOne(Device::class);
    }

     /**
     * Get the team that owns the athlete.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
