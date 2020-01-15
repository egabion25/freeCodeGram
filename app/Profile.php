<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        
        $imagePath = ($this->image) ? $this->image : 'profile/BgCpN6q8f0y7MNTRfKXCyw7WbQ5FKeguueo1Znci.jpeg';
  
        return   '/storage/' . $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }    
}
