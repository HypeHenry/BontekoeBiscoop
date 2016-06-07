<?php

/* BontekoeCinemaBundle:Reservation:new.html.twig */
class __TwigTemplate_238975edba925c924f983a20f59b11379f81a2a15c366b0c439d8723f8c7534d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Reservation:new.html.twig", 1);
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
        $__internal_cb1ee8c239e04dbb79ff39a65c06e5ec89eba42427e60eef21d897c39eb9a6a0 = $this->env->getExtension("native_profiler");
        $__internal_cb1ee8c239e04dbb79ff39a65c06e5ec89eba42427e60eef21d897c39eb9a6a0->enter($__internal_cb1ee8c239e04dbb79ff39a65c06e5ec89eba42427e60eef21d897c39eb9a6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1ee8c239e04dbb79ff39a65c06e5ec89eba42427e60eef21d897c39eb9a6a0->leave($__internal_cb1ee8c239e04dbb79ff39a65c06e5ec89eba42427e60eef21d897c39eb9a6a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b903a2cd913ae1d1e9f48934de2db06119dcb9a75343cb81a991ab5d9215838a = $this->env->getExtension("native_profiler");
        $__internal_b903a2cd913ae1d1e9f48934de2db06119dcb9a75343cb81a991ab5d9215838a->enter($__internal_b903a2cd913ae1d1e9f48934de2db06119dcb9a75343cb81a991ab5d9215838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Reservation for <br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getMovie", array(), "method"), "getTitle", array(), "method"), "html", null, true);
        echo " on ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getDatetime", array(), "method"), "format", array(0 => "j F Y H:i"), "method"), "html", null, true);
        echo "</h1>

    <div id=\"Seats\" style=\"display: none;\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getCinema", array(), "method"), "getRows", array(), "method")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getCinema", array(), "method"), "getRowSeats", array(), "method")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowSeat"]) {
                // line 9
                echo "                <img src=\"http://i67.tinypic.com/16gjqiu.png\" style=\"width: 20px; height: 20px;\" data-row=";
                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                echo " data-row-seat=";
                echo twig_escape_filter($this->env, $context["rowSeat"], "html", null, true);
                echo " />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowSeat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            <br />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    </div>

    <div id=\"Reservations\">

    </div>

    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$.get('get-ordered-seats?showschema_id=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getId", array(), "method"), "html", null, true);
        echo "', function(results) {
                for (var i in results) {
                    var row = results[i].row;
                    var rowSeat = results[i].rowSeat;
                    var mySeat = results[i].mySeat;

                    if (mySeat) {
                        \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").attr(\"src\", \"http://i65.tinypic.com/2u94qol.png\");
                        \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").addClass(\"Selected\");

                        \$(\"#Reservations\").append('<div>Row: '+ row +', RowSeat: '+ rowSeat +'<br /><select data-row='+ row +' data-row-seat='+ rowSeat +'><option value=\"Adult\">Adult 9.95</option><option value=\"Child\">Child 5.95</option><option value=\"Student\">Student 7.95</option></select><br /><br />');
                    } else {
                        \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").attr(\"src\", \" http://i67.tinypic.com/etzdwi.png\");
                        \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").addClass(\"Reserved\");
                    }
                }

                \$(\"#Seats\").show();
            });

            \$(\"#Seats img\").on(\"click\", function() {
                var row = \$(this).data(\"row\");
                var rowSeat = \$(this).data(\"rowSeat\");

                if (\$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").hasClass(\"Reserved\")) {
                    alert(\"This seat has been reserved\");

                    return;
                } else if (\$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").hasClass(\"Selected\")) {
                    \$.ajax({
                        url: 'seat?showschema_id=";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getId", array(), "method"), "html", null, true);
        echo "',
                        method: 'DELETE',
                        data: {
                            'row': row,
                            'rowSeat': rowSeat,
                        },
                        success: function() {
                            \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").attr(\"src\", \"../images/seat_free.png\");
                            \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").removeClass(\"Selected\");

                            \$(\"#Reservations select[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").parent().remove();
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'seat?showschema_id=";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getId", array(), "method"), "html", null, true);
        echo "',
                        method: 'PUT',
                        data: {
                            'row': row,
                            'rowSeat': rowSeat
                        },
                        success: function() {
                            \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").attr(\"src\", \"http://i65.tinypic.com/2u94qol.png\");
                            \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").addClass(\"Selected\");

                            \$(\"#Reservations\").append('<div>Row: '+ row +', RowSeat: '+ rowSeat +'<br /><select data-row='+ row +' data-row-seat='+ rowSeat +'><option value=\"Adult\">Adult 9.95</option><option value=\"Child\">Child 5.95</option><option value=\"Student\">Student 7.95</option></select><br /><br />');
                        },
                        error: function() {
                            alert(\"Helaas, de stoel is niet meer beschikbaar\");

                            \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").attr(\"src\", \" http://i67.tinypic.com/etzdwi.png\");
                            \$(\"#Seats img[data-row='\"+ row +\"'][data-row-seat='\"+ rowSeat +\"']\").addClass(\"Reserved\");
                        }
                    });
                }
            });

            \$(\"body\").on(\"change\", \"#Reservations select\", function() {
                var row = \$(this).data(\"row\");
                var rowSeat = \$(this).data(\"rowSeat\");
                var type = \$(this).val();

                \$.ajax({
                    url: 'seat?showschema_id=";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getId", array(), "method"), "html", null, true);
        echo "',
                    method: 'POST',
                    data: {
                        'row': row,
                        'rowSeat': rowSeat,
                        'type': type
                    },
                    success: function() {

                    },
                    error: function() {

                    }
                });
            });

            \$(\"#Cancel\").on(\"click\", function() {
                \$.ajax({
                    url: 'cancel?show_id=";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showschemaEntity"]) ? $context["showschemaEntity"] : $this->getContext($context, "showschemaEntity")), "getId", array(), "method"), "html", null, true);
        echo "',
                    method: 'DELETE',
                    success: function() {
                        document.location.href = '";
        // line 118
        echo $this->env->getExtension('routing')->getPath("movie");
        echo "';
                    }
                });
            });
        });
    </script>
    <br />




    <a href=\"payment\"><button id=\"Submit\">Payment</button></a>

    <button id=\"Cancel\">Cancel</button>
";
        
        $__internal_b903a2cd913ae1d1e9f48934de2db06119dcb9a75343cb81a991ab5d9215838a->leave($__internal_b903a2cd913ae1d1e9f48934de2db06119dcb9a75343cb81a991ab5d9215838a_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Reservation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 118,  192 => 115,  171 => 97,  140 => 69,  122 => 54,  89 => 24,  77 => 14,  69 => 11,  58 => 9,  53 => 8,  49 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
