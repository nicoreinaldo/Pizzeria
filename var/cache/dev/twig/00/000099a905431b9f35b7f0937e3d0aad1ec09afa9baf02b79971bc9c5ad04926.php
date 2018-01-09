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
        $__internal_7be0b8eb15bb20383054ac2ca8054852d696202b4f8283f9706429d198331a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be0b8eb15bb20383054ac2ca8054852d696202b4f8283f9706429d198331a15->enter($__internal_7be0b8eb15bb20383054ac2ca8054852d696202b4f8283f9706429d198331a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_87d8ad9a8f4cb9817cc33c99a1a26bb4763f5e2158b7b6b3c061a64131cbcd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d8ad9a8f4cb9817cc33c99a1a26bb4763f5e2158b7b6b3c061a64131cbcd5d->enter($__internal_87d8ad9a8f4cb9817cc33c99a1a26bb4763f5e2158b7b6b3c061a64131cbcd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7be0b8eb15bb20383054ac2ca8054852d696202b4f8283f9706429d198331a15->leave($__internal_7be0b8eb15bb20383054ac2ca8054852d696202b4f8283f9706429d198331a15_prof);

        
        $__internal_87d8ad9a8f4cb9817cc33c99a1a26bb4763f5e2158b7b6b3c061a64131cbcd5d->leave($__internal_87d8ad9a8f4cb9817cc33c99a1a26bb4763f5e2158b7b6b3c061a64131cbcd5d_prof);

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
