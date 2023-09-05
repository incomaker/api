<?php

namespace Incomaker\Api\Helper;

class JsonHelper {

	/**
	 * @param string $json
	 * @return array Associative array representing json document.
	 */
	public static function decodeString(
		string $json_as_string
	): array {
		return json_decode($json_as_string, true);
	}

	/**
	 * @param string $json_file_path
	 * @return array Associative array representing json document.
	 */
	public static function decodeFile(
		string $json_file_path
	): array {
		return JsonHelper::decodeString(file_get_contents($json_file_path));
	}

	/**
	 * @param array $json Associative array representing json document.
	 * @param string $key Key of desired value inside json document. You can use dots to express sublevels.
	 * @return string|int|float|null
	 */
	public static function extractValue(
		array $json,
		string $key
	) {
		$keys = explode(".", $key);
		$value = $json;
		foreach ($keys as $k) {
			$value = $value[$k];
		}
		return $value;
	}

	/**
	 * @param string $json_file_path
	 * @param string $key Key of desired value inside json document. You can use dots to express sublevels.
	 * @return string|int|float|null|undefined
	 */
	public static function getValue(
		string $json_file_path,
		string $key
	) {
		return JsonHelper::extractValue(JsonHelper::decodeFile($json_file_path), $key);
	}

}
