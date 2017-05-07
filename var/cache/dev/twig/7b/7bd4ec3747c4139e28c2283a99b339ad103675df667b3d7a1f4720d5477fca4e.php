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
        $__internal_84b9c6f532a226618b964b425ccb225f365fdcbaf675c30515d0fe70295f2875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b9c6f532a226618b964b425ccb225f365fdcbaf675c30515d0fe70295f2875->enter($__internal_84b9c6f532a226618b964b425ccb225f365fdcbaf675c30515d0fe70295f2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_4bb7f3217c22e5b6093e030fef2964cb91f272e44abd4d9ef3c50df85a6d685a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb7f3217c22e5b6093e030fef2964cb91f272e44abd4d9ef3c50df85a6d685a->enter($__internal_4bb7f3217c22e5b6093e030fef2964cb91f272e44abd4d9ef3c50df85a6d685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b9c6f532a226618b964b425ccb225f365fdcbaf675c30515d0fe70295f2875->leave($__internal_84b9c6f532a226618b964b425ccb225f365fdcbaf675c30515d0fe70295f2875_prof);

        
        $__internal_4bb7f3217c22e5b6093e030fef2964cb91f272e44abd4d9ef3c50df85a6d685a->leave($__internal_4bb7f3217c22e5b6093e030fef2964cb91f272e44abd4d9ef3c50df85a6d685a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4439154dd6dea1354836e0de34273caab5966199fcc7b74dcd05f0671f1d1559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4439154dd6dea1354836e0de34273caab5966199fcc7b74dcd05f0671f1d1559->enter($__internal_4439154dd6dea1354836e0de34273caab5966199fcc7b74dcd05f0671f1d1559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_187a82238555ff9accdef0f48d599f8674b0721248a2d404d3e6ae295adab643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187a82238555ff9accdef0f48d599f8674b0721248a2d404d3e6ae295adab643->enter($__internal_187a82238555ff9accdef0f48d599f8674b0721248a2d404d3e6ae295adab643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_187a82238555ff9accdef0f48d599f8674b0721248a2d404d3e6ae295adab643->leave($__internal_187a82238555ff9accdef0f48d599f8674b0721248a2d404d3e6ae295adab643_prof);

        
        $__internal_4439154dd6dea1354836e0de34273caab5966199fcc7b74dcd05f0671f1d1559->leave($__internal_4439154dd6dea1354836e0de34273caab5966199fcc7b74dcd05f0671f1d1559_prof);

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
