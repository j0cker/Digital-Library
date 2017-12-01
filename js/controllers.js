(function() {
  app.controller('index', function($scope, functions, $window) {
    
    functions.loading();
    
    console.log("[IndexCtrl]");

    functions.getAreas().then(function (response) {
      
          if(response.data.success == "true"){ 
            console.log("Entro");

            console.log(response.data.areas);

            $scope.areas = response.data.areas;
            
            $scope.areaVisible = 1;
            $scope.catVisible = 0;
            $scope.arcVisible = 0;

          } else {
              $('body').addClass('loaded');
              toastr["error"]("Inténtelo de nuevo más tarde", "");
          }
      }, function (response) {

        /*ERROR*/
        $('body').addClass('loaded');
        toastr["error"]("Inténtelo de nuevo más tarde", "");

      });/*fin getcuentas*/


      $scope.area = function(){
        console.log("[Controllers][area]");

        var llave = $(this)[0].key + 1;

        console.log("Llave: " + llave);

        functions.loading();

        functions.getCat(llave).then(function (response) {
          
            if(response.data.success == "true"){ 
              console.log("[Controllers][getCat]");
  
              console.log(response.data.cat);
  
              $scope.catArea = response.data;
              $scope.cat = response.data.cat;
              
              $scope.areaVisible = 0;
              $scope.catVisible = 1;
              $scope.arcVisible = 0;
  
            } else {
                $('body').addClass('loaded');
                toastr["error"]("Inténtelo de nuevo más tarde", "");
            }
        }, function (response) {
  
          /*ERROR*/
          $('body').addClass('loaded');
          toastr["error"]("Inténtelo de nuevo más tarde", "");
  
        });/*fin getcuentas*/

      };
      

      $scope.cate = function(){

        console.log("[Controllers][cat]");

        functions.loading();

        var llave = $(this)[0].key;

        console.log("llave: " + llave);

        $scope.areaVisible = 0;
        $scope.catVisible = 0;
        $scope.arcVisible = 1;

        $scope.llaveCat = llave;
        $scope.archives = $scope.cat[llave].rutaArchivos;

        console.log($scope.archives);

      };


      $scope.archive = function(){
        
          console.log("[Controllers][archive]");
  
          functions.loading();
  
          var llave = $(this)[0].key;
  
          console.log("llave categoría: " + $scope.llaveCat + " llave archivo: " + llave);
  
          $scope.areaVisible = 0;
          $scope.catVisible = 0;
          $scope.arcVisible = 1;

          ruta = $scope.cat[$scope.llaveCat].rutaArchivos[llave].url;

          console.log("Ruta: " + ruta);

          window.location = ""+ruta+"";
  
  
        };


        $scope.archiveSearch = function(){
          
            console.log("[Controllers][archiveSearch]");
    
            functions.loading();
    
            var llave = $(this)[0].key;
    
            console.log("llave archivo: " + llave);
    
            $scope.areaVisible = 0;
            $scope.catVisible = 0;
            $scope.arcVisible = 0;
            $scope.searchVisible = 1;
  
            console.log($scope.searchCon.cat);

            ruta = $scope.searchCon.cat[llave].urlArchivo;
  
            console.log("Ruta: " + ruta);
  
            window.location = ""+ruta+"";
    
    
          };

        $scope.bienvenido = function(){

          console.log("[controllers][bienvenido]");

          window.location = "index.php";

        };

        $scope.search = function(){
          
          console.log("[controllers][search]");
          var search = $(".search__text").val();

          functions.loading();

          
          $scope.searchW = search;
          
          functions.search(search).then(function (response) {
            
              if(response.data.success == "true"){ 
                console.log("[Controllers][search]");
    
                console.log(response.data.cat);
    
                $scope.searchCon = response.data;
                
                $scope.areaVisible = 0;
                $scope.catVisible = 0;
                $scope.arcVisible = 0;
                $scope.searchVisible = 1;
    
              } else {
                  toastr["error"]("Inténtelo de nuevo más tarde", "");
              }
          }, function (response) {
            /*ERROR*/
            toastr["error"]("Inténtelo de nuevo más tarde", "");
    
          });/*fin getcuentas*/
          

        };

  });


  return;

}).call(this);