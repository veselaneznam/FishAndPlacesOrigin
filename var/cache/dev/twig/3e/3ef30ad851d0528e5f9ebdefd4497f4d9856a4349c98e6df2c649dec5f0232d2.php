<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ea1da8fe1d6b0740cba52de770635920984045ab240468f15ed6d57dc114f03d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3a2e2b2e6040c98fbac1b51171943a55346fd437cf2a203eb027790a14563f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a2e2b2e6040c98fbac1b51171943a55346fd437cf2a203eb027790a14563f7->enter($__internal_e3a2e2b2e6040c98fbac1b51171943a55346fd437cf2a203eb027790a14563f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b7a9c4034d88e65dbeece617f587880d576d6e0fd763a108d096c694f2f2159e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a9c4034d88e65dbeece617f587880d576d6e0fd763a108d096c694f2f2159e->enter($__internal_b7a9c4034d88e65dbeece617f587880d576d6e0fd763a108d096c694f2f2159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e3a2e2b2e6040c98fbac1b51171943a55346fd437cf2a203eb027790a14563f7->leave($__internal_e3a2e2b2e6040c98fbac1b51171943a55346fd437cf2a203eb027790a14563f7_prof);

        
        $__internal_b7a9c4034d88e65dbeece617f587880d576d6e0fd763a108d096c694f2f2159e->leave($__internal_b7a9c4034d88e65dbeece617f587880d576d6e0fd763a108d096c694f2f2159e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
