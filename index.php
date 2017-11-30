<?PHP
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    <head>

        <?PHP
            include ''.dirname(__FILE__).'/template/metas.php';
        ?>
    
    </head>

    <body data-sa-theme="1" ng-controller="index">
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


            <section class="content">
                <header class="content__title">
                    <h1>Contenido Educativo</h1>
                    <small>Bienvenido a la plataforma de contenido educativo donde encontrarás videos, audios, noticias, artículos y mucho más.</small>
                </header>

                <div class="row quick-stats">

                    <div ng-click="area()" id="{{ key+1 }}" style="cursor: pointer;" ng-repeat="(key,x) in areas" class="col-sm-6 col-md-3 areaEducativa">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>{{ x }}</h2>
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