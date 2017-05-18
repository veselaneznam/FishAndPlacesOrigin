<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c2e5e2a75433122c50ccce8212ba18e8a37e271a7295cbc66e1c1a845fe49f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_aa444d0226edfaeab7ccc50299c45d47b4ef25d5fd697424f856dda157c97878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa444d0226edfaeab7ccc50299c45d47b4ef25d5fd697424f856dda157c97878->enter($__internal_aa444d0226edfaeab7ccc50299c45d47b4ef25d5fd697424f856dda157c97878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_3b322bfc87d175f9c94c84413392acfb31f7502da4677122121e19f3df297c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b322bfc87d175f9c94c84413392acfb31f7502da4677122121e19f3df297c16->enter($__internal_3b322bfc87d175f9c94c84413392acfb31f7502da4677122121e19f3df297c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa444d0226edfaeab7ccc50299c45d47b4ef25d5fd697424f856dda157c97878->leave($__internal_aa444d0226edfaeab7ccc50299c45d47b4ef25d5fd697424f856dda157c97878_prof);

        
        $__internal_3b322bfc87d175f9c94c84413392acfb31f7502da4677122121e19f3df297c16->leave($__internal_3b322bfc87d175f9c94c84413392acfb31f7502da4677122121e19f3df297c16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8152bd264ecbb5822336758cf481e06d1fbb475bdeab136507be37bb06f79a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8152bd264ecbb5822336758cf481e06d1fbb475bdeab136507be37bb06f79a5b->enter($__internal_8152bd264ecbb5822336758cf481e06d1fbb475bdeab136507be37bb06f79a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87e035fc5dae5659527952298893ced98205e700536e79a5c6bc5ffc98cc9288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e035fc5dae5659527952298893ced98205e700536e79a5c6bc5ffc98cc9288->enter($__internal_87e035fc5dae5659527952298893ced98205e700536e79a5c6bc5ffc98cc9288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_87e035fc5dae5659527952298893ced98205e700536e79a5c6bc5ffc98cc9288->leave($__internal_87e035fc5dae5659527952298893ced98205e700536e79a5c6bc5ffc98cc9288_prof);

        
        $__internal_8152bd264ecbb5822336758cf481e06d1fbb475bdeab136507be37bb06f79a5b->leave($__internal_8152bd264ecbb5822336758cf481e06d1fbb475bdeab136507be37bb06f79a5b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
