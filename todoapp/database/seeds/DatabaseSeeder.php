<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();
        //$this->call('UsersTableSeeder');
        $this->call('ItemsTableSeeder');
    }
}


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $users = array(

            array(
                'name' => 'Terry',
                'password' => Hash::make('terry'),
                'email' => 'example@example.com'
            )

        );

        DB::table('users')->insert($users);
    }
}



class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->delete();

        $items = array(

            array(
                'owner_id' => '1',
                'name' => 'Pick up milk',
                'done' => false
            ),

            array(
                'owner_id' => '1',
                'name' => 'Walk the dogs',
                'done' => true
            ),

            array(
                'owner_id' => '1',
                'name' => 'Cook dinner',
                'done' => false
            )

        );

        DB::table('items')->insert($items);
    }
}