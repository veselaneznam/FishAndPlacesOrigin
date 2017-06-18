<?php

/* @IvoryGoogleMap/Form/place_autocomplete_widget.html.twig */
class __TwigTemplate_7436818fc8e2407e07c09a339610c8b0e4e2d6ba41af4b2095eaec086c39064d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'place_autocomplete_widget' => array($this, 'block_place_autocomplete_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ac7c8a86cdcd7e596289e80d59ee199b287ecbe1336f952fa241e2290158904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac7c8a86cdcd7e596289e80d59ee199b287ecbe1336f952fa241e2290158904->enter($__internal_1ac7c8a86cdcd7e596289e80d59ee199b287ecbe1336f952fa241e2290158904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        $__internal_e519d0abd1d11c27d5c0c0dfdb3a964f7cb28004472bb2908ea5c68f22a2a05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e519d0abd1d11c27d5c0c0dfdb3a964f7cb28004472bb2908ea5c68f22a2a05f->enter($__internal_e519d0abd1d11c27d5c0c0dfdb3a964f7cb28004472bb2908ea5c68f22a2a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_1ac7c8a86cdcd7e596289e80d59ee199b287ecbe1336f952fa241e2290158904->leave($__internal_1ac7c8a86cdcd7e596289e80d59ee199b287ecbe1336f952fa241e2290158904_prof);

        
        $__internal_e519d0abd1d11c27d5c0c0dfdb3a964f7cb28004472bb2908ea5c68f22a2a05f->leave($__internal_e519d0abd1d11c27d5c0c0dfdb3a964f7cb28004472bb2908ea5c68f22a2a05f_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_c9c3e7f063565a1931a520a8159b7efb7523a2fd388f967e39a9ee21102f0247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c3e7f063565a1931a520a8159b7efb7523a2fd388f967e39a9ee21102f0247->enter($__internal_c9c3e7f063565a1931a520a8159b7efb7523a2fd388f967e39a9ee21102f0247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        $__internal_79ff3bf177b9b07ebffa95a697f5336677d47a60293115e12265c7ab07f804c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ff3bf177b9b07ebffa95a697f5336677d47a60293115e12265c7ab07f804c3->enter($__internal_79ff3bf177b9b07ebffa95a697f5336677d47a60293115e12265c7ab07f804c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension')->render(($context["autocomplete"] ?? $this->getContext($context, "autocomplete")), ($context["attr"] ?? $this->getContext($context, "attr")));
        echo "
    ";
        // line 3
        if (($context["api"] ?? $this->getContext($context, "api"))) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => ($context["autocomplete"] ?? $this->getContext($context, "autocomplete"))));
            echo "
    ";
        }
        
        $__internal_79ff3bf177b9b07ebffa95a697f5336677d47a60293115e12265c7ab07f804c3->leave($__internal_79ff3bf177b9b07ebffa95a697f5336677d47a60293115e12265c7ab07f804c3_prof);

        
        $__internal_c9c3e7f063565a1931a520a8159b7efb7523a2fd388f967e39a9ee21102f0247->leave($__internal_c9c3e7f063565a1931a520a8159b7efb7523a2fd388f967e39a9ee21102f0247_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block place_autocomplete_widget %}
    {{ ivory_google_place_autocomplete(autocomplete, attr) }}
    {% if api %}
        {{ ivory_google_api([autocomplete]) }}
    {% endif %}
{% endblock %}
", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig", "/var/www/FishAndPlaces/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.twig");
    }
}
