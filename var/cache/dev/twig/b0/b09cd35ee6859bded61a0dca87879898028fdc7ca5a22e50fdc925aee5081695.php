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
        $__internal_45ea70091cfc2cc90deffe997d2c8a2bce68010eb8d83d59d5b46ac18045bf30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ea70091cfc2cc90deffe997d2c8a2bce68010eb8d83d59d5b46ac18045bf30->enter($__internal_45ea70091cfc2cc90deffe997d2c8a2bce68010eb8d83d59d5b46ac18045bf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e9ce3a7c99bb0ec4832b241ce9efb8500facaa75ce9684b1211cd1f96ffa1118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ce3a7c99bb0ec4832b241ce9efb8500facaa75ce9684b1211cd1f96ffa1118->enter($__internal_e9ce3a7c99bb0ec4832b241ce9efb8500facaa75ce9684b1211cd1f96ffa1118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_45ea70091cfc2cc90deffe997d2c8a2bce68010eb8d83d59d5b46ac18045bf30->leave($__internal_45ea70091cfc2cc90deffe997d2c8a2bce68010eb8d83d59d5b46ac18045bf30_prof);

        
        $__internal_e9ce3a7c99bb0ec4832b241ce9efb8500facaa75ce9684b1211cd1f96ffa1118->leave($__internal_e9ce3a7c99bb0ec4832b241ce9efb8500facaa75ce9684b1211cd1f96ffa1118_prof);

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
