/* global require */
require.config({
	baseUrl: '.'
});

require([
	'/hazards/postfire_debrisflow/leaflet.js'
], function (
	L
) {
	var _mapdiv = document.querySelector('#map');
	var _legendImg = document.querySelector('#layer_legend');
	var _map = new L.Map(_mapdiv, {
		center: [39.98,-105.48],
		zoom: 13,
		minZoom: 12,
		maxZoom: 15
	});
	var _layerControl = new L.Control.Layers();

	var _baseMap = new L.TileLayer(
		'http://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}'
	);

	var _probBasins = L.tileLayer.wms('https://earthquake.usgs.gov/arcgis/services/ls/pwfdf_2016/MapServer/WMSServer', {
		layers: '66,65,63',
		format: 'image/png',
		transparent: true,
		opacity: 0.65,
		attribution: 'USGS'
	});

	var _probSegments = L.tileLayer.wms('https://earthquake.usgs.gov/arcgis/services/ls/pwfdf_2016/MapServer/WMSServer', {
		layers: '67,65,64,63',
		format: 'image/png',
		transparent: true,
		opacity: 0.65,
		attribution: 'USGS'
	});

	var _volumeBasins = L.tileLayer.wms('https://earthquake.usgs.gov/arcgis/services/ls/pwfdf_2016/MapServer/WMSServer', {
		layers: '68,65,63',
		format: 'image/png',
		transparent: true,
		opacity: 0.65,
		attribution: 'USGS'
	});

	var _volumeSegments = L.tileLayer.wms('https://earthquake.usgs.gov/arcgis/services/ls/pwfdf_2016/MapServer/WMSServer', {
		layers: '69,65,64,63',
		format: 'image/png',
		transparent: true,
		opacity: 0.65,
		attribution: 'USGS'
	});

	var _comboBasins = L.tileLayer.wms('https://earthquake.usgs.gov/arcgis/services/ls/pwfdf_2016/MapServer/WMSServer', {
		layers: '70,65,63',
		format: 'image/png',
		transparent: true,
		opacity: 0.65,
		attribution: 'USGS'
	});

	var _comboSegments = L.tileLayer.wms('https://earthquake.usgs.gov/arcgis/services/ls/pwfdf_2016/MapServer/WMSServer', {
		layers: '71,65,64,63',
		format: 'image/png',
		transparent: true,
		opacity: 0.65,
		attribution: 'USGS'
	});

	// set legend for each tilelayer
	_probBasins.legendUrl     = '/hazards/postfire_debrisflow/data/Probability_Legend_Basins.png';
	_probSegments.legendUrl   = '/hazards/postfire_debrisflow/data/Probability_Legend_Segments_WatchStreams.png';
	_volumeBasins.legendUrl   = '/hazards/postfire_debrisflow/data/Volume_Legend_Basins.png';
	_volumeSegments.legendUrl = '/hazards/postfire_debrisflow/data/Volume_Legend_Segments_WatchStreams.png';
	_comboBasins.legendUrl    = '/hazards/postfire_debrisflow/data/Combined_Legend_Basins.png';
	_comboSegments.legendUrl  = '/hazards/postfire_debrisflow/data/Combined_Legend_Segments_WatchStreams.png';

	// add all layers to the layer control
	_layerControl.addBaseLayer(_probBasins, 'Basin Probability');
	_layerControl.addBaseLayer(_probSegments, 'Segment Probability');
	_layerControl.addBaseLayer(_volumeBasins, 'Basin Volume');
	_layerControl.addBaseLayer(_volumeSegments, 'Segment Volume');
	_layerControl.addBaseLayer(_comboBasins, 'Basin Hazard');
	_layerControl.addBaseLayer(_comboSegments, 'Segment Hazard');

	// add world topo tiles to map
	_map.addLayer(_baseMap);

	// set default overlay
	_map.addLayer(_probBasins);

	// add layer control to map
	_map.addControl(_layerControl);

	// add scale to map
	_map.addControl(new L.Control.Scale());

	// on baselayerchange, update legend
	_map.on('baselayerchange', function (changeEvent) {
		_legendImg.src = changeEvent.layer.legendUrl;
	});
});