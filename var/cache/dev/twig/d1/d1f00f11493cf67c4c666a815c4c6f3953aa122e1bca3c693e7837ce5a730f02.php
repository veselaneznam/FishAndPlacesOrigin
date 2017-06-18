<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_34c78e85265510b88254cbf2b6e7c0635811213048fab41d30d92b5dec564ce6 extends Twig_Template
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
        $__internal_0f527f73aa6a4e0d09486a2b5921e4e196b7a8fe3a2ba0cbbb06188769c323e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f527f73aa6a4e0d09486a2b5921e4e196b7a8fe3a2ba0cbbb06188769c323e3->enter($__internal_0f527f73aa6a4e0d09486a2b5921e4e196b7a8fe3a2ba0cbbb06188769c323e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6b25f509ff987b2545ad704c0667ba4762064da417bebbf4457782d4353b74ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b25f509ff987b2545ad704c0667ba4762064da417bebbf4457782d4353b74ce->enter($__internal_6b25f509ff987b2545ad704c0667ba4762064da417bebbf4457782d4353b74ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_0f527f73aa6a4e0d09486a2b5921e4e196b7a8fe3a2ba0cbbb06188769c323e3->leave($__internal_0f527f73aa6a4e0d09486a2b5921e4e196b7a8fe3a2ba0cbbb06188769c323e3_prof);

        
        $__internal_6b25f509ff987b2545ad704c0667ba4762064da417bebbf4457782d4353b74ce->leave($__internal_6b25f509ff987b2545ad704c0667ba4762064da417bebbf4457782d4353b74ce_prof);

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
", "@Twig/Exception/error.rdf.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
