<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cb49853ca5987546862d8f0c4f12703f266852bb0ec72380a04eb5eb984d5eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_57782ee93669a37c21efd5a5740067e9a02f1a4b7ca39cfbcd93653b72172e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57782ee93669a37c21efd5a5740067e9a02f1a4b7ca39cfbcd93653b72172e52->enter($__internal_57782ee93669a37c21efd5a5740067e9a02f1a4b7ca39cfbcd93653b72172e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_05b2dfad2296b5b077c5db14141e968af9ff47a924eb4731a243390c12c1f48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b2dfad2296b5b077c5db14141e968af9ff47a924eb4731a243390c12c1f48c->enter($__internal_05b2dfad2296b5b077c5db14141e968af9ff47a924eb4731a243390c12c1f48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57782ee93669a37c21efd5a5740067e9a02f1a4b7ca39cfbcd93653b72172e52->leave($__internal_57782ee93669a37c21efd5a5740067e9a02f1a4b7ca39cfbcd93653b72172e52_prof);

        
        $__internal_05b2dfad2296b5b077c5db14141e968af9ff47a924eb4731a243390c12c1f48c->leave($__internal_05b2dfad2296b5b077c5db14141e968af9ff47a924eb4731a243390c12c1f48c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3c4bdbf1bdce91c36a1a11159fcc3dc8aaf3da02f84b9873a2ca443398e2e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c4bdbf1bdce91c36a1a11159fcc3dc8aaf3da02f84b9873a2ca443398e2e7c->enter($__internal_d3c4bdbf1bdce91c36a1a11159fcc3dc8aaf3da02f84b9873a2ca443398e2e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_801fc97237c37549973386dc969cc71832d9a844a1fdf92d3d86c8d4c28b8871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801fc97237c37549973386dc969cc71832d9a844a1fdf92d3d86c8d4c28b8871->enter($__internal_801fc97237c37549973386dc969cc71832d9a844a1fdf92d3d86c8d4c28b8871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_801fc97237c37549973386dc969cc71832d9a844a1fdf92d3d86c8d4c28b8871->leave($__internal_801fc97237c37549973386dc969cc71832d9a844a1fdf92d3d86c8d4c28b8871_prof);

        
        $__internal_d3c4bdbf1bdce91c36a1a11159fcc3dc8aaf3da02f84b9873a2ca443398e2e7c->leave($__internal_d3c4bdbf1bdce91c36a1a11159fcc3dc8aaf3da02f84b9873a2ca443398e2e7c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
