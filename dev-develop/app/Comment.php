<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    //
     protected $fillable = [
    	'body',
    	'url',
    	'comnentable_id',
    	'commentable_type',
    	'user_id'
    	
];

// public function user(){
//         return $this -> belongsTo('App\Models\User');
//     }

// public function project(){
//         return $this -> belongsTo('App\Models\Project');
//     }
// public function company(){
//         return $this -> belongsTo('App\Models\Company');
//     }

}
