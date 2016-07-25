/* global L */
var Accordion = require('accordion/Accordion');
	var _mapdiv = document.querySelector('#map');
	var _legendImg = document.querySelector('#year_legend');
	_mapdiv.innerHTML = '';

	var _map = new L.Map(_mapdiv, {
		center: [41.5, -112],
		zoom: 5,
	});

	var _layerControl = new L.Control.Layers();

	var _baseMap = new L.TileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}');
	_baseMap.addTo(_map);
	
	var FireIcon = L.icon({
    iconUrl: 'images/flame.png',
    iconRetinaUrl: 'my-icon@2x.png',
    iconSize: [15, 20],
    iconAnchor: [10, 18],
    popupAnchor: [-3, -16]
    //shadowUrl: 'my-icon-shadow.png',
    //shadowRetinaUrl: 'my-icon-shadow@2x.png',
    //shadowSize: [68, 95],
    //shadowAnchor: [22, 94]
	});
	
	var YellowFireIcon = L.icon({
    iconUrl: 'images/flameyellow.png',
    iconRetinaUrl: 'my-icon@2x.png',
    iconSize: [15, 20],
    iconAnchor: [10, 18],
    popupAnchor: [-3, -16]
    //shadowUrl: 'my-icon-shadow.png',
    //shadowRetinaUrl: 'my-icon-shadow@2x.png',
    //shadowSize: [68, 95],
    //shadowAnchor: [22, 94]
	});
	
	var GreenFireIcon = L.icon({
    iconUrl: 'images/flamegreen.png',
    iconRetinaUrl: 'my-icon@2x.png',
    iconSize: [15, 20],
    iconAnchor: [10, 18],
    popupAnchor: [-3, -16]
    //shadowUrl: 'my-icon-shadow.png',
    //shadowRetinaUrl: 'my-icon-shadow@2x.png',
    //shadowSize: [68, 95],
    //shadowAnchor: [22, 94]
	});
	
	//var ElkPonyMarker = new L.marker([43.358, -115.448], {icon: GreenFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2013/20130808elkpony/">2013 Elk/Pony Complex Fire</a></p>').addTo(_map);
	//var GovernmentMarker = new L.marker([45.517, -121.351], {icon: GreenFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2013/20130816government/">2013 Government Flats Fire</a></p>').addTo(_map);
	//var RimMarker = new L.marker([37.857, -120.086], {icon: GreenFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2013/20130817rim/">2013 Rim Fire</a></p>').addTo(_map);
	//var ColbyMarker = new L.marker([34.158, -117.888], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140116colby/">2014 Colby Fire</a></p>').addTo(_map);
	//var SignalMarker = new L.marker([32.932, -108.147], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140511signal/">2014 Signal Fire</a></p>').addTo(_map);
	//var SlideMarker = new L.marker([35.019, -111.796], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140520slide/">2014 Slide Fire</a></p>').addTo(_map);
	//var MillsMarker = new L.marker([47.62, -120.29], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140708mills/">2014 Mills Canyon Complex Fire</a></p>').addTo(_map);
	//var WatermenMarker = new L.marker([44.701, -119.825], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140711watermen/">2014 Watermen Complex Fire</a></p>').addTo(_map);
	//var ElPortalMarker = new L.marker([37.675, -119.783], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140726elportal/">2014 El Portal Fire</a></p>').addTo(_map);
	//var FrenchMarker = new L.marker([37.275, -119.337], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140728french/">2014 French Fire</a></p>').addTo(_map);
	//var WayMarker = new L.marker([35.726, -118.479], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140818way/">2014 Way Fire</a></p>').addTo(_map);
	//var ChiwaukumMarker = new L.marker([47.708, -120.823], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140715chiwaukum/">2014 Chiwaukum Fire</a></p>').addTo(_map);
	//var DuncanMarker = new L.marker([48.024, -120.601], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140716duncan/">2014 Duncan Fire</a></p>').addTo(_map);
	//var CarltonMarker = new L.marker([48.211, -120.103], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140714carlton/">2014 Carlton Fire</a></p>').addTo(_map);
	//var SilveradoMarker = new L.marker([33.748,-117.601], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140920silverado/">2014 Silverado Fire</a></p>').addTo(_map);
	//var KingMarker = new L.marker([38.782,-120.604], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140913king/">2014 King Fire</a></p>').addTo(_map);
	//var DogRockMarker = new L.marker([37.687, -119.742], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20141007dogrock/">2014 Dog Rock Fire</a></p>').addTo(_map);
	//var UpperFallsMarker = new L.marker([48.767, -120.263], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140805upperfalls/">2014 Upper Falls Fire</a></p>').addTo(_map);
	//var LittleBridgeMarker = new L.marker([48.389, -120.285], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2014/20140803littlebridge/">2014 Little Bridge Creek Fire</a></p>').addTo(_map);
	var LakeMarker = new L.marker([34.16, -116.893], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150617lake/">2015 Lake Fire</a></p>').addTo(_map);
	var WillowMarker = new L.marker([37.282, -119.482], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150725willow/">2015 Willow Fire</a></p>').addTo(_map);
	var StoutsCreekMarker = new L.marker([42.924, -123.048], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150730stoutscreek/">2015 Stouts Creek Fire</a></p>').addTo(_map);
	var WashingtonMarker = new L.marker([38.592, -119.752], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150719washington/">2015 Washington Fire</a></p>').addTo(_map);
	var SaddleMarker = new L.marker([40.694, -123.534], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150609saddle/">2015 Saddle Fire</a></p>').addTo(_map);
	var ForkMarker = new L.marker([40.453, -123.128], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150730fork/">2015 Fork Complex Fire</a></p>').addTo(_map);
	var MadRiverMarker = new L.marker([40.335, -123.383], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150730madriver/">2015 Mad River Complex Fire</a></p>').addTo(_map);
	var RouteMarker = new L.marker([40.642, -123.586], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150730route/">2015 Route Fire</a></p>').addTo(_map);
	var RoughMarker = new L.marker([36.874, -118.905], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150731rough/">2015 Rough Fire</a></p>').addTo(_map);
	var RiverMarker = new L.marker([40.913, -123.437], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150730river/">2015 River Complex Fire</a></p>').addTo(_map);
	var GasquetMarker = new L.marker([41.846, -123.969], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150731gasquet/">2015 Gasquet Complex Fire</a></p>').addTo(_map);
	var SouthMarker = new L.marker([40.62, -123.448], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150801south/">2015 South Complex Fire</a></p>').addTo(_map);
	var ClearwaterMarker = new L.marker([46.284, -116.056], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150810clearwater/">2015 Clearwater Fire</a></p>').addTo(_map);
	var NobleMarker = new L.marker([45.61, -115.316], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150810noble/">2015 Noble Fire</a></p>').addTo(_map);
	var KettleMarker = new L.marker([48.756, -118.461], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150811kettle/">2015 Kettle Complex Fire</a></p>').addTo(_map);
	var CanyonCreekMarker = new L.marker([44.284, -118.961], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150812canyoncreek/">2015 Canyon Creek Fire</a></p>').addTo(_map);
	var TepeeSpringsMarker = new L.marker([45.208, -116.248], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150812tepeesprings/">2015 Tepee Springs Fire</a></p>').addTo(_map);
	var NorthstarMarker = new L.marker([48.338, -119.002], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150813northstar/">2015 Northstar Complex Fire</a></p>').addTo(_map);
	var WashSlideMarker = new L.marker([46.1, -115.446], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150813washslide/">2015 Wash/Slide Fire</a></p>').addTo(_map);
	var TwispRiverMarker = new L.marker([48.382, -120.211], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150814twispriver/">2015 Twisp River Fire</a></p>').addTo(_map);
	var WoodratMarker = new L.marker([46.2, -115.766], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150814woodrat/">2015 Woodrat Fire</a></p>').addTo(_map);
	var LimeBeltMarker = new L.marker([48.519, -119.662], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150814limebelt/">2015 Lime Belt Fire</a></p>').addTo(_map);
	var BlackCanyonMarker = new L.marker([48, -120], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150814blackcanyon/">2015 Black Canyon Fire</a></p>').addTo(_map);
	var TunkBlockMarker = new L.marker([48.526, -119.463], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150814tunkblock/">2015 Tunk Block Fire</a></p>').addTo(_map);
	var MunicipalMarker = new L.marker([46.467, -116.239], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150818municipal/">2015 Municipal Fire</a></p>').addTo(_map);
	var ButteMarker = new L.marker([38.330, -120.704], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150909butte/">2015 Butte Fire</a></p>').addTo(_map);
	var ValleyMarker = new L.marker([38.788, -122.624], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150912valley/">2015 Valley Fire</a></p>').addTo(_map);
	var FisherMarker = new L.marker([46.327, -116.427], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150810fisher/">2015 Fisher Fire</a></p>').addTo(_map);
	var WraggMarker = new L.marker([38.487, -122.079], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150722wragg/">2015 Wragg Fire</a></p>').addTo(_map);
	var SolimarMarker = new L.marker([34.304, -119.339], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20151226solimar/">2015 Solimar Fire</a></p>').addTo(_map);
	var RockyJerusalemMarker = new L.marker([38.917, -122.446], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150729rockyjerusalem/">2015 Rocky and Jerusalem Fires</a></p>').addTo(_map);
	var BlueCreekMarker = new L.marker([46.04, -118.07], {icon: YellowFireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2015/20150720bluecreek/">2015 Blue Creek Fire</a></p>').addTo(_map);
	var DogHeadMarker = new L.marker([34.85, -106.29], {icon: FireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2016/20160614doghead/">2016 Dog Head Fire</a></p>').addTo(_map);
	var SherpaMarker = new L.marker([34.50, -120.03], {icon: FireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2016/20160615sherpa/">2016 Sherpa Fire</a></p>').addTo(_map);
	var SanGabrielMarker = new L.marker([34.20, -117.88], {icon: FireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2016/20160620sangabriel/">2016 San Gabriel Fire</a></p>').addTo(_map);
	var ErskineMarker = new L.marker([35.57, -118.32], {icon: FireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2016/20160623erskine/">2016 Erskine Fire</a></p>').addTo(_map);
	var TrailheadMarker = new L.marker([38.96, -120.82], {icon: FireIcon}).bindPopup('<p><b>Fire: </b><br /><a href="2016/20160628trailhead/">2016 Trailhead Fire</a></p>').addTo(_map);




	_map.addControl(new L.Control.Scale());
	Accordion({el:document.querySelector('.accordion-year')});
