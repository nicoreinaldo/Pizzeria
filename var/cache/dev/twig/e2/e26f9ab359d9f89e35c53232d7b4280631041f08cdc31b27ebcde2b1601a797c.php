<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_8f7777103bb0d22352dd62de62eb293fa013a989e7320b206322eca80ab81c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7777103bb0d22352dd62de62eb293fa013a989e7320b206322eca80ab81c85->enter($__internal_8f7777103bb0d22352dd62de62eb293fa013a989e7320b206322eca80ab81c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_73a92bc2b50c9c889b2bbe50edbc5ad8d7e6fec49571a89b08e6b1a59b51d908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a92bc2b50c9c889b2bbe50edbc5ad8d7e6fec49571a89b08e6b1a59b51d908->enter($__internal_73a92bc2b50c9c889b2bbe50edbc5ad8d7e6fec49571a89b08e6b1a59b51d908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8f7777103bb0d22352dd62de62eb293fa013a989e7320b206322eca80ab81c85->leave($__internal_8f7777103bb0d22352dd62de62eb293fa013a989e7320b206322eca80ab81c85_prof);

        
        $__internal_73a92bc2b50c9c889b2bbe50edbc5ad8d7e6fec49571a89b08e6b1a59b51d908->leave($__internal_73a92bc2b50c9c889b2bbe50edbc5ad8d7e6fec49571a89b08e6b1a59b51d908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
