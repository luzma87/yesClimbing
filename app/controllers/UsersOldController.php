<?php

class UsersOldController extends \BaseController {

    public function index() {
        $users = User::all();
//    return View::make('users/index')->with('users', $users);
//    return View::make('users/index')->withUsers($users);
//    return View::make('users/index', ['users' => $users]);
        return View::make('users.index', ['users' => $users]);
    }

    public function show($username) {
        $user = User::whereUsername($username)->first();
        return View::make('users.show', ['user' => $user]);
    }

    public function create() {
        return 'form to create user';
    }

}
