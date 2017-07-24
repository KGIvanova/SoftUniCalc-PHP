<?php

/* form/fields.html.twig */
class __TwigTemplate_fd5307e8d9ed0a7e246b7c8e54298121dc8dd7164b2fff591b75e7fedfe68405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b95f72d4d86ccf6153ee40d4b6a11ecc2226418aba6b22f122493a75ca233d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b95f72d4d86ccf6153ee40d4b6a11ecc2226418aba6b22f122493a75ca233d0->enter($__internal_0b95f72d4d86ccf6153ee40d4b6a11ecc2226418aba6b22f122493a75ca233d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_0b95f72d4d86ccf6153ee40d4b6a11ecc2226418aba6b22f122493a75ca233d0->leave($__internal_0b95f72d4d86ccf6153ee40d4b6a11ecc2226418aba6b22f122493a75ca233d0_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_fa3c7ad8f47756991b4c934d2c7699185d223840d826743c736719a12dc84f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3c7ad8f47756991b4c934d2c7699185d223840d826743c736719a12dc84f2e->enter($__internal_fa3c7ad8f47756991b4c934d2c7699185d223840d826743c736719a12dc84f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fa3c7ad8f47756991b4c934d2c7699185d223840d826743c736719a12dc84f2e->leave($__internal_fa3c7ad8f47756991b4c934d2c7699185d223840d826743c736719a12dc84f2e_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
