<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_2560045784761d78b2542d229be38390fd159259a3a6229f28e5a3cca5cf3f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_2bd549256932008095a320ff1797b8fd28f2623de6a7ab1609f753506728845e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd549256932008095a320ff1797b8fd28f2623de6a7ab1609f753506728845e->enter($__internal_2bd549256932008095a320ff1797b8fd28f2623de6a7ab1609f753506728845e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_d056c7640c18d3dc32a0f739c4a4dd1f755d95d5d58fe55f9e60204ffdab014b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d056c7640c18d3dc32a0f739c4a4dd1f755d95d5d58fe55f9e60204ffdab014b->enter($__internal_d056c7640c18d3dc32a0f739c4a4dd1f755d95d5d58fe55f9e60204ffdab014b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd549256932008095a320ff1797b8fd28f2623de6a7ab1609f753506728845e->leave($__internal_2bd549256932008095a320ff1797b8fd28f2623de6a7ab1609f753506728845e_prof);

        
        $__internal_d056c7640c18d3dc32a0f739c4a4dd1f755d95d5d58fe55f9e60204ffdab014b->leave($__internal_d056c7640c18d3dc32a0f739c4a4dd1f755d95d5d58fe55f9e60204ffdab014b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f0fb91108e0ac03d99f3aa9e956e3e7f8585d41cc52d44296f0c57e22c499b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0fb91108e0ac03d99f3aa9e956e3e7f8585d41cc52d44296f0c57e22c499b3->enter($__internal_4f0fb91108e0ac03d99f3aa9e956e3e7f8585d41cc52d44296f0c57e22c499b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_198471f186022b169d9ed9420ee9616741b1b7247e28335da68b982d50246f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198471f186022b169d9ed9420ee9616741b1b7247e28335da68b982d50246f4a->enter($__internal_198471f186022b169d9ed9420ee9616741b1b7247e28335da68b982d50246f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_198471f186022b169d9ed9420ee9616741b1b7247e28335da68b982d50246f4a->leave($__internal_198471f186022b169d9ed9420ee9616741b1b7247e28335da68b982d50246f4a_prof);

        
        $__internal_4f0fb91108e0ac03d99f3aa9e956e3e7f8585d41cc52d44296f0c57e22c499b3->leave($__internal_4f0fb91108e0ac03d99f3aa9e956e3e7f8585d41cc52d44296f0c57e22c499b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
