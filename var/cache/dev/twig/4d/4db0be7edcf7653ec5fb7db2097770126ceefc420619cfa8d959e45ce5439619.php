<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2fe6a8def64c8d9f19bc8a6f27a5a4f94ccf5c7b4eefa06e9c76265a3af3f80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_3009cebe7853dd675eed44b55f6d95f1b6a6fa79efa9065f649d9e43bc360e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3009cebe7853dd675eed44b55f6d95f1b6a6fa79efa9065f649d9e43bc360e9b->enter($__internal_3009cebe7853dd675eed44b55f6d95f1b6a6fa79efa9065f649d9e43bc360e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_c20bb050c6913aeade1ec1fa2ee8ae8df8c517868c73e92164a6c0a175077b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20bb050c6913aeade1ec1fa2ee8ae8df8c517868c73e92164a6c0a175077b55->enter($__internal_c20bb050c6913aeade1ec1fa2ee8ae8df8c517868c73e92164a6c0a175077b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3009cebe7853dd675eed44b55f6d95f1b6a6fa79efa9065f649d9e43bc360e9b->leave($__internal_3009cebe7853dd675eed44b55f6d95f1b6a6fa79efa9065f649d9e43bc360e9b_prof);

        
        $__internal_c20bb050c6913aeade1ec1fa2ee8ae8df8c517868c73e92164a6c0a175077b55->leave($__internal_c20bb050c6913aeade1ec1fa2ee8ae8df8c517868c73e92164a6c0a175077b55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91065ce3390c25d1c674be034ec3660449100e0fd8ac00bd3a200d15028ecc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91065ce3390c25d1c674be034ec3660449100e0fd8ac00bd3a200d15028ecc51->enter($__internal_91065ce3390c25d1c674be034ec3660449100e0fd8ac00bd3a200d15028ecc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1268fb2378e82bd083dd3ba385c2a4d35bb181e019ce9fc37c373476fc98591d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1268fb2378e82bd083dd3ba385c2a4d35bb181e019ce9fc37c373476fc98591d->enter($__internal_1268fb2378e82bd083dd3ba385c2a4d35bb181e019ce9fc37c373476fc98591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1268fb2378e82bd083dd3ba385c2a4d35bb181e019ce9fc37c373476fc98591d->leave($__internal_1268fb2378e82bd083dd3ba385c2a4d35bb181e019ce9fc37c373476fc98591d_prof);

        
        $__internal_91065ce3390c25d1c674be034ec3660449100e0fd8ac00bd3a200d15028ecc51->leave($__internal_91065ce3390c25d1c674be034ec3660449100e0fd8ac00bd3a200d15028ecc51_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
