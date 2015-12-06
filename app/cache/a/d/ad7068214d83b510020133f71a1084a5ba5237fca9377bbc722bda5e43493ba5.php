<?php

/* blog/header.html */
class __TwigTemplate_ad7068214d83b510020133f71a1084a5ba5237fca9377bbc722bda5e43493ba5 extends Twig_Template
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
        echo "<header class=\"entry-header\">
\t<h1 class=\"post-title\"><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "siteURL", array()), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
        echo "</a></h1>
\t<div class=\"entry-meta\">
\t\t<time class=\"post-date\"><i class=\"fa fa-clock-o\"></i>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "date", array()), "html", null, true);
        echo "</time>
\t\t";
        // line 5
        if ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "author", array())) {
            // line 6
            echo "\t\t<span class=\"seperator\">/</span>
\t    <span><i class=\"fa fa-user\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "author", array()), "html", null, true);
            echo "</span>
\t    ";
        }
        // line 9
        echo "\t</div><!-- .entry-meta -->
</header><!-- .entry-header -->";
    }

    public function getTemplateName()
    {
        return "blog/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 7,  35 => 6,  33 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
