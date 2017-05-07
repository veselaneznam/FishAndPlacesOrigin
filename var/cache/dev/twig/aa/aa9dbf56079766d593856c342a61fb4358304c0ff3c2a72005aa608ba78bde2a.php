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
        $__internal_6dc363fa8c23f337d5e0c1e41f709053f420c99a323d3e6adbfae825216de06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc363fa8c23f337d5e0c1e41f709053f420c99a323d3e6adbfae825216de06f->enter($__internal_6dc363fa8c23f337d5e0c1e41f709053f420c99a323d3e6adbfae825216de06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_0ee4c4b8571d38d639fc6b82087edf37d81e676b24aefcd8eec1462ab6e6d312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee4c4b8571d38d639fc6b82087edf37d81e676b24aefcd8eec1462ab6e6d312->enter($__internal_0ee4c4b8571d38d639fc6b82087edf37d81e676b24aefcd8eec1462ab6e6d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6dc363fa8c23f337d5e0c1e41f709053f420c99a323d3e6adbfae825216de06f->leave($__internal_6dc363fa8c23f337d5e0c1e41f709053f420c99a323d3e6adbfae825216de06f_prof);

        
        $__internal_0ee4c4b8571d38d639fc6b82087edf37d81e676b24aefcd8eec1462ab6e6d312->leave($__internal_0ee4c4b8571d38d639fc6b82087edf37d81e676b24aefcd8eec1462ab6e6d312_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2c2fade5782ded99353ddd1acbdd13f738d1e83fbddad548125163be85acf183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2fade5782ded99353ddd1acbdd13f738d1e83fbddad548125163be85acf183->enter($__internal_2c2fade5782ded99353ddd1acbdd13f738d1e83fbddad548125163be85acf183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3656a61e1bbbaba25f388292fad72a3622634132957c713bfc6119a3be45c9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3656a61e1bbbaba25f388292fad72a3622634132957c713bfc6119a3be45c9c2->enter($__internal_3656a61e1bbbaba25f388292fad72a3622634132957c713bfc6119a3be45c9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3656a61e1bbbaba25f388292fad72a3622634132957c713bfc6119a3be45c9c2->leave($__internal_3656a61e1bbbaba25f388292fad72a3622634132957c713bfc6119a3be45c9c2_prof);

        
        $__internal_2c2fade5782ded99353ddd1acbdd13f738d1e83fbddad548125163be85acf183->leave($__internal_2c2fade5782ded99353ddd1acbdd13f738d1e83fbddad548125163be85acf183_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_86769877cd92400586434e521e0935506f8b642b17cf8d677d90e3e15a5c1ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86769877cd92400586434e521e0935506f8b642b17cf8d677d90e3e15a5c1ca8->enter($__internal_86769877cd92400586434e521e0935506f8b642b17cf8d677d90e3e15a5c1ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_fc5d120f039cc45717e2a1382fe0373f9dde267d8585ae3976cce995defa27be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5d120f039cc45717e2a1382fe0373f9dde267d8585ae3976cce995defa27be->enter($__internal_fc5d120f039cc45717e2a1382fe0373f9dde267d8585ae3976cce995defa27be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fc5d120f039cc45717e2a1382fe0373f9dde267d8585ae3976cce995defa27be->leave($__internal_fc5d120f039cc45717e2a1382fe0373f9dde267d8585ae3976cce995defa27be_prof);

        
        $__internal_86769877cd92400586434e521e0935506f8b642b17cf8d677d90e3e15a5c1ca8->leave($__internal_86769877cd92400586434e521e0935506f8b642b17cf8d677d90e3e15a5c1ca8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d3bd81d727019755d87a2a91ae44bf5a3779481adf51963fd0af5028877a74a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bd81d727019755d87a2a91ae44bf5a3779481adf51963fd0af5028877a74a2->enter($__internal_d3bd81d727019755d87a2a91ae44bf5a3779481adf51963fd0af5028877a74a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3f824aa606ef8f954011e067f15b415d1eccc6ec0c00f3d08a81593682e60a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f824aa606ef8f954011e067f15b415d1eccc6ec0c00f3d08a81593682e60a99->enter($__internal_3f824aa606ef8f954011e067f15b415d1eccc6ec0c00f3d08a81593682e60a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3f824aa606ef8f954011e067f15b415d1eccc6ec0c00f3d08a81593682e60a99->leave($__internal_3f824aa606ef8f954011e067f15b415d1eccc6ec0c00f3d08a81593682e60a99_prof);

        
        $__internal_d3bd81d727019755d87a2a91ae44bf5a3779481adf51963fd0af5028877a74a2->leave($__internal_d3bd81d727019755d87a2a91ae44bf5a3779481adf51963fd0af5028877a74a2_prof);

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
