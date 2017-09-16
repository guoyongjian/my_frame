<?php

/* layout.html */
class __TwigTemplate_2de35d39e53f4c87b0d56823f9fba430e208f9738fd7727abacfd3b2ff2d0a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<body>
\t\t<header>header</header>
\t\t<content>
\t\t\t";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "\t\t</content>
\t\t<footer>footer</footer>

\t</body>
</html>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  28 => 7,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "C:\\wamp64\\www\\guo\\app\\Views\\layout.html");
    }
}
