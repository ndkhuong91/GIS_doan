
var map;
var marker, i;
var image = {url: 'images/home-icon.png'};
var infowindow;
var maloai;
var geocoder;
var positions = [];
var binhthuy_popygon, binhthuy_num;
var omon_popygon, omon_num;
var codo_popygon, codo_num;
var cairang_popygon, cairang_num;
var ninhkieu_popygon, ninhkieu_num;
var phongdien_popygon, phongdien_num;
var thoilai_popygon, thoilai_num;
var thotnot_popygon, thotnot_num;
var vinhthanh_popygon, vinhthanh_num;
var polygons = []; var nums = [];
var legend;
var value;
var geocoder;
var addressgeo = [];
var directionsService ;
var directionsDisplay ;
var mapstyle = document.getElementById("map");
var legendstyle = document.getElementById("legend");
var index;

var options = [{
    center: {lat: 10.062676,  lng: 105.723479},
    zoom: 12.5
}, {
    center: {lat: 10.136694,  lng:  105.462910},
    zoom: 12
}, {
    center: {lat: 10.029320,  lng:  105.760568},
    zoom: 13.5
}, {
    center: {lat: 9.993529,   lng:  105.783342},
    zoom: 13
}, {
    center: {lat: 10.131018,   lng:  105.641595},
    zoom: 12.5
}, {
    center: {lat: 10.006221,   lng:  105.662228},
    zoom: 12.5
}, {
    center: {lat: 10.039798,    lng:  105.540362},
    zoom: 12
}, {
    center: {lat: 10.240014,     lng:  105.552056},
    zoom: 12
}, {
    center: {lat: 10.207350,     lng:  105.359810},
    zoom: 12
}, {
    center: {lat: 10.122915, lng:  105.548631},
    zoom: 11
}];

var option0 = {
    fillOpacity: 0.1, fillColor: '#F7FCB9'
};

var option1 = {
    fillOpacity: 0.5, fillColor: '#5000ff'
};
var option2 ={
    fillOpacity: 0.4, fillColor: '#6b28ff'
};
var option3 = {
    fillOpacity: 0.2, fillColor: '#824bfc'
};

var option4 = {
    fillOpacity: 0.4, fillColor: '#F7FCB9'
};
var markers = [];
var markersshow = [];


function initMap() {
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 10.0309694, lng: 105.7667154}, 
      zoom: 11,
      zoomControl: true,
      draggable: true
    });
    directionsDisplay.setMap(map);
    markers = [];
    
    var bounds = new google.maps.LatLngBounds();
    codeAddress();

    //markers cho truong hoc
    for (i = 0; i < truong.length; i++) {  
      //maloai = quan[i][7] - 1;
      image = 'images/'.concat(truong[i][5]);
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(truong[i][3], truong[i][4]),
        title: truong[i][1],
        icon: image,
        animation: google.maps.Animation.DROP ,
        map: map
      });
      infowindow = new google.maps.InfoWindow();
      marker.addListener('click', (function(marker,i) {
        return function() {
          /*
          //string content
          var str1 = '<div style="width:250px; height:200px"> '.concat(quan[i][1]);
          var str2 =  '<br> Địa chỉ: '.concat(quan[i][2]);
          var str3 = '<br><br>'.concat(quan[i][3]);
          var str4 = '<br><img src="images/'.concat(quan[i][4]);
          var str5 = '" alt='.concat(quan[i][1]);
          var str6 = '></div>';
          var content = str1.concat(str2, str3,str4,str5,str6);
          
          // Tạo đối tượng video và thiết lập các thông số
          var video = document.createElement('video');
          video.setAttribute('src','images/Supporting Informal Design with Interactive Whiteboards.mp4');
          video.setAttribute('width', '300');
          video.setAttribute('height', '200');
          video.setAttribute('controls', 'controls');
          video.setAttribute('autoplay', 'autoplay'); */

          //detailed map
          var detailDiv = document.createElement('div');
          detailDiv.style.width = '300px';
          detailDiv.style.height = '300px';
          document.getElementById('map').appendChild(detailDiv);
          var overviewOpts = {
              zoom: 17,
              center: marker.getPosition(),
              mapTypeId: map.getMapTypeId(),
              disableDefaultUI: true
          };
          var detailMap = new google.maps.Map(detailDiv, overviewOpts);
          var detailMarker = new google.maps.Marker({
              position: marker.getPosition(),
              map: detailMap,
              clickable: false
          });

          infowindow.setContent(detailDiv);
          infowindow.open(map,marker);
              
        }
      })(marker,i)); 
      bounds.extend( new google.maps.LatLng(truong[i][3], truong[i][4]));
      markers.push(marker);
      markersshow.push(1);
    }

    //marker cho nha tro
    for (i = 0; i < nhatro.length; i++) { 
      image = 'images/4.png';;
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(nhatro[i][4], nhatro[i][5]),
        title: nhatro[i][1],
        icon: image,
        animation: google.maps.Animation.DROP ,
        map: map
      });
      infowindow = new google.maps.InfoWindow();
      marker.addListener('click', (function(marker,i) {
        return function() {
          //string content
          var str1 = '<div style="width:200px; height:120px">Nhà trọ: '.concat(nhatro[i][1]);
          var str2 =  '<br>Số điện thoại: '.concat(nhatro[i][2]);
          var str3 = '<br>Thông tin chi tiết: '.concat(nhatro[i][3]); 
          var str4 = '<br>Địa chỉ: '.concat(addressgeo[i]);
          var str5 = '</div>';
          var content = str1.concat(str2, str3,str4,str5);
          infowindow.setContent(content);
          infowindow.open(map,marker);
              
        }
      })(marker,i));       
      bounds.extend( new google.maps.LatLng(nhatro[i][4], nhatro[i][5]));
      markers.push(marker);
      markersshow.push(1);
    }

    google.maps.event.addListener(map, "click", function(event) {
          infowindow.close();
      });

    google.maps.event.addListener(map, "zoom_changed", function() {
        var zoom = map.getZoom(); 
        
        for (i = 0; i < markers.length; i++) {
            markers[i].setVisible(markersshow[i] == 1 && zoom>=13);
        }
        
    });

    setPolygon(); 

    //create legend for later use
    legend = document.getElementById('legend');
    var div = document.createElement('div');
    div.innerHTML = ' 0 - 0: <input type="text" maxlength="10" size="10" style="opacity: 0.2;background:#824bfc;"><br>1 - 1: <input type="text" maxlength="10" size="10" style="opacity: 0.4;background:#6b28ff"><br>2 - n: <input type="text" maxlength="10" size="10" style="opacity: 0.5;background:#5000ff;"><br>';
    legend.appendChild(div);    
    legend = document.getElementById('legend');

    testInside();
    //map.fitBounds(bounds);
};

