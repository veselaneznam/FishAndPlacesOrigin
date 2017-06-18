<?php

/* @GoGreen/dam/map_directions.html.twig */
class __TwigTemplate_e66d918b7df7c1845b492e79d65e02b1078c381497ea1121d883e5084c7c91f3 extends Twig_Template
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
        $__internal_6b2fa61e06adee2f99a83c51c101fc8d298693b078cd1856e1f8fb510b2008d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2fa61e06adee2f99a83c51c101fc8d298693b078cd1856e1f8fb510b2008d0->enter($__internal_6b2fa61e06adee2f99a83c51c101fc8d298693b078cd1856e1f8fb510b2008d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/map_directions.html.twig"));

        $__internal_b3b48e757315c0938e3efc0a1726d9f295d8ca34484855e2e90810b96d038259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b48e757315c0938e3efc0a1726d9f295d8ca34484855e2e90810b96d038259->enter($__internal_b3b48e757315c0938e3efc0a1726d9f295d8ca34484855e2e90810b96d038259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/map_directions.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        $this->displayBlock('styles', $context, $blocks);
        // line 112
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_6b2fa61e06adee2f99a83c51c101fc8d298693b078cd1856e1f8fb510b2008d0->leave($__internal_6b2fa61e06adee2f99a83c51c101fc8d298693b078cd1856e1f8fb510b2008d0_prof);

        
        $__internal_b3b48e757315c0938e3efc0a1726d9f295d8ca34484855e2e90810b96d038259->leave($__internal_b3b48e757315c0938e3efc0a1726d9f295d8ca34484855e2e90810b96d038259_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd6f642d994213d95556a2564bcea6b5e133743e0d288c43a900f16fd78a8c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6f642d994213d95556a2564bcea6b5e133743e0d288c43a900f16fd78a8c6a->enter($__internal_cd6f642d994213d95556a2564bcea6b5e133743e0d288c43a900f16fd78a8c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9afe4ebc62b1bad13c800ff2db58bb16c11b78a002c66142010a4bee6b843df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe4ebc62b1bad13c800ff2db58bb16c11b78a002c66142010a4bee6b843df5->enter($__internal_9afe4ebc62b1bad13c800ff2db58bb16c11b78a002c66142010a4bee6b843df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://maps.googleapis.com/maps/api/js?sensor=false&language=bg\"></script>
    <script>
        var userPosition = navigator.geolocation.getCurrentPosition(initMap);
        function initMap(position) {
            var pointA = new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                pointB = new google.maps.LatLng(";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "location", array()), "lat", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "location", array()), "lon", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "name", array()), "html", null, true);
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
        
        $__internal_9afe4ebc62b1bad13c800ff2db58bb16c11b78a002c66142010a4bee6b843df5->leave($__internal_9afe4ebc62b1bad13c800ff2db58bb16c11b78a002c66142010a4bee6b843df5_prof);

        
        $__internal_cd6f642d994213d95556a2564bcea6b5e133743e0d288c43a900f16fd78a8c6a->leave($__internal_cd6f642d994213d95556a2564bcea6b5e133743e0d288c43a900f16fd78a8c6a_prof);

    }

    // line 71
    public function block_styles($context, array $blocks = array())
    {
        $__internal_9d8772f09bb314c1f0cc6628f4ab7cfb14784ff460bb989252d600162f4fd70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8772f09bb314c1f0cc6628f4ab7cfb14784ff460bb989252d600162f4fd70d->enter($__internal_9d8772f09bb314c1f0cc6628f4ab7cfb14784ff460bb989252d600162f4fd70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_13d1595f145f4ba40c4e91acb5837450d5a80d2b8d7fab22b04504609cbbdbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d1595f145f4ba40c4e91acb5837450d5a80d2b8d7fab22b04504609cbbdbf1->enter($__internal_13d1595f145f4ba40c4e91acb5837450d5a80d2b8d7fab22b04504609cbbdbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_13d1595f145f4ba40c4e91acb5837450d5a80d2b8d7fab22b04504609cbbdbf1->leave($__internal_13d1595f145f4ba40c4e91acb5837450d5a80d2b8d7fab22b04504609cbbdbf1_prof);

        
        $__internal_9d8772f09bb314c1f0cc6628f4ab7cfb14784ff460bb989252d600162f4fd70d->leave($__internal_9d8772f09bb314c1f0cc6628f4ab7cfb14784ff460bb989252d600162f4fd70d_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc1aabd03b063362edb2c090c81c4dc2b62191fe91a147a1bef9679112fa11a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1aabd03b063362edb2c090c81c4dc2b62191fe91a147a1bef9679112fa11a6->enter($__internal_cc1aabd03b063362edb2c090c81c4dc2b62191fe91a147a1bef9679112fa11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c56f718156937ff8eade322e50808ff206f6f5a6f7a8339f3c5c974e7859194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c56f718156937ff8eade322e50808ff206f6f5a6f7a8339f3c5c974e7859194->enter($__internal_5c56f718156937ff8eade322e50808ff206f6f5a6f7a8339f3c5c974e7859194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "    <div id=\"map-canvas\" >
        <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/progress.gif"), "html", null, true);
        echo "\" />
    </div>
    <div id=\"right-panel\">
        <p>Total Distance: <span id=\"total\">
                <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/progress.gif"), "html", null, true);
        echo "\" /></span></p>
    </div>

";
        
        $__internal_5c56f718156937ff8eade322e50808ff206f6f5a6f7a8339f3c5c974e7859194->leave($__internal_5c56f718156937ff8eade322e50808ff206f6f5a6f7a8339f3c5c974e7859194_prof);

        
        $__internal_cc1aabd03b063362edb2c090c81c4dc2b62191fe91a147a1bef9679112fa11a6->leave($__internal_cc1aabd03b063362edb2c090c81c4dc2b62191fe91a147a1bef9679112fa11a6_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/map_directions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 118,  209 => 114,  206 => 113,  197 => 112,  148 => 72,  139 => 71,  87 => 29,  61 => 8,  54 => 3,  45 => 2,  35 => 112,  33 => 71,  31 => 2,  28 => 1,);
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
    <div id=\"map-canvas\" >
        <img src=\"{{ asset('images/progress.gif') }}\" />
    </div>
    <div id=\"right-panel\">
        <p>Total Distance: <span id=\"total\">
                <img src=\"{{ asset('images/progress.gif') }}\" /></span></p>
    </div>

{% endblock %}
", "@GoGreen/dam/map_directions.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/map_directions.html.twig");
    }
}
