<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b66db9a971b00fb5ae9d5f532a34e57306fed5421d984b04262a090a6ea39f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ab3327987a4a90842451b64ba19c8aa74f74908c3d3e68a3123aa0c80f85bb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3327987a4a90842451b64ba19c8aa74f74908c3d3e68a3123aa0c80f85bb64->enter($__internal_ab3327987a4a90842451b64ba19c8aa74f74908c3d3e68a3123aa0c80f85bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_09f7bc589198d8bb3b3434793aaa0ad44cb5ddae750d3f3ab391483322e4904a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f7bc589198d8bb3b3434793aaa0ad44cb5ddae750d3f3ab391483322e4904a->enter($__internal_09f7bc589198d8bb3b3434793aaa0ad44cb5ddae750d3f3ab391483322e4904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3327987a4a90842451b64ba19c8aa74f74908c3d3e68a3123aa0c80f85bb64->leave($__internal_ab3327987a4a90842451b64ba19c8aa74f74908c3d3e68a3123aa0c80f85bb64_prof);

        
        $__internal_09f7bc589198d8bb3b3434793aaa0ad44cb5ddae750d3f3ab391483322e4904a->leave($__internal_09f7bc589198d8bb3b3434793aaa0ad44cb5ddae750d3f3ab391483322e4904a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbaa10c41d17067ee25b82523349ce44ecb7c81b58789b9ef785f352ea7741a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaa10c41d17067ee25b82523349ce44ecb7c81b58789b9ef785f352ea7741a4->enter($__internal_fbaa10c41d17067ee25b82523349ce44ecb7c81b58789b9ef785f352ea7741a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b02261f66134d7925746babbef580fb0f8f60081e69484974cb7112a8d0501b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02261f66134d7925746babbef580fb0f8f60081e69484974cb7112a8d0501b8->enter($__internal_b02261f66134d7925746babbef580fb0f8f60081e69484974cb7112a8d0501b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b02261f66134d7925746babbef580fb0f8f60081e69484974cb7112a8d0501b8->leave($__internal_b02261f66134d7925746babbef580fb0f8f60081e69484974cb7112a8d0501b8_prof);

        
        $__internal_fbaa10c41d17067ee25b82523349ce44ecb7c81b58789b9ef785f352ea7741a4->leave($__internal_fbaa10c41d17067ee25b82523349ce44ecb7c81b58789b9ef785f352ea7741a4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
