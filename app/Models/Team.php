<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Team extends Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'team';
    protected $fillable = ['team_name', 'team_password', 'team_logo'];

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'team_id';

  /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the athletes for the team.
     */
    public function athletes()
    {
        return $this->hasMany(Athlete::class,'team_id');
    }
}
