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
        $__internal_2ecadedd1f8f78fcf4c314c5f1d14209832a1a296e9a7df75a91291e728a7ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecadedd1f8f78fcf4c314c5f1d14209832a1a296e9a7df75a91291e728a7ff3->enter($__internal_2ecadedd1f8f78fcf4c314c5f1d14209832a1a296e9a7df75a91291e728a7ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9e25738138eb44395bbcf23456ed1ea896b6642934a5e3d221da214be7fc3113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e25738138eb44395bbcf23456ed1ea896b6642934a5e3d221da214be7fc3113->enter($__internal_9e25738138eb44395bbcf23456ed1ea896b6642934a5e3d221da214be7fc3113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2ecadedd1f8f78fcf4c314c5f1d14209832a1a296e9a7df75a91291e728a7ff3->leave($__internal_2ecadedd1f8f78fcf4c314c5f1d14209832a1a296e9a7df75a91291e728a7ff3_prof);

        
        $__internal_9e25738138eb44395bbcf23456ed1ea896b6642934a5e3d221da214be7fc3113->leave($__internal_9e25738138eb44395bbcf23456ed1ea896b6642934a5e3d221da214be7fc3113_prof);

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
