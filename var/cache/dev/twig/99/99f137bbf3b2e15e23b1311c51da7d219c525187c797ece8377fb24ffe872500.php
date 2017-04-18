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
        $__internal_51dffacc5a624550bb980e365bcf68fe65ae28ba44b60c298e5585e1714ef7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51dffacc5a624550bb980e365bcf68fe65ae28ba44b60c298e5585e1714ef7d7->enter($__internal_51dffacc5a624550bb980e365bcf68fe65ae28ba44b60c298e5585e1714ef7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_68282bb82d2571611d782e46cde04cb585a1529d42230520c705f77025f3336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68282bb82d2571611d782e46cde04cb585a1529d42230520c705f77025f3336c->enter($__internal_68282bb82d2571611d782e46cde04cb585a1529d42230520c705f77025f3336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_51dffacc5a624550bb980e365bcf68fe65ae28ba44b60c298e5585e1714ef7d7->leave($__internal_51dffacc5a624550bb980e365bcf68fe65ae28ba44b60c298e5585e1714ef7d7_prof);

        
        $__internal_68282bb82d2571611d782e46cde04cb585a1529d42230520c705f77025f3336c->leave($__internal_68282bb82d2571611d782e46cde04cb585a1529d42230520c705f77025f3336c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a1ebc4e3b2a87a69fa6ac6b42dc88dbfcfd8409c63766e3ac60349b8c3e4f357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ebc4e3b2a87a69fa6ac6b42dc88dbfcfd8409c63766e3ac60349b8c3e4f357->enter($__internal_a1ebc4e3b2a87a69fa6ac6b42dc88dbfcfd8409c63766e3ac60349b8c3e4f357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_abfdc0406027a1e5b535bc8fa0789b2d8c7c227d4b2d9e21402a82bd320a0d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfdc0406027a1e5b535bc8fa0789b2d8c7c227d4b2d9e21402a82bd320a0d6d->enter($__internal_abfdc0406027a1e5b535bc8fa0789b2d8c7c227d4b2d9e21402a82bd320a0d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_abfdc0406027a1e5b535bc8fa0789b2d8c7c227d4b2d9e21402a82bd320a0d6d->leave($__internal_abfdc0406027a1e5b535bc8fa0789b2d8c7c227d4b2d9e21402a82bd320a0d6d_prof);

        
        $__internal_a1ebc4e3b2a87a69fa6ac6b42dc88dbfcfd8409c63766e3ac60349b8c3e4f357->leave($__internal_a1ebc4e3b2a87a69fa6ac6b42dc88dbfcfd8409c63766e3ac60349b8c3e4f357_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b649e87b11da94b028f84cb33e4f89a4535fe25dfa6bd909cba18e0d5602b81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b649e87b11da94b028f84cb33e4f89a4535fe25dfa6bd909cba18e0d5602b81a->enter($__internal_b649e87b11da94b028f84cb33e4f89a4535fe25dfa6bd909cba18e0d5602b81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7f200ab54e15705cbd8a05341e54b78a0a2a36e2b1739c6d6d8a9345ba35831c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f200ab54e15705cbd8a05341e54b78a0a2a36e2b1739c6d6d8a9345ba35831c->enter($__internal_7f200ab54e15705cbd8a05341e54b78a0a2a36e2b1739c6d6d8a9345ba35831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f200ab54e15705cbd8a05341e54b78a0a2a36e2b1739c6d6d8a9345ba35831c->leave($__internal_7f200ab54e15705cbd8a05341e54b78a0a2a36e2b1739c6d6d8a9345ba35831c_prof);

        
        $__internal_b649e87b11da94b028f84cb33e4f89a4535fe25dfa6bd909cba18e0d5602b81a->leave($__internal_b649e87b11da94b028f84cb33e4f89a4535fe25dfa6bd909cba18e0d5602b81a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f6f436ecf853fab83669d126b863ebaf1250600f53b38f3a5c7d64a875c23484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f436ecf853fab83669d126b863ebaf1250600f53b38f3a5c7d64a875c23484->enter($__internal_f6f436ecf853fab83669d126b863ebaf1250600f53b38f3a5c7d64a875c23484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e3bf6d7eec36d06e09f97a6186769875c8471cb891a7a9c8425c74cdb28d1fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bf6d7eec36d06e09f97a6186769875c8471cb891a7a9c8425c74cdb28d1fd5->enter($__internal_e3bf6d7eec36d06e09f97a6186769875c8471cb891a7a9c8425c74cdb28d1fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e3bf6d7eec36d06e09f97a6186769875c8471cb891a7a9c8425c74cdb28d1fd5->leave($__internal_e3bf6d7eec36d06e09f97a6186769875c8471cb891a7a9c8425c74cdb28d1fd5_prof);

        
        $__internal_f6f436ecf853fab83669d126b863ebaf1250600f53b38f3a5c7d64a875c23484->leave($__internal_f6f436ecf853fab83669d126b863ebaf1250600f53b38f3a5c7d64a875c23484_prof);

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
