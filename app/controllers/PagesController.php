<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 26/10/2014
 * Time: 21:48
 */
class PagesController extends BaseController {

    public function home() {
        $name = 'Luzma';
        return View::make('hello')->with('name', $name);
    }

    public function about() {
        return View::make('about');
    }
} 