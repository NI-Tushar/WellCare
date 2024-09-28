<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create_account extends Model
{
    use HasFactory;
    protected $table = "user_accounts";
    protected $primaryKey = "id";

    // ________________ setting a mutator for storing a capitalized format data
    public function setUserNameAttribute($value){
        $this->attributes['user_name'] = ucwords($value); // name input data into upercase format
    }
    // ________________ setting an accessors to formatting date which comes from database table
    public function getDateofbirthAttribute($value){
        return date("d-M-Y", strtotime($value));
    }
    public function getCreatedatAttribute($value){
        return date("d-M-Y", strtotime($value));
    }
}
