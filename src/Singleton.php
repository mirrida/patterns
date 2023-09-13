<?php

namespace Mirrida\Patterns;

interface Singleton {
	/**
	 * @return static
	 */
	static function getInstance(): static;
}
