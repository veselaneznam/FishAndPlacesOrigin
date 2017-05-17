<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2f386bb191a4896cb16d4d0822c6e351f99bc89765eabfe1f04d8f4af98728b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f93005ba3462cab67c8bea74dfd676d2a4efdfe4ba894b057e0795c2a2fea0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93005ba3462cab67c8bea74dfd676d2a4efdfe4ba894b057e0795c2a2fea0d8->enter($__internal_f93005ba3462cab67c8bea74dfd676d2a4efdfe4ba894b057e0795c2a2fea0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_0557b8828d098065a4fd69b3ead7bba8fcd0c78240d974dc53f595ab919aa629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0557b8828d098065a4fd69b3ead7bba8fcd0c78240d974dc53f595ab919aa629->enter($__internal_0557b8828d098065a4fd69b3ead7bba8fcd0c78240d974dc53f595ab919aa629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93005ba3462cab67c8bea74dfd676d2a4efdfe4ba894b057e0795c2a2fea0d8->leave($__internal_f93005ba3462cab67c8bea74dfd676d2a4efdfe4ba894b057e0795c2a2fea0d8_prof);

        
        $__internal_0557b8828d098065a4fd69b3ead7bba8fcd0c78240d974dc53f595ab919aa629->leave($__internal_0557b8828d098065a4fd69b3ead7bba8fcd0c78240d974dc53f595ab919aa629_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd558dcece750cf7a5638ed96f383bebfe5852328a67b6ed2329ad4edf0aaa28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd558dcece750cf7a5638ed96f383bebfe5852328a67b6ed2329ad4edf0aaa28->enter($__internal_dd558dcece750cf7a5638ed96f383bebfe5852328a67b6ed2329ad4edf0aaa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9cec58fe85ea14f36af2602d04b4b67b69760e7b2f065ae16d0ba051368994c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cec58fe85ea14f36af2602d04b4b67b69760e7b2f065ae16d0ba051368994c->enter($__internal_c9cec58fe85ea14f36af2602d04b4b67b69760e7b2f065ae16d0ba051368994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c9cec58fe85ea14f36af2602d04b4b67b69760e7b2f065ae16d0ba051368994c->leave($__internal_c9cec58fe85ea14f36af2602d04b4b67b69760e7b2f065ae16d0ba051368994c_prof);

        
        $__internal_dd558dcece750cf7a5638ed96f383bebfe5852328a67b6ed2329ad4edf0aaa28->leave($__internal_dd558dcece750cf7a5638ed96f383bebfe5852328a67b6ed2329ad4edf0aaa28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
