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
            return Redirect::route('paginas.index');
        }
        return Redirect::back()->withInput()->with('error', 'No se encontró el nombre de usuario o contraseña')->with('email', Input::get('email'));
    }

    public function destroy() {
        Auth::logout();
        return Redirect::route('sessions.create');
    }
}