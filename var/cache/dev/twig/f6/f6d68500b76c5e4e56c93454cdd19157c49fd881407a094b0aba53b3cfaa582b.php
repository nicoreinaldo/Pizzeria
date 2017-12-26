<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_b69ea4d05dfa31a0e893a8a0c3127a050a8ed16d4aa3d514e8177e919da71be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69ea4d05dfa31a0e893a8a0c3127a050a8ed16d4aa3d514e8177e919da71be6->enter($__internal_b69ea4d05dfa31a0e893a8a0c3127a050a8ed16d4aa3d514e8177e919da71be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b49c7f575f7c08a96cb5dc251d6702db4cb741498545f3e010722e9cdb842b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49c7f575f7c08a96cb5dc251d6702db4cb741498545f3e010722e9cdb842b39->enter($__internal_b49c7f575f7c08a96cb5dc251d6702db4cb741498545f3e010722e9cdb842b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b69ea4d05dfa31a0e893a8a0c3127a050a8ed16d4aa3d514e8177e919da71be6->leave($__internal_b69ea4d05dfa31a0e893a8a0c3127a050a8ed16d4aa3d514e8177e919da71be6_prof);

        
        $__internal_b49c7f575f7c08a96cb5dc251d6702db4cb741498545f3e010722e9cdb842b39->leave($__internal_b49c7f575f7c08a96cb5dc251d6702db4cb741498545f3e010722e9cdb842b39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
