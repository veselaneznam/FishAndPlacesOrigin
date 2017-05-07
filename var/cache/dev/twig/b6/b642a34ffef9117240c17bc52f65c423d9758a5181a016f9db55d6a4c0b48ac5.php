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
        $__internal_dd454c969bd5c3bea94cfabe376addb3b6942dc706d82d0ce550bb3729663b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd454c969bd5c3bea94cfabe376addb3b6942dc706d82d0ce550bb3729663b8a->enter($__internal_dd454c969bd5c3bea94cfabe376addb3b6942dc706d82d0ce550bb3729663b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a230c548f5eb14006bf7759fce0f7c6540d60bf12632b477a7a163b0e6734122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a230c548f5eb14006bf7759fce0f7c6540d60bf12632b477a7a163b0e6734122->enter($__internal_a230c548f5eb14006bf7759fce0f7c6540d60bf12632b477a7a163b0e6734122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dd454c969bd5c3bea94cfabe376addb3b6942dc706d82d0ce550bb3729663b8a->leave($__internal_dd454c969bd5c3bea94cfabe376addb3b6942dc706d82d0ce550bb3729663b8a_prof);

        
        $__internal_a230c548f5eb14006bf7759fce0f7c6540d60bf12632b477a7a163b0e6734122->leave($__internal_a230c548f5eb14006bf7759fce0f7c6540d60bf12632b477a7a163b0e6734122_prof);

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
