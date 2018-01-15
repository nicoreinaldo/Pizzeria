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
        $__internal_d9ddf6f4b8427614ff80b6ac6cca9e873940e827a859e49b353aff1aa35ca3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ddf6f4b8427614ff80b6ac6cca9e873940e827a859e49b353aff1aa35ca3d5->enter($__internal_d9ddf6f4b8427614ff80b6ac6cca9e873940e827a859e49b353aff1aa35ca3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a2242d45f1d43bf760a3257e0dcf4b4e4b20a91252b392b972dbf36991c69ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2242d45f1d43bf760a3257e0dcf4b4e4b20a91252b392b972dbf36991c69ebb->enter($__internal_a2242d45f1d43bf760a3257e0dcf4b4e4b20a91252b392b972dbf36991c69ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d9ddf6f4b8427614ff80b6ac6cca9e873940e827a859e49b353aff1aa35ca3d5->leave($__internal_d9ddf6f4b8427614ff80b6ac6cca9e873940e827a859e49b353aff1aa35ca3d5_prof);

        
        $__internal_a2242d45f1d43bf760a3257e0dcf4b4e4b20a91252b392b972dbf36991c69ebb->leave($__internal_a2242d45f1d43bf760a3257e0dcf4b4e4b20a91252b392b972dbf36991c69ebb_prof);

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
