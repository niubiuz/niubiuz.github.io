<?php

/* blog/blog.html */
class __TwigTemplate_46df69df18cee000e675de94f785867444e203b256db415626ead8cb8321a29d extends Twig_Template
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
        echo "<article class=\"post hentry\">
\t";
        // line 2
        $this->loadTemplate("blog/header.html", "blog/blog.html", 2)->display($context);
        // line 3
        echo "\t";
        $this->loadTemplate("blog/content.html", "blog/blog.html", 3)->display($context);
        // line 4
        echo "\t";
        $this->loadTemplate("blog/footer.html", "blog/blog.html", 4)->display($context);
        // line 5
        echo "</article><!-- #post-## -->";
    }

    public function getTemplateName()
    {
        return "blog/blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
