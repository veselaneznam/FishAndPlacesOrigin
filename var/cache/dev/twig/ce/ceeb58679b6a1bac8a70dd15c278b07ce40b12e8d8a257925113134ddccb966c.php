<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_93fe30208f2b6cdb57378f1eb2f5fba659bc7573e289106756cbb549e61d28a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f57ed8fbbb2f311ae674f363158ef11982e0b849001724275a2d2d7c1d1a5b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57ed8fbbb2f311ae674f363158ef11982e0b849001724275a2d2d7c1d1a5b94->enter($__internal_f57ed8fbbb2f311ae674f363158ef11982e0b849001724275a2d2d7c1d1a5b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_3c6fa376bbf2f0cbbe9925677978207da70905da31070674c443e2adab46a704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6fa376bbf2f0cbbe9925677978207da70905da31070674c443e2adab46a704->enter($__internal_3c6fa376bbf2f0cbbe9925677978207da70905da31070674c443e2adab46a704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f57ed8fbbb2f311ae674f363158ef11982e0b849001724275a2d2d7c1d1a5b94->leave($__internal_f57ed8fbbb2f311ae674f363158ef11982e0b849001724275a2d2d7c1d1a5b94_prof);

        
        $__internal_3c6fa376bbf2f0cbbe9925677978207da70905da31070674c443e2adab46a704->leave($__internal_3c6fa376bbf2f0cbbe9925677978207da70905da31070674c443e2adab46a704_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eac2042d83390dbdfcccb759b298257e5b50694ffb2baf91b04bba94a89779c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac2042d83390dbdfcccb759b298257e5b50694ffb2baf91b04bba94a89779c4->enter($__internal_eac2042d83390dbdfcccb759b298257e5b50694ffb2baf91b04bba94a89779c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18db13b547890dd0c1784dadd0031591ef2eba1d698475681056af9175e002ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18db13b547890dd0c1784dadd0031591ef2eba1d698475681056af9175e002ac->enter($__internal_18db13b547890dd0c1784dadd0031591ef2eba1d698475681056af9175e002ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_18db13b547890dd0c1784dadd0031591ef2eba1d698475681056af9175e002ac->leave($__internal_18db13b547890dd0c1784dadd0031591ef2eba1d698475681056af9175e002ac_prof);

        
        $__internal_eac2042d83390dbdfcccb759b298257e5b50694ffb2baf91b04bba94a89779c4->leave($__internal_eac2042d83390dbdfcccb759b298257e5b50694ffb2baf91b04bba94a89779c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
