<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6582763ad11f77d1377cfede087e6d6bef5ca43febb14db49b8910609c1938bc extends Twig_Template
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
        $__internal_fb980d37ff529871017257b5ccb12e9d44b5c323f6a1a2f7f62ec4d5980e5e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb980d37ff529871017257b5ccb12e9d44b5c323f6a1a2f7f62ec4d5980e5e86->enter($__internal_fb980d37ff529871017257b5ccb12e9d44b5c323f6a1a2f7f62ec4d5980e5e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_589e18ee84fbc5d2473dcbb8be9f8395330eea805b8ae4ba3d0ccf40e7d502d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589e18ee84fbc5d2473dcbb8be9f8395330eea805b8ae4ba3d0ccf40e7d502d1->enter($__internal_589e18ee84fbc5d2473dcbb8be9f8395330eea805b8ae4ba3d0ccf40e7d502d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_fb980d37ff529871017257b5ccb12e9d44b5c323f6a1a2f7f62ec4d5980e5e86->leave($__internal_fb980d37ff529871017257b5ccb12e9d44b5c323f6a1a2f7f62ec4d5980e5e86_prof);

        
        $__internal_589e18ee84fbc5d2473dcbb8be9f8395330eea805b8ae4ba3d0ccf40e7d502d1->leave($__internal_589e18ee84fbc5d2473dcbb8be9f8395330eea805b8ae4ba3d0ccf40e7d502d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
