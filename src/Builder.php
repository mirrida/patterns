<?php

namespace Mirrida\Patterns;

/**
 * @template BuildType
 */
interface Builder {
	/**
	 * @return BuildType
	 */
	function build(): mixed;
}
