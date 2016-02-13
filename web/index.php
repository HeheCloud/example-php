<?php

require('../vendor/autoload.php');

$app = new \Slim\Slim();
$app->get('/', function () {
    $container = trim(exec('hostname') ?: "unknown");
    echo "Powered by " . (isset($_ENV["POWERED_BY"]) ? $_ENV['POWERED_BY'] : "HeheCloud!") . "<br>\n";
    echo "Running on container ID " . $container . "<br>\n";
    echo "<a href='phpinfo.php'>查看phpinfo</a><br>\n";
});
$app->run();
