<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_1ccbcd87848b2bbae9b5158d74c5ee0a0485e5d537b1c6d64b935cc7d2199524 extends Twig_Template
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
        $__internal_b97fa22888852165a5f8f2b64fbd86a4ae25b1129d60a6931b82bc5f2ba562b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97fa22888852165a5f8f2b64fbd86a4ae25b1129d60a6931b82bc5f2ba562b8->enter($__internal_b97fa22888852165a5f8f2b64fbd86a4ae25b1129d60a6931b82bc5f2ba562b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_58ac590fe9b1fdc1e943bfaca62798c42bdb86d3be903dad7bc7798e4fa44957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ac590fe9b1fdc1e943bfaca62798c42bdb86d3be903dad7bc7798e4fa44957->enter($__internal_58ac590fe9b1fdc1e943bfaca62798c42bdb86d3be903dad7bc7798e4fa44957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_b97fa22888852165a5f8f2b64fbd86a4ae25b1129d60a6931b82bc5f2ba562b8->leave($__internal_b97fa22888852165a5f8f2b64fbd86a4ae25b1129d60a6931b82bc5f2ba562b8_prof);

        
        $__internal_58ac590fe9b1fdc1e943bfaca62798c42bdb86d3be903dad7bc7798e4fa44957->leave($__internal_58ac590fe9b1fdc1e943bfaca62798c42bdb86d3be903dad7bc7798e4fa44957_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
