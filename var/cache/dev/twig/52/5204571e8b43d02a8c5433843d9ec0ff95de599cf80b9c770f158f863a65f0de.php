<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6e90f72394d720b89ea48a3dc1406c788c0b1d2916c4b1c817d7adebde8c28a7 extends Twig_Template
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
        $__internal_ffeae064290b872c01a5c4a565c33cc44471e708519a9dc931a9997d3921bcb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffeae064290b872c01a5c4a565c33cc44471e708519a9dc931a9997d3921bcb1->enter($__internal_ffeae064290b872c01a5c4a565c33cc44471e708519a9dc931a9997d3921bcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3cb52a4c91b4aa8d21a2c8f6931c4dbe23a4308e855cee2ddbc1b24806cd774f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb52a4c91b4aa8d21a2c8f6931c4dbe23a4308e855cee2ddbc1b24806cd774f->enter($__internal_3cb52a4c91b4aa8d21a2c8f6931c4dbe23a4308e855cee2ddbc1b24806cd774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ffeae064290b872c01a5c4a565c33cc44471e708519a9dc931a9997d3921bcb1->leave($__internal_ffeae064290b872c01a5c4a565c33cc44471e708519a9dc931a9997d3921bcb1_prof);

        
        $__internal_3cb52a4c91b4aa8d21a2c8f6931c4dbe23a4308e855cee2ddbc1b24806cd774f->leave($__internal_3cb52a4c91b4aa8d21a2c8f6931c4dbe23a4308e855cee2ddbc1b24806cd774f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
