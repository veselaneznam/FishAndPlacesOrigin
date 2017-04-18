<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c4ecaa5bfac709219189aec5c039a0ac2839e4676ed5932e1c3a19b33654d8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d00ee0a712a8e46378733bc6164d462137ecfd9634267e995579284a6554286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d00ee0a712a8e46378733bc6164d462137ecfd9634267e995579284a6554286->enter($__internal_1d00ee0a712a8e46378733bc6164d462137ecfd9634267e995579284a6554286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_69d0370ad9d4ff65472f9f3cc869bcdc5c3e3b3a8b8ff6c7b2ea44d6f0a90662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d0370ad9d4ff65472f9f3cc869bcdc5c3e3b3a8b8ff6c7b2ea44d6f0a90662->enter($__internal_69d0370ad9d4ff65472f9f3cc869bcdc5c3e3b3a8b8ff6c7b2ea44d6f0a90662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d00ee0a712a8e46378733bc6164d462137ecfd9634267e995579284a6554286->leave($__internal_1d00ee0a712a8e46378733bc6164d462137ecfd9634267e995579284a6554286_prof);

        
        $__internal_69d0370ad9d4ff65472f9f3cc869bcdc5c3e3b3a8b8ff6c7b2ea44d6f0a90662->leave($__internal_69d0370ad9d4ff65472f9f3cc869bcdc5c3e3b3a8b8ff6c7b2ea44d6f0a90662_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71dd9debe2e895ac133574df9d98854ff59a612e59ed57bb3155ae62ca715a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71dd9debe2e895ac133574df9d98854ff59a612e59ed57bb3155ae62ca715a8f->enter($__internal_71dd9debe2e895ac133574df9d98854ff59a612e59ed57bb3155ae62ca715a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e649f6189a0a8fa27fcd0b1a3e7b7108de3c728a852f8d66494cfc6760de997f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e649f6189a0a8fa27fcd0b1a3e7b7108de3c728a852f8d66494cfc6760de997f->enter($__internal_e649f6189a0a8fa27fcd0b1a3e7b7108de3c728a852f8d66494cfc6760de997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e649f6189a0a8fa27fcd0b1a3e7b7108de3c728a852f8d66494cfc6760de997f->leave($__internal_e649f6189a0a8fa27fcd0b1a3e7b7108de3c728a852f8d66494cfc6760de997f_prof);

        
        $__internal_71dd9debe2e895ac133574df9d98854ff59a612e59ed57bb3155ae62ca715a8f->leave($__internal_71dd9debe2e895ac133574df9d98854ff59a612e59ed57bb3155ae62ca715a8f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
