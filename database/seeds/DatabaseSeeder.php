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
        factory(\App\task::class,20)->create();
        factory(\App\enterprise::class,20)->create();
        factory(\App\cycle::class,20)->create();
        factory(\App\User::class)->create([
            'name'=> 'Raul',
            'firstname'=> 'Reyes',
            'email'=> 'raulreyes@gmail.com',
            'phone'=>'555 666 777',
            'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'type'=>'ad'
        ]);
        factory(\App\User::class,100)->create();
        factory(\App\belong::class,20)->create();
        factory(\App\study::class,20)->create();
        factory(\App\worksheet::class,20)->create();
        factory(\App\task_done::class,20)->create();
        factory(\App\assistance::class,20)->create();
        factory(\App\module::class,20)->create();
        factory(\App\ra::class,20)->create();
        factory(\App\ce::class,20)->create();
        factory(\App\tracing::class,20)->create();
        factory(\App\visit::class,20)->create();
    }
}
