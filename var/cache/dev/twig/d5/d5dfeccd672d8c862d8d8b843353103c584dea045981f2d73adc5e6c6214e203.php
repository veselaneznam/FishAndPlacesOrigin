<?php

/* @Dam/dam/map_directions.html.twig */
class __TwigTemplate_8b3f9514197ffc9109aea81a66c5ce1c631f079043fc7b464870ed0b789273a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_074cfc232bcf2bf5a5aaa6a8909ecbd8b0515364ea92cc0b1a9c963665b24866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074cfc232bcf2bf5a5aaa6a8909ecbd8b0515364ea92cc0b1a9c963665b24866->enter($__internal_074cfc232bcf2bf5a5aaa6a8909ecbd8b0515364ea92cc0b1a9c963665b24866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_directions.html.twig"));

        $__internal_95e0b2bc9853c9104b26b3224a490174cdf98297e52e80bbb4e36603f6eb1c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e0b2bc9853c9104b26b3224a490174cdf98297e52e80bbb4e36603f6eb1c48->enter($__internal_95e0b2bc9853c9104b26b3224a490174cdf98297e52e80bbb4e36603f6eb1c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_directions.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        $this->displayBlock('styles', $context, $blocks);
        // line 112
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_074cfc232bcf2bf5a5aaa6a8909ecbd8b0515364ea92cc0b1a9c963665b24866->leave($__internal_074cfc232bcf2bf5a5aaa6a8909ecbd8b0515364ea92cc0b1a9c963665b24866_prof);

        
        $__internal_95e0b2bc9853c9104b26b3224a490174cdf98297e52e80bbb4e36603f6eb1c48->leave($__internal_95e0b2bc9853c9104b26b3224a490174cdf98297e52e80bbb4e36603f6eb1c48_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c71db11618a4c8e2d2a50dc1a8fbce5883fbf08269fe1af1ab95b2e373b553a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71db11618a4c8e2d2a50dc1a8fbce5883fbf08269fe1af1ab95b2e373b553a1->enter($__internal_c71db11618a4c8e2d2a50dc1a8fbce5883fbf08269fe1af1ab95b2e373b553a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a55fd6952a2df97cae0a473010bd4223822b1d838aa74a95d13624a6d489bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a55fd6952a2df97cae0a473010bd4223822b1d838aa74a95d13624a6d489bf4->enter($__internal_2a55fd6952a2df97cae0a473010bd4223822b1d838aa74a95d13624a6d489bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=bg\"></script>
    <script>
        var userPosition = navigator.geolocation.getCurrentPosition(initMap);
        function initMap(position) {
            var pointA = new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                pointB = new google.maps.LatLng(";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "location", array()), "lat", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "location", array()), "lon", array()), "html", null, true);
        echo "),
                myOptions = {
                    zoom: 7,
                    center: pointA
                },
                map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
                // Instantiate a directions service.
                directionsService = new google.maps.DirectionsService,
                directionsDisplay = new google.maps.DirectionsRenderer({
                    draggable: true,
                    map: map,
                    panel: document.getElementById('right-panel'),
                }),
                markerA = new google.maps.Marker({
                    position: pointA,
                    title: \"Your Location\",
                    label: \"A\",
                    map: map
                }),
                markerB = new google.maps.Marker({
                    position: pointB,
                    title: \"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "\",
                    label: \"B\",
                    map: map
                });

            directionsDisplay.addListener('directions_changed', function() {
                computeTotalDistance(directionsDisplay.getDirections());
            });

            // get route from A to B
            calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
                origin: pointA,
                destination: pointB,
                travelMode: google.maps.TravelMode.DRIVING,
            }, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        function computeTotalDistance(result) {
            var total = 0;
            var myroute = result.routes[0];
            for (var i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }
            total = total / 1000;
            document.getElementById('total').innerHTML = total + ' km';
        }

                initMap(position);

    </script>
";
        
        $__internal_2a55fd6952a2df97cae0a473010bd4223822b1d838aa74a95d13624a6d489bf4->leave($__internal_2a55fd6952a2df97cae0a473010bd4223822b1d838aa74a95d13624a6d489bf4_prof);

        
        $__internal_c71db11618a4c8e2d2a50dc1a8fbce5883fbf08269fe1af1ab95b2e373b553a1->leave($__internal_c71db11618a4c8e2d2a50dc1a8fbce5883fbf08269fe1af1ab95b2e373b553a1_prof);

    }

    // line 71
    public function block_styles($context, array $blocks = array())
    {
        $__internal_51f98f139697ec5c32a4bc81578d9a1a32fd735b8945be96c6411408feaf9be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f98f139697ec5c32a4bc81578d9a1a32fd735b8945be96c6411408feaf9be5->enter($__internal_51f98f139697ec5c32a4bc81578d9a1a32fd735b8945be96c6411408feaf9be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_f9069af98a177dffa46ee9173dae14eefdb275967353b3fdb087a3b325eecb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9069af98a177dffa46ee9173dae14eefdb275967353b3fdb087a3b325eecb75->enter($__internal_f9069af98a177dffa46ee9173dae14eefdb275967353b3fdb087a3b325eecb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 72
        echo "    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map-canvas {
            height: 100%;
            float: left;
            width: 63%;
            height: 100%;
        }
        #right-panel {
            float: right;
            width: 34%;
            height: 100%;
        }
        .panel {
            height: 100%;
            overflow: auto;
        }
        #right-panel {
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        #right-panel select, #right-panel input {
            font-size: 15px;
        }

        #right-panel select {
            width: 100%;
        }

        #right-panel i {
            font-size: 12px;
        }
    </style>
";
        
        $__internal_f9069af98a177dffa46ee9173dae14eefdb275967353b3fdb087a3b325eecb75->leave($__internal_f9069af98a177dffa46ee9173dae14eefdb275967353b3fdb087a3b325eecb75_prof);

        
        $__internal_51f98f139697ec5c32a4bc81578d9a1a32fd735b8945be96c6411408feaf9be5->leave($__internal_51f98f139697ec5c32a4bc81578d9a1a32fd735b8945be96c6411408feaf9be5_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b040c8062a1f063828e46e99956dafbbbbd89490f19bd81298068086676e9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b040c8062a1f063828e46e99956dafbbbbd89490f19bd81298068086676e9eb->enter($__internal_3b040c8062a1f063828e46e99956dafbbbbd89490f19bd81298068086676e9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4594d8fc490a0d61735c821c8e0c1cded1052fb438b1ff3d124aa3bff69b21d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4594d8fc490a0d61735c821c8e0c1cded1052fb438b1ff3d124aa3bff69b21d3->enter($__internal_4594d8fc490a0d61735c821c8e0c1cded1052fb438b1ff3d124aa3bff69b21d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "    <div id=\"map-canvas\" ><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/progress.gif"), "html", null, true);
        echo "\" />
    </div>
    <div id=\"right-panel\">
        <p>Total Distance: <span id=\"total\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/progress.gif"), "html", null, true);
        echo "\" /></span></p>
    </div>

";
        
        $__internal_4594d8fc490a0d61735c821c8e0c1cded1052fb438b1ff3d124aa3bff69b21d3->leave($__internal_4594d8fc490a0d61735c821c8e0c1cded1052fb438b1ff3d124aa3bff69b21d3_prof);

        
        $__internal_3b040c8062a1f063828e46e99956dafbbbbd89490f19bd81298068086676e9eb->leave($__internal_3b040c8062a1f063828e46e99956dafbbbbd89490f19bd81298068086676e9eb_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/map_directions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 116,  206 => 113,  197 => 112,  148 => 72,  139 => 71,  87 => 29,  61 => 8,  54 => 3,  45 => 2,  35 => 112,  33 => 71,  31 => 2,  28 => 1,);
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
{% block javascripts %}
    <script src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=bg\"></script>
    <script>
        var userPosition = navigator.geolocation.getCurrentPosition(initMap);
        function initMap(position) {
            var pointA = new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                pointB = new google.maps.LatLng({{dam.location.lat}}, {{ dam.location.lon }}),
                myOptions = {
                    zoom: 7,
                    center: pointA
                },
                map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
                // Instantiate a directions service.
                directionsService = new google.maps.DirectionsService,
                directionsDisplay = new google.maps.DirectionsRenderer({
                    draggable: true,
                    map: map,
                    panel: document.getElementById('right-panel'),
                }),
                markerA = new google.maps.Marker({
                    position: pointA,
                    title: \"Your Location\",
                    label: \"A\",
                    map: map
                }),
                markerB = new google.maps.Marker({
                    position: pointB,
                    title: \"{{ dam.name }}\",
                    label: \"B\",
                    map: map
                });

            directionsDisplay.addListener('directions_changed', function() {
                computeTotalDistance(directionsDisplay.getDirections());
            });

            // get route from A to B
            calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
                origin: pointA,
                destination: pointB,
                travelMode: google.maps.TravelMode.DRIVING,
            }, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        function computeTotalDistance(result) {
            var total = 0;
            var myroute = result.routes[0];
            for (var i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }
            total = total / 1000;
            document.getElementById('total').innerHTML = total + ' km';
        }

                initMap(position);

    </script>
{% endblock %}
{% block styles %}
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map-canvas {
            height: 100%;
            float: left;
            width: 63%;
            height: 100%;
        }
        #right-panel {
            float: right;
            width: 34%;
            height: 100%;
        }
        .panel {
            height: 100%;
            overflow: auto;
        }
        #right-panel {
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        #right-panel select, #right-panel input {
            font-size: 15px;
        }

        #right-panel select {
            width: 100%;
        }

        #right-panel i {
            font-size: 12px;
        }
    </style>
{% endblock %}
{% block content %}
    <div id=\"map-canvas\" ><img src=\"{{ asset('images/progress.gif') }}\" />
    </div>
    <div id=\"right-panel\">
        <p>Total Distance: <span id=\"total\"><img src=\"{{ asset('images/progress.gif') }}\" /></span></p>
    </div>

{% endblock %}
", "@Dam/dam/map_directions.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/map_directions.html.twig");
    }
}
