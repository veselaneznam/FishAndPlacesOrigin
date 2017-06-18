<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_44b94fca93355ac8f531fbe9b8961feac7617d63a47937dfd560e9177dc1781f extends Twig_Template
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
        $__internal_9509dcac4d3cc0117aed08792a47a974074a0aae4f60f1479851488fb448131b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9509dcac4d3cc0117aed08792a47a974074a0aae4f60f1479851488fb448131b->enter($__internal_9509dcac4d3cc0117aed08792a47a974074a0aae4f60f1479851488fb448131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c3a9e3571bca94b1ac3b82e850b64458f9a8597d4595a29912db7fc8443c6520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a9e3571bca94b1ac3b82e850b64458f9a8597d4595a29912db7fc8443c6520->enter($__internal_c3a9e3571bca94b1ac3b82e850b64458f9a8597d4595a29912db7fc8443c6520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9509dcac4d3cc0117aed08792a47a974074a0aae4f60f1479851488fb448131b->leave($__internal_9509dcac4d3cc0117aed08792a47a974074a0aae4f60f1479851488fb448131b_prof);

        
        $__internal_c3a9e3571bca94b1ac3b82e850b64458f9a8597d4595a29912db7fc8443c6520->leave($__internal_c3a9e3571bca94b1ac3b82e850b64458f9a8597d4595a29912db7fc8443c6520_prof);

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
", "@Framework/Form/form_end.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
