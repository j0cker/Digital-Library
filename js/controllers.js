(function() {
  app.controller('index', function($scope, functions, $window) {
    
    functions.loading();
    
    console.log("[IndexCtrl]");

    functions.getAreas().then(function (response) {
      
          if(response.data.success == "true"){ 
            console.log("Entro");

            console.log(response.data.areas);

            $scope.areas = response.data.areas;

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
              console.log("Entro");
  
              console.log(response.data.cat);
  
              $scope.cat = response.data.cat;
  
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
      


  });


  return;

}).call(this);