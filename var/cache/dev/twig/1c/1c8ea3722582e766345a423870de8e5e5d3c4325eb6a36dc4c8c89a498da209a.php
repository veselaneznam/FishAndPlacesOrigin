<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_443a5d71a22677317a30d90204eaa2cc8374d7771aaef88dc3e75fb932bac3c1 extends Twig_Template
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
        $__internal_8ba5fdd4ee1985fc5a3ac967b23238218950c7062b5335d42c5e3361c16528ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba5fdd4ee1985fc5a3ac967b23238218950c7062b5335d42c5e3361c16528ba->enter($__internal_8ba5fdd4ee1985fc5a3ac967b23238218950c7062b5335d42c5e3361c16528ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_58127fb4b413c86d8883fcf4d61289bfb1ffacd84a9fe27e8534096f01212fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58127fb4b413c86d8883fcf4d61289bfb1ffacd84a9fe27e8534096f01212fd0->enter($__internal_58127fb4b413c86d8883fcf4d61289bfb1ffacd84a9fe27e8534096f01212fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8ba5fdd4ee1985fc5a3ac967b23238218950c7062b5335d42c5e3361c16528ba->leave($__internal_8ba5fdd4ee1985fc5a3ac967b23238218950c7062b5335d42c5e3361c16528ba_prof);

        
        $__internal_58127fb4b413c86d8883fcf4d61289bfb1ffacd84a9fe27e8534096f01212fd0->leave($__internal_58127fb4b413c86d8883fcf4d61289bfb1ffacd84a9fe27e8534096f01212fd0_prof);

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
", "@Twig/Exception/error.xml.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
