<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'tbl_country';
    protected $fillable = ['country', 'iso', 'calling_code','sms_status','is_dispatchable','is_active'];

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
