<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_ba743e819a8d674d4c6cb4a0b4233017383714caf3b1314d163180bc165f5274 extends Twig_Template
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
        $__internal_10e9ced43a95819402aa12e085b445750073a07d7c0289582a5742e32f9e49d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e9ced43a95819402aa12e085b445750073a07d7c0289582a5742e32f9e49d2->enter($__internal_10e9ced43a95819402aa12e085b445750073a07d7c0289582a5742e32f9e49d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_de775d005daef62797ecaeb178217652443d6682b2ebb81abc6b395914226553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de775d005daef62797ecaeb178217652443d6682b2ebb81abc6b395914226553->enter($__internal_de775d005daef62797ecaeb178217652443d6682b2ebb81abc6b395914226553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_10e9ced43a95819402aa12e085b445750073a07d7c0289582a5742e32f9e49d2->leave($__internal_10e9ced43a95819402aa12e085b445750073a07d7c0289582a5742e32f9e49d2_prof);

        
        $__internal_de775d005daef62797ecaeb178217652443d6682b2ebb81abc6b395914226553->leave($__internal_de775d005daef62797ecaeb178217652443d6682b2ebb81abc6b395914226553_prof);

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
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
