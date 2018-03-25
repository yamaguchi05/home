<?php

require_once '../vendor/autoload.php';

$request = new \Kakeibo\Http\Request($_GET, $_POST, $_SERVER['REQUEST_METHOD']);

$action_name = $request->get('action', 'index');

$app_dir = __DIR__ . '\..\app';

/** @noinspection PhpIncludeInspection */
$config = require_once "{$app_dir}/config.php";

$view = new \Kakeibo\View\TwigAdapter($config['resource_dir'] ?? null);

if ($action_name === 'index') {
    $controller = new \Kakeibo\Controller\IndexController();
    $controller->set_view($view);
    $response = $controller->index_action();
} else if ($action_name === 'write') {
    $controller = new \Kakeibo\Controller\AccountingController();
    $controller->set_view($view);
    $response = $controller->writeAction();
}

if (!isset($response)) {
    throw new LogicException();
}
$response->send();


