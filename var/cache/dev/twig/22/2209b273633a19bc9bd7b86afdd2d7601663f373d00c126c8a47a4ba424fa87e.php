<?php

/* @Dam/dam/open_layers_map.html.twig */
class __TwigTemplate_d40a7bb8ccb7b830da65ae6479734b9df378ddbacf72b68255c090cb2a6b2d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45221ba8f372d514ccfd3d6e920f8550b55800b95cb22669823b1d63b7b25b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45221ba8f372d514ccfd3d6e920f8550b55800b95cb22669823b1d63b7b25b56->enter($__internal_45221ba8f372d514ccfd3d6e920f8550b55800b95cb22669823b1d63b7b25b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/open_layers_map.html.twig"));

        $__internal_8c7774152d67a274ec49ac840b894319e2c864f6699a2c657fed60bd911bee33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7774152d67a274ec49ac840b894319e2c864f6699a2c657fed60bd911bee33->enter($__internal_8c7774152d67a274ec49ac840b894319e2c864f6699a2c657fed60bd911bee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/open_layers_map.html.twig"));

        // line 1
        echo "
<!doctype html>
<html>
<head>
    <title>Flickr Search</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("openLayers/css/ol.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("openLayers/css/samples.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("openLayers/css/ol3-loadingpanel.css"), "html", null, true);
        echo "\" type=\"text/css\" />
</head>
<body>

<form id=\"searchform\" action=\"#\" method=\"get\" style=\"display:inline\"
      onsubmit=\"FindCity(); return false\">
    <input type=\"text\" id=\"query_str\" name=\"query_str\" value=\"London, UK\"
           onfocus=\"this.value = (this.value=='London, UK')? '' : this.value;\">
    <input type=\"submit\" value=\" Find \">
</form>

<div id=\"map\" class=\"map\"></div>
<div id=\"photo-info\"></div>

<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("openLayers/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("openLayers/js/ol-debug.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("openLayers/js/ol3-loadingpanel.js"), "html", null, true);
        echo "\"></script>
<script>
//    var \$loading = \$('#loading').hide();
//    document.ajaxStart(function () {
//        \$loading.show();
//    })
//        .ajaxStop(function () {
//            \$loading.hide();
//        });

    var flickrSource = new ol.source.Vector();

    function FindCity()
    {
        var param = document.getElementById('query_str').value;
        var data = {location: param};


        \$.ajax({
            type: \"POST\",
            url: '";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_searchNearBy");
        echo "',
            data: data,
            dataType: 'jsonp',
            beforeSend: function(){
                \$(\"#loading\").show();
            },
            success: function () {
                alert('sss');
//                var transform = ol.proj.getTransform('EPSG:4326', 'EPSG:3857');
//                data.forEach(function(item) {
//                    console.log(item);
//                    var feature = new ol.Feature(item);
//                    feature.set('url', item.media.m);
//                    var coordinate = transform([parseFloat(item.longitude), parseFloat(item.latitude)]);
//                    var geometry = new ol.geom.Point(coordinate);
//                    feature.setGeometry(geometry);
//                    flickrSource.addFeature(feature);
            },
            error: function (e) {
                alert(e.getCoordinates());
            }
        });
    }



    var cache = {};

    function photoStyle(feature, scale) {
        var url = feature.get('url');
        var key = scale + url;
        if (!cache[key]) {
            cache[key] = new ol.style.Style({
                image: new ol.style.Icon({
                    scale: scale,
                    src: url
                })
            });
        }
        return cache[key];
    }

    function flickrStyle(feature) {
        return [photoStyle(feature, 0.10)];
    }

    function selectedStyle(feature) {
        return [photoStyle(feature, 0.50)];
    }

    var flickrLayer = new ol.layer.Vector({
        source: flickrSource,
        style: flickrStyle
    });

    var layer = new ol.layer.Tile({
        source: new ol.source.OSM()
    });


    var center = ol.proj.transform([0,0], 'EPSG:4326', 'EPSG:3857');

    var view = new ol.View({
        center: center,
        zoom: 15
    });

    var trackStyle = new ol.style.Style({
        image: new ol.style.Icon({
            anchor: [0.5, 0.5],
            size: [52, 52],
            offset: [52, 0],
            opacity: 1,
            scale: 0.25,
            src: '";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Cuddly_Fisherman.png"), "html", null, true);
        echo "'
        })
    });
    // use a single feature with a linestring geometry to display our track
    var trackFeature = new ol.Feature({
        geometry: new ol.geom.LineString([])
    });

    var trackLayer = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: [trackFeature]
        }),
        style: trackStyle
    });

    var geolocation = new ol.Geolocation({tracking: true});
    geolocation.bindTo('projection', view);
    geolocation.on('change:position', function() {
        var coordinate = geolocation.getPosition();
        view.setCenter(coordinate);
        trackFeature.getGeometry().appendCoordinate(coordinate);
    });

    var marker = new ol.Overlay({
        element: document.getElementById('location'),
        positioning: 'center-center'
    });

    var positionFeature = new ol.Feature();
    positionFeature.setStyle(new ol.style.Style({
        image: new ol.style.Circle({
            radius: 20,
            fill: new ol.style.Fill({
                color: '#3399CC'
            }),
            stroke: new ol.style.Stroke({
                color: '#fff',
                width: 20
            })
        })
    }));

    var map = new ol.Map({
        renderer: 'canvas',
        target: 'map',
        layers: [layer, flickrLayer, trackLayer],
        view: view
    });
    map.addOverlay(marker);
    marker.bindTo('position', geolocation);
    map.addControl(new ol.control.LoadingPanel());

    function photoContent(feature) {
        var content = \$('#photo-template').html();
        var keys = ['author','author_id','date_taken','latitude','longitude','link','url','tags','title'];
        for (var i=0; i<keys.length; i++) {
            var key = keys[i];
            var value = feature.get(key);
            content = content.replace('{'+key+'}',value);
        }
        return content;
    }

    var select = new ol.interaction.Select({
        layers: [flickrLayer],
        style: selectedStyle
    });
    map.addInteraction(select);

    var selectedFeatures = select.getFeatures();

    selectedFeatures.on('add', function(event) {
        var feature = event.target.item(0);
        var content = photoContent(feature);
        \$('#photo-info').html(content);
    });

    selectedFeatures.on('remove', function(event) {
        \$('#photo-info').empty();
    });


    function successHandler(data) {

        var transform = ol.proj.getTransform('EPSG:4326', 'EPSG:3857');
        data.forEach(function(item) {
            console.log(item);
            var feature = new ol.Feature(item);
            feature.set('url', item.media.m);
            var coordinate = transform([parseFloat(item.longitude), parseFloat(item.latitude)]);
            var geometry = new ol.geom.Point(coordinate);
            feature.setGeometry(geometry);
            flickrSource.addFeature(feature);
        });
    }

