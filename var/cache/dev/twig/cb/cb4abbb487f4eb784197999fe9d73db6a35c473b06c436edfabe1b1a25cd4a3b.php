<?php

/* job/control_panel.html.twig */
class __TwigTemplate_722df194604b6c29f57f419bc0dd69c2f4ee48d52b59afa6cde78cd93e319bd8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/control_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/control_panel.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <span class=\"navbar-brand\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Control Panel:"), "html", null, true);
        echo "</span>
        </div>

        <div class=\"collapse navbar-collapse\">
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "navbar-form navbar-left"]]);
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 9, $this->source); })()), 'widget');
        echo "

                <button type=\"submit\" class=\"btn btn-default\" onclick=\"return confirm('Are you sure?')\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        echo "
                </button>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 15, $this->source); })()), 'form_end');
        echo "

            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 17, $this->source); })()), "activated", [])) {
            // line 18
            echo "                <p class=\"navbar-text\">
                    ";
            // line 19
            $context["daysToExpiring"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 19, $this->source); })()), "expiresAt", []), "diff", [0 => twig_date_converter($this->env)], "method"), "%a");
            // line 20
            echo "
                    ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("]-Inf,0] Expired|{1}Expires in 1 day|]1,Inf[ Expires in %days% days", ["%days%" => (isset($context["daysToExpiring"]) || array_key_exists("daysToExpiring", $context) ? $context["daysToExpiring"] : (function () { throw new Twig_Error_Runtime('Variable "daysToExpiring" does not exist.', 21, $this->source); })())], "messages", null, (isset($context["daysToExpiring"]) || array_key_exists("daysToExpiring", $context) ? $context["daysToExpiring"] : (function () { throw new Twig_Error_Runtime('Variable "daysToExpiring" does not exist.', 21, $this->source); })()));
            // line 24
            echo "                </p>

                ";
            // line 26
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 26, $this->source); })()), "expiresAt", []), "diff", [0 => twig_date_converter($this->env)], "method"), "%a") < 5)) {
                // line 27
                echo "                    <a class=\"btn btn-default navbar-btn\" href=\"#\">
                        <span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>
                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Extend (for another 30 days)"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 32
            echo "            ";
        } else {
            // line 33
            echo "                <a class=\"btn btn-default navbar-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.edit", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 33, $this->source); })()), "token", [])]), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
            echo "
                </a>

                ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["publishForm"]) || array_key_exists("publishForm", $context) ? $context["publishForm"] : (function () { throw new Twig_Error_Runtime('Variable "publishForm" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["class" => "navbar-form navbar-left"]]);
            echo "
                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["publishForm"]) || array_key_exists("publishForm", $context) ? $context["publishForm"] : (function () { throw new Twig_Error_Runtime('Variable "publishForm" does not exist.', 39, $this->source); })()), 'widget');
            echo "

                    <button type=\"submit\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish"), "html", null, true);
            echo "
                    </button>
                ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 45, $this->source); })()), 'form_end');
            echo "
            ";
        }
        // line 47
        echo "
            <p class=\"navbar-text navbar-right\">
                ";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[Bookmark this <a href=\"%url%\">URL</a> to manage this job in the future]", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.preview", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 49, $this->source); })()), "token", [])])]);
        echo "
            </p>
        </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "job/control_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  126 => 47,  121 => 45,  116 => 43,  109 => 39,  105 => 38,  99 => 35,  93 => 33,  90 => 32,  84 => 29,  80 => 27,  78 => 26,  74 => 24,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  62 => 17,  57 => 15,  52 => 13,  45 => 9,  41 => 8,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <span class=\"navbar-brand\">{{ 'Control Panel:'|trans }}</span>
        </div>

        <div class=\"collapse navbar-collapse\">
            {{ form_start(deleteForm, {'attr': {'class': 'navbar-form navbar-left'}}) }}
                {{ form_widget(deleteForm) }}

                <button type=\"submit\" class=\"btn btn-default\" onclick=\"return confirm('Are you sure?')\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                    {{ 'Delete'|trans }}
                </button>
            {{ form_end(deleteForm) }}

            {% if job.activated %}
                <p class=\"navbar-text\">
                    {% set daysToExpiring = job.expiresAt.diff(date())|date('%a') %}

                    {% transchoice daysToExpiring with {'%days%': daysToExpiring} %}
                        ]-Inf,0] Expired|{1}Expires in 1 day|]1,Inf[ Expires in %days% days
                    {% endtranschoice %}
                </p>

                {% if job.expiresAt.diff(date())|date('%a') < 5 %}
                    <a class=\"btn btn-default navbar-btn\" href=\"#\">
                        <span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>
                        {{ 'Extend (for another 30 days)'|trans }}
                    </a>
                {% endif %}
            {% else %}
                <a class=\"btn btn-default navbar-btn\" href=\"{{ path('job.edit', { 'token': job.token }) }}\">
                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                    {{ 'Edit'|trans }}
                </a>

                {{ form_start(publishForm, {'attr': {'class': 'navbar-form navbar-left'}}) }}
                    {{ form_widget(publishForm) }}

                    <button type=\"submit\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                        {{ 'Publish'|trans }}
                    </button>
                {{ form_end(deleteForm) }}
            {% endif %}

            <p class=\"navbar-text navbar-right\">
                {{ '[Bookmark this <a href=\"%url%\">URL</a> to manage this job in the future]'|trans({'%url%': path('job.preview', {token: job.token})})|raw }}
            </p>
        </div>
    </div>
</nav>
", "job/control_panel.html.twig", "/application/templates/job/control_panel.html.twig");
    }
}
