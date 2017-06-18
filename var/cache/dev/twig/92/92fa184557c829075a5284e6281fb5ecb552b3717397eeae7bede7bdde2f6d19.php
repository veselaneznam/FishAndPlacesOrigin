<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e1715394602dca65c834b4aaab67edf20eac0bcb204717138d91521350d478d7 extends Twig_Template
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
        $__internal_f3d8f7cd7b9a38ee093daf55dcaea99491ba217baea4a104c4e3eb5582f4fe52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d8f7cd7b9a38ee093daf55dcaea99491ba217baea4a104c4e3eb5582f4fe52->enter($__internal_f3d8f7cd7b9a38ee093daf55dcaea99491ba217baea4a104c4e3eb5582f4fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_aae530d3a1dcce34d7906e7b6834384914cdd34fbb577728ab5faec496dc1797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae530d3a1dcce34d7906e7b6834384914cdd34fbb577728ab5faec496dc1797->enter($__internal_aae530d3a1dcce34d7906e7b6834384914cdd34fbb577728ab5faec496dc1797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d8f7cd7b9a38ee093daf55dcaea99491ba217baea4a104c4e3eb5582f4fe52->leave($__internal_f3d8f7cd7b9a38ee093daf55dcaea99491ba217baea4a104c4e3eb5582f4fe52_prof);

        
        $__internal_aae530d3a1dcce34d7906e7b6834384914cdd34fbb577728ab5faec496dc1797->leave($__internal_aae530d3a1dcce34d7906e7b6834384914cdd34fbb577728ab5faec496dc1797_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55becb5cf5301daa38a5d86edf46f1e73e430198e6ecbc106e404ed6eccba731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55becb5cf5301daa38a5d86edf46f1e73e430198e6ecbc106e404ed6eccba731->enter($__internal_55becb5cf5301daa38a5d86edf46f1e73e430198e6ecbc106e404ed6eccba731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a80fb2b2a56b8865acc80e8cbb76b6285ddf7fe685fb9902d7e18dfa04fd7bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80fb2b2a56b8865acc80e8cbb76b6285ddf7fe685fb9902d7e18dfa04fd7bfc->enter($__internal_a80fb2b2a56b8865acc80e8cbb76b6285ddf7fe685fb9902d7e18dfa04fd7bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a80fb2b2a56b8865acc80e8cbb76b6285ddf7fe685fb9902d7e18dfa04fd7bfc->leave($__internal_a80fb2b2a56b8865acc80e8cbb76b6285ddf7fe685fb9902d7e18dfa04fd7bfc_prof);

        
        $__internal_55becb5cf5301daa38a5d86edf46f1e73e430198e6ecbc106e404ed6eccba731->leave($__internal_55becb5cf5301daa38a5d86edf46f1e73e430198e6ecbc106e404ed6eccba731_prof);

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
", "@FOSUser/Registration/register.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
