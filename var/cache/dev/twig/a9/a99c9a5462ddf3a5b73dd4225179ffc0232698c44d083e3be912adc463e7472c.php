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
        $__internal_6051ee8327da60d04017576664f48efc5f1bd528c274db081850e504559b63e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6051ee8327da60d04017576664f48efc5f1bd528c274db081850e504559b63e6->enter($__internal_6051ee8327da60d04017576664f48efc5f1bd528c274db081850e504559b63e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2d86fcd1e3518be9ac7c1530056f26a4c58eff7d3863055d6aa39c7183d82114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d86fcd1e3518be9ac7c1530056f26a4c58eff7d3863055d6aa39c7183d82114->enter($__internal_2d86fcd1e3518be9ac7c1530056f26a4c58eff7d3863055d6aa39c7183d82114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_6051ee8327da60d04017576664f48efc5f1bd528c274db081850e504559b63e6->leave($__internal_6051ee8327da60d04017576664f48efc5f1bd528c274db081850e504559b63e6_prof);

        
        $__internal_2d86fcd1e3518be9ac7c1530056f26a4c58eff7d3863055d6aa39c7183d82114->leave($__internal_2d86fcd1e3518be9ac7c1530056f26a4c58eff7d3863055d6aa39c7183d82114_prof);

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
