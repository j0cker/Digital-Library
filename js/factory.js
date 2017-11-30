(function() {
  app.factory('functions', function($http) {
    return {
      loading: function() {
        console.log("[factory.js] loading");

        $('.page-loader').css('display','');
        setTimeout(function() {
          $('.page-loader').css('display','none');
        }, 1000);
      },
      getAreas: function() {

        console.log("[factory][getAreas]");


        var url = 'scripts/dao/get-areas.php';
		  	return $http.get(url, {cache: false, params: {  } })

      },
      getCat: function(area) {

        console.log("[factory][categorías]");

        console.log(area);

        var url = 'scripts/dao/get-cat.php';
		  	return $http.get(url, {cache: false, params: { area:area  } })

      }
    };
  });

}).call(this);