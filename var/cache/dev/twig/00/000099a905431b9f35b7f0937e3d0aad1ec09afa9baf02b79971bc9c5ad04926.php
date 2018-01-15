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
        $__internal_ef8d8ce649bf12cb7df07acfb5f4cf5189d1cbae24706d664b7dfb82d6c9991e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8d8ce649bf12cb7df07acfb5f4cf5189d1cbae24706d664b7dfb82d6c9991e->enter($__internal_ef8d8ce649bf12cb7df07acfb5f4cf5189d1cbae24706d664b7dfb82d6c9991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ac32c1cee1829ac141cb987380f9d57314c365b896db1551e3d2fcdd9615b36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac32c1cee1829ac141cb987380f9d57314c365b896db1551e3d2fcdd9615b36c->enter($__internal_ac32c1cee1829ac141cb987380f9d57314c365b896db1551e3d2fcdd9615b36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ef8d8ce649bf12cb7df07acfb5f4cf5189d1cbae24706d664b7dfb82d6c9991e->leave($__internal_ef8d8ce649bf12cb7df07acfb5f4cf5189d1cbae24706d664b7dfb82d6c9991e_prof);

        
        $__internal_ac32c1cee1829ac141cb987380f9d57314c365b896db1551e3d2fcdd9615b36c->leave($__internal_ac32c1cee1829ac141cb987380f9d57314c365b896db1551e3d2fcdd9615b36c_prof);

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
