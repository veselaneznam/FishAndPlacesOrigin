<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a65f50c1810a7ebb80616b0597b95ff41945bc1bad73e58b3a532e82e142ea54 extends Twig_Template
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
        $__internal_534e92a1d370b36ddf69215a792a62dd9d0f91081354792dd8cab186f9ea0fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534e92a1d370b36ddf69215a792a62dd9d0f91081354792dd8cab186f9ea0fbb->enter($__internal_534e92a1d370b36ddf69215a792a62dd9d0f91081354792dd8cab186f9ea0fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f06c15ef4f97e66357615926b691ea2300c7633f46bcea394d218325ace3d517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06c15ef4f97e66357615926b691ea2300c7633f46bcea394d218325ace3d517->enter($__internal_f06c15ef4f97e66357615926b691ea2300c7633f46bcea394d218325ace3d517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_534e92a1d370b36ddf69215a792a62dd9d0f91081354792dd8cab186f9ea0fbb->leave($__internal_534e92a1d370b36ddf69215a792a62dd9d0f91081354792dd8cab186f9ea0fbb_prof);

        
        $__internal_f06c15ef4f97e66357615926b691ea2300c7633f46bcea394d218325ace3d517->leave($__internal_f06c15ef4f97e66357615926b691ea2300c7633f46bcea394d218325ace3d517_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
