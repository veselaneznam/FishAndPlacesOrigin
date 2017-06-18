<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_84fcc66944a32cb955b3bb1277b524ba6af98006e2445d4f3451e45680566627 extends Twig_Template
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
        $__internal_9eedff1c4120e92ff87f836e9eb97129f0157c1768b7fd9f609a668eff9a7d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eedff1c4120e92ff87f836e9eb97129f0157c1768b7fd9f609a668eff9a7d00->enter($__internal_9eedff1c4120e92ff87f836e9eb97129f0157c1768b7fd9f609a668eff9a7d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c215d368d6659a978468751dd5dd4928c4ef45ca12099399d4d952ee0aaf5ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c215d368d6659a978468751dd5dd4928c4ef45ca12099399d4d952ee0aaf5ccd->enter($__internal_c215d368d6659a978468751dd5dd4928c4ef45ca12099399d4d952ee0aaf5ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9eedff1c4120e92ff87f836e9eb97129f0157c1768b7fd9f609a668eff9a7d00->leave($__internal_9eedff1c4120e92ff87f836e9eb97129f0157c1768b7fd9f609a668eff9a7d00_prof);

        
        $__internal_c215d368d6659a978468751dd5dd4928c4ef45ca12099399d4d952ee0aaf5ccd->leave($__internal_c215d368d6659a978468751dd5dd4928c4ef45ca12099399d4d952ee0aaf5ccd_prof);

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
", "@Twig/Exception/exception.json.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
