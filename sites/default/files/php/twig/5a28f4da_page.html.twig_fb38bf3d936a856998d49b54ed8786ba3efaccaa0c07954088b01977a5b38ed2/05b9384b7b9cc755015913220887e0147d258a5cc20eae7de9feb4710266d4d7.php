<?php

/* themes/monoset/templates/page.html.twig */
class __TwigTemplate_6bd5f29dcb265d88f56459cc2547482bd2a6cd443cb9e634fb9fd32e6a426224 extends Twig_Template
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
        $tags = array("if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "
 <header class=\"header-main\">
  <div class=\"menu-btn open\" aria-hidden=\"true\">&#9776; Menu</div>
  <div class=\"contain\">
    <a  class =\"logo\" href=\"";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo " » ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
        echo "\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\" width=\"20px\" height=\"26px\" viewBox=\"0 0 20 26\" version=\"1.1\">
        <title>Logo</title>
        <description>Logo</description>
        <defs/>
        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\" class=\"logo-svg\">
          <g sketch:type=\"MSLayerGroup\" fill=\"\">
            <path d=\"M10.030309 0.4 C11.278764 2.5 12.8 4.1 14.3 5.8 C15.335503 6.9 16.4 8.1 17.4 9.4 L17.4504274 9.4 L17.457002 9.5 C18.9264957 11.3 19.7 13.7 19.6 16.1 C19.4360947 18.6 18.4 20.9 16.8 22.6 C14.9722551 24.5 12.6 25.5 10 25.5 C7.48330046 25.5 5.1 24.5 3.3 22.6 C1.61216305 20.9 0.6 18.6 0.5 16.1 C0.389020381 13.7 1.1 11.3 2.6 9.5 L2.60966469 9.4 L2.61617357 9.4 C3.66291913 8.1 4.7 6.9 5.8 5.8 C7.29664694 4.1 8.8 2.5 10 0.4 L10.030309 0.4 Z\" sketch:type=\"MSShapeGroup\"/>
          </g>
        </g>
      </svg>
    </a>
    ";
        // line 23
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav", array())) {
            // line 24
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav", array()), "html", null, true));
            echo "
    ";
        }
        // line 26
        echo "  </div>
</header>

<div class=\"offcanvas pushy pushy-left\">
  <div class=\"menu-btn close\" aria-hidden=\"true\">&#10005; Menu</div>
  ";
        // line 31
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav", array())) {
            // line 32
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nav", array()), "html", null, true));
            echo "
  ";
        }
        // line 34
        echo "</div>

<!-- Site Overlay -->
<div class=\"site-overlay\"></div>

<div id=\"container\" class=\"container-main\">
  <!-- Front Page -->

  ";
        // line 42
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 43
            echo "    <div class=\"front\">

      <section class=\"cover\">
        <div class=\"contain\">
          ";
            // line 47
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_one", array())) {
                // line 48
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_one", array()), "html", null, true));
                echo "
          ";
            }
            // line 50
            echo "        </div>
      </section>

      <section id=\"features\" class=\"front-section features\">
        <div class=\"contain\">
          ";
            // line 55
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_two", array())) {
                // line 56
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_two", array()), "html", null, true));
                echo "
          ";
            }
            // line 58
            echo "        </div>
      </section>

      <section class=\"front-section icons\">
        <div class=\"contain\">
          ";
            // line 63
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_three", array())) {
                // line 64
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_three", array()), "html", null, true));
                echo "
          ";
            }
            // line 66
            echo "        </div>
      </section>

      <section class=\"front-section posts\">
        ";
            // line 70
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_four", array())) {
                // line 71
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_four", array()), "html", null, true));
                echo "
        ";
            }
            // line 73
            echo "      </section>

      <section class=\"front-section news\">
        <div class=\"contain\">
          ";
            // line 77
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_five", array())) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_five", array()), "html", null, true));
                echo "
          ";
            }
            // line 80
            echo "        </div>
      </section>

      <section class=\"front-section featured\">
        <div class=\"featured-box\">
          ";
            // line 85
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_six", array())) {
                // line 86
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_six", array()), "html", null, true));
                echo "
          ";
            }
            // line 88
            echo "        </div>
        <div class=\"featured-box\">
          ";
            // line 90
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_seven", array())) {
                // line 91
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_seven", array()), "html", null, true));
                echo "
          ";
            }
            // line 93
            echo "        </div>
      </section>

      <section class=\"front-section source\">
        <div class=\"contain\">
          ";
            // line 98
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_eight", array())) {
                // line 99
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "front_eight", array()), "html", null, true));
                echo "
          ";
            }
            // line 101
            echo "        </div>
      </section>

    </div>

    ";
        } else {
            // line 107
            echo "
    <!-- Main Content -->
    <div class=\"content contain\">
      <div class=\"page-content\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        ";
            // line 113
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
                // line 114
                echo "          <div class=\"help\">
            ";
                // line 115
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 119
                echo "          <ul class=\"action-links\">
            ";
                // line 120
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "
          </ul>
        ";
            }
            // line 123
            echo "
        ";
            // line 124
            if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
                // line 125
                echo "          <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null), "html", null, true));
                echo "</div>
        ";
            }
            // line 127
            echo "
        ";
            // line 129
            echo "        ";
            // line 130
            echo "        ";
            // line 131
            echo "
        ";
            // line 132
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
        ";
            // line 133
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 134
                echo "          <h1 class=\"page-title\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h1>
        ";
            }
            // line 136
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
        ";
            // line 137
            if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
                // line 138
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null), "html", null, true));
                echo "
        ";
            }
            // line 140
            echo "
        ";
            // line 141
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
                // line 142
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
                echo "
        ";
            }
            // line 144
            echo "
        ";
            // line 145
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "

        ";
            // line 147
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
                // line 148
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
                echo "
        ";
            }
            // line 150
            echo "
      ";
        }
        // line 152
        echo "
    </div>
  </div>
