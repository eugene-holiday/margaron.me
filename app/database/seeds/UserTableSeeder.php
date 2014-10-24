<?php

use Margaron\Users\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        //User::create(array('email' => 'foo@bar.com'));
        $u = new User;
        $u->id = 1;
        $u->login = 'margo';
        $u->password = 'gfhjkm16';
        $u->save();

    }

}