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
        $__internal_6a6301c93cb75a259c0c8cc016dd51c3c43f2b4431898a5550086b1e4159ab51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6301c93cb75a259c0c8cc016dd51c3c43f2b4431898a5550086b1e4159ab51->enter($__internal_6a6301c93cb75a259c0c8cc016dd51c3c43f2b4431898a5550086b1e4159ab51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_b77950de6903874e69d77e55f8eb9888369d3babac9621ba78f518473ce58b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77950de6903874e69d77e55f8eb9888369d3babac9621ba78f518473ce58b2c->enter($__internal_b77950de6903874e69d77e55f8eb9888369d3babac9621ba78f518473ce58b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6301c93cb75a259c0c8cc016dd51c3c43f2b4431898a5550086b1e4159ab51->leave($__internal_6a6301c93cb75a259c0c8cc016dd51c3c43f2b4431898a5550086b1e4159ab51_prof);

        
        $__internal_b77950de6903874e69d77e55f8eb9888369d3babac9621ba78f518473ce58b2c->leave($__internal_b77950de6903874e69d77e55f8eb9888369d3babac9621ba78f518473ce58b2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e82c892d3d7610b698a2006274232a3966e4b91b46bff4c4564f96cf3fd7733f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82c892d3d7610b698a2006274232a3966e4b91b46bff4c4564f96cf3fd7733f->enter($__internal_e82c892d3d7610b698a2006274232a3966e4b91b46bff4c4564f96cf3fd7733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d6e8971e175aeccf1ca54dd68b3f94cc00baf91b8a4b819a687cdc53a222e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6e8971e175aeccf1ca54dd68b3f94cc00baf91b8a4b819a687cdc53a222e53->enter($__internal_2d6e8971e175aeccf1ca54dd68b3f94cc00baf91b8a4b819a687cdc53a222e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_2d6e8971e175aeccf1ca54dd68b3f94cc00baf91b8a4b819a687cdc53a222e53->leave($__internal_2d6e8971e175aeccf1ca54dd68b3f94cc00baf91b8a4b819a687cdc53a222e53_prof);

        
        $__internal_e82c892d3d7610b698a2006274232a3966e4b91b46bff4c4564f96cf3fd7733f->leave($__internal_e82c892d3d7610b698a2006274232a3966e4b91b46bff4c4564f96cf3fd7733f_prof);

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
