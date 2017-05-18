<?php

/* @IvoryGoogleMap/Form/place_autocomplete_widget.html.twig */
class __TwigTemplate_2d9b1e31903b4982938b04a8a3c75c972628681ac60c1991a2e8597c4256d620 extends Twig_Template
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
        $__internal_d892674b2f067c30c17f132eedecbb48d9f4cd7008467e226d65de8848e70b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d892674b2f067c30c17f132eedecbb48d9f4cd7008467e226d65de8848e70b76->enter($__internal_d892674b2f067c30c17f132eedecbb48d9f4cd7008467e226d65de8848e70b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        $__internal_db16a8ddff7472ac5f8e4701276e1e925132f719d33444acec0a2aba1e382cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db16a8ddff7472ac5f8e4701276e1e925132f719d33444acec0a2aba1e382cb4->enter($__internal_db16a8ddff7472ac5f8e4701276e1e925132f719d33444acec0a2aba1e382cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_d892674b2f067c30c17f132eedecbb48d9f4cd7008467e226d65de8848e70b76->leave($__internal_d892674b2f067c30c17f132eedecbb48d9f4cd7008467e226d65de8848e70b76_prof);

        
        $__internal_db16a8ddff7472ac5f8e4701276e1e925132f719d33444acec0a2aba1e382cb4->leave($__internal_db16a8ddff7472ac5f8e4701276e1e925132f719d33444acec0a2aba1e382cb4_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_bbafeab8899459be62be9cb786c461cf3c9b0946a623452bd9f89bd5e97563cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbafeab8899459be62be9cb786c461cf3c9b0946a623452bd9f89bd5e97563cc->enter($__internal_bbafeab8899459be62be9cb786c461cf3c9b0946a623452bd9f89bd5e97563cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        $__internal_01712232fbbd83b391cee6e01df799261758d8f00b4a8dda978c0c239f69cae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01712232fbbd83b391cee6e01df799261758d8f00b4a8dda978c0c239f69cae4->enter($__internal_01712232fbbd83b391cee6e01df799261758d8f00b4a8dda978c0c239f69cae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

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
        
        $__internal_01712232fbbd83b391cee6e01df799261758d8f00b4a8dda978c0c239f69cae4->leave($__internal_01712232fbbd83b391cee6e01df799261758d8f00b4a8dda978c0c239f69cae4_prof);

        
        $__internal_bbafeab8899459be62be9cb786c461cf3c9b0946a623452bd9f89bd5e97563cc->leave($__internal_bbafeab8899459be62be9cb786c461cf3c9b0946a623452bd9f89bd5e97563cc_prof);

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
", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.twig");
    }
}
