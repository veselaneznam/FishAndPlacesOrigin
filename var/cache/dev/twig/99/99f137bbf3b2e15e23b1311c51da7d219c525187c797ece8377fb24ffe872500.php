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
        $__internal_53246b11d8e62a59d220ecbe0a827c26a0a2651e319c924db89a69492dab7f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53246b11d8e62a59d220ecbe0a827c26a0a2651e319c924db89a69492dab7f85->enter($__internal_53246b11d8e62a59d220ecbe0a827c26a0a2651e319c924db89a69492dab7f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_5e98dd5cd09a85292c1dff3b788e03988ae290c4a158bb015f975f3fdd735203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e98dd5cd09a85292c1dff3b788e03988ae290c4a158bb015f975f3fdd735203->enter($__internal_5e98dd5cd09a85292c1dff3b788e03988ae290c4a158bb015f975f3fdd735203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_53246b11d8e62a59d220ecbe0a827c26a0a2651e319c924db89a69492dab7f85->leave($__internal_53246b11d8e62a59d220ecbe0a827c26a0a2651e319c924db89a69492dab7f85_prof);

        
        $__internal_5e98dd5cd09a85292c1dff3b788e03988ae290c4a158bb015f975f3fdd735203->leave($__internal_5e98dd5cd09a85292c1dff3b788e03988ae290c4a158bb015f975f3fdd735203_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5fcadde5a3eb7810e9188736fbf1657900258046cf37615e893d851fb21f47f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcadde5a3eb7810e9188736fbf1657900258046cf37615e893d851fb21f47f2->enter($__internal_5fcadde5a3eb7810e9188736fbf1657900258046cf37615e893d851fb21f47f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_578ddc834fca453d0ea72b18a3990ea03bbeb4749a16fc06956d1ba7be58eba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578ddc834fca453d0ea72b18a3990ea03bbeb4749a16fc06956d1ba7be58eba5->enter($__internal_578ddc834fca453d0ea72b18a3990ea03bbeb4749a16fc06956d1ba7be58eba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_578ddc834fca453d0ea72b18a3990ea03bbeb4749a16fc06956d1ba7be58eba5->leave($__internal_578ddc834fca453d0ea72b18a3990ea03bbeb4749a16fc06956d1ba7be58eba5_prof);

        
        $__internal_5fcadde5a3eb7810e9188736fbf1657900258046cf37615e893d851fb21f47f2->leave($__internal_5fcadde5a3eb7810e9188736fbf1657900258046cf37615e893d851fb21f47f2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b43cf8287fa5ae1c9f6204a87e2e01908e7cbacda88061c199573d624129f62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43cf8287fa5ae1c9f6204a87e2e01908e7cbacda88061c199573d624129f62a->enter($__internal_b43cf8287fa5ae1c9f6204a87e2e01908e7cbacda88061c199573d624129f62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e2f9cc1383015d22b26f50a9f21afcce9df949e8c11e6be22bde0461d0660f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f9cc1383015d22b26f50a9f21afcce9df949e8c11e6be22bde0461d0660f11->enter($__internal_e2f9cc1383015d22b26f50a9f21afcce9df949e8c11e6be22bde0461d0660f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2f9cc1383015d22b26f50a9f21afcce9df949e8c11e6be22bde0461d0660f11->leave($__internal_e2f9cc1383015d22b26f50a9f21afcce9df949e8c11e6be22bde0461d0660f11_prof);

        
        $__internal_b43cf8287fa5ae1c9f6204a87e2e01908e7cbacda88061c199573d624129f62a->leave($__internal_b43cf8287fa5ae1c9f6204a87e2e01908e7cbacda88061c199573d624129f62a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_436d05d595450ad083973d505207f9bf0b1d35a47a05e28afe0b84ced26f43b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436d05d595450ad083973d505207f9bf0b1d35a47a05e28afe0b84ced26f43b1->enter($__internal_436d05d595450ad083973d505207f9bf0b1d35a47a05e28afe0b84ced26f43b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6b919156a06264fc7ae68e12f61153f6721c36d595a6ab8a659314bf79d7df06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b919156a06264fc7ae68e12f61153f6721c36d595a6ab8a659314bf79d7df06->enter($__internal_6b919156a06264fc7ae68e12f61153f6721c36d595a6ab8a659314bf79d7df06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6b919156a06264fc7ae68e12f61153f6721c36d595a6ab8a659314bf79d7df06->leave($__internal_6b919156a06264fc7ae68e12f61153f6721c36d595a6ab8a659314bf79d7df06_prof);

        
        $__internal_436d05d595450ad083973d505207f9bf0b1d35a47a05e28afe0b84ced26f43b1->leave($__internal_436d05d595450ad083973d505207f9bf0b1d35a47a05e28afe0b84ced26f43b1_prof);

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
