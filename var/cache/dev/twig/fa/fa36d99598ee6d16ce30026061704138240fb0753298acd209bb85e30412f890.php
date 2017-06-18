<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7046891be1209b33aea08889d9e69c87cccb01867bce796970726ff71e90757a extends Twig_Template
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
        $__internal_b93eb29bec2f926523730b452295f4a2a839b53a0d5a75c4fb6791a5c35aa2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93eb29bec2f926523730b452295f4a2a839b53a0d5a75c4fb6791a5c35aa2f8->enter($__internal_b93eb29bec2f926523730b452295f4a2a839b53a0d5a75c4fb6791a5c35aa2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_fa5a01b0ce161ca2e3391d7a30ed390c5d50e891438c36cbcaffe2c4189529da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5a01b0ce161ca2e3391d7a30ed390c5d50e891438c36cbcaffe2c4189529da->enter($__internal_fa5a01b0ce161ca2e3391d7a30ed390c5d50e891438c36cbcaffe2c4189529da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b93eb29bec2f926523730b452295f4a2a839b53a0d5a75c4fb6791a5c35aa2f8->leave($__internal_b93eb29bec2f926523730b452295f4a2a839b53a0d5a75c4fb6791a5c35aa2f8_prof);

        
        $__internal_fa5a01b0ce161ca2e3391d7a30ed390c5d50e891438c36cbcaffe2c4189529da->leave($__internal_fa5a01b0ce161ca2e3391d7a30ed390c5d50e891438c36cbcaffe2c4189529da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