function setOp(value){ 
	  map.setOptions(options[value]);
};

function codeAddress() {
    addressgeo = [];
    for (i = 0; i < nhatro.length; i++) { 
        var address = new google.maps.LatLng( nhatro[i][4], nhatro[i][5]);
        geocoder.geocode( { 'location': address}, function(results, status) {
          if (status == 'OK') {
              if (results[0]) {
                  addressgeo.push(results[0].formatted_address);
              }else{
                  
              }
          } else {
              alert('Geocode was not successful for the following reason: ' + status);
          }
        });
    }
};


function removeLegend(){
    document.getElementById("truongcantim").value = "";
    document.getElementById("kmcantim").value = "";
    var zoom = map.getZoom();  
    for (i = 0; i < markers.length; i++) {
        markersshow[i] = 1;
        markers[i].setVisible(zoom>=13);
    }
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].clear();
    for( i=0; i<polygons.length;i++){
        polygons[i].setOptions(option0);
    }
};

function addLegend(){
    removeLegend();
    mapstyle.style.display = "block";
    legendstyle.style.display = "block";
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
    for( i=0; i<nums.length;i++){
        if(nums[i]==0){
            polygons[i].setOptions(option3);
        }else if(nums[i]==1){
            polygons[i].setOptions(option2);
        }else{
            polygons[i].setOptions(option1);
        }
    }
};

function testInside(lat, long){
     //test a place is inside polygon
    nums = [];
    ninhkieu_num=0;phongdien_num=0;binhthuy_num=0;thoilai_num=0;omon_num=0;thotnot_num=0;
    codo_num=0;cairang_num=0;vinhthanh_num=0;
    
    for (i = 0; i < nhatro.length; i++) { 
        if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), ninhkieu_popygon) == true){
            ninhkieu_num += 1;
        }else if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), binhthuy_popygon) == true){
            binhthuy_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), cairang_popygon) == true){
            cairang_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), phongdien_popygon) == true){
            phongdien_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), omon_popygon) == true){
            omon_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), thoilai_popygon) == true){
            thoilai_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), thotnot_popygon) == true){
            thotnot_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), vinhthanh_popygon) == true){
            vinhthanh_num += 1;
        }if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), codo_popygon) == true){
            codo_num += 1;
        }
    }
    nums.push(binhthuy_num);
    nums.push(codo_num);
    nums.push(ninhkieu_num);
    nums.push(cairang_num);
    nums.push(omon_num);
    nums.push(phongdien_num);
    nums.push(thoilai_num);
    nums.push(thotnot_num);
    nums.push(vinhthanh_num);
};

