<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_840dae1e45e5a0cabb5f3779ed0a618a27e10ff749534cdf061da12a52fb9be9 extends Twig_Template
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
        $__internal_dfda921339861a1113924fe9f68b0b0b1329656003547382975ea3e36e577524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfda921339861a1113924fe9f68b0b0b1329656003547382975ea3e36e577524->enter($__internal_dfda921339861a1113924fe9f68b0b0b1329656003547382975ea3e36e577524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c24a7d19e095659f145816c0ff8f019138368320525930882d2e89cca0d7ff0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24a7d19e095659f145816c0ff8f019138368320525930882d2e89cca0d7ff0a->enter($__internal_c24a7d19e095659f145816c0ff8f019138368320525930882d2e89cca0d7ff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dfda921339861a1113924fe9f68b0b0b1329656003547382975ea3e36e577524->leave($__internal_dfda921339861a1113924fe9f68b0b0b1329656003547382975ea3e36e577524_prof);

        
        $__internal_c24a7d19e095659f145816c0ff8f019138368320525930882d2e89cca0d7ff0a->leave($__internal_c24a7d19e095659f145816c0ff8f019138368320525930882d2e89cca0d7ff0a_prof);

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
", "@Twig/Exception/error.json.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
