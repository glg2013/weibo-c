<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成50个假的用户
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'fengniancong';
        $user->email = 'fengniancong@163.com';
        $user->password = bcrypt('glg7850782');
        $user->is_admin = true;
        $user->save();

        $user = User::find(2);
        $user->name = 'honglang';
        $user->email = 'honglang@163.com';
        $user->password = bcrypt('glg7850782');
        $user->save();

        $user = User::find(3);
        $user->name = 'apple';
        $user->email = 'apple@163.com';
        $user->password = bcrypt('glg7850782');
        $user->save();
    }
}
