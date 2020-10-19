<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.view.php */
class __TwigTemplate_81759f22df2465be7fdeee5f3bf84dde38b2fdd91046aca7a3bd8a22c0e9e496 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("partials/head.php", "base.view.php", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.php", "base.view.php", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
<!--";
        // line 9
        $this->loadTemplate("partials/header.php", "base.view.php", 9)->display($context);
        echo "-->

<!--";
        // line 11
        $this->loadTemplate("partials/footer.php", "base.view.php", 11)->display($context);
        echo "-->

";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "\t";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  58 => 5,  51 => 11,  46 => 9,  43 => 8,  41 => 5,  38 => 4,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.view.php", "/home/v/vic4884g/parser-board.ru/public_html/views/base.view.php");
    }
}
