<?PHP

include ''.dirname(__FILE__).'/../utils/conexion.php';
include ''.dirname(__FILE__).'/../utils/functions.php';
include ''.dirname(__FILE__).'/../utils/log.php';

$area = base_de_datos_scape($conn,$_GET["area"]);

$log = new LoggerPhp();
$log->write_log("[get-areas]","Debug");

$obj = new stdclass();
$obj->success = "true";
$obj->description = "";


$obj->area = array();
$obj->cat = array();

$query = $conn->query("SELECT * FROM areas");
if($query->num_rows>0){
    
    $row=$query->fetch_assoc();

    $obj->area[0] = new stdclass();

    $obj->area[0]->id = $area;
    $obj->area[0]->nombre = $row["name"];


    $query = $conn->query("SELECT * FROM categorias");
    if($query->num_rows>0){
        
        $c=0;

        while($row=$query->fetch_assoc()){

            $ficheros = scandir("".dirname(__FILE__)."/../../contenidos/".$area."/".$row["siglas"]."");
            //print_r($ficheros);
            if(count($ficheros)>2){

                $obj->cat[$c] = new stdclass();

                $obj->cat[$c]->nombre = ucfirst(utf8_encode($row["nombre"]));
                $obj->cat[$c]->sigla = ucfirst(utf8_encode($row["siglas"]));

                $obj->cat[$c]->rutaArchivos = array();

                foreach($ficheros AS $key=>$rutaArchivo) {
                    if($key>1){
                        $obj->cat[$c]->rutaArchivos[] = $rutaArchivo;
                    }
                }

            }

            $c++;

        }

    } else {
        $obj->success = "false";
        $obj->description = "Error. Please Contact your administrator";
    }

} else {
    $obj->success = "false";
    $obj->description = "Error. Please Contact your administrator";
}
echo json_encode($obj);

?>