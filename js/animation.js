'use strict';

console.log('Thanks to CJ Gammon for the inspiration and code help for the WebGL circle animation. Original Pen at http://codepen.io/cjgammon/pen/wGrLNR')

var svgC = 'M155.822,621.614v35.641c0,63.02-20.772,95.024-60.55,95.99L64.7,753.987 c-35.979,0.874-53.251-27.04-53.251-83.723V339.952c0-56.674,17.273-92.129,53.251-106.942l30.572-12.587 c39.778-16.377,60.55,6.584,60.55,69.594v62.755l-50.901,15.381v-55.3c0-20.923-7.296-28.724-21.646-23.49l-9.351,3.411 c-12.276,4.478-18.323,16.774-18.323,36.951v331.512c0,20.185,6.047,29.842,18.323,28.967l11.834-0.843 c12.713-0.906,19.164-11.825,19.164-32.755v-29.143L155.822,621.614z'
var svgCp = 'M104.922,368.153 153.529,371.285 203.098,357.596 155.822,352.772'
var svgCs = 'M200.114,622.83v35.163c0,62.174-14.256,93.22-53.005,93.161l-63.474,2.854 c-35.095-0.054-48.111-30.971-48.111-86.974V340.692c0-55.993,43.931-111.701,79.026-125.234h26.879 c37.29-0.141,61.669,18.061,61.669,80.226v61.913l-49.568,13.689v-54.586c0-20.652-4.126-28.572-18.112-23.835l-9.116,3.088 c-11.969,4.054-35.766,16.016-35.766,35.943V659.28c0,19.934,23.797,29.628,35.766,29.085l11.535-0.523 c12.39-0.562,9.726-11.172,9.726-31.832l8.26-34.396L200.114,622.83z'
var svgS = 'M334.75,296.416v-54.184c0-24.645-9.428-33.541-27.952-26.784l-9.746,3.555 c-17.458,6.368-26.031,21.337-26.031,44.997v98.251c0,11.019,1.66,18.008,5.012,20.98c3.356,2.999,8.849,6.565,16.513,10.727 l60.705,27.272c13.984,6.789,24.03,12.369,30.009,16.687c6.013,4.363,10.734,10.207,14.147,17.55 c3.413,7.377,5.137,22.439,5.137,45.147v137.19c0,72.325-27.992,109.167-81.227,110.46l-38.342,0.931 c-47.132,1.144-69.628-33.272-69.628-103.187v-28.605l57.673-6.629v32.198c0,23.125,8.998,34.041,27.325,32.735l11.073-0.789 c16.794-1.196,25.332-13.843,25.332-37.93V532.07c0-11.467-1.808-18.895-5.402-22.284c-3.586-3.356-9.364-7.443-17.302-12.24 l-57.698-31.035c-12.117-6.071-20.783-11.44-26.109-16.151c-5.29-4.661-9.088-11.364-11.415-20.114 c-2.32-8.711-3.477-20.477-3.477-35.313V278.137c0-65.151,22.496-106.99,69.628-126.395l39.007-16.06 c52.804-21.74,80.561,3.596,80.561,77.118v62.763L334.75,296.416z'
var svgSp = 'M334.75,296.416 380.557,306.708 446.296,288.2 402.544,275.565'
var svgSs = 'M380.557,306.708v-53.374c0-24.277-9.149-33.329-27.13-27.238l-9.463,3.205 c-16.956,5.743-25.284,20.236-25.284,43.557v96.842c0,10.862,1.613,17.798,4.869,20.825c3.26,3.053,8.595,6.726,16.039,11.049 l58.918,28.61c13.562,7.085,23.303,12.865,29.1,17.287c5.829,4.467,10.405,10.353,13.713,17.679 c3.307,7.358,4.978,22.234,4.978,44.587v135.05c0,71.197-26.499,104.514-78.141,104.435h-64.139 c-45.801-0.07-41.398-32.403-41.398-101.355l8.404-37.093l47.659,3.889V646.4c0,22.793,8.742,33.788,26.54,32.981l10.751-0.488 c16.301-0.74,24.587-12.974,24.587-36.702V538.84c0-11.296-1.755-18.662-5.242-22.101c-3.48-3.405-9.088-7.593-16.793-12.54 l-56.043-32.203c-11.778-6.327-20.202-11.866-25.381-16.662c-5.144-4.746-8.837-11.465-11.101-20.16 c-2.257-8.658-3.381-20.295-3.381-34.926V285.063c0-64.253,17.215-133.155,63.016-150.816l28.767-6.07 c54.029-0.009,91.897,25.864,91.897,98.239V288.2L380.557,306.708z'
var svgS2 = 'M625.625,207.87V143.9c0-29.096-13.127-38.871-38.839-29.493l-13.485,4.919 c-24.08,8.784-35.87,26.965-35.87,54.697v115.165c0,12.917,2.281,21.019,6.889,24.325c4.618,3.34,12.183,7.235,22.757,11.723 l84.389,29.085c19.605,7.357,33.728,13.491,42.148,18.332c8.48,4.9,15.146,11.625,19.97,20.2 c4.827,8.621,7.267,26.466,7.267,53.483v163.223c0,86.05-39.497,130.034-113.923,131.841l-53.051,1.288 c-64.588,1.568-95.176-38.406-95.176-119.829v-33.314l78.729-9.049v37.741c0,27.106,12.376,39.771,37.659,37.97l15.327-1.092 c23.319-1.661,35.209-16.72,35.209-45.159V486.089c0-13.538-2.52-22.241-7.524-26.109c-4.99-3.825-13.022-8.427-24.04-13.775 L514.568,412.1c-16.564-6.584-28.382-12.481-35.634-17.746c-7.195-5.202-12.354-12.845-15.514-22.933 c-3.148-10.039-4.717-23.687-4.717-40.964v-136.02c0-75.874,30.588-126.408,95.176-152.999l53.976-22.222 c73.83-30.396,112.997-2.782,112.997,84.692v74.674L625.625,207.87z'
var svgS2p = 'M625.625,207.87 662.104,228.279 753.901,202.433 720.852,178.582'
var svgS2s = 'M662.104,228.279v-62.837c0-28.581-12.667-38.595-37.489-30.188l-13.023,4.411 c-23.264,7.88-34.658,25.385-34.658,52.65v110.239c0,12.699,2.205,20.732,6.659,24.118c4.462,3.419,11.773,7.471,21.987,12.193 l81.451,31.038c18.903,7.793,32.516,14.223,40.631,19.218c8.171,5.054,14.593,14.829,19.24,23.384 c4.65,8.599,6.999,26.181,6.999,52.694v160.182c0,84.446-39.006,117.502-110.792,117.391l-65.043-0.671 c-62.446-0.096-77.285-30.501-77.285-110.612l36.65-50.992l39.504,11.434v37.105c0,26.648,11.96,39.424,36.385,38.316 l14.801-0.672c22.51-1.021,33.984-15.503,33.984-43.438V501.568c0-13.299-2.432-21.918-7.261-25.858 c-4.816-3.898-12.569-8.645-23.204-14.21l-76.808-35.779c-16.02-6.948-27.452-13.088-34.47-18.474 c-6.963-5.324-11.956-12.992-15.015-23.008c-3.048-9.968-4.566-23.442-4.566-40.441V209.971 c0-74.652,82.226-177.604,144.672-201.685l16.052-1.201c80.547-0.218,92.396,36.222,92.396,122.065v73.282L662.104,228.279z'


function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var World = function () {
  function World() {
    _classCallCheck(this, World);

    this.circles = [];

    this.scene = new THREE.Scene();
    this.renderer = new THREE.WebGLRenderer({ antialias: true });
    this.renderer.setClearColor(0x222222);
    document.body.appendChild(this.renderer.domElement);
    this.resize();

    this.addCube();
    this.addLight();

    requestAnimationFrame(this.render.bind(this));
    window.addEventListener('resize', this.resize.bind(this));
  }

  World.prototype.addLight = function addLight() {
    var light1 = new THREE.PointLight(0xffffff, 1.1);
    light1.position.set(0,8,-20);
    this.scene.add(light1);

	var light3 = new THREE.PointLight(0xffffff, 1.1);
    light3.position.set(0,8,100);
    this.scene.add(light3);

    //var light2 = new THREE.AmbientLight(0x222222); // soft white light
    //this.scene.add(light2);
  };

  World.prototype.addCube = function addCube() {
    var colors = [0xEDB928, 0xcb8221, 0x851c50];
    var j = 20;

    for (var i = 0; i < 3; i++) {
      var cube_geometry = new THREE.CylinderGeometry(4.5 + j, 4.5 + j, 5, 100);
      var cube_mesh = new THREE.Mesh(cube_geometry);
      cube_mesh.position.x = -4;
      var cube_bsp = new ThreeBSP(cube_mesh);
      var sphere_geometry = new THREE.CylinderGeometry(3 + j, 3 + j, 6, 100);
      var sphere_mesh = new THREE.Mesh(sphere_geometry);
      sphere_mesh.position.x = -4;
      var sphere_bsp = new ThreeBSP(sphere_mesh);

      var subtract_bsp = cube_bsp.subtract(sphere_bsp);
      var circle = subtract_bsp.toMesh(new THREE.MeshLambertMaterial({
        shading: THREE.FlatShading,
        color: colors[i % 3] }));
      circle.scale.set(.5, .5, .5);
      circle.rotation.x = Math.PI / 2;
      circle.position.x += 5;
      circle.geometry.computeVertexNormals();
      this.scene.add(circle)

      var dir = i % 2 ? 1 : -1;
      var dir2 = i % 3 ? 1 : -1;
      TweenMax.to(circle.rotation, 3, { x: Math.PI * 1.5, z: Math.PI * dir, repeat: -1, repeatDelay: 4, delay: 2 + i / 2, ease: Linear.easeNone });

      this.circles.push(circle);

      j += 3;

    }

    var bgSize = 215
    var bg = new THREE.Mesh(
		new THREE.PlaneBufferGeometry( bgSize, bgSize / 2048 * 1364 ),
		new THREE.MeshPhongMaterial( {
			color: 0xffffff,
			map: THREE.ImageUtils.loadTexture( "./img/background5.jpg" ),
			side: THREE.DoubleSide,
			shininess: 0,
			shading: THREE.FlatShading
		} )
	);
	bg.position.z = -20
	bg.position.y = -2
	bg.position.x = 0.5
	this.scene.add(bg)

	var letterCs = this.createShape(this.transformSVGPath(svgCs), 0xEDB928, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterCs )
	var letterCp = this.createShape(this.transformSVGPath(svgCp), 0xd6911a, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterCp )
	var letterC = this.createShape(this.transformSVGPath(svgC), 0xffffff, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterC )

	var letterSs = this.createShape(this.transformSVGPath(svgSs), 0xEDB928, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterSs )
	var letterSp = this.createShape(this.transformSVGPath(svgSp), 0xd6911a, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterSp )
	var letterS = this.createShape(this.transformSVGPath(svgS), 0xffffff, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterS )

	var letterS2s = this.createShape(this.transformSVGPath(svgS2s), 0xEDB928, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterS2s )
	var letterS2p = this.createShape(this.transformSVGPath(svgS2p), 0xd6911a, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterS2p )
	var letterS2 = this.createShape(this.transformSVGPath(svgS2), 0xffffff, -7, 8, 0, Math.PI, 0, 0, 0.02)
	this.scene.add( letterS2 )
  };

  World.prototype.render = function render() {
    //requestAnimationFrame(this.render.bind(this));
    this.renderer.render(this.scene, this.camera);
  };

  World.prototype.resize = function resize() {
  	var height = window.dealWithMobileSafari ? 745 : Math.max(window.innerHeight, 660)
  	var width = window.dealWithMobileSafari ? 500 : window.innerWidth;
    this.camera = new THREE.PerspectiveCamera(35, width / height, 0.1, 1000);
    this.camera.position.z = 100;
    this.camera.position.y = -8;

    this.renderer.setSize(width, height);
  };

  World.prototype.createShape = function ( shape, color, x, y, z, rx, ry, rz, s ) {
	// flat shape

	var geometry = new THREE.ShapeGeometry( shape );
	var material = new THREE.MeshBasicMaterial({
	color: color, 
	side: THREE.DoubleSide,
	overdraw: false
	});

	var mesh = new THREE.Mesh( geometry, material );
	mesh.position.set( x, y, z );
	mesh.rotation.set( rx, ry, rz );
	mesh.scale.set( s, s, s );
	mesh.receiveShadow = true;

	return mesh;
  };

  World.prototype.transformSVGPath = function (pathStr) {

	  var DIGIT_0 = 48, DIGIT_9 = 57, COMMA = 44, SPACE = 32, PERIOD = 46,
	      MINUS = 45;

	  var path = new THREE.Shape();
	  
	  var idx = 1, len = pathStr.length, activeCmd,
	      x = 0, y = 0, nx = 0, ny = 0, firstX = null, firstY = null,
	      x1 = 0, x2 = 0, y1 = 0, y2 = 0,
	      rx = 0, ry = 0, xar = 0, laf = 0, sf = 0, cx, cy;
	  
	  function eatNum() {
	    var sidx, c, isFloat = false, s;
	    // eat delims
	    while (idx < len) {
	      c = pathStr.charCodeAt(idx);
	      if (c !== COMMA && c !== SPACE)
	        break;
	      idx++;
	    }
	    if (c === MINUS)
	      sidx = idx++;
	    else
	      sidx = idx;
	    // eat number
	    while (idx < len) {
	      c = pathStr.charCodeAt(idx);
	      if (DIGIT_0 <= c && c <= DIGIT_9) {
	        idx++;
	        continue;
	      }
	      else if (c === PERIOD) {
	        idx++;
	        isFloat = true;
	        continue;
	      }
	      
	      s = pathStr.substring(sidx, idx);
	      return isFloat ? parseFloat(s) : parseInt(s);
	    }
	    
	    s = pathStr.substring(sidx);
	    return isFloat ? parseFloat(s) : parseInt(s);
	  }
	  
	  function nextIsNum() {
	    var c;
	    // do permanently eat any delims...
	    while (idx < len) {
	      c = pathStr.charCodeAt(idx);
	      if (c !== COMMA && c !== SPACE)
	        break;
	      idx++;
	    }
	    c = pathStr.charCodeAt(idx);
	    return (c === MINUS || (DIGIT_0 <= c && c <= DIGIT_9));
	  }
	  
	  var canRepeat;
	  activeCmd = pathStr[0];
	  while (idx <= len) {
	    canRepeat = true;
	    switch (activeCmd) {
	        // moveto commands, become lineto's if repeated
	      case 'M':
	        x = eatNum();
	        y = eatNum();
	        path.moveTo(x, y);
	        activeCmd = 'L';
	        break;
	      case 'm':
	        x += eatNum();
	        y += eatNum();
	        path.moveTo(x, y);
	        activeCmd = 'l';
	        break;
	      case 'Z':
	      case 'z':
	        canRepeat = false;
	        if (x !== firstX || y !== firstY)
	          path.lineTo(firstX, firstY);
	        break;
	        // - lines!
	      case 'L':
	      case 'H':
	      case 'V':
	        nx = (activeCmd === 'V') ? x : eatNum();
	        ny = (activeCmd === 'H') ? y : eatNum();
	        path.lineTo(nx, ny);
	        x = nx;
	        y = ny;
	        break;
	      case 'l':
	      case 'h':
	      case 'v':
	        nx = (activeCmd === 'v') ? x : (x + eatNum());
	        ny = (activeCmd === 'h') ? y : (y + eatNum());
	        path.lineTo(nx, ny);
	        x = nx;
	        y = ny;
	        break;
	        // - cubic bezier
	      case 'C':
	        x1 = eatNum(); y1 = eatNum();
	      case 'S':
	        if (activeCmd === 'S') {
	          x1 = 2 * x - x2; y1 = 2 * y - y2;
	        }
	        x2 = eatNum();
	        y2 = eatNum();
	        nx = eatNum();
	        ny = eatNum();
	        path.bezierCurveTo(x1, y1, x2, y2, nx, ny);
	        x = nx; y = ny;
	        break;
	      case 'c':
	        x1 = x + eatNum();
	        y1 = y + eatNum();
	      case 's':
	        if (activeCmd === 's') {
	          x1 = 2 * x - x2;
	          y1 = 2 * y - y2;
	        }
	        x2 = x + eatNum();
	        y2 = y + eatNum();
	        nx = x + eatNum();
	        ny = y + eatNum();
	        path.bezierCurveTo(x1, y1, x2, y2, nx, ny);
	        x = nx; y = ny;
	        break;
	        // - quadratic bezier
	      case 'Q':
	        x1 = eatNum(); y1 = eatNum();
	      case 'T':
	        if (activeCmd === 'T') {
	          x1 = 2 * x - x1;
	          y1 = 2 * y - y1;
	        }
	        nx = eatNum();
	        ny = eatNum();
	        path.quadraticCurveTo(x1, y1, nx, ny);
	        x = nx;
	        y = ny;
	        break;
	      case 'q':
	        x1 = x + eatNum();
	        y1 = y + eatNum();
	      case 't':
	        if (activeCmd === 't') {
	          x1 = 2 * x - x1;
	          y1 = 2 * y - y1;
	        }
	        nx = x + eatNum();
	        ny = y + eatNum();
	        path.quadraticCurveTo(x1, y1, nx, ny);
	        x = nx; y = ny;
	        break;
	        // - elliptical arc
	      case 'A':
	        rx = eatNum();
	        ry = eatNum();
	        xar = eatNum() * DEGS_TO_RADS;
	        laf = eatNum();
	        sf = eatNum();
	        nx = eatNum();
	        ny = eatNum();
	        if (rx !== ry) {
	          console.warn("Forcing elliptical arc to be a circular one :(",
	                       rx, ry);
	        }
	        // SVG implementation notes does all the math for us! woo!
	        // http://www.w3.org/TR/SVG/implnote.html#ArcImplementationNotes
	        // step1, using x1 as x1'
	        x1 = Math.cos(xar) * (x - nx) / 2 + Math.sin(xar) * (y - ny) / 2;
	        y1 = -Math.sin(xar) * (x - nx) / 2 + Math.cos(xar) * (y - ny) / 2;
	        // step 2, using x2 as cx'
	        var norm = Math.sqrt(
	          (rx*rx * ry*ry - rx*rx * y1*y1 - ry*ry * x1*x1) /
	          (rx*rx * y1*y1 + ry*ry * x1*x1));
	        if (laf === sf)
	          norm = -norm;
	        x2 = norm * rx * y1 / ry;
	        y2 = norm * -ry * x1 / rx;
	        // step 3
	        cx = Math.cos(xar) * x2 - Math.sin(xar) * y2 + (x + nx) / 2;
	        cy = Math.sin(xar) * x2 + Math.cos(xar) * y2 + (y + ny) / 2;
	        
	        var u = new THREE.Vector2(1, 0),
	            v = new THREE.Vector2((x1 - x2) / rx,
	                                  (y1 - y2) / ry);
	        var startAng = Math.acos(u.dot(v) / u.length() / v.length());
	        if (u.x * v.y - u.y * v.x < 0)
	          startAng = -startAng;
	        
	        // we can reuse 'v' from start angle as our 'u' for delta angle
	        u.x = (-x1 - x2) / rx;
	        u.y = (-y1 - y2) / ry;
	        
	        var deltaAng = Math.acos(v.dot(u) / v.length() / u.length());
	        // This normalization ends up making our curves fail to triangulate...
	        if (v.x * u.y - v.y * u.x < 0)
	          deltaAng = -deltaAng;
	        if (!sf && deltaAng > 0)
	          deltaAng -= Math.PI * 2;
	        if (sf && deltaAng < 0)
	          deltaAng += Math.PI * 2;
	        
	        path.absarc(cx, cy, rx, startAng, startAng + deltaAng, sf);
	        x = nx;
	        y = ny;
	        break;
	      default:
	        throw new Error("weird path command: " + activeCmd);
	    }
	    if (firstX === null) {
	      firstX = x;
	      firstY = y;
	    }
	    // just reissue the command
	    if (canRepeat && nextIsNum())
	      continue;
	    activeCmd = pathStr[idx++];
	  }
	  
	  return path;
	}

  return World;
}();

var _w = new World();