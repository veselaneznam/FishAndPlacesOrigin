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
        $__internal_fbc84da95db16e66ba5b030cc8b6a8139b73bc4df44e852235499e890be1f4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc84da95db16e66ba5b030cc8b6a8139b73bc4df44e852235499e890be1f4ee->enter($__internal_fbc84da95db16e66ba5b030cc8b6a8139b73bc4df44e852235499e890be1f4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        $__internal_10b3b3f8c6446cdcd3de9e50d3a624a5d2327a0be57fb6f392abe968b30c97d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b3b3f8c6446cdcd3de9e50d3a624a5d2327a0be57fb6f392abe968b30c97d7->enter($__internal_10b3b3f8c6446cdcd3de9e50d3a624a5d2327a0be57fb6f392abe968b30c97d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_fbc84da95db16e66ba5b030cc8b6a8139b73bc4df44e852235499e890be1f4ee->leave($__internal_fbc84da95db16e66ba5b030cc8b6a8139b73bc4df44e852235499e890be1f4ee_prof);

        
        $__internal_10b3b3f8c6446cdcd3de9e50d3a624a5d2327a0be57fb6f392abe968b30c97d7->leave($__internal_10b3b3f8c6446cdcd3de9e50d3a624a5d2327a0be57fb6f392abe968b30c97d7_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_1c1c8fd99ad341706977f99db9f610eb096118c6684db5912d7879e892b72dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1c8fd99ad341706977f99db9f610eb096118c6684db5912d7879e892b72dae->enter($__internal_1c1c8fd99ad341706977f99db9f610eb096118c6684db5912d7879e892b72dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        $__internal_f2aadc929047f5c036d78ba146389a3ae6a6bef4ad7628f78c1194505e07bf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2aadc929047f5c036d78ba146389a3ae6a6bef4ad7628f78c1194505e07bf46->enter($__internal_f2aadc929047f5c036d78ba146389a3ae6a6bef4ad7628f78c1194505e07bf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

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
        
        $__internal_f2aadc929047f5c036d78ba146389a3ae6a6bef4ad7628f78c1194505e07bf46->leave($__internal_f2aadc929047f5c036d78ba146389a3ae6a6bef4ad7628f78c1194505e07bf46_prof);

        
        $__internal_1c1c8fd99ad341706977f99db9f610eb096118c6684db5912d7879e892b72dae->leave($__internal_1c1c8fd99ad341706977f99db9f610eb096118c6684db5912d7879e892b72dae_prof);

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
