<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_027602830842674326db7f8850d692d5129112432751b59ef7b4e7fa33b59732 extends Twig_Template
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
        $__internal_9e515298eeab015df1a9eca5169b9ee8e0a1610e3d31c1f464f362ce83d3ec27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e515298eeab015df1a9eca5169b9ee8e0a1610e3d31c1f464f362ce83d3ec27->enter($__internal_9e515298eeab015df1a9eca5169b9ee8e0a1610e3d31c1f464f362ce83d3ec27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_677e7e3febbb6066631e61cace827793463929d77932ffa828c3413c34393f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677e7e3febbb6066631e61cace827793463929d77932ffa828c3413c34393f94->enter($__internal_677e7e3febbb6066631e61cace827793463929d77932ffa828c3413c34393f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9e515298eeab015df1a9eca5169b9ee8e0a1610e3d31c1f464f362ce83d3ec27->leave($__internal_9e515298eeab015df1a9eca5169b9ee8e0a1610e3d31c1f464f362ce83d3ec27_prof);

        
        $__internal_677e7e3febbb6066631e61cace827793463929d77932ffa828c3413c34393f94->leave($__internal_677e7e3febbb6066631e61cace827793463929d77932ffa828c3413c34393f94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
