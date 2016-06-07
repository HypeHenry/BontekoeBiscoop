<?php

/* BontekoeCinemaBundle:Reservation:index.html.twig */
class __TwigTemplate_c5525c87904672dcc4681518fa4e90d31338063b4b26dfb1d3414774dd71056e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Reservation:index.html.twig", 1);
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
        $__internal_83254d8f6cd3a2561a32a5ec741da3a97608f8c8071ca6dd1f0386c689c09019 = $this->env->getExtension("native_profiler");
        $__internal_83254d8f6cd3a2561a32a5ec741da3a97608f8c8071ca6dd1f0386c689c09019->enter($__internal_83254d8f6cd3a2561a32a5ec741da3a97608f8c8071ca6dd1f0386c689c09019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83254d8f6cd3a2561a32a5ec741da3a97608f8c8071ca6dd1f0386c689c09019->leave($__internal_83254d8f6cd3a2561a32a5ec741da3a97608f8c8071ca6dd1f0386c689c09019_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_628de436f7f35b5dac1ad6e8ea4a13f47e4321ecc93e17448b777b7926fb68d1 = $this->env->getExtension("native_profiler");
        $__internal_628de436f7f35b5dac1ad6e8ea4a13f47e4321ecc93e17448b777b7926fb68d1->enter($__internal_628de436f7f35b5dac1ad6e8ea4a13f47e4321ecc93e17448b777b7926fb68d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Reservation list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Row</th>
                <th>Rowseat</th>
                <th>Paid</th>
                <th>Type</th>
                <th>Showschemaid</th>
                <th>Userid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "row", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rowSeat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "showschemaId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "userId", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("reservation_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_628de436f7f35b5dac1ad6e8ea4a13f47e4321ecc93e17448b777b7926fb68d1->leave($__internal_628de436f7f35b5dac1ad6e8ea4a13f47e4321ecc93e17448b777b7926fb68d1_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
