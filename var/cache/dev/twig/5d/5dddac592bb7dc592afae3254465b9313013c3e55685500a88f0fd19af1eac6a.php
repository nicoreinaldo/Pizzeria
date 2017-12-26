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
        $__internal_a3ea6290c8c507cbf65bc03bd86b35bdf639e40978514c38596c5757ef0fdea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ea6290c8c507cbf65bc03bd86b35bdf639e40978514c38596c5757ef0fdea0->enter($__internal_a3ea6290c8c507cbf65bc03bd86b35bdf639e40978514c38596c5757ef0fdea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c56437d6baea0a03dba746d2f6421b9075c7c05a47766ec6761f17104a37f7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56437d6baea0a03dba746d2f6421b9075c7c05a47766ec6761f17104a37f7ee->enter($__internal_c56437d6baea0a03dba746d2f6421b9075c7c05a47766ec6761f17104a37f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_a3ea6290c8c507cbf65bc03bd86b35bdf639e40978514c38596c5757ef0fdea0->leave($__internal_a3ea6290c8c507cbf65bc03bd86b35bdf639e40978514c38596c5757ef0fdea0_prof);

        
        $__internal_c56437d6baea0a03dba746d2f6421b9075c7c05a47766ec6761f17104a37f7ee->leave($__internal_c56437d6baea0a03dba746d2f6421b9075c7c05a47766ec6761f17104a37f7ee_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b03558d71bf6f3bcb0cf7feac439e49f8ee0216cf7a6e3b1935f4e3084b7373a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03558d71bf6f3bcb0cf7feac439e49f8ee0216cf7a6e3b1935f4e3084b7373a->enter($__internal_b03558d71bf6f3bcb0cf7feac439e49f8ee0216cf7a6e3b1935f4e3084b7373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e70071a24f499353b1087fa21c8ff50d8f94d4141368de24b4bbd44e7b45d641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70071a24f499353b1087fa21c8ff50d8f94d4141368de24b4bbd44e7b45d641->enter($__internal_e70071a24f499353b1087fa21c8ff50d8f94d4141368de24b4bbd44e7b45d641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e70071a24f499353b1087fa21c8ff50d8f94d4141368de24b4bbd44e7b45d641->leave($__internal_e70071a24f499353b1087fa21c8ff50d8f94d4141368de24b4bbd44e7b45d641_prof);

        
        $__internal_b03558d71bf6f3bcb0cf7feac439e49f8ee0216cf7a6e3b1935f4e3084b7373a->leave($__internal_b03558d71bf6f3bcb0cf7feac439e49f8ee0216cf7a6e3b1935f4e3084b7373a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_afa7fdf1b77acc80064c32958e780c77b767bc9dcb801f232668c66b81d9bb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa7fdf1b77acc80064c32958e780c77b767bc9dcb801f232668c66b81d9bb1f->enter($__internal_afa7fdf1b77acc80064c32958e780c77b767bc9dcb801f232668c66b81d9bb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_16a4997df1b057c59deaed597c5df84d5b2049cde9736a7ddd0ba1dbc86c2f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a4997df1b057c59deaed597c5df84d5b2049cde9736a7ddd0ba1dbc86c2f30->enter($__internal_16a4997df1b057c59deaed597c5df84d5b2049cde9736a7ddd0ba1dbc86c2f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_16a4997df1b057c59deaed597c5df84d5b2049cde9736a7ddd0ba1dbc86c2f30->leave($__internal_16a4997df1b057c59deaed597c5df84d5b2049cde9736a7ddd0ba1dbc86c2f30_prof);

        
        $__internal_afa7fdf1b77acc80064c32958e780c77b767bc9dcb801f232668c66b81d9bb1f->leave($__internal_afa7fdf1b77acc80064c32958e780c77b767bc9dcb801f232668c66b81d9bb1f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7acac5f1372cc1e62eaa5d60b013167bf7e85b93318fa0625141fccc2fa127bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acac5f1372cc1e62eaa5d60b013167bf7e85b93318fa0625141fccc2fa127bd->enter($__internal_7acac5f1372cc1e62eaa5d60b013167bf7e85b93318fa0625141fccc2fa127bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_88523b23ae82adb3732eb98122f8b6f8a1fc3acdc88d6c3ee539ae2aed5350a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88523b23ae82adb3732eb98122f8b6f8a1fc3acdc88d6c3ee539ae2aed5350a0->enter($__internal_88523b23ae82adb3732eb98122f8b6f8a1fc3acdc88d6c3ee539ae2aed5350a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_88523b23ae82adb3732eb98122f8b6f8a1fc3acdc88d6c3ee539ae2aed5350a0->leave($__internal_88523b23ae82adb3732eb98122f8b6f8a1fc3acdc88d6c3ee539ae2aed5350a0_prof);

        
        $__internal_7acac5f1372cc1e62eaa5d60b013167bf7e85b93318fa0625141fccc2fa127bd->leave($__internal_7acac5f1372cc1e62eaa5d60b013167bf7e85b93318fa0625141fccc2fa127bd_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3400a3ccb1410b4a8e2af86c1938daddb7ba705efb910d1508a061364015fb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3400a3ccb1410b4a8e2af86c1938daddb7ba705efb910d1508a061364015fb28->enter($__internal_3400a3ccb1410b4a8e2af86c1938daddb7ba705efb910d1508a061364015fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0bcac4342bb3c431db31cfdda58c5c272b26aaf5ed1bb4df5b8507bda9f3b6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcac4342bb3c431db31cfdda58c5c272b26aaf5ed1bb4df5b8507bda9f3b6f1->enter($__internal_0bcac4342bb3c431db31cfdda58c5c272b26aaf5ed1bb4df5b8507bda9f3b6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_28498b1152099f623c137ac5e6b384c219d8d17f86b89a8d6985e4b55ba4759f = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_e56641a3d4ea3e58160626f14e772f4a5dddeff45dcf37423285cd55db16d939 = "{{") && ('' === $__internal_e56641a3d4ea3e58160626f14e772f4a5dddeff45dcf37423285cd55db16d939 || 0 === strpos($__internal_28498b1152099f623c137ac5e6b384c219d8d17f86b89a8d6985e4b55ba4759f, $__internal_e56641a3d4ea3e58160626f14e772f4a5dddeff45dcf37423285cd55db16d939)));
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
        
        $__internal_0bcac4342bb3c431db31cfdda58c5c272b26aaf5ed1bb4df5b8507bda9f3b6f1->leave($__internal_0bcac4342bb3c431db31cfdda58c5c272b26aaf5ed1bb4df5b8507bda9f3b6f1_prof);

        
        $__internal_3400a3ccb1410b4a8e2af86c1938daddb7ba705efb910d1508a061364015fb28->leave($__internal_3400a3ccb1410b4a8e2af86c1938daddb7ba705efb910d1508a061364015fb28_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_deda2adcd0d31a4b395e8c329396bc29385132aa577e87df51996546576f23d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deda2adcd0d31a4b395e8c329396bc29385132aa577e87df51996546576f23d2->enter($__internal_deda2adcd0d31a4b395e8c329396bc29385132aa577e87df51996546576f23d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_042191298326ab9f4c770b1ea144d0d9a83933041bc401150951b33c483b474c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042191298326ab9f4c770b1ea144d0d9a83933041bc401150951b33c483b474c->enter($__internal_042191298326ab9f4c770b1ea144d0d9a83933041bc401150951b33c483b474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_042191298326ab9f4c770b1ea144d0d9a83933041bc401150951b33c483b474c->leave($__internal_042191298326ab9f4c770b1ea144d0d9a83933041bc401150951b33c483b474c_prof);

        
        $__internal_deda2adcd0d31a4b395e8c329396bc29385132aa577e87df51996546576f23d2->leave($__internal_deda2adcd0d31a4b395e8c329396bc29385132aa577e87df51996546576f23d2_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6d0cdd192655224e34c14ecbe8f03157440c26bdf176ced158c8e400c2318bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0cdd192655224e34c14ecbe8f03157440c26bdf176ced158c8e400c2318bb0->enter($__internal_6d0cdd192655224e34c14ecbe8f03157440c26bdf176ced158c8e400c2318bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_99da3a9cb30f419024483b53113a7870812cdd583496c71543bd4f8878074651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99da3a9cb30f419024483b53113a7870812cdd583496c71543bd4f8878074651->enter($__internal_99da3a9cb30f419024483b53113a7870812cdd583496c71543bd4f8878074651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_99da3a9cb30f419024483b53113a7870812cdd583496c71543bd4f8878074651->leave($__internal_99da3a9cb30f419024483b53113a7870812cdd583496c71543bd4f8878074651_prof);

        
        $__internal_6d0cdd192655224e34c14ecbe8f03157440c26bdf176ced158c8e400c2318bb0->leave($__internal_6d0cdd192655224e34c14ecbe8f03157440c26bdf176ced158c8e400c2318bb0_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_de411436032e57f2fa055b98581a976f92852f47d8f1cd1570781698516c7aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de411436032e57f2fa055b98581a976f92852f47d8f1cd1570781698516c7aa9->enter($__internal_de411436032e57f2fa055b98581a976f92852f47d8f1cd1570781698516c7aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_fe3fcdffa97ce0145d27e811f8ddeece75e19e20782646783d828cdff53d6732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3fcdffa97ce0145d27e811f8ddeece75e19e20782646783d828cdff53d6732->enter($__internal_fe3fcdffa97ce0145d27e811f8ddeece75e19e20782646783d828cdff53d6732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_fe3fcdffa97ce0145d27e811f8ddeece75e19e20782646783d828cdff53d6732->leave($__internal_fe3fcdffa97ce0145d27e811f8ddeece75e19e20782646783d828cdff53d6732_prof);

        
        $__internal_de411436032e57f2fa055b98581a976f92852f47d8f1cd1570781698516c7aa9->leave($__internal_de411436032e57f2fa055b98581a976f92852f47d8f1cd1570781698516c7aa9_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2c16be2f11bf5aed4d958fd7754095f9a01573cac265950eb74006891746f005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c16be2f11bf5aed4d958fd7754095f9a01573cac265950eb74006891746f005->enter($__internal_2c16be2f11bf5aed4d958fd7754095f9a01573cac265950eb74006891746f005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_39539e333514b5b927bcd3194bd69885520df132fa35f535489ad941dbf4f605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39539e333514b5b927bcd3194bd69885520df132fa35f535489ad941dbf4f605->enter($__internal_39539e333514b5b927bcd3194bd69885520df132fa35f535489ad941dbf4f605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_39539e333514b5b927bcd3194bd69885520df132fa35f535489ad941dbf4f605->leave($__internal_39539e333514b5b927bcd3194bd69885520df132fa35f535489ad941dbf4f605_prof);

        
        $__internal_2c16be2f11bf5aed4d958fd7754095f9a01573cac265950eb74006891746f005->leave($__internal_2c16be2f11bf5aed4d958fd7754095f9a01573cac265950eb74006891746f005_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_7e81d08c6301971d6a8a0cbaf57b553b6211c011e03c9ebecc3477ae2bd1d158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e81d08c6301971d6a8a0cbaf57b553b6211c011e03c9ebecc3477ae2bd1d158->enter($__internal_7e81d08c6301971d6a8a0cbaf57b553b6211c011e03c9ebecc3477ae2bd1d158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9395c0162a1c484b86ff45872cfa69573c58678168774c9c025e83f6357c9a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9395c0162a1c484b86ff45872cfa69573c58678168774c9c025e83f6357c9a75->enter($__internal_9395c0162a1c484b86ff45872cfa69573c58678168774c9c025e83f6357c9a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_9395c0162a1c484b86ff45872cfa69573c58678168774c9c025e83f6357c9a75->leave($__internal_9395c0162a1c484b86ff45872cfa69573c58678168774c9c025e83f6357c9a75_prof);

        
        $__internal_7e81d08c6301971d6a8a0cbaf57b553b6211c011e03c9ebecc3477ae2bd1d158->leave($__internal_7e81d08c6301971d6a8a0cbaf57b553b6211c011e03c9ebecc3477ae2bd1d158_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_39f4762e4f48662a60476142ee49c6b06393ce1933bf85cb4a25226089d4088e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f4762e4f48662a60476142ee49c6b06393ce1933bf85cb4a25226089d4088e->enter($__internal_39f4762e4f48662a60476142ee49c6b06393ce1933bf85cb4a25226089d4088e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0cc4fc402d9af543fd70207edef308fa07ee68fee5b7a575b16b1207c96d3165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc4fc402d9af543fd70207edef308fa07ee68fee5b7a575b16b1207c96d3165->enter($__internal_0cc4fc402d9af543fd70207edef308fa07ee68fee5b7a575b16b1207c96d3165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0cc4fc402d9af543fd70207edef308fa07ee68fee5b7a575b16b1207c96d3165->leave($__internal_0cc4fc402d9af543fd70207edef308fa07ee68fee5b7a575b16b1207c96d3165_prof);

        
        $__internal_39f4762e4f48662a60476142ee49c6b06393ce1933bf85cb4a25226089d4088e->leave($__internal_39f4762e4f48662a60476142ee49c6b06393ce1933bf85cb4a25226089d4088e_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_67665e272d0a04c838fe150db281d39eb922b3975308c9775448059b05d15268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67665e272d0a04c838fe150db281d39eb922b3975308c9775448059b05d15268->enter($__internal_67665e272d0a04c838fe150db281d39eb922b3975308c9775448059b05d15268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_878ec4e8a7deeb9049e3efada3f6bad4bc636961a677810a7c7cc521b02f583c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878ec4e8a7deeb9049e3efada3f6bad4bc636961a677810a7c7cc521b02f583c->enter($__internal_878ec4e8a7deeb9049e3efada3f6bad4bc636961a677810a7c7cc521b02f583c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_878ec4e8a7deeb9049e3efada3f6bad4bc636961a677810a7c7cc521b02f583c->leave($__internal_878ec4e8a7deeb9049e3efada3f6bad4bc636961a677810a7c7cc521b02f583c_prof);

        
        $__internal_67665e272d0a04c838fe150db281d39eb922b3975308c9775448059b05d15268->leave($__internal_67665e272d0a04c838fe150db281d39eb922b3975308c9775448059b05d15268_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_62da91d93e430003ef7147482ca74de684664d64654ac48da265696372603d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62da91d93e430003ef7147482ca74de684664d64654ac48da265696372603d3a->enter($__internal_62da91d93e430003ef7147482ca74de684664d64654ac48da265696372603d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d4980804bc5c8a2d6cceafae00740bfbbeecaa4418056d9c9c6e40e7d21081f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4980804bc5c8a2d6cceafae00740bfbbeecaa4418056d9c9c6e40e7d21081f4->enter($__internal_d4980804bc5c8a2d6cceafae00740bfbbeecaa4418056d9c9c6e40e7d21081f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_d4980804bc5c8a2d6cceafae00740bfbbeecaa4418056d9c9c6e40e7d21081f4->leave($__internal_d4980804bc5c8a2d6cceafae00740bfbbeecaa4418056d9c9c6e40e7d21081f4_prof);

        
        $__internal_62da91d93e430003ef7147482ca74de684664d64654ac48da265696372603d3a->leave($__internal_62da91d93e430003ef7147482ca74de684664d64654ac48da265696372603d3a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7c26dd18cba70147400f29a2a1213cc28c85b9c10924b0df076a1876652bdaa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c26dd18cba70147400f29a2a1213cc28c85b9c10924b0df076a1876652bdaa1->enter($__internal_7c26dd18cba70147400f29a2a1213cc28c85b9c10924b0df076a1876652bdaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cf797ad4408ea3c9cdd89ab185cef7288b863e9ffd0bbf0797fd13fd61d74356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf797ad4408ea3c9cdd89ab185cef7288b863e9ffd0bbf0797fd13fd61d74356->enter($__internal_cf797ad4408ea3c9cdd89ab185cef7288b863e9ffd0bbf0797fd13fd61d74356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_cf797ad4408ea3c9cdd89ab185cef7288b863e9ffd0bbf0797fd13fd61d74356->leave($__internal_cf797ad4408ea3c9cdd89ab185cef7288b863e9ffd0bbf0797fd13fd61d74356_prof);

        
        $__internal_7c26dd18cba70147400f29a2a1213cc28c85b9c10924b0df076a1876652bdaa1->leave($__internal_7c26dd18cba70147400f29a2a1213cc28c85b9c10924b0df076a1876652bdaa1_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4f507ed3e0ac6c90108b54c59b01ccccb6d7fbc7afd1be9331a756796d4bd255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f507ed3e0ac6c90108b54c59b01ccccb6d7fbc7afd1be9331a756796d4bd255->enter($__internal_4f507ed3e0ac6c90108b54c59b01ccccb6d7fbc7afd1be9331a756796d4bd255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ea7f438fbbbc873117cd3cb91627156ecf15ab65c619762baac14ceb6e9847ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7f438fbbbc873117cd3cb91627156ecf15ab65c619762baac14ceb6e9847ec->enter($__internal_ea7f438fbbbc873117cd3cb91627156ecf15ab65c619762baac14ceb6e9847ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ea7f438fbbbc873117cd3cb91627156ecf15ab65c619762baac14ceb6e9847ec->leave($__internal_ea7f438fbbbc873117cd3cb91627156ecf15ab65c619762baac14ceb6e9847ec_prof);

        
        $__internal_4f507ed3e0ac6c90108b54c59b01ccccb6d7fbc7afd1be9331a756796d4bd255->leave($__internal_4f507ed3e0ac6c90108b54c59b01ccccb6d7fbc7afd1be9331a756796d4bd255_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e5a950897c59a7b3636fddbcf624bbf55afde2e3a656e42486eec8685fff301a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a950897c59a7b3636fddbcf624bbf55afde2e3a656e42486eec8685fff301a->enter($__internal_e5a950897c59a7b3636fddbcf624bbf55afde2e3a656e42486eec8685fff301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_8679521c989334d5150369f521b594585a203574cd8ab40a213331ffe6a748f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8679521c989334d5150369f521b594585a203574cd8ab40a213331ffe6a748f3->enter($__internal_8679521c989334d5150369f521b594585a203574cd8ab40a213331ffe6a748f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8679521c989334d5150369f521b594585a203574cd8ab40a213331ffe6a748f3->leave($__internal_8679521c989334d5150369f521b594585a203574cd8ab40a213331ffe6a748f3_prof);

        
        $__internal_e5a950897c59a7b3636fddbcf624bbf55afde2e3a656e42486eec8685fff301a->leave($__internal_e5a950897c59a7b3636fddbcf624bbf55afde2e3a656e42486eec8685fff301a_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a34e6309b417de7b056f1fd600d531a6d856554cd1a00c5c4e478e5fd30b17ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34e6309b417de7b056f1fd600d531a6d856554cd1a00c5c4e478e5fd30b17ab->enter($__internal_a34e6309b417de7b056f1fd600d531a6d856554cd1a00c5c4e478e5fd30b17ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0caedef0d5b7bf9372a85faa0f299e6df813b58c848f1cbda3b6848b0a06e129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caedef0d5b7bf9372a85faa0f299e6df813b58c848f1cbda3b6848b0a06e129->enter($__internal_0caedef0d5b7bf9372a85faa0f299e6df813b58c848f1cbda3b6848b0a06e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0caedef0d5b7bf9372a85faa0f299e6df813b58c848f1cbda3b6848b0a06e129->leave($__internal_0caedef0d5b7bf9372a85faa0f299e6df813b58c848f1cbda3b6848b0a06e129_prof);

        
        $__internal_a34e6309b417de7b056f1fd600d531a6d856554cd1a00c5c4e478e5fd30b17ab->leave($__internal_a34e6309b417de7b056f1fd600d531a6d856554cd1a00c5c4e478e5fd30b17ab_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_2ff21c28227b4332414434a460539a29acfea9399c9a3e8284ca2bdd03dd6841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff21c28227b4332414434a460539a29acfea9399c9a3e8284ca2bdd03dd6841->enter($__internal_2ff21c28227b4332414434a460539a29acfea9399c9a3e8284ca2bdd03dd6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e2e48eefe51ca9994de5046c970a5d77641a7344755822ee508f78dcd7ae5d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e48eefe51ca9994de5046c970a5d77641a7344755822ee508f78dcd7ae5d4d->enter($__internal_e2e48eefe51ca9994de5046c970a5d77641a7344755822ee508f78dcd7ae5d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e2e48eefe51ca9994de5046c970a5d77641a7344755822ee508f78dcd7ae5d4d->leave($__internal_e2e48eefe51ca9994de5046c970a5d77641a7344755822ee508f78dcd7ae5d4d_prof);

        
        $__internal_2ff21c28227b4332414434a460539a29acfea9399c9a3e8284ca2bdd03dd6841->leave($__internal_2ff21c28227b4332414434a460539a29acfea9399c9a3e8284ca2bdd03dd6841_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e105707c49abc75537d8c90e289b38cb0da621fe1d4ed595453b9367723d5bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e105707c49abc75537d8c90e289b38cb0da621fe1d4ed595453b9367723d5bc5->enter($__internal_e105707c49abc75537d8c90e289b38cb0da621fe1d4ed595453b9367723d5bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_40c170aac24b7ccac699f67a0a140beb6e946459feca2bc7523140484176c7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c170aac24b7ccac699f67a0a140beb6e946459feca2bc7523140484176c7e4->enter($__internal_40c170aac24b7ccac699f67a0a140beb6e946459feca2bc7523140484176c7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_40c170aac24b7ccac699f67a0a140beb6e946459feca2bc7523140484176c7e4->leave($__internal_40c170aac24b7ccac699f67a0a140beb6e946459feca2bc7523140484176c7e4_prof);

        
        $__internal_e105707c49abc75537d8c90e289b38cb0da621fe1d4ed595453b9367723d5bc5->leave($__internal_e105707c49abc75537d8c90e289b38cb0da621fe1d4ed595453b9367723d5bc5_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f1e5f29d852d9b05d24f39e4e19be9890543e3b1da1a4dec008a33e4a50fe7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e5f29d852d9b05d24f39e4e19be9890543e3b1da1a4dec008a33e4a50fe7a6->enter($__internal_f1e5f29d852d9b05d24f39e4e19be9890543e3b1da1a4dec008a33e4a50fe7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f0f76afdc7360c80f3fe3b9faae54601e865d833774a37209bc4c41462f188ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f76afdc7360c80f3fe3b9faae54601e865d833774a37209bc4c41462f188ae->enter($__internal_f0f76afdc7360c80f3fe3b9faae54601e865d833774a37209bc4c41462f188ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f0f76afdc7360c80f3fe3b9faae54601e865d833774a37209bc4c41462f188ae->leave($__internal_f0f76afdc7360c80f3fe3b9faae54601e865d833774a37209bc4c41462f188ae_prof);

        
        $__internal_f1e5f29d852d9b05d24f39e4e19be9890543e3b1da1a4dec008a33e4a50fe7a6->leave($__internal_f1e5f29d852d9b05d24f39e4e19be9890543e3b1da1a4dec008a33e4a50fe7a6_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_775898e8bf5f8caeb9172a2a1c411e16419abb78570c919bf4ccf9845e27bb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775898e8bf5f8caeb9172a2a1c411e16419abb78570c919bf4ccf9845e27bb1d->enter($__internal_775898e8bf5f8caeb9172a2a1c411e16419abb78570c919bf4ccf9845e27bb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_12fbfdb67677030f5fb280b5e4539c3d68e0adf0e5bf98947802da2ed20fc86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fbfdb67677030f5fb280b5e4539c3d68e0adf0e5bf98947802da2ed20fc86c->enter($__internal_12fbfdb67677030f5fb280b5e4539c3d68e0adf0e5bf98947802da2ed20fc86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_12fbfdb67677030f5fb280b5e4539c3d68e0adf0e5bf98947802da2ed20fc86c->leave($__internal_12fbfdb67677030f5fb280b5e4539c3d68e0adf0e5bf98947802da2ed20fc86c_prof);

        
        $__internal_775898e8bf5f8caeb9172a2a1c411e16419abb78570c919bf4ccf9845e27bb1d->leave($__internal_775898e8bf5f8caeb9172a2a1c411e16419abb78570c919bf4ccf9845e27bb1d_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a0ac90ca63d4569090822b61ca5e43050d35bb07a5ca248f409c6f2aed34063d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ac90ca63d4569090822b61ca5e43050d35bb07a5ca248f409c6f2aed34063d->enter($__internal_a0ac90ca63d4569090822b61ca5e43050d35bb07a5ca248f409c6f2aed34063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_441ff11b7fba26c4245476769ce7453e4854d90b43ad9b815f1967ddf711f492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441ff11b7fba26c4245476769ce7453e4854d90b43ad9b815f1967ddf711f492->enter($__internal_441ff11b7fba26c4245476769ce7453e4854d90b43ad9b815f1967ddf711f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_441ff11b7fba26c4245476769ce7453e4854d90b43ad9b815f1967ddf711f492->leave($__internal_441ff11b7fba26c4245476769ce7453e4854d90b43ad9b815f1967ddf711f492_prof);

        
        $__internal_a0ac90ca63d4569090822b61ca5e43050d35bb07a5ca248f409c6f2aed34063d->leave($__internal_a0ac90ca63d4569090822b61ca5e43050d35bb07a5ca248f409c6f2aed34063d_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ba42f1ecdf7fd63c2585d92d9ef646baf9745fd500c2565d5aff09afcb13387e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba42f1ecdf7fd63c2585d92d9ef646baf9745fd500c2565d5aff09afcb13387e->enter($__internal_ba42f1ecdf7fd63c2585d92d9ef646baf9745fd500c2565d5aff09afcb13387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6c196421e43dde001e7a397c97ce278fa59430fa576944cac8f5908d45db4291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c196421e43dde001e7a397c97ce278fa59430fa576944cac8f5908d45db4291->enter($__internal_6c196421e43dde001e7a397c97ce278fa59430fa576944cac8f5908d45db4291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6c196421e43dde001e7a397c97ce278fa59430fa576944cac8f5908d45db4291->leave($__internal_6c196421e43dde001e7a397c97ce278fa59430fa576944cac8f5908d45db4291_prof);

        
        $__internal_ba42f1ecdf7fd63c2585d92d9ef646baf9745fd500c2565d5aff09afcb13387e->leave($__internal_ba42f1ecdf7fd63c2585d92d9ef646baf9745fd500c2565d5aff09afcb13387e_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9f22e2643a1dacf6ae5319fa06a3619c5488d98556ad7ed1d8f8bc429b5ac17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f22e2643a1dacf6ae5319fa06a3619c5488d98556ad7ed1d8f8bc429b5ac17f->enter($__internal_9f22e2643a1dacf6ae5319fa06a3619c5488d98556ad7ed1d8f8bc429b5ac17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d00e6da9e53150f23190f41d824e6f6d22e79df7e707cd965229b87966cf942e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00e6da9e53150f23190f41d824e6f6d22e79df7e707cd965229b87966cf942e->enter($__internal_d00e6da9e53150f23190f41d824e6f6d22e79df7e707cd965229b87966cf942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d00e6da9e53150f23190f41d824e6f6d22e79df7e707cd965229b87966cf942e->leave($__internal_d00e6da9e53150f23190f41d824e6f6d22e79df7e707cd965229b87966cf942e_prof);

        
        $__internal_9f22e2643a1dacf6ae5319fa06a3619c5488d98556ad7ed1d8f8bc429b5ac17f->leave($__internal_9f22e2643a1dacf6ae5319fa06a3619c5488d98556ad7ed1d8f8bc429b5ac17f_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_eb136ddb70b68fdaa877fbf4d5d469317f828b39700daea8954439275a2a1f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb136ddb70b68fdaa877fbf4d5d469317f828b39700daea8954439275a2a1f2f->enter($__internal_eb136ddb70b68fdaa877fbf4d5d469317f828b39700daea8954439275a2a1f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3535e869ba144d380c6b8382d382d590fd97decfccb335b73f8755961d257ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3535e869ba144d380c6b8382d382d590fd97decfccb335b73f8755961d257ab3->enter($__internal_3535e869ba144d380c6b8382d382d590fd97decfccb335b73f8755961d257ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3535e869ba144d380c6b8382d382d590fd97decfccb335b73f8755961d257ab3->leave($__internal_3535e869ba144d380c6b8382d382d590fd97decfccb335b73f8755961d257ab3_prof);

        
        $__internal_eb136ddb70b68fdaa877fbf4d5d469317f828b39700daea8954439275a2a1f2f->leave($__internal_eb136ddb70b68fdaa877fbf4d5d469317f828b39700daea8954439275a2a1f2f_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4086bcc38c11cf075a916673db0c129bf0f6be475914e70317f95fbbfb7c2ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4086bcc38c11cf075a916673db0c129bf0f6be475914e70317f95fbbfb7c2ed6->enter($__internal_4086bcc38c11cf075a916673db0c129bf0f6be475914e70317f95fbbfb7c2ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f6cf795615d69a2c34729e95dc81b95f314ebc38aab787ed13cb9f4729dfa820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cf795615d69a2c34729e95dc81b95f314ebc38aab787ed13cb9f4729dfa820->enter($__internal_f6cf795615d69a2c34729e95dc81b95f314ebc38aab787ed13cb9f4729dfa820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f6cf795615d69a2c34729e95dc81b95f314ebc38aab787ed13cb9f4729dfa820->leave($__internal_f6cf795615d69a2c34729e95dc81b95f314ebc38aab787ed13cb9f4729dfa820_prof);

        
        $__internal_4086bcc38c11cf075a916673db0c129bf0f6be475914e70317f95fbbfb7c2ed6->leave($__internal_4086bcc38c11cf075a916673db0c129bf0f6be475914e70317f95fbbfb7c2ed6_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c47a6e5717b60ae9269e731eafaa04910052f4a965f49a0917aa072deb51996d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47a6e5717b60ae9269e731eafaa04910052f4a965f49a0917aa072deb51996d->enter($__internal_c47a6e5717b60ae9269e731eafaa04910052f4a965f49a0917aa072deb51996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_809e0f15877814aeffab775ca14238c645608a4de4caf798ef57845b2006586e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809e0f15877814aeffab775ca14238c645608a4de4caf798ef57845b2006586e->enter($__internal_809e0f15877814aeffab775ca14238c645608a4de4caf798ef57845b2006586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_809e0f15877814aeffab775ca14238c645608a4de4caf798ef57845b2006586e->leave($__internal_809e0f15877814aeffab775ca14238c645608a4de4caf798ef57845b2006586e_prof);

        
        $__internal_c47a6e5717b60ae9269e731eafaa04910052f4a965f49a0917aa072deb51996d->leave($__internal_c47a6e5717b60ae9269e731eafaa04910052f4a965f49a0917aa072deb51996d_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2649265af9c1a4144ae64bd24d34003ca45f3ab004383a1340d9017af5592077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2649265af9c1a4144ae64bd24d34003ca45f3ab004383a1340d9017af5592077->enter($__internal_2649265af9c1a4144ae64bd24d34003ca45f3ab004383a1340d9017af5592077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7f177bfc06ee12f07284a838a7e682e496fc10b06f1180eb9849f591d6834848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f177bfc06ee12f07284a838a7e682e496fc10b06f1180eb9849f591d6834848->enter($__internal_7f177bfc06ee12f07284a838a7e682e496fc10b06f1180eb9849f591d6834848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_7f177bfc06ee12f07284a838a7e682e496fc10b06f1180eb9849f591d6834848->leave($__internal_7f177bfc06ee12f07284a838a7e682e496fc10b06f1180eb9849f591d6834848_prof);

        
        $__internal_2649265af9c1a4144ae64bd24d34003ca45f3ab004383a1340d9017af5592077->leave($__internal_2649265af9c1a4144ae64bd24d34003ca45f3ab004383a1340d9017af5592077_prof);

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
