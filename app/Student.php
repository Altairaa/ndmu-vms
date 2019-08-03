<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

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
    protected $fillable = ['id_number', 'last_name', 'first_name', 'middle_name', 'sport_id', 'semester_id', 'Semester', 'birth_date', 'gender', 'course', 'year', 'contact_number', 'street', 'city_or_municipality', 'province', 'PE111', 'PE112', 'PE121', 'PE122', 'NSTP1', 'NSTP2', 'contact_person_id'];

    public function sport()
    {
        return $this->belongsTo('App\Sport');
    }
    public function semester()
    {
        return $this->belongsTo('App\Semester');
    }
    public function ContactPerson()
    {
        return $this->belongsTo('App\ContactPerson');
    }

    public function getNameAttribute()
    {
        return $this->last_name.', '.$this->first_name;
    }

    public function getAddressAttribute()
    {
        # code...
    }
    
}
