<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_14efcfc11b51acec85bd80e78bb241ee11ba0b1342cef4351565e1c4cfddb35c extends Twig_Template
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
        $__internal_9f7fb82d491d2a466506306f1f6a97d49850597b3ac30242517790889e6f77a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7fb82d491d2a466506306f1f6a97d49850597b3ac30242517790889e6f77a6->enter($__internal_9f7fb82d491d2a466506306f1f6a97d49850597b3ac30242517790889e6f77a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1d111d73dad14c4e50381680cbb65d9c35e2bbec7cdd083271a1b34367a6eaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d111d73dad14c4e50381680cbb65d9c35e2bbec7cdd083271a1b34367a6eaa4->enter($__internal_1d111d73dad14c4e50381680cbb65d9c35e2bbec7cdd083271a1b34367a6eaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9f7fb82d491d2a466506306f1f6a97d49850597b3ac30242517790889e6f77a6->leave($__internal_9f7fb82d491d2a466506306f1f6a97d49850597b3ac30242517790889e6f77a6_prof);

        
        $__internal_1d111d73dad14c4e50381680cbb65d9c35e2bbec7cdd083271a1b34367a6eaa4->leave($__internal_1d111d73dad14c4e50381680cbb65d9c35e2bbec7cdd083271a1b34367a6eaa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
