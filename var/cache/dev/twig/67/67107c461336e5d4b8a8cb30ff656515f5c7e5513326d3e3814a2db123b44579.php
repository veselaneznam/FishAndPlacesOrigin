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
        $__internal_892e183b98d6336a9c01934451cc20d38f909f54e315aeffb543089d3d1437ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892e183b98d6336a9c01934451cc20d38f909f54e315aeffb543089d3d1437ab->enter($__internal_892e183b98d6336a9c01934451cc20d38f909f54e315aeffb543089d3d1437ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_47e13f06e0611bdfac0a0d1c932e1ee787fb3bab85e5de305b17f8e2191f3cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e13f06e0611bdfac0a0d1c932e1ee787fb3bab85e5de305b17f8e2191f3cc1->enter($__internal_47e13f06e0611bdfac0a0d1c932e1ee787fb3bab85e5de305b17f8e2191f3cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_892e183b98d6336a9c01934451cc20d38f909f54e315aeffb543089d3d1437ab->leave($__internal_892e183b98d6336a9c01934451cc20d38f909f54e315aeffb543089d3d1437ab_prof);

        
        $__internal_47e13f06e0611bdfac0a0d1c932e1ee787fb3bab85e5de305b17f8e2191f3cc1->leave($__internal_47e13f06e0611bdfac0a0d1c932e1ee787fb3bab85e5de305b17f8e2191f3cc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3846b42925d5893033101080b23e2c435d011457d8297cc2b9aee4902bc35939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3846b42925d5893033101080b23e2c435d011457d8297cc2b9aee4902bc35939->enter($__internal_3846b42925d5893033101080b23e2c435d011457d8297cc2b9aee4902bc35939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6c1c4992c82f84c35ae4ad9d9ad9bd002353474e4deaf2d69e5d51d9a29c91c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1c4992c82f84c35ae4ad9d9ad9bd002353474e4deaf2d69e5d51d9a29c91c4->enter($__internal_6c1c4992c82f84c35ae4ad9d9ad9bd002353474e4deaf2d69e5d51d9a29c91c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6c1c4992c82f84c35ae4ad9d9ad9bd002353474e4deaf2d69e5d51d9a29c91c4->leave($__internal_6c1c4992c82f84c35ae4ad9d9ad9bd002353474e4deaf2d69e5d51d9a29c91c4_prof);

        
        $__internal_3846b42925d5893033101080b23e2c435d011457d8297cc2b9aee4902bc35939->leave($__internal_3846b42925d5893033101080b23e2c435d011457d8297cc2b9aee4902bc35939_prof);

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
