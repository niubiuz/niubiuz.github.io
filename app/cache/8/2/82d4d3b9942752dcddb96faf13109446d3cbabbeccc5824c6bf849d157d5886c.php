<?php

/* index.html */
class __TwigTemplate_82d4d3b9942752dcddb96faf13109446d3cbabbeccc5824c6bf849d157d5886c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block/base.html", "index.html", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["tag"]) ? $context["tag"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
            echo ",";
        }
        if ((isset($context["category"]) ? $context["category"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo ",";
        }
        $this->displayParentBlock("keywords", $context, $blocks);
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("block/header.html", "index.html", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("block/homeContent.html", "index.html", 10)->display($context);
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("block/footer.html", "index.html", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  61 => 14,  56 => 10,  53 => 9,  48 => 6,  45 => 5,  31 => 3,  11 => 1,);
    }
}
