<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_1f983b3230d78927885748b96c9965a8a28237ef8e93aa7239ea771a9daad465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f983b3230d78927885748b96c9965a8a28237ef8e93aa7239ea771a9daad465->enter($__internal_1f983b3230d78927885748b96c9965a8a28237ef8e93aa7239ea771a9daad465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5d619cd11cc008a9148f384073c741cf1b58205a38c48e7a7a5251d8032e1a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d619cd11cc008a9148f384073c741cf1b58205a38c48e7a7a5251d8032e1a35->enter($__internal_5d619cd11cc008a9148f384073c741cf1b58205a38c48e7a7a5251d8032e1a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1f983b3230d78927885748b96c9965a8a28237ef8e93aa7239ea771a9daad465->leave($__internal_1f983b3230d78927885748b96c9965a8a28237ef8e93aa7239ea771a9daad465_prof);

        
        $__internal_5d619cd11cc008a9148f384073c741cf1b58205a38c48e7a7a5251d8032e1a35->leave($__internal_5d619cd11cc008a9148f384073c741cf1b58205a38c48e7a7a5251d8032e1a35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
