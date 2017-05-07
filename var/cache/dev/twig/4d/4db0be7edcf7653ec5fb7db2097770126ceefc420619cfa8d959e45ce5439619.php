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
        $__internal_69715943fe4408cf37a6033fe7402c688c404be2156d973783a50d276ca0123f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69715943fe4408cf37a6033fe7402c688c404be2156d973783a50d276ca0123f->enter($__internal_69715943fe4408cf37a6033fe7402c688c404be2156d973783a50d276ca0123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_da23acc6a228fa054da7751ce3ab1e49069e2efc24d36800211b8bf38ea88621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da23acc6a228fa054da7751ce3ab1e49069e2efc24d36800211b8bf38ea88621->enter($__internal_da23acc6a228fa054da7751ce3ab1e49069e2efc24d36800211b8bf38ea88621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69715943fe4408cf37a6033fe7402c688c404be2156d973783a50d276ca0123f->leave($__internal_69715943fe4408cf37a6033fe7402c688c404be2156d973783a50d276ca0123f_prof);

        
        $__internal_da23acc6a228fa054da7751ce3ab1e49069e2efc24d36800211b8bf38ea88621->leave($__internal_da23acc6a228fa054da7751ce3ab1e49069e2efc24d36800211b8bf38ea88621_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79600cd053b770ea668befa6014119a4b88d39e75056fa37aa478ff6b3cc46c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79600cd053b770ea668befa6014119a4b88d39e75056fa37aa478ff6b3cc46c5->enter($__internal_79600cd053b770ea668befa6014119a4b88d39e75056fa37aa478ff6b3cc46c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ddcbf967a261ca61ad474caf5628fc46910088b4bc1f29e5a31ccd0d7bc1262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddcbf967a261ca61ad474caf5628fc46910088b4bc1f29e5a31ccd0d7bc1262->enter($__internal_6ddcbf967a261ca61ad474caf5628fc46910088b4bc1f29e5a31ccd0d7bc1262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6ddcbf967a261ca61ad474caf5628fc46910088b4bc1f29e5a31ccd0d7bc1262->leave($__internal_6ddcbf967a261ca61ad474caf5628fc46910088b4bc1f29e5a31ccd0d7bc1262_prof);

        
        $__internal_79600cd053b770ea668befa6014119a4b88d39e75056fa37aa478ff6b3cc46c5->leave($__internal_79600cd053b770ea668befa6014119a4b88d39e75056fa37aa478ff6b3cc46c5_prof);

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
