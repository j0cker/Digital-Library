<?PHP

header("Content-Type: text/html;charset=utf-8");

include ''.dirname(__FILE__).'/../utils/conexion.php';
include ''.dirname(__FILE__).'/../utils/functions.php';
include ''.dirname(__FILE__).'/../utils/log.php';

mysqli_set_charset($conn,"utf8");

$area = base_de_datos_scape($conn,$_GET["area"]);

$log = new LoggerPhp();
$log->write_log("[get-areas]","Debug");

$obj = new stdclass();
$obj->success = "true";
$obj->description = "";


$obj->area = array();
$obj->cat = array();

$query = $conn->query("SELECT * FROM areas WHERE id='".$area."'");
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

                $obj->cat[$c]->nombre = ucfirst($row["nombre"]);
                $obj->cat[$c]->sigla = $row["siglas"];

                $obj->cat[$c]->rutaArchivos = array();

                $cArch = 0;

                foreach($ficheros AS $key=>$rutaArchivo) {
                    
                    $rutaArchivo = utf8_encode($rutaArchivo );
                    if($key>1){
                        if($rutaArchivo!="@eaDir"){
                            $obj->cat[$c]->rutaArchivos[$cArch] = new stdclass();
                            $extension = pathinfo($rutaArchivo, PATHINFO_EXTENSION);
                            $rutaArchivo2 = basename($rutaArchivo, '.'.$extension);  
                            $obj->cat[$c]->rutaArchivos[$cArch]->name = $rutaArchivo2;
                            $obj->cat[$c]->rutaArchivos[$cArch]->url = "contenidos/".$area."/".$row["siglas"]."/".$rutaArchivo."";
                            $cArch++;
                        }
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