<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c5e2a2d173138995db87f82efec28353f0d22d37a08193fb259848f8d86608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5e2a2d173138995db87f82efec28353f0d22d37a08193fb259848f8d86608b->enter($__internal_1c5e2a2d173138995db87f82efec28353f0d22d37a08193fb259848f8d86608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e1eb2beffc52ea5095239455e95f41a2ab9385d1478489248a52486cbf7edb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1eb2beffc52ea5095239455e95f41a2ab9385d1478489248a52486cbf7edb07->enter($__internal_e1eb2beffc52ea5095239455e95f41a2ab9385d1478489248a52486cbf7edb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5e2a2d173138995db87f82efec28353f0d22d37a08193fb259848f8d86608b->leave($__internal_1c5e2a2d173138995db87f82efec28353f0d22d37a08193fb259848f8d86608b_prof);

        
        $__internal_e1eb2beffc52ea5095239455e95f41a2ab9385d1478489248a52486cbf7edb07->leave($__internal_e1eb2beffc52ea5095239455e95f41a2ab9385d1478489248a52486cbf7edb07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e1852b8fbdf42875a0ff4e7ba1b1329c41532d680934debd6e2aafe83010aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1852b8fbdf42875a0ff4e7ba1b1329c41532d680934debd6e2aafe83010aa1->enter($__internal_1e1852b8fbdf42875a0ff4e7ba1b1329c41532d680934debd6e2aafe83010aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6bd26cd30f69b97ed3b9beae53f4e8afc796952360b1023f8776ffdbb0c0bc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd26cd30f69b97ed3b9beae53f4e8afc796952360b1023f8776ffdbb0c0bc51->enter($__internal_6bd26cd30f69b97ed3b9beae53f4e8afc796952360b1023f8776ffdbb0c0bc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bd26cd30f69b97ed3b9beae53f4e8afc796952360b1023f8776ffdbb0c0bc51->leave($__internal_6bd26cd30f69b97ed3b9beae53f4e8afc796952360b1023f8776ffdbb0c0bc51_prof);

        
        $__internal_1e1852b8fbdf42875a0ff4e7ba1b1329c41532d680934debd6e2aafe83010aa1->leave($__internal_1e1852b8fbdf42875a0ff4e7ba1b1329c41532d680934debd6e2aafe83010aa1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb8bd37dec1aeb22f3f799ea6b5c430c707e5d9e6855a451c0201cb31547fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb8bd37dec1aeb22f3f799ea6b5c430c707e5d9e6855a451c0201cb31547fa4->enter($__internal_3eb8bd37dec1aeb22f3f799ea6b5c430c707e5d9e6855a451c0201cb31547fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_744b588e26536f96312a45b6859351260189580ce1ec483a9948c07f62b5aa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744b588e26536f96312a45b6859351260189580ce1ec483a9948c07f62b5aa08->enter($__internal_744b588e26536f96312a45b6859351260189580ce1ec483a9948c07f62b5aa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_744b588e26536f96312a45b6859351260189580ce1ec483a9948c07f62b5aa08->leave($__internal_744b588e26536f96312a45b6859351260189580ce1ec483a9948c07f62b5aa08_prof);

        
        $__internal_3eb8bd37dec1aeb22f3f799ea6b5c430c707e5d9e6855a451c0201cb31547fa4->leave($__internal_3eb8bd37dec1aeb22f3f799ea6b5c430c707e5d9e6855a451c0201cb31547fa4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4af2728c046c6bc6d23e5ee85378688a18144666e2b577f9af1b94ffa9b263bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af2728c046c6bc6d23e5ee85378688a18144666e2b577f9af1b94ffa9b263bc->enter($__internal_4af2728c046c6bc6d23e5ee85378688a18144666e2b577f9af1b94ffa9b263bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e99ad73e5243e4c6b08df6bf2c0c434843cb614ed8bc4d71f4a527e0a7d80bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e99ad73e5243e4c6b08df6bf2c0c434843cb614ed8bc4d71f4a527e0a7d80bd->enter($__internal_9e99ad73e5243e4c6b08df6bf2c0c434843cb614ed8bc4d71f4a527e0a7d80bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e99ad73e5243e4c6b08df6bf2c0c434843cb614ed8bc4d71f4a527e0a7d80bd->leave($__internal_9e99ad73e5243e4c6b08df6bf2c0c434843cb614ed8bc4d71f4a527e0a7d80bd_prof);

        
        $__internal_4af2728c046c6bc6d23e5ee85378688a18144666e2b577f9af1b94ffa9b263bc->leave($__internal_4af2728c046c6bc6d23e5ee85378688a18144666e2b577f9af1b94ffa9b263bc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/jean-philippeblond/Projects/blog-voyage/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
