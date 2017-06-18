<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_421d43a3132e3f162f50cfb05edeacc7d1dbe627f32d15d534b661f34166f84a extends Twig_Template
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
        $__internal_ee76d68bc77e6b7b527e8ad7baae3e336b3272ca24f7c6c1f3fb838c5ccf3cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee76d68bc77e6b7b527e8ad7baae3e336b3272ca24f7c6c1f3fb838c5ccf3cd8->enter($__internal_ee76d68bc77e6b7b527e8ad7baae3e336b3272ca24f7c6c1f3fb838c5ccf3cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d54bf7e8cfd8c22d5647edd3cd1c785215de93de14533437a35a967572968f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54bf7e8cfd8c22d5647edd3cd1c785215de93de14533437a35a967572968f78->enter($__internal_d54bf7e8cfd8c22d5647edd3cd1c785215de93de14533437a35a967572968f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ee76d68bc77e6b7b527e8ad7baae3e336b3272ca24f7c6c1f3fb838c5ccf3cd8->leave($__internal_ee76d68bc77e6b7b527e8ad7baae3e336b3272ca24f7c6c1f3fb838c5ccf3cd8_prof);

        
        $__internal_d54bf7e8cfd8c22d5647edd3cd1c785215de93de14533437a35a967572968f78->leave($__internal_d54bf7e8cfd8c22d5647edd3cd1c785215de93de14533437a35a967572968f78_prof);

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
", "@Twig/Exception/error.js.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
