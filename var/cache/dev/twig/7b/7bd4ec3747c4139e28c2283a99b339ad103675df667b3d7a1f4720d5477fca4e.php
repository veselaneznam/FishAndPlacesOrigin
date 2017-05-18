<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b66db9a971b00fb5ae9d5f532a34e57306fed5421d984b04262a090a6ea39f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5c524e82d084afaa6be0410b2136b5d901a92ead8a1ecf2f0110a3d951a44680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c524e82d084afaa6be0410b2136b5d901a92ead8a1ecf2f0110a3d951a44680->enter($__internal_5c524e82d084afaa6be0410b2136b5d901a92ead8a1ecf2f0110a3d951a44680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_d46c3c7925f32137951e1cd7b259cc3c78b2af45d762bae631041c63b99644ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46c3c7925f32137951e1cd7b259cc3c78b2af45d762bae631041c63b99644ae->enter($__internal_d46c3c7925f32137951e1cd7b259cc3c78b2af45d762bae631041c63b99644ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c524e82d084afaa6be0410b2136b5d901a92ead8a1ecf2f0110a3d951a44680->leave($__internal_5c524e82d084afaa6be0410b2136b5d901a92ead8a1ecf2f0110a3d951a44680_prof);

        
        $__internal_d46c3c7925f32137951e1cd7b259cc3c78b2af45d762bae631041c63b99644ae->leave($__internal_d46c3c7925f32137951e1cd7b259cc3c78b2af45d762bae631041c63b99644ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_974972a6657995d5e4c1cdff094fe388156407b116d6a71656bac2cee5de8a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974972a6657995d5e4c1cdff094fe388156407b116d6a71656bac2cee5de8a0b->enter($__internal_974972a6657995d5e4c1cdff094fe388156407b116d6a71656bac2cee5de8a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc2ed6ef9390a12de579f6e35dabc61af9d70e94a689991989de02860a022c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2ed6ef9390a12de579f6e35dabc61af9d70e94a689991989de02860a022c3c->enter($__internal_fc2ed6ef9390a12de579f6e35dabc61af9d70e94a689991989de02860a022c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fc2ed6ef9390a12de579f6e35dabc61af9d70e94a689991989de02860a022c3c->leave($__internal_fc2ed6ef9390a12de579f6e35dabc61af9d70e94a689991989de02860a022c3c_prof);

        
        $__internal_974972a6657995d5e4c1cdff094fe388156407b116d6a71656bac2cee5de8a0b->leave($__internal_974972a6657995d5e4c1cdff094fe388156407b116d6a71656bac2cee5de8a0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
