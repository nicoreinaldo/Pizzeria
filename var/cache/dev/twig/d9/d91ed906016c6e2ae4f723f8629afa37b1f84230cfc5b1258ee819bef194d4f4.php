<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_aeaa411a0e0eb78c58baa3383c246c8299599216dc755ced4287d14b83b5084e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeaa411a0e0eb78c58baa3383c246c8299599216dc755ced4287d14b83b5084e->enter($__internal_aeaa411a0e0eb78c58baa3383c246c8299599216dc755ced4287d14b83b5084e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_eee0aa7ac01d7a6cb6a3598bc70eb5e5df4ea54831f8f14b58d3ffe253e1d04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee0aa7ac01d7a6cb6a3598bc70eb5e5df4ea54831f8f14b58d3ffe253e1d04c->enter($__internal_eee0aa7ac01d7a6cb6a3598bc70eb5e5df4ea54831f8f14b58d3ffe253e1d04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aeaa411a0e0eb78c58baa3383c246c8299599216dc755ced4287d14b83b5084e->leave($__internal_aeaa411a0e0eb78c58baa3383c246c8299599216dc755ced4287d14b83b5084e_prof);

        
        $__internal_eee0aa7ac01d7a6cb6a3598bc70eb5e5df4ea54831f8f14b58d3ffe253e1d04c->leave($__internal_eee0aa7ac01d7a6cb6a3598bc70eb5e5df4ea54831f8f14b58d3ffe253e1d04c_prof);

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
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
