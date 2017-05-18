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
        $__internal_d2de9510010b314f44b10b11789d76ab80144b4086b2e683df895a5a2abd39bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2de9510010b314f44b10b11789d76ab80144b4086b2e683df895a5a2abd39bd->enter($__internal_d2de9510010b314f44b10b11789d76ab80144b4086b2e683df895a5a2abd39bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_83041b777aea8cbad33b72bf70a84b44438345b1385f2ac75b135149925e66fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83041b777aea8cbad33b72bf70a84b44438345b1385f2ac75b135149925e66fd->enter($__internal_83041b777aea8cbad33b72bf70a84b44438345b1385f2ac75b135149925e66fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2de9510010b314f44b10b11789d76ab80144b4086b2e683df895a5a2abd39bd->leave($__internal_d2de9510010b314f44b10b11789d76ab80144b4086b2e683df895a5a2abd39bd_prof);

        
        $__internal_83041b777aea8cbad33b72bf70a84b44438345b1385f2ac75b135149925e66fd->leave($__internal_83041b777aea8cbad33b72bf70a84b44438345b1385f2ac75b135149925e66fd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c43367509535ae02fcdf3565e47c49726da10bef6890aca0e50e0e33fb40f9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43367509535ae02fcdf3565e47c49726da10bef6890aca0e50e0e33fb40f9b2->enter($__internal_c43367509535ae02fcdf3565e47c49726da10bef6890aca0e50e0e33fb40f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3949343832658c74e81ea9212b1805a21dfac301c3bc059c5c897868578cf9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3949343832658c74e81ea9212b1805a21dfac301c3bc059c5c897868578cf9b7->enter($__internal_3949343832658c74e81ea9212b1805a21dfac301c3bc059c5c897868578cf9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3949343832658c74e81ea9212b1805a21dfac301c3bc059c5c897868578cf9b7->leave($__internal_3949343832658c74e81ea9212b1805a21dfac301c3bc059c5c897868578cf9b7_prof);

        
        $__internal_c43367509535ae02fcdf3565e47c49726da10bef6890aca0e50e0e33fb40f9b2->leave($__internal_c43367509535ae02fcdf3565e47c49726da10bef6890aca0e50e0e33fb40f9b2_prof);

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
