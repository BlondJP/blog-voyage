<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6c631741c455cd1826bb7818f7359b06db31c87a71a1f40e20853e26092621f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c631741c455cd1826bb7818f7359b06db31c87a71a1f40e20853e26092621f->enter($__internal_d6c631741c455cd1826bb7818f7359b06db31c87a71a1f40e20853e26092621f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_31c21e26cfcac7e0be2042557a2594e250d590dfce7c41c54a801a7a7f97ec93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c21e26cfcac7e0be2042557a2594e250d590dfce7c41c54a801a7a7f97ec93->enter($__internal_31c21e26cfcac7e0be2042557a2594e250d590dfce7c41c54a801a7a7f97ec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c631741c455cd1826bb7818f7359b06db31c87a71a1f40e20853e26092621f->leave($__internal_d6c631741c455cd1826bb7818f7359b06db31c87a71a1f40e20853e26092621f_prof);

        
        $__internal_31c21e26cfcac7e0be2042557a2594e250d590dfce7c41c54a801a7a7f97ec93->leave($__internal_31c21e26cfcac7e0be2042557a2594e250d590dfce7c41c54a801a7a7f97ec93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bc0b6417a39a34404199c8ff98cd5b5a3c54ef6696f38db9dbc96e7d43b6069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc0b6417a39a34404199c8ff98cd5b5a3c54ef6696f38db9dbc96e7d43b6069->enter($__internal_3bc0b6417a39a34404199c8ff98cd5b5a3c54ef6696f38db9dbc96e7d43b6069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c83f586d6c10cc0c12459fb84329ca465c42f3c17c4dcad35e795686f4225ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83f586d6c10cc0c12459fb84329ca465c42f3c17c4dcad35e795686f4225ead->enter($__internal_c83f586d6c10cc0c12459fb84329ca465c42f3c17c4dcad35e795686f4225ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c83f586d6c10cc0c12459fb84329ca465c42f3c17c4dcad35e795686f4225ead->leave($__internal_c83f586d6c10cc0c12459fb84329ca465c42f3c17c4dcad35e795686f4225ead_prof);

        
        $__internal_3bc0b6417a39a34404199c8ff98cd5b5a3c54ef6696f38db9dbc96e7d43b6069->leave($__internal_3bc0b6417a39a34404199c8ff98cd5b5a3c54ef6696f38db9dbc96e7d43b6069_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ace691d4bb3795e2b40a7c1fd3843ea29a1b2322fb223e600719c389d42ca69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace691d4bb3795e2b40a7c1fd3843ea29a1b2322fb223e600719c389d42ca69f->enter($__internal_ace691d4bb3795e2b40a7c1fd3843ea29a1b2322fb223e600719c389d42ca69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02000be58394591a9995e0eb985271f4cb0941cdd671c5da4d96ed8de148e518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02000be58394591a9995e0eb985271f4cb0941cdd671c5da4d96ed8de148e518->enter($__internal_02000be58394591a9995e0eb985271f4cb0941cdd671c5da4d96ed8de148e518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02000be58394591a9995e0eb985271f4cb0941cdd671c5da4d96ed8de148e518->leave($__internal_02000be58394591a9995e0eb985271f4cb0941cdd671c5da4d96ed8de148e518_prof);

        
        $__internal_ace691d4bb3795e2b40a7c1fd3843ea29a1b2322fb223e600719c389d42ca69f->leave($__internal_ace691d4bb3795e2b40a7c1fd3843ea29a1b2322fb223e600719c389d42ca69f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_94b6909772c7b038df9da87da47b83903f44dbe7f6c223fc51bfa411f1c1c9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b6909772c7b038df9da87da47b83903f44dbe7f6c223fc51bfa411f1c1c9fc->enter($__internal_94b6909772c7b038df9da87da47b83903f44dbe7f6c223fc51bfa411f1c1c9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2372ed6cd0c683cb48b649a36170e0bccf3a0448ddf6d7afd7468573e8caeee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2372ed6cd0c683cb48b649a36170e0bccf3a0448ddf6d7afd7468573e8caeee8->enter($__internal_2372ed6cd0c683cb48b649a36170e0bccf3a0448ddf6d7afd7468573e8caeee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2372ed6cd0c683cb48b649a36170e0bccf3a0448ddf6d7afd7468573e8caeee8->leave($__internal_2372ed6cd0c683cb48b649a36170e0bccf3a0448ddf6d7afd7468573e8caeee8_prof);

        
        $__internal_94b6909772c7b038df9da87da47b83903f44dbe7f6c223fc51bfa411f1c1c9fc->leave($__internal_94b6909772c7b038df9da87da47b83903f44dbe7f6c223fc51bfa411f1c1c9fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/jean-philippeblond/Projects/blog-voyage/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
