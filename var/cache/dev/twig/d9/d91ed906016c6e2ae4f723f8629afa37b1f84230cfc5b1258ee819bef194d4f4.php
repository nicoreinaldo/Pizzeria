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
        $__internal_40a0519d865845620cde75a1062d34ce9cf9d1ff676b1166635aa31c799eaab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a0519d865845620cde75a1062d34ce9cf9d1ff676b1166635aa31c799eaab1->enter($__internal_40a0519d865845620cde75a1062d34ce9cf9d1ff676b1166635aa31c799eaab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_91c2fc3fe609fe7253df8bcbf0c3644026b3ea18e5be47c10ffb96451417f437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c2fc3fe609fe7253df8bcbf0c3644026b3ea18e5be47c10ffb96451417f437->enter($__internal_91c2fc3fe609fe7253df8bcbf0c3644026b3ea18e5be47c10ffb96451417f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_40a0519d865845620cde75a1062d34ce9cf9d1ff676b1166635aa31c799eaab1->leave($__internal_40a0519d865845620cde75a1062d34ce9cf9d1ff676b1166635aa31c799eaab1_prof);

        
        $__internal_91c2fc3fe609fe7253df8bcbf0c3644026b3ea18e5be47c10ffb96451417f437->leave($__internal_91c2fc3fe609fe7253df8bcbf0c3644026b3ea18e5be47c10ffb96451417f437_prof);

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
