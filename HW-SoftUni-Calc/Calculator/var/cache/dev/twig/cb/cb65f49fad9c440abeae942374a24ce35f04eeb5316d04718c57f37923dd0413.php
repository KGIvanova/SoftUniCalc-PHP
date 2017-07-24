<?php

/* calculator/index.html.twig */
class __TwigTemplate_eee2d197d8e45ddb20d02dd7998cd667485be7fc4b0c62c9a55129a9605d51ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calculator/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60f5b9b1b2a807fdf060f4b75f5266aa0ccc5c9ad334ab5f83b59c5ed395b8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f5b9b1b2a807fdf060f4b75f5266aa0ccc5c9ad334ab5f83b59c5ed395b8e7->enter($__internal_60f5b9b1b2a807fdf060f4b75f5266aa0ccc5c9ad334ab5f83b59c5ed395b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f5b9b1b2a807fdf060f4b75f5266aa0ccc5c9ad334ab5f83b59c5ed395b8e7->leave($__internal_60f5b9b1b2a807fdf060f4b75f5266aa0ccc5c9ad334ab5f83b59c5ed395b8e7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a00059d335068bac3d10ea7218aef3b63353cc05bc3da7c18587865b82c85864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00059d335068bac3d10ea7218aef3b63353cc05bc3da7c18587865b82c85864->enter($__internal_a00059d335068bac3d10ea7218aef3b63353cc05bc3da7c18587865b82c85864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"text\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array())))) ? ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">

                             <option value=\"-\" ";
        // line 19
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "-"))) ? ("selected") : (""));
        echo ">-</option>
                             <option value=\"*\" ";
        // line 20
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "*"))) ? ("selected") : (""));
        echo ">*</option>
                             <option value=\"/\" ";
        // line 21
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "/"))) ? ("selected") : (""));
        echo ">/</option>
                             <option value=\">\" ";
        // line 22
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == ">"))) ? ("selected") : (""));
        echo ">></option>
                             <option value=\"<\" ";
        // line 23
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "<"))) ? ("selected") : (""));
        echo "><</option>
                             <option value=\"^\" ";
        // line 24
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "^"))) ? ("selected") : (""));
        echo ">^</option>
                             <option value=\"%\" ";
        // line 25
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "%"))) ? ("selected") : (""));
        echo ">%</option>

                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array())))) ? ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    ";
        // line 44
        if (array_key_exists("form", $context)) {
            // line 45
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                    ";
        }
        // line 47
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (((array_key_exists("result", $context) &&  !(null === (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) ? ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>

                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_a00059d335068bac3d10ea7218aef3b63353cc05bc3da7c18587865b82c85864->leave($__internal_a00059d335068bac3d10ea7218aef3b63353cc05bc3da7c18587865b82c85864_prof);

    }

    public function getTemplateName()
    {
        return "calculator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  120 => 47,  114 => 45,  112 => 44,  99 => 34,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"{{ path('index') }}\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"text\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"{{ calculator.leftOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">

                             <option value=\"-\" {{ calculator is defined and calculator.operator == '-' ? 'selected' : '' }}>-</option>
                             <option value=\"*\" {{ calculator is defined and calculator.operator == '*' ? 'selected' : '' }}>*</option>
                             <option value=\"/\" {{ calculator is defined and calculator.operator == '/' ? 'selected' : '' }}>/</option>
                             <option value=\">\" {{ calculator is defined and calculator.operator == '>' ? 'selected' : '' }}>></option>
                             <option value=\"<\" {{ calculator is defined and calculator.operator == '<' ? 'selected' : '' }}><</option>
                             <option value=\"^\" {{ calculator is defined and calculator.operator == '^' ? 'selected' : '' }}>^</option>
                             <option value=\"%\" {{ calculator is defined and calculator.operator == '%' ? 'selected' : '' }}>%</option>

                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"{{ calculator.rightOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    {% if form is defined %}
                        {{ form_row(form._token) }}
                    {% endif %}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"{{ result ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>

                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
