<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_ba7b8ca758c90d1fd8c6b7b663aedc9fe51c0d5a232457d18c30b73ff09c8e4f extends Twig_Template
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
        $__internal_083d76cdcff3c4d2c9b96bbd9f07997b3d7e8f7d00a8d7ad357068b918b69092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083d76cdcff3c4d2c9b96bbd9f07997b3d7e8f7d00a8d7ad357068b918b69092->enter($__internal_083d76cdcff3c4d2c9b96bbd9f07997b3d7e8f7d00a8d7ad357068b918b69092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_59ea703fdb8b92e69fb57eea74c981b9c5bc659cd8cf3c28ec572c09a3719086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ea703fdb8b92e69fb57eea74c981b9c5bc659cd8cf3c28ec572c09a3719086->enter($__internal_59ea703fdb8b92e69fb57eea74c981b9c5bc659cd8cf3c28ec572c09a3719086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_083d76cdcff3c4d2c9b96bbd9f07997b3d7e8f7d00a8d7ad357068b918b69092->leave($__internal_083d76cdcff3c4d2c9b96bbd9f07997b3d7e8f7d00a8d7ad357068b918b69092_prof);

        
        $__internal_59ea703fdb8b92e69fb57eea74c981b9c5bc659cd8cf3c28ec572c09a3719086->leave($__internal_59ea703fdb8b92e69fb57eea74c981b9c5bc659cd8cf3c28ec572c09a3719086_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
