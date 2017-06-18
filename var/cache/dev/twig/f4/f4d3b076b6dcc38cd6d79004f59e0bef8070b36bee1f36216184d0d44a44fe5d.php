<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_4fa8eca31c7c32e8fb6ee127c576bc54c3a1f36e587eabc7db7e9d08daaa0f45 extends Twig_Template
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
        $__internal_00303eb33d9a909c7b47ab577d562a05cddc7b4ceeac8b19e7abbc43e971350b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00303eb33d9a909c7b47ab577d562a05cddc7b4ceeac8b19e7abbc43e971350b->enter($__internal_00303eb33d9a909c7b47ab577d562a05cddc7b4ceeac8b19e7abbc43e971350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_a29bd1352f3eaab9d50f4218fc8b3755c817554009483e90954bc28a7eeee0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29bd1352f3eaab9d50f4218fc8b3755c817554009483e90954bc28a7eeee0f3->enter($__internal_a29bd1352f3eaab9d50f4218fc8b3755c817554009483e90954bc28a7eeee0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_00303eb33d9a909c7b47ab577d562a05cddc7b4ceeac8b19e7abbc43e971350b->leave($__internal_00303eb33d9a909c7b47ab577d562a05cddc7b4ceeac8b19e7abbc43e971350b_prof);

        
        $__internal_a29bd1352f3eaab9d50f4218fc8b3755c817554009483e90954bc28a7eeee0f3->leave($__internal_a29bd1352f3eaab9d50f4218fc8b3755c817554009483e90954bc28a7eeee0f3_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/var/www/FishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
