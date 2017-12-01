<?PHP
header("Content-Type: text/html;charset=utf-8");

include ''.dirname(__FILE__).'/../utils/conexion.php';
include ''.dirname(__FILE__).'/../utils/functions.php';
include ''.dirname(__FILE__).'/../utils/log.php';

mysqli_set_charset($conn,"utf8");

$log = new LoggerPhp();
$log->write_log("[get-areas]","Debug");

$obj = new stdclass();
$obj->success = "true";
$obj->areas = array();
$obj->description = "";

$query = $conn->query("SELECT * FROM areas");
if($query->num_rows>0){
    while($row=$query->fetch_assoc()){
        $obj->areas[] = ucfirst($row["name"]);
    }
} else {
    $obj->success = "false";
    $obj->description = "Error. Please Contact your administrator";
}
echo json_encode($obj);

?>