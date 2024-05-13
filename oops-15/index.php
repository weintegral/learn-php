<?php

require_once 'vendor/autoload.php';

use App\Admin;
use App\AuthenticatedUserInterface;
use App\User;
use App\UserFactory;

$exists = class_exists(User::class);

$userObject = UserFactory::create(1, 'John Doe');
$className = get_class($userObject);
$isUser = $userObject instanceof Admin;

$admin = new Admin(1, 'John Doe');
$parentClass = get_parent_class($admin);

$isSubclass = is_subclass_of($admin, User::class);

$isUserInterface = is_a($userObject, AuthenticatedUserInterface::class);

$classMethods = get_class_methods($userObject);

$methodExists = method_exists($userObject, 'getLastName');

$isCallable = is_callable([$userObject, 'setPassword']);

$vars = get_class_vars(User::class);

$props = get_object_vars($userObject);

var_dump($isCallable);