<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'record';

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
}
