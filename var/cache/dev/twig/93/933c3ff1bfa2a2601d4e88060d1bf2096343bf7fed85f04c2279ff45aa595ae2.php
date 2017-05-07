<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2b9e04335c6b4e56f9afaecff1739343db1c7b09ad65d18e732907ba39c04313 extends Twig_Template
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
        $__internal_1ea9c68e00696fedcb5725ef7f66b0e4084895e4ecb6d644890aa06e844d1b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea9c68e00696fedcb5725ef7f66b0e4084895e4ecb6d644890aa06e844d1b2c->enter($__internal_1ea9c68e00696fedcb5725ef7f66b0e4084895e4ecb6d644890aa06e844d1b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_26cdf6ffca30f19b02982b40efe1405bc84afd842dff38845589b32731353e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cdf6ffca30f19b02982b40efe1405bc84afd842dff38845589b32731353e6d->enter($__internal_26cdf6ffca30f19b02982b40efe1405bc84afd842dff38845589b32731353e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea9c68e00696fedcb5725ef7f66b0e4084895e4ecb6d644890aa06e844d1b2c->leave($__internal_1ea9c68e00696fedcb5725ef7f66b0e4084895e4ecb6d644890aa06e844d1b2c_prof);

        
        $__internal_26cdf6ffca30f19b02982b40efe1405bc84afd842dff38845589b32731353e6d->leave($__internal_26cdf6ffca30f19b02982b40efe1405bc84afd842dff38845589b32731353e6d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75e432292fbdca84210d8edec3a3e5591822f0cd9ae4bc3063fe4554dfc51deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e432292fbdca84210d8edec3a3e5591822f0cd9ae4bc3063fe4554dfc51deb->enter($__internal_75e432292fbdca84210d8edec3a3e5591822f0cd9ae4bc3063fe4554dfc51deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef20bcb0e16f98e11047d5bed0c39209131cf0b383206dd037dbe8b5a2b412a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef20bcb0e16f98e11047d5bed0c39209131cf0b383206dd037dbe8b5a2b412a3->enter($__internal_ef20bcb0e16f98e11047d5bed0c39209131cf0b383206dd037dbe8b5a2b412a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ef20bcb0e16f98e11047d5bed0c39209131cf0b383206dd037dbe8b5a2b412a3->leave($__internal_ef20bcb0e16f98e11047d5bed0c39209131cf0b383206dd037dbe8b5a2b412a3_prof);

        
        $__internal_75e432292fbdca84210d8edec3a3e5591822f0cd9ae4bc3063fe4554dfc51deb->leave($__internal_75e432292fbdca84210d8edec3a3e5591822f0cd9ae4bc3063fe4554dfc51deb_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
