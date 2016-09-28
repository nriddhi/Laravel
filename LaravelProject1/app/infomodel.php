<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infomodel extends Model

{
    
    Protected $table = "info";

    protected $fillable = ['name', 'email', 'age', 'hometown'];


}
