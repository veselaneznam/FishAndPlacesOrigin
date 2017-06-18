<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_d0a396c4934be6c16fdafb82b399652cd046d30631c942aecc50df6c394fdacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_7d92f78784f747acefe9a4d24ebf2ea7f518c0749f676cff65b9a89216ac755f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d92f78784f747acefe9a4d24ebf2ea7f518c0749f676cff65b9a89216ac755f->enter($__internal_7d92f78784f747acefe9a4d24ebf2ea7f518c0749f676cff65b9a89216ac755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_df60e2069200a629c905e227b468d6735db09ca8b6d4c1971415d2c9e1a3b2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df60e2069200a629c905e227b468d6735db09ca8b6d4c1971415d2c9e1a3b2d0->enter($__internal_df60e2069200a629c905e227b468d6735db09ca8b6d4c1971415d2c9e1a3b2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d92f78784f747acefe9a4d24ebf2ea7f518c0749f676cff65b9a89216ac755f->leave($__internal_7d92f78784f747acefe9a4d24ebf2ea7f518c0749f676cff65b9a89216ac755f_prof);

        
        $__internal_df60e2069200a629c905e227b468d6735db09ca8b6d4c1971415d2c9e1a3b2d0->leave($__internal_df60e2069200a629c905e227b468d6735db09ca8b6d4c1971415d2c9e1a3b2d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7356aae70cd0db5bda82c4c063d8bb8bca9a720826ff4ebbcea3662b11616e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7356aae70cd0db5bda82c4c063d8bb8bca9a720826ff4ebbcea3662b11616e39->enter($__internal_7356aae70cd0db5bda82c4c063d8bb8bca9a720826ff4ebbcea3662b11616e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe061b082b8cbcc54f767802c908c6da87cfbd01a8c18053cf8f8c5795854437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe061b082b8cbcc54f767802c908c6da87cfbd01a8c18053cf8f8c5795854437->enter($__internal_fe061b082b8cbcc54f767802c908c6da87cfbd01a8c18053cf8f8c5795854437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_fe061b082b8cbcc54f767802c908c6da87cfbd01a8c18053cf8f8c5795854437->leave($__internal_fe061b082b8cbcc54f767802c908c6da87cfbd01a8c18053cf8f8c5795854437_prof);

        
        $__internal_7356aae70cd0db5bda82c4c063d8bb8bca9a720826ff4ebbcea3662b11616e39->leave($__internal_7356aae70cd0db5bda82c4c063d8bb8bca9a720826ff4ebbcea3662b11616e39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
