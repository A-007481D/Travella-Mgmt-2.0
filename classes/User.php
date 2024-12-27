<?php

abstract class User
{
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $password;
    protected $role;

    public function __construct($id, $first_name, $last_name, $email, $password, $role)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    abstract public function register($db);

    abstract public function logout();

    abstract public function login($db);

    
}
