<section class="col-md-12 page-heading scr-pos section-2">
                <div class="ovl"></div>
                <img src="asset/img/contact/contac.jpg" alt="">
                <h2>සම්බන්දවන්න</h2>
</section>
<section id="map">
    <div class="container">
        <div class="row">
            <div id="map_canvas" class="col-md-6 map_canvas" style="height: 550px;width: 100%;">
            </div>
        </div>
    </div>

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANa7Qz1sAdScvcYNs9L33dQ3Fda3pH_aA&amp;callback=initMap">
    </script>
    <script>
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = [
            ['Anuradhapura', 8.3197289, 80.3936772],
            ['Matale', 7.467978, 80.6249611],
            ['Colombo', 6.9011461, 79.9203001],
            ['Gampaha', 7.0925595, 79.9951396],
            ['Kurunegala', 7.4870464, 80.364908],
            ['Badulla', 6.9898202, 81.0569425],
            ['Hambantota', 6.1249126, 81.1242563],
            ['Kandy', 7.2930922, 80.6350768],
            ['Rathnapura', 6.6800763, 80.4020121],
            ['Matara', 5.947822, 80.5482919],
            ['Galle', 6.0328139, 80.214955],
            ['Kaluthara', 6.5835219, 79.9612508],
            ['Horana', 6.716628, 80.0619488]
        ];

        // Info Window Content
        var infoWindowContent = [
            ['<div class="map-info-window"> <div class="map-info-close">x</div>' +
                '<h3>London Eye</h3>' +
                '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +
                '</div>'
            ],
            ['<div class="info_content">' +
                '<h3>Palace of Westminster</h3>' +
                '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
                '</div>'
            ]
        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(),
            marker, i;

        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(7.1);
            google.maps.event.removeListener(boundsListener);
        });

    }
    </script>
</section>