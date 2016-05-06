/* global L */
'use strict';

var EsriTerrain = require('leaflet/layer/EsriTerrain'),
    Xhr = require('util/Xhr');

var createMap,
    el,
    map;

el = document.querySelector('#map');

createMap = function (data) {
  map = L.map(el).setView([40.0, -105.0], 3);
  EsriTerrain().addTo(map);
  data.forEach(function (site) {
    var marker;
    marker = L.marker([site.lat, site.lng], {
      title: site.name
    });
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
  error: function () {
    el.innerHTML = '<p class="alert error">' +
        'Error loading map' +
        '</p>';
  }
});
