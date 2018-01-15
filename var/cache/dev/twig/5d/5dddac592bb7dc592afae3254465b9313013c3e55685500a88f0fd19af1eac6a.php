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
        $__internal_f5449f57c9280b2d6c04b0bfbfcd043b0e525b8ce7e10a83d6c8f586e867783f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5449f57c9280b2d6c04b0bfbfcd043b0e525b8ce7e10a83d6c8f586e867783f->enter($__internal_f5449f57c9280b2d6c04b0bfbfcd043b0e525b8ce7e10a83d6c8f586e867783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_fcb8cfba54eee67e5199888da28d83e7df59f2059bf57e69975cd6e7e8febb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb8cfba54eee67e5199888da28d83e7df59f2059bf57e69975cd6e7e8febb29->enter($__internal_fcb8cfba54eee67e5199888da28d83e7df59f2059bf57e69975cd6e7e8febb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_f5449f57c9280b2d6c04b0bfbfcd043b0e525b8ce7e10a83d6c8f586e867783f->leave($__internal_f5449f57c9280b2d6c04b0bfbfcd043b0e525b8ce7e10a83d6c8f586e867783f_prof);

        
        $__internal_fcb8cfba54eee67e5199888da28d83e7df59f2059bf57e69975cd6e7e8febb29->leave($__internal_fcb8cfba54eee67e5199888da28d83e7df59f2059bf57e69975cd6e7e8febb29_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0b29c2030aaf47ea4c1e0e1b27ebf3d4a44bd22b70cf1bb5f9cf2ffdf24f7068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b29c2030aaf47ea4c1e0e1b27ebf3d4a44bd22b70cf1bb5f9cf2ffdf24f7068->enter($__internal_0b29c2030aaf47ea4c1e0e1b27ebf3d4a44bd22b70cf1bb5f9cf2ffdf24f7068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b949e666b21e663b8a75ecb9db4df4645ca249f62b5b643c8b9d22502014e318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b949e666b21e663b8a75ecb9db4df4645ca249f62b5b643c8b9d22502014e318->enter($__internal_b949e666b21e663b8a75ecb9db4df4645ca249f62b5b643c8b9d22502014e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b949e666b21e663b8a75ecb9db4df4645ca249f62b5b643c8b9d22502014e318->leave($__internal_b949e666b21e663b8a75ecb9db4df4645ca249f62b5b643c8b9d22502014e318_prof);

        
        $__internal_0b29c2030aaf47ea4c1e0e1b27ebf3d4a44bd22b70cf1bb5f9cf2ffdf24f7068->leave($__internal_0b29c2030aaf47ea4c1e0e1b27ebf3d4a44bd22b70cf1bb5f9cf2ffdf24f7068_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7f2501336f2741890f213fe7cb3fe93e5dd660ec4e05af8c346b9ff764190219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2501336f2741890f213fe7cb3fe93e5dd660ec4e05af8c346b9ff764190219->enter($__internal_7f2501336f2741890f213fe7cb3fe93e5dd660ec4e05af8c346b9ff764190219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_c1d33d824c1cf06d10fee0dabc827d5fb3bc5db2a6c3db5559d59454a83a81c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d33d824c1cf06d10fee0dabc827d5fb3bc5db2a6c3db5559d59454a83a81c7->enter($__internal_c1d33d824c1cf06d10fee0dabc827d5fb3bc5db2a6c3db5559d59454a83a81c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_c1d33d824c1cf06d10fee0dabc827d5fb3bc5db2a6c3db5559d59454a83a81c7->leave($__internal_c1d33d824c1cf06d10fee0dabc827d5fb3bc5db2a6c3db5559d59454a83a81c7_prof);

        
        $__internal_7f2501336f2741890f213fe7cb3fe93e5dd660ec4e05af8c346b9ff764190219->leave($__internal_7f2501336f2741890f213fe7cb3fe93e5dd660ec4e05af8c346b9ff764190219_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_42840dae9c6f8b44c891eabeeefc1c4d466c01bbce0a8cdbb5ed337a413d0c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42840dae9c6f8b44c891eabeeefc1c4d466c01bbce0a8cdbb5ed337a413d0c3e->enter($__internal_42840dae9c6f8b44c891eabeeefc1c4d466c01bbce0a8cdbb5ed337a413d0c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f567edc130f3e0c72acd66866cf82b77289009d415998904340478bca2e47ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f567edc130f3e0c72acd66866cf82b77289009d415998904340478bca2e47ed7->enter($__internal_f567edc130f3e0c72acd66866cf82b77289009d415998904340478bca2e47ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f567edc130f3e0c72acd66866cf82b77289009d415998904340478bca2e47ed7->leave($__internal_f567edc130f3e0c72acd66866cf82b77289009d415998904340478bca2e47ed7_prof);

        
        $__internal_42840dae9c6f8b44c891eabeeefc1c4d466c01bbce0a8cdbb5ed337a413d0c3e->leave($__internal_42840dae9c6f8b44c891eabeeefc1c4d466c01bbce0a8cdbb5ed337a413d0c3e_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7f821c6722c31d6e57e8fc46211596a5567dce31de52c3b38ddc45a8b6211b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f821c6722c31d6e57e8fc46211596a5567dce31de52c3b38ddc45a8b6211b89->enter($__internal_7f821c6722c31d6e57e8fc46211596a5567dce31de52c3b38ddc45a8b6211b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_d17a65e3796840a327426bb02abac48947ba71ba793cecaa45e44a92b740a504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17a65e3796840a327426bb02abac48947ba71ba793cecaa45e44a92b740a504->enter($__internal_d17a65e3796840a327426bb02abac48947ba71ba793cecaa45e44a92b740a504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_30b6dc1976cdfba944240d6588ae15edce92af9ff7f737e5e56ac075f34ad54a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_2a1a1cf65fc7468e3eb82e99d9c4e9b0a49da82dfc493e9260df7a12da5eac11 = "{{") && ('' === $__internal_2a1a1cf65fc7468e3eb82e99d9c4e9b0a49da82dfc493e9260df7a12da5eac11 || 0 === strpos($__internal_30b6dc1976cdfba944240d6588ae15edce92af9ff7f737e5e56ac075f34ad54a, $__internal_2a1a1cf65fc7468e3eb82e99d9c4e9b0a49da82dfc493e9260df7a12da5eac11)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_5650bd8398d4d2b6d8b44ab0e7ec40fb738a3c10f778ababec2a09d4b07a0d16 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_84c7fa436c1546f5ead68a208658135b6156851b28724b0fc2e9be786ad39a91 = "}}") && ('' === $__internal_84c7fa436c1546f5ead68a208658135b6156851b28724b0fc2e9be786ad39a91 || $__internal_84c7fa436c1546f5ead68a208658135b6156851b28724b0fc2e9be786ad39a91 === substr($__internal_5650bd8398d4d2b6d8b44ab0e7ec40fb738a3c10f778ababec2a09d4b07a0d16, -strlen($__internal_84c7fa436c1546f5ead68a208658135b6156851b28724b0fc2e9be786ad39a91))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_d17a65e3796840a327426bb02abac48947ba71ba793cecaa45e44a92b740a504->leave($__internal_d17a65e3796840a327426bb02abac48947ba71ba793cecaa45e44a92b740a504_prof);

        
        $__internal_7f821c6722c31d6e57e8fc46211596a5567dce31de52c3b38ddc45a8b6211b89->leave($__internal_7f821c6722c31d6e57e8fc46211596a5567dce31de52c3b38ddc45a8b6211b89_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4af48e170196e173d0e5d95bf9a9bb49c5b7bad0ea5a5903b60769ec1203c2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af48e170196e173d0e5d95bf9a9bb49c5b7bad0ea5a5903b60769ec1203c2ba->enter($__internal_4af48e170196e173d0e5d95bf9a9bb49c5b7bad0ea5a5903b60769ec1203c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_9d0ec306fc41258d0a6821eb87c83cf5cd69ef6bfd300933771ddc7e666e97f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0ec306fc41258d0a6821eb87c83cf5cd69ef6bfd300933771ddc7e666e97f6->enter($__internal_9d0ec306fc41258d0a6821eb87c83cf5cd69ef6bfd300933771ddc7e666e97f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_9d0ec306fc41258d0a6821eb87c83cf5cd69ef6bfd300933771ddc7e666e97f6->leave($__internal_9d0ec306fc41258d0a6821eb87c83cf5cd69ef6bfd300933771ddc7e666e97f6_prof);

        
        $__internal_4af48e170196e173d0e5d95bf9a9bb49c5b7bad0ea5a5903b60769ec1203c2ba->leave($__internal_4af48e170196e173d0e5d95bf9a9bb49c5b7bad0ea5a5903b60769ec1203c2ba_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_dd6d26588be3349408a236594e21a7cb37fc2a9c6b0b343d6abcd750e97adf68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6d26588be3349408a236594e21a7cb37fc2a9c6b0b343d6abcd750e97adf68->enter($__internal_dd6d26588be3349408a236594e21a7cb37fc2a9c6b0b343d6abcd750e97adf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3a6300c1236e7b62afd479d2abb53e0abe6d476cee15acfc86c7d71b26ae2d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6300c1236e7b62afd479d2abb53e0abe6d476cee15acfc86c7d71b26ae2d5d->enter($__internal_3a6300c1236e7b62afd479d2abb53e0abe6d476cee15acfc86c7d71b26ae2d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_3a6300c1236e7b62afd479d2abb53e0abe6d476cee15acfc86c7d71b26ae2d5d->leave($__internal_3a6300c1236e7b62afd479d2abb53e0abe6d476cee15acfc86c7d71b26ae2d5d_prof);

        
        $__internal_dd6d26588be3349408a236594e21a7cb37fc2a9c6b0b343d6abcd750e97adf68->leave($__internal_dd6d26588be3349408a236594e21a7cb37fc2a9c6b0b343d6abcd750e97adf68_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a10f90842cf1057ea5d2aa9784cabbe434d9721366002401e2d14d74348c873b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10f90842cf1057ea5d2aa9784cabbe434d9721366002401e2d14d74348c873b->enter($__internal_a10f90842cf1057ea5d2aa9784cabbe434d9721366002401e2d14d74348c873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6a358352ab9b1d2b3a543928a7b16bafe4ccb2c6c1f8b403ccacd09c1d66a2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a358352ab9b1d2b3a543928a7b16bafe4ccb2c6c1f8b403ccacd09c1d66a2b8->enter($__internal_6a358352ab9b1d2b3a543928a7b16bafe4ccb2c6c1f8b403ccacd09c1d66a2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_6a358352ab9b1d2b3a543928a7b16bafe4ccb2c6c1f8b403ccacd09c1d66a2b8->leave($__internal_6a358352ab9b1d2b3a543928a7b16bafe4ccb2c6c1f8b403ccacd09c1d66a2b8_prof);

        
        $__internal_a10f90842cf1057ea5d2aa9784cabbe434d9721366002401e2d14d74348c873b->leave($__internal_a10f90842cf1057ea5d2aa9784cabbe434d9721366002401e2d14d74348c873b_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_28b4cf8efbede7687e44eac4d515962e6b5454c36c245b8ec700a10441518d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b4cf8efbede7687e44eac4d515962e6b5454c36c245b8ec700a10441518d96->enter($__internal_28b4cf8efbede7687e44eac4d515962e6b5454c36c245b8ec700a10441518d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_04dc7478f62779cf0e708217babefae42814fe355fe4e74ac1c9a246bc0fd3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dc7478f62779cf0e708217babefae42814fe355fe4e74ac1c9a246bc0fd3dd->enter($__internal_04dc7478f62779cf0e708217babefae42814fe355fe4e74ac1c9a246bc0fd3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_04dc7478f62779cf0e708217babefae42814fe355fe4e74ac1c9a246bc0fd3dd->leave($__internal_04dc7478f62779cf0e708217babefae42814fe355fe4e74ac1c9a246bc0fd3dd_prof);

        
        $__internal_28b4cf8efbede7687e44eac4d515962e6b5454c36c245b8ec700a10441518d96->leave($__internal_28b4cf8efbede7687e44eac4d515962e6b5454c36c245b8ec700a10441518d96_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9a86f4ceb301fc5255351e6c233bcf748fcecf3f80ff2ff2460718d794424fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a86f4ceb301fc5255351e6c233bcf748fcecf3f80ff2ff2460718d794424fe3->enter($__internal_9a86f4ceb301fc5255351e6c233bcf748fcecf3f80ff2ff2460718d794424fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_fb1e665a3a48f55be9558f5a712eb5991a8663f92772c202b18dc1f56fa43394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1e665a3a48f55be9558f5a712eb5991a8663f92772c202b18dc1f56fa43394->enter($__internal_fb1e665a3a48f55be9558f5a712eb5991a8663f92772c202b18dc1f56fa43394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_fb1e665a3a48f55be9558f5a712eb5991a8663f92772c202b18dc1f56fa43394->leave($__internal_fb1e665a3a48f55be9558f5a712eb5991a8663f92772c202b18dc1f56fa43394_prof);

        
        $__internal_9a86f4ceb301fc5255351e6c233bcf748fcecf3f80ff2ff2460718d794424fe3->leave($__internal_9a86f4ceb301fc5255351e6c233bcf748fcecf3f80ff2ff2460718d794424fe3_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_7b567f12176397e4efc6a1f8e49a304d4d8ea76350254c1839f8c3b3df57616c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b567f12176397e4efc6a1f8e49a304d4d8ea76350254c1839f8c3b3df57616c->enter($__internal_7b567f12176397e4efc6a1f8e49a304d4d8ea76350254c1839f8c3b3df57616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_419abfb54b7b7812f41909ac95a5afae8b9c6dd34ce9cf9f5d96ca151a8462ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419abfb54b7b7812f41909ac95a5afae8b9c6dd34ce9cf9f5d96ca151a8462ba->enter($__internal_419abfb54b7b7812f41909ac95a5afae8b9c6dd34ce9cf9f5d96ca151a8462ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_419abfb54b7b7812f41909ac95a5afae8b9c6dd34ce9cf9f5d96ca151a8462ba->leave($__internal_419abfb54b7b7812f41909ac95a5afae8b9c6dd34ce9cf9f5d96ca151a8462ba_prof);

        
        $__internal_7b567f12176397e4efc6a1f8e49a304d4d8ea76350254c1839f8c3b3df57616c->leave($__internal_7b567f12176397e4efc6a1f8e49a304d4d8ea76350254c1839f8c3b3df57616c_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_923629d1098fa6ef1aaa473f4068f74eebcc28ab65614bb8ad6c79070f1ad85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923629d1098fa6ef1aaa473f4068f74eebcc28ab65614bb8ad6c79070f1ad85c->enter($__internal_923629d1098fa6ef1aaa473f4068f74eebcc28ab65614bb8ad6c79070f1ad85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b9e23654e64873c0aa2b773944c231de9223928c9136622ede3e0e569e76ac6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e23654e64873c0aa2b773944c231de9223928c9136622ede3e0e569e76ac6e->enter($__internal_b9e23654e64873c0aa2b773944c231de9223928c9136622ede3e0e569e76ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_b9e23654e64873c0aa2b773944c231de9223928c9136622ede3e0e569e76ac6e->leave($__internal_b9e23654e64873c0aa2b773944c231de9223928c9136622ede3e0e569e76ac6e_prof);

        
        $__internal_923629d1098fa6ef1aaa473f4068f74eebcc28ab65614bb8ad6c79070f1ad85c->leave($__internal_923629d1098fa6ef1aaa473f4068f74eebcc28ab65614bb8ad6c79070f1ad85c_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9a965f3ffd7da20620261ac8e5b0659e72199f9a7dc46613feee4610346ef48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a965f3ffd7da20620261ac8e5b0659e72199f9a7dc46613feee4610346ef48b->enter($__internal_9a965f3ffd7da20620261ac8e5b0659e72199f9a7dc46613feee4610346ef48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_41e8ec32e1e3cd0c29de5c2bdc1ed6e48b89c6c4a00a70a1e3cbdac4cd655df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e8ec32e1e3cd0c29de5c2bdc1ed6e48b89c6c4a00a70a1e3cbdac4cd655df2->enter($__internal_41e8ec32e1e3cd0c29de5c2bdc1ed6e48b89c6c4a00a70a1e3cbdac4cd655df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_41e8ec32e1e3cd0c29de5c2bdc1ed6e48b89c6c4a00a70a1e3cbdac4cd655df2->leave($__internal_41e8ec32e1e3cd0c29de5c2bdc1ed6e48b89c6c4a00a70a1e3cbdac4cd655df2_prof);

        
        $__internal_9a965f3ffd7da20620261ac8e5b0659e72199f9a7dc46613feee4610346ef48b->leave($__internal_9a965f3ffd7da20620261ac8e5b0659e72199f9a7dc46613feee4610346ef48b_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_91b56457098baedd3d48641dc7f668542c938d395590abb832649796a1886539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b56457098baedd3d48641dc7f668542c938d395590abb832649796a1886539->enter($__internal_91b56457098baedd3d48641dc7f668542c938d395590abb832649796a1886539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c23af36249e70d8e2d050c5d0d1110a2e121fd59fc350abc9d4c1b1c98f3439b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23af36249e70d8e2d050c5d0d1110a2e121fd59fc350abc9d4c1b1c98f3439b->enter($__internal_c23af36249e70d8e2d050c5d0d1110a2e121fd59fc350abc9d4c1b1c98f3439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_c23af36249e70d8e2d050c5d0d1110a2e121fd59fc350abc9d4c1b1c98f3439b->leave($__internal_c23af36249e70d8e2d050c5d0d1110a2e121fd59fc350abc9d4c1b1c98f3439b_prof);

        
        $__internal_91b56457098baedd3d48641dc7f668542c938d395590abb832649796a1886539->leave($__internal_91b56457098baedd3d48641dc7f668542c938d395590abb832649796a1886539_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_69958ab8625a67abd12b5a18b99f9f23e46ceda1bb1d57fe6fd3ff1065bda6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69958ab8625a67abd12b5a18b99f9f23e46ceda1bb1d57fe6fd3ff1065bda6ae->enter($__internal_69958ab8625a67abd12b5a18b99f9f23e46ceda1bb1d57fe6fd3ff1065bda6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_41d09c184ebf5aa112d1154f83a8c80098ec3affbd0003dae98fe2fc66f1940e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d09c184ebf5aa112d1154f83a8c80098ec3affbd0003dae98fe2fc66f1940e->enter($__internal_41d09c184ebf5aa112d1154f83a8c80098ec3affbd0003dae98fe2fc66f1940e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_41d09c184ebf5aa112d1154f83a8c80098ec3affbd0003dae98fe2fc66f1940e->leave($__internal_41d09c184ebf5aa112d1154f83a8c80098ec3affbd0003dae98fe2fc66f1940e_prof);

        
        $__internal_69958ab8625a67abd12b5a18b99f9f23e46ceda1bb1d57fe6fd3ff1065bda6ae->leave($__internal_69958ab8625a67abd12b5a18b99f9f23e46ceda1bb1d57fe6fd3ff1065bda6ae_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b3408ae4c632bd173e0fcf612741179b20aba69aea22d3d1834c116c978b0335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3408ae4c632bd173e0fcf612741179b20aba69aea22d3d1834c116c978b0335->enter($__internal_b3408ae4c632bd173e0fcf612741179b20aba69aea22d3d1834c116c978b0335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_39ba6d0bdc3dd191eab662ccce137f15fb9c92e4219f2e71e9a7339273af36ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ba6d0bdc3dd191eab662ccce137f15fb9c92e4219f2e71e9a7339273af36ba->enter($__internal_39ba6d0bdc3dd191eab662ccce137f15fb9c92e4219f2e71e9a7339273af36ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_39ba6d0bdc3dd191eab662ccce137f15fb9c92e4219f2e71e9a7339273af36ba->leave($__internal_39ba6d0bdc3dd191eab662ccce137f15fb9c92e4219f2e71e9a7339273af36ba_prof);

        
        $__internal_b3408ae4c632bd173e0fcf612741179b20aba69aea22d3d1834c116c978b0335->leave($__internal_b3408ae4c632bd173e0fcf612741179b20aba69aea22d3d1834c116c978b0335_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bba57a282ac3c24ddafab6387222bc67b5a3ba175aefd927ef102a670ff3e689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba57a282ac3c24ddafab6387222bc67b5a3ba175aefd927ef102a670ff3e689->enter($__internal_bba57a282ac3c24ddafab6387222bc67b5a3ba175aefd927ef102a670ff3e689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3be5acae000fa91670d03824c8721963a5aed54e53c3731289a5f3fcc21ab60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be5acae000fa91670d03824c8721963a5aed54e53c3731289a5f3fcc21ab60a->enter($__internal_3be5acae000fa91670d03824c8721963a5aed54e53c3731289a5f3fcc21ab60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3be5acae000fa91670d03824c8721963a5aed54e53c3731289a5f3fcc21ab60a->leave($__internal_3be5acae000fa91670d03824c8721963a5aed54e53c3731289a5f3fcc21ab60a_prof);

        
        $__internal_bba57a282ac3c24ddafab6387222bc67b5a3ba175aefd927ef102a670ff3e689->leave($__internal_bba57a282ac3c24ddafab6387222bc67b5a3ba175aefd927ef102a670ff3e689_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e1f3c99b9099d4631b761b47d44cc4f1f422b6601256817b1e225386d7e71855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f3c99b9099d4631b761b47d44cc4f1f422b6601256817b1e225386d7e71855->enter($__internal_e1f3c99b9099d4631b761b47d44cc4f1f422b6601256817b1e225386d7e71855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1c8f87c9ada0ef6acaaa2ff45e0b4e4e1be9a81027c7a2cd67b50a71950ce032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8f87c9ada0ef6acaaa2ff45e0b4e4e1be9a81027c7a2cd67b50a71950ce032->enter($__internal_1c8f87c9ada0ef6acaaa2ff45e0b4e4e1be9a81027c7a2cd67b50a71950ce032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1c8f87c9ada0ef6acaaa2ff45e0b4e4e1be9a81027c7a2cd67b50a71950ce032->leave($__internal_1c8f87c9ada0ef6acaaa2ff45e0b4e4e1be9a81027c7a2cd67b50a71950ce032_prof);

        
        $__internal_e1f3c99b9099d4631b761b47d44cc4f1f422b6601256817b1e225386d7e71855->leave($__internal_e1f3c99b9099d4631b761b47d44cc4f1f422b6601256817b1e225386d7e71855_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_277afffe42e8186c3c28813af199aa6b550c4251edb890a2ace10aa2e7d53b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277afffe42e8186c3c28813af199aa6b550c4251edb890a2ace10aa2e7d53b9c->enter($__internal_277afffe42e8186c3c28813af199aa6b550c4251edb890a2ace10aa2e7d53b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c9f932f2c62ae1a62d2213f339def8e8e4b940bdc5ee17b9f0a470cf0959e544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f932f2c62ae1a62d2213f339def8e8e4b940bdc5ee17b9f0a470cf0959e544->enter($__internal_c9f932f2c62ae1a62d2213f339def8e8e4b940bdc5ee17b9f0a470cf0959e544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
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
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_c9f932f2c62ae1a62d2213f339def8e8e4b940bdc5ee17b9f0a470cf0959e544->leave($__internal_c9f932f2c62ae1a62d2213f339def8e8e4b940bdc5ee17b9f0a470cf0959e544_prof);

        
        $__internal_277afffe42e8186c3c28813af199aa6b550c4251edb890a2ace10aa2e7d53b9c->leave($__internal_277afffe42e8186c3c28813af199aa6b550c4251edb890a2ace10aa2e7d53b9c_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_00f4ccac6fa4fa7a1431b16f4e526dd1a6a85450dca30239383f6ab72ee23eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f4ccac6fa4fa7a1431b16f4e526dd1a6a85450dca30239383f6ab72ee23eeb->enter($__internal_00f4ccac6fa4fa7a1431b16f4e526dd1a6a85450dca30239383f6ab72ee23eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a5d37dab10b02186d888aa0aa3ffba06a68b167b040f1d7f3b3754d2e4154c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d37dab10b02186d888aa0aa3ffba06a68b167b040f1d7f3b3754d2e4154c24->enter($__internal_a5d37dab10b02186d888aa0aa3ffba06a68b167b040f1d7f3b3754d2e4154c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_a5d37dab10b02186d888aa0aa3ffba06a68b167b040f1d7f3b3754d2e4154c24->leave($__internal_a5d37dab10b02186d888aa0aa3ffba06a68b167b040f1d7f3b3754d2e4154c24_prof);

        
        $__internal_00f4ccac6fa4fa7a1431b16f4e526dd1a6a85450dca30239383f6ab72ee23eeb->leave($__internal_00f4ccac6fa4fa7a1431b16f4e526dd1a6a85450dca30239383f6ab72ee23eeb_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_12088f9d5ec29cedfc33ea55db99bd9d1dd77f1025e1d12162a260d26dd52cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12088f9d5ec29cedfc33ea55db99bd9d1dd77f1025e1d12162a260d26dd52cda->enter($__internal_12088f9d5ec29cedfc33ea55db99bd9d1dd77f1025e1d12162a260d26dd52cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f0735b36fe164386980b6672285d06dec2147c08bee6bc92e70cfd014100adfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0735b36fe164386980b6672285d06dec2147c08bee6bc92e70cfd014100adfe->enter($__internal_f0735b36fe164386980b6672285d06dec2147c08bee6bc92e70cfd014100adfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_f0735b36fe164386980b6672285d06dec2147c08bee6bc92e70cfd014100adfe->leave($__internal_f0735b36fe164386980b6672285d06dec2147c08bee6bc92e70cfd014100adfe_prof);

        
        $__internal_12088f9d5ec29cedfc33ea55db99bd9d1dd77f1025e1d12162a260d26dd52cda->leave($__internal_12088f9d5ec29cedfc33ea55db99bd9d1dd77f1025e1d12162a260d26dd52cda_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ef5a7b3adbcaea6fd9303d34a17302351a8f0a975bd10070b7a6890236855a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5a7b3adbcaea6fd9303d34a17302351a8f0a975bd10070b7a6890236855a23->enter($__internal_ef5a7b3adbcaea6fd9303d34a17302351a8f0a975bd10070b7a6890236855a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_97ac7bede602825505a75054e0940395ae6d86b1a94fecda62ba5a583564911c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ac7bede602825505a75054e0940395ae6d86b1a94fecda62ba5a583564911c->enter($__internal_97ac7bede602825505a75054e0940395ae6d86b1a94fecda62ba5a583564911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_97ac7bede602825505a75054e0940395ae6d86b1a94fecda62ba5a583564911c->leave($__internal_97ac7bede602825505a75054e0940395ae6d86b1a94fecda62ba5a583564911c_prof);

        
        $__internal_ef5a7b3adbcaea6fd9303d34a17302351a8f0a975bd10070b7a6890236855a23->leave($__internal_ef5a7b3adbcaea6fd9303d34a17302351a8f0a975bd10070b7a6890236855a23_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3e7c102f4b91b093b44e351ea6ca275f9b009751c60cfe3d03aa95d7bc3c32da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7c102f4b91b093b44e351ea6ca275f9b009751c60cfe3d03aa95d7bc3c32da->enter($__internal_3e7c102f4b91b093b44e351ea6ca275f9b009751c60cfe3d03aa95d7bc3c32da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_130768da87c866edeefe5b37f2c82cf9c5b9092caed8242a6f55e6b341b3e23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130768da87c866edeefe5b37f2c82cf9c5b9092caed8242a6f55e6b341b3e23f->enter($__internal_130768da87c866edeefe5b37f2c82cf9c5b9092caed8242a6f55e6b341b3e23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_130768da87c866edeefe5b37f2c82cf9c5b9092caed8242a6f55e6b341b3e23f->leave($__internal_130768da87c866edeefe5b37f2c82cf9c5b9092caed8242a6f55e6b341b3e23f_prof);

        
        $__internal_3e7c102f4b91b093b44e351ea6ca275f9b009751c60cfe3d03aa95d7bc3c32da->leave($__internal_3e7c102f4b91b093b44e351ea6ca275f9b009751c60cfe3d03aa95d7bc3c32da_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_12b96d82af113a0bc88af2d5597f2cefcfdef6aaa7395fd8c010a01b9d73d810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b96d82af113a0bc88af2d5597f2cefcfdef6aaa7395fd8c010a01b9d73d810->enter($__internal_12b96d82af113a0bc88af2d5597f2cefcfdef6aaa7395fd8c010a01b9d73d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_084d7f45f938be01b47f264be7b8df38acbd8c8b20ac440ad8c9569e03792bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084d7f45f938be01b47f264be7b8df38acbd8c8b20ac440ad8c9569e03792bb6->enter($__internal_084d7f45f938be01b47f264be7b8df38acbd8c8b20ac440ad8c9569e03792bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_084d7f45f938be01b47f264be7b8df38acbd8c8b20ac440ad8c9569e03792bb6->leave($__internal_084d7f45f938be01b47f264be7b8df38acbd8c8b20ac440ad8c9569e03792bb6_prof);

        
        $__internal_12b96d82af113a0bc88af2d5597f2cefcfdef6aaa7395fd8c010a01b9d73d810->leave($__internal_12b96d82af113a0bc88af2d5597f2cefcfdef6aaa7395fd8c010a01b9d73d810_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1554b9bd0c6a571a2cbd2995490a020a19b4f101d009b9f921cb5e7c23bd4f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1554b9bd0c6a571a2cbd2995490a020a19b4f101d009b9f921cb5e7c23bd4f04->enter($__internal_1554b9bd0c6a571a2cbd2995490a020a19b4f101d009b9f921cb5e7c23bd4f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_94e2420a3ce98c15d94515bf8c30834c23dbe61447986663d98985f067920f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e2420a3ce98c15d94515bf8c30834c23dbe61447986663d98985f067920f26->enter($__internal_94e2420a3ce98c15d94515bf8c30834c23dbe61447986663d98985f067920f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_94e2420a3ce98c15d94515bf8c30834c23dbe61447986663d98985f067920f26->leave($__internal_94e2420a3ce98c15d94515bf8c30834c23dbe61447986663d98985f067920f26_prof);

        
        $__internal_1554b9bd0c6a571a2cbd2995490a020a19b4f101d009b9f921cb5e7c23bd4f04->leave($__internal_1554b9bd0c6a571a2cbd2995490a020a19b4f101d009b9f921cb5e7c23bd4f04_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_dd2740e204028fad385667736724226614b71ef720729607193b894af8ff19fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2740e204028fad385667736724226614b71ef720729607193b894af8ff19fc->enter($__internal_dd2740e204028fad385667736724226614b71ef720729607193b894af8ff19fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6a2a0455753ec7b41bc515946bbecb936deff9253ead0105a5ead2109ce7f905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2a0455753ec7b41bc515946bbecb936deff9253ead0105a5ead2109ce7f905->enter($__internal_6a2a0455753ec7b41bc515946bbecb936deff9253ead0105a5ead2109ce7f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_6a2a0455753ec7b41bc515946bbecb936deff9253ead0105a5ead2109ce7f905->leave($__internal_6a2a0455753ec7b41bc515946bbecb936deff9253ead0105a5ead2109ce7f905_prof);

        
        $__internal_dd2740e204028fad385667736724226614b71ef720729607193b894af8ff19fc->leave($__internal_dd2740e204028fad385667736724226614b71ef720729607193b894af8ff19fc_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2c6ad09dfa8750548918ff389605256b76a82d31b194e276fe90289c3d198e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6ad09dfa8750548918ff389605256b76a82d31b194e276fe90289c3d198e23->enter($__internal_2c6ad09dfa8750548918ff389605256b76a82d31b194e276fe90289c3d198e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_de9d02cc23cc361cb4bd65f86cc039682b95fe0a30416a97ffb60ac81ffed5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9d02cc23cc361cb4bd65f86cc039682b95fe0a30416a97ffb60ac81ffed5aa->enter($__internal_de9d02cc23cc361cb4bd65f86cc039682b95fe0a30416a97ffb60ac81ffed5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_de9d02cc23cc361cb4bd65f86cc039682b95fe0a30416a97ffb60ac81ffed5aa->leave($__internal_de9d02cc23cc361cb4bd65f86cc039682b95fe0a30416a97ffb60ac81ffed5aa_prof);

        
        $__internal_2c6ad09dfa8750548918ff389605256b76a82d31b194e276fe90289c3d198e23->leave($__internal_2c6ad09dfa8750548918ff389605256b76a82d31b194e276fe90289c3d198e23_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_aa5f4adb5a39acff1b827ec3dd54cd1910f890cd93cca03168e4ebbc83e86ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5f4adb5a39acff1b827ec3dd54cd1910f890cd93cca03168e4ebbc83e86ce9->enter($__internal_aa5f4adb5a39acff1b827ec3dd54cd1910f890cd93cca03168e4ebbc83e86ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2efc7f18672a2aa2f24cd9a2de057e714fae33d5e104a4263aa5fb64994d2529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efc7f18672a2aa2f24cd9a2de057e714fae33d5e104a4263aa5fb64994d2529->enter($__internal_2efc7f18672a2aa2f24cd9a2de057e714fae33d5e104a4263aa5fb64994d2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2efc7f18672a2aa2f24cd9a2de057e714fae33d5e104a4263aa5fb64994d2529->leave($__internal_2efc7f18672a2aa2f24cd9a2de057e714fae33d5e104a4263aa5fb64994d2529_prof);

        
        $__internal_aa5f4adb5a39acff1b827ec3dd54cd1910f890cd93cca03168e4ebbc83e86ce9->leave($__internal_aa5f4adb5a39acff1b827ec3dd54cd1910f890cd93cca03168e4ebbc83e86ce9_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
