<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fe8e611540a4eec089ec0daf3fcb086fb487276deafeadf6dac00d34583ea184 extends Twig_Template
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
        $__internal_e907ed53d95a5be6efebf265eec194b718b2e33ad98c0a496f9e5f7d86d15343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e907ed53d95a5be6efebf265eec194b718b2e33ad98c0a496f9e5f7d86d15343->enter($__internal_e907ed53d95a5be6efebf265eec194b718b2e33ad98c0a496f9e5f7d86d15343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_6836fb0abb1848a722df301a6cfc17e8a4c888e0ba00c2327be2d57e9c11a9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6836fb0abb1848a722df301a6cfc17e8a4c888e0ba00c2327be2d57e9c11a9f0->enter($__internal_6836fb0abb1848a722df301a6cfc17e8a4c888e0ba00c2327be2d57e9c11a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e907ed53d95a5be6efebf265eec194b718b2e33ad98c0a496f9e5f7d86d15343->leave($__internal_e907ed53d95a5be6efebf265eec194b718b2e33ad98c0a496f9e5f7d86d15343_prof);

        
        $__internal_6836fb0abb1848a722df301a6cfc17e8a4c888e0ba00c2327be2d57e9c11a9f0->leave($__internal_6836fb0abb1848a722df301a6cfc17e8a4c888e0ba00c2327be2d57e9c11a9f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
