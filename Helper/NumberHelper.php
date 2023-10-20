<?php

namespace Incomaker\Api\Helper;

class NumberHelper {

	public static function round(
		$n,
		int $precision = 0,
		int $mode = PHP_ROUND_HALF_UP
	) {
		if ($n === null || $n === '') return null;
		if (!is_float($n)) $n = floatval($n);
		return round($n, $precision, $mode);
	}

}
