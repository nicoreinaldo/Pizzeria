<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f3a1b1668704238be3b5c94cd8cd5cf8417ee84d09767284e67ceea576dbbb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86b6e6538ce9e19f7fa9a7bb507bd06f1f33ff321bca2cac55af2179ede98b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b6e6538ce9e19f7fa9a7bb507bd06f1f33ff321bca2cac55af2179ede98b65->enter($__internal_86b6e6538ce9e19f7fa9a7bb507bd06f1f33ff321bca2cac55af2179ede98b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_f543be25bbd2a2413c2083c95f80654e084d5dfebc3a855f858eb3521603e8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f543be25bbd2a2413c2083c95f80654e084d5dfebc3a855f858eb3521603e8f9->enter($__internal_f543be25bbd2a2413c2083c95f80654e084d5dfebc3a855f858eb3521603e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_86b6e6538ce9e19f7fa9a7bb507bd06f1f33ff321bca2cac55af2179ede98b65->leave($__internal_86b6e6538ce9e19f7fa9a7bb507bd06f1f33ff321bca2cac55af2179ede98b65_prof);

        
        $__internal_f543be25bbd2a2413c2083c95f80654e084d5dfebc3a855f858eb3521603e8f9->leave($__internal_f543be25bbd2a2413c2083c95f80654e084d5dfebc3a855f858eb3521603e8f9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ce8896e36e174a5582ae0156cc291c26b335a614d860737214c9e664cb3e4208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8896e36e174a5582ae0156cc291c26b335a614d860737214c9e664cb3e4208->enter($__internal_ce8896e36e174a5582ae0156cc291c26b335a614d860737214c9e664cb3e4208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_8c9f5f8f964da954a56748e0734e67dc165ffa2d745faa3e62dd9763a291605d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9f5f8f964da954a56748e0734e67dc165ffa2d745faa3e62dd9763a291605d->enter($__internal_8c9f5f8f964da954a56748e0734e67dc165ffa2d745faa3e62dd9763a291605d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_8c9f5f8f964da954a56748e0734e67dc165ffa2d745faa3e62dd9763a291605d->leave($__internal_8c9f5f8f964da954a56748e0734e67dc165ffa2d745faa3e62dd9763a291605d_prof);

        
        $__internal_ce8896e36e174a5582ae0156cc291c26b335a614d860737214c9e664cb3e4208->leave($__internal_ce8896e36e174a5582ae0156cc291c26b335a614d860737214c9e664cb3e4208_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_79af0fa846459893fbf602bd3131ced3f368f9d7cbbc20e9f3ce8289cb4ea836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79af0fa846459893fbf602bd3131ced3f368f9d7cbbc20e9f3ce8289cb4ea836->enter($__internal_79af0fa846459893fbf602bd3131ced3f368f9d7cbbc20e9f3ce8289cb4ea836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_68b6c8a1f204cb5c064335205013bfce70ada6fa3b01461b054e5dc77ffa4d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b6c8a1f204cb5c064335205013bfce70ada6fa3b01461b054e5dc77ffa4d53->enter($__internal_68b6c8a1f204cb5c064335205013bfce70ada6fa3b01461b054e5dc77ffa4d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_68b6c8a1f204cb5c064335205013bfce70ada6fa3b01461b054e5dc77ffa4d53->leave($__internal_68b6c8a1f204cb5c064335205013bfce70ada6fa3b01461b054e5dc77ffa4d53_prof);

        
        $__internal_79af0fa846459893fbf602bd3131ced3f368f9d7cbbc20e9f3ce8289cb4ea836->leave($__internal_79af0fa846459893fbf602bd3131ced3f368f9d7cbbc20e9f3ce8289cb4ea836_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1fb71f777006cab00c8a022a5a4f38ef66a1a2415424e61f0e300e27b3d10211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb71f777006cab00c8a022a5a4f38ef66a1a2415424e61f0e300e27b3d10211->enter($__internal_1fb71f777006cab00c8a022a5a4f38ef66a1a2415424e61f0e300e27b3d10211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6ba396b06c1f38f60df78802d519f900b62cb556463887b11534942b4c2e5abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba396b06c1f38f60df78802d519f900b62cb556463887b11534942b4c2e5abd->enter($__internal_6ba396b06c1f38f60df78802d519f900b62cb556463887b11534942b4c2e5abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_6ba396b06c1f38f60df78802d519f900b62cb556463887b11534942b4c2e5abd->leave($__internal_6ba396b06c1f38f60df78802d519f900b62cb556463887b11534942b4c2e5abd_prof);

        
        $__internal_1fb71f777006cab00c8a022a5a4f38ef66a1a2415424e61f0e300e27b3d10211->leave($__internal_1fb71f777006cab00c8a022a5a4f38ef66a1a2415424e61f0e300e27b3d10211_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_75a8e7fe5d14ca459d799471232274a9445ba3c6062c9180ecd90e846ba39e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a8e7fe5d14ca459d799471232274a9445ba3c6062c9180ecd90e846ba39e67->enter($__internal_75a8e7fe5d14ca459d799471232274a9445ba3c6062c9180ecd90e846ba39e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c407217c9862503c5a4e68e32d7e347cdd2ec757f07bdea54dca6ea3e2d19604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c407217c9862503c5a4e68e32d7e347cdd2ec757f07bdea54dca6ea3e2d19604->enter($__internal_c407217c9862503c5a4e68e32d7e347cdd2ec757f07bdea54dca6ea3e2d19604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_c407217c9862503c5a4e68e32d7e347cdd2ec757f07bdea54dca6ea3e2d19604->leave($__internal_c407217c9862503c5a4e68e32d7e347cdd2ec757f07bdea54dca6ea3e2d19604_prof);

        
        $__internal_75a8e7fe5d14ca459d799471232274a9445ba3c6062c9180ecd90e846ba39e67->leave($__internal_75a8e7fe5d14ca459d799471232274a9445ba3c6062c9180ecd90e846ba39e67_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b40251e4c171d0e15dec63c9aee3d31d6405efcffc8d01afac9754bae5bc5dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40251e4c171d0e15dec63c9aee3d31d6405efcffc8d01afac9754bae5bc5dce->enter($__internal_b40251e4c171d0e15dec63c9aee3d31d6405efcffc8d01afac9754bae5bc5dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d14fe0b58453d3dd6b07e2d94f3c255c35abf1a480681c39586467967e844294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14fe0b58453d3dd6b07e2d94f3c255c35abf1a480681c39586467967e844294->enter($__internal_d14fe0b58453d3dd6b07e2d94f3c255c35abf1a480681c39586467967e844294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d14fe0b58453d3dd6b07e2d94f3c255c35abf1a480681c39586467967e844294->leave($__internal_d14fe0b58453d3dd6b07e2d94f3c255c35abf1a480681c39586467967e844294_prof);

        
        $__internal_b40251e4c171d0e15dec63c9aee3d31d6405efcffc8d01afac9754bae5bc5dce->leave($__internal_b40251e4c171d0e15dec63c9aee3d31d6405efcffc8d01afac9754bae5bc5dce_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d82962fcfb1d5305f0a22b2f5b9f71b3613e8d078327b93458d970c023f88500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82962fcfb1d5305f0a22b2f5b9f71b3613e8d078327b93458d970c023f88500->enter($__internal_d82962fcfb1d5305f0a22b2f5b9f71b3613e8d078327b93458d970c023f88500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b0272360ef2a6862df8e4e696e7b429684d6a015d3325473427d89376ce6449d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0272360ef2a6862df8e4e696e7b429684d6a015d3325473427d89376ce6449d->enter($__internal_b0272360ef2a6862df8e4e696e7b429684d6a015d3325473427d89376ce6449d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b0272360ef2a6862df8e4e696e7b429684d6a015d3325473427d89376ce6449d->leave($__internal_b0272360ef2a6862df8e4e696e7b429684d6a015d3325473427d89376ce6449d_prof);

        
        $__internal_d82962fcfb1d5305f0a22b2f5b9f71b3613e8d078327b93458d970c023f88500->leave($__internal_d82962fcfb1d5305f0a22b2f5b9f71b3613e8d078327b93458d970c023f88500_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_15cdde9c582f3fb10cd17050aa0ce296fcd4208f44cc65e4986e5e021863a64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cdde9c582f3fb10cd17050aa0ce296fcd4208f44cc65e4986e5e021863a64e->enter($__internal_15cdde9c582f3fb10cd17050aa0ce296fcd4208f44cc65e4986e5e021863a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_ac21ea3c1737f1867adbf2cd158dcefef4486099ae8212210c96f13459e2149c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac21ea3c1737f1867adbf2cd158dcefef4486099ae8212210c96f13459e2149c->enter($__internal_ac21ea3c1737f1867adbf2cd158dcefef4486099ae8212210c96f13459e2149c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ac21ea3c1737f1867adbf2cd158dcefef4486099ae8212210c96f13459e2149c->leave($__internal_ac21ea3c1737f1867adbf2cd158dcefef4486099ae8212210c96f13459e2149c_prof);

        
        $__internal_15cdde9c582f3fb10cd17050aa0ce296fcd4208f44cc65e4986e5e021863a64e->leave($__internal_15cdde9c582f3fb10cd17050aa0ce296fcd4208f44cc65e4986e5e021863a64e_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_fb0125754fb87c507d4ee8f2297e321b2e8bc6f7406caf9df6e1baa74def50a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0125754fb87c507d4ee8f2297e321b2e8bc6f7406caf9df6e1baa74def50a5->enter($__internal_fb0125754fb87c507d4ee8f2297e321b2e8bc6f7406caf9df6e1baa74def50a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_26020c9011031891a4e4d51786b793fec7510e2b05a4003e2de27a6570649267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26020c9011031891a4e4d51786b793fec7510e2b05a4003e2de27a6570649267->enter($__internal_26020c9011031891a4e4d51786b793fec7510e2b05a4003e2de27a6570649267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_26020c9011031891a4e4d51786b793fec7510e2b05a4003e2de27a6570649267->leave($__internal_26020c9011031891a4e4d51786b793fec7510e2b05a4003e2de27a6570649267_prof);

        
        $__internal_fb0125754fb87c507d4ee8f2297e321b2e8bc6f7406caf9df6e1baa74def50a5->leave($__internal_fb0125754fb87c507d4ee8f2297e321b2e8bc6f7406caf9df6e1baa74def50a5_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_2c45d5453479399d83dce49502ec09e9d16970dd712740100910d4057a3b104d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c45d5453479399d83dce49502ec09e9d16970dd712740100910d4057a3b104d->enter($__internal_2c45d5453479399d83dce49502ec09e9d16970dd712740100910d4057a3b104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_497ab062e90e85cc8948da6a3a206932735ef167442d86cfbdff1d0d5dc327dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497ab062e90e85cc8948da6a3a206932735ef167442d86cfbdff1d0d5dc327dd->enter($__internal_497ab062e90e85cc8948da6a3a206932735ef167442d86cfbdff1d0d5dc327dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_497ab062e90e85cc8948da6a3a206932735ef167442d86cfbdff1d0d5dc327dd->leave($__internal_497ab062e90e85cc8948da6a3a206932735ef167442d86cfbdff1d0d5dc327dd_prof);

        
        $__internal_2c45d5453479399d83dce49502ec09e9d16970dd712740100910d4057a3b104d->leave($__internal_2c45d5453479399d83dce49502ec09e9d16970dd712740100910d4057a3b104d_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3bfbd1689296fd2ed11110e932d40ecb41711eba77cb21b83a28894df9ac3765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfbd1689296fd2ed11110e932d40ecb41711eba77cb21b83a28894df9ac3765->enter($__internal_3bfbd1689296fd2ed11110e932d40ecb41711eba77cb21b83a28894df9ac3765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3c87c87a56a798447afe398cc3ceb3c031d0d73c4a750ffa12d34f8f36973439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c87c87a56a798447afe398cc3ceb3c031d0d73c4a750ffa12d34f8f36973439->enter($__internal_3c87c87a56a798447afe398cc3ceb3c031d0d73c4a750ffa12d34f8f36973439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_3c87c87a56a798447afe398cc3ceb3c031d0d73c4a750ffa12d34f8f36973439->leave($__internal_3c87c87a56a798447afe398cc3ceb3c031d0d73c4a750ffa12d34f8f36973439_prof);

        
        $__internal_3bfbd1689296fd2ed11110e932d40ecb41711eba77cb21b83a28894df9ac3765->leave($__internal_3bfbd1689296fd2ed11110e932d40ecb41711eba77cb21b83a28894df9ac3765_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
