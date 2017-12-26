<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_1fb395d6bd77bc45bf04e4b5adef1ad21d65d991d099ae98f7b41014523ddde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb395d6bd77bc45bf04e4b5adef1ad21d65d991d099ae98f7b41014523ddde2->enter($__internal_1fb395d6bd77bc45bf04e4b5adef1ad21d65d991d099ae98f7b41014523ddde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2b3a665ba49e4b3aa0888373dc7091e41eb0331097a425336e687c864a021891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3a665ba49e4b3aa0888373dc7091e41eb0331097a425336e687c864a021891->enter($__internal_2b3a665ba49e4b3aa0888373dc7091e41eb0331097a425336e687c864a021891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1fb395d6bd77bc45bf04e4b5adef1ad21d65d991d099ae98f7b41014523ddde2->leave($__internal_1fb395d6bd77bc45bf04e4b5adef1ad21d65d991d099ae98f7b41014523ddde2_prof);

        
        $__internal_2b3a665ba49e4b3aa0888373dc7091e41eb0331097a425336e687c864a021891->leave($__internal_2b3a665ba49e4b3aa0888373dc7091e41eb0331097a425336e687c864a021891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
