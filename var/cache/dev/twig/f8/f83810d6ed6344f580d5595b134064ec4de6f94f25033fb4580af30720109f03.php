<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c6a78dd98f6a66986f5f7d6d0e42c5c9f38cd82d6849d55824d5df62231a3ad4 extends Twig_Template
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
        $__internal_f759cd2657dc7cb698e8d48da9060fc9d651530e399334071ff8f7849ec9be2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f759cd2657dc7cb698e8d48da9060fc9d651530e399334071ff8f7849ec9be2e->enter($__internal_f759cd2657dc7cb698e8d48da9060fc9d651530e399334071ff8f7849ec9be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_30255e0e2ce23ae3831b6005822ce207ba6cd73629850e81a5639baec4cf7205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30255e0e2ce23ae3831b6005822ce207ba6cd73629850e81a5639baec4cf7205->enter($__internal_30255e0e2ce23ae3831b6005822ce207ba6cd73629850e81a5639baec4cf7205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f759cd2657dc7cb698e8d48da9060fc9d651530e399334071ff8f7849ec9be2e->leave($__internal_f759cd2657dc7cb698e8d48da9060fc9d651530e399334071ff8f7849ec9be2e_prof);

        
        $__internal_30255e0e2ce23ae3831b6005822ce207ba6cd73629850e81a5639baec4cf7205->leave($__internal_30255e0e2ce23ae3831b6005822ce207ba6cd73629850e81a5639baec4cf7205_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
