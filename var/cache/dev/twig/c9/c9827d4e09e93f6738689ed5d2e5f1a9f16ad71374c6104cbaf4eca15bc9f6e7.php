<?php

/* job/_job_history.html.twig */
class __TwigTemplate_f874020bcc31fe7f1ded911ebfb9f2ac27ecef8a13a4053d58e36f1ceeb5ff5c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/_job_history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/_job_history.html.twig"));

        // line 1
        if ((isset($context["historyJobs"]) || array_key_exists("historyJobs", $context) ? $context["historyJobs"] : (function () { throw new Twig_Error_Runtime('Variable "historyJobs" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recent viewed jobs:"), "html", null, true);
            echo "
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["historyJobs"]) || array_key_exists("historyJobs", $context) ? $context["historyJobs"] : (function () { throw new Twig_Error_Runtime('Variable "historyJobs" does not exist.', 5, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["historyJob"]) {
                // line 6
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.show", ["id" => twig_get_attribute($this->env, $this->source, $context["historyJob"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["historyJob"], "position", []) . " - ") . twig_get_attribute($this->env, $this->source, $context["historyJob"], "company", [])), "html", null, true);
                echo "</a>";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) ? ("") : (", "));
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historyJob'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "job/_job_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  56 => 6,  39 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if historyJobs %}
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{ 'Recent viewed jobs:'|trans }}
            {% for historyJob in historyJobs %}
                <a href=\"{{ path('job.show', {id: historyJob.id}) }}\">{{ historyJob.position ~ ' - ' ~ historyJob.company}}</a>{{ loop.last ? '' : ', ' }}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "job/_job_history.html.twig", "/application/templates/job/_job_history.html.twig");
    }
}
