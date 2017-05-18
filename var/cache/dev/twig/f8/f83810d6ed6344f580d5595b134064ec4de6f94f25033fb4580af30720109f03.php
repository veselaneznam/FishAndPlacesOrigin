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
        $__internal_30320f6b6d2d0eeea8e3a5e632a81770d2e5d4f870591fe4843951a3b872a115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30320f6b6d2d0eeea8e3a5e632a81770d2e5d4f870591fe4843951a3b872a115->enter($__internal_30320f6b6d2d0eeea8e3a5e632a81770d2e5d4f870591fe4843951a3b872a115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_291962b1b9251266114af0d45ac01629acacd4a9a5b186008693df13579f40e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291962b1b9251266114af0d45ac01629acacd4a9a5b186008693df13579f40e4->enter($__internal_291962b1b9251266114af0d45ac01629acacd4a9a5b186008693df13579f40e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_30320f6b6d2d0eeea8e3a5e632a81770d2e5d4f870591fe4843951a3b872a115->leave($__internal_30320f6b6d2d0eeea8e3a5e632a81770d2e5d4f870591fe4843951a3b872a115_prof);

        
        $__internal_291962b1b9251266114af0d45ac01629acacd4a9a5b186008693df13579f40e4->leave($__internal_291962b1b9251266114af0d45ac01629acacd4a9a5b186008693df13579f40e4_prof);

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
