<?php

/* @Admin/dam/search.html.twig */
class __TwigTemplate_7f59d982150d514ede5c1c7033479c8edc3d850791276b8c63f4e73edec33627 extends Twig_Template
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
        $__internal_32d1a0ebb7080027eb66304125b213f946332727601f5b2096ed6a6c91e62eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d1a0ebb7080027eb66304125b213f946332727601f5b2096ed6a6c91e62eb1->enter($__internal_32d1a0ebb7080027eb66304125b213f946332727601f5b2096ed6a6c91e62eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        $__internal_16d29c608788b93ea22669629bfe9805fac70d2e6d668c661e68a2adddca19d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d29c608788b93ea22669629bfe9805fac70d2e6d668c661e68a2adddca19d5->enter($__internal_16d29c608788b93ea22669629bfe9805fac70d2e6d668c661e68a2adddca19d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        // line 1
        echo "<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["searchForm"] ?? $this->getContext($context, "searchForm")), 'widget');
        echo "

</form>
";
        
        $__internal_32d1a0ebb7080027eb66304125b213f946332727601f5b2096ed6a6c91e62eb1->leave($__internal_32d1a0ebb7080027eb66304125b213f946332727601f5b2096ed6a6c91e62eb1_prof);

        
        $__internal_16d29c608788b93ea22669629bfe9805fac70d2e6d668c661e68a2adddca19d5->leave($__internal_16d29c608788b93ea22669629bfe9805fac70d2e6d668c661e68a2adddca19d5_prof);

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
", "@Admin/dam/search.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/search.html.twig");
    }
}
