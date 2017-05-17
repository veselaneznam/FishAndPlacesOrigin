<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_179ce0a4f86c0bfffce389c3659d39dfe7ce04fbcad0402ffe8a07c4c49abf6b extends Twig_Template
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
        $__internal_e1f0df57cecf0ac19eb2131b3ead9699beec0907652bd2d9ba8fdef4208a81be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f0df57cecf0ac19eb2131b3ead9699beec0907652bd2d9ba8fdef4208a81be->enter($__internal_e1f0df57cecf0ac19eb2131b3ead9699beec0907652bd2d9ba8fdef4208a81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a55470b9d8d2d83ae52d2fab7f31c0a2df8d57ab37523fd1450986f2b8415df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55470b9d8d2d83ae52d2fab7f31c0a2df8d57ab37523fd1450986f2b8415df3->enter($__internal_a55470b9d8d2d83ae52d2fab7f31c0a2df8d57ab37523fd1450986f2b8415df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e1f0df57cecf0ac19eb2131b3ead9699beec0907652bd2d9ba8fdef4208a81be->leave($__internal_e1f0df57cecf0ac19eb2131b3ead9699beec0907652bd2d9ba8fdef4208a81be_prof);

        
        $__internal_a55470b9d8d2d83ae52d2fab7f31c0a2df8d57ab37523fd1450986f2b8415df3->leave($__internal_a55470b9d8d2d83ae52d2fab7f31c0a2df8d57ab37523fd1450986f2b8415df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
