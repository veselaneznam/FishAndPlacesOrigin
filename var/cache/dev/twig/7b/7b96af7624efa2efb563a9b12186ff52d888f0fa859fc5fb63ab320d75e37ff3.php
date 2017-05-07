<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2f386bb191a4896cb16d4d0822c6e351f99bc89765eabfe1f04d8f4af98728b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_603d614eda418cb72e049c5fb07efe48660ed782f28655547d83ebc4b714967d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603d614eda418cb72e049c5fb07efe48660ed782f28655547d83ebc4b714967d->enter($__internal_603d614eda418cb72e049c5fb07efe48660ed782f28655547d83ebc4b714967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_c2db084f405b4bac412c7412134fc61440fd33a17f31bc1e9e0015389bbb8ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2db084f405b4bac412c7412134fc61440fd33a17f31bc1e9e0015389bbb8ca1->enter($__internal_c2db084f405b4bac412c7412134fc61440fd33a17f31bc1e9e0015389bbb8ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603d614eda418cb72e049c5fb07efe48660ed782f28655547d83ebc4b714967d->leave($__internal_603d614eda418cb72e049c5fb07efe48660ed782f28655547d83ebc4b714967d_prof);

        
        $__internal_c2db084f405b4bac412c7412134fc61440fd33a17f31bc1e9e0015389bbb8ca1->leave($__internal_c2db084f405b4bac412c7412134fc61440fd33a17f31bc1e9e0015389bbb8ca1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49a31f8fdc67230747ecb72a35e747447e41d8a7090f95d4456961e13f9d4025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a31f8fdc67230747ecb72a35e747447e41d8a7090f95d4456961e13f9d4025->enter($__internal_49a31f8fdc67230747ecb72a35e747447e41d8a7090f95d4456961e13f9d4025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0374ad075ce8499578e170e84cb66c1cd43f12ba557f3dc78fba0faff4c198a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0374ad075ce8499578e170e84cb66c1cd43f12ba557f3dc78fba0faff4c198a7->enter($__internal_0374ad075ce8499578e170e84cb66c1cd43f12ba557f3dc78fba0faff4c198a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0374ad075ce8499578e170e84cb66c1cd43f12ba557f3dc78fba0faff4c198a7->leave($__internal_0374ad075ce8499578e170e84cb66c1cd43f12ba557f3dc78fba0faff4c198a7_prof);

        
        $__internal_49a31f8fdc67230747ecb72a35e747447e41d8a7090f95d4456961e13f9d4025->leave($__internal_49a31f8fdc67230747ecb72a35e747447e41d8a7090f95d4456961e13f9d4025_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
