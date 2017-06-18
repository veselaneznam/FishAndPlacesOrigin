<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_da8157c733c101a1a9d4044e9da4dc77690e912aae0c2a40e942d2dbeefe781a extends Twig_Template
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
        $__internal_dc97ca3b4c6dabe3136164a309ca48f74f3a92a4e6488b2a51977b799fbb3ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc97ca3b4c6dabe3136164a309ca48f74f3a92a4e6488b2a51977b799fbb3ee5->enter($__internal_dc97ca3b4c6dabe3136164a309ca48f74f3a92a4e6488b2a51977b799fbb3ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_7b8027e4726bd05b68606492ae03fad1c2b9cb1ed58a810b0eaebebcc44b5492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8027e4726bd05b68606492ae03fad1c2b9cb1ed58a810b0eaebebcc44b5492->enter($__internal_7b8027e4726bd05b68606492ae03fad1c2b9cb1ed58a810b0eaebebcc44b5492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_dc97ca3b4c6dabe3136164a309ca48f74f3a92a4e6488b2a51977b799fbb3ee5->leave($__internal_dc97ca3b4c6dabe3136164a309ca48f74f3a92a4e6488b2a51977b799fbb3ee5_prof);

        
        $__internal_7b8027e4726bd05b68606492ae03fad1c2b9cb1ed58a810b0eaebebcc44b5492->leave($__internal_7b8027e4726bd05b68606492ae03fad1c2b9cb1ed58a810b0eaebebcc44b5492_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
