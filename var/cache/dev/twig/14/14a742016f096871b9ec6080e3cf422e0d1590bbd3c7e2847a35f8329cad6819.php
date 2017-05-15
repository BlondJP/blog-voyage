<?php

/* post/index.html.twig */
class __TwigTemplate_4fc76613c75ff73215ff15d65dc43fed0b5a5186f8083bce4efbaa652f3aa9cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38eabb84462512eeeda3721574115f8424264a9c5a9edff7dc4944f3bc535cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38eabb84462512eeeda3721574115f8424264a9c5a9edff7dc4944f3bc535cd5->enter($__internal_38eabb84462512eeeda3721574115f8424264a9c5a9edff7dc4944f3bc535cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_8bd25f50640c7f9a0a9c5bb2b060817d0a6c93c110a8fa63c492276ec639e022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd25f50640c7f9a0a9c5bb2b060817d0a6c93c110a8fa63c492276ec639e022->enter($__internal_8bd25f50640c7f9a0a9c5bb2b060817d0a6c93c110a8fa63c492276ec639e022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38eabb84462512eeeda3721574115f8424264a9c5a9edff7dc4944f3bc535cd5->leave($__internal_38eabb84462512eeeda3721574115f8424264a9c5a9edff7dc4944f3bc535cd5_prof);

        
        $__internal_8bd25f50640c7f9a0a9c5bb2b060817d0a6c93c110a8fa63c492276ec639e022->leave($__internal_8bd25f50640c7f9a0a9c5bb2b060817d0a6c93c110a8fa63c492276ec639e022_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef025f9de3d7c3e5078d71a1d4640d6b50eb6b6c99074421cc915f0401e09d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef025f9de3d7c3e5078d71a1d4640d6b50eb6b6c99074421cc915f0401e09d4d->enter($__internal_ef025f9de3d7c3e5078d71a1d4640d6b50eb6b6c99074421cc915f0401e09d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a5a5bcbf7406ba18a0a0c47d259c593c30949dce5a83bad4841c71281215047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5a5bcbf7406ba18a0a0c47d259c593c30949dce5a83bad4841c71281215047->enter($__internal_3a5a5bcbf7406ba18a0a0c47d259c593c30949dce5a83bad4841c71281215047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Mes Posts</h1>


  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "
          <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()));
            echo "</h2>
          <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()));
            echo "</p>
          <br>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        
        $__internal_3a5a5bcbf7406ba18a0a0c47d259c593c30949dce5a83bad4841c71281215047->leave($__internal_3a5a5bcbf7406ba18a0a0c47d259c593c30949dce5a83bad4841c71281215047_prof);

        
        $__internal_ef025f9de3d7c3e5078d71a1d4640d6b50eb6b6c99074421cc915f0401e09d4d->leave($__internal_ef025f9de3d7c3e5078d71a1d4640d6b50eb6b6c99074421cc915f0401e09d4d_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  66 => 11,  62 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Mes Posts</h1>


  {% for post in posts %}

          <h2>{{ post.title|e }}</h2>
          <p>{{ post.content|e }}</p>
          <br>

  {% endfor %}

{% endblock %}
", "post/index.html.twig", "/Users/jean-philippeblond/Projects/blog-voyage/app/Resources/views/post/index.html.twig");
    }
}
