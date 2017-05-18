<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8f49a23a032d2a405398de7d70ffbc089f0de2026de6e02a33c2efddb161810f extends Twig_Template
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
        $__internal_2e9885e347436eeb71bd8488f3e9fb56e71dc53f52fc0a566580a913fd391cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9885e347436eeb71bd8488f3e9fb56e71dc53f52fc0a566580a913fd391cda->enter($__internal_2e9885e347436eeb71bd8488f3e9fb56e71dc53f52fc0a566580a913fd391cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_9376d2a0b7b55e43b87f5521fd1bd5206acb2029aca5120f2118f4b0e7a9195d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9376d2a0b7b55e43b87f5521fd1bd5206acb2029aca5120f2118f4b0e7a9195d->enter($__internal_9376d2a0b7b55e43b87f5521fd1bd5206acb2029aca5120f2118f4b0e7a9195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2e9885e347436eeb71bd8488f3e9fb56e71dc53f52fc0a566580a913fd391cda->leave($__internal_2e9885e347436eeb71bd8488f3e9fb56e71dc53f52fc0a566580a913fd391cda_prof);

        
        $__internal_9376d2a0b7b55e43b87f5521fd1bd5206acb2029aca5120f2118f4b0e7a9195d->leave($__internal_9376d2a0b7b55e43b87f5521fd1bd5206acb2029aca5120f2118f4b0e7a9195d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
