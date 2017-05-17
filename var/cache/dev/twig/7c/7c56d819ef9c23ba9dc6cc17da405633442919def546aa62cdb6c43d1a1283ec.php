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
        $__internal_24d5b4ef5f644e160d109df1f029f164d784484d24b1c359ecbc82beb55267b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d5b4ef5f644e160d109df1f029f164d784484d24b1c359ecbc82beb55267b4->enter($__internal_24d5b4ef5f644e160d109df1f029f164d784484d24b1c359ecbc82beb55267b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_9b4491198b4fd177c5dc0ab5d500a1644457ff6a093beb6acb6f3c0ec0e2f9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4491198b4fd177c5dc0ab5d500a1644457ff6a093beb6acb6f3c0ec0e2f9e9->enter($__internal_9b4491198b4fd177c5dc0ab5d500a1644457ff6a093beb6acb6f3c0ec0e2f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d5b4ef5f644e160d109df1f029f164d784484d24b1c359ecbc82beb55267b4->leave($__internal_24d5b4ef5f644e160d109df1f029f164d784484d24b1c359ecbc82beb55267b4_prof);

        
        $__internal_9b4491198b4fd177c5dc0ab5d500a1644457ff6a093beb6acb6f3c0ec0e2f9e9->leave($__internal_9b4491198b4fd177c5dc0ab5d500a1644457ff6a093beb6acb6f3c0ec0e2f9e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23ae1600c27ad979cca4381c83c6ad43a9dfa25c5656a914cbf92795a47fd841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ae1600c27ad979cca4381c83c6ad43a9dfa25c5656a914cbf92795a47fd841->enter($__internal_23ae1600c27ad979cca4381c83c6ad43a9dfa25c5656a914cbf92795a47fd841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbbde62bdd2a1fbb310a9a8f69257aea1375b689a0d9d00b8ba121c1ee3cf45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbde62bdd2a1fbb310a9a8f69257aea1375b689a0d9d00b8ba121c1ee3cf45a->enter($__internal_cbbde62bdd2a1fbb310a9a8f69257aea1375b689a0d9d00b8ba121c1ee3cf45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_cbbde62bdd2a1fbb310a9a8f69257aea1375b689a0d9d00b8ba121c1ee3cf45a->leave($__internal_cbbde62bdd2a1fbb310a9a8f69257aea1375b689a0d9d00b8ba121c1ee3cf45a_prof);

        
        $__internal_23ae1600c27ad979cca4381c83c6ad43a9dfa25c5656a914cbf92795a47fd841->leave($__internal_23ae1600c27ad979cca4381c83c6ad43a9dfa25c5656a914cbf92795a47fd841_prof);

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
