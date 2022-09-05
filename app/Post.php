<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';

    protected $fillable = ['user_id', 'title', 'body', 'image', 'iframe'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getGetImageAttribute() {
        if($this->image ) {
            return url("storage/".$this->image);
        }
    }
}
