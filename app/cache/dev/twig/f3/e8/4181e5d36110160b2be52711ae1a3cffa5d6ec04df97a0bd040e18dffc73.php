<?php

/* BontekoeCinemaBundle:Cinema:index.html.twig */
class __TwigTemplate_f3e84181e5d36110160b2be52711ae1a3cffa5d6ec04df97a0bd040e18dffc73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Cinema:index.html.twig", 1);
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
        $__internal_fe4fbeb5a1a090ad5589aef86bace0cb394b259154ed6e33faae4e978ed67396 = $this->env->getExtension("native_profiler");
        $__internal_fe4fbeb5a1a090ad5589aef86bace0cb394b259154ed6e33faae4e978ed67396->enter($__internal_fe4fbeb5a1a090ad5589aef86bace0cb394b259154ed6e33faae4e978ed67396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Cinema:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe4fbeb5a1a090ad5589aef86bace0cb394b259154ed6e33faae4e978ed67396->leave($__internal_fe4fbeb5a1a090ad5589aef86bace0cb394b259154ed6e33faae4e978ed67396_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddad39a183cc2618c1d8e9d9409989c7b6b2cb32b78cabc2537f6df4074e86e7 = $this->env->getExtension("native_profiler");
        $__internal_ddad39a183cc2618c1d8e9d9409989c7b6b2cb32b78cabc2537f6df4074e86e7->enter($__internal_ddad39a183cc2618c1d8e9d9409989c7b6b2cb32b78cabc2537f6df4074e86e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Cinema list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Rows</th>
                <th>Rowsseats</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rows", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rowsSeats", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("cinema_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_ddad39a183cc2618c1d8e9d9409989c7b6b2cb32b78cabc2537f6df4074e86e7->leave($__internal_ddad39a183cc2618c1d8e9d9409989c7b6b2cb32b78cabc2537f6df4074e86e7_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Cinema:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
