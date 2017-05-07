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
        $__internal_4e1b36d14ba68c04e5d100ae889db28d9c36a8a1861116031d46cff1070ec147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1b36d14ba68c04e5d100ae889db28d9c36a8a1861116031d46cff1070ec147->enter($__internal_4e1b36d14ba68c04e5d100ae889db28d9c36a8a1861116031d46cff1070ec147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f3c5be2f66735d90d9d49f0e50ba364ef492a3a3928d2b880a95ddf0b4f9e7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c5be2f66735d90d9d49f0e50ba364ef492a3a3928d2b880a95ddf0b4f9e7bc->enter($__internal_f3c5be2f66735d90d9d49f0e50ba364ef492a3a3928d2b880a95ddf0b4f9e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4e1b36d14ba68c04e5d100ae889db28d9c36a8a1861116031d46cff1070ec147->leave($__internal_4e1b36d14ba68c04e5d100ae889db28d9c36a8a1861116031d46cff1070ec147_prof);

        
        $__internal_f3c5be2f66735d90d9d49f0e50ba364ef492a3a3928d2b880a95ddf0b4f9e7bc->leave($__internal_f3c5be2f66735d90d9d49f0e50ba364ef492a3a3928d2b880a95ddf0b4f9e7bc_prof);

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
