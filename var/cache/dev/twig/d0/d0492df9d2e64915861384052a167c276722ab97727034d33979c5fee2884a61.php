<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_85bca31c956412069fab95c63c541afd3841b09cf9897f3ba6ba7bbedfd94c1e extends Twig_Template
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
        $__internal_e724170663c119f20c4f52743e24b51c0be37801653e899991fe12027fcbcb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e724170663c119f20c4f52743e24b51c0be37801653e899991fe12027fcbcb83->enter($__internal_e724170663c119f20c4f52743e24b51c0be37801653e899991fe12027fcbcb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2b8b62d2a78b722263f8d6cbfd25fc55f3d1f827c73b0d309b03c8b661cb2cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8b62d2a78b722263f8d6cbfd25fc55f3d1f827c73b0d309b03c8b661cb2cad->enter($__internal_2b8b62d2a78b722263f8d6cbfd25fc55f3d1f827c73b0d309b03c8b661cb2cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e724170663c119f20c4f52743e24b51c0be37801653e899991fe12027fcbcb83->leave($__internal_e724170663c119f20c4f52743e24b51c0be37801653e899991fe12027fcbcb83_prof);

        
        $__internal_2b8b62d2a78b722263f8d6cbfd25fc55f3d1f827c73b0d309b03c8b661cb2cad->leave($__internal_2b8b62d2a78b722263f8d6cbfd25fc55f3d1f827c73b0d309b03c8b661cb2cad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
