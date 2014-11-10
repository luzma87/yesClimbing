<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 28/10/2014
 * Time: 20:56
 */
class SessionsController extends BaseController {
    public function create() {
//        if(Auth::guest()) { //NO logueado
        if(Auth::check()) { //logueado
            return Redirect::to('/admin');
        }
        return View::make('sessions.create');
    }

    public function store() {
        if(Auth::attempt(Input::only('email', 'password'))) {
            return "Welcome, " . Auth::user()->username;
        }
        return Redirect::back()->withInput();
    }

    public function destroy() {
        Auth::logout();
        return Redirect::route('sessions.create');
    }
}