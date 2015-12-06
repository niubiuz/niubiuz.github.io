<?php

/* block/footer.html */
class __TwigTemplate_5528bee70cf42f7192a46c05dea739c04f7d92c0be57d0af72cd7c6bb872dbcb extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"copyright quest-row\" role=\"contentinfo\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 copyright-text\">
\t\t\t\t<a href=\"https://github.com/jockchou/gitblog\">Proudly powered by Gitblog</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 social-icon-container clearfix\">
\t\t\t\t<ul></ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- end row -->
\t</div>
\t<!-- end container -->
</footer>";
    }

    public function getTemplateName()
    {
        return "block/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
