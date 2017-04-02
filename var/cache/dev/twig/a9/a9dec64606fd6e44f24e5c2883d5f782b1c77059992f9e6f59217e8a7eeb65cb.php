<?php

/* @Dam/dam/search.html.twig */
class __TwigTemplate_085f2a3956fb031c4b1f87304ad6c8e5a59d899d17999ad63956529c683432ae extends Twig_Template
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
        $__internal_be6876bb4b9a0822c59026b55f331ca12d027bd6187b03e54491a320d3f77d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6876bb4b9a0822c59026b55f331ca12d027bd6187b03e54491a320d3f77d47->enter($__internal_be6876bb4b9a0822c59026b55f331ca12d027bd6187b03e54491a320d3f77d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/search.html.twig"));

        // line 1
        echo "<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'widget');
        echo "

</form>
";
        
        $__internal_be6876bb4b9a0822c59026b55f331ca12d027bd6187b03e54491a320d3f77d47->leave($__internal_be6876bb4b9a0822c59026b55f331ca12d027bd6187b03e54491a320d3f77d47_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
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
", "@Dam/dam/search.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/search.html.twig");
    }
}
