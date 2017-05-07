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
        $__internal_0f97da1cc4566df6db39c31e50ea561991ea9156de0f892d20d7579b71c6c79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f97da1cc4566df6db39c31e50ea561991ea9156de0f892d20d7579b71c6c79b->enter($__internal_0f97da1cc4566df6db39c31e50ea561991ea9156de0f892d20d7579b71c6c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        $__internal_f82acdb60f1ccff42593ffe3bf5c4d6e2da322ca27f7731bd42cc7b0cf68af83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82acdb60f1ccff42593ffe3bf5c4d6e2da322ca27f7731bd42cc7b0cf68af83->enter($__internal_f82acdb60f1ccff42593ffe3bf5c4d6e2da322ca27f7731bd42cc7b0cf68af83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_0f97da1cc4566df6db39c31e50ea561991ea9156de0f892d20d7579b71c6c79b->leave($__internal_0f97da1cc4566df6db39c31e50ea561991ea9156de0f892d20d7579b71c6c79b_prof);

        
        $__internal_f82acdb60f1ccff42593ffe3bf5c4d6e2da322ca27f7731bd42cc7b0cf68af83->leave($__internal_f82acdb60f1ccff42593ffe3bf5c4d6e2da322ca27f7731bd42cc7b0cf68af83_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_8fca905f3f2ce0252f4b38248a63a9fe19e9fc7a2db3240cf71d6367086498f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fca905f3f2ce0252f4b38248a63a9fe19e9fc7a2db3240cf71d6367086498f9->enter($__internal_8fca905f3f2ce0252f4b38248a63a9fe19e9fc7a2db3240cf71d6367086498f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        $__internal_52013885ebbf73b5d585658d070474da2ba5155856061cb20bde34abfae4ac0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52013885ebbf73b5d585658d070474da2ba5155856061cb20bde34abfae4ac0a->enter($__internal_52013885ebbf73b5d585658d070474da2ba5155856061cb20bde34abfae4ac0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

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
        
        $__internal_52013885ebbf73b5d585658d070474da2ba5155856061cb20bde34abfae4ac0a->leave($__internal_52013885ebbf73b5d585658d070474da2ba5155856061cb20bde34abfae4ac0a_prof);

        
        $__internal_8fca905f3f2ce0252f4b38248a63a9fe19e9fc7a2db3240cf71d6367086498f9->leave($__internal_8fca905f3f2ce0252f4b38248a63a9fe19e9fc7a2db3240cf71d6367086498f9_prof);

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
