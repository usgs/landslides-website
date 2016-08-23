/* global L */
'use strict';

var Accordion = require('accordion/Accordion'),
    EsriTerrain = require('leaflet/layer/EsriTerrain'),
    Xhr = require('util/Xhr');


var addMarkers,
    createMap,
    _el,
    _fireIcon,
    _map,
    _yellowFireIcon;


_fireIcon = L.icon({
  iconUrl: 'images/flame.png',
  iconRetinaUrl: 'my-icon@2x.png',
  iconSize: [15, 20],
  iconAnchor: [10, 18],
  popupAnchor: [-3, -16]
});

_yellowFireIcon = L.icon({
  iconUrl: 'images/flameyellow.png',
  iconRetinaUrl: 'my-icon@2x.png',
  iconSize: [15, 20],
  iconAnchor: [10, 18],
  popupAnchor: [-3, -16]
});


_el = document.querySelector('.map-placeholder');
_el.innerHTML =
    '<p class="map-help">' +
      'Click on map to view information for each site.' +
      '  All fires are listed below.' +
    '</p>' +
    '<div class="map"></div>';

createMap = function () {
  var legend;

  _map = L.map(_el.querySelector('.map')).setView([41.5, -112.0], 5);
  EsriTerrain().addTo(_map);

  legend = L.control();
  legend.onAdd = function () {
    var div;

    div = document.createElement('div');
    div.classList.add('year-legend');
    div.innerHTML =
        '<img alt="legend" src="data/flamelegend2016.png" width="100" height="118"/>';
    return div;
  };
  legend.addTo(_map);
};


addMarkers = function (data) {
  var currentYear;
  currentYear = new Date().getUTCFullYear();

  data.forEach(function (site) {
    var marker;
    if (site.year === currentYear) {
      marker = L.marker([site.lat, site.lon], {
        title: site.name, icon: _fireIcon
      });
    }
    else {
      marker = L.marker([site.lat, site.lon], {
        title: site.name, icon: _yellowFireIcon
      });
    }
    marker.bindPopup('<a href="' + site.href + '">' +
        '<h3>' + site.name + '</h3>' +
        '</a>');
    marker.addTo(_map);
  });
};


Accordion({
  el: document.querySelector('.accordion-year')
});
// close all but first accordion
Array.prototype.slice.call(
    document.querySelectorAll('.accordion + .accordion'),
    0).forEach(function (el) {
      el.classList.add('accordion-closed');
    });


createMap();
Xhr.ajax({
  url: 'coordinates.json',
  success: function (data) {
    addMarkers(data);
  },
  error: function (e) {
    var alert;
    alert = _el.querySelector('.map-info');
    alert.classList.add('alert');
    alert.classList.add('error');
    alert.innerHTML =
          'Error loading map' +
          '<pre>' +
            e.stack +
          '</pre>';
  }
});
