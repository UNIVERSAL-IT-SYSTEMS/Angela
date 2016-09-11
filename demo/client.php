<?php
require_once __DIR__ . '/../vendor/autoload.php';


$config = include __DIR__ . '/config.php';
$brokerFactory = new \Nekudo\Angela\Broker\BrokerFactory($config['angela']['broker']);
$brokerClient = $brokerFactory->create();

$responseA = $brokerClient->doJob('task_a', 'just a test');
$responseB = $brokerClient->doBackgroundJob('task_b', 'just a test');
$brokerClient->close();
var_dump($responseA, $responseB);
