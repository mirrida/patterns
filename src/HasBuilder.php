<?php

namespace Mirrida\Patterns;

interface HasBuilder {
	/**
	 * @return Builder
	 */
	static function builder(): Builder;
}