</script>

<script type=\"text/html\" id=\"photo-template\">
    <a href=\"{link}\" target=\"_blank\" title=\"Click to open photo in new tab\"><img src=\"{url}\" style=\"float: left\"></a><br>
    <p>Taken by <a href=\"http://www.flickr.com/people/{author_id}\" target=\"_blank\" title=\"Click to view author details in new tab\">{author}</a> on {date_taken} at lat: {latitude} lon: {longitude}</p><br>
    <p>Tagged in <b>{tags}</b></p>
</script>
<div id='loading'><img src=''";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "></div>
</body>
</html>
";
        
        $__internal_45221ba8f372d514ccfd3d6e920f8550b55800b95cb22669823b1d63b7b25b56->leave($__internal_45221ba8f372d514ccfd3d6e920f8550b55800b95cb22669823b1d63b7b25b56_prof);

        
        $__internal_8c7774152d67a274ec49ac840b894319e2c864f6699a2c657fed60bd911bee33->leave($__internal_8c7774152d67a274ec49ac840b894319e2c864f6699a2c657fed60bd911bee33_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/open_layers_map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 221,  165 => 118,  88 => 44,  65 => 24,  61 => 23,  57 => 22,  40 => 8,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!doctype html>
<html>
<head>
    <title>Flickr Search</title>
    <link rel=\"stylesheet\" href=\"{{ asset('openLayers/css/ol.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('openLayers/css/samples.css') }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('openLayers/css/ol3-loadingpanel.css') }}\" type=\"text/css\" />
</head>
<body>

<form id=\"searchform\" action=\"#\" method=\"get\" style=\"display:inline\"
      onsubmit=\"FindCity(); return false\">
    <input type=\"text\" id=\"query_str\" name=\"query_str\" value=\"London, UK\"
           onfocus=\"this.value = (this.value=='London, UK')? '' : this.value;\">
    <input type=\"submit\" value=\" Find \">
</form>

<div id=\"map\" class=\"map\"></div>
<div id=\"photo-info\"></div>

<script src=\"{{ asset('openLayers/js/jquery-1.11.0.min.js') }}\"></script>
<script src=\"{{ asset('openLayers/js/ol-debug.js') }}\"></script>
<script src=\"{{ asset('openLayers/js/ol3-loadingpanel.js') }}\"></script>
<script>
//    var \$loading = \$('#loading').hide();
//    document.ajaxStart(function () {
//        \$loading.show();
//    })
//        .ajaxStop(function () {
//            \$loading.hide();
//        });

    var flickrSource = new ol.source.Vector();

    function FindCity()
    {
        var param = document.getElementById('query_str').value;
        var data = {location: param};


        \$.ajax({
            type: \"POST\",
            url: '{{ path('_searchNearBy') }}',
            data: data,
            dataType: 'jsonp',
            beforeSend: function(){
                \$(\"#loading\").show();
            },
            success: function () {
                alert('sss');
//                var transform = ol.proj.getTransform('EPSG:4326', 'EPSG:3857');
//                data.forEach(function(item) {
//                    console.log(item);
//                    var feature = new ol.Feature(item);
//                    feature.set('url', item.media.m);
//                    var coordinate = transform([parseFloat(item.longitude), parseFloat(item.latitude)]);
//                    var geometry = new ol.geom.Point(coordinate);
//                    feature.setGeometry(geometry);
//                    flickrSource.addFeature(feature);
            },
            error: function (e) {
                alert(e.getCoordinates());
            }
        });
    }



    var cache = {};

    function photoStyle(feature, scale) {
        var url = feature.get('url');
        var key = scale + url;
        if (!cache[key]) {
            cache[key] = new ol.style.Style({
                image: new ol.style.Icon({
                    scale: scale,
                    src: url
                })
            });
        }
        return cache[key];
    }

    function flickrStyle(feature) {
        return [photoStyle(feature, 0.10)];
    }

    function selectedStyle(feature) {
        return [photoStyle(feature, 0.50)];
    }

    var flickrLayer = new ol.layer.Vector({
        source: flickrSource,
        style: flickrStyle
    });

    var layer = new ol.layer.Tile({
        source: new ol.source.OSM()
    });


    var center = ol.proj.transform([0,0], 'EPSG:4326', 'EPSG:3857');

    var view = new ol.View({
        center: center,
        zoom: 15
    });

    var trackStyle = new ol.style.Style({
        image: new ol.style.Icon({
            anchor: [0.5, 0.5],
            size: [52, 52],
            offset: [52, 0],
            opacity: 1,
            scale: 0.25,
            src: '{{ asset('images/Cuddly_Fisherman.png') }}'
        })
    });
    // use a single feature with a linestring geometry to display our track
    var trackFeature = new ol.Feature({
        geometry: new ol.geom.LineString([])
    });

    var trackLayer = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: [trackFeature]
        }),
        style: trackStyle
    });

    var geolocation = new ol.Geolocation({tracking: true});
    geolocation.bindTo('projection', view);
    geolocation.on('change:position', function() {
        var coordinate = geolocation.getPosition();
        view.setCenter(coordinate);
        trackFeature.getGeometry().appendCoordinate(coordinate);
    });

    var marker = new ol.Overlay({
        element: document.getElementById('location'),
        positioning: 'center-center'
    });

    var positionFeature = new ol.Feature();
    positionFeature.setStyle(new ol.style.Style({
        image: new ol.style.Circle({
            radius: 20,
            fill: new ol.style.Fill({
                color: '#3399CC'
            }),
            stroke: new ol.style.Stroke({
                color: '#fff',
                width: 20
            })
        })
    }));

    var map = new ol.Map({
        renderer: 'canvas',
        target: 'map',
        layers: [layer, flickrLayer, trackLayer],
        view: view
    });
    map.addOverlay(marker);
    marker.bindTo('position', geolocation);
    map.addControl(new ol.control.LoadingPanel());

    function photoContent(feature) {
        var content = \$('#photo-template').html();
        var keys = ['author','author_id','date_taken','latitude','longitude','link','url','tags','title'];
        for (var i=0; i<keys.length; i++) {
            var key = keys[i];
            var value = feature.get(key);
            content = content.replace('{'+key+'}',value);
        }
        return content;
    }

    var select = new ol.interaction.Select({
        layers: [flickrLayer],
        style: selectedStyle
    });
    map.addInteraction(select);

    var selectedFeatures = select.getFeatures();

    selectedFeatures.on('add', function(event) {
        var feature = event.target.item(0);
        var content = photoContent(feature);
        \$('#photo-info').html(content);
    });

    selectedFeatures.on('remove', function(event) {
        \$('#photo-info').empty();
    });


    function successHandler(data) {

        var transform = ol.proj.getTransform('EPSG:4326', 'EPSG:3857');
        data.forEach(function(item) {
            console.log(item);
            var feature = new ol.Feature(item);
            feature.set('url', item.media.m);
            var coordinate = transform([parseFloat(item.longitude), parseFloat(item.latitude)]);
            var geometry = new ol.geom.Point(coordinate);
            feature.setGeometry(geometry);
            flickrSource.addFeature(feature);
        });
    }

</script>

<script type=\"text/html\" id=\"photo-template\">
    <a href=\"{link}\" target=\"_blank\" title=\"Click to open photo in new tab\"><img src=\"{url}\" style=\"float: left\"></a><br>
    <p>Taken by <a href=\"http://www.flickr.com/people/{author_id}\" target=\"_blank\" title=\"Click to view author details in new tab\">{author}</a> on {date_taken} at lat: {latitude} lon: {longitude}</p><br>
    <p>Tagged in <b>{tags}</b></p>
</script>
<div id='loading'><img src=''{{ asset('images/loading.gif') }}></div>
</body>
</html>
", "@Dam/dam/open_layers_map.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/open_layers_map.html.twig");
    }
}
