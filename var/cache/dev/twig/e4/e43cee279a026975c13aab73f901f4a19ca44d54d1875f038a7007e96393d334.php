<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fa1b08da805120562764dc37af4954d94d9e95269b1f5ad6f02e95fec07e4a3b extends Twig_Template
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
        $__internal_352b772dce9fc8b8c8220053b4b1c562967ba6af4cfca0c9b6138e8067f3ea63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352b772dce9fc8b8c8220053b4b1c562967ba6af4cfca0c9b6138e8067f3ea63->enter($__internal_352b772dce9fc8b8c8220053b4b1c562967ba6af4cfca0c9b6138e8067f3ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0d84ff9f6caf6834742d8fb9c06fac072a8f9a73e658f192fba33bebfb46972d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d84ff9f6caf6834742d8fb9c06fac072a8f9a73e658f192fba33bebfb46972d->enter($__internal_0d84ff9f6caf6834742d8fb9c06fac072a8f9a73e658f192fba33bebfb46972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_352b772dce9fc8b8c8220053b4b1c562967ba6af4cfca0c9b6138e8067f3ea63->leave($__internal_352b772dce9fc8b8c8220053b4b1c562967ba6af4cfca0c9b6138e8067f3ea63_prof);

        
        $__internal_0d84ff9f6caf6834742d8fb9c06fac072a8f9a73e658f192fba33bebfb46972d->leave($__internal_0d84ff9f6caf6834742d8fb9c06fac072a8f9a73e658f192fba33bebfb46972d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
