<?php

	function tar($str){
		$tr = array(
			"YO&rsquo;" => "ЙЎ",
			"Yo&rsquo;" => "Йў",
			"YO’;" 		=> "ЙЎ",
			"Yo’" 		=> "Йў",
			"yO&rsquo;" => "йЎ",
			"yo&rsquo;" => "йў",
			"yO’;" 		=> "йЎ",
			"yo’" 		=> "йў",
			"YA"=>"Я",
			"YU"=>"Ю",
			"YO"=>"Ё",
			"Ya"=>"Я",
			"Yu"=>"Ю",
			"Yo"=>"Ё",
			"ya"=>"я",
			"yu"=>"ю",
			"yo"=>"ё",
			"A"=>"А",
			"B"=>"Б",
			"C"=>"С",
			"D"=>"Д",
			"E"=>"Е",
			"F"=>"Ф",
			"G"=>"Г",
			"H"=>"Ҳ",
			"I"=>"И",
			"J"=>"Ж",
			"K"=>"К",
			"L"=>"Л",
			"M"=>"М",
			"N"=>"Н",
			"O"=>"О",
			"P"=>"П",
			"Q"=>"Қ",
			"R"=>"Р",
			"S"=>"С",
			"T"=>"Т",
			"U"=>"У",
			"V"=>"В",
			"X"=>"Х",
			"Y"=>"Й",
			"Z"=>"З",
			"O&rsquo;"=>"Ў",
			"G&rsquo;"=>"Ғ",
			"SH"=>"Ш",
			"Sh"=>"Ш",
			"CH"=>"Ч",
			"Ch"=>"Ч",
			"a"=>"а",
			"b"=>"б",
			"d"=>"д",
			"e"=>"е",
			"f"=>"ф",
			"g"=>"г",
			"h"=>"ҳ",
			"i"=>"и",
			"j"=>"ж",
			"k"=>"к",
			"l"=>"л",
			"m"=>"м",
			"n"=>"н",
			"o"=>"о",
			"p"=>"п",
			"q"=>"қ",
			"r"=>"р",
			"s"=>"с",
			"t"=>"т",
			"u"=>"у",
			"v"=>"в",
			"x"=>"х",
			"y"=>"й",
			"z"=>"з",
			"o&rsquo;"=>"ў",
			"g&rsquo;"=>"ғ",
			"sh"=>"ш",
			"ch"=>"ч",
			"ng"=>"нг",
			"&rsquo;"=>"ъ",
			"'"=>"ъ",
			"’"=>"ъ",
		);
		return strtr($str,$tr);
	}