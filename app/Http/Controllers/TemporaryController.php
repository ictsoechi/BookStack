<?php

namespace BookStack\Http\Controllers;

use DB;

class TemporaryController extends Controller
{

    /**
     * TagController constructor.
     */
    public function __construct()
    {
        
    }

    public function AssignMassRole()
    {
        $users = DB::table('users')->whereNotIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10])->get()->all();
        foreach ($users as $user) {
            DB::table('role_user')->insert([
                'role_id' => 3,
                'user_id' => $user->id,
            ]);

            DB::table('role_user')->insert([
                'role_id' => 6,
                'user_id' => $user->id,
            ]);
        }
    }

}