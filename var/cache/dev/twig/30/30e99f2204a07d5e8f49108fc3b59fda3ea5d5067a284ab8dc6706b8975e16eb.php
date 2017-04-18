<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_88e5d7c750038bc9a8064067a60cbf096fbec323d329af59a9c7f7dec9b92998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_5608419e0e199efce0be8ec058c224f4d3da40d1200960def69e71fba81a946f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5608419e0e199efce0be8ec058c224f4d3da40d1200960def69e71fba81a946f->enter($__internal_5608419e0e199efce0be8ec058c224f4d3da40d1200960def69e71fba81a946f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_abfa8e8b9571a2c6a34e5a56392c4e72b2176e803a55b058d0630939fd14443f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfa8e8b9571a2c6a34e5a56392c4e72b2176e803a55b058d0630939fd14443f->enter($__internal_abfa8e8b9571a2c6a34e5a56392c4e72b2176e803a55b058d0630939fd14443f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5608419e0e199efce0be8ec058c224f4d3da40d1200960def69e71fba81a946f->leave($__internal_5608419e0e199efce0be8ec058c224f4d3da40d1200960def69e71fba81a946f_prof);

        
        $__internal_abfa8e8b9571a2c6a34e5a56392c4e72b2176e803a55b058d0630939fd14443f->leave($__internal_abfa8e8b9571a2c6a34e5a56392c4e72b2176e803a55b058d0630939fd14443f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6fefc8c032d349de3c40f401b9a9f72a830cf1d7212c11d445f03b9f4872ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fefc8c032d349de3c40f401b9a9f72a830cf1d7212c11d445f03b9f4872ac7->enter($__internal_c6fefc8c032d349de3c40f401b9a9f72a830cf1d7212c11d445f03b9f4872ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_069cf645d27542d6cde731a8b79d9dd8ff2f2e1ba5007bd0face39085d49cd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069cf645d27542d6cde731a8b79d9dd8ff2f2e1ba5007bd0face39085d49cd00->enter($__internal_069cf645d27542d6cde731a8b79d9dd8ff2f2e1ba5007bd0face39085d49cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_069cf645d27542d6cde731a8b79d9dd8ff2f2e1ba5007bd0face39085d49cd00->leave($__internal_069cf645d27542d6cde731a8b79d9dd8ff2f2e1ba5007bd0face39085d49cd00_prof);

        
        $__internal_c6fefc8c032d349de3c40f401b9a9f72a830cf1d7212c11d445f03b9f4872ac7->leave($__internal_c6fefc8c032d349de3c40f401b9a9f72a830cf1d7212c11d445f03b9f4872ac7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
