@extends("layouts.app")

@section("content")
<div class="jumbotron col-xs-12">
  <div id="map"></div>
</div>

    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var buildingOne = {lat: 8.963038, lng: 38.839705};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: buildingOne,
          scrollwheel: false,
          zoom: 15,
          mapTypeId: 'satellite'
        });

        var contentString = '<div id="content">' + '<h4>Building 1 in ICT park</h4>' + '<ul><li>Africom</li>'+'<li>eSystemsAfrica</li>'+'<li>Abe qurs bet</li>'+'</ul>'+'</div>';

        var infoWindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: buildingOne,
          map: map,
          title: 'Africom and other tech companies location'
        });
        marker.addListener('click', function() {
          infoWindow.open(map, marker);
        }); 
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuTWWtgAJ1ZTrc5C9uuCbJpO-1tFmzFt8&callback=initMap"
    async defer></script>
@endsection
    