function draw(){   
    var data = [
        {label:"Bình Thuỷ", value:19},
        {label:"Cờ Đỏ", value:5},
        {label:"Ninh Kiều", value:13},
        {label:"Cái Răng", value:17},
        {label:"Ô Môn", value:19},
        {label:"Phong Điền", value:27},
        {label:"Thới Lai", value:19},
        {label:"Thốt Nốt", value:27},
        {label:"Vĩnh Thạnh", value:27}
    ];


    var div = d3.select("article").append("div").attr("class", "toolTip");

    var axisMargin = 20,
        margin = 20,
        valueMargin = 4,
        width = parseInt(d3.select('article').style('width'), 9),
        height = parseInt(d3.select('article').style('height'), 10),
        barHeight = (height-axisMargin-margin*2)* 0.4/data.length,
        barPadding = (height-axisMargin-margin*2)*0.6/data.length,
        data, bar, svg, scale, xAxis, labelWidth = 0;

    max = d3.max(data, function(d) { return d.value; });

    svg = d3.select('article')
        .append("svg")
        .attr("width", width)
        .attr("height", height);


    bar = svg.selectAll("g")
        .data(data)
        .enter()
        .append("g");

    bar.attr("class", "bar")
        .attr("cx",0)
        .attr("transform", function(d, i) {
            return "translate(" + margin + "," + (i * (barHeight + barPadding) + barPadding) + ")";
        });

    bar.append("text")
        .attr("class", "label")
        .attr("y", barHeight / 2)
        .attr("dy", ".35em") //vertical align middle
        .text(function(d){
            return d.label;
        }).each(function() {
        labelWidth = Math.ceil(Math.max(labelWidth, this.getBBox().width));
    });

    scale = d3.scale.linear()
        .domain([0, max])
        .range([0, width - margin*2 - labelWidth]);

    xAxis = d3.svg.axis()
        .scale(scale)
        .tickSize(-height + 2*margin + axisMargin)
        .orient("bottom");

    bar.append("rect")
        .attr("transform", "translate("+labelWidth+", 0)")
        .attr("height", barHeight)
        .attr("width", function(d){
            return scale(d.value);
        });

    bar.append("text")
        .attr("class", "value")
        .attr("y", barHeight / 2)
        .attr("dx", -valueMargin + labelWidth) //margin right
        .attr("dy", ".35em") //vertical align middle
        .attr("text-anchor", "end")
        .text(function(d){
            return (d.value+"%");
        })
        .attr("x", function(d){
            var width = this.getBBox().width;
            return Math.max(width + valueMargin, scale(d.value));
        });

    bar.on("mousemove", function(d){
        div.style("left", d3.event.pageX+10+"px");
        div.style("top", d3.event.pageY-25+"px");
        div.style("display", "inline-block");
        div.html((d.label)+"<br>"+(d.value)+"%");
        });
    bar.on("mouseout", function(d){
        div.style("display", "none");
        });

    svg.insert("g",":first-child")
        .attr("class", "axisHorizontal")
        .attr("transform", "translate(" + (margin + labelWidth) + ","+ (height - axisMargin - margin)+")")
        .call(xAxis);
};

function selectChange(){
    document.getElementById("truongcantim").value = "";
    document.getElementById("kmcantim").value = "";
    mapstyle.style.display = "block";
    legendstyle.style.display = "block";
    value = document.getElementById("mySelect").value;
    for( i=0; i<polygons.length;i++){
        polygons[i].setOptions(option0);
    }
    if(value != 9){
        polygons[value].setOptions(option4);
    }else{
        var zoom = map.getZoom();  
        for (i = 0; i < markers.length; i++) {
            markersshow[i] = 1;
            markers[i].setVisible(zoom>=13);
        }
    }
    setOp(value);
    var truonglen = truong.length;
    for (i = 0; i < nhatro.length; i++) { 
        if(google.maps.geometry.poly.containsLocation(new google.maps.LatLng(nhatro[i][4], nhatro[i][5]), polygons[value]) == true){
            markers[i+truonglen].setVisible(true);
            markersshow[i+truonglen] = 1;
        }else{
            markers[i+truonglen].setVisible(false); 
            markersshow[i+truonglen] = 0;
        }
    }
};

