<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_146a4b5c2eee4c27e90130eff46d8418c1d240f5bd9dfc85e26ab4657c6f1cee extends Twig_Template
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
        $__internal_3cac5a28e643d98daef16428d6f0131f100774eaf3040d2660102695c93e5267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cac5a28e643d98daef16428d6f0131f100774eaf3040d2660102695c93e5267->enter($__internal_3cac5a28e643d98daef16428d6f0131f100774eaf3040d2660102695c93e5267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fe0e53c0e886320eaa14794ec9653bd4f7e029aab4552a32e14ff1fd1d761d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0e53c0e886320eaa14794ec9653bd4f7e029aab4552a32e14ff1fd1d761d3d->enter($__internal_fe0e53c0e886320eaa14794ec9653bd4f7e029aab4552a32e14ff1fd1d761d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3cac5a28e643d98daef16428d6f0131f100774eaf3040d2660102695c93e5267->leave($__internal_3cac5a28e643d98daef16428d6f0131f100774eaf3040d2660102695c93e5267_prof);

        
        $__internal_fe0e53c0e886320eaa14794ec9653bd4f7e029aab4552a32e14ff1fd1d761d3d->leave($__internal_fe0e53c0e886320eaa14794ec9653bd4f7e029aab4552a32e14ff1fd1d761d3d_prof);

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
", "@Framework/Form/email_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
