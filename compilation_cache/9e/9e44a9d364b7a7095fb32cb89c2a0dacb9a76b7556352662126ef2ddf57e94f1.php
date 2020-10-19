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

/* partials/footer.php */
class __TwigTemplate_c3aa95ef3319297dcc674abd3a3a9e74b617171b920f28621933d9c7a75ea4c4 extends \Twig\Template
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
        echo "        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"copyright\">Какой-то текст в футере 2020 &copy;</div>
            </div>
        </footer>
        </div>
        <script src=\"views/assets/scripts/main.js\" type=\"text/javascript\"></script>
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "partials/footer.php";
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
        return new Source("", "partials/footer.php", "/home/v/vic4884g/parser-board.ru/public_html/views/partials/footer.php");
    }
}