function tim(){
    mapstyle.style.display = "block";
    legendstyle.style.display = "block";
    var tentruong = document.getElementById("truongcantim").value;
    var km = parseFloat(document.getElementById("kmcantim").value);
    var found = false;
    var temp = -1;
    for(i=0;i<truong.length;i++){
        if(truong[i][1].toUpperCase().trim() === tentruong.toUpperCase().trim() ){
            found = true;
            temp = i;
        }
    }
    if(found == false){
        alert("Wrong school name! See markers for more information!");
    }else{
        for(i=0;i<nhatro.length;i++){
            var start = new google.maps.LatLng( truong[temp][3], truong[temp][4]);
            var end = new google.maps.LatLng( nhatro[i][4], nhatro[i][5]);
            var request = {
              origin: start,
              destination: end,
              travelMode: 'DRIVING'
            };  
            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                    var min = 10;
                    var tempx; index = -100;
                    if(result.routes[0].legs[0].distance.value  < km*1000){ //in meters 

                    }else{
                        for(i=0;i<nhatro.length;i++){
                            var x = parseFloat(result.routes[0].legs[0].end_location.lat());
                            var y = parseFloat(nhatro[i][4]);
                            tempx = Math.abs(x - y);
                            if(tempx < min){
                                min = tempx;
                                index = i;
                            }   
                        } //alert(index);
                        markers[index+truong.length].setVisible(false);
                        markersshow[index+truong.length] = 0;
                        //alert( markersshow[i+truong.length]);
                        //alert(markersshow);
                    }
                }
            });
        }
        map.setOptions({center: {lat: truong[temp][3],  lng:  truong[temp][4]},zoom: 15});
    }
};

function hideMap() {
    d3.select("article").selectAll("svg").remove();
    draw();
    mapstyle.style.display = "none";
    legendstyle.style.display = "none";
};

function setPolygon(){ 
    // Construct the polygon.
    for (i = 0; i < binhthuy.length; i++) {  
        positions.push(new google.maps.LatLng(binhthuy[i][1], binhthuy[i][0]));
    }
    binhthuy_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#E5F5F9',
      fillOpacity: 0.1
    });
    binhthuy_popygon.setMap(map);
    polygons.push(binhthuy_popygon);

    positions = [];
    for (i = 0; i < codo.length; i++) {  
        positions.push(new google.maps.LatLng(codo[i][1], codo[i][0]));
    }
    codo_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#E7E1EF',
      fillOpacity: 0.1
    });
    codo_popygon.setMap(map);
    polygons.push(codo_popygon);

    positions = [];
    for (i = 0; i < ninhkieu.length; i++) {  
        positions.push(new google.maps.LatLng(ninhkieu[i][1], ninhkieu[i][0]));
    }
    ninhkieu_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#F7FCB9',
      fillOpacity: 0.1
    });
    ninhkieu_popygon.setMap(map);
    polygons.push(ninhkieu_popygon);

    positions = [];
    for (i = 0; i < cairang.length; i++) {  
        positions.push(new google.maps.LatLng(cairang[i][1], cairang[i][0]));
    }
    cairang_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FEE0D2',
      fillOpacity: 0.1
    });
    cairang_popygon.setMap(map);
    polygons.push(cairang_popygon);

    positions = [];
    for (i = 0; i < omon.length; i++) {  
        positions.push(new google.maps.LatLng(omon[i][1], omon[i][0]));
    }
    omon_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#EFEDF5',
      fillOpacity: 0.1
    });
    omon_popygon.setMap(map);
    polygons.push(omon_popygon);

    positions = [];
    for (i = 0; i < phongdien.length; i++) {  
        positions.push(new google.maps.LatLng(phongdien[i][1], phongdien[i][0]));
    }
    phongdien_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#F0F0F0',
      fillOpacity: 0.1
    });
    phongdien_popygon.setMap(map);
    polygons.push(phongdien_popygon);

    positions = [];
    for (i = 0; i < thoilai.length; i++) {  
        positions.push(new google.maps.LatLng(thoilai[i][1], thoilai[i][0]));
    }
    thoilai_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FEE6CE',
      fillOpacity: 0.1
    });
    thoilai_popygon.setMap(map);
    polygons.push(thoilai_popygon);

    positions = [];
    for (i = 0; i < thotnot.length; i++) {  
        positions.push(new google.maps.LatLng(thotnot[i][1], thotnot[i][0]));
    }
    thotnot_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#ECE2F0',
      fillOpacity: 0.1
    });
    thotnot_popygon.setMap(map);
    polygons.push(thotnot_popygon);

    positions = [];
    for (i = 0; i < vinhthanh.length; i++) {  
        positions.push(new google.maps.LatLng(vinhthanh[i][1], vinhthanh[i][0]));
    }
    vinhthanh_popygon = new google.maps.Polygon({
      paths: positions,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#E0ECF4',
      fillOpacity: 0.1
    });
    vinhthanh_popygon.setMap(map);
    polygons.push(vinhthanh_popygon);
};

