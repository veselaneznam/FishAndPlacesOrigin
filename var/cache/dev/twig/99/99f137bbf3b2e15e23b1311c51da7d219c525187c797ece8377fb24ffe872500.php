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
        $__internal_4cfaad9eaab99a429762c8831ad178852a5a965aabd70930dd0c1b12dd93c090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfaad9eaab99a429762c8831ad178852a5a965aabd70930dd0c1b12dd93c090->enter($__internal_4cfaad9eaab99a429762c8831ad178852a5a965aabd70930dd0c1b12dd93c090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_4a2a77d57f57300ef39b18a24e503453086a8d8f39cfb0470190b9223f2e0a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2a77d57f57300ef39b18a24e503453086a8d8f39cfb0470190b9223f2e0a6c->enter($__internal_4a2a77d57f57300ef39b18a24e503453086a8d8f39cfb0470190b9223f2e0a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4cfaad9eaab99a429762c8831ad178852a5a965aabd70930dd0c1b12dd93c090->leave($__internal_4cfaad9eaab99a429762c8831ad178852a5a965aabd70930dd0c1b12dd93c090_prof);

        
        $__internal_4a2a77d57f57300ef39b18a24e503453086a8d8f39cfb0470190b9223f2e0a6c->leave($__internal_4a2a77d57f57300ef39b18a24e503453086a8d8f39cfb0470190b9223f2e0a6c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4199359392d1373c37b7befea9f40745860f4b382ebdac956501b8ec2c2f6b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4199359392d1373c37b7befea9f40745860f4b382ebdac956501b8ec2c2f6b07->enter($__internal_4199359392d1373c37b7befea9f40745860f4b382ebdac956501b8ec2c2f6b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c0b6f9c4e0b4eb864522026ec40ab7fe01319dc95cedde6075b2ad6a67336ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b6f9c4e0b4eb864522026ec40ab7fe01319dc95cedde6075b2ad6a67336ce3->enter($__internal_c0b6f9c4e0b4eb864522026ec40ab7fe01319dc95cedde6075b2ad6a67336ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c0b6f9c4e0b4eb864522026ec40ab7fe01319dc95cedde6075b2ad6a67336ce3->leave($__internal_c0b6f9c4e0b4eb864522026ec40ab7fe01319dc95cedde6075b2ad6a67336ce3_prof);

        
        $__internal_4199359392d1373c37b7befea9f40745860f4b382ebdac956501b8ec2c2f6b07->leave($__internal_4199359392d1373c37b7befea9f40745860f4b382ebdac956501b8ec2c2f6b07_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e9b0bc3b2404238aec41b3b9446eda4f316409da1f0ac8924ece56b68ae16be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b0bc3b2404238aec41b3b9446eda4f316409da1f0ac8924ece56b68ae16be6->enter($__internal_e9b0bc3b2404238aec41b3b9446eda4f316409da1f0ac8924ece56b68ae16be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_630e59b7b7bbe635ee926b47b508a5cba31bae4a87ad577be3c8040dae14ba10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630e59b7b7bbe635ee926b47b508a5cba31bae4a87ad577be3c8040dae14ba10->enter($__internal_630e59b7b7bbe635ee926b47b508a5cba31bae4a87ad577be3c8040dae14ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_630e59b7b7bbe635ee926b47b508a5cba31bae4a87ad577be3c8040dae14ba10->leave($__internal_630e59b7b7bbe635ee926b47b508a5cba31bae4a87ad577be3c8040dae14ba10_prof);

        
        $__internal_e9b0bc3b2404238aec41b3b9446eda4f316409da1f0ac8924ece56b68ae16be6->leave($__internal_e9b0bc3b2404238aec41b3b9446eda4f316409da1f0ac8924ece56b68ae16be6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_14bcb664f19a984970d71d62928b00cbf8e1b5c3afdb644d336c258f5fb6cb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14bcb664f19a984970d71d62928b00cbf8e1b5c3afdb644d336c258f5fb6cb0f->enter($__internal_14bcb664f19a984970d71d62928b00cbf8e1b5c3afdb644d336c258f5fb6cb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_53e8cbb5052bef20baee46ad92130c8d38c058261de0a2e35a67aceb598e7350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e8cbb5052bef20baee46ad92130c8d38c058261de0a2e35a67aceb598e7350->enter($__internal_53e8cbb5052bef20baee46ad92130c8d38c058261de0a2e35a67aceb598e7350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_53e8cbb5052bef20baee46ad92130c8d38c058261de0a2e35a67aceb598e7350->leave($__internal_53e8cbb5052bef20baee46ad92130c8d38c058261de0a2e35a67aceb598e7350_prof);

        
        $__internal_14bcb664f19a984970d71d62928b00cbf8e1b5c3afdb644d336c258f5fb6cb0f->leave($__internal_14bcb664f19a984970d71d62928b00cbf8e1b5c3afdb644d336c258f5fb6cb0f_prof);

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
