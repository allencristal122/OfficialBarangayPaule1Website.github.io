var map = L.map('map').setView([14.1073, 121.4013], 13);

    var satelliteTileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
    });
    satelliteTileLayer.addTo(map);

    // Define the coordinates of the center of Barangay Paule 1
    var paule1Coordinates = [14.1070, 121.3992];

    // Add a marker at the center of Barangay Paule 1
    var paule1Marker = L.marker(paule1Coordinates).addTo(map);

    // Set the view to the center of Barangay Paule 1 and zoom level
    map.setView(paule1Coordinates, 15);