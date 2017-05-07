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
        $__internal_1c0a557f5b0954cc893926f1f4d89c1ffd9c24710acea378de2ceb2812335ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0a557f5b0954cc893926f1f4d89c1ffd9c24710acea378de2ceb2812335ca3->enter($__internal_1c0a557f5b0954cc893926f1f4d89c1ffd9c24710acea378de2ceb2812335ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_497233c6fbd56686bc720dc4d8e319f19ee06c4a395556b62effb56cfef4644f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497233c6fbd56686bc720dc4d8e319f19ee06c4a395556b62effb56cfef4644f->enter($__internal_497233c6fbd56686bc720dc4d8e319f19ee06c4a395556b62effb56cfef4644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c0a557f5b0954cc893926f1f4d89c1ffd9c24710acea378de2ceb2812335ca3->leave($__internal_1c0a557f5b0954cc893926f1f4d89c1ffd9c24710acea378de2ceb2812335ca3_prof);

        
        $__internal_497233c6fbd56686bc720dc4d8e319f19ee06c4a395556b62effb56cfef4644f->leave($__internal_497233c6fbd56686bc720dc4d8e319f19ee06c4a395556b62effb56cfef4644f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06e6554437df8cf5c826386849a600ec3a721e94c1c29d0fead36c6353ff78b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e6554437df8cf5c826386849a600ec3a721e94c1c29d0fead36c6353ff78b2->enter($__internal_06e6554437df8cf5c826386849a600ec3a721e94c1c29d0fead36c6353ff78b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4508d8554d8ae51ce159129615dbee953c27b1994068b1fbadf46976b5b0173b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4508d8554d8ae51ce159129615dbee953c27b1994068b1fbadf46976b5b0173b->enter($__internal_4508d8554d8ae51ce159129615dbee953c27b1994068b1fbadf46976b5b0173b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_4508d8554d8ae51ce159129615dbee953c27b1994068b1fbadf46976b5b0173b->leave($__internal_4508d8554d8ae51ce159129615dbee953c27b1994068b1fbadf46976b5b0173b_prof);

        
        $__internal_06e6554437df8cf5c826386849a600ec3a721e94c1c29d0fead36c6353ff78b2->leave($__internal_06e6554437df8cf5c826386849a600ec3a721e94c1c29d0fead36c6353ff78b2_prof);

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
