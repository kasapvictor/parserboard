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

/* partials/navigation.html */
class __TwigTemplate_7c258d6361b39d1a5dc8f05c40f7b4e24173d871bcce7a3d0b82a62d10b957b9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav role=\"navigation\" class=\"nav-menu w-nav-menu\">
    <a href=\"/password\"
       class=\"nav-link w-nav-link\">Забыл пароль</a>
    <a href=\"/projects\"
       class=\"nav-link w-nav-link\">Проекты</a>
\t<a href=\"/project\"
\t   class=\"nav-link w-nav-link\">Проект</a>
\t<a href=\"/registration\"
\t   class=\"nav-link w-nav-link\">Регистрация</a>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navigation.html", "/home/v/vic4884g/parser-board.ru/public_html/templates/partials/navigation.html");
    }
}
