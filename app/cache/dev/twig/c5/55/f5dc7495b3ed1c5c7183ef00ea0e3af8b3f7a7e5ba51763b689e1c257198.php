<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c555f5dc7495b3ed1c5c7183ef00ea0e3af8b3f7a7e5ba51763b689e1c257198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a191ab198a7a7e3a70d9165e84064929f29a3722f3ace3e7d927f4d33bfe90e6 = $this->env->getExtension("native_profiler");
        $__internal_a191ab198a7a7e3a70d9165e84064929f29a3722f3ace3e7d927f4d33bfe90e6->enter($__internal_a191ab198a7a7e3a70d9165e84064929f29a3722f3ace3e7d927f4d33bfe90e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a191ab198a7a7e3a70d9165e84064929f29a3722f3ace3e7d927f4d33bfe90e6->leave($__internal_a191ab198a7a7e3a70d9165e84064929f29a3722f3ace3e7d927f4d33bfe90e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c379ff9a722443db3be3b6e685645f8bc21302dc3946b26c086ea864ac45d03 = $this->env->getExtension("native_profiler");
        $__internal_4c379ff9a722443db3be3b6e685645f8bc21302dc3946b26c086ea864ac45d03->enter($__internal_4c379ff9a722443db3be3b6e685645f8bc21302dc3946b26c086ea864ac45d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c379ff9a722443db3be3b6e685645f8bc21302dc3946b26c086ea864ac45d03->leave($__internal_4c379ff9a722443db3be3b6e685645f8bc21302dc3946b26c086ea864ac45d03_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd499a5c6857d75c830888f17a303702c3f679766bfe96616cad0733c2bcd4c9 = $this->env->getExtension("native_profiler");
        $__internal_fd499a5c6857d75c830888f17a303702c3f679766bfe96616cad0733c2bcd4c9->enter($__internal_fd499a5c6857d75c830888f17a303702c3f679766bfe96616cad0733c2bcd4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd499a5c6857d75c830888f17a303702c3f679766bfe96616cad0733c2bcd4c9->leave($__internal_fd499a5c6857d75c830888f17a303702c3f679766bfe96616cad0733c2bcd4c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f9ef397b7d4e7359fcbaf9b3a3c4269b208798dcee2a6404286d23776a4995 = $this->env->getExtension("native_profiler");
        $__internal_69f9ef397b7d4e7359fcbaf9b3a3c4269b208798dcee2a6404286d23776a4995->enter($__internal_69f9ef397b7d4e7359fcbaf9b3a3c4269b208798dcee2a6404286d23776a4995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_69f9ef397b7d4e7359fcbaf9b3a3c4269b208798dcee2a6404286d23776a4995->leave($__internal_69f9ef397b7d4e7359fcbaf9b3a3c4269b208798dcee2a6404286d23776a4995_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
