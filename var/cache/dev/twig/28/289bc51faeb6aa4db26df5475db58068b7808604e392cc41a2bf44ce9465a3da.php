<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5c9a046898843702c91f34094cfd65027723f9149fffd192aa6d39e04334ca7e extends Twig_Template
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
        $__internal_3d6908c80f5b4efcad1ab956e6d9813b7025f0336f2faabaac9427c1633566f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6908c80f5b4efcad1ab956e6d9813b7025f0336f2faabaac9427c1633566f3->enter($__internal_3d6908c80f5b4efcad1ab956e6d9813b7025f0336f2faabaac9427c1633566f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_4f3a3332451f03852667eef92a6072eb881bc2303883ce36b3739d625e7591d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3a3332451f03852667eef92a6072eb881bc2303883ce36b3739d625e7591d7->enter($__internal_4f3a3332451f03852667eef92a6072eb881bc2303883ce36b3739d625e7591d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3d6908c80f5b4efcad1ab956e6d9813b7025f0336f2faabaac9427c1633566f3->leave($__internal_3d6908c80f5b4efcad1ab956e6d9813b7025f0336f2faabaac9427c1633566f3_prof);

        
        $__internal_4f3a3332451f03852667eef92a6072eb881bc2303883ce36b3739d625e7591d7->leave($__internal_4f3a3332451f03852667eef92a6072eb881bc2303883ce36b3739d625e7591d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
