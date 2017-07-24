<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc7bf54f4d2ce2c48cdb9d27951d70146a3a28d678f8ca202ed150eeb39e9caf extends Twig_Template
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
        $__internal_f25276f1897464a8e9cc0a255591c528af03398fd889eefc3e86d72faa2b680c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25276f1897464a8e9cc0a255591c528af03398fd889eefc3e86d72faa2b680c->enter($__internal_f25276f1897464a8e9cc0a255591c528af03398fd889eefc3e86d72faa2b680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25276f1897464a8e9cc0a255591c528af03398fd889eefc3e86d72faa2b680c->leave($__internal_f25276f1897464a8e9cc0a255591c528af03398fd889eefc3e86d72faa2b680c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30629bb1db4fb20719040a3d43f06bf587b2748183cf88df3726933c1eed9243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30629bb1db4fb20719040a3d43f06bf587b2748183cf88df3726933c1eed9243->enter($__internal_30629bb1db4fb20719040a3d43f06bf587b2748183cf88df3726933c1eed9243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_30629bb1db4fb20719040a3d43f06bf587b2748183cf88df3726933c1eed9243->leave($__internal_30629bb1db4fb20719040a3d43f06bf587b2748183cf88df3726933c1eed9243_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1d2ca5970c3c3ece9ca1529b1824838475236db28bc233832b2223cf6a613ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d2ca5970c3c3ece9ca1529b1824838475236db28bc233832b2223cf6a613ce->enter($__internal_b1d2ca5970c3c3ece9ca1529b1824838475236db28bc233832b2223cf6a613ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b1d2ca5970c3c3ece9ca1529b1824838475236db28bc233832b2223cf6a613ce->leave($__internal_b1d2ca5970c3c3ece9ca1529b1824838475236db28bc233832b2223cf6a613ce_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99f1fa5f1f4afb59e71d32da7d4ec5926eb95436f6b7dd9fe17e224f174e6fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f1fa5f1f4afb59e71d32da7d4ec5926eb95436f6b7dd9fe17e224f174e6fce->enter($__internal_99f1fa5f1f4afb59e71d32da7d4ec5926eb95436f6b7dd9fe17e224f174e6fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_99f1fa5f1f4afb59e71d32da7d4ec5926eb95436f6b7dd9fe17e224f174e6fce->leave($__internal_99f1fa5f1f4afb59e71d32da7d4ec5926eb95436f6b7dd9fe17e224f174e6fce_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
