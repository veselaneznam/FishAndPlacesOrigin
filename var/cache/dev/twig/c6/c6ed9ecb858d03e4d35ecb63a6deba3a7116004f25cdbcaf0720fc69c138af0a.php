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
        $__internal_c0f8b469ecc8ea8b5d2e6854f05e998a4f83e658aa8440eec289d94219178002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f8b469ecc8ea8b5d2e6854f05e998a4f83e658aa8440eec289d94219178002->enter($__internal_c0f8b469ecc8ea8b5d2e6854f05e998a4f83e658aa8440eec289d94219178002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1be16e1f99c464eac7240863ddb4170b2d9d9057110c093ace1fe8275adb8b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be16e1f99c464eac7240863ddb4170b2d9d9057110c093ace1fe8275adb8b3c->enter($__internal_1be16e1f99c464eac7240863ddb4170b2d9d9057110c093ace1fe8275adb8b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c0f8b469ecc8ea8b5d2e6854f05e998a4f83e658aa8440eec289d94219178002->leave($__internal_c0f8b469ecc8ea8b5d2e6854f05e998a4f83e658aa8440eec289d94219178002_prof);

        
        $__internal_1be16e1f99c464eac7240863ddb4170b2d9d9057110c093ace1fe8275adb8b3c->leave($__internal_1be16e1f99c464eac7240863ddb4170b2d9d9057110c093ace1fe8275adb8b3c_prof);

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
