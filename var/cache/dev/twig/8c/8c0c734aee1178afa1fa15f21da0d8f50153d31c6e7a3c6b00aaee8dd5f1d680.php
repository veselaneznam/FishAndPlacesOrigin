<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_d174eb04900f7e926277de3a0fa057ebe5f42afdef6dcd17b1a27083c957c01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_366021565c53e669f3fa75a0a83c678d19ed6c323d3a0566849bc9050345f44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366021565c53e669f3fa75a0a83c678d19ed6c323d3a0566849bc9050345f44e->enter($__internal_366021565c53e669f3fa75a0a83c678d19ed6c323d3a0566849bc9050345f44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_63c14d3d68758b1f07ed2a3b0c21eea81dd45c2cae23c6d9ea014ec78c711a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c14d3d68758b1f07ed2a3b0c21eea81dd45c2cae23c6d9ea014ec78c711a5b->enter($__internal_63c14d3d68758b1f07ed2a3b0c21eea81dd45c2cae23c6d9ea014ec78c711a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366021565c53e669f3fa75a0a83c678d19ed6c323d3a0566849bc9050345f44e->leave($__internal_366021565c53e669f3fa75a0a83c678d19ed6c323d3a0566849bc9050345f44e_prof);

        
        $__internal_63c14d3d68758b1f07ed2a3b0c21eea81dd45c2cae23c6d9ea014ec78c711a5b->leave($__internal_63c14d3d68758b1f07ed2a3b0c21eea81dd45c2cae23c6d9ea014ec78c711a5b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7739146903e89238112cb31dafa5b65820235737961fb6f1c2b8d65c2380c072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7739146903e89238112cb31dafa5b65820235737961fb6f1c2b8d65c2380c072->enter($__internal_7739146903e89238112cb31dafa5b65820235737961fb6f1c2b8d65c2380c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b46872a8cde12fb06d9af7b612e4a90f7985208533d8d93836c9a25b27b3e2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46872a8cde12fb06d9af7b612e4a90f7985208533d8d93836c9a25b27b3e2e2->enter($__internal_b46872a8cde12fb06d9af7b612e4a90f7985208533d8d93836c9a25b27b3e2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b46872a8cde12fb06d9af7b612e4a90f7985208533d8d93836c9a25b27b3e2e2->leave($__internal_b46872a8cde12fb06d9af7b612e4a90f7985208533d8d93836c9a25b27b3e2e2_prof);

        
        $__internal_7739146903e89238112cb31dafa5b65820235737961fb6f1c2b8d65c2380c072->leave($__internal_7739146903e89238112cb31dafa5b65820235737961fb6f1c2b8d65c2380c072_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
