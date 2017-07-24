<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8e4b2020749f37617b79a50ccfc5b160f06d65aba43c389acdfbbc2125c963a extends Twig_Template
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
        $__internal_0a4d9bd608bf9e0baacb015152d6d9b87aa2d9bb99e942ff647cd69c9b98a496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4d9bd608bf9e0baacb015152d6d9b87aa2d9bb99e942ff647cd69c9b98a496->enter($__internal_0a4d9bd608bf9e0baacb015152d6d9b87aa2d9bb99e942ff647cd69c9b98a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4d9bd608bf9e0baacb015152d6d9b87aa2d9bb99e942ff647cd69c9b98a496->leave($__internal_0a4d9bd608bf9e0baacb015152d6d9b87aa2d9bb99e942ff647cd69c9b98a496_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f3e5020a68904a4afc151b1019af02fea6a59244c140a1b87b24386fe944a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3e5020a68904a4afc151b1019af02fea6a59244c140a1b87b24386fe944a3b->enter($__internal_0f3e5020a68904a4afc151b1019af02fea6a59244c140a1b87b24386fe944a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f3e5020a68904a4afc151b1019af02fea6a59244c140a1b87b24386fe944a3b->leave($__internal_0f3e5020a68904a4afc151b1019af02fea6a59244c140a1b87b24386fe944a3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6972f111939921401339233eca89d492240b9309a07330ad9fb5bec24eca2614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6972f111939921401339233eca89d492240b9309a07330ad9fb5bec24eca2614->enter($__internal_6972f111939921401339233eca89d492240b9309a07330ad9fb5bec24eca2614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6972f111939921401339233eca89d492240b9309a07330ad9fb5bec24eca2614->leave($__internal_6972f111939921401339233eca89d492240b9309a07330ad9fb5bec24eca2614_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_304d10f8a1f8263983336ebec8e2c9e60eb465ccd8c4778b069b38299b232410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304d10f8a1f8263983336ebec8e2c9e60eb465ccd8c4778b069b38299b232410->enter($__internal_304d10f8a1f8263983336ebec8e2c9e60eb465ccd8c4778b069b38299b232410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_304d10f8a1f8263983336ebec8e2c9e60eb465ccd8c4778b069b38299b232410->leave($__internal_304d10f8a1f8263983336ebec8e2c9e60eb465ccd8c4778b069b38299b232410_prof);

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
