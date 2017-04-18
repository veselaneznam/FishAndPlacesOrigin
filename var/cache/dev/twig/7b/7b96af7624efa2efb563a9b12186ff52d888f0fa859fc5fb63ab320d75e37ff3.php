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
        $__internal_48c7d33b464fd4039e9d361045e1c26fcf28affe0a2431373f667787c3a2001e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c7d33b464fd4039e9d361045e1c26fcf28affe0a2431373f667787c3a2001e->enter($__internal_48c7d33b464fd4039e9d361045e1c26fcf28affe0a2431373f667787c3a2001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_42d0745a2aabcb004f35be736a6475d37352717aa0ce047407dc8094a7cec395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d0745a2aabcb004f35be736a6475d37352717aa0ce047407dc8094a7cec395->enter($__internal_42d0745a2aabcb004f35be736a6475d37352717aa0ce047407dc8094a7cec395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48c7d33b464fd4039e9d361045e1c26fcf28affe0a2431373f667787c3a2001e->leave($__internal_48c7d33b464fd4039e9d361045e1c26fcf28affe0a2431373f667787c3a2001e_prof);

        
        $__internal_42d0745a2aabcb004f35be736a6475d37352717aa0ce047407dc8094a7cec395->leave($__internal_42d0745a2aabcb004f35be736a6475d37352717aa0ce047407dc8094a7cec395_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_554ad5cfba3f35e76a4365d3f7be7271849595ebbff01e8bfb1a548f57626b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554ad5cfba3f35e76a4365d3f7be7271849595ebbff01e8bfb1a548f57626b28->enter($__internal_554ad5cfba3f35e76a4365d3f7be7271849595ebbff01e8bfb1a548f57626b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f1ea537dd78f2c6e202e21d288be7eb49e1ca314de5e9805693871c1367e1e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ea537dd78f2c6e202e21d288be7eb49e1ca314de5e9805693871c1367e1e29->enter($__internal_f1ea537dd78f2c6e202e21d288be7eb49e1ca314de5e9805693871c1367e1e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f1ea537dd78f2c6e202e21d288be7eb49e1ca314de5e9805693871c1367e1e29->leave($__internal_f1ea537dd78f2c6e202e21d288be7eb49e1ca314de5e9805693871c1367e1e29_prof);

        
        $__internal_554ad5cfba3f35e76a4365d3f7be7271849595ebbff01e8bfb1a548f57626b28->leave($__internal_554ad5cfba3f35e76a4365d3f7be7271849595ebbff01e8bfb1a548f57626b28_prof);

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
