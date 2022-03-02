<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','email','password','retype_password','first_name','last_name','city','province','country','emp','phone_number','address','school','educationlvl','edustat','grdate','emp','jbtle','jbduty','worktime','program'];
    

}
