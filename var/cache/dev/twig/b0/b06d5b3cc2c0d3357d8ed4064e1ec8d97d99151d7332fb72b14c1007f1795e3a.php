<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_003a4fba8fd5d958ad0961e4118712d34d11b2db22cc9c7b4b33748ad2a8671d extends Twig_Template
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
        $__internal_cf14585978128fd7c073706584f46d38fed23aacb08966efdb8f56de21945e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf14585978128fd7c073706584f46d38fed23aacb08966efdb8f56de21945e23->enter($__internal_cf14585978128fd7c073706584f46d38fed23aacb08966efdb8f56de21945e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c870ed6f88825abf86aebde1405852f4c1531ff8f55f250c0f7f5d6588f92002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c870ed6f88825abf86aebde1405852f4c1531ff8f55f250c0f7f5d6588f92002->enter($__internal_c870ed6f88825abf86aebde1405852f4c1531ff8f55f250c0f7f5d6588f92002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cf14585978128fd7c073706584f46d38fed23aacb08966efdb8f56de21945e23->leave($__internal_cf14585978128fd7c073706584f46d38fed23aacb08966efdb8f56de21945e23_prof);

        
        $__internal_c870ed6f88825abf86aebde1405852f4c1531ff8f55f250c0f7f5d6588f92002->leave($__internal_c870ed6f88825abf86aebde1405852f4c1531ff8f55f250c0f7f5d6588f92002_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
