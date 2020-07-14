<?php
namespace App\Helpers;

class Sana {
	
	protected static $haftalar = [1=>'Dushanba','Seshanba','Chorshanba','Payshanba','Juma','Shanba','Yakshanba'];
	protected static $oylar = [1=>'Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avgust','Sentyabr','Oktyabr','Noyabr','Dekabr'];

	public static function hafta($son = null){

		$value = self::$haftalar;
		if (empty($son)) {
			$son = self::getNumberOfDayInWeek(date('Y-m-d H:i:s'));
		}
		elseif(!is_numeric($son) OR $son < 1 OR $son > 7){
			$son = self::getNumberOfDayInWeek($son);
		}

		return $value[$son];

	}

	public static function oy($son = null){

		$value = self::$oylar;
		if (empty($son)) {
			$son = self::getNumberOfDayInMonth(date('Y-m-d H:i:s'));
		}
		elseif(!is_numeric($son) OR $son < 1 OR $son > 12){
			$son = self::getNumberOfDayInMonth($son);
		}

		return $value[$son];

	}

	public static function getNumberOfDayInWeek($date){
		return (int)date('N', strtotime($date));
	}

	public static function getNumberOfDayInMonth($date){
		return (int)date('m', strtotime($date));
	}

}