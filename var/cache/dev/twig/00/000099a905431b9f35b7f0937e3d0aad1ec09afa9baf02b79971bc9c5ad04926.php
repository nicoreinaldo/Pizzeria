<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_25a5ced90fefbcfaf7c196f128834edc460478693aff878c66ed1999b1ca34b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a5ced90fefbcfaf7c196f128834edc460478693aff878c66ed1999b1ca34b1->enter($__internal_25a5ced90fefbcfaf7c196f128834edc460478693aff878c66ed1999b1ca34b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9f3a1e0f7eddf4f6d36a7bdc32efd6b8536a02cfd13219d00847700e16c8e35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3a1e0f7eddf4f6d36a7bdc32efd6b8536a02cfd13219d00847700e16c8e35e->enter($__internal_9f3a1e0f7eddf4f6d36a7bdc32efd6b8536a02cfd13219d00847700e16c8e35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_25a5ced90fefbcfaf7c196f128834edc460478693aff878c66ed1999b1ca34b1->leave($__internal_25a5ced90fefbcfaf7c196f128834edc460478693aff878c66ed1999b1ca34b1_prof);

        
        $__internal_9f3a1e0f7eddf4f6d36a7bdc32efd6b8536a02cfd13219d00847700e16c8e35e->leave($__internal_9f3a1e0f7eddf4f6d36a7bdc32efd6b8536a02cfd13219d00847700e16c8e35e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
