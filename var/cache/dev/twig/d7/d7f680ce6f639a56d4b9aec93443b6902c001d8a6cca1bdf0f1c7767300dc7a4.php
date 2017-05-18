<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e0cd936429ab2bcbaa4d35e3879f0c201048f980a8c796c14e7a9a35f5a806ee extends Twig_Template
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
        $__internal_5d5f256ad3409ec97cd7bd692ad1b84cd3c37a3868631a847ca2acd9b11f8600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5f256ad3409ec97cd7bd692ad1b84cd3c37a3868631a847ca2acd9b11f8600->enter($__internal_5d5f256ad3409ec97cd7bd692ad1b84cd3c37a3868631a847ca2acd9b11f8600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5a63047513be2ba99199c57dbb0b143c6ee18bf2addbaacb6b805ef04f753c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a63047513be2ba99199c57dbb0b143c6ee18bf2addbaacb6b805ef04f753c3a->enter($__internal_5a63047513be2ba99199c57dbb0b143c6ee18bf2addbaacb6b805ef04f753c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5d5f256ad3409ec97cd7bd692ad1b84cd3c37a3868631a847ca2acd9b11f8600->leave($__internal_5d5f256ad3409ec97cd7bd692ad1b84cd3c37a3868631a847ca2acd9b11f8600_prof);

        
        $__internal_5a63047513be2ba99199c57dbb0b143c6ee18bf2addbaacb6b805ef04f753c3a->leave($__internal_5a63047513be2ba99199c57dbb0b143c6ee18bf2addbaacb6b805ef04f753c3a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
