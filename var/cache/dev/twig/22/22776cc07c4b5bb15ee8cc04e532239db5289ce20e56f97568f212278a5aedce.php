<?php

/* @Dam/dam/map_directions.html.twig */
class __TwigTemplate_379454cb2125e9fb059793869de62e9e27b6c9e4ae11b27d7edac71321216df6 extends Twig_Template
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
        $__internal_e7c7b5f6f8c2e1b8971b70b3647af2299dbc494abbe8e60bdc33b1f8745c6410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c7b5f6f8c2e1b8971b70b3647af2299dbc494abbe8e60bdc33b1f8745c6410->enter($__internal_e7c7b5f6f8c2e1b8971b70b3647af2299dbc494abbe8e60bdc33b1f8745c6410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_directions.html.twig"));

        $__internal_ad912aedbfcfa3ec8c9eb5205784a57ceb76ee0ece79691c28c5aa4fad190b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad912aedbfcfa3ec8c9eb5205784a57ceb76ee0ece79691c28c5aa4fad190b5a->enter($__internal_ad912aedbfcfa3ec8c9eb5205784a57ceb76ee0ece79691c28c5aa4fad190b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_directions.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        $this->displayBlock('styles', $context, $blocks);
        // line 112
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_e7c7b5f6f8c2e1b8971b70b3647af2299dbc494abbe8e60bdc33b1f8745c6410->leave($__internal_e7c7b5f6f8c2e1b8971b70b3647af2299dbc494abbe8e60bdc33b1f8745c6410_prof);

        
        $__internal_ad912aedbfcfa3ec8c9eb5205784a57ceb76ee0ece79691c28c5aa4fad190b5a->leave($__internal_ad912aedbfcfa3ec8c9eb5205784a57ceb76ee0ece79691c28c5aa4fad190b5a_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a99092e238f80462da94b7e4ecaa3ad0834902833999dcf3b9081dce4a195b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99092e238f80462da94b7e4ecaa3ad0834902833999dcf3b9081dce4a195b7b->enter($__internal_a99092e238f80462da94b7e4ecaa3ad0834902833999dcf3b9081dce4a195b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5cebf898566994cec96b966a426ee04082f76a3b408044bf1d3372817594aff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cebf898566994cec96b966a426ee04082f76a3b408044bf1d3372817594aff2->enter($__internal_5cebf898566994cec96b966a426ee04082f76a3b408044bf1d3372817594aff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5cebf898566994cec96b966a426ee04082f76a3b408044bf1d3372817594aff2->leave($__internal_5cebf898566994cec96b966a426ee04082f76a3b408044bf1d3372817594aff2_prof);

        
        $__internal_a99092e238f80462da94b7e4ecaa3ad0834902833999dcf3b9081dce4a195b7b->leave($__internal_a99092e238f80462da94b7e4ecaa3ad0834902833999dcf3b9081dce4a195b7b_prof);

    }

    // line 71
    public function block_styles($context, array $blocks = array())
    {
        $__internal_b8d90747bb06eef10396bdb23db57150678d27b864d1e89451b22969c92be969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d90747bb06eef10396bdb23db57150678d27b864d1e89451b22969c92be969->enter($__internal_b8d90747bb06eef10396bdb23db57150678d27b864d1e89451b22969c92be969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_fb2b9dcdbdf1becd9c13e89a51751d4329a3cca48844ea9f9573cae7e88eaeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2b9dcdbdf1becd9c13e89a51751d4329a3cca48844ea9f9573cae7e88eaeb9->enter($__internal_fb2b9dcdbdf1becd9c13e89a51751d4329a3cca48844ea9f9573cae7e88eaeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_fb2b9dcdbdf1becd9c13e89a51751d4329a3cca48844ea9f9573cae7e88eaeb9->leave($__internal_fb2b9dcdbdf1becd9c13e89a51751d4329a3cca48844ea9f9573cae7e88eaeb9_prof);

        
        $__internal_b8d90747bb06eef10396bdb23db57150678d27b864d1e89451b22969c92be969->leave($__internal_b8d90747bb06eef10396bdb23db57150678d27b864d1e89451b22969c92be969_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_35b3f398170da5151d06493f2b7a62ae0d79a77fb7c19c9edb8fb1851df902c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b3f398170da5151d06493f2b7a62ae0d79a77fb7c19c9edb8fb1851df902c7->enter($__internal_35b3f398170da5151d06493f2b7a62ae0d79a77fb7c19c9edb8fb1851df902c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11d6831a86455a617d195af7bb46e012c52c5aa8f7931112e6f70058f349eeea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d6831a86455a617d195af7bb46e012c52c5aa8f7931112e6f70058f349eeea->enter($__internal_11d6831a86455a617d195af7bb46e012c52c5aa8f7931112e6f70058f349eeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "    <div id=\"map-canvas\" >";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Please wait while content is loaded", array(), "messages");
        // line 114
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/progress.gif"), "html", null, true);
        echo "\" />
    </div>
    <div id=\"right-panel\">
        <p>Total Distance: <span id=\"total\">
                ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Please wait while content is loaded", array(), "messages");
        // line 119
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/progress.gif"), "html", null, true);
        echo "\" /></span></p>
    </div>

";
        
        $__internal_11d6831a86455a617d195af7bb46e012c52c5aa8f7931112e6f70058f349eeea->leave($__internal_11d6831a86455a617d195af7bb46e012c52c5aa8f7931112e6f70058f349eeea_prof);

        
        $__internal_35b3f398170da5151d06493f2b7a62ae0d79a77fb7c19c9edb8fb1851df902c7->leave($__internal_35b3f398170da5151d06493f2b7a62ae0d79a77fb7c19c9edb8fb1851df902c7_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/map_directions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 119,  217 => 118,  209 => 114,  206 => 113,  197 => 112,  148 => 72,  139 => 71,  87 => 29,  61 => 8,  54 => 3,  45 => 2,  35 => 112,  33 => 71,  31 => 2,  28 => 1,);
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
    <div id=\"map-canvas\" >{% trans %}Please wait while content is loaded {% endtrans %}
        <img src=\"{{ asset('images/progress.gif') }}\" />
    </div>
    <div id=\"right-panel\">
        <p>Total Distance: <span id=\"total\">
                {% trans %}Please wait while content is loaded {% endtrans %}
                <img src=\"{{ asset('images/progress.gif') }}\" /></span></p>
    </div>

{% endblock %}
", "@Dam/dam/map_directions.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/map_directions.html.twig");
    }
}
