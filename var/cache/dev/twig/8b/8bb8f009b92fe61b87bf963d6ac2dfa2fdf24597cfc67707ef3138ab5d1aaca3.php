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
        $__internal_67af8a5ce0cb2f5f0231192a86670b3693c770698118f7daded05743a212534f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67af8a5ce0cb2f5f0231192a86670b3693c770698118f7daded05743a212534f->enter($__internal_67af8a5ce0cb2f5f0231192a86670b3693c770698118f7daded05743a212534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        $__internal_b369d9c8034b9b20852e6e13d48b35e4d7947372814a17a133021fc5b53b6a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b369d9c8034b9b20852e6e13d48b35e4d7947372814a17a133021fc5b53b6a90->enter($__internal_b369d9c8034b9b20852e6e13d48b35e4d7947372814a17a133021fc5b53b6a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/search.html.twig"));

        // line 1
        echo "<h3>Filters</h3>
<form class=\"form-inline\" method=\"post\">

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'widget');
        echo "

</form>
";
        
        $__internal_67af8a5ce0cb2f5f0231192a86670b3693c770698118f7daded05743a212534f->leave($__internal_67af8a5ce0cb2f5f0231192a86670b3693c770698118f7daded05743a212534f_prof);

        
        $__internal_b369d9c8034b9b20852e6e13d48b35e4d7947372814a17a133021fc5b53b6a90->leave($__internal_b369d9c8034b9b20852e6e13d48b35e4d7947372814a17a133021fc5b53b6a90_prof);

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
