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
                    <h1>Dashboard</h1>
                    <small>Welcome to the unique SuperAdmin web app experience!</small>
                </header>

                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>987,459</h2>
                                <small>Total Leads Recieved</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">6,4,8,6,5,6,7,8,3,5,9</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="12" width="2.694545454545455" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="4" width="2.6945454545454535" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="12" width="2.6945454545454535" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="8" width="2.6945454545454552" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="4" width="2.6945454545454552" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="24" width="2.6945454545454623" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="0" width="2.6945454545454552" height="36"></rect></svg>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>356,785K</h2>
                                <small>Total Website Clicks</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">4,7,6,2,5,3,8,6,6,4,8</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="18" width="2.694545454545455" height="18"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="4.5" width="2.6945454545454552" height="31.5"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="9" width="2.6945454545454535" height="27"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="27" width="2.6945454545454535" height="9"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="13.5" width="2.6945454545454552" height="22.5"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="22.5" width="2.6945454545454552" height="13.5"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="0" width="2.6945454545454552" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="9" width="2.6945454545454552" height="27"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="9" width="2.6945454545454623" height="27"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="18" width="2.6945454545454552" height="18"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="0" width="2.6945454545454552" height="36"></rect></svg>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>$58,778</h2>
                                <small>Total Sales Orders</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">9,4,6,5,6,4,5,7,9,3,6</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="0" width="2.694545454545455" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="12" width="2.6945454545454535" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="16" width="2.6945454545454535" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="8" width="2.6945454545454552" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="0" width="2.6945454545454623" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="24" width="2.6945454545454552" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="12" width="2.6945454545454552" height="24"></rect></svg>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>214</h2>
                                <small>Total Support Tickets</small>
                            </div>

                            <div class="quick-stats__chart peity-bar" style="display: none;">5,6,3,9,7,5,4,6,5,6,4</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.8981818181818183" y="16" width="2.694545454545455" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="5.389090909090909" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="9.88" y="24" width="2.6945454545454535" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="14.370909090909093" y="0" width="2.6945454545454535" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="18.86181818181818" y="8" width="2.6945454545454552" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="23.35272727272727" y="16" width="2.6945454545454552" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="27.84363636363636" y="20" width="2.6945454545454552" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="32.334545454545456" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="36.82545454545454" y="16" width="2.6945454545454623" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="41.31636363636363" y="12" width="2.6945454545454552" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="45.807272727272725" y="20" width="2.6945454545454552" height="16"></rect></svg>
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