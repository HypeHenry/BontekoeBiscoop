<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_9ad34cf23f8a84c32281bdf21e6bbd8b159fa2c25738c7f6f3883d89648c9447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8be80c5af63df14a5b39249252da6b8e6be5cb2ac3d0ac3487d0c29cf620d1 = $this->env->getExtension("native_profiler");
        $__internal_7d8be80c5af63df14a5b39249252da6b8e6be5cb2ac3d0ac3487d0c29cf620d1->enter($__internal_7d8be80c5af63df14a5b39249252da6b8e6be5cb2ac3d0ac3487d0c29cf620d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_7d8be80c5af63df14a5b39249252da6b8e6be5cb2ac3d0ac3487d0c29cf620d1->leave($__internal_7d8be80c5af63df14a5b39249252da6b8e6be5cb2ac3d0ac3487d0c29cf620d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}