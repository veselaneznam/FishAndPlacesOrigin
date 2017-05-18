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
        $__internal_34cc017417999a1751e112cca7324f142ad2c25ecd863e8e3829941a5a240869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cc017417999a1751e112cca7324f142ad2c25ecd863e8e3829941a5a240869->enter($__internal_34cc017417999a1751e112cca7324f142ad2c25ecd863e8e3829941a5a240869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b6d4f96f55445d8eaea327e82756db792c3a32794c9dbcd93c12ec0b9919dff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d4f96f55445d8eaea327e82756db792c3a32794c9dbcd93c12ec0b9919dff0->enter($__internal_b6d4f96f55445d8eaea327e82756db792c3a32794c9dbcd93c12ec0b9919dff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_34cc017417999a1751e112cca7324f142ad2c25ecd863e8e3829941a5a240869->leave($__internal_34cc017417999a1751e112cca7324f142ad2c25ecd863e8e3829941a5a240869_prof);

        
        $__internal_b6d4f96f55445d8eaea327e82756db792c3a32794c9dbcd93c12ec0b9919dff0->leave($__internal_b6d4f96f55445d8eaea327e82756db792c3a32794c9dbcd93c12ec0b9919dff0_prof);

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
