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
        $__internal_67fe516612b3fe70ce65d8eae1928a38bcf1747d13643abe78f97e933ac88580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fe516612b3fe70ce65d8eae1928a38bcf1747d13643abe78f97e933ac88580->enter($__internal_67fe516612b3fe70ce65d8eae1928a38bcf1747d13643abe78f97e933ac88580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d49716156f52bb16ae682d9be07bf3996c36c59d43595bed9f72c7501a344e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49716156f52bb16ae682d9be07bf3996c36c59d43595bed9f72c7501a344e91->enter($__internal_d49716156f52bb16ae682d9be07bf3996c36c59d43595bed9f72c7501a344e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_67fe516612b3fe70ce65d8eae1928a38bcf1747d13643abe78f97e933ac88580->leave($__internal_67fe516612b3fe70ce65d8eae1928a38bcf1747d13643abe78f97e933ac88580_prof);

        
        $__internal_d49716156f52bb16ae682d9be07bf3996c36c59d43595bed9f72c7501a344e91->leave($__internal_d49716156f52bb16ae682d9be07bf3996c36c59d43595bed9f72c7501a344e91_prof);

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
