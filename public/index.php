<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>main</title>
</head>
<body>

<?php
// declare(strict_types=1);
include __DIR__ . '/../vendor/autoload.php';
$request = __DIR__;
$request .= $_SERVER['REQUEST_URI'];

echo $request;
die;
switch ($request) {
  case '/views/users':
    require __DIR__.'/views/users.php';
}
use \Controller\Main;

$test = new Main();
echo $test->test();

?>
  <h1>hello </h1>
  <nav>
<div>login</div>
<div>joinus</div>
  </nav> 
</body>
</html>