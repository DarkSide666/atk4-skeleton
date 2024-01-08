<?php
declare(strict_types=1);

namespace Atk4\Skeleton;

/**
 * Every request to server goes trough this file.
 */
require '../init.php';


use Atk4\Ui\Layout;

// create app
$app = new App(['configFiles' => __DIR__ . '/../config.php']);
$app->initLayout([Layout\Admin::class]); // use admin layout

// create router and use appropriate page view
$router = new Router();
$page = $router->getPage();
$app->add($page);
