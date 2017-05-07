<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3aa5249a757e46690c9592ebefd5d7a321321a7032ac6d1eb1e501c602306073 extends Twig_Template
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
        $__internal_2efd254df6e856a94d5949b7d8904318b26375c29fb0d4822a9455b66ad32e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efd254df6e856a94d5949b7d8904318b26375c29fb0d4822a9455b66ad32e14->enter($__internal_2efd254df6e856a94d5949b7d8904318b26375c29fb0d4822a9455b66ad32e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8688a5ec496b67b841f6e989f080138b3a9da18fb1df62efbda85c5c98618acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8688a5ec496b67b841f6e989f080138b3a9da18fb1df62efbda85c5c98618acc->enter($__internal_8688a5ec496b67b841f6e989f080138b3a9da18fb1df62efbda85c5c98618acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2efd254df6e856a94d5949b7d8904318b26375c29fb0d4822a9455b66ad32e14->leave($__internal_2efd254df6e856a94d5949b7d8904318b26375c29fb0d4822a9455b66ad32e14_prof);

        
        $__internal_8688a5ec496b67b841f6e989f080138b3a9da18fb1df62efbda85c5c98618acc->leave($__internal_8688a5ec496b67b841f6e989f080138b3a9da18fb1df62efbda85c5c98618acc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
