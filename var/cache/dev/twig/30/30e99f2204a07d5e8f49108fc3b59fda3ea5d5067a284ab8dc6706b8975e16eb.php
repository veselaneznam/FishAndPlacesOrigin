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
        $__internal_6fee58f5e11f75cc367e3df7275e95126aac6ac218a960ca973e611981bf7e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fee58f5e11f75cc367e3df7275e95126aac6ac218a960ca973e611981bf7e24->enter($__internal_6fee58f5e11f75cc367e3df7275e95126aac6ac218a960ca973e611981bf7e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_cdff030828c2279217c584dc6faf5c1113f816d274a44e3ea0ed81f1443728e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdff030828c2279217c584dc6faf5c1113f816d274a44e3ea0ed81f1443728e8->enter($__internal_cdff030828c2279217c584dc6faf5c1113f816d274a44e3ea0ed81f1443728e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fee58f5e11f75cc367e3df7275e95126aac6ac218a960ca973e611981bf7e24->leave($__internal_6fee58f5e11f75cc367e3df7275e95126aac6ac218a960ca973e611981bf7e24_prof);

        
        $__internal_cdff030828c2279217c584dc6faf5c1113f816d274a44e3ea0ed81f1443728e8->leave($__internal_cdff030828c2279217c584dc6faf5c1113f816d274a44e3ea0ed81f1443728e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_608d5c80dd14ae48984054b7e5e98571106a4b2190e1c5463a9bdc78a67940d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608d5c80dd14ae48984054b7e5e98571106a4b2190e1c5463a9bdc78a67940d1->enter($__internal_608d5c80dd14ae48984054b7e5e98571106a4b2190e1c5463a9bdc78a67940d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1326385fb44f981f0fb5007652d04330778ddabb1fa0bc95153020824f449e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1326385fb44f981f0fb5007652d04330778ddabb1fa0bc95153020824f449e0->enter($__internal_b1326385fb44f981f0fb5007652d04330778ddabb1fa0bc95153020824f449e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b1326385fb44f981f0fb5007652d04330778ddabb1fa0bc95153020824f449e0->leave($__internal_b1326385fb44f981f0fb5007652d04330778ddabb1fa0bc95153020824f449e0_prof);

        
        $__internal_608d5c80dd14ae48984054b7e5e98571106a4b2190e1c5463a9bdc78a67940d1->leave($__internal_608d5c80dd14ae48984054b7e5e98571106a4b2190e1c5463a9bdc78a67940d1_prof);

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
