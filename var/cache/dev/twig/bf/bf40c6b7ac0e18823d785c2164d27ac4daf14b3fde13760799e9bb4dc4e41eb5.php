<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c2e5e2a75433122c50ccce8212ba18e8a37e271a7295cbc66e1c1a845fe49f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_67185da35390752b457ffd16d1787e6fd447f2b1fce15a3e57ad30e943e79406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67185da35390752b457ffd16d1787e6fd447f2b1fce15a3e57ad30e943e79406->enter($__internal_67185da35390752b457ffd16d1787e6fd447f2b1fce15a3e57ad30e943e79406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_36d288c8e272a471d482f1f0be2bd77bb3d976b63601ed9c3c945c79d9219f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d288c8e272a471d482f1f0be2bd77bb3d976b63601ed9c3c945c79d9219f28->enter($__internal_36d288c8e272a471d482f1f0be2bd77bb3d976b63601ed9c3c945c79d9219f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67185da35390752b457ffd16d1787e6fd447f2b1fce15a3e57ad30e943e79406->leave($__internal_67185da35390752b457ffd16d1787e6fd447f2b1fce15a3e57ad30e943e79406_prof);

        
        $__internal_36d288c8e272a471d482f1f0be2bd77bb3d976b63601ed9c3c945c79d9219f28->leave($__internal_36d288c8e272a471d482f1f0be2bd77bb3d976b63601ed9c3c945c79d9219f28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa39b260f8f1ec3fc246573a8e5a4112fd7506f646e007027f1af43b05a309af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa39b260f8f1ec3fc246573a8e5a4112fd7506f646e007027f1af43b05a309af->enter($__internal_fa39b260f8f1ec3fc246573a8e5a4112fd7506f646e007027f1af43b05a309af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb2d1e845a248343c2e374ebbc67ca9c2fdcfde44efc8904e26f4ab5e71d402b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2d1e845a248343c2e374ebbc67ca9c2fdcfde44efc8904e26f4ab5e71d402b->enter($__internal_cb2d1e845a248343c2e374ebbc67ca9c2fdcfde44efc8904e26f4ab5e71d402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cb2d1e845a248343c2e374ebbc67ca9c2fdcfde44efc8904e26f4ab5e71d402b->leave($__internal_cb2d1e845a248343c2e374ebbc67ca9c2fdcfde44efc8904e26f4ab5e71d402b_prof);

        
        $__internal_fa39b260f8f1ec3fc246573a8e5a4112fd7506f646e007027f1af43b05a309af->leave($__internal_fa39b260f8f1ec3fc246573a8e5a4112fd7506f646e007027f1af43b05a309af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
