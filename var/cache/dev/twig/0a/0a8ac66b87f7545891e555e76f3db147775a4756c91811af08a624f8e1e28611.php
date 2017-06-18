<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_65d3d142006c542d170b44c73cba8a7799aa1a052c8643fb7343ad48b9f227b6 extends Twig_Template
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
        $__internal_719316c5423b9e16b91afe82ba98bd5079d381c82b1074fbf51a6e50dbf18301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719316c5423b9e16b91afe82ba98bd5079d381c82b1074fbf51a6e50dbf18301->enter($__internal_719316c5423b9e16b91afe82ba98bd5079d381c82b1074fbf51a6e50dbf18301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_97735e4746e3c1c79156a039550007868449fbf3070cc7ba3340b59bd60f0641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97735e4746e3c1c79156a039550007868449fbf3070cc7ba3340b59bd60f0641->enter($__internal_97735e4746e3c1c79156a039550007868449fbf3070cc7ba3340b59bd60f0641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_719316c5423b9e16b91afe82ba98bd5079d381c82b1074fbf51a6e50dbf18301->leave($__internal_719316c5423b9e16b91afe82ba98bd5079d381c82b1074fbf51a6e50dbf18301_prof);

        
        $__internal_97735e4746e3c1c79156a039550007868449fbf3070cc7ba3340b59bd60f0641->leave($__internal_97735e4746e3c1c79156a039550007868449fbf3070cc7ba3340b59bd60f0641_prof);

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
", "@Twig/Exception/error.atom.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
