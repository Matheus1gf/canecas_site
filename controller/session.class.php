<?php

Class Session{
    public $session;

    public function __construct($session) {
        $this->session = $session;
    }

    public function getSession()
    {
        return $this->session;
    }

    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }

    public function stratSession(){
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

        $this->session = $_SESSION;
        return ['retcode' => 1, 'message' => $this->session];
    }

    public static function destroySession(){
        session_destroy();
        die();
    }

    public function setTokenSession($token){
        $this->session['token'] = $token;

        return ['retcode' => 1, 'message' => $this->session['token']];
    }

    public function getTokenSession(){
        $this->session['token'] = bin2hex(random_bytes(32));

        return ['retcode' => 1, 'message' => $this->session['token']];
    }
}