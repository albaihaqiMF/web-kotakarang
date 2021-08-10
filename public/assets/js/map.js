document.getElementsByTagName('head')[0].append = "<style>#map{background:red}</style>"

var map = L.map("map").setView([-5.456615624794004,105.2616834640503], 15);

var accesToken =
    "pk.eyJ1IjoiZmhtYWxiYSIsImEiOiJja3BlMnBha2QwNDFmMm9yaXoybTNqN3o4In0.mJvOMMlzRvQIlgXtG5L_7A";

L.tileLayer(
    `https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=${accesToken}`,
    {
        attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: "mapbox/streets-v11",
        tileSize: 512,
        zoomOffset: -1,
        accessToken: "your.mapbox.access.token",
    }
).addTo(map);
