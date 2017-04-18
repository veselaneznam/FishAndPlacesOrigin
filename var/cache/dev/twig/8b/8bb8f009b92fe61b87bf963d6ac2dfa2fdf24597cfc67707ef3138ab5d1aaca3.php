<?php

/* @Admin/dam/search.html.twig */
class __TwigTemplate_c8bd7a182754e66d3eb0bee60092b12a24335c0a0d9bad8cfed39c07ba768ab2 extends Twig_Template
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
        $__internal_f826a0fd7e81f8baaea976db01188b6eea0ccc7ef7e3596e0ddf44fb5a72eaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f826a0fd7e81f8baaea976db01188b6eea0ccc7ef7e3596e0ddf44fb5a72eaef->enter($__internal_f826a0fd7e81f8baaea976db01188b6eea0ccc7ef7e3596e0ddf44fb5a72eaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        $__internal_8f962ed6d43735135f7e571cec450391555d8dd1d3e8ad0456a39d5587018e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f962ed6d43735135f7e571cec450391555d8dd1d3e8ad0456a39d5587018e66->enter($__internal_8f962ed6d43735135f7e571cec450391555d8dd1d3e8ad0456a39d5587018e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        // line 1
        echo "<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'widget');
        echo "

</form>
";
        
        $__internal_f826a0fd7e81f8baaea976db01188b6eea0ccc7ef7e3596e0ddf44fb5a72eaef->leave($__internal_f826a0fd7e81f8baaea976db01188b6eea0ccc7ef7e3596e0ddf44fb5a72eaef_prof);

        
        $__internal_8f962ed6d43735135f7e571cec450391555d8dd1d3e8ad0456a39d5587018e66->leave($__internal_8f962ed6d43735135f7e571cec450391555d8dd1d3e8ad0456a39d5587018e66_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/dam/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    {{ form_widget(searchForm) }}

</form>
", "@Admin/dam/search.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/search.html.twig");
    }
}
