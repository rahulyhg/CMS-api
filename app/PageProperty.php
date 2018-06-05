<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageProperty extends Model
{
    protected $fillable = ['propertyKey', 'propertyType'];    

    
    
    /**
     * Get the comments for the blog post.
     */
    public function page_property_values()
    {
        return $this->hasMany('App\PagePropertyValues');
    }
}
