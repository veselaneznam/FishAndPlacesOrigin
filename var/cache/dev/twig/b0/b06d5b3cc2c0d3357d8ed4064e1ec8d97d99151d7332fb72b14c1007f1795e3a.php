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
        $__internal_5620ed39caddb84c78e00304d92d43cff06502cd7241181b8f1700c196381dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5620ed39caddb84c78e00304d92d43cff06502cd7241181b8f1700c196381dd5->enter($__internal_5620ed39caddb84c78e00304d92d43cff06502cd7241181b8f1700c196381dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9d2c335dca1064c9ea9298a2482862f36db9b25233eac6223ce172eb01116c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2c335dca1064c9ea9298a2482862f36db9b25233eac6223ce172eb01116c22->enter($__internal_9d2c335dca1064c9ea9298a2482862f36db9b25233eac6223ce172eb01116c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5620ed39caddb84c78e00304d92d43cff06502cd7241181b8f1700c196381dd5->leave($__internal_5620ed39caddb84c78e00304d92d43cff06502cd7241181b8f1700c196381dd5_prof);

        
        $__internal_9d2c335dca1064c9ea9298a2482862f36db9b25233eac6223ce172eb01116c22->leave($__internal_9d2c335dca1064c9ea9298a2482862f36db9b25233eac6223ce172eb01116c22_prof);

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
