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
        $__internal_49d4d129ef1b8247f161540d0a23b351622959c814dd22d3bc36b8cc5fbb41af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d4d129ef1b8247f161540d0a23b351622959c814dd22d3bc36b8cc5fbb41af->enter($__internal_49d4d129ef1b8247f161540d0a23b351622959c814dd22d3bc36b8cc5fbb41af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d57b1f85637a5d06f82a8ad4f02ef0bf2cbd9804c9c527fb8d712c86d9dc6402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57b1f85637a5d06f82a8ad4f02ef0bf2cbd9804c9c527fb8d712c86d9dc6402->enter($__internal_d57b1f85637a5d06f82a8ad4f02ef0bf2cbd9804c9c527fb8d712c86d9dc6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_49d4d129ef1b8247f161540d0a23b351622959c814dd22d3bc36b8cc5fbb41af->leave($__internal_49d4d129ef1b8247f161540d0a23b351622959c814dd22d3bc36b8cc5fbb41af_prof);

        
        $__internal_d57b1f85637a5d06f82a8ad4f02ef0bf2cbd9804c9c527fb8d712c86d9dc6402->leave($__internal_d57b1f85637a5d06f82a8ad4f02ef0bf2cbd9804c9c527fb8d712c86d9dc6402_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6ac24aed0abcfc3379b93f1ba5efcf4bbd2b95a83f725ec5c8352613f2ecadf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac24aed0abcfc3379b93f1ba5efcf4bbd2b95a83f725ec5c8352613f2ecadf9->enter($__internal_6ac24aed0abcfc3379b93f1ba5efcf4bbd2b95a83f725ec5c8352613f2ecadf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3eff30fbd623f379113c7cb281026e63e7845d06bf312d4d8ba7b80b33540c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eff30fbd623f379113c7cb281026e63e7845d06bf312d4d8ba7b80b33540c1e->enter($__internal_3eff30fbd623f379113c7cb281026e63e7845d06bf312d4d8ba7b80b33540c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3eff30fbd623f379113c7cb281026e63e7845d06bf312d4d8ba7b80b33540c1e->leave($__internal_3eff30fbd623f379113c7cb281026e63e7845d06bf312d4d8ba7b80b33540c1e_prof);

        
        $__internal_6ac24aed0abcfc3379b93f1ba5efcf4bbd2b95a83f725ec5c8352613f2ecadf9->leave($__internal_6ac24aed0abcfc3379b93f1ba5efcf4bbd2b95a83f725ec5c8352613f2ecadf9_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f52e6fab9010afff814bd2ff07ba3e5c27308b8f3ceea3dadb7b59c9013681ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52e6fab9010afff814bd2ff07ba3e5c27308b8f3ceea3dadb7b59c9013681ae->enter($__internal_f52e6fab9010afff814bd2ff07ba3e5c27308b8f3ceea3dadb7b59c9013681ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_872ce2529422059ab5fa8ff6147867d387528d7ddcb078bd463449b25fcada25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872ce2529422059ab5fa8ff6147867d387528d7ddcb078bd463449b25fcada25->enter($__internal_872ce2529422059ab5fa8ff6147867d387528d7ddcb078bd463449b25fcada25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_872ce2529422059ab5fa8ff6147867d387528d7ddcb078bd463449b25fcada25->leave($__internal_872ce2529422059ab5fa8ff6147867d387528d7ddcb078bd463449b25fcada25_prof);

        
        $__internal_f52e6fab9010afff814bd2ff07ba3e5c27308b8f3ceea3dadb7b59c9013681ae->leave($__internal_f52e6fab9010afff814bd2ff07ba3e5c27308b8f3ceea3dadb7b59c9013681ae_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b55b9639d18bf16f3bfac5c61015ba38830cee59931680edda13a34b259d84ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55b9639d18bf16f3bfac5c61015ba38830cee59931680edda13a34b259d84ab->enter($__internal_b55b9639d18bf16f3bfac5c61015ba38830cee59931680edda13a34b259d84ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0d79f2ff900f35f3f2b710b7779782a8c400c2f2aa36926726a8386695fcc68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d79f2ff900f35f3f2b710b7779782a8c400c2f2aa36926726a8386695fcc68c->enter($__internal_0d79f2ff900f35f3f2b710b7779782a8c400c2f2aa36926726a8386695fcc68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0d79f2ff900f35f3f2b710b7779782a8c400c2f2aa36926726a8386695fcc68c->leave($__internal_0d79f2ff900f35f3f2b710b7779782a8c400c2f2aa36926726a8386695fcc68c_prof);

        
        $__internal_b55b9639d18bf16f3bfac5c61015ba38830cee59931680edda13a34b259d84ab->leave($__internal_b55b9639d18bf16f3bfac5c61015ba38830cee59931680edda13a34b259d84ab_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_090d9673fcb833bbd86a1f5165d0eec948c8479aee39924abc66f0aa9cadfe36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090d9673fcb833bbd86a1f5165d0eec948c8479aee39924abc66f0aa9cadfe36->enter($__internal_090d9673fcb833bbd86a1f5165d0eec948c8479aee39924abc66f0aa9cadfe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_938d4512ae0ba256b10b57a6e35d3f09b78cee5b6cae6ac7d74e8fba8a5e0874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938d4512ae0ba256b10b57a6e35d3f09b78cee5b6cae6ac7d74e8fba8a5e0874->enter($__internal_938d4512ae0ba256b10b57a6e35d3f09b78cee5b6cae6ac7d74e8fba8a5e0874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_938d4512ae0ba256b10b57a6e35d3f09b78cee5b6cae6ac7d74e8fba8a5e0874->leave($__internal_938d4512ae0ba256b10b57a6e35d3f09b78cee5b6cae6ac7d74e8fba8a5e0874_prof);

        
        $__internal_090d9673fcb833bbd86a1f5165d0eec948c8479aee39924abc66f0aa9cadfe36->leave($__internal_090d9673fcb833bbd86a1f5165d0eec948c8479aee39924abc66f0aa9cadfe36_prof);

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
