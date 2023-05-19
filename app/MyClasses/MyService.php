<?php
namespace App\MyClasses;

class MyService
{
    private $msg;
    private $data;

    public function __construct(){
        $this->msg = 'Hello';
        $this->data = [
            'a' => 'aa',
            'b' => 'bb'
        ];
    }

    public function say() {
        return $this->msg;
    }
}