<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pagina extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

//    public $timestamps = false;
//    protected $fillable = ['username', 'email', 'password']; //campos mass assigned
//    protected $guarded; //campos no mass assigned

    public static $rules = [
        'nombre' => 'required'
    ];

    public $errors;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paginas';

    public function isValid() {
        $validation = Validator::make($this->attributes, static::$rules);
        if($validation->passes()) {
            return true;
        }
        $this->errors = $validation->messages();
        return false;
    }

}
