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
        $__internal_9b7248ab69bc597c1a214de66d726bbec9477109ff9cdd5d328ff1c6faf70406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7248ab69bc597c1a214de66d726bbec9477109ff9cdd5d328ff1c6faf70406->enter($__internal_9b7248ab69bc597c1a214de66d726bbec9477109ff9cdd5d328ff1c6faf70406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_7751016758cb2700ef6660a124a00bdf5c28be65bc99ca1c40c72fba0340f96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7751016758cb2700ef6660a124a00bdf5c28be65bc99ca1c40c72fba0340f96f->enter($__internal_7751016758cb2700ef6660a124a00bdf5c28be65bc99ca1c40c72fba0340f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9b7248ab69bc597c1a214de66d726bbec9477109ff9cdd5d328ff1c6faf70406->leave($__internal_9b7248ab69bc597c1a214de66d726bbec9477109ff9cdd5d328ff1c6faf70406_prof);

        
        $__internal_7751016758cb2700ef6660a124a00bdf5c28be65bc99ca1c40c72fba0340f96f->leave($__internal_7751016758cb2700ef6660a124a00bdf5c28be65bc99ca1c40c72fba0340f96f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_098eb2f210eab39cb313846db30b4f8db6f838809d4783065a1dc9a74e698fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098eb2f210eab39cb313846db30b4f8db6f838809d4783065a1dc9a74e698fa9->enter($__internal_098eb2f210eab39cb313846db30b4f8db6f838809d4783065a1dc9a74e698fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8c00cb5e076d1b1da243bd842f6e4949cfeb50f207f77d4e4321f7d9b6f15799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c00cb5e076d1b1da243bd842f6e4949cfeb50f207f77d4e4321f7d9b6f15799->enter($__internal_8c00cb5e076d1b1da243bd842f6e4949cfeb50f207f77d4e4321f7d9b6f15799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8c00cb5e076d1b1da243bd842f6e4949cfeb50f207f77d4e4321f7d9b6f15799->leave($__internal_8c00cb5e076d1b1da243bd842f6e4949cfeb50f207f77d4e4321f7d9b6f15799_prof);

        
        $__internal_098eb2f210eab39cb313846db30b4f8db6f838809d4783065a1dc9a74e698fa9->leave($__internal_098eb2f210eab39cb313846db30b4f8db6f838809d4783065a1dc9a74e698fa9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e4868c80ebe69072b3b96453c8eff5abd51423b734277ba37336a578a2009bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4868c80ebe69072b3b96453c8eff5abd51423b734277ba37336a578a2009bc6->enter($__internal_e4868c80ebe69072b3b96453c8eff5abd51423b734277ba37336a578a2009bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4168f29be779a5ac97565b1942e5560f31ea0b3fdffefe56d7f7a7bc803d3dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4168f29be779a5ac97565b1942e5560f31ea0b3fdffefe56d7f7a7bc803d3dab->enter($__internal_4168f29be779a5ac97565b1942e5560f31ea0b3fdffefe56d7f7a7bc803d3dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4168f29be779a5ac97565b1942e5560f31ea0b3fdffefe56d7f7a7bc803d3dab->leave($__internal_4168f29be779a5ac97565b1942e5560f31ea0b3fdffefe56d7f7a7bc803d3dab_prof);

        
        $__internal_e4868c80ebe69072b3b96453c8eff5abd51423b734277ba37336a578a2009bc6->leave($__internal_e4868c80ebe69072b3b96453c8eff5abd51423b734277ba37336a578a2009bc6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a3ccbf04bf805f2a9f7ed4ea179a9dd4b37f6517ab721695699342f35d75a6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ccbf04bf805f2a9f7ed4ea179a9dd4b37f6517ab721695699342f35d75a6e8->enter($__internal_a3ccbf04bf805f2a9f7ed4ea179a9dd4b37f6517ab721695699342f35d75a6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_909864b867f236bd4fbbb08fa8e76cbf110c586e99ea90e09028f27cc6de49ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909864b867f236bd4fbbb08fa8e76cbf110c586e99ea90e09028f27cc6de49ae->enter($__internal_909864b867f236bd4fbbb08fa8e76cbf110c586e99ea90e09028f27cc6de49ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_909864b867f236bd4fbbb08fa8e76cbf110c586e99ea90e09028f27cc6de49ae->leave($__internal_909864b867f236bd4fbbb08fa8e76cbf110c586e99ea90e09028f27cc6de49ae_prof);

        
        $__internal_a3ccbf04bf805f2a9f7ed4ea179a9dd4b37f6517ab721695699342f35d75a6e8->leave($__internal_a3ccbf04bf805f2a9f7ed4ea179a9dd4b37f6517ab721695699342f35d75a6e8_prof);

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
