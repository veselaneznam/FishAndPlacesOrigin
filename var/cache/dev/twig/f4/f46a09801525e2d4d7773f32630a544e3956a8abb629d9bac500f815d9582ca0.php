<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a1cfa07c9579e527a6b2cb86e51773cf1be9a3dce326a96ab69f3eb45b858d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c0534d1e448f297d0201cedf217f89d7a6af24d97530b79f8571016dc467ff33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0534d1e448f297d0201cedf217f89d7a6af24d97530b79f8571016dc467ff33->enter($__internal_c0534d1e448f297d0201cedf217f89d7a6af24d97530b79f8571016dc467ff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d3c1879115e7b976a1354f988c36ef8de12a2d1cde6b6b2984e7da2e353e1eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c1879115e7b976a1354f988c36ef8de12a2d1cde6b6b2984e7da2e353e1eaf->enter($__internal_d3c1879115e7b976a1354f988c36ef8de12a2d1cde6b6b2984e7da2e353e1eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0534d1e448f297d0201cedf217f89d7a6af24d97530b79f8571016dc467ff33->leave($__internal_c0534d1e448f297d0201cedf217f89d7a6af24d97530b79f8571016dc467ff33_prof);

        
        $__internal_d3c1879115e7b976a1354f988c36ef8de12a2d1cde6b6b2984e7da2e353e1eaf->leave($__internal_d3c1879115e7b976a1354f988c36ef8de12a2d1cde6b6b2984e7da2e353e1eaf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_955daffffb8ea3e1871c4e21797d4cd48ba130a85f138787f96780035560c45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955daffffb8ea3e1871c4e21797d4cd48ba130a85f138787f96780035560c45e->enter($__internal_955daffffb8ea3e1871c4e21797d4cd48ba130a85f138787f96780035560c45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd101e80494a96eef01dbb00a4bda9c42185db3828cdce1e28c578117807523a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd101e80494a96eef01dbb00a4bda9c42185db3828cdce1e28c578117807523a->enter($__internal_bd101e80494a96eef01dbb00a4bda9c42185db3828cdce1e28c578117807523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bd101e80494a96eef01dbb00a4bda9c42185db3828cdce1e28c578117807523a->leave($__internal_bd101e80494a96eef01dbb00a4bda9c42185db3828cdce1e28c578117807523a_prof);

        
        $__internal_955daffffb8ea3e1871c4e21797d4cd48ba130a85f138787f96780035560c45e->leave($__internal_955daffffb8ea3e1871c4e21797d4cd48ba130a85f138787f96780035560c45e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
