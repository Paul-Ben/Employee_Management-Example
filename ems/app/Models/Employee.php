<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'country_id','state_id',
    //     'city_id',
    //     'department_id',
    //     'first_Name',
    //     'last_name',
    //     'middle_Name',
    //     'address',
    //     'zip_code',
    //     'date_of_birth',
    //     'date_hired'
    // ];

    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
