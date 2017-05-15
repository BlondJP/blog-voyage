<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb3d6647bce237c988a99bb355288250fcece34ccd14854f8b4b4672a674235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb3d6647bce237c988a99bb355288250fcece34ccd14854f8b4b4672a674235->enter($__internal_dcb3d6647bce237c988a99bb355288250fcece34ccd14854f8b4b4672a674235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_69224c4f45e03413237457e6880c7e72fea2d08f448e4937fe023681e450a86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69224c4f45e03413237457e6880c7e72fea2d08f448e4937fe023681e450a86f->enter($__internal_69224c4f45e03413237457e6880c7e72fea2d08f448e4937fe023681e450a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_dcb3d6647bce237c988a99bb355288250fcece34ccd14854f8b4b4672a674235->leave($__internal_dcb3d6647bce237c988a99bb355288250fcece34ccd14854f8b4b4672a674235_prof);

        
        $__internal_69224c4f45e03413237457e6880c7e72fea2d08f448e4937fe023681e450a86f->leave($__internal_69224c4f45e03413237457e6880c7e72fea2d08f448e4937fe023681e450a86f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d6f848b68af2ce6270d1bfb622b9ea7babb7f8ae85224575fef17eedb06c8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6f848b68af2ce6270d1bfb622b9ea7babb7f8ae85224575fef17eedb06c8b4->enter($__internal_8d6f848b68af2ce6270d1bfb622b9ea7babb7f8ae85224575fef17eedb06c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_495039e1e1c993553696f907f33aa32d63f902065950c811989a29ba497cf9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495039e1e1c993553696f907f33aa32d63f902065950c811989a29ba497cf9b8->enter($__internal_495039e1e1c993553696f907f33aa32d63f902065950c811989a29ba497cf9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog de Voyage";
        
        $__internal_495039e1e1c993553696f907f33aa32d63f902065950c811989a29ba497cf9b8->leave($__internal_495039e1e1c993553696f907f33aa32d63f902065950c811989a29ba497cf9b8_prof);

        
        $__internal_8d6f848b68af2ce6270d1bfb622b9ea7babb7f8ae85224575fef17eedb06c8b4->leave($__internal_8d6f848b68af2ce6270d1bfb622b9ea7babb7f8ae85224575fef17eedb06c8b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1159fda5427cbbbdb64e838f5bd9c3dec1f8282e8b7d09591d206fcac48664f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1159fda5427cbbbdb64e838f5bd9c3dec1f8282e8b7d09591d206fcac48664f->enter($__internal_d1159fda5427cbbbdb64e838f5bd9c3dec1f8282e8b7d09591d206fcac48664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_376fcea42cb4e93008d56d7ac641b926f2ae5146f3f9722732ea9abe3c07dfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376fcea42cb4e93008d56d7ac641b926f2ae5146f3f9722732ea9abe3c07dfb5->enter($__internal_376fcea42cb4e93008d56d7ac641b926f2ae5146f3f9722732ea9abe3c07dfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_376fcea42cb4e93008d56d7ac641b926f2ae5146f3f9722732ea9abe3c07dfb5->leave($__internal_376fcea42cb4e93008d56d7ac641b926f2ae5146f3f9722732ea9abe3c07dfb5_prof);

        
        $__internal_d1159fda5427cbbbdb64e838f5bd9c3dec1f8282e8b7d09591d206fcac48664f->leave($__internal_d1159fda5427cbbbdb64e838f5bd9c3dec1f8282e8b7d09591d206fcac48664f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73fdef3a9063d5169df2324a056b00645037674566c866cdfe4f2da13da13cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73fdef3a9063d5169df2324a056b00645037674566c866cdfe4f2da13da13cb->enter($__internal_a73fdef3a9063d5169df2324a056b00645037674566c866cdfe4f2da13da13cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e87b7963fe5201cc1f2c3fc939d92a8ec7d20036cc6e4763231b883435ce922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e87b7963fe5201cc1f2c3fc939d92a8ec7d20036cc6e4763231b883435ce922->enter($__internal_6e87b7963fe5201cc1f2c3fc939d92a8ec7d20036cc6e4763231b883435ce922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e87b7963fe5201cc1f2c3fc939d92a8ec7d20036cc6e4763231b883435ce922->leave($__internal_6e87b7963fe5201cc1f2c3fc939d92a8ec7d20036cc6e4763231b883435ce922_prof);

        
        $__internal_a73fdef3a9063d5169df2324a056b00645037674566c866cdfe4f2da13da13cb->leave($__internal_a73fdef3a9063d5169df2324a056b00645037674566c866cdfe4f2da13da13cb_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bc1bb1b6f5865c5a9b74663830c5f122bd99f7fda615c9d9b7210a63410e3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc1bb1b6f5865c5a9b74663830c5f122bd99f7fda615c9d9b7210a63410e3db->enter($__internal_5bc1bb1b6f5865c5a9b74663830c5f122bd99f7fda615c9d9b7210a63410e3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da09f90daf0177937c80e0dbfbc175f21de794862e79fb5f64d3efa8aa93e013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da09f90daf0177937c80e0dbfbc175f21de794862e79fb5f64d3efa8aa93e013->enter($__internal_da09f90daf0177937c80e0dbfbc175f21de794862e79fb5f64d3efa8aa93e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da09f90daf0177937c80e0dbfbc175f21de794862e79fb5f64d3efa8aa93e013->leave($__internal_da09f90daf0177937c80e0dbfbc175f21de794862e79fb5f64d3efa8aa93e013_prof);

        
        $__internal_5bc1bb1b6f5865c5a9b74663830c5f122bd99f7fda615c9d9b7210a63410e3db->leave($__internal_5bc1bb1b6f5865c5a9b74663830c5f122bd99f7fda615c9d9b7210a63410e3db_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 6,  69 => 5,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Blog de Voyage{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/jean-philippeblond/Projects/blog-voyage/app/Resources/views/base.html.twig");
    }
}
