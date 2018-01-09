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
        $__internal_82d252a997f451aa96f8f46087fa5b3549802626e3fa4f62541f4fa5e3de932e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d252a997f451aa96f8f46087fa5b3549802626e3fa4f62541f4fa5e3de932e->enter($__internal_82d252a997f451aa96f8f46087fa5b3549802626e3fa4f62541f4fa5e3de932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4c886062e6883377ce48d35fdb44a49b46ceaf4b38556e566b13cbeef5e33904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c886062e6883377ce48d35fdb44a49b46ceaf4b38556e566b13cbeef5e33904->enter($__internal_4c886062e6883377ce48d35fdb44a49b46ceaf4b38556e566b13cbeef5e33904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_82d252a997f451aa96f8f46087fa5b3549802626e3fa4f62541f4fa5e3de932e->leave($__internal_82d252a997f451aa96f8f46087fa5b3549802626e3fa4f62541f4fa5e3de932e_prof);

        
        $__internal_4c886062e6883377ce48d35fdb44a49b46ceaf4b38556e566b13cbeef5e33904->leave($__internal_4c886062e6883377ce48d35fdb44a49b46ceaf4b38556e566b13cbeef5e33904_prof);

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
