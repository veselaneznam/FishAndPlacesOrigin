<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c4ecaa5bfac709219189aec5c039a0ac2839e4676ed5932e1c3a19b33654d8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_bd1d40121029e8aa4706d08625e41f761423011e1ff6f00b610a5a5aaec2fee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1d40121029e8aa4706d08625e41f761423011e1ff6f00b610a5a5aaec2fee4->enter($__internal_bd1d40121029e8aa4706d08625e41f761423011e1ff6f00b610a5a5aaec2fee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_b3631564f7ffa844b90c465389512b7506f6de8584c64db7650c9e7f0323e6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3631564f7ffa844b90c465389512b7506f6de8584c64db7650c9e7f0323e6c8->enter($__internal_b3631564f7ffa844b90c465389512b7506f6de8584c64db7650c9e7f0323e6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1d40121029e8aa4706d08625e41f761423011e1ff6f00b610a5a5aaec2fee4->leave($__internal_bd1d40121029e8aa4706d08625e41f761423011e1ff6f00b610a5a5aaec2fee4_prof);

        
        $__internal_b3631564f7ffa844b90c465389512b7506f6de8584c64db7650c9e7f0323e6c8->leave($__internal_b3631564f7ffa844b90c465389512b7506f6de8584c64db7650c9e7f0323e6c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05d1124c9c6aeb2a0b0bf45ab34e5ea81a4ad8cfa13a7af557d11ceba66dadbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d1124c9c6aeb2a0b0bf45ab34e5ea81a4ad8cfa13a7af557d11ceba66dadbd->enter($__internal_05d1124c9c6aeb2a0b0bf45ab34e5ea81a4ad8cfa13a7af557d11ceba66dadbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_09c490e61d874bda023689f875c06e27565d3884e4bb49e1e7eba9850cc61a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c490e61d874bda023689f875c06e27565d3884e4bb49e1e7eba9850cc61a59->enter($__internal_09c490e61d874bda023689f875c06e27565d3884e4bb49e1e7eba9850cc61a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_09c490e61d874bda023689f875c06e27565d3884e4bb49e1e7eba9850cc61a59->leave($__internal_09c490e61d874bda023689f875c06e27565d3884e4bb49e1e7eba9850cc61a59_prof);

        
        $__internal_05d1124c9c6aeb2a0b0bf45ab34e5ea81a4ad8cfa13a7af557d11ceba66dadbd->leave($__internal_05d1124c9c6aeb2a0b0bf45ab34e5ea81a4ad8cfa13a7af557d11ceba66dadbd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
