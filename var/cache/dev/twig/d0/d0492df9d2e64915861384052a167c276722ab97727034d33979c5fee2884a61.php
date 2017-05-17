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
        $__internal_b8ff1ad5e7ef7f526d2a84ea7b93f16a94669c35905f51183c83e80b0d3c7b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ff1ad5e7ef7f526d2a84ea7b93f16a94669c35905f51183c83e80b0d3c7b30->enter($__internal_b8ff1ad5e7ef7f526d2a84ea7b93f16a94669c35905f51183c83e80b0d3c7b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_280765370882bcb8ca188d727c071de4564ce4097e2082928856c45e853f98f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280765370882bcb8ca188d727c071de4564ce4097e2082928856c45e853f98f1->enter($__internal_280765370882bcb8ca188d727c071de4564ce4097e2082928856c45e853f98f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b8ff1ad5e7ef7f526d2a84ea7b93f16a94669c35905f51183c83e80b0d3c7b30->leave($__internal_b8ff1ad5e7ef7f526d2a84ea7b93f16a94669c35905f51183c83e80b0d3c7b30_prof);

        
        $__internal_280765370882bcb8ca188d727c071de4564ce4097e2082928856c45e853f98f1->leave($__internal_280765370882bcb8ca188d727c071de4564ce4097e2082928856c45e853f98f1_prof);

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
