<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManagerList;
class ManagerListController extends Controller
{
    public function get(Request $request)
    {
        $users = ManagerList::All();
        return view('manager_list', $users);
    }
}
