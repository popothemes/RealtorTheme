//jQuery(document).ready(function(){
      
function initMap() {

          var results_array=single_property_loc.location.split(",");
          var uluru = {lat:parseFloat(results_array[0]), lng: parseFloat(results_array[1])};
          var map = new google.maps.Map(
              document.getElementById('single-property-map'), {
                    zoom: parseFloat(results_array[2]),
                    center: uluru
              }
          );
          var marker = new google.maps.Marker(
              {
                    position: uluru,
                    map: map
              }
          );
}
                
//});