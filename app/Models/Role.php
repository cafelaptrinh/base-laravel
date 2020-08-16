<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;

class Role extends Model
{
    protected $table='roles';
    
    protected $fillable=[
        'name', 'key'
    ];

    public $timestamps=false;

    function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    
    function users(){
        return $this->belongsToMany(User::class);
    }

    
    function findByName($name){
        return $this->where('key',$name)->first()??false;
    }

    function findById($id){
        return $this->find($id)??false;
    }

    function getAllUser($arr){
        if(!is_array($arr)){
            $arr=[$arr];
        }
        foreach($arr as $a){
            $arrs[]=$this->findByName($a)->id;
        }
        return $arrs;
    }
}
