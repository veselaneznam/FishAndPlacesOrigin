<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a5675288b72ee53838e83df0340ad0413103c52cf421ef21784db92ceb479904 extends Twig_Template
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
        $__internal_e7293fcd19272b785a68eef4f692bd9e41a28829292b236b67d6dbe36b292631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7293fcd19272b785a68eef4f692bd9e41a28829292b236b67d6dbe36b292631->enter($__internal_e7293fcd19272b785a68eef4f692bd9e41a28829292b236b67d6dbe36b292631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_75a6c3cd5347abb4df3dd2dc0071b018facdb7b1e0fcfb75c1115cf76ec00efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a6c3cd5347abb4df3dd2dc0071b018facdb7b1e0fcfb75c1115cf76ec00efa->enter($__internal_75a6c3cd5347abb4df3dd2dc0071b018facdb7b1e0fcfb75c1115cf76ec00efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e7293fcd19272b785a68eef4f692bd9e41a28829292b236b67d6dbe36b292631->leave($__internal_e7293fcd19272b785a68eef4f692bd9e41a28829292b236b67d6dbe36b292631_prof);

        
        $__internal_75a6c3cd5347abb4df3dd2dc0071b018facdb7b1e0fcfb75c1115cf76ec00efa->leave($__internal_75a6c3cd5347abb4df3dd2dc0071b018facdb7b1e0fcfb75c1115cf76ec00efa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
