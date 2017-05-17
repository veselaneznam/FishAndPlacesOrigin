<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5713d5dbf52fc02236b9536cdf90c71e0406c887cfd77fa56e148cab86315594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a43162f399cbad9a40382a60dc829fd7e052dbfd2d7ebcbafc98286635b6f8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43162f399cbad9a40382a60dc829fd7e052dbfd2d7ebcbafc98286635b6f8ca->enter($__internal_a43162f399cbad9a40382a60dc829fd7e052dbfd2d7ebcbafc98286635b6f8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_122be673b89190316b8848034afd876a1f5a50c6c11d9530dafe2761d3c14369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122be673b89190316b8848034afd876a1f5a50c6c11d9530dafe2761d3c14369->enter($__internal_122be673b89190316b8848034afd876a1f5a50c6c11d9530dafe2761d3c14369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43162f399cbad9a40382a60dc829fd7e052dbfd2d7ebcbafc98286635b6f8ca->leave($__internal_a43162f399cbad9a40382a60dc829fd7e052dbfd2d7ebcbafc98286635b6f8ca_prof);

        
        $__internal_122be673b89190316b8848034afd876a1f5a50c6c11d9530dafe2761d3c14369->leave($__internal_122be673b89190316b8848034afd876a1f5a50c6c11d9530dafe2761d3c14369_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9399498e9563c793ceed2f41c1d2252d809f082eee7c8bb469a2fc7e30ea9970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9399498e9563c793ceed2f41c1d2252d809f082eee7c8bb469a2fc7e30ea9970->enter($__internal_9399498e9563c793ceed2f41c1d2252d809f082eee7c8bb469a2fc7e30ea9970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18a1cc6e7b5385abe16b09ee5f64ae381153c37ade9c35270c8d92250eae6f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a1cc6e7b5385abe16b09ee5f64ae381153c37ade9c35270c8d92250eae6f21->enter($__internal_18a1cc6e7b5385abe16b09ee5f64ae381153c37ade9c35270c8d92250eae6f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_18a1cc6e7b5385abe16b09ee5f64ae381153c37ade9c35270c8d92250eae6f21->leave($__internal_18a1cc6e7b5385abe16b09ee5f64ae381153c37ade9c35270c8d92250eae6f21_prof);

        
        $__internal_9399498e9563c793ceed2f41c1d2252d809f082eee7c8bb469a2fc7e30ea9970->leave($__internal_9399498e9563c793ceed2f41c1d2252d809f082eee7c8bb469a2fc7e30ea9970_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
