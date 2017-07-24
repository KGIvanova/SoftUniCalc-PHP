<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_618b2e89ad42d2500475360bde2a27fcfb720ed2ceb4058357fe85574e286bf3 extends Twig_Template
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
        $__internal_d2ef7e864f1f446cdf00f00a2ac6afaa3ccbce5d201d56fb3ea61d6e35f659a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ef7e864f1f446cdf00f00a2ac6afaa3ccbce5d201d56fb3ea61d6e35f659a9->enter($__internal_d2ef7e864f1f446cdf00f00a2ac6afaa3ccbce5d201d56fb3ea61d6e35f659a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2ef7e864f1f446cdf00f00a2ac6afaa3ccbce5d201d56fb3ea61d6e35f659a9->leave($__internal_d2ef7e864f1f446cdf00f00a2ac6afaa3ccbce5d201d56fb3ea61d6e35f659a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79e4d31876aa76981ac2e8a9ef7cf672ff8c6928bd780124e7b9abe8eade98b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e4d31876aa76981ac2e8a9ef7cf672ff8c6928bd780124e7b9abe8eade98b4->enter($__internal_79e4d31876aa76981ac2e8a9ef7cf672ff8c6928bd780124e7b9abe8eade98b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79e4d31876aa76981ac2e8a9ef7cf672ff8c6928bd780124e7b9abe8eade98b4->leave($__internal_79e4d31876aa76981ac2e8a9ef7cf672ff8c6928bd780124e7b9abe8eade98b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f2fad73bb51d27ff97a88acaa8a2fa4aec07af43623c87d195235488e61f2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2fad73bb51d27ff97a88acaa8a2fa4aec07af43623c87d195235488e61f2da->enter($__internal_0f2fad73bb51d27ff97a88acaa8a2fa4aec07af43623c87d195235488e61f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f2fad73bb51d27ff97a88acaa8a2fa4aec07af43623c87d195235488e61f2da->leave($__internal_0f2fad73bb51d27ff97a88acaa8a2fa4aec07af43623c87d195235488e61f2da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa02d2d6fab59d2c480ab7c6bedcafeb89a0505f1d5e5f77542c56c7682523d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa02d2d6fab59d2c480ab7c6bedcafeb89a0505f1d5e5f77542c56c7682523d9->enter($__internal_aa02d2d6fab59d2c480ab7c6bedcafeb89a0505f1d5e5f77542c56c7682523d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa02d2d6fab59d2c480ab7c6bedcafeb89a0505f1d5e5f77542c56c7682523d9->leave($__internal_aa02d2d6fab59d2c480ab7c6bedcafeb89a0505f1d5e5f77542c56c7682523d9_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
