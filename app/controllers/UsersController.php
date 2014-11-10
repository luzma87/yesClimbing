<?php

class UsersController extends \BaseController {

    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users = $this->user->all();
        return View::make('users.index', ['users' => $users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('users.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
//        $validation = Validator::make(Input::all(), User::$rules);
//        if($validation->fails()) {
//            return Redirect::back()->withInput()->withErrors($validation->messages());
//        }
        $input = Input::all();
        $this->user->username = Input::get('username');
        $this->user->password = Hash::make(Input::get('password'));
        $this->user->email = Input::get('email');
        if(!$this->user->isValid()) {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        $this->user->save();
//        $user = new User;
//        $user->username = Input::get('username');
//        $user->password = Hash::make(Input::get('passowrd'));
//        $user->save();
//        return Redirect::to('/users');s
        return Redirect::route('users.index');
    }


    /**
     * Display the specified resource.
     *
     * @param $username
     * @return Response
     */
    public function show($username) {
        $user = $this->user->whereUsername($username)->first();
        return View::make('users.show', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }


}
