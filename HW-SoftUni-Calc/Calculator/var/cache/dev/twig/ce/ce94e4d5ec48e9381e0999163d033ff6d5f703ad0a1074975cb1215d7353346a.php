<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_404e1a431d5a0f292e20812528937b4de4f286b2b5f57b3b4e06fc1529bbe34d extends Twig_Template
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
        $__internal_0a4be03f7eb8bf7c3a8f64fcd1b332ce21e84ffba3cc17515f4b356f1745c3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4be03f7eb8bf7c3a8f64fcd1b332ce21e84ffba3cc17515f4b356f1745c3f4->enter($__internal_0a4be03f7eb8bf7c3a8f64fcd1b332ce21e84ffba3cc17515f4b356f1745c3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4be03f7eb8bf7c3a8f64fcd1b332ce21e84ffba3cc17515f4b356f1745c3f4->leave($__internal_0a4be03f7eb8bf7c3a8f64fcd1b332ce21e84ffba3cc17515f4b356f1745c3f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62fd90e85a440b4e131916d7df57210e9116cc0464739d65c9459cf0e601e5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fd90e85a440b4e131916d7df57210e9116cc0464739d65c9459cf0e601e5e6->enter($__internal_62fd90e85a440b4e131916d7df57210e9116cc0464739d65c9459cf0e601e5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_62fd90e85a440b4e131916d7df57210e9116cc0464739d65c9459cf0e601e5e6->leave($__internal_62fd90e85a440b4e131916d7df57210e9116cc0464739d65c9459cf0e601e5e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a894c799d742c5549b0558919ca59b35c95d3beadba76021f355ba54cf70b5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a894c799d742c5549b0558919ca59b35c95d3beadba76021f355ba54cf70b5a9->enter($__internal_a894c799d742c5549b0558919ca59b35c95d3beadba76021f355ba54cf70b5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a894c799d742c5549b0558919ca59b35c95d3beadba76021f355ba54cf70b5a9->leave($__internal_a894c799d742c5549b0558919ca59b35c95d3beadba76021f355ba54cf70b5a9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8d45ed4ed0faa09dcec75f6a4b653493045746e4719df8640415b4938a0e06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d45ed4ed0faa09dcec75f6a4b653493045746e4719df8640415b4938a0e06c->enter($__internal_b8d45ed4ed0faa09dcec75f6a4b653493045746e4719df8640415b4938a0e06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b8d45ed4ed0faa09dcec75f6a4b653493045746e4719df8640415b4938a0e06c->leave($__internal_b8d45ed4ed0faa09dcec75f6a4b653493045746e4719df8640415b4938a0e06c_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
