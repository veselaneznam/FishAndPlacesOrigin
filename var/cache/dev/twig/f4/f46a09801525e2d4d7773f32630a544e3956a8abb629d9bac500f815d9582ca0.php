<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a1cfa07c9579e527a6b2cb86e51773cf1be9a3dce326a96ab69f3eb45b858d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_678d83ada7aa8bf86a0691a4a064b7cac7bf13471f2578d1247bd594dd610a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678d83ada7aa8bf86a0691a4a064b7cac7bf13471f2578d1247bd594dd610a6c->enter($__internal_678d83ada7aa8bf86a0691a4a064b7cac7bf13471f2578d1247bd594dd610a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_82d5290b076408f7d8e257924290b5d0bf082367cfd90d565582577aa21cec4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d5290b076408f7d8e257924290b5d0bf082367cfd90d565582577aa21cec4c->enter($__internal_82d5290b076408f7d8e257924290b5d0bf082367cfd90d565582577aa21cec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678d83ada7aa8bf86a0691a4a064b7cac7bf13471f2578d1247bd594dd610a6c->leave($__internal_678d83ada7aa8bf86a0691a4a064b7cac7bf13471f2578d1247bd594dd610a6c_prof);

        
        $__internal_82d5290b076408f7d8e257924290b5d0bf082367cfd90d565582577aa21cec4c->leave($__internal_82d5290b076408f7d8e257924290b5d0bf082367cfd90d565582577aa21cec4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d05c2d1835030e0123040af6f4e7a95b85361d9640afe02865f73a06d1c3a377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05c2d1835030e0123040af6f4e7a95b85361d9640afe02865f73a06d1c3a377->enter($__internal_d05c2d1835030e0123040af6f4e7a95b85361d9640afe02865f73a06d1c3a377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5cee08bcfc4abcdcd87f136981d83e9433736f4ad30156cd5276c7a80b09a811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cee08bcfc4abcdcd87f136981d83e9433736f4ad30156cd5276c7a80b09a811->enter($__internal_5cee08bcfc4abcdcd87f136981d83e9433736f4ad30156cd5276c7a80b09a811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5cee08bcfc4abcdcd87f136981d83e9433736f4ad30156cd5276c7a80b09a811->leave($__internal_5cee08bcfc4abcdcd87f136981d83e9433736f4ad30156cd5276c7a80b09a811_prof);

        
        $__internal_d05c2d1835030e0123040af6f4e7a95b85361d9640afe02865f73a06d1c3a377->leave($__internal_d05c2d1835030e0123040af6f4e7a95b85361d9640afe02865f73a06d1c3a377_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
