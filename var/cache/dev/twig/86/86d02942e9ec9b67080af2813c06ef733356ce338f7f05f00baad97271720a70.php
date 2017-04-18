<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_453c1c06750722dbf46088ecbf7364e531a316a62c3ea98d7c29ef7b0489938e extends Twig_Template
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
        $__internal_838952397118055cc0c787ede22610585ff583df944e3f0d5218ae5f3ff5545f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838952397118055cc0c787ede22610585ff583df944e3f0d5218ae5f3ff5545f->enter($__internal_838952397118055cc0c787ede22610585ff583df944e3f0d5218ae5f3ff5545f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_74d3269b99a93adf406d1567ff602597cd2e008ac632fb8ff3aaff8cc8b0b801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d3269b99a93adf406d1567ff602597cd2e008ac632fb8ff3aaff8cc8b0b801->enter($__internal_74d3269b99a93adf406d1567ff602597cd2e008ac632fb8ff3aaff8cc8b0b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_838952397118055cc0c787ede22610585ff583df944e3f0d5218ae5f3ff5545f->leave($__internal_838952397118055cc0c787ede22610585ff583df944e3f0d5218ae5f3ff5545f_prof);

        
        $__internal_74d3269b99a93adf406d1567ff602597cd2e008ac632fb8ff3aaff8cc8b0b801->leave($__internal_74d3269b99a93adf406d1567ff602597cd2e008ac632fb8ff3aaff8cc8b0b801_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
