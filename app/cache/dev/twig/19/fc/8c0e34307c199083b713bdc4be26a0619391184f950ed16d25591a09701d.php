<?php

/* BontekoeCinemaBundle:Showschema:index.html.twig */
class __TwigTemplate_19fc8c0e34307c199083b713bdc4be26a0619391184f950ed16d25591a09701d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Showschema:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9aa1b6bd57db867aad29e7e34cc0d43f291174d4c88aedda30cf3af57fd4127 = $this->env->getExtension("native_profiler");
        $__internal_d9aa1b6bd57db867aad29e7e34cc0d43f291174d4c88aedda30cf3af57fd4127->enter($__internal_d9aa1b6bd57db867aad29e7e34cc0d43f291174d4c88aedda30cf3af57fd4127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Showschema:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9aa1b6bd57db867aad29e7e34cc0d43f291174d4c88aedda30cf3af57fd4127->leave($__internal_d9aa1b6bd57db867aad29e7e34cc0d43f291174d4c88aedda30cf3af57fd4127_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1b027865ddec27025f78877c40aaf5bf9c4567ad7e76d9c592f50501154a2a3 = $this->env->getExtension("native_profiler");
        $__internal_d1b027865ddec27025f78877c40aaf5bf9c4567ad7e76d9c592f50501154a2a3->enter($__internal_d1b027865ddec27025f78877c40aaf5bf9c4567ad7e76d9c592f50501154a2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Showschema list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cinemaid</th>
                <th>Movieid</th>
                <th>Datetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showschema_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cinemaId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "movieId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showschema_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showschema_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("showschema_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_d1b027865ddec27025f78877c40aaf5bf9c4567ad7e76d9c592f50501154a2a3->leave($__internal_d1b027865ddec27025f78877c40aaf5bf9c4567ad7e76d9c592f50501154a2a3_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Showschema:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
