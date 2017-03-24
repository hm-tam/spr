<?php

class Modifier_urldummy extends Modifier {
    public function index($value) {
        if (strpos($value, 'http') !== false) {
            $output = $value;
        } else {
            $output = 'http://'.$value;
        }
        return $output;
    }
}
