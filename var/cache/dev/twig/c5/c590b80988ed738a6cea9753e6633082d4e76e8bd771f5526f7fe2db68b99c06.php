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
        $__internal_d72e0b302dd02276e7b8472b0c40a0a0ef94982e0977808415dc6cce1b1dabd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72e0b302dd02276e7b8472b0c40a0a0ef94982e0977808415dc6cce1b1dabd4->enter($__internal_d72e0b302dd02276e7b8472b0c40a0a0ef94982e0977808415dc6cce1b1dabd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_f77990f1095f247f7c2c71abeb5b0feaefabc7c060e4c7e53401bd4e4243c32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77990f1095f247f7c2c71abeb5b0feaefabc7c060e4c7e53401bd4e4243c32d->enter($__internal_f77990f1095f247f7c2c71abeb5b0feaefabc7c060e4c7e53401bd4e4243c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_d72e0b302dd02276e7b8472b0c40a0a0ef94982e0977808415dc6cce1b1dabd4->leave($__internal_d72e0b302dd02276e7b8472b0c40a0a0ef94982e0977808415dc6cce1b1dabd4_prof);

        
        $__internal_f77990f1095f247f7c2c71abeb5b0feaefabc7c060e4c7e53401bd4e4243c32d->leave($__internal_f77990f1095f247f7c2c71abeb5b0feaefabc7c060e4c7e53401bd4e4243c32d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_773c117fc09a1c035c0aa79bec467a2be25b41d52e19d9bca0194c88d5006a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773c117fc09a1c035c0aa79bec467a2be25b41d52e19d9bca0194c88d5006a46->enter($__internal_773c117fc09a1c035c0aa79bec467a2be25b41d52e19d9bca0194c88d5006a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e4f0521b0eda7a2971fdb65661a2ba67877e36c5c39942eb0d5f47bd2dbfb624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f0521b0eda7a2971fdb65661a2ba67877e36c5c39942eb0d5f47bd2dbfb624->enter($__internal_e4f0521b0eda7a2971fdb65661a2ba67877e36c5c39942eb0d5f47bd2dbfb624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e4f0521b0eda7a2971fdb65661a2ba67877e36c5c39942eb0d5f47bd2dbfb624->leave($__internal_e4f0521b0eda7a2971fdb65661a2ba67877e36c5c39942eb0d5f47bd2dbfb624_prof);

        
        $__internal_773c117fc09a1c035c0aa79bec467a2be25b41d52e19d9bca0194c88d5006a46->leave($__internal_773c117fc09a1c035c0aa79bec467a2be25b41d52e19d9bca0194c88d5006a46_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f2bca7eb816f2a0480264efad68a1be11208aa92551040cd7b339d6e0ce89304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bca7eb816f2a0480264efad68a1be11208aa92551040cd7b339d6e0ce89304->enter($__internal_f2bca7eb816f2a0480264efad68a1be11208aa92551040cd7b339d6e0ce89304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_26104424203e2096748e2203347de6d58d0ef1e50716a87d0c61949448a611ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26104424203e2096748e2203347de6d58d0ef1e50716a87d0c61949448a611ea->enter($__internal_26104424203e2096748e2203347de6d58d0ef1e50716a87d0c61949448a611ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_26104424203e2096748e2203347de6d58d0ef1e50716a87d0c61949448a611ea->leave($__internal_26104424203e2096748e2203347de6d58d0ef1e50716a87d0c61949448a611ea_prof);

        
        $__internal_f2bca7eb816f2a0480264efad68a1be11208aa92551040cd7b339d6e0ce89304->leave($__internal_f2bca7eb816f2a0480264efad68a1be11208aa92551040cd7b339d6e0ce89304_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_79af0ec07a373c091d409c72f4648201fdbfa5164da12bfe02d071dee443414a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79af0ec07a373c091d409c72f4648201fdbfa5164da12bfe02d071dee443414a->enter($__internal_79af0ec07a373c091d409c72f4648201fdbfa5164da12bfe02d071dee443414a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b53f7d6ffc2efd683d8eb2090af6c5a0589c8d4b1d334bebe25092c2d397681f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53f7d6ffc2efd683d8eb2090af6c5a0589c8d4b1d334bebe25092c2d397681f->enter($__internal_b53f7d6ffc2efd683d8eb2090af6c5a0589c8d4b1d334bebe25092c2d397681f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b53f7d6ffc2efd683d8eb2090af6c5a0589c8d4b1d334bebe25092c2d397681f->leave($__internal_b53f7d6ffc2efd683d8eb2090af6c5a0589c8d4b1d334bebe25092c2d397681f_prof);

        
        $__internal_79af0ec07a373c091d409c72f4648201fdbfa5164da12bfe02d071dee443414a->leave($__internal_79af0ec07a373c091d409c72f4648201fdbfa5164da12bfe02d071dee443414a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_93fac5eab30ef91efa101c9bfdbb2eec8e4e97ba35666942631af44a4ebdba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fac5eab30ef91efa101c9bfdbb2eec8e4e97ba35666942631af44a4ebdba54->enter($__internal_93fac5eab30ef91efa101c9bfdbb2eec8e4e97ba35666942631af44a4ebdba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5d0999b5faacd64de46341eb25a16afca70888e93051435c3c15fe806541ef1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0999b5faacd64de46341eb25a16afca70888e93051435c3c15fe806541ef1e->enter($__internal_5d0999b5faacd64de46341eb25a16afca70888e93051435c3c15fe806541ef1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_5d0999b5faacd64de46341eb25a16afca70888e93051435c3c15fe806541ef1e->leave($__internal_5d0999b5faacd64de46341eb25a16afca70888e93051435c3c15fe806541ef1e_prof);

        
        $__internal_93fac5eab30ef91efa101c9bfdbb2eec8e4e97ba35666942631af44a4ebdba54->leave($__internal_93fac5eab30ef91efa101c9bfdbb2eec8e4e97ba35666942631af44a4ebdba54_prof);

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
