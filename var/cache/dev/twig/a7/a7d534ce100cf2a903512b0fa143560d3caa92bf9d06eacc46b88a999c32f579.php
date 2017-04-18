<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_073bba6ac4daa90d850bd1abdfdf7a98a42e6797ead4abfefe3bf6952d5a4d18 extends Twig_Template
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
        $__internal_057cbdfeceb598a6f7cba1a413ed5f787ff1ec65f5f54a1bd0e0536ab3960fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057cbdfeceb598a6f7cba1a413ed5f787ff1ec65f5f54a1bd0e0536ab3960fe9->enter($__internal_057cbdfeceb598a6f7cba1a413ed5f787ff1ec65f5f54a1bd0e0536ab3960fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7e596765f8badbb3763bd5d031f822643dd68eef479e30b0f80022ba9425dac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e596765f8badbb3763bd5d031f822643dd68eef479e30b0f80022ba9425dac1->enter($__internal_7e596765f8badbb3763bd5d031f822643dd68eef479e30b0f80022ba9425dac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_057cbdfeceb598a6f7cba1a413ed5f787ff1ec65f5f54a1bd0e0536ab3960fe9->leave($__internal_057cbdfeceb598a6f7cba1a413ed5f787ff1ec65f5f54a1bd0e0536ab3960fe9_prof);

        
        $__internal_7e596765f8badbb3763bd5d031f822643dd68eef479e30b0f80022ba9425dac1->leave($__internal_7e596765f8badbb3763bd5d031f822643dd68eef479e30b0f80022ba9425dac1_prof);

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
