<?php
class demo {
    const message = "Hello World!";
    const MESSAGE = "Hello India!";

    public function show(){
        echo self::message;
    }
}

echo demo::message."<br/>";
echo demo::MESSAGE."<br/>";
$obj = new demo();
$obj->show();




?>