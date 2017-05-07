<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_095b016fe04cb6f01dc94f6e2b5abf6eff9653f2b56d5d01f2ec2ed44e434c1c extends Twig_Template
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
        $__internal_983ba51c20fc9c7e247a94015d2e30a3d2e50add544582842c49f2dfbb36af4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983ba51c20fc9c7e247a94015d2e30a3d2e50add544582842c49f2dfbb36af4a->enter($__internal_983ba51c20fc9c7e247a94015d2e30a3d2e50add544582842c49f2dfbb36af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c3e8dda0b172211d33eeeb9908df1f69eb1cf499b3fe93215f64022f835ec38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e8dda0b172211d33eeeb9908df1f69eb1cf499b3fe93215f64022f835ec38f->enter($__internal_c3e8dda0b172211d33eeeb9908df1f69eb1cf499b3fe93215f64022f835ec38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_983ba51c20fc9c7e247a94015d2e30a3d2e50add544582842c49f2dfbb36af4a->leave($__internal_983ba51c20fc9c7e247a94015d2e30a3d2e50add544582842c49f2dfbb36af4a_prof);

        
        $__internal_c3e8dda0b172211d33eeeb9908df1f69eb1cf499b3fe93215f64022f835ec38f->leave($__internal_c3e8dda0b172211d33eeeb9908df1f69eb1cf499b3fe93215f64022f835ec38f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
