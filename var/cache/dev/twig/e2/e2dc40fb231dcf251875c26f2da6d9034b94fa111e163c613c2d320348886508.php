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
        $__internal_7ea8b72db4ea9727cf3defdd297cfd66af7c7835670368e7e2b53539b7d2996d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea8b72db4ea9727cf3defdd297cfd66af7c7835670368e7e2b53539b7d2996d->enter($__internal_7ea8b72db4ea9727cf3defdd297cfd66af7c7835670368e7e2b53539b7d2996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_eb3aec3a451e310a3c1f37abdd0cf2fc6a8e7e86b9f7910942ca20d4e495b56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3aec3a451e310a3c1f37abdd0cf2fc6a8e7e86b9f7910942ca20d4e495b56a->enter($__internal_eb3aec3a451e310a3c1f37abdd0cf2fc6a8e7e86b9f7910942ca20d4e495b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7ea8b72db4ea9727cf3defdd297cfd66af7c7835670368e7e2b53539b7d2996d->leave($__internal_7ea8b72db4ea9727cf3defdd297cfd66af7c7835670368e7e2b53539b7d2996d_prof);

        
        $__internal_eb3aec3a451e310a3c1f37abdd0cf2fc6a8e7e86b9f7910942ca20d4e495b56a->leave($__internal_eb3aec3a451e310a3c1f37abdd0cf2fc6a8e7e86b9f7910942ca20d4e495b56a_prof);

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
