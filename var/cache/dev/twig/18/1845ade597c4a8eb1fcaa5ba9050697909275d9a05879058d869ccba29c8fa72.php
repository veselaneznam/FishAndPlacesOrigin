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
        $__internal_c77bd53352ceb7183cc1addc2a27ed7487f0cf438db6dd63f91c9d2f6f9ac0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77bd53352ceb7183cc1addc2a27ed7487f0cf438db6dd63f91c9d2f6f9ac0d7->enter($__internal_c77bd53352ceb7183cc1addc2a27ed7487f0cf438db6dd63f91c9d2f6f9ac0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        $__internal_8c0f26cc29e872de34fed0ff894adee207b9ed934d53b76ad33ffe5f548f625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0f26cc29e872de34fed0ff894adee207b9ed934d53b76ad33ffe5f548f625c->enter($__internal_8c0f26cc29e872de34fed0ff894adee207b9ed934d53b76ad33ffe5f548f625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_c77bd53352ceb7183cc1addc2a27ed7487f0cf438db6dd63f91c9d2f6f9ac0d7->leave($__internal_c77bd53352ceb7183cc1addc2a27ed7487f0cf438db6dd63f91c9d2f6f9ac0d7_prof);

        
        $__internal_8c0f26cc29e872de34fed0ff894adee207b9ed934d53b76ad33ffe5f548f625c->leave($__internal_8c0f26cc29e872de34fed0ff894adee207b9ed934d53b76ad33ffe5f548f625c_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_abc9d55811f2ab011f82cd6e119af2f69d50ff020cb64791bec6372022613808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc9d55811f2ab011f82cd6e119af2f69d50ff020cb64791bec6372022613808->enter($__internal_abc9d55811f2ab011f82cd6e119af2f69d50ff020cb64791bec6372022613808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        $__internal_698d636f8b9402e82d2248911e4e582dbcff1b2a5652ed7922a37cac26a3daaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698d636f8b9402e82d2248911e4e582dbcff1b2a5652ed7922a37cac26a3daaf->enter($__internal_698d636f8b9402e82d2248911e4e582dbcff1b2a5652ed7922a37cac26a3daaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

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
        
        $__internal_698d636f8b9402e82d2248911e4e582dbcff1b2a5652ed7922a37cac26a3daaf->leave($__internal_698d636f8b9402e82d2248911e4e582dbcff1b2a5652ed7922a37cac26a3daaf_prof);

        
        $__internal_abc9d55811f2ab011f82cd6e119af2f69d50ff020cb64791bec6372022613808->leave($__internal_abc9d55811f2ab011f82cd6e119af2f69d50ff020cb64791bec6372022613808_prof);

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
