<?php

/* base.html.twig */
class __TwigTemplate_378a177adf29d2bbb9e6563d70a7414ae2d285daf78610e4af260d346001c79b extends Twig_Template
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
        $__internal_965f02143ab27d19796baf798151a33543da0096cb11cb12b02c2e11cefaa6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965f02143ab27d19796baf798151a33543da0096cb11cb12b02c2e11cefaa6b4->enter($__internal_965f02143ab27d19796baf798151a33543da0096cb11cb12b02c2e11cefaa6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_965f02143ab27d19796baf798151a33543da0096cb11cb12b02c2e11cefaa6b4->leave($__internal_965f02143ab27d19796baf798151a33543da0096cb11cb12b02c2e11cefaa6b4_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_52c26d0416f9e5a19707875d602853c3c260be762237f201a03dd48957e28cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c26d0416f9e5a19707875d602853c3c260be762237f201a03dd48957e28cb4->enter($__internal_52c26d0416f9e5a19707875d602853c3c260be762237f201a03dd48957e28cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_52c26d0416f9e5a19707875d602853c3c260be762237f201a03dd48957e28cb4->leave($__internal_52c26d0416f9e5a19707875d602853c3c260be762237f201a03dd48957e28cb4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ab6513d105eda9db25c247f297afbd59089510bc7f5d320aedf158b1c33ccea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab6513d105eda9db25c247f297afbd59089510bc7f5d320aedf158b1c33ccea->enter($__internal_9ab6513d105eda9db25c247f297afbd59089510bc7f5d320aedf158b1c33ccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9ab6513d105eda9db25c247f297afbd59089510bc7f5d320aedf158b1c33ccea->leave($__internal_9ab6513d105eda9db25c247f297afbd59089510bc7f5d320aedf158b1c33ccea_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ed6a38f61bf95094bde2046e816894b71e2e400e8c0305f013a059f01cabada8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6a38f61bf95094bde2046e816894b71e2e400e8c0305f013a059f01cabada8->enter($__internal_ed6a38f61bf95094bde2046e816894b71e2e400e8c0305f013a059f01cabada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ed6a38f61bf95094bde2046e816894b71e2e400e8c0305f013a059f01cabada8->leave($__internal_ed6a38f61bf95094bde2046e816894b71e2e400e8c0305f013a059f01cabada8_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_de5791231d059954099416183ab308877eca69a6916508c3e85bac9654c21cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5791231d059954099416183ab308877eca69a6916508c3e85bac9654c21cfb->enter($__internal_de5791231d059954099416183ab308877eca69a6916508c3e85bac9654c21cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_de5791231d059954099416183ab308877eca69a6916508c3e85bac9654c21cfb->leave($__internal_de5791231d059954099416183ab308877eca69a6916508c3e85bac9654c21cfb_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf81783e060fe7b0cba4d726627347318b344b32826a529503e2aacec691cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf81783e060fe7b0cba4d726627347318b344b32826a529503e2aacec691cfd->enter($__internal_ecf81783e060fe7b0cba4d726627347318b344b32826a529503e2aacec691cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ecf81783e060fe7b0cba4d726627347318b344b32826a529503e2aacec691cfd->leave($__internal_ecf81783e060fe7b0cba4d726627347318b344b32826a529503e2aacec691cfd_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_23ae110fca518e30c355d52571f95f87a3e8749e4494da52db8f2623dc12fe95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ae110fca518e30c355d52571f95f87a3e8749e4494da52db8f2623dc12fe95->enter($__internal_23ae110fca518e30c355d52571f95f87a3e8749e4494da52db8f2623dc12fe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_23ae110fca518e30c355d52571f95f87a3e8749e4494da52db8f2623dc12fe95->leave($__internal_23ae110fca518e30c355d52571f95f87a3e8749e4494da52db8f2623dc12fe95_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93d5dddce8118cb6833c60492e5b9e3f9489f32cec7d02e0c70d0503a37ff85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d5dddce8118cb6833c60492e5b9e3f9489f32cec7d02e0c70d0503a37ff85f->enter($__internal_93d5dddce8118cb6833c60492e5b9e3f9489f32cec7d02e0c70d0503a37ff85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_93d5dddce8118cb6833c60492e5b9e3f9489f32cec7d02e0c70d0503a37ff85f->leave($__internal_93d5dddce8118cb6833c60492e5b9e3f9489f32cec7d02e0c70d0503a37ff85f_prof);

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
