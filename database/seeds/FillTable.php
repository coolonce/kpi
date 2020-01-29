<?php

use Illuminate\Database\Seeder;

use App\Models\ManagerList;

class FillTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'test1',
            'test2',
            'test3'
        ];

        foreach($users as $user){
            $us = new ManagerList();
            $us->fio = $user;
            $us->departament = "";
            $us->email = $user.'@email.ru';
            $us->picture = 1;
            $us->save();
        }
    }
}
