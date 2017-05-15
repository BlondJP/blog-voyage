<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_271a199ca6c7a5569c102145139c3adbb7c0380df9f279d448083c27d7f65af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271a199ca6c7a5569c102145139c3adbb7c0380df9f279d448083c27d7f65af1->enter($__internal_271a199ca6c7a5569c102145139c3adbb7c0380df9f279d448083c27d7f65af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4bf937120747a5800a47410b93f3074c259293cc830f38610207ae163baece69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf937120747a5800a47410b93f3074c259293cc830f38610207ae163baece69->enter($__internal_4bf937120747a5800a47410b93f3074c259293cc830f38610207ae163baece69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_271a199ca6c7a5569c102145139c3adbb7c0380df9f279d448083c27d7f65af1->leave($__internal_271a199ca6c7a5569c102145139c3adbb7c0380df9f279d448083c27d7f65af1_prof);

        
        $__internal_4bf937120747a5800a47410b93f3074c259293cc830f38610207ae163baece69->leave($__internal_4bf937120747a5800a47410b93f3074c259293cc830f38610207ae163baece69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70586148b38694b08cd75a4d4c37b7d89b2eaa5f0b2abd0c74b2cd301a9612b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70586148b38694b08cd75a4d4c37b7d89b2eaa5f0b2abd0c74b2cd301a9612b8->enter($__internal_70586148b38694b08cd75a4d4c37b7d89b2eaa5f0b2abd0c74b2cd301a9612b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cac8280b1cb9d8edcc5a9120e90a1669a61cac4d23dcefe193f1431e263ddf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac8280b1cb9d8edcc5a9120e90a1669a61cac4d23dcefe193f1431e263ddf5e->enter($__internal_cac8280b1cb9d8edcc5a9120e90a1669a61cac4d23dcefe193f1431e263ddf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cac8280b1cb9d8edcc5a9120e90a1669a61cac4d23dcefe193f1431e263ddf5e->leave($__internal_cac8280b1cb9d8edcc5a9120e90a1669a61cac4d23dcefe193f1431e263ddf5e_prof);

        
        $__internal_70586148b38694b08cd75a4d4c37b7d89b2eaa5f0b2abd0c74b2cd301a9612b8->leave($__internal_70586148b38694b08cd75a4d4c37b7d89b2eaa5f0b2abd0c74b2cd301a9612b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d23907599eb7eb0704206db3dfbe899c69398c74165a597aa90d5f0640b2a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d23907599eb7eb0704206db3dfbe899c69398c74165a597aa90d5f0640b2a1c->enter($__internal_7d23907599eb7eb0704206db3dfbe899c69398c74165a597aa90d5f0640b2a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ef86f8ff499c1307cf0a9056326d3fa61187ea68397a60d1b6e6ff23debb7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef86f8ff499c1307cf0a9056326d3fa61187ea68397a60d1b6e6ff23debb7c2->enter($__internal_4ef86f8ff499c1307cf0a9056326d3fa61187ea68397a60d1b6e6ff23debb7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4ef86f8ff499c1307cf0a9056326d3fa61187ea68397a60d1b6e6ff23debb7c2->leave($__internal_4ef86f8ff499c1307cf0a9056326d3fa61187ea68397a60d1b6e6ff23debb7c2_prof);

        
        $__internal_7d23907599eb7eb0704206db3dfbe899c69398c74165a597aa90d5f0640b2a1c->leave($__internal_7d23907599eb7eb0704206db3dfbe899c69398c74165a597aa90d5f0640b2a1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_caf975e8265829841322c7eabd95ac6931a20751c30be125d9ca12b80e4e1493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf975e8265829841322c7eabd95ac6931a20751c30be125d9ca12b80e4e1493->enter($__internal_caf975e8265829841322c7eabd95ac6931a20751c30be125d9ca12b80e4e1493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f3e8e8027de57b5c9f16bebe3ec368deb6cc1fa4cf8065e1305282397177218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3e8e8027de57b5c9f16bebe3ec368deb6cc1fa4cf8065e1305282397177218->enter($__internal_6f3e8e8027de57b5c9f16bebe3ec368deb6cc1fa4cf8065e1305282397177218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6f3e8e8027de57b5c9f16bebe3ec368deb6cc1fa4cf8065e1305282397177218->leave($__internal_6f3e8e8027de57b5c9f16bebe3ec368deb6cc1fa4cf8065e1305282397177218_prof);

        
        $__internal_caf975e8265829841322c7eabd95ac6931a20751c30be125d9ca12b80e4e1493->leave($__internal_caf975e8265829841322c7eabd95ac6931a20751c30be125d9ca12b80e4e1493_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/jean-philippeblond/Projects/blog-voyage/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
