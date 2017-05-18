<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_317cdbec9ca35282102847d3aa98f46ddc94f95d8bba7230ae65ffde67967cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_0fe424c182b6eb787cb38b93f6ddf26b5099153fd9494811772f8440b85cc4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe424c182b6eb787cb38b93f6ddf26b5099153fd9494811772f8440b85cc4fc->enter($__internal_0fe424c182b6eb787cb38b93f6ddf26b5099153fd9494811772f8440b85cc4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_9cd55e3cc7bb3de7d57d9e158f24caaec8f95b3625c3ab7b42932229c28dc785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd55e3cc7bb3de7d57d9e158f24caaec8f95b3625c3ab7b42932229c28dc785->enter($__internal_9cd55e3cc7bb3de7d57d9e158f24caaec8f95b3625c3ab7b42932229c28dc785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe424c182b6eb787cb38b93f6ddf26b5099153fd9494811772f8440b85cc4fc->leave($__internal_0fe424c182b6eb787cb38b93f6ddf26b5099153fd9494811772f8440b85cc4fc_prof);

        
        $__internal_9cd55e3cc7bb3de7d57d9e158f24caaec8f95b3625c3ab7b42932229c28dc785->leave($__internal_9cd55e3cc7bb3de7d57d9e158f24caaec8f95b3625c3ab7b42932229c28dc785_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da0a8e3bc9e36203ec14ea061906a9f9025500ac5c39bd3d540d7346ca811d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0a8e3bc9e36203ec14ea061906a9f9025500ac5c39bd3d540d7346ca811d8d->enter($__internal_da0a8e3bc9e36203ec14ea061906a9f9025500ac5c39bd3d540d7346ca811d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc636e587820c92805f382631b6c8217a52fafbd3fb1d68b11233d9b049af4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc636e587820c92805f382631b6c8217a52fafbd3fb1d68b11233d9b049af4ff->enter($__internal_bc636e587820c92805f382631b6c8217a52fafbd3fb1d68b11233d9b049af4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bc636e587820c92805f382631b6c8217a52fafbd3fb1d68b11233d9b049af4ff->leave($__internal_bc636e587820c92805f382631b6c8217a52fafbd3fb1d68b11233d9b049af4ff_prof);

        
        $__internal_da0a8e3bc9e36203ec14ea061906a9f9025500ac5c39bd3d540d7346ca811d8d->leave($__internal_da0a8e3bc9e36203ec14ea061906a9f9025500ac5c39bd3d540d7346ca811d8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
