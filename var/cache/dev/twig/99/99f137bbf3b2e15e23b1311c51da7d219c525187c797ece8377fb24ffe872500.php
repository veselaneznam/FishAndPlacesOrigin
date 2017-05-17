<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b34594d787a9c2902c287d30d1677c296e50bb8e63a34b9ee19bca177a4db8fb extends Twig_Template
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
        $__internal_ed00b81dcbc0500d792a7bc4d385784e50ff54b7faf3845a5a885006da07cd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed00b81dcbc0500d792a7bc4d385784e50ff54b7faf3845a5a885006da07cd55->enter($__internal_ed00b81dcbc0500d792a7bc4d385784e50ff54b7faf3845a5a885006da07cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_e4a3e1f1f6504594c0bb8819aaa2f30c6d2167c523d04be738854a5d0e7ef19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a3e1f1f6504594c0bb8819aaa2f30c6d2167c523d04be738854a5d0e7ef19b->enter($__internal_e4a3e1f1f6504594c0bb8819aaa2f30c6d2167c523d04be738854a5d0e7ef19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed00b81dcbc0500d792a7bc4d385784e50ff54b7faf3845a5a885006da07cd55->leave($__internal_ed00b81dcbc0500d792a7bc4d385784e50ff54b7faf3845a5a885006da07cd55_prof);

        
        $__internal_e4a3e1f1f6504594c0bb8819aaa2f30c6d2167c523d04be738854a5d0e7ef19b->leave($__internal_e4a3e1f1f6504594c0bb8819aaa2f30c6d2167c523d04be738854a5d0e7ef19b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a5b525d60085a7a1528a0d51bf1109b286652da60812f2a3551bbf673f8c9763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b525d60085a7a1528a0d51bf1109b286652da60812f2a3551bbf673f8c9763->enter($__internal_a5b525d60085a7a1528a0d51bf1109b286652da60812f2a3551bbf673f8c9763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5b858b81383402727e53d5442a5f46c6de82643ae5111a535745fca797684d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b858b81383402727e53d5442a5f46c6de82643ae5111a535745fca797684d9d->enter($__internal_5b858b81383402727e53d5442a5f46c6de82643ae5111a535745fca797684d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5b858b81383402727e53d5442a5f46c6de82643ae5111a535745fca797684d9d->leave($__internal_5b858b81383402727e53d5442a5f46c6de82643ae5111a535745fca797684d9d_prof);

        
        $__internal_a5b525d60085a7a1528a0d51bf1109b286652da60812f2a3551bbf673f8c9763->leave($__internal_a5b525d60085a7a1528a0d51bf1109b286652da60812f2a3551bbf673f8c9763_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_248784dccd057c9807c8e0765baf307c37fc64e57a893cc0034414442f26f39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248784dccd057c9807c8e0765baf307c37fc64e57a893cc0034414442f26f39d->enter($__internal_248784dccd057c9807c8e0765baf307c37fc64e57a893cc0034414442f26f39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5252d9e00273354468855a89e42aa089952b06909fd32d47ab7619a22c539ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5252d9e00273354468855a89e42aa089952b06909fd32d47ab7619a22c539ff0->enter($__internal_5252d9e00273354468855a89e42aa089952b06909fd32d47ab7619a22c539ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5252d9e00273354468855a89e42aa089952b06909fd32d47ab7619a22c539ff0->leave($__internal_5252d9e00273354468855a89e42aa089952b06909fd32d47ab7619a22c539ff0_prof);

        
        $__internal_248784dccd057c9807c8e0765baf307c37fc64e57a893cc0034414442f26f39d->leave($__internal_248784dccd057c9807c8e0765baf307c37fc64e57a893cc0034414442f26f39d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_57f9f47d7b71663b6c064a3462e6a939330cb92e42dcb1617668783dc298d2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f9f47d7b71663b6c064a3462e6a939330cb92e42dcb1617668783dc298d2eb->enter($__internal_57f9f47d7b71663b6c064a3462e6a939330cb92e42dcb1617668783dc298d2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_51245830a13d40f4ad810955d00b49ac968d071957a391100386b462e35a83d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51245830a13d40f4ad810955d00b49ac968d071957a391100386b462e35a83d8->enter($__internal_51245830a13d40f4ad810955d00b49ac968d071957a391100386b462e35a83d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51245830a13d40f4ad810955d00b49ac968d071957a391100386b462e35a83d8->leave($__internal_51245830a13d40f4ad810955d00b49ac968d071957a391100386b462e35a83d8_prof);

        
        $__internal_57f9f47d7b71663b6c064a3462e6a939330cb92e42dcb1617668783dc298d2eb->leave($__internal_57f9f47d7b71663b6c064a3462e6a939330cb92e42dcb1617668783dc298d2eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
