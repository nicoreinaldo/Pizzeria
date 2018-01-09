<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c4ec9c562b3c6fb36f1760d22af220ae46ea28b187c00dd18add1f55a1035e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c956da98b762d1532f545c432212fe9d14aa5dedf71c78235a52db500749be21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c956da98b762d1532f545c432212fe9d14aa5dedf71c78235a52db500749be21->enter($__internal_c956da98b762d1532f545c432212fe9d14aa5dedf71c78235a52db500749be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_a1d659583a8314aba074b37b6ddeb8a9fec40254873b8abaa87df84f096fe7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d659583a8314aba074b37b6ddeb8a9fec40254873b8abaa87df84f096fe7b2->enter($__internal_a1d659583a8314aba074b37b6ddeb8a9fec40254873b8abaa87df84f096fe7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c956da98b762d1532f545c432212fe9d14aa5dedf71c78235a52db500749be21->leave($__internal_c956da98b762d1532f545c432212fe9d14aa5dedf71c78235a52db500749be21_prof);

        
        $__internal_a1d659583a8314aba074b37b6ddeb8a9fec40254873b8abaa87df84f096fe7b2->leave($__internal_a1d659583a8314aba074b37b6ddeb8a9fec40254873b8abaa87df84f096fe7b2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_040d935d55ff8e4b42202ae31a01a686bca67d95f862c4935c30a6d5d1bbc0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040d935d55ff8e4b42202ae31a01a686bca67d95f862c4935c30a6d5d1bbc0dc->enter($__internal_040d935d55ff8e4b42202ae31a01a686bca67d95f862c4935c30a6d5d1bbc0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7b94ca8b0885d390131d478eeb650f27ca311ae5c89e5e9acf503f8b519eae44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b94ca8b0885d390131d478eeb650f27ca311ae5c89e5e9acf503f8b519eae44->enter($__internal_7b94ca8b0885d390131d478eeb650f27ca311ae5c89e5e9acf503f8b519eae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7b94ca8b0885d390131d478eeb650f27ca311ae5c89e5e9acf503f8b519eae44->leave($__internal_7b94ca8b0885d390131d478eeb650f27ca311ae5c89e5e9acf503f8b519eae44_prof);

        
        $__internal_040d935d55ff8e4b42202ae31a01a686bca67d95f862c4935c30a6d5d1bbc0dc->leave($__internal_040d935d55ff8e4b42202ae31a01a686bca67d95f862c4935c30a6d5d1bbc0dc_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cd770c438fa1843aac2d007b4f49b0ec8fbfe3ce92fda1415ea38e4b82613b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd770c438fa1843aac2d007b4f49b0ec8fbfe3ce92fda1415ea38e4b82613b8c->enter($__internal_cd770c438fa1843aac2d007b4f49b0ec8fbfe3ce92fda1415ea38e4b82613b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_aa3dfc03e02e06b957604e168cf263794ffe0ea896ea90f8e500514b894cd010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3dfc03e02e06b957604e168cf263794ffe0ea896ea90f8e500514b894cd010->enter($__internal_aa3dfc03e02e06b957604e168cf263794ffe0ea896ea90f8e500514b894cd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_aa3dfc03e02e06b957604e168cf263794ffe0ea896ea90f8e500514b894cd010->leave($__internal_aa3dfc03e02e06b957604e168cf263794ffe0ea896ea90f8e500514b894cd010_prof);

        
        $__internal_cd770c438fa1843aac2d007b4f49b0ec8fbfe3ce92fda1415ea38e4b82613b8c->leave($__internal_cd770c438fa1843aac2d007b4f49b0ec8fbfe3ce92fda1415ea38e4b82613b8c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8e9ac7184d07e36242e24748bdf829176c38295783c72e8b67ef8aac0a63c71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9ac7184d07e36242e24748bdf829176c38295783c72e8b67ef8aac0a63c71e->enter($__internal_8e9ac7184d07e36242e24748bdf829176c38295783c72e8b67ef8aac0a63c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b6a35ac2576924b93fccb80f835d0ce046923ce5d95ac308e4e80f321ec75907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a35ac2576924b93fccb80f835d0ce046923ce5d95ac308e4e80f321ec75907->enter($__internal_b6a35ac2576924b93fccb80f835d0ce046923ce5d95ac308e4e80f321ec75907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b6a35ac2576924b93fccb80f835d0ce046923ce5d95ac308e4e80f321ec75907->leave($__internal_b6a35ac2576924b93fccb80f835d0ce046923ce5d95ac308e4e80f321ec75907_prof);

        
        $__internal_8e9ac7184d07e36242e24748bdf829176c38295783c72e8b67ef8aac0a63c71e->leave($__internal_8e9ac7184d07e36242e24748bdf829176c38295783c72e8b67ef8aac0a63c71e_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b8c5ac4ae3d66620bfb2250dcb8009d3bc63376ba5da42fb1e88203e58158acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c5ac4ae3d66620bfb2250dcb8009d3bc63376ba5da42fb1e88203e58158acc->enter($__internal_b8c5ac4ae3d66620bfb2250dcb8009d3bc63376ba5da42fb1e88203e58158acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b3dcd28ab1bc1e0fe6282b94d79b730fc0112d398900156ba4bf97d730ac75f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dcd28ab1bc1e0fe6282b94d79b730fc0112d398900156ba4bf97d730ac75f8->enter($__internal_b3dcd28ab1bc1e0fe6282b94d79b730fc0112d398900156ba4bf97d730ac75f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_4e040256974c5a1f855f9aff03a41e9d97f890bb70b6b99b19f0bb37daab0100 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ac57df746fb72d5cfd619313a152fa95f44ce32bc75d024179115866f0d4ab87 = "{{") && ('' === $__internal_ac57df746fb72d5cfd619313a152fa95f44ce32bc75d024179115866f0d4ab87 || 0 === strpos($__internal_4e040256974c5a1f855f9aff03a41e9d97f890bb70b6b99b19f0bb37daab0100, $__internal_ac57df746fb72d5cfd619313a152fa95f44ce32bc75d024179115866f0d4ab87)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_b3dcd28ab1bc1e0fe6282b94d79b730fc0112d398900156ba4bf97d730ac75f8->leave($__internal_b3dcd28ab1bc1e0fe6282b94d79b730fc0112d398900156ba4bf97d730ac75f8_prof);

        
        $__internal_b8c5ac4ae3d66620bfb2250dcb8009d3bc63376ba5da42fb1e88203e58158acc->leave($__internal_b8c5ac4ae3d66620bfb2250dcb8009d3bc63376ba5da42fb1e88203e58158acc_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_42cdd554a4b5233f78bfcacd5de68e977041055e0ddaa56e0cc7e788104152be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cdd554a4b5233f78bfcacd5de68e977041055e0ddaa56e0cc7e788104152be->enter($__internal_42cdd554a4b5233f78bfcacd5de68e977041055e0ddaa56e0cc7e788104152be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_71be4f8faa66c4ee2ff1c2342e8e6dab5386bda049e7d9e00e1aa63072d7b952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71be4f8faa66c4ee2ff1c2342e8e6dab5386bda049e7d9e00e1aa63072d7b952->enter($__internal_71be4f8faa66c4ee2ff1c2342e8e6dab5386bda049e7d9e00e1aa63072d7b952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_71be4f8faa66c4ee2ff1c2342e8e6dab5386bda049e7d9e00e1aa63072d7b952->leave($__internal_71be4f8faa66c4ee2ff1c2342e8e6dab5386bda049e7d9e00e1aa63072d7b952_prof);

        
        $__internal_42cdd554a4b5233f78bfcacd5de68e977041055e0ddaa56e0cc7e788104152be->leave($__internal_42cdd554a4b5233f78bfcacd5de68e977041055e0ddaa56e0cc7e788104152be_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fa58b4e716aa46cb1ffbbe6df9168ae9ce19622cd12d88d8302312db86209f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa58b4e716aa46cb1ffbbe6df9168ae9ce19622cd12d88d8302312db86209f36->enter($__internal_fa58b4e716aa46cb1ffbbe6df9168ae9ce19622cd12d88d8302312db86209f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_15c9f280958613ceffe875b1f985901ba881be8ac003d6f97ce4d40bcb14d152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c9f280958613ceffe875b1f985901ba881be8ac003d6f97ce4d40bcb14d152->enter($__internal_15c9f280958613ceffe875b1f985901ba881be8ac003d6f97ce4d40bcb14d152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_15c9f280958613ceffe875b1f985901ba881be8ac003d6f97ce4d40bcb14d152->leave($__internal_15c9f280958613ceffe875b1f985901ba881be8ac003d6f97ce4d40bcb14d152_prof);

        
        $__internal_fa58b4e716aa46cb1ffbbe6df9168ae9ce19622cd12d88d8302312db86209f36->leave($__internal_fa58b4e716aa46cb1ffbbe6df9168ae9ce19622cd12d88d8302312db86209f36_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1e4f9a3f5f56a13c7029f4bc66f19451a7ce16b09b7c003365416bc5c8daebc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4f9a3f5f56a13c7029f4bc66f19451a7ce16b09b7c003365416bc5c8daebc5->enter($__internal_1e4f9a3f5f56a13c7029f4bc66f19451a7ce16b09b7c003365416bc5c8daebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b894da69f09abacd88780f246c121741699e6bd522cfa96ac39e1d13c8708833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b894da69f09abacd88780f246c121741699e6bd522cfa96ac39e1d13c8708833->enter($__internal_b894da69f09abacd88780f246c121741699e6bd522cfa96ac39e1d13c8708833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_b894da69f09abacd88780f246c121741699e6bd522cfa96ac39e1d13c8708833->leave($__internal_b894da69f09abacd88780f246c121741699e6bd522cfa96ac39e1d13c8708833_prof);

        
        $__internal_1e4f9a3f5f56a13c7029f4bc66f19451a7ce16b09b7c003365416bc5c8daebc5->leave($__internal_1e4f9a3f5f56a13c7029f4bc66f19451a7ce16b09b7c003365416bc5c8daebc5_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ff97796de5b571c8c3fd9503234c0370995825a30910895885ab1bd9a559b9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff97796de5b571c8c3fd9503234c0370995825a30910895885ab1bd9a559b9c5->enter($__internal_ff97796de5b571c8c3fd9503234c0370995825a30910895885ab1bd9a559b9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_655d9b985edf023c2305ebc6763788c2e08105dddc2817acf9664fea586e52d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655d9b985edf023c2305ebc6763788c2e08105dddc2817acf9664fea586e52d1->enter($__internal_655d9b985edf023c2305ebc6763788c2e08105dddc2817acf9664fea586e52d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_655d9b985edf023c2305ebc6763788c2e08105dddc2817acf9664fea586e52d1->leave($__internal_655d9b985edf023c2305ebc6763788c2e08105dddc2817acf9664fea586e52d1_prof);

        
        $__internal_ff97796de5b571c8c3fd9503234c0370995825a30910895885ab1bd9a559b9c5->leave($__internal_ff97796de5b571c8c3fd9503234c0370995825a30910895885ab1bd9a559b9c5_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_6865c2728898303327e8f5deab67841060f9386d933721341368a5e66c9e658c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6865c2728898303327e8f5deab67841060f9386d933721341368a5e66c9e658c->enter($__internal_6865c2728898303327e8f5deab67841060f9386d933721341368a5e66c9e658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1531d881d41a0adc9a9d2dde7811ca2e3a9b91ea4e5e80e90056bb6d812bd9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1531d881d41a0adc9a9d2dde7811ca2e3a9b91ea4e5e80e90056bb6d812bd9cb->enter($__internal_1531d881d41a0adc9a9d2dde7811ca2e3a9b91ea4e5e80e90056bb6d812bd9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_1531d881d41a0adc9a9d2dde7811ca2e3a9b91ea4e5e80e90056bb6d812bd9cb->leave($__internal_1531d881d41a0adc9a9d2dde7811ca2e3a9b91ea4e5e80e90056bb6d812bd9cb_prof);

        
        $__internal_6865c2728898303327e8f5deab67841060f9386d933721341368a5e66c9e658c->leave($__internal_6865c2728898303327e8f5deab67841060f9386d933721341368a5e66c9e658c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_43114c21cabf27f3d24241b159f54bfc0ea5e17809fc33f5c25849c75057f3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43114c21cabf27f3d24241b159f54bfc0ea5e17809fc33f5c25849c75057f3b3->enter($__internal_43114c21cabf27f3d24241b159f54bfc0ea5e17809fc33f5c25849c75057f3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_834112492829a5b7e1e533ca1b5275295a698f220b418bd32a2e2caf5b8aaf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834112492829a5b7e1e533ca1b5275295a698f220b418bd32a2e2caf5b8aaf5e->enter($__internal_834112492829a5b7e1e533ca1b5275295a698f220b418bd32a2e2caf5b8aaf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_834112492829a5b7e1e533ca1b5275295a698f220b418bd32a2e2caf5b8aaf5e->leave($__internal_834112492829a5b7e1e533ca1b5275295a698f220b418bd32a2e2caf5b8aaf5e_prof);

        
        $__internal_43114c21cabf27f3d24241b159f54bfc0ea5e17809fc33f5c25849c75057f3b3->leave($__internal_43114c21cabf27f3d24241b159f54bfc0ea5e17809fc33f5c25849c75057f3b3_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2e7cae321164096ce217639c97108c9dd14367ceb20884246e37c143d316a6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7cae321164096ce217639c97108c9dd14367ceb20884246e37c143d316a6e0->enter($__internal_2e7cae321164096ce217639c97108c9dd14367ceb20884246e37c143d316a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_35f1f07243c4ada1102e137d6521b9bfc279594c705b8c14a74cefbc7008987c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f1f07243c4ada1102e137d6521b9bfc279594c705b8c14a74cefbc7008987c->enter($__internal_35f1f07243c4ada1102e137d6521b9bfc279594c705b8c14a74cefbc7008987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_35f1f07243c4ada1102e137d6521b9bfc279594c705b8c14a74cefbc7008987c->leave($__internal_35f1f07243c4ada1102e137d6521b9bfc279594c705b8c14a74cefbc7008987c_prof);

        
        $__internal_2e7cae321164096ce217639c97108c9dd14367ceb20884246e37c143d316a6e0->leave($__internal_2e7cae321164096ce217639c97108c9dd14367ceb20884246e37c143d316a6e0_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0af979983fff86b1d2d1a3416d8ec5cd877421b65ee432f084179c554226b74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af979983fff86b1d2d1a3416d8ec5cd877421b65ee432f084179c554226b74f->enter($__internal_0af979983fff86b1d2d1a3416d8ec5cd877421b65ee432f084179c554226b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c1eb1d1e15679b1a8211068ef900477dd396888b01f76f19b2bd37189706fb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1eb1d1e15679b1a8211068ef900477dd396888b01f76f19b2bd37189706fb05->enter($__internal_c1eb1d1e15679b1a8211068ef900477dd396888b01f76f19b2bd37189706fb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_c1eb1d1e15679b1a8211068ef900477dd396888b01f76f19b2bd37189706fb05->leave($__internal_c1eb1d1e15679b1a8211068ef900477dd396888b01f76f19b2bd37189706fb05_prof);

        
        $__internal_0af979983fff86b1d2d1a3416d8ec5cd877421b65ee432f084179c554226b74f->leave($__internal_0af979983fff86b1d2d1a3416d8ec5cd877421b65ee432f084179c554226b74f_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_aa4d576903eb39bbe51ebcd96d045f42611310658966422186d9a5754c4b720f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4d576903eb39bbe51ebcd96d045f42611310658966422186d9a5754c4b720f->enter($__internal_aa4d576903eb39bbe51ebcd96d045f42611310658966422186d9a5754c4b720f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bfd0b23304ba757aaeeb1d7af4c3248fb3757e73f98455c52a7fc1c66b50d05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd0b23304ba757aaeeb1d7af4c3248fb3757e73f98455c52a7fc1c66b50d05c->enter($__internal_bfd0b23304ba757aaeeb1d7af4c3248fb3757e73f98455c52a7fc1c66b50d05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_bfd0b23304ba757aaeeb1d7af4c3248fb3757e73f98455c52a7fc1c66b50d05c->leave($__internal_bfd0b23304ba757aaeeb1d7af4c3248fb3757e73f98455c52a7fc1c66b50d05c_prof);

        
        $__internal_aa4d576903eb39bbe51ebcd96d045f42611310658966422186d9a5754c4b720f->leave($__internal_aa4d576903eb39bbe51ebcd96d045f42611310658966422186d9a5754c4b720f_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d890f617b243b9e0dfe1c69494e416e4e6d530b7cb53cf7caf91e83d1952117b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d890f617b243b9e0dfe1c69494e416e4e6d530b7cb53cf7caf91e83d1952117b->enter($__internal_d890f617b243b9e0dfe1c69494e416e4e6d530b7cb53cf7caf91e83d1952117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_52d858664d3fe74bfb98f556e18a7dbc081457efe3715d6e99bb45c616eda663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d858664d3fe74bfb98f556e18a7dbc081457efe3715d6e99bb45c616eda663->enter($__internal_52d858664d3fe74bfb98f556e18a7dbc081457efe3715d6e99bb45c616eda663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_52d858664d3fe74bfb98f556e18a7dbc081457efe3715d6e99bb45c616eda663->leave($__internal_52d858664d3fe74bfb98f556e18a7dbc081457efe3715d6e99bb45c616eda663_prof);

        
        $__internal_d890f617b243b9e0dfe1c69494e416e4e6d530b7cb53cf7caf91e83d1952117b->leave($__internal_d890f617b243b9e0dfe1c69494e416e4e6d530b7cb53cf7caf91e83d1952117b_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_83ce8bc0450b390f5e8ecd9569cde1460abe686bf4465ecd5037b8ab97d7953a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ce8bc0450b390f5e8ecd9569cde1460abe686bf4465ecd5037b8ab97d7953a->enter($__internal_83ce8bc0450b390f5e8ecd9569cde1460abe686bf4465ecd5037b8ab97d7953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_5123c9b24b9f398b4e10403d3c57d9048e9d5079b9c436c6e90809d673cee256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5123c9b24b9f398b4e10403d3c57d9048e9d5079b9c436c6e90809d673cee256->enter($__internal_5123c9b24b9f398b4e10403d3c57d9048e9d5079b9c436c6e90809d673cee256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_5123c9b24b9f398b4e10403d3c57d9048e9d5079b9c436c6e90809d673cee256->leave($__internal_5123c9b24b9f398b4e10403d3c57d9048e9d5079b9c436c6e90809d673cee256_prof);

        
        $__internal_83ce8bc0450b390f5e8ecd9569cde1460abe686bf4465ecd5037b8ab97d7953a->leave($__internal_83ce8bc0450b390f5e8ecd9569cde1460abe686bf4465ecd5037b8ab97d7953a_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_727d8728449ac88787ea41861c72dd4848831b582e8292179b4c1f05cd6387df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727d8728449ac88787ea41861c72dd4848831b582e8292179b4c1f05cd6387df->enter($__internal_727d8728449ac88787ea41861c72dd4848831b582e8292179b4c1f05cd6387df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ec38ac8db74401f5b81948db89ec4c1e11ed3c9890e9444588321d263c425379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec38ac8db74401f5b81948db89ec4c1e11ed3c9890e9444588321d263c425379->enter($__internal_ec38ac8db74401f5b81948db89ec4c1e11ed3c9890e9444588321d263c425379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ec38ac8db74401f5b81948db89ec4c1e11ed3c9890e9444588321d263c425379->leave($__internal_ec38ac8db74401f5b81948db89ec4c1e11ed3c9890e9444588321d263c425379_prof);

        
        $__internal_727d8728449ac88787ea41861c72dd4848831b582e8292179b4c1f05cd6387df->leave($__internal_727d8728449ac88787ea41861c72dd4848831b582e8292179b4c1f05cd6387df_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cb6e05e2de8a9cf54f02a8e5fc484deab26f3da1b74551be4bb47354b8f02891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6e05e2de8a9cf54f02a8e5fc484deab26f3da1b74551be4bb47354b8f02891->enter($__internal_cb6e05e2de8a9cf54f02a8e5fc484deab26f3da1b74551be4bb47354b8f02891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a3627acff2014562890dcd56be8f8f3ca2fdd066e7773ac284e33a5a29b353f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3627acff2014562890dcd56be8f8f3ca2fdd066e7773ac284e33a5a29b353f5->enter($__internal_a3627acff2014562890dcd56be8f8f3ca2fdd066e7773ac284e33a5a29b353f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a3627acff2014562890dcd56be8f8f3ca2fdd066e7773ac284e33a5a29b353f5->leave($__internal_a3627acff2014562890dcd56be8f8f3ca2fdd066e7773ac284e33a5a29b353f5_prof);

        
        $__internal_cb6e05e2de8a9cf54f02a8e5fc484deab26f3da1b74551be4bb47354b8f02891->leave($__internal_cb6e05e2de8a9cf54f02a8e5fc484deab26f3da1b74551be4bb47354b8f02891_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_981482e8f77ae5ed792e5143a817d03305808d2135a59bc716b69cbdfa8db545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981482e8f77ae5ed792e5143a817d03305808d2135a59bc716b69cbdfa8db545->enter($__internal_981482e8f77ae5ed792e5143a817d03305808d2135a59bc716b69cbdfa8db545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_081ec9945aa1c9fdfdbd0bbc6b3c7e8ab03f1de4aeff015103824f5cfaaa1b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081ec9945aa1c9fdfdbd0bbc6b3c7e8ab03f1de4aeff015103824f5cfaaa1b2e->enter($__internal_081ec9945aa1c9fdfdbd0bbc6b3c7e8ab03f1de4aeff015103824f5cfaaa1b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_081ec9945aa1c9fdfdbd0bbc6b3c7e8ab03f1de4aeff015103824f5cfaaa1b2e->leave($__internal_081ec9945aa1c9fdfdbd0bbc6b3c7e8ab03f1de4aeff015103824f5cfaaa1b2e_prof);

        
        $__internal_981482e8f77ae5ed792e5143a817d03305808d2135a59bc716b69cbdfa8db545->leave($__internal_981482e8f77ae5ed792e5143a817d03305808d2135a59bc716b69cbdfa8db545_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_817d9d65605d8174f0ba8082002d7e8824674f551db736ffef07c7ca4ad0723f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817d9d65605d8174f0ba8082002d7e8824674f551db736ffef07c7ca4ad0723f->enter($__internal_817d9d65605d8174f0ba8082002d7e8824674f551db736ffef07c7ca4ad0723f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_da8ca01a34e6cea715f945ea4efc8b1ad4775551c61c7eb58018eca5b622a906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8ca01a34e6cea715f945ea4efc8b1ad4775551c61c7eb58018eca5b622a906->enter($__internal_da8ca01a34e6cea715f945ea4efc8b1ad4775551c61c7eb58018eca5b622a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_da8ca01a34e6cea715f945ea4efc8b1ad4775551c61c7eb58018eca5b622a906->leave($__internal_da8ca01a34e6cea715f945ea4efc8b1ad4775551c61c7eb58018eca5b622a906_prof);

        
        $__internal_817d9d65605d8174f0ba8082002d7e8824674f551db736ffef07c7ca4ad0723f->leave($__internal_817d9d65605d8174f0ba8082002d7e8824674f551db736ffef07c7ca4ad0723f_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5de886ca40bb5dad56bce98b804e5625eb2683ea61af2e14c1fa72f57c956c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de886ca40bb5dad56bce98b804e5625eb2683ea61af2e14c1fa72f57c956c0c->enter($__internal_5de886ca40bb5dad56bce98b804e5625eb2683ea61af2e14c1fa72f57c956c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e7512e8b58e6947fbda0f9d6e37f220070e98ead59f3217442c29df67a67041d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7512e8b58e6947fbda0f9d6e37f220070e98ead59f3217442c29df67a67041d->enter($__internal_e7512e8b58e6947fbda0f9d6e37f220070e98ead59f3217442c29df67a67041d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_e7512e8b58e6947fbda0f9d6e37f220070e98ead59f3217442c29df67a67041d->leave($__internal_e7512e8b58e6947fbda0f9d6e37f220070e98ead59f3217442c29df67a67041d_prof);

        
        $__internal_5de886ca40bb5dad56bce98b804e5625eb2683ea61af2e14c1fa72f57c956c0c->leave($__internal_5de886ca40bb5dad56bce98b804e5625eb2683ea61af2e14c1fa72f57c956c0c_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e55ae43caa5bbd264c19d00552db775b29f994640ee3708e074b6c99b1c69b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55ae43caa5bbd264c19d00552db775b29f994640ee3708e074b6c99b1c69b79->enter($__internal_e55ae43caa5bbd264c19d00552db775b29f994640ee3708e074b6c99b1c69b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_dd199d4d003537f96448450f7ab71673f8a131f76e7879fd99343e58daa93877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd199d4d003537f96448450f7ab71673f8a131f76e7879fd99343e58daa93877->enter($__internal_dd199d4d003537f96448450f7ab71673f8a131f76e7879fd99343e58daa93877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dd199d4d003537f96448450f7ab71673f8a131f76e7879fd99343e58daa93877->leave($__internal_dd199d4d003537f96448450f7ab71673f8a131f76e7879fd99343e58daa93877_prof);

        
        $__internal_e55ae43caa5bbd264c19d00552db775b29f994640ee3708e074b6c99b1c69b79->leave($__internal_e55ae43caa5bbd264c19d00552db775b29f994640ee3708e074b6c99b1c69b79_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_1bfbb5083204e2486c8599a04821b43bbd1b7eb48b1ea54b67e23cb660a52757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfbb5083204e2486c8599a04821b43bbd1b7eb48b1ea54b67e23cb660a52757->enter($__internal_1bfbb5083204e2486c8599a04821b43bbd1b7eb48b1ea54b67e23cb660a52757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_051e6195f420cc5c941a05e2c2d5f24f972a68b22418a9ae9cab9ad0cfbd5e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051e6195f420cc5c941a05e2c2d5f24f972a68b22418a9ae9cab9ad0cfbd5e1f->enter($__internal_051e6195f420cc5c941a05e2c2d5f24f972a68b22418a9ae9cab9ad0cfbd5e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_051e6195f420cc5c941a05e2c2d5f24f972a68b22418a9ae9cab9ad0cfbd5e1f->leave($__internal_051e6195f420cc5c941a05e2c2d5f24f972a68b22418a9ae9cab9ad0cfbd5e1f_prof);

        
        $__internal_1bfbb5083204e2486c8599a04821b43bbd1b7eb48b1ea54b67e23cb660a52757->leave($__internal_1bfbb5083204e2486c8599a04821b43bbd1b7eb48b1ea54b67e23cb660a52757_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_63fe04e5beed367aa88233d8757024f4879cc08ae10dac4319a51911387f1913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fe04e5beed367aa88233d8757024f4879cc08ae10dac4319a51911387f1913->enter($__internal_63fe04e5beed367aa88233d8757024f4879cc08ae10dac4319a51911387f1913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_acb632697a09d5aa8811d2cdeef53193c3d29880049a5c7111e2f2f65ddc79ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb632697a09d5aa8811d2cdeef53193c3d29880049a5c7111e2f2f65ddc79ab->enter($__internal_acb632697a09d5aa8811d2cdeef53193c3d29880049a5c7111e2f2f65ddc79ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_acb632697a09d5aa8811d2cdeef53193c3d29880049a5c7111e2f2f65ddc79ab->leave($__internal_acb632697a09d5aa8811d2cdeef53193c3d29880049a5c7111e2f2f65ddc79ab_prof);

        
        $__internal_63fe04e5beed367aa88233d8757024f4879cc08ae10dac4319a51911387f1913->leave($__internal_63fe04e5beed367aa88233d8757024f4879cc08ae10dac4319a51911387f1913_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_18c48d6adfeeeb357178208b0f42bac30a743a2f782fcd828d6af7c56ab87aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c48d6adfeeeb357178208b0f42bac30a743a2f782fcd828d6af7c56ab87aed->enter($__internal_18c48d6adfeeeb357178208b0f42bac30a743a2f782fcd828d6af7c56ab87aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4db4682e316e157863a784100879026dfb81b2209a150c5cf0a128655bf8bee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db4682e316e157863a784100879026dfb81b2209a150c5cf0a128655bf8bee9->enter($__internal_4db4682e316e157863a784100879026dfb81b2209a150c5cf0a128655bf8bee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4db4682e316e157863a784100879026dfb81b2209a150c5cf0a128655bf8bee9->leave($__internal_4db4682e316e157863a784100879026dfb81b2209a150c5cf0a128655bf8bee9_prof);

        
        $__internal_18c48d6adfeeeb357178208b0f42bac30a743a2f782fcd828d6af7c56ab87aed->leave($__internal_18c48d6adfeeeb357178208b0f42bac30a743a2f782fcd828d6af7c56ab87aed_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0d31d8599b55f4c5b5028d74a0d3fb88de4c4f42ad737e392308cdcf39865979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d31d8599b55f4c5b5028d74a0d3fb88de4c4f42ad737e392308cdcf39865979->enter($__internal_0d31d8599b55f4c5b5028d74a0d3fb88de4c4f42ad737e392308cdcf39865979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b90bf0fe4adadad2c1e4ed95ecebbd682803bbd7d883e58316f1d542c0c981f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90bf0fe4adadad2c1e4ed95ecebbd682803bbd7d883e58316f1d542c0c981f3->enter($__internal_b90bf0fe4adadad2c1e4ed95ecebbd682803bbd7d883e58316f1d542c0c981f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_b90bf0fe4adadad2c1e4ed95ecebbd682803bbd7d883e58316f1d542c0c981f3->leave($__internal_b90bf0fe4adadad2c1e4ed95ecebbd682803bbd7d883e58316f1d542c0c981f3_prof);

        
        $__internal_0d31d8599b55f4c5b5028d74a0d3fb88de4c4f42ad737e392308cdcf39865979->leave($__internal_0d31d8599b55f4c5b5028d74a0d3fb88de4c4f42ad737e392308cdcf39865979_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_604b5ad089b8fb4f54da3be6272e7c58ef3e6e4d7e5c08cd12dfdc056f93e680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604b5ad089b8fb4f54da3be6272e7c58ef3e6e4d7e5c08cd12dfdc056f93e680->enter($__internal_604b5ad089b8fb4f54da3be6272e7c58ef3e6e4d7e5c08cd12dfdc056f93e680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d0b7be1254056d06f8b417c583f4f3d8065eb648f36f161b03ca499d4551dd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b7be1254056d06f8b417c583f4f3d8065eb648f36f161b03ca499d4551dd9e->enter($__internal_d0b7be1254056d06f8b417c583f4f3d8065eb648f36f161b03ca499d4551dd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_d0b7be1254056d06f8b417c583f4f3d8065eb648f36f161b03ca499d4551dd9e->leave($__internal_d0b7be1254056d06f8b417c583f4f3d8065eb648f36f161b03ca499d4551dd9e_prof);

        
        $__internal_604b5ad089b8fb4f54da3be6272e7c58ef3e6e4d7e5c08cd12dfdc056f93e680->leave($__internal_604b5ad089b8fb4f54da3be6272e7c58ef3e6e4d7e5c08cd12dfdc056f93e680_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4e1912292378859e34afe9f587931dad3040de10d9c0b815697fb1a7c9bea4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1912292378859e34afe9f587931dad3040de10d9c0b815697fb1a7c9bea4b3->enter($__internal_4e1912292378859e34afe9f587931dad3040de10d9c0b815697fb1a7c9bea4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ea6cf6dcb1e94c839a120f9f708b21b495d7d57db825d4338504ae12d8d112c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6cf6dcb1e94c839a120f9f708b21b495d7d57db825d4338504ae12d8d112c1->enter($__internal_ea6cf6dcb1e94c839a120f9f708b21b495d7d57db825d4338504ae12d8d112c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ea6cf6dcb1e94c839a120f9f708b21b495d7d57db825d4338504ae12d8d112c1->leave($__internal_ea6cf6dcb1e94c839a120f9f708b21b495d7d57db825d4338504ae12d8d112c1_prof);

        
        $__internal_4e1912292378859e34afe9f587931dad3040de10d9c0b815697fb1a7c9bea4b3->leave($__internal_4e1912292378859e34afe9f587931dad3040de10d9c0b815697fb1a7c9bea4b3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
