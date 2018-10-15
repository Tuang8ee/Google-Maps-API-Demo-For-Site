// Initialize and add the map
function loadMap() {
    // The location of Hanoi
    var hanoi = {lat: 21.0548735, lng: 105.8153779};
    // The map, centered at Hanoi
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 12, center: hanoi});
    // The marker, positioned at

    var transpotBridge={lat:21.0299493,lng:105.801766}
    var maidichBridge={lat:21.0366393,lng:105.7805641}
    var nhattanBridge={lat:21.0912986,lng:105.8199697}
    var thanglongBridge={lat:21.0939462,lng:105.786388}
    var markerTranspot = new google.maps.Marker({position: transpotBridge, map: map,label:"1", title:"Location set sensor 1"});
    var markerMaidich = new google.maps.Marker({position: maidichBridge, map: map,label:"2",title:"Location set sensor 2"});
    var markerNhattan = new google.maps.Marker({position: nhattanBridge, map: map,label:"3",title:"Location set sensor 3"});
    var markerThanglong = new google.maps.Marker({position: thanglongBridge, map: map,label:"4",title:"Location set sensor 4"});

}