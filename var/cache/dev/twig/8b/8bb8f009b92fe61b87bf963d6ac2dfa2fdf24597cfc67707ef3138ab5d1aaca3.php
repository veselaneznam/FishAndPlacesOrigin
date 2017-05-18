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
        $__internal_0797e61652ee378f969d6b860a52c830285a28a75f5e03a4e98464edd1405f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0797e61652ee378f969d6b860a52c830285a28a75f5e03a4e98464edd1405f80->enter($__internal_0797e61652ee378f969d6b860a52c830285a28a75f5e03a4e98464edd1405f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        $__internal_c1c1f6fe39b854610abafa04c94f11c6a498983975e1e4188efbb0b9c5c39183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c1f6fe39b854610abafa04c94f11c6a498983975e1e4188efbb0b9c5c39183->enter($__internal_c1c1f6fe39b854610abafa04c94f11c6a498983975e1e4188efbb0b9c5c39183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        // line 1
        echo "<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'widget');
        echo "

</form>
";
        
        $__internal_0797e61652ee378f969d6b860a52c830285a28a75f5e03a4e98464edd1405f80->leave($__internal_0797e61652ee378f969d6b860a52c830285a28a75f5e03a4e98464edd1405f80_prof);

        
        $__internal_c1c1f6fe39b854610abafa04c94f11c6a498983975e1e4188efbb0b9c5c39183->leave($__internal_c1c1f6fe39b854610abafa04c94f11c6a498983975e1e4188efbb0b9c5c39183_prof);

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
