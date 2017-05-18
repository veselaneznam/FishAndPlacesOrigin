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
        $__internal_d22aa16af70d7afb543307c1e6a1502aeb89a2bc5ce4b3271407be66f4b6875b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22aa16af70d7afb543307c1e6a1502aeb89a2bc5ce4b3271407be66f4b6875b->enter($__internal_d22aa16af70d7afb543307c1e6a1502aeb89a2bc5ce4b3271407be66f4b6875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6c24a92c20fce343011b081ce200b367cfe3220cf409a4243c9c97f135561a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c24a92c20fce343011b081ce200b367cfe3220cf409a4243c9c97f135561a72->enter($__internal_6c24a92c20fce343011b081ce200b367cfe3220cf409a4243c9c97f135561a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d22aa16af70d7afb543307c1e6a1502aeb89a2bc5ce4b3271407be66f4b6875b->leave($__internal_d22aa16af70d7afb543307c1e6a1502aeb89a2bc5ce4b3271407be66f4b6875b_prof);

        
        $__internal_6c24a92c20fce343011b081ce200b367cfe3220cf409a4243c9c97f135561a72->leave($__internal_6c24a92c20fce343011b081ce200b367cfe3220cf409a4243c9c97f135561a72_prof);

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
