<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26579f2b53f45e8c74c7e561899207878fbb723712328afcc787ae0b9bf91e72 extends Twig_Template
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
        $__internal_6c11a816fba4f57ee2181b90c3fb25fd1d4d0d9b43efbec84404096a77530c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c11a816fba4f57ee2181b90c3fb25fd1d4d0d9b43efbec84404096a77530c13->enter($__internal_6c11a816fba4f57ee2181b90c3fb25fd1d4d0d9b43efbec84404096a77530c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3b0a6e9c20e7325b63456550636c0ec43f55f846a5a529342855a111ca6aacaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0a6e9c20e7325b63456550636c0ec43f55f846a5a529342855a111ca6aacaa->enter($__internal_3b0a6e9c20e7325b63456550636c0ec43f55f846a5a529342855a111ca6aacaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6c11a816fba4f57ee2181b90c3fb25fd1d4d0d9b43efbec84404096a77530c13->leave($__internal_6c11a816fba4f57ee2181b90c3fb25fd1d4d0d9b43efbec84404096a77530c13_prof);

        
        $__internal_3b0a6e9c20e7325b63456550636c0ec43f55f846a5a529342855a111ca6aacaa->leave($__internal_3b0a6e9c20e7325b63456550636c0ec43f55f846a5a529342855a111ca6aacaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
