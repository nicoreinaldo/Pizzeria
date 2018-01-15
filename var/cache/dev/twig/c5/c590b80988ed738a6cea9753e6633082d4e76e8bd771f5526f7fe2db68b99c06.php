<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f7ce00574c5bd29e62984aa134fd8315477d925b1493a8ad7b45ef3c82115038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1744694d5b52183aeca35bd4e37865afc52b30ad312c52e0c1432bc610173c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1744694d5b52183aeca35bd4e37865afc52b30ad312c52e0c1432bc610173c9a->enter($__internal_1744694d5b52183aeca35bd4e37865afc52b30ad312c52e0c1432bc610173c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3d0d8e56762081cfd6af8f7416e4a6667c90c506bbedfe5ef245532b07a89d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0d8e56762081cfd6af8f7416e4a6667c90c506bbedfe5ef245532b07a89d28->enter($__internal_3d0d8e56762081cfd6af8f7416e4a6667c90c506bbedfe5ef245532b07a89d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1744694d5b52183aeca35bd4e37865afc52b30ad312c52e0c1432bc610173c9a->leave($__internal_1744694d5b52183aeca35bd4e37865afc52b30ad312c52e0c1432bc610173c9a_prof);

        
        $__internal_3d0d8e56762081cfd6af8f7416e4a6667c90c506bbedfe5ef245532b07a89d28->leave($__internal_3d0d8e56762081cfd6af8f7416e4a6667c90c506bbedfe5ef245532b07a89d28_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_eb0f141268e2c65d2eb2af61f8fe17813a97716694d31d663727aeafb0d038a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0f141268e2c65d2eb2af61f8fe17813a97716694d31d663727aeafb0d038a5->enter($__internal_eb0f141268e2c65d2eb2af61f8fe17813a97716694d31d663727aeafb0d038a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dce954fb2e57626df1760beed270ea72c1136a745f5891c0c9361ffb2700f75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce954fb2e57626df1760beed270ea72c1136a745f5891c0c9361ffb2700f75c->enter($__internal_dce954fb2e57626df1760beed270ea72c1136a745f5891c0c9361ffb2700f75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_dce954fb2e57626df1760beed270ea72c1136a745f5891c0c9361ffb2700f75c->leave($__internal_dce954fb2e57626df1760beed270ea72c1136a745f5891c0c9361ffb2700f75c_prof);

        
        $__internal_eb0f141268e2c65d2eb2af61f8fe17813a97716694d31d663727aeafb0d038a5->leave($__internal_eb0f141268e2c65d2eb2af61f8fe17813a97716694d31d663727aeafb0d038a5_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_345a0f10c85867dd8f5c98a9b5e6296c4363c98e8895787c931b42c8e0d842c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345a0f10c85867dd8f5c98a9b5e6296c4363c98e8895787c931b42c8e0d842c0->enter($__internal_345a0f10c85867dd8f5c98a9b5e6296c4363c98e8895787c931b42c8e0d842c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cf1a6aba7da0bc0a88dda7111f27c656b67e673c4e7d60a86f8c8d2c679ca206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1a6aba7da0bc0a88dda7111f27c656b67e673c4e7d60a86f8c8d2c679ca206->enter($__internal_cf1a6aba7da0bc0a88dda7111f27c656b67e673c4e7d60a86f8c8d2c679ca206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_cf1a6aba7da0bc0a88dda7111f27c656b67e673c4e7d60a86f8c8d2c679ca206->leave($__internal_cf1a6aba7da0bc0a88dda7111f27c656b67e673c4e7d60a86f8c8d2c679ca206_prof);

        
        $__internal_345a0f10c85867dd8f5c98a9b5e6296c4363c98e8895787c931b42c8e0d842c0->leave($__internal_345a0f10c85867dd8f5c98a9b5e6296c4363c98e8895787c931b42c8e0d842c0_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b9e48d64338808987cda11dd1d75d002fab9bbb34a2af6e0077476134ccefc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e48d64338808987cda11dd1d75d002fab9bbb34a2af6e0077476134ccefc38->enter($__internal_b9e48d64338808987cda11dd1d75d002fab9bbb34a2af6e0077476134ccefc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_cf573895dc0ff6884ad2f3e0e56f9ce259a7aef5c79bf897c611e5efb1745819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf573895dc0ff6884ad2f3e0e56f9ce259a7aef5c79bf897c611e5efb1745819->enter($__internal_cf573895dc0ff6884ad2f3e0e56f9ce259a7aef5c79bf897c611e5efb1745819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_cf573895dc0ff6884ad2f3e0e56f9ce259a7aef5c79bf897c611e5efb1745819->leave($__internal_cf573895dc0ff6884ad2f3e0e56f9ce259a7aef5c79bf897c611e5efb1745819_prof);

        
        $__internal_b9e48d64338808987cda11dd1d75d002fab9bbb34a2af6e0077476134ccefc38->leave($__internal_b9e48d64338808987cda11dd1d75d002fab9bbb34a2af6e0077476134ccefc38_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_410a0ac89980e872f50ca0c7bc593a9593acb8beaa7382d614e130cd8cc77939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410a0ac89980e872f50ca0c7bc593a9593acb8beaa7382d614e130cd8cc77939->enter($__internal_410a0ac89980e872f50ca0c7bc593a9593acb8beaa7382d614e130cd8cc77939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_e8f95b88ee0da573aed317ac9489924ef294181f16392c6336e4edbb71b638db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f95b88ee0da573aed317ac9489924ef294181f16392c6336e4edbb71b638db->enter($__internal_e8f95b88ee0da573aed317ac9489924ef294181f16392c6336e4edbb71b638db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_e8f95b88ee0da573aed317ac9489924ef294181f16392c6336e4edbb71b638db->leave($__internal_e8f95b88ee0da573aed317ac9489924ef294181f16392c6336e4edbb71b638db_prof);

        
        $__internal_410a0ac89980e872f50ca0c7bc593a9593acb8beaa7382d614e130cd8cc77939->leave($__internal_410a0ac89980e872f50ca0c7bc593a9593acb8beaa7382d614e130cd8cc77939_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
