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

/* projects.view.php */
class __TwigTemplate_0eeb7ae46b4e11281a49e2405449cf5a2c92540a67140b394af4a14fd733d68e extends \Twig\Template
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
        $this->loadTemplate("partials/head.php", "projects.view.php", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.php", "projects.view.php", 3)->display($context);
        // line 4
        echo "
<main class=\"main-projects\">
\t<div class=\"container\">
\t\t<section class=\"wrap-project-list\">
\t\t\t<h1 class=\"title-h1\">Список проектов</h1>

\t\t\t<div class=\"project-list-subtitle\">
\t\t\t\t<h2 class=\"page-title-h2 icon-list\">Ваши проекты</h2>
\t\t\t\t<div class=\"w-button button-add-project\" data-wait=\"...\">+ Добавить новый проект</div>
\t\t\t</div>

\t\t\t<div class=\"project-row-header\">
\t\t\t\t<div class=\"wrap-project-title\">
\t\t\t\t\t<div class=\"project-big-title\">Проект</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-project-source\">
\t\t\t\t\t<div class=\"project-big-title\">Источник</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-project-dest\">
\t\t\t\t\t<div class=\"project-big-title\">Цель</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wrap-project-type\">
\t\t\t\t\t<div class=\"project-big-title\">Тип</div>
\t\t\t\t</div>
\t\t\t\t<date class=\"wrap-project-date\">
\t\t\t\t\t<div class=\"project-big-title\">Дата</div>
\t\t\t\t</date>
\t\t\t</div>
\t\t\t<div class=\"project-row\">
\t\t\t\t<div class=\"wrap-project-title icon-project\">
\t\t\t\t\t<div class=\"project-small-title\">Проект:</div>
\t\t\t\t\t<a class=\"project-title\" href=\"#\">iDD – Промышленный инжиниринг водных систем</a></div>
\t\t\t\t<div class=\"wrap-project-source\">
\t\t\t\t\t<div class=\"project-small-title\">Источник:</div>
\t\t\t\t\t<a class=\"project-source\" href=\"#\">https://idd-february.webflow.io/</a></div>
\t\t\t\t<div class=\"wrap-project-dest\">
\t\t\t\t\t<div class=\"project-small-title\">Цель:</div>
\t\t\t\t\t<a class=\"project-dest\" href=\"#\">http://llc-idd.ru/</a></div>
\t\t\t\t<div class=\"wrap-project-type\">
\t\t\t\t\t<div class=\"project-small-title\">Тип:</div>
\t\t\t\t\t<div class=\"project-type\">Quiz</div>
\t\t\t\t</div>
\t\t\t\t<date class=\"wrap-project-date\">
\t\t\t\t\t<div class=\"project-small-title\">Дата:</div>
\t\t\t\t\t<div class=\"project-date\">16.10.2020</div>
\t\t\t\t</date>
\t\t\t</div>
\t\t\t<div class=\"project-row\">
\t\t\t\t<div class=\"wrap-project-title icon-project\">
\t\t\t\t\t<div class=\"project-small-title\">Проект</div>
\t\t\t\t\t<a class=\"project-title\" href=\"#\">iDD – Промышленный инжиниринг водных систем</a></div>
\t\t\t\t<div class=\"wrap-project-source\">
\t\t\t\t\t<div class=\"project-small-title\">Источник</div>
\t\t\t\t\t<a class=\"project-source\" href=\"#\">https://idd-february.webflow.io/</a></div>
\t\t\t\t<div class=\"wrap-project-dest\">
\t\t\t\t\t<div class=\"project-small-title\">Цель</div>
\t\t\t\t\t<a class=\"project-dest\" href=\"#\">http://llc-idd.ru/</a></div>
\t\t\t\t<div class=\"wrap-project-type\">
\t\t\t\t\t<div class=\"project-small-title\">Тип</div>
\t\t\t\t\t<div class=\"project-type\">Quiz</div>
\t\t\t\t</div>
\t\t\t\t<date class=\"wrap-project-date\">
\t\t\t\t\t<div class=\"project-small-title\">Дата</div>
\t\t\t\t\t<div class=\"project-date\">16.10.2020</div>
\t\t\t\t</date>
\t\t\t</div>
\t\t\t<div class=\"project-row\">
\t\t\t\t<div class=\"wrap-project-title icon-project\">
\t\t\t\t\t<div class=\"project-small-title\">Проект</div>
\t\t\t\t\t<a class=\"project-title\" href=\"#\">iDD – Промышленный инжиниринг водных систем</a></div>
\t\t\t\t<div class=\"wrap-project-source\">
\t\t\t\t\t<div class=\"project-small-title\">Источник</div>
\t\t\t\t\t<a class=\"project-source\" href=\"#\">https://idd-february.webflow.io/</a></div>
\t\t\t\t<div class=\"wrap-project-dest\">
\t\t\t\t\t<div class=\"project-small-title\">Цель</div>
\t\t\t\t\t<a class=\"project-dest\" href=\"#\">http://llc-idd.ru/</a></div>
\t\t\t\t<div class=\"wrap-project-type\">
\t\t\t\t\t<div class=\"project-small-title\">Тип</div>
\t\t\t\t\t<div class=\"project-type\">Quiz</div>
\t\t\t\t</div>
\t\t\t\t<date class=\"wrap-project-date\">
\t\t\t\t\t<div class=\"project-small-title\">Дата</div>
\t\t\t\t\t<div class=\"project-date\">16.10.2020</div>
\t\t\t\t</date>
\t\t\t</div>
\t\t</section>
\t</div>

</main>

";
        // line 94
        $this->loadTemplate("partials/footer.php", "projects.view.php", 94)->display($context);
    }

    public function getTemplateName()
    {
        return "projects.view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 94,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "projects.view.php", "/home/v/vic4884g/parser-board.ru/public_html/views/projects.view.php");
    }
}
