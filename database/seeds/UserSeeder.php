<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Chủ cửa hàng',
            'realname'=>'Ngô Trung Đức',
            'username'=>'admin',
            'email'=>'mung9thang12@gmail.com',
            'avatar'=>'https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/61669639_1094729754068310_6189407967889063936_n.jpg?_nc_cat=110&_nc_sid=110474&_nc_ohc=xSQsVoCo53sAX-je0zu&_nc_ht=scontent.fhph1-1.fna&oh=e2b255153bd0c6f349c6f7aee2d1ec9f&oe=5F4EF62E',
            'password'=>Hash::make('123')
        ])->roles()->attach(Role::find(1));
        User::create([
            'name'=>'Quản Lý',
            'realname'=>'Ngô Bảo Hân',
            'username'=>'transistor',
            'email'=>'cafelaptrinh2@gmail.com',
            'avatar'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/08/avatar-boy-va-con-meo-390x390.jpg',
            'password'=>Hash::make('123'),
            'sex'=>1
        ])->roles()->attach(Role::find(2));
        User::create([
            'name'=>'Nhân viên thu ngân',
            'realname'=>'Ngô Bảo Nam',
            'username'=>'staff',
            'email'=>'singumcolee@gmail.com',
            'avatar'=>'https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/61669639_1094729754068310_6189407967889063936_n.jpg?_nc_cat=110&_nc_sid=110474&_nc_ohc=xSQsVoCo53sAX-je0zu&_nc_ht=scontent.fhph1-1.fna&oh=e2b255153bd0c6f349c6f7aee2d1ec9f&oe=5F4EF62E',
            'password'=>Hash::make('123')
        ])->roles()->attach(Role::find(3));
        User::create([
            'name'=>'Nhân viên bán hàng',
            'realname'=>'Ngô Phương Vy',
            'username'=>'salesman',
            'email'=>'thichnunhan@gmail.com',
            'avatar'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-dai-dien-dep-de-thuong-cho-facebook-zalo-8.jpg',
            'password'=>Hash::make('123'),
            'sex'=>1
        ])->roles()->attach(Role::find(4));
        User::create([
            'name'=>'Shipper',
            'realname'=>'Ngô Hoài Nam',
            'username'=>'shipper',
            'email'=>'hoainam89@gmail.com',
            'avatar'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-dai-dien-dep-de-thuong-cho-facebook-zalo-7-705x580.jpg',
            'password'=>Hash::make('123')
        ])->roles()->attach(Role::find(5));
        User::create([
            'name'=>'Khách hàng',
            'realname'=>'Tên Khách hàng',
            'username'=>'customer',
            'email'=>'customer@gmail.com',
            'avatar'=>'https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/61669639_1094729754068310_6189407967889063936_n.jpg?_nc_cat=110&_nc_sid=110474&_nc_ohc=xSQsVoCo53sAX-je0zu&_nc_ht=scontent.fhph1-1.fna&oh=e2b255153bd0c6f349c6f7aee2d1ec9f&oe=5F4EF62E',
            'password'=>Hash::make('123')
        ])->roles()->attach(Role::find(6));
        User::create([
            'name'=>'Khách hàng vip',
            'realname'=>'Tên Khách hàng vip',
            'username'=>'customer_vip',
            'email'=>'customer.vip@gmail.com',
            'avatar'=>'https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/61669639_1094729754068310_6189407967889063936_n.jpg?_nc_cat=110&_nc_sid=110474&_nc_ohc=xSQsVoCo53sAX-je0zu&_nc_ht=scontent.fhph1-1.fna&oh=e2b255153bd0c6f349c6f7aee2d1ec9f&oe=5F4EF62E',
            'password'=>Hash::make('123'),
            'sex'=>1
        ])->roles()->attach(Role::find(7));
    }
}
