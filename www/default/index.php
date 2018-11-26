<?php


        Predis\Autoloader::register();

        $redis = new Predis\Client(array(
         "scheme" => "tcp",
         "host" => "127.0.0.1",
         "port" => 6379));
?>