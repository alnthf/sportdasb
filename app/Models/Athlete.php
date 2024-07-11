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
    protected $fillable = [
        'athlete_name', 'age', 'gender', 'height', 'weight', 'sport_name',
        'position', 'jersey_no', 'is_active', 'atlete_pic', 'team_id'
    ];

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
        return $this->hasOne(Device::class,'athlete_id');
    }

     /**
     * Get the team that owns the athlete.
     */
    public function team()
    {
        return $this->belongsTo(Team::class,'athlete_id');
    }

}
