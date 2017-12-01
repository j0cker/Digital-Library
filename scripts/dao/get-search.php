<?PHP

header("Content-Type: text/html;charset=utf-8");

include ''.dirname(__FILE__).'/../utils/conexion.php';
include ''.dirname(__FILE__).'/../utils/functions.php';
include ''.dirname(__FILE__).'/../utils/log.php';

mysqli_set_charset($conn,"utf8");

$search = base_de_datos_scape($conn,$_GET["search"]);

$log = new LoggerPhp();
$log->write_log("[get-search]","Debug");

$obj = new stdclass();
$obj->success = "true";
$obj->description = "";

$obj->cat = array();

$query = $conn->query("SELECT * FROM areas ORDER BY id ASC");
if($query->num_rows>0){

    $c=0;
    $cArch = 0;
    
    while($row2=$query->fetch_assoc()){

        $query2 = $conn->query("SELECT * FROM categorias ORDER BY id ASC");
        if($query2->num_rows>0){
            

            while($row=$query2->fetch_assoc()){

                $ficheros = scandir("".dirname(__FILE__)."/../../contenidos/".$row2["id"]."/".$row["siglas"]."");
                //print_r($ficheros);
                if(count($ficheros)>2){

                    foreach($ficheros AS $key=>$rutaArchivo) {
                        
                        $extension = pathinfo($rutaArchivo, PATHINFO_EXTENSION);
                        $rutaArchivo2 = basename($rutaArchivo, '.'.$extension);  
                            

                        if($key>1 && strpos($rutaArchivo2,$search)!==false){

                            $obj->cat[$c] = new stdclass();
                            
                                    
                            $obj->cat[$c]->nombreCat = ucfirst($row["nombre"]);
                            $obj->cat[$c]->siglaCat = $row["siglas"];
                            $obj->cat[$c]->idArea = $row2["id"];
                            $obj->cat[$c]->nombreArea = $row2["name"];
                            $obj->cat[$c]->nameArchivo = $rutaArchivo2;
                            $obj->cat[$c]->urlArchivo = "contenidos/".$row2["id"]."/".$row["siglas"]."/".$rutaArchivo."";
                            $cArch++;
                        }
                        
                    }

                }

                $c++;

            }

        } else {
            $obj->success = "false";
            $obj->description = "Error. Please Contact your administrator";
        }

    }

} else {
    $obj->success = "false";
    $obj->description = "Error. Please Contact your administrator";
}
echo json_encode($obj);

?>