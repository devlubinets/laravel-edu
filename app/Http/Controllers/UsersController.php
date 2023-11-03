<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $usersDataTable)
    {
        return $usersDataTable->render("legacy.user.index");
    }
}
