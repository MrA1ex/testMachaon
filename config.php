<?php

function config($optionName, $defaultValue = null) 
{
	$settings = require('settings.php'); //Подключаем файл с настройками

	$options = explode('.', $optionName); //Разделяем вложенные настройки

	//Ищем нужные параметры
	foreach ($options as $key) {
		if ($key) {
			$settings = $settings[$key];
		}
	}

	//Выполняем проверку на существование параметра
	if (!$settings) {
		if (!$defaultValue) {
			throw new Exception('Опция не найдена и значение по-умолчанию не задано!');
		} else {
			return $defaultValue;
		}
	} else {
		return $settings;
	}
}