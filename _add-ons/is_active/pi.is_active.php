<?php

class Plugin_is_active extends Plugin
{
    public function index()
    {
        $url         = array_get($this->context, 'url');
        $request_uri = $_SERVER['REQUEST_URI'];


        if (strpos($request_uri, $url) !== false) {
            return true;
        }
        return false;
    }
}
