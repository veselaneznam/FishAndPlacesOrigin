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
        $__internal_60dd6ac7d1f7074232a156b9a4f6b5587d16100d8f548f2504077507dfba50c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dd6ac7d1f7074232a156b9a4f6b5587d16100d8f548f2504077507dfba50c2->enter($__internal_60dd6ac7d1f7074232a156b9a4f6b5587d16100d8f548f2504077507dfba50c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cd020c65abb5ad0303d6d091cd1330f97e6b6205563e3522bfdf27f80d0edbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd020c65abb5ad0303d6d091cd1330f97e6b6205563e3522bfdf27f80d0edbef->enter($__internal_cd020c65abb5ad0303d6d091cd1330f97e6b6205563e3522bfdf27f80d0edbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_60dd6ac7d1f7074232a156b9a4f6b5587d16100d8f548f2504077507dfba50c2->leave($__internal_60dd6ac7d1f7074232a156b9a4f6b5587d16100d8f548f2504077507dfba50c2_prof);

        
        $__internal_cd020c65abb5ad0303d6d091cd1330f97e6b6205563e3522bfdf27f80d0edbef->leave($__internal_cd020c65abb5ad0303d6d091cd1330f97e6b6205563e3522bfdf27f80d0edbef_prof);

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
