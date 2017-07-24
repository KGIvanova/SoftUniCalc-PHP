<?php

/* base.html.twig */
class __TwigTemplate_c482efe66f00ee339bc4e2448b96b90668aa454ece17637a86124d78a536ff3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d74c0c6dd6b26798490b3cc0ea7f4128f1fe1bb4e0c4e62bba093b18bb602916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74c0c6dd6b26798490b3cc0ea7f4128f1fe1bb4e0c4e62bba093b18bb602916->enter($__internal_d74c0c6dd6b26798490b3cc0ea7f4128f1fe1bb4e0c4e62bba093b18bb602916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_d74c0c6dd6b26798490b3cc0ea7f4128f1fe1bb4e0c4e62bba093b18bb602916->leave($__internal_d74c0c6dd6b26798490b3cc0ea7f4128f1fe1bb4e0c4e62bba093b18bb602916_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_48b5f6cf2d13dd31871571f27d1e2db236ec9d2493a6ddbfe16f1eb8c827a5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b5f6cf2d13dd31871571f27d1e2db236ec9d2493a6ddbfe16f1eb8c827a5bd->enter($__internal_48b5f6cf2d13dd31871571f27d1e2db236ec9d2493a6ddbfe16f1eb8c827a5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_48b5f6cf2d13dd31871571f27d1e2db236ec9d2493a6ddbfe16f1eb8c827a5bd->leave($__internal_48b5f6cf2d13dd31871571f27d1e2db236ec9d2493a6ddbfe16f1eb8c827a5bd_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3788dc505b624855d328f182f31e0d94636e4cf50b10994739a60d7d6530da3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3788dc505b624855d328f182f31e0d94636e4cf50b10994739a60d7d6530da3b->enter($__internal_3788dc505b624855d328f182f31e0d94636e4cf50b10994739a60d7d6530da3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_3788dc505b624855d328f182f31e0d94636e4cf50b10994739a60d7d6530da3b->leave($__internal_3788dc505b624855d328f182f31e0d94636e4cf50b10994739a60d7d6530da3b_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_06255568b2c7e271f9aee9ece6c4253e44b26ab8d86796e216a1c37a597b46b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06255568b2c7e271f9aee9ece6c4253e44b26ab8d86796e216a1c37a597b46b2->enter($__internal_06255568b2c7e271f9aee9ece6c4253e44b26ab8d86796e216a1c37a597b46b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_06255568b2c7e271f9aee9ece6c4253e44b26ab8d86796e216a1c37a597b46b2->leave($__internal_06255568b2c7e271f9aee9ece6c4253e44b26ab8d86796e216a1c37a597b46b2_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_d17d3682fe4fa9ef7c72ac34dfe9836d67b833b10e300b3097a3c9ad2f679961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17d3682fe4fa9ef7c72ac34dfe9836d67b833b10e300b3097a3c9ad2f679961->enter($__internal_d17d3682fe4fa9ef7c72ac34dfe9836d67b833b10e300b3097a3c9ad2f679961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_d17d3682fe4fa9ef7c72ac34dfe9836d67b833b10e300b3097a3c9ad2f679961->leave($__internal_d17d3682fe4fa9ef7c72ac34dfe9836d67b833b10e300b3097a3c9ad2f679961_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b74807dd8f260cc0b58863633dd7be0608098c467d7d942937cc05770ad7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b74807dd8f260cc0b58863633dd7be0608098c467d7d942937cc05770ad7fc->enter($__internal_d8b74807dd8f260cc0b58863633dd7be0608098c467d7d942937cc05770ad7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_d8b74807dd8f260cc0b58863633dd7be0608098c467d7d942937cc05770ad7fc->leave($__internal_d8b74807dd8f260cc0b58863633dd7be0608098c467d7d942937cc05770ad7fc_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_1f97453113efc6fe0456152432a1540134359c6851d78b299f0725d91b26296f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f97453113efc6fe0456152432a1540134359c6851d78b299f0725d91b26296f->enter($__internal_1f97453113efc6fe0456152432a1540134359c6851d78b299f0725d91b26296f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1f97453113efc6fe0456152432a1540134359c6851d78b299f0725d91b26296f->leave($__internal_1f97453113efc6fe0456152432a1540134359c6851d78b299f0725d91b26296f_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7254dede1dc09a2f409f5e62e6e68609fda3d5575ae6c763d45487718021e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7254dede1dc09a2f409f5e62e6e68609fda3d5575ae6c763d45487718021e57->enter($__internal_e7254dede1dc09a2f409f5e62e6e68609fda3d5575ae6c763d45487718021e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e7254dede1dc09a2f409f5e62e6e68609fda3d5575ae6c763d45487718021e57->leave($__internal_e7254dede1dc09a2f409f5e62e6e68609fda3d5575ae6c763d45487718021e57_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
