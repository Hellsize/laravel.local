<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $table = 'posts';
   public $timestamps = false;
   protected $fillable= [
'id',
'title',
'name',
'surname'

   ];
}
