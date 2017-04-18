<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_c783548c6af438dd24fd4cfedc587e095b62dd18388dc691631d4c8b64f6081a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f874084ec15ae9c348a073b02b589bb027eb6306916624fc1d24eef8dfdb3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f874084ec15ae9c348a073b02b589bb027eb6306916624fc1d24eef8dfdb3c1->enter($__internal_0f874084ec15ae9c348a073b02b589bb027eb6306916624fc1d24eef8dfdb3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_1848f8d619af20632097ade35cdfb19fd8c5a8d7c43fa069a2024549706aeea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1848f8d619af20632097ade35cdfb19fd8c5a8d7c43fa069a2024549706aeea1->enter($__internal_1848f8d619af20632097ade35cdfb19fd8c5a8d7c43fa069a2024549706aeea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0f874084ec15ae9c348a073b02b589bb027eb6306916624fc1d24eef8dfdb3c1->leave($__internal_0f874084ec15ae9c348a073b02b589bb027eb6306916624fc1d24eef8dfdb3c1_prof);

        
        $__internal_1848f8d619af20632097ade35cdfb19fd8c5a8d7c43fa069a2024549706aeea1->leave($__internal_1848f8d619af20632097ade35cdfb19fd8c5a8d7c43fa069a2024549706aeea1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e04e7d1f23dea232f418dfb1c2e1b6fa9b50982883ed58a765dc906dd193edd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04e7d1f23dea232f418dfb1c2e1b6fa9b50982883ed58a765dc906dd193edd3->enter($__internal_e04e7d1f23dea232f418dfb1c2e1b6fa9b50982883ed58a765dc906dd193edd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3aab70454070d97bebc04d75e289d9601c75ee0aff872e21785fc50f7bd5ae4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aab70454070d97bebc04d75e289d9601c75ee0aff872e21785fc50f7bd5ae4e->enter($__internal_3aab70454070d97bebc04d75e289d9601c75ee0aff872e21785fc50f7bd5ae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3aab70454070d97bebc04d75e289d9601c75ee0aff872e21785fc50f7bd5ae4e->leave($__internal_3aab70454070d97bebc04d75e289d9601c75ee0aff872e21785fc50f7bd5ae4e_prof);

        
        $__internal_e04e7d1f23dea232f418dfb1c2e1b6fa9b50982883ed58a765dc906dd193edd3->leave($__internal_e04e7d1f23dea232f418dfb1c2e1b6fa9b50982883ed58a765dc906dd193edd3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_af4aed80a85b44eae2655bcf8109fcd3366f02bec554910f21a2931f2050afb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4aed80a85b44eae2655bcf8109fcd3366f02bec554910f21a2931f2050afb2->enter($__internal_af4aed80a85b44eae2655bcf8109fcd3366f02bec554910f21a2931f2050afb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f93c0ff4bb6393d16ad1cdcbb8efbd523c2b79f9eff5d3edf2be6581c91949ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93c0ff4bb6393d16ad1cdcbb8efbd523c2b79f9eff5d3edf2be6581c91949ce->enter($__internal_f93c0ff4bb6393d16ad1cdcbb8efbd523c2b79f9eff5d3edf2be6581c91949ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f93c0ff4bb6393d16ad1cdcbb8efbd523c2b79f9eff5d3edf2be6581c91949ce->leave($__internal_f93c0ff4bb6393d16ad1cdcbb8efbd523c2b79f9eff5d3edf2be6581c91949ce_prof);

        
        $__internal_af4aed80a85b44eae2655bcf8109fcd3366f02bec554910f21a2931f2050afb2->leave($__internal_af4aed80a85b44eae2655bcf8109fcd3366f02bec554910f21a2931f2050afb2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_945557dfc0fafaf767663371b8fcaceae46d029dbd0327ae2e1e4f68691323cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945557dfc0fafaf767663371b8fcaceae46d029dbd0327ae2e1e4f68691323cf->enter($__internal_945557dfc0fafaf767663371b8fcaceae46d029dbd0327ae2e1e4f68691323cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_01a8abf77f6c1a84e85f59c8b03dcf45a3b948492533672577d79191d7cfd73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a8abf77f6c1a84e85f59c8b03dcf45a3b948492533672577d79191d7cfd73c->enter($__internal_01a8abf77f6c1a84e85f59c8b03dcf45a3b948492533672577d79191d7cfd73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_01a8abf77f6c1a84e85f59c8b03dcf45a3b948492533672577d79191d7cfd73c->leave($__internal_01a8abf77f6c1a84e85f59c8b03dcf45a3b948492533672577d79191d7cfd73c_prof);

        
        $__internal_945557dfc0fafaf767663371b8fcaceae46d029dbd0327ae2e1e4f68691323cf->leave($__internal_945557dfc0fafaf767663371b8fcaceae46d029dbd0327ae2e1e4f68691323cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