</div>
<footer class=\"footer-main\">
  <div class=\"contain\">
    ";
        // line 158
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 159
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 161
        echo "    <a class=\"twitter\" href=\"https://twitter.com/zetagraph\"><img class=\"twitter-icon inject-svg\" data-src=\"/themes/monoset/icons/twitter.svg\" alt=\"twitter\"></a>
    <a class=\"top-link\" href=\"#top\"><img class=\"arrow-up inject-svg\" data-src=\"/themes/monoset/icons/chevron-up.svg\" alt=\"chevron-up\"></a>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/monoset/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 161,  346 => 159,  344 => 158,  336 => 152,  332 => 150,  326 => 148,  324 => 147,  319 => 145,  316 => 144,  310 => 142,  308 => 141,  305 => 140,  299 => 138,  297 => 137,  292 => 136,  286 => 134,  284 => 133,  280 => 132,  277 => 131,  275 => 130,  273 => 129,  270 => 127,  264 => 125,  262 => 124,  259 => 123,  253 => 120,  250 => 119,  247 => 118,  241 => 115,  238 => 114,  236 => 113,  232 => 112,  225 => 107,  217 => 101,  211 => 99,  209 => 98,  202 => 93,  196 => 91,  194 => 90,  190 => 88,  184 => 86,  182 => 85,  175 => 80,  169 => 78,  167 => 77,  161 => 73,  155 => 71,  153 => 70,  147 => 66,  141 => 64,  139 => 63,  132 => 58,  126 => 56,  124 => 55,  117 => 50,  111 => 48,  109 => 47,  103 => 43,  101 => 42,  91 => 34,  85 => 32,  83 => 31,  76 => 26,  70 => 24,  68 => 23,  49 => 11,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single Drupal page.*/
