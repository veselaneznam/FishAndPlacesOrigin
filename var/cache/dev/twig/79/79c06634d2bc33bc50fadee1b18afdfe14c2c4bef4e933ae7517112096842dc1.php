<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fe982a4ce697db0c487ccba0fa8f5bd420d5611bb38e9701fda5bd161dcb2e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_2483b4ef9e76e185b736d5a4a83ae189c6904d92bee9ac8d2b7216ca805805cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2483b4ef9e76e185b736d5a4a83ae189c6904d92bee9ac8d2b7216ca805805cc->enter($__internal_2483b4ef9e76e185b736d5a4a83ae189c6904d92bee9ac8d2b7216ca805805cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_cc0e115f7d4ef3c11c0190080f4f0080bde311cee4010a0dbfd006a098d5cf42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0e115f7d4ef3c11c0190080f4f0080bde311cee4010a0dbfd006a098d5cf42->enter($__internal_cc0e115f7d4ef3c11c0190080f4f0080bde311cee4010a0dbfd006a098d5cf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2483b4ef9e76e185b736d5a4a83ae189c6904d92bee9ac8d2b7216ca805805cc->leave($__internal_2483b4ef9e76e185b736d5a4a83ae189c6904d92bee9ac8d2b7216ca805805cc_prof);

        
        $__internal_cc0e115f7d4ef3c11c0190080f4f0080bde311cee4010a0dbfd006a098d5cf42->leave($__internal_cc0e115f7d4ef3c11c0190080f4f0080bde311cee4010a0dbfd006a098d5cf42_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_def05cf0d6e1d98c627b7256b33796ed848bc17a1ce95e7cf100bd53ee533eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def05cf0d6e1d98c627b7256b33796ed848bc17a1ce95e7cf100bd53ee533eb3->enter($__internal_def05cf0d6e1d98c627b7256b33796ed848bc17a1ce95e7cf100bd53ee533eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9bef123dafd3a38ffb07bdbf0afec5e9b8c107ce406dd61ccf5ac4dddf23177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bef123dafd3a38ffb07bdbf0afec5e9b8c107ce406dd61ccf5ac4dddf23177->enter($__internal_d9bef123dafd3a38ffb07bdbf0afec5e9b8c107ce406dd61ccf5ac4dddf23177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d9bef123dafd3a38ffb07bdbf0afec5e9b8c107ce406dd61ccf5ac4dddf23177->leave($__internal_d9bef123dafd3a38ffb07bdbf0afec5e9b8c107ce406dd61ccf5ac4dddf23177_prof);

        
        $__internal_def05cf0d6e1d98c627b7256b33796ed848bc17a1ce95e7cf100bd53ee533eb3->leave($__internal_def05cf0d6e1d98c627b7256b33796ed848bc17a1ce95e7cf100bd53ee533eb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
