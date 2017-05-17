<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_233bee39452427896fd736ad3b5bacba11d2af978ff15f427491b798ef8a8dde extends Twig_Template
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
        $__internal_33a0452a52bff11cff7adbef3f61c1e6c2449eb1fae2c446fdf23625ee99caab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a0452a52bff11cff7adbef3f61c1e6c2449eb1fae2c446fdf23625ee99caab->enter($__internal_33a0452a52bff11cff7adbef3f61c1e6c2449eb1fae2c446fdf23625ee99caab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_312d386fcbfe9c88f497c5a7b9471644b4b353a8c504b7ee95ab1006e63a42fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312d386fcbfe9c88f497c5a7b9471644b4b353a8c504b7ee95ab1006e63a42fb->enter($__internal_312d386fcbfe9c88f497c5a7b9471644b4b353a8c504b7ee95ab1006e63a42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_33a0452a52bff11cff7adbef3f61c1e6c2449eb1fae2c446fdf23625ee99caab->leave($__internal_33a0452a52bff11cff7adbef3f61c1e6c2449eb1fae2c446fdf23625ee99caab_prof);

        
        $__internal_312d386fcbfe9c88f497c5a7b9471644b4b353a8c504b7ee95ab1006e63a42fb->leave($__internal_312d386fcbfe9c88f497c5a7b9471644b4b353a8c504b7ee95ab1006e63a42fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
