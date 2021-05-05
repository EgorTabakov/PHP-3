<?php

declare(strict_types=1);

namespace DataMapper;

use DataMapper\Mapper\UserMapper;
use DataMapper\Storage\StorageAdapter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^DataMapper/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$mapper = new UserMapper(new StorageAdapter());
$user = $mapper->getById(1);
$user2 = $mapper->getById(2);
$user3 = $mapper->getByLogin('doejohn');

echo "Под id 1 хранится пользователь с именем {$user->getName()}.\n";
echo "Под id 2 хранится пользователь с именем {$user2->getName()}.\n";
echo "Под Логином doejohn хранится пользователь с id {$user3->getid()}.\n";
