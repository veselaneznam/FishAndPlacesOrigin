<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2fe6a8def64c8d9f19bc8a6f27a5a4f94ccf5c7b4eefa06e9c76265a3af3f80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2a0687a63b3bee23fdeae22d63cda819bf605d704c91bc59a7bba425aae87180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0687a63b3bee23fdeae22d63cda819bf605d704c91bc59a7bba425aae87180->enter($__internal_2a0687a63b3bee23fdeae22d63cda819bf605d704c91bc59a7bba425aae87180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_361d570fdd4de2ca6322cd35053166294e90ee84fb63a37e3d12c66a9fbcfdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361d570fdd4de2ca6322cd35053166294e90ee84fb63a37e3d12c66a9fbcfdc0->enter($__internal_361d570fdd4de2ca6322cd35053166294e90ee84fb63a37e3d12c66a9fbcfdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a0687a63b3bee23fdeae22d63cda819bf605d704c91bc59a7bba425aae87180->leave($__internal_2a0687a63b3bee23fdeae22d63cda819bf605d704c91bc59a7bba425aae87180_prof);

        
        $__internal_361d570fdd4de2ca6322cd35053166294e90ee84fb63a37e3d12c66a9fbcfdc0->leave($__internal_361d570fdd4de2ca6322cd35053166294e90ee84fb63a37e3d12c66a9fbcfdc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe0ea3d73cc59277080010027d57ac16017250883d3302cb19d5e58e9ff0e4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0ea3d73cc59277080010027d57ac16017250883d3302cb19d5e58e9ff0e4d0->enter($__internal_fe0ea3d73cc59277080010027d57ac16017250883d3302cb19d5e58e9ff0e4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c99ac639a8175b54e4ed5bdc48d1209c13a1f03459532daba286ca0d670adcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99ac639a8175b54e4ed5bdc48d1209c13a1f03459532daba286ca0d670adcd4->enter($__internal_c99ac639a8175b54e4ed5bdc48d1209c13a1f03459532daba286ca0d670adcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c99ac639a8175b54e4ed5bdc48d1209c13a1f03459532daba286ca0d670adcd4->leave($__internal_c99ac639a8175b54e4ed5bdc48d1209c13a1f03459532daba286ca0d670adcd4_prof);

        
        $__internal_fe0ea3d73cc59277080010027d57ac16017250883d3302cb19d5e58e9ff0e4d0->leave($__internal_fe0ea3d73cc59277080010027d57ac16017250883d3302cb19d5e58e9ff0e4d0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
