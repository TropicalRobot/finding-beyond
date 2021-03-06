<?php

class ComposerAutoloaderInitd729b9b44494bbe2c8b706a4a5bd0d1e {
	private static $loader;

	public static function loadClassLoader($class)
	{
	if ('Composer\Autoload\ClassLoader' === $class) {
	require __DIR__ . '/ClassLoader.php';
	}
	}

	public static function getLoader() {
		if (null !== self::$loader) {
			return self::$loader;
		}

		spl_autoload_register(array('ComposerAutoloaderInitd729b9b44494bbe2c8b706a4a5bd0d1e', 'loadClassLoader'), true, true);
		self::$loader = $loader = new \Composer\Autoload\ClassLoader();
		spl_autoload_unregister(array('ComposerAutoloaderInitd729b9b44494bbe2c8b706a4a5bd0d1e', 'loadClassLoader'));

		$map = require __DIR__ . '/autoload_namespaces.php';
		foreach ($map as $namespace => $path) {
			$loader->set($namespace, $path);
		}

		$map = require __DIR__ . '/autoload_psr4.php';
		foreach ($map as $namespace => $path) {
			$loader->setPsr4($namespace, $path);
		}

		$classMap = require __DIR__ . '/autoload_classmap.php';
		if ($classMap) {
			$loader->addClassMap($classMap);
		}

		$loader->register(true);

		return $loader;
	}
}

function composerRequired729b9b44494bbe2c8b706a4a5bd0d1e($file) {
	require $file;
}
