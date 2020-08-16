<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table='permissions';
    
    protected $fillable=[
        'name', 'key'
    ];
    
    public $timestamps=false;

    function roles(){
        return $this->belongsToMany(Role::class);
    }
    
    function users(){
        return $this->belongsToMany(User::class,'permission_user');
    }

    function bans(){
        return $this->belongsToMany(User::class,'ban_user');
    }
        
    function findByName($name){
        return $this->where('key',$name)->first()??false;
    }

    function findById($id){
        return $this->find($id)??false;
    }

}
