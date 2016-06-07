<?php

/* BontekoeCinemaBundle:Movie:new.html.twig */
class __TwigTemplate_02fbfbd0597b10ff65c1bc84b1a10e8933114584fc5a69dcd4b6cfe04f91a802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Movie:new.html.twig", 1);
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
        $__internal_5824867c08a66a28d039c6b7342cfdfdc0d4157841635d785ccd97d560352de6 = $this->env->getExtension("native_profiler");
        $__internal_5824867c08a66a28d039c6b7342cfdfdc0d4157841635d785ccd97d560352de6->enter($__internal_5824867c08a66a28d039c6b7342cfdfdc0d4157841635d785ccd97d560352de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Movie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5824867c08a66a28d039c6b7342cfdfdc0d4157841635d785ccd97d560352de6->leave($__internal_5824867c08a66a28d039c6b7342cfdfdc0d4157841635d785ccd97d560352de6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6359b3a2e41ebec5a7d51bcdd5ba23fabed3405fbb2a5d28a9035970dc0fdb2 = $this->env->getExtension("native_profiler");
        $__internal_e6359b3a2e41ebec5a7d51bcdd5ba23fabed3405fbb2a5d28a9035970dc0fdb2->enter($__internal_e6359b3a2e41ebec5a7d51bcdd5ba23fabed3405fbb2a5d28a9035970dc0fdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Movie creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("movie");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_e6359b3a2e41ebec5a7d51bcdd5ba23fabed3405fbb2a5d28a9035970dc0fdb2->leave($__internal_e6359b3a2e41ebec5a7d51bcdd5ba23fabed3405fbb2a5d28a9035970dc0fdb2_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Movie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
