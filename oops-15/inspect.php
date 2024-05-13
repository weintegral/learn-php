<?php

use App\Admin;

require_once 'vendor/autoload.php';

$adminClass = new ReflectionClass(Admin::class);

$className = $adminClass->getName();

$shortName = $adminClass->getShortName();

$params = $adminClass->getConstructor()->getParameters();

$constructorParams = $adminClass->getMethod('__construct')->getParameters();

$methods = $adminClass->getMethods();

$parentClass = $adminClass->getParentClass();

$startLine = $adminClass->getStartLine();  

$endLine = $adminClass->getEndLine();

$interfaces = $adminClass->getInterfaces();

$traits = $adminClass->getTraits();

$traitAliases = $adminClass->getTraitAliases();

$staticProperties = $adminClass->getStaticProperties();

$defaultProperties = $adminClass->getDefaultProperties();

$clonable = $adminClass->isCloneable();

$instanciable = $adminClass->isInstantiable();

$fileName = $adminClass->getFileName();

var_dump($methods);die;