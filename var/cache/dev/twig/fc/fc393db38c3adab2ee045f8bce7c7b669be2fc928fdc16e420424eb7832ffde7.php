<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eebed8d324785e24378ebbf02ec64d6e26d3ed3fb9e3cef95046baac6693cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc292e5b8890f3b93376c1969a01a3e40e009360d744c746aab9be0f2f804ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc292e5b8890f3b93376c1969a01a3e40e009360d744c746aab9be0f2f804ce9->enter($__internal_dc292e5b8890f3b93376c1969a01a3e40e009360d744c746aab9be0f2f804ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_60ff008ae3d16726d408c0ca3018c3b4ea1d54fdd410da8832a58f07bbf68477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ff008ae3d16726d408c0ca3018c3b4ea1d54fdd410da8832a58f07bbf68477->enter($__internal_60ff008ae3d16726d408c0ca3018c3b4ea1d54fdd410da8832a58f07bbf68477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc292e5b8890f3b93376c1969a01a3e40e009360d744c746aab9be0f2f804ce9->leave($__internal_dc292e5b8890f3b93376c1969a01a3e40e009360d744c746aab9be0f2f804ce9_prof);

        
        $__internal_60ff008ae3d16726d408c0ca3018c3b4ea1d54fdd410da8832a58f07bbf68477->leave($__internal_60ff008ae3d16726d408c0ca3018c3b4ea1d54fdd410da8832a58f07bbf68477_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aca628fd6d3af5ea6fa6453f8af7f90b2dd3225c550efd1298bcc34a7bcf2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aca628fd6d3af5ea6fa6453f8af7f90b2dd3225c550efd1298bcc34a7bcf2fd->enter($__internal_9aca628fd6d3af5ea6fa6453f8af7f90b2dd3225c550efd1298bcc34a7bcf2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ad7977dd7b76a38a98bc87bacf8e194d2c77baa61885cd370f582b7585b9202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad7977dd7b76a38a98bc87bacf8e194d2c77baa61885cd370f582b7585b9202->enter($__internal_2ad7977dd7b76a38a98bc87bacf8e194d2c77baa61885cd370f582b7585b9202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2ad7977dd7b76a38a98bc87bacf8e194d2c77baa61885cd370f582b7585b9202->leave($__internal_2ad7977dd7b76a38a98bc87bacf8e194d2c77baa61885cd370f582b7585b9202_prof);

        
        $__internal_9aca628fd6d3af5ea6fa6453f8af7f90b2dd3225c550efd1298bcc34a7bcf2fd->leave($__internal_9aca628fd6d3af5ea6fa6453f8af7f90b2dd3225c550efd1298bcc34a7bcf2fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/jean-philippeblond/Projects/blog-voyage/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
