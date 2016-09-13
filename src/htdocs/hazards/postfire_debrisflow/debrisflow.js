/* global DEBRIS_FLoW */

// Script to generate debris flow map for one event.

var EsriTerrain = require('leaflet/layer/EsriTerrain'),
    HazDevLayers = require('leaflet/control/HazDevLayers');


var createMap,
    getLayers,
    onBaseLayerChange,
    _legend,
    _map;


// legend control for map
_legend = L.control({
  position: 'bottomright'
});
_legend.onAdd = function () {
  var div;

  div = document.createElement('div');
  div.className = 'debrisflow-legend';
  div.innerHTML = '<img' +
      ' src="/hazards/postfire_debrisflow/data/Probability_Legend_Basins2010.png"' +
      ' width="150"' +
      '/>';

  this._div = div;
  this._img = div.querySelector('img');

  return div;
};
_legend.setUrl = function (url) {
  if (this._img) {
    this._img.src = url;
  }
};



/**
 * Create a debris flow map.
 *
 * Adds to first element on page with class 'debrisflow'.
 *
 * @param debrisFlow {Object}
 * @param debrisFlow.center {Array<latitude, longitude>}
 *     map center.
 * @param debrisFlow.zoom {Number}
 *     map zoom.
 * @param debrisFlow.layerPrefix {String}
 *     prefix for layers.
 *     Example: '//earthquake.usgs.gov/arcgis/rest/services/ls/pwfdf_2013_2014'
 */
createMap = function (debrisFlow) {
  var el,
      layerControl,
      layers,
      map;

  el = document.querySelector('.debrisflow');
  el.innerHTML = '<figure>' +
      '<div class="map"></div>' +
      '<figcaption class="mapinfo">' +
        'The interactive map above displays estimates of the probability of ' +
        'debris flow (in %), potential volume of debris flow (in m3), and ' +
        'combined relative debris flow hazard. These predictions are made at ' +
        'the scale of the drainage basin, and at the scale of the individual ' +
        'stream segment. Estimates of probability, volume, and combined ' +
        'hazard are based upon a design storm with 10-year recurrence ' +
        'interval (i.e., a 1 in 10 chance of a storm of that magnitude ' +
        'occurring in any given year). Predictions may be viewed ' +
        'interactively by clicking on the button at the top right corner of ' +
        'the map displayed above. ' +
        'Visit the Scientific Background page for more information on how the ' +
        'predictions are calculated. For more information about what to do ' +
        'in case you live in an area where debris flows are possible, ' +
        'please visit If you live in a recently burned area, and there is a ' +
        'rainstorm &hellip;'
      '</figcaption>' +
      '</figure>';

  _map = L.map(el.querySelector('.map'))
      .setView(debrisFlow.center, debrisFlow.zoom);

  EsriTerrain().addTo(_map)
  L.control.scale().addTo(_map);
  layerControl = HazDevLayers();
  layerControl.addTo(_map);
  _legend.addTo(_map);


  layers = getLayers(debrisFlow.layerPrefix, debrisFlow.legendYear);
  layers.forEach(function (layer, index) {
    if (index == 0) {
      _map.addLayer(layer);
    }
    layerControl.addBaseLayer(layer, layer.name);
  });

  _map.on('baselayerchange', onBaseLayerChange);
};


/**
 * Get base layers for map.
 *
 * @param prefix {String}
 *     layer prefix, usually for a year.
 *     Example: 'pwfdf_2013_2014'.
 * @return {Array<L.tileLayer>}
 */
getLayers = function (prefix, legendYear) {
  var layer,
      layers;

  layers = [];

	layer = L.tileLayer(prefix + 'ProbabilityBasins/MapServer/tile/{z}/{y}/{x}',
		  { opacity: 0.65 });
  layer.legendUrl = '/hazards/postfire_debrisflow/data/Probability_Legend_Basins' +
      legendYear + '.png';
  layer.name = 'Basin Probability';
  layers.push(layer);

	layer = L.tileLayer(prefix + 'ProbabilitySegments/MapServer/tile/{z}/{y}/{x}');
  layer.legendUrl = '/hazards/postfire_debrisflow/data/Probability_Legend_Segments' +
      legendYear + '.png';
  layer.name = 'Segment Probability';
  layers.push(layer);

	layer = L.tileLayer(prefix + 'VolumeBasins/MapServer/tile/{z}/{y}/{x}',
		  { opacity: 0.65 });
  layer.legendUrl = '/hazards/postfire_debrisflow/data/Volume_Legend_Basins' +
      legendYear + '.png';
  layer.name = 'Basin Volume';
  layers.push(layer);

	layer = L.tileLayer(prefix + 'VolumeSegments/MapServer/tile/{z}/{y}/{x}');
  layer.legendUrl = '/hazards/postfire_debrisflow/data/Volume_Legend_Segments' +
      legendYear + '.png';
  layer.name = 'Segment Volume';
  layers.push(layer);

	layer = L.tileLayer(prefix + 'CombinedHazardBasins/MapServer/tile/{z}/{y}/{x}',
		  { opacity: 0.65 });
  layer.legendUrl = '/hazards/postfire_debrisflow/data/Combined_Legend_Basins' +
      legendYear + '.png';
  layer.name = 'Basin Hazard';
  layers.push(layer);

	layer = L.tileLayer(prefix + 'CombinedHazardSegments/MapServer/tile/{z}/{y}/{x}');
	layer.legendUrl = '/hazards/postfire_debrisflow/data/Combined_Legend_Segments' +
      legendYear + '.png';
  layer.name = 'SegmentHazard';
  layers.push(layer);

  return layers;
};

/**
 * Update legend when base layer changes.
 *
 * @param e {Leaflet Event}
 *     leaflet baselayer change event.
 */
onBaseLayerChange = function (e) {
  _legend.setUrl(e.layer.legendUrl);
};


createMap(DEBRIS_FLOW);
