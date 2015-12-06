<?php

/* block/header.html */
class __TwigTemplate_9be2c539a24fe3f744a88bf1e0c37316c06a3d33794286db34f84c2a54692027 extends Twig_Template
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
        // line 1
        echo "<header id=\"masthead\" class=\"main-header\" role=\"banner\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"site-branding col-md-4\">
\t\t\t<h1 class=\"site-title\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "url", array()), "html", null, true);
        echo "\" rel=\"home\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "title", array()), "html", null, true);
        echo "</a></h1>
\t\t\t\t<span class=\"site-description\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "subtitle", array()), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<!-- .site-branding -->
\t</div>
</div>
</header>";
    }

    public function getTemplateName()
    {
        return "block/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 5,  19 => 1,);
    }
}
