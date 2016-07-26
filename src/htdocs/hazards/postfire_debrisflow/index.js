/* global L */
'use strict';

var EsriTerrain = require('leaflet/layer/EsriTerrain'),
    Xhr = require('util/Xhr');

var createMap,
    el,
    map;

var FireIcon = L.icon({
  iconUrl: 'images/flame.png',
  iconRetinaUrl: 'my-icon@2x.png',
  iconSize: [15, 20],
  iconAnchor: [10, 18],
  popupAnchor: [-3, -16]
});

var YellowFireIcon = L.icon({
  iconUrl: 'images/flameyellow.png',
  iconRetinaUrl: 'my-icon@2x.png',
  iconSize: [15, 20],
  iconAnchor: [10, 18],
  popupAnchor: [-3, -16]
});


el = document.querySelector('#map');

createMap = function (data) {
  var currentYear;

  currentYear = new Date().getUTCFullYear();
  map = L.map(el).setView([41.5, -112.0], 5);
  EsriTerrain().addTo(map);
  data.forEach(function (site) {
    var marker;
    if (site.year === currentYear) {
      marker = L.marker([site.lat, site.lon], {
        title: site.name, icon: FireIcon
      });
    }
    else {
      marker = L.marker([site.lat, site.lon], {
        title: site.name, icon: YellowFireIcon
      });
    }
    ;
    marker.bindPopup('<a href="' + site.href + '">' +
        '<h3>' + site.name + '</h3>' +
        '</a>');
    marker.addTo(map);
  });
};

Xhr.ajax({
  url: 'coordinates.json',
  success: function (data) {
    createMap(data);
  },
  error: function (e) {
    el.innerHTML = '<p class="alert error">' +
        'Error loading map' +
        '<pre>' +
        e.stack +
        '</pre>' +
        '</p>';
  }
});
