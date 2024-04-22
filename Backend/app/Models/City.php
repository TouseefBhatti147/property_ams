<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    use HasFactory;
    protected $table = 'tbl_city';
    protected $fillable = ['city', 'country_id', 'zipcode'];

    public $timestamps = false;

    // Accessor method to return 'Active' or 'Inactive' for 'is_dispatchable' field
    public function getIsDispatchableAttribute($value)
    {
        return $value ? 'Yes' : 'No';
    }

    // Accessor method to return 'Active' or 'Inactive' for 'sms_status' field
    public function getSmsStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
    public function getIsActiveAttribute($value)
    {
        return $value? 'Active':'Inactive';
    }
    public function general()
    {
        return $this->belongsTo(General::class);
    }
}
