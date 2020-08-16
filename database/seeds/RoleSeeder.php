<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission as Per;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Per::create([
            'name'=>'Đăng nhập Cpanel',
            'key'=>'dashboard'
        ]);
        //1
        Role::create([
            'name'=>'Chủ Cửa Hàng',
            'key'=>'admin'
        ])->permissions()->attach(Per::find(1));
        //2
        Role::create([
            'name'=>'Quản Lý',
            'key'=>'transistor'
        ])->permissions()->attach(Per::find(1));
        //3
        Role::create([
            'name'=>'Nhân Viên Thu Ngân',
            'key'=>'staff'
        ])->permissions()->attach(Per::find(1));
        //4
        Role::create([
            'name'=>'Nhân Viên Bán Hàng',
            'key'=>'salesman'
        ])->permissions()->attach(Per::find(1));
        //5
        Role::create([
            'name'=>'Shipper',
            'key'=>'shipper'
        ])->permissions()->attach(Per::find(1));
        //6
        Role::create([
            'name'=>'Khách Hàng',
            'key'=>'customer'
        ]);
        Role::create([
            'name'=>'Khách Hàng VIP',
            'key'=>'customer-vip'
        ]);
    }
}
