<?PHP
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    <head>

        <?PHP
            include ''.dirname(__FILE__).'/template/metas.php';
        ?>

        <script>
        
        $( document ).ready(function() {
            // Handler for .ready() called.
        
            $(".search__text").hover(function(){

                console.log("[index.php][search]");
                
                $(document).keypress(function(e) {
                    if(e.which == 13) {
                        console.log("[index.php][search][keypress]");
                        angular.element('body').scope().search();


                    }
                });

                }, function(){
                    $(document).unbind("keypress");
            });

        
        });

        

        </script>   
    
    </head>

    <body data-sa-theme="7" ng-controller="index">
        <main class="main">

           <?PHP
                include ''.dirname(__FILE__).'/template/loader.php';
            ?>

            <?PHP
                include ''.dirname(__FILE__).'/template/header.php';
            ?>

            <?PHP
                include ''.dirname(__FILE__).'/template/sidebar.php';
            ?>

            <section ng-if="areaVisible==1" class="content">
                <header class="content__title">
                    <h1>Contenido Educativo</h1>
                    <small>Bienvenido a la plataforma de contenido educativo donde encontrarás videos, audios, noticias, artículos y mucho más. Por favor selecciona el área de tu interés.</small>
                </header>

                <div class="row quick-stats">

                    <div ng-click="area()" id="{{ key+1 }}" style="cursor: pointer;" ng-repeat="(key,x) in areas" class="col-sm-6 col-md-6 col-lg-4">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>{{ x }}</h2>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

            <section ng-if="catVisible==1" class="content">
                <header ng-if="cat.length=='0'" class="content__title">
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Actualmente el área "{{catArea.area[0].nombre}}" no cuenta con contenido
                </div>
                </header>

                <header ng-if="cat.length!='0'" class="content__title">
                    <h1>CONTENIDO DISPONIBLE EN LA ÁREA "{{catArea.area[0].nombre}}" </h1>
                    <small>Por favor seleccione el tipo de contenido que desea ver.</small>
                </header>

                <div class="row quick-stats">

                    <div ng-click="cate()" id="{{ key }}" style="cursor: pointer;" ng-repeat="(key,x) in cat" class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>{{ x.nombre }}</h2>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

            <section ng-if="arcVisible==1" class="content">
                <header class="content__title">
                    <h1>Por favor seleccione el tema o archivo deseado.</h1>
                </header>

                <div class="row quick-stats">

                    
                    <div ng-click="archive()" id="{{ key }}" style="cursor: pointer;" ng-repeat="(key,x) in archives" class="col-sm-6 col-md-6 col-lg-4">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>{{ x.name }}</h2>
                            </div>

                        </div>
                    </div>

                </div>

            </section>
        </main>

        
            <?PHP
                include ''.dirname(__FILE__).'/template/footer.php';
            ?>

    
        <div class="flot-tooltip"></div>
        
        <div class="jqvmap-label" style="display: none;"></div>
        
        <div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
            <div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div>
        </div>

</body></html>