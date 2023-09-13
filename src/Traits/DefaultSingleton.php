<?php

namespace Mirrida\Patterns\Traits;

trait DefaultSingleton {
	/**
	 * @var self
	 */
	private static self $instance;

	protected function __construct() {
	}

	protected function __clone() {
	}

	public function __wakeup() {
		throw new \Exception("Cannot unserialize a singleton.");
	}

	/**
	 * @return static
	 */
	public static function getInstance(): static {
		if (!isset(self::$instance)) {
			self::$instance = new static();
		}

		return self::$instance;
	}
}
