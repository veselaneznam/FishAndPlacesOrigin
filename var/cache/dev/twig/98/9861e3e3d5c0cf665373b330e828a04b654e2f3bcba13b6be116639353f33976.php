<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_613c85a79f48dc494f45260aa2f00ce3cb473c98006291c6d168cbfbabb548ef extends Twig_Template
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
        $__internal_c24dddb133f33574e6e5dc6d5ed039989683aa506f95b40224e5daba78672412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24dddb133f33574e6e5dc6d5ed039989683aa506f95b40224e5daba78672412->enter($__internal_c24dddb133f33574e6e5dc6d5ed039989683aa506f95b40224e5daba78672412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_8519f08fed2f7260359ac477934d881782333ad337c2feeae32dda57a4e68eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8519f08fed2f7260359ac477934d881782333ad337c2feeae32dda57a4e68eed->enter($__internal_8519f08fed2f7260359ac477934d881782333ad337c2feeae32dda57a4e68eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c24dddb133f33574e6e5dc6d5ed039989683aa506f95b40224e5daba78672412->leave($__internal_c24dddb133f33574e6e5dc6d5ed039989683aa506f95b40224e5daba78672412_prof);

        
        $__internal_8519f08fed2f7260359ac477934d881782333ad337c2feeae32dda57a4e68eed->leave($__internal_8519f08fed2f7260359ac477934d881782333ad337c2feeae32dda57a4e68eed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29eba5247825270f9792d0415ab1df031e93e27cfab97ef9f1b2c5a40dfa2cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29eba5247825270f9792d0415ab1df031e93e27cfab97ef9f1b2c5a40dfa2cb0->enter($__internal_29eba5247825270f9792d0415ab1df031e93e27cfab97ef9f1b2c5a40dfa2cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4f27960f39500722bd714bf248f323b016202d5532a0c633a6e1cebda3139856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f27960f39500722bd714bf248f323b016202d5532a0c633a6e1cebda3139856->enter($__internal_4f27960f39500722bd714bf248f323b016202d5532a0c633a6e1cebda3139856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4f27960f39500722bd714bf248f323b016202d5532a0c633a6e1cebda3139856->leave($__internal_4f27960f39500722bd714bf248f323b016202d5532a0c633a6e1cebda3139856_prof);

        
        $__internal_29eba5247825270f9792d0415ab1df031e93e27cfab97ef9f1b2c5a40dfa2cb0->leave($__internal_29eba5247825270f9792d0415ab1df031e93e27cfab97ef9f1b2c5a40dfa2cb0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c6348e6474b0a29f7f19f9b60b92b9db71352102a116292405f2eaccad1b00cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6348e6474b0a29f7f19f9b60b92b9db71352102a116292405f2eaccad1b00cc->enter($__internal_c6348e6474b0a29f7f19f9b60b92b9db71352102a116292405f2eaccad1b00cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ca2dc598b629a31e2014144f4c773cfcb96eb86619b5e87ba1aa7b7e960ae043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2dc598b629a31e2014144f4c773cfcb96eb86619b5e87ba1aa7b7e960ae043->enter($__internal_ca2dc598b629a31e2014144f4c773cfcb96eb86619b5e87ba1aa7b7e960ae043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ca2dc598b629a31e2014144f4c773cfcb96eb86619b5e87ba1aa7b7e960ae043->leave($__internal_ca2dc598b629a31e2014144f4c773cfcb96eb86619b5e87ba1aa7b7e960ae043_prof);

        
        $__internal_c6348e6474b0a29f7f19f9b60b92b9db71352102a116292405f2eaccad1b00cc->leave($__internal_c6348e6474b0a29f7f19f9b60b92b9db71352102a116292405f2eaccad1b00cc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d796145958400db254bd1423e38f268c3c48b07307357db2520edb027b49b47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d796145958400db254bd1423e38f268c3c48b07307357db2520edb027b49b47c->enter($__internal_d796145958400db254bd1423e38f268c3c48b07307357db2520edb027b49b47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2ab95a3ad2a2a2f347fbb2a1270818266c0d0dd8ebe15c6d97496ff94f552326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab95a3ad2a2a2f347fbb2a1270818266c0d0dd8ebe15c6d97496ff94f552326->enter($__internal_2ab95a3ad2a2a2f347fbb2a1270818266c0d0dd8ebe15c6d97496ff94f552326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2ab95a3ad2a2a2f347fbb2a1270818266c0d0dd8ebe15c6d97496ff94f552326->leave($__internal_2ab95a3ad2a2a2f347fbb2a1270818266c0d0dd8ebe15c6d97496ff94f552326_prof);

        
        $__internal_d796145958400db254bd1423e38f268c3c48b07307357db2520edb027b49b47c->leave($__internal_d796145958400db254bd1423e38f268c3c48b07307357db2520edb027b49b47c_prof);

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
", "@FOSUser/Resetting/email.txt.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
