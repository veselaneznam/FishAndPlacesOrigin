<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_bec8bb01abf477c82ac8dd44166eff169140ed648e2b5804fdbf524606f8f983 extends Twig_Template
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
        $__internal_1efecbf1e553fad4661a86b5d0ef82b823c010c369831b0657c8a96254c058dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efecbf1e553fad4661a86b5d0ef82b823c010c369831b0657c8a96254c058dd->enter($__internal_1efecbf1e553fad4661a86b5d0ef82b823c010c369831b0657c8a96254c058dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2845e6b03e4e67c312d13c434b66723fad40562d7a6f98a981f5a709d927f368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2845e6b03e4e67c312d13c434b66723fad40562d7a6f98a981f5a709d927f368->enter($__internal_2845e6b03e4e67c312d13c434b66723fad40562d7a6f98a981f5a709d927f368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1efecbf1e553fad4661a86b5d0ef82b823c010c369831b0657c8a96254c058dd->leave($__internal_1efecbf1e553fad4661a86b5d0ef82b823c010c369831b0657c8a96254c058dd_prof);

        
        $__internal_2845e6b03e4e67c312d13c434b66723fad40562d7a6f98a981f5a709d927f368->leave($__internal_2845e6b03e4e67c312d13c434b66723fad40562d7a6f98a981f5a709d927f368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
