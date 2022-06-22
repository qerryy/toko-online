<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
        	[
        		'username'=>'jennie', 'email'=>'jennie@gmail.com',
            	'address'=>'Jl. Gelatik Jennie', 'phone'=>'08325588',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'rose', 'email'=>'rose@gmail.com',
            	'address'=>'Jl. Pramuka Rose', 'phone'=>'08324100',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123457")
        	],
        	[
        		'username'=>'lalalisa', 'email'=>'lalalisa@gmail.com',
            	'address'=>'Jl. Pramuka lisa', 'phone'=>'08123599',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'jisoo', 'email'=>'jisoo@gmail.com',
            	'address'=>'Jl. Perjuangan jisoo', 'phone'=>'08211108',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'dildo', 'email'=>'dildo@gmail.com',
            	'address'=>'Jl. Perjuangan 7', 'phone'=>'08120001',
            	'status'=>'INACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'dion', 'email'=>'dion@gmail.com',
            	'address'=>'Jl. Suwandi', 'phone'=>'08122301',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'dede', 'email'=>'dede@gmail.com',
            	'address'=>'Jl. Perjuangan 7', 'phone'=>'08134565',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'tegar', 'email'=>'tegar@gmail.com',
            	'address'=>'Jl. Anggur', 'phone'=>'08235401',
            	'status'=>'INACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'ucok', 'email'=>'ucok@gmail.com',
            	'address'=>'Jl. Perum Sempaja', 'phone'=>'08111343',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'pratama', 'email'=>'pratama@gmail.com',
            	'address'=>'Jl. Sentosa', 'phone'=>'08144359',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'wendy', 'email'=>'wendy@gmail.com',
            	'address'=>'Jl. Pramuka 5A', 'phone'=>'08234301',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'rika', 'email'=>'rika@gmail.com',
            	'address'=>'Jl. Pramuka', 'phone'=>'08346901',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'yusril', 'email'=>'yusril@gmail.com',
            	'address'=>'Jl. Pelita', 'phone'=>'08540003',
            	'status'=>'INACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'hanie', 'email'=>'hanie@gmail.com',
            	'address'=>'Jl. Vorvo', 'phone'=>'081103001',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'tzuyu', 'email'=>'tzuyu@gmail.com',
            	'address'=>'Jl. PM Noor', 'phone'=>'084422301',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        	[
        		'username'=>'elina', 'email'=>'elina@gmail.com',
            	'address'=>'Jl. Pemuda', 'phone'=>'0822002301',
            	'status'=>'ACTIVE', 'avatar'=>'', 'password'=>Hash::make("123456")
        	],
        ]);
    }
}
