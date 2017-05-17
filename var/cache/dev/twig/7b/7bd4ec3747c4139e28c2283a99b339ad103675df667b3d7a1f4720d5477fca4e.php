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
        $__internal_59fc70caff06fcf68af359658671fd43771b18175f49e3571fa298dedc86f9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fc70caff06fcf68af359658671fd43771b18175f49e3571fa298dedc86f9b7->enter($__internal_59fc70caff06fcf68af359658671fd43771b18175f49e3571fa298dedc86f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_437632263da864e6533f5e0f8e5d873c533a3f8612723d7616e1ab42426b12a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437632263da864e6533f5e0f8e5d873c533a3f8612723d7616e1ab42426b12a7->enter($__internal_437632263da864e6533f5e0f8e5d873c533a3f8612723d7616e1ab42426b12a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59fc70caff06fcf68af359658671fd43771b18175f49e3571fa298dedc86f9b7->leave($__internal_59fc70caff06fcf68af359658671fd43771b18175f49e3571fa298dedc86f9b7_prof);

        
        $__internal_437632263da864e6533f5e0f8e5d873c533a3f8612723d7616e1ab42426b12a7->leave($__internal_437632263da864e6533f5e0f8e5d873c533a3f8612723d7616e1ab42426b12a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4528fabab8279b50a961c90c94490aeec1279219ccc6603fbc17cfbac562155d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4528fabab8279b50a961c90c94490aeec1279219ccc6603fbc17cfbac562155d->enter($__internal_4528fabab8279b50a961c90c94490aeec1279219ccc6603fbc17cfbac562155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2226d459373dbae80c456fb1682b7f1f89be8a40faa1d20e94fa3a557360a9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2226d459373dbae80c456fb1682b7f1f89be8a40faa1d20e94fa3a557360a9e9->enter($__internal_2226d459373dbae80c456fb1682b7f1f89be8a40faa1d20e94fa3a557360a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2226d459373dbae80c456fb1682b7f1f89be8a40faa1d20e94fa3a557360a9e9->leave($__internal_2226d459373dbae80c456fb1682b7f1f89be8a40faa1d20e94fa3a557360a9e9_prof);

        
        $__internal_4528fabab8279b50a961c90c94490aeec1279219ccc6603fbc17cfbac562155d->leave($__internal_4528fabab8279b50a961c90c94490aeec1279219ccc6603fbc17cfbac562155d_prof);

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
