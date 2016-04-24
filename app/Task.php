<?php

namespace App;

use App\Mst_user;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task'];
    
     protected $casts = [
        'user_id' => 'int',
    ];
     
     public function mst_user()
    {
        return $this->belongsTo(Mst_user);
    }
}
