<?php

require_once 'config.php';

echo "<pre>";

echo "config(\"site_name\") -> " , "My site = ", print_r(config("site_name"), true), PHP_EOL;
echo "config(\"db.user\") -> " , "admin = ", print_r(config("db.user"), true), PHP_EOL;
echo "config(\"db.user\", \"safasf\") -> " , "admin = ", print_r(config("db.user", "safasf"), true), PHP_EOL;
echo "config(\"db.version.0\", 0) -> " , "0 = ", print_r(config("db.version.0", 0), true), PHP_EOL;
echo "config(\"db.version.0\", true) -> " , "true = ", print_r(config("db.version.0", true), true), PHP_EOL;
echo "config(\"db.version.0\", \"\") -> " , "\"\" = ", print_r(config("db.version.0", ""), true), PHP_EOL;
echo "config(\"assets.minify\") -> " , "true = ", print_r(config("assets.minify"), true), PHP_EOL;
try {
	echo "config(\"db.version.t\") -> " , "Exception = ", print_r(config("db.version.t"), true), PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}
try {
	echo "config(\"db.version.0\") -> " , "Exception = ", print_r(config("db.version.0"), true), PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}
try {
	echo "config(\"db.user.y\") -> " , "Exception = ", print_r(config("db.user.y"), true), PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}
try {
	echo "config(\"db.user..\") -> " , "Exception = ", print_r(config("db.user.."), true), PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}
try {
	echo "config(false) -> " , "Exception = ", print_r(config(false), true), PHP_EOL;
} catch (Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}

echo "</pre>";