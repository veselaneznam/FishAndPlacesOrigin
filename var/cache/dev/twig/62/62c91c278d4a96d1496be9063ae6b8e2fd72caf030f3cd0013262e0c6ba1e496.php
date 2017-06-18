<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bf8d6659b3c9a16885548edd3e27916f07bf00fbd201d1bd906db655cb56ccb3 extends Twig_Template
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
        $__internal_74a27832f2288f70d39c672e24cca685e81c364d8634b20cd4c953d22d383fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a27832f2288f70d39c672e24cca685e81c364d8634b20cd4c953d22d383fa4->enter($__internal_74a27832f2288f70d39c672e24cca685e81c364d8634b20cd4c953d22d383fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_30ba6f04463aa7787ab6e02910dcf61fd6cd3552a04d373046ec3c5fec185908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ba6f04463aa7787ab6e02910dcf61fd6cd3552a04d373046ec3c5fec185908->enter($__internal_30ba6f04463aa7787ab6e02910dcf61fd6cd3552a04d373046ec3c5fec185908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74a27832f2288f70d39c672e24cca685e81c364d8634b20cd4c953d22d383fa4->leave($__internal_74a27832f2288f70d39c672e24cca685e81c364d8634b20cd4c953d22d383fa4_prof);

        
        $__internal_30ba6f04463aa7787ab6e02910dcf61fd6cd3552a04d373046ec3c5fec185908->leave($__internal_30ba6f04463aa7787ab6e02910dcf61fd6cd3552a04d373046ec3c5fec185908_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf9e532cd0d71851dc1602f2b63618e45a6ef6f4405befb1344658b7ac44e33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9e532cd0d71851dc1602f2b63618e45a6ef6f4405befb1344658b7ac44e33b->enter($__internal_bf9e532cd0d71851dc1602f2b63618e45a6ef6f4405befb1344658b7ac44e33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84fae275f79c8b88f3924dd4b787423e057bbc7c30bd988cb405792b8ab6fb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fae275f79c8b88f3924dd4b787423e057bbc7c30bd988cb405792b8ab6fb28->enter($__internal_84fae275f79c8b88f3924dd4b787423e057bbc7c30bd988cb405792b8ab6fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_84fae275f79c8b88f3924dd4b787423e057bbc7c30bd988cb405792b8ab6fb28->leave($__internal_84fae275f79c8b88f3924dd4b787423e057bbc7c30bd988cb405792b8ab6fb28_prof);

        
        $__internal_bf9e532cd0d71851dc1602f2b63618e45a6ef6f4405befb1344658b7ac44e33b->leave($__internal_bf9e532cd0d71851dc1602f2b63618e45a6ef6f4405befb1344658b7ac44e33b_prof);

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
", "@FOSUser/Security/login.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