/*  *//* */
/*  #}*/
/* */
/*  <header class="header-main">*/
/*   <div class="menu-btn open" aria-hidden="true">&#9776; Menu</div>*/
/*   <div class="contain">*/
/*     <a  class ="logo" href="{{ front_page }}" title="{{ site_name }} » {{ site_slogan }}">*/
/*       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="20px" height="26px" viewBox="0 0 20 26" version="1.1">*/
/*         <title>Logo</title>*/
/*         <description>Logo</description>*/
/*         <defs/>*/
/*         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage" class="logo-svg">*/
/*           <g sketch:type="MSLayerGroup" fill="">*/
/*             <path d="M10.030309 0.4 C11.278764 2.5 12.8 4.1 14.3 5.8 C15.335503 6.9 16.4 8.1 17.4 9.4 L17.4504274 9.4 L17.457002 9.5 C18.9264957 11.3 19.7 13.7 19.6 16.1 C19.4360947 18.6 18.4 20.9 16.8 22.6 C14.9722551 24.5 12.6 25.5 10 25.5 C7.48330046 25.5 5.1 24.5 3.3 22.6 C1.61216305 20.9 0.6 18.6 0.5 16.1 C0.389020381 13.7 1.1 11.3 2.6 9.5 L2.60966469 9.4 L2.61617357 9.4 C3.66291913 8.1 4.7 6.9 5.8 5.8 C7.29664694 4.1 8.8 2.5 10 0.4 L10.030309 0.4 Z" sketch:type="MSShapeGroup"/>*/
/*           </g>*/
/*         </g>*/
/*       </svg>*/
/*     </a>*/
/*     {% if page.nav %}*/
/*       {{ page.nav }}*/
/*     {% endif %}*/
/*   </div>*/
/* </header>*/
/* */
/* <div class="offcanvas pushy pushy-left">*/
/*   <div class="menu-btn close" aria-hidden="true">&#10005; Menu</div>*/
/*   {% if page.nav %}*/
/*     {{ page.nav }}*/
/*   {% endif %}*/
/* </div>*/
/* */
/* <!-- Site Overlay -->*/
/* <div class="site-overlay"></div>*/
/* */
/* <div id="container" class="container-main">*/
/*   <!-- Front Page -->*/
/* */
/*   {% if is_front %}*/
/*     <div class="front">*/
/* */
/*       <section class="cover">*/
/*         <div class="contain">*/
/*           {% if page.front_one %}*/
/*             {{ page.front_one }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </section>*/
/* */
/*       <section id="features" class="front-section features">*/
/*         <div class="contain">*/
/*           {% if page.front_two %}*/
/*             {{ page.front_two }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </section>*/
/* */
/*       <section class="front-section icons">*/
/*         <div class="contain">*/
/*           {% if page.front_three %}*/
/*             {{ page.front_three }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </section>*/
/* */
/*       <section class="front-section posts">*/
/*         {% if page.front_four %}*/
/*           {{ page.front_four }}*/
/*         {% endif %}*/
/*       </section>*/
/* */
/*       <section class="front-section news">*/
/*         <div class="contain">*/
/*           {% if page.front_five %}*/
/*             {{ page.front_five }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </section>*/
/* */
/*       <section class="front-section featured">*/
/*         <div class="featured-box">*/
/*           {% if page.front_six %}*/
/*             {{ page.front_six }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="featured-box">*/
/*           {% if page.front_seven %}*/
/*             {{ page.front_seven }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </section>*/
/* */
/*       <section class="front-section source">*/
/*         <div class="contain">*/
/*           {% if page.front_eight %}*/
/*             {{ page.front_eight }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </section>*/
/* */
/*     </div>*/
/* */
/*     {% else %}*/
/* */
/*     <!-- Main Content -->*/
/*     <div class="content contain">*/
/*       <div class="page-content">*/
/*         <div class="visually-hidden"><a id="main-content" tabindex="-1"></a></div>*/
/*         {{ messages }}*/
/*         {% if page.help %}*/
/*           <div class="help">*/
/*             {{ page.help }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if action_links %}*/
/*           <ul class="action-links">*/
/*             {{ action_links }}*/
/*           </ul>*/
/*         {% endif %}*/
/* */
/*         {% if secondary_local_tasks %}*/
/*           <div class="tabs-secondary clearfix" role="navigation">{{ secondary_local_tasks }}</div>*/
/*         {% endif %}*/
/* */
/*         {# {{ kint() }} #}*/
/*         {# {{ kint(page) }} #}*/
/*         {# Requiters Devel Module  #}*/
/* */
/*         {{ title_prefix }}*/
/*         {% if title %}*/
/*           <h1 class="page-title">{{ title }}</h1>*/
/*         {% endif %}*/
/*         {{ title_suffix }}*/
/*         {% if primary_local_tasks %}*/
/*           {{ primary_local_tasks }}*/
/*         {% endif %}*/
/* */
/*         {% if page.content_top %}*/
/*           {{ page.content_top }}*/
/*         {% endif %}*/
/* */
/*         {{ page.content }}*/
/* */
/*         {% if page.content_bottom %}*/
/*           {{ page.content_bottom }}*/
/*         {% endif %}*/
/* */
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <footer class="footer-main">*/
/*   <div class="contain">*/
/*     {% if page.footer %}*/
/*       {{ page.footer }}*/
/*     {% endif %}*/
/*     <a class="twitter" href="https://twitter.com/zetagraph"><img class="twitter-icon inject-svg" data-src="/themes/monoset/icons/twitter.svg" alt="twitter"></a>*/
/*     <a class="top-link" href="#top"><img class="arrow-up inject-svg" data-src="/themes/monoset/icons/chevron-up.svg" alt="chevron-up"></a>*/
/*   </div>*/
/* </footer>*/
