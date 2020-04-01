<?php
declare(strict_types=1);

namespace Jp\Json;

use JsonException;
use function json_decode;
use function json_encode;
use const JSON_THROW_ON_ERROR;

class Json
{
	/**
	 * A wrapper around the global json_encode function, with more convenient
	 * default values: $options = JSON_THROW_ON_ERROR.
	 *
	 * @param mixed $value
	 * @param int $options
	 * @param int $depth
	 *
	 * @throws JsonException if an error occurs.
	 *
	 * @return string
	 */
	public static function encode(
		$value,
		int $options = JSON_THROW_ON_ERROR,
		int $depth = 512
	) : string {
		return json_encode($value, $options, $depth);
	}

	/**
	 * A wrapper around the global json_encode function, with more convenient
	 * default values: $assoc = true, $options = JSON_THROW_ON_ERROR.
	 *
	 * @param string $json
	 * @param bool $assoc
	 * @param int $depth
	 * @param int $options
	 *
	 * @throws JsonException if an error occurs.
	 *
	 * @return mixed
	 */
	public static function decode(
		string $json,
		bool $assoc = true,
		int $depth = 512,
		int $options = JSON_THROW_ON_ERROR
	) {
		return json_decode($json, $assoc, $depth, $options);
	}
}
