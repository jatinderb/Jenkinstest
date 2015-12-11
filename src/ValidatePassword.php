<?php
class ValidatePassword {
	const MAXLENGTH	= 10;
	const MINLENGTH	= 6;
	
	public function validLength($password) {
		$passLength	= strlen($password);
		return $passLength >= self::MINLENGTH && $passLength <= self::MAXLENGTH;
	}
}