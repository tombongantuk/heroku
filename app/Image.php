<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['file','description','article_id'];
    
    //relation
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
