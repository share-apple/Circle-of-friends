 <?php
// $className = $_GET['c'];
// include '../controller/wechat/' . $className . '.php';
// $method = $_GET['m'];
// $page = new $className();
// $page->$method(); 
if(isset($_GET['c'])){
$className = $_GET['c'];
}else {
	$className = 'wechat';
}

include './controller/wechat/' . $className . '.php';

if(isset($_GET['m'])){

$method = $_GET['m'];

}else {
	$method = 'feed';
}

$page = new $className();

$page->$method();