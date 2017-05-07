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
        $__internal_ef6183a14c8a291eb7749cef7dd0baad096a76c598300a1ca00ac8534e552669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6183a14c8a291eb7749cef7dd0baad096a76c598300a1ca00ac8534e552669->enter($__internal_ef6183a14c8a291eb7749cef7dd0baad096a76c598300a1ca00ac8534e552669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_4f954a9cb28d7619ed7fb8c7d48b9f3faaf6205dbbd0523c4a77e11fe613c7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f954a9cb28d7619ed7fb8c7d48b9f3faaf6205dbbd0523c4a77e11fe613c7a7->enter($__internal_4f954a9cb28d7619ed7fb8c7d48b9f3faaf6205dbbd0523c4a77e11fe613c7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6183a14c8a291eb7749cef7dd0baad096a76c598300a1ca00ac8534e552669->leave($__internal_ef6183a14c8a291eb7749cef7dd0baad096a76c598300a1ca00ac8534e552669_prof);

        
        $__internal_4f954a9cb28d7619ed7fb8c7d48b9f3faaf6205dbbd0523c4a77e11fe613c7a7->leave($__internal_4f954a9cb28d7619ed7fb8c7d48b9f3faaf6205dbbd0523c4a77e11fe613c7a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e117bb2d6adda444308d34b70335269edcb4a0d23574f76c8779da403c6bc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e117bb2d6adda444308d34b70335269edcb4a0d23574f76c8779da403c6bc30->enter($__internal_7e117bb2d6adda444308d34b70335269edcb4a0d23574f76c8779da403c6bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2bdb0896a84812062928cef16735fb995f233700ea30af09adf34d57ac94817a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdb0896a84812062928cef16735fb995f233700ea30af09adf34d57ac94817a->enter($__internal_2bdb0896a84812062928cef16735fb995f233700ea30af09adf34d57ac94817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2bdb0896a84812062928cef16735fb995f233700ea30af09adf34d57ac94817a->leave($__internal_2bdb0896a84812062928cef16735fb995f233700ea30af09adf34d57ac94817a_prof);

        
        $__internal_7e117bb2d6adda444308d34b70335269edcb4a0d23574f76c8779da403c6bc30->leave($__internal_7e117bb2d6adda444308d34b70335269edcb4a0d23574f76c8779da403c6bc30_prof);

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
