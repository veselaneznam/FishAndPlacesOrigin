<?php

/* IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig */
class __TwigTemplate_b6b8c62f5ddf7e86306c8c44c23d427bcb41b1ed54b0f669b9a71157b5812deb extends Twig_Template
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
        $__internal_15fe9545978271e774a0be816289a334c516c982e27ea1bf2b8cde9aa300cc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fe9545978271e774a0be816289a334c516c982e27ea1bf2b8cde9aa300cc9a->enter($__internal_15fe9545978271e774a0be816289a334c516c982e27ea1bf2b8cde9aa300cc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_15fe9545978271e774a0be816289a334c516c982e27ea1bf2b8cde9aa300cc9a->leave($__internal_15fe9545978271e774a0be816289a334c516c982e27ea1bf2b8cde9aa300cc9a_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_3819d3c39663d7b41fd73cba92a358ba2700465156749831050b6815e6cef692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3819d3c39663d7b41fd73cba92a358ba2700465156749831050b6815e6cef692->enter($__internal_3819d3c39663d7b41fd73cba92a358ba2700465156749831050b6815e6cef692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension')->render((isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete")), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        echo "
    ";
        // line 3
        if ((isset($context["api"]) ? $context["api"] : $this->getContext($context, "api"))) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => (isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete"))));
            echo "
    ";
        }
        
        $__internal_3819d3c39663d7b41fd73cba92a358ba2700465156749831050b6815e6cef692->leave($__internal_3819d3c39663d7b41fd73cba92a358ba2700465156749831050b6815e6cef692_prof);

    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  40 => 3,  35 => 2,  23 => 1,);
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
", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.twig");
    }
}
