<?php

namespace App;

use App\Task;

use Illuminate\Database\Eloquent\Model;

class Mst_user extends Model
{
    protected $fillable = [
        'name', 'email', 'adress',
    ];
    
    public function tasks()
    {
        return $this->hasMany(Task);
    }
}
