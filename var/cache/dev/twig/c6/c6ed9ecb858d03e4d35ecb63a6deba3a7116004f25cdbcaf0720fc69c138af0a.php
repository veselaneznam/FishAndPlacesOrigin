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
        $__internal_ac17ab83404498967f9e2014bd4865ee61d213954c6fcaa521b60dab3d96217a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac17ab83404498967f9e2014bd4865ee61d213954c6fcaa521b60dab3d96217a->enter($__internal_ac17ab83404498967f9e2014bd4865ee61d213954c6fcaa521b60dab3d96217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_afdf344592c71f659b84c745ca475bc2f6b282fdbd1bb03897e5fdf72c088115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdf344592c71f659b84c745ca475bc2f6b282fdbd1bb03897e5fdf72c088115->enter($__internal_afdf344592c71f659b84c745ca475bc2f6b282fdbd1bb03897e5fdf72c088115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ac17ab83404498967f9e2014bd4865ee61d213954c6fcaa521b60dab3d96217a->leave($__internal_ac17ab83404498967f9e2014bd4865ee61d213954c6fcaa521b60dab3d96217a_prof);

        
        $__internal_afdf344592c71f659b84c745ca475bc2f6b282fdbd1bb03897e5fdf72c088115->leave($__internal_afdf344592c71f659b84c745ca475bc2f6b282fdbd1bb03897e5fdf72c088115_prof);

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
