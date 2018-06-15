<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionProperties extends Model
{
    protected $fillable = ['key', 'type'];

    public function sections(){
        return $this->belongsTo('App\Section');
    }
    
}
