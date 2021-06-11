<?php

/**
 * @param string $optionName имя опции
 * @param void $defaultValue данное значение возращается, если опция не найдена
 * @return void значение выбранной опции
 */
function config(string $optionName, $defaultValue = null)
{
	/** 
	 * @var array $settings 
	 */
	$settings = require('settings.php'); //Подключаем файл с настройками
	
	/** 
	 * @var array $options
	 */
	$options = explode('.', $optionName); //Разделяем вложенные настройки

	//Ищем нужные параметры
	foreach ($options as $key) {
		//Выполняем проверку на существование параметра
		if (isset($settings[$key])) {
			$settings = $settings[$key];
		} else {
			if (!isset($defaultValue)) {
				throw new Exception('Опция не найдена и значение по-умолчанию не задано!');
			} else {
				return $defaultValue;
			}
		}
	}

	return $settings;
}