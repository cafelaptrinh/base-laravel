<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table='users';

    protected $fillable = [
        'name', 'realname', 'username', 'avatar', 'email', 'password', 'sex', 'birthday', 'phone', 'address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function roles(){
        return $this->belongsToMany(Role::class);
    }

    function bans(){
        return $this->belongsToMany(Permission::class,'ban_user');
    }
    
    function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    function allPermission(){
        $permission=$this->permissions;
        if($this->roles){
            $all=$permission->merge($this->loadMissing('roles', 'roles.permissions')
            ->roles->flatMap(function ($role) {
                return $role->permissions;
            })->sort()->values());
        }
        return $all->sort()->values();
    }

    function hasRole($name){
        $r=new Role;
        if(is_string($name)){
            $role=$r->findByName($name);
        }else if(is_int($name)){
            $role=$r->findById($name);
        }
        if(!$role){
            return false;
        }
        return $this->roles->contains('key',$name);
    }


    function hasPermission($name){
        $per=new Permission;
        if(is_string($name)){
            $per=$per->findByName($name);
        }else if(is_int($name)){
            $per=$per->findById($name);
        }
        if(!$per){
            return false;
        }
        if($this->bans->contains('key',$name)){
            return false;
        }
        if($check=$this->allPermission()->contains('key',$name)){
            return $check;
        }
        return false;
    }

    function role($roles){
        $roleClass=new Role;
        if(!is_array($roles)){
            $roles=[$roles];
        }
        foreach($roles as $role){
            $arrs=$roleClass->findByName($role)->users;
            foreach($arrs as $arr){
                $users[]=$arr;
            }
        };
        return $users;
    }
}
