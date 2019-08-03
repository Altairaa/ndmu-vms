<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attendances';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['scheduled_event_id', 'student_id', 'event_id', 'event_date', 'time_in', 'time_out'];

    public function student_id()
    {
        return $this->belongsTo('App\Students');
    }
    public function event_id()
    {
        return $this->belongsTo('App\Events');
    }
    public function event_date()
    {
        return $this->belongsTo('App\Events');
    }
    
}
