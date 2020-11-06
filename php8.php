<?php
$_SERVER['BASE_PAGE'] = 'php8.php';
include_once __DIR__ . '/include/prepend.inc';

site_header("PHP 8", array("current" => "php8"));
?>
<link rel="stylesheet" href="/styles/php8.css">
<div class="php8">
  <div class="php8-section php8-section_dark php8-section_header center">
    <div class="php8-section__inner">
      <div class="php8-logo">
        <img src="/images/logos/logo_php8.svg" alt="" height="126" width="343">
      </div>
      <div class="php8-title">
        <span class="php8-title__text">released!</span>
        <img class="php8-title__img" src="/images/party-popper.png" srcset="/images/party-popper@2x.png 2x, /images/party-popper@2x.png 3x" alt="" width="58" height="58">
      </div>
      <div class="php8-subtitle">
        PHP 8.0 is a major update of the PHP language. It contains many new features and optimizations. Including named
        arguments, union types, attributes, constructor property promotion, match expression, nullsafe operator, JIT, and
        improvements in type system, error handling, and consistency.
      </div>
    </div>
  </div>

  <div class="php8-section center">
    <div class="php8-compare">
      <h2 class="php8-h2" id="named-arguments">
        <a class="php8-anchor" href="#named-arguments"></a>
        Named arguments
        <a class="php8-rfc" href="https://wiki.php.net/rfc/named_params">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              <span class="default">htmlspecialchars</span>(<span class="default">$string</span>,
              <span class="default">ENT_COMPAT | ENT_HTML401</span>, <span class="string">'UTF-8'</span>,
              <span class="keyword">false</span>);
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              <span class="methodname"><strong>htmlspecialchars</strong></span>(<span class="parameter">$string</span>,
              double_encode: <span class="initializer">false</span>);
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="attributes">
        <a class="php8-anchor" href="#attributes"></a>
        Attributes
        <a class="php8-rfc" href="https://wiki.php.net/rfc/attributes_v2">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              <span class="comment">/**</span><br>
              <span class="comment">* @Route("/api/posts/{id}", methods={"GET", "HEAD"})</span><br>
              <span class="comment">*/</span><br>
              <span class="keyword">class</span> <span class="default">User</span><br>
              {
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              #[Route(<span class="string">"/api/posts/{id}"</span>,
              methods: [<span class="string">"GET"</span>, <span class="string">"HEAD"</span>])]<br>
              <span class="keyword">class</span> <span class="default">User</span><br>
              {<br>
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="constructor-property-promotion">
        <a class="php8-anchor" href="#constructor-property-promotion"></a>
        Constructor property promotion
        <a class="php8-rfc" href="https://wiki.php.net/rfc/constructor_promotion">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              <span class="keyword">class</span> Point {<br>
              &nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">float</span> $x;<br>
              &nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">float</span> $y;<br>
              &nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">float</span> $z;<br>
              <br>
              &nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">function</span> __construct(<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">float</span> $x = 0.0,<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">float</span> $y = 0.0,<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">float</span> $z = 0.0,<br>
              &nbsp;&nbsp;) {<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$this->x = $x;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$this->y = $y;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$this->z = $z;<br>
              &nbsp;&nbsp;}<br>
              }
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              <span class="keyword">class</span> Point {<br>
              &nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">function</span> __construct(<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">float</span> $x = 0.0,<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">float</span> $y = 0.0,<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> <span class="keyword">float</span> $z = 0.0,<br>
              &nbsp;&nbsp;) {}<br>
              }
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="union-types">
        <a class="php8-anchor" href="#union-types"></a>
        Union types
        <a class="php8-rfc" href="https://wiki.php.net/rfc/union_types_v2">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              <span class="keyword">class</span> Number {<br>
              &nbsp;&nbsp;<span class="comment">/** @var int|float */</span><br>
              &nbsp;&nbsp;<span class="keyword">private</span> $number;<br>
              <br>
              &nbsp;&nbsp;<span class="comment">/**</span><br>
              &nbsp;&nbsp;<span class="comment">* @param float|int $number</span><br>
              &nbsp;&nbsp;<span class="comment">*/</span><br>
              &nbsp;&nbsp;<span class="keyword">public</span> function __construct($number) {<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$this->number = $number;<br>
              &nbsp;&nbsp;}<br>
              }<br>
              <br>
              <span class="keyword">new</span> Number(<span class="string">'NaN'</span>); <span class="comment">// Ok</span>
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              <span class="keyword">class</span> Number {<br>
              &nbsp;&nbsp;<span class="keyword">public</span> function __construct(<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">private</span> <span class="keyword">int</span>|<span class="keyword">float</span> $number<br>
              &nbsp;&nbsp;) {}
              }<br>
              <br>
              <span class="keyword">new</span> Number(<span class="string">'NaN'</span>); <span class="comment">// TypeError</span>
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="match-expression">
        <a class="php8-anchor" href="#match-expression"></a>
        Match expression
        <a class="php8-rfc" href="https://wiki.php.net/rfc/match_expression_v2">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              <span class="keyword">switch</span> (8.0) {<br>
              &nbsp;&nbsp;<span class="keyword">case</span> <span class="string">'8.0'</span>:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$result = <span class="string">"Oh no!"</span>;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">break</span>;<br>
              &nbsp;&nbsp;<span class="keyword">case</span> 8.0:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$result = <span class="string">"This is what I expected"</span>;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">break</span>;<br>
              }<br>
              <span class="keyword">echo</span> $result;<br>
              <span class="comment">//> Oh no!</span>
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              <span class="keyword">echo</span> match (8.0) {<br>
              &nbsp;&nbsp;<span class="string">'8.0'</span> => <span class="string">"Oh no!"</span>,<br>
              &nbsp;&nbsp;8.0 => <span class="string">"This is what I expected"</span>,<br>
              };<br>
              <span class="comment">//> This is what I expected</span>
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="nullsafe-operator">
        <a class="php8-anchor" href="#nullsafe-operator"></a>
        Nullsafe operator
        <a class="php8-rfc" href="https://wiki.php.net/rfc/nullsafe_operator">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              $country =  <span class="keyword">null</span>;<br>
              <br>
              <span class="keyword">if</span> ($session !== <span class="keyword">null</span>) {<br>
              &nbsp;&nbsp;$user = $session->user;<br>
              <br>
              &nbsp;&nbsp;<span class="keyword">if</span> ($user !== <span class="keyword">null</span>) {<br>
              &nbsp;&nbsp;&nbsp;&nbsp;$address = $user->getAddress();<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> ($address !== <span class="keyword">null</span>) {<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$country = $address->country;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
              &nbsp;&nbsp;&nbsp;&nbsp;}<br>
              }
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              $country = $session?->user?->getAddress()?->country;
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="saner-string-to-number-comparisons">
        <a class="php8-anchor" href="#saner-string-to-number-comparisons"></a>
        Saner string to number comparisons
        <a class="php8-rfc" href="https://wiki.php.net/rfc/string_to_number_comparison">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              0 == <span class="string">'foobar'</span> <span class="comment">// true</span>
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              0 == <span class="string">'foobar'</span> <span class="comment">// false</span>
            </code>
          </div>
        </div>
      </div>
    </div>

    <div class="php8-compare">
      <h2 class="php8-h2" id="consistent-type-errors-for-internal-functions">
        <a class="php8-anchor" href="#consistent-type-errors-for-internal-functions"></a>
        Consistent type errors for internal functions
        <a class="php8-rfc" href="https://wiki.php.net/rfc/consistent_type_errors">RFC</a>
      </h2>
      <div class="php8-compare__main">
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label">PHP 7</div>
          <div class="php8-code phpcode">
            <code>
              strlen([]); <span class="comment">// Warning: strlen() expects parameter 1 to be string, array given</span><br>
              <br>
              array_chunk([], -1); <span class="comment">// Warning: array_chunk(): Size parameter expected to be greater than 0</span>
            </code>
          </div>
        </div>
        <div class="php8-compare__arrow"></div>
        <div class="php8-compare__block example-contents">
          <div class="php8-compare__label php8-compare__label_new">PHP 8</div>
          <div class="php8-code phpcode">
            <code>
              strlen([]); <span class="comment">// TypeError: strlen(): Argument #1 ($str) must be of type string, array given</span><br>
              <br>
              array_chunk([], -1); <span class="comment">// ValueError: array_chunk(): Argument #2 ($length) must be greater than 0</span>
            </code>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="php8-section php8-section_light">
    <h2 class="php8-h2">Other syntax tweaks and improvements</h2>
    <div class="php8-columns">
      <div class="php8-column">
        <ul>
          <li>
            Allow trailing comma in parameter list <a href="https://wiki.php.net/rfc/trailing_comma_in_parameter_list">RFC</a>
            and closure use lists <a href="https://wiki.php.net/rfc/trailing_comma_in_closure_use_list">RFC</a>
          </li>
          <li>
            Non-capturing catches <a href="http://TODO">RFC</a>
          </li>
          <li>
            Variable Syntax Tweaks <a href="https://wiki.php.net/rfc/variable_syntax_tweaks">RFC</a>
          </li>
        </ul>
      </div>
      <div class="php8-column">
        <ul>
          <li>
            Treat namespaced names as single token <a href="https://wiki.php.net/rfc/namespaced_names_as_token">RFC</a>
          </li>
          <li>
            Throw expression <a href="https://wiki.php.net/rfc/throw_expression">RFC</a>
          </li>
          <li>
            Allow ::class on objects <a href="https://wiki.php.net/rfc/class_name_literal_on_object">RFC</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="php8-columns">
      <div class="php8-column">
        <h2 class="php8-h2 php8-h2_margin-top">Type system and error handling improvements</h2>
        <ul>
          <li>
            Saner string to number comparisons <a href="https://wiki.php.net/rfc/string_to_number_comparison">RFC</a>
          </li>
          <li>
            Stricter type checks for arithmetic/bitwise operators
            <a href="https://wiki.php.net/rfc/arithmetic_operator_type_checks">RFC</a>
          </li>
          <li>
            Abstract trait method validation <a href="http://TODO">RFC</a>
          </li>
          <li>
            Correct signatures of magic methods <a href="https://wiki.php.net/rfc/magic-methods-signature">RFC</a>
          </li>
          <li>
            Reclassified engine warnings <a href="https://wiki.php.net/rfc/engine_warnings">RFC</a>
          </li>
          <li>
            Fatal error for incompatible method signatures <a href="https://wiki.php.net/rfc/lsp_errors">RFC</a>
          </li>
          <li>
            The @ operator no longer silences fatal errors
          </li>
          <li>
            Inheritance with private methods <a href="https://wiki.php.net/rfc/inheritance_private_methods">RFC</a>
          </li>
          <li>
            Mixed type <a href="https://wiki.php.net/rfc/mixed_type_v2">RFC</a>
          </li>
          <li>
            Static return type <a href="">RFC</a>
          </li>
          <li>
            Types for internal functions
            <a href="https://externals.io/message/106522">RFC</a>
          </li>
          <li>
            Curl objects instead of resources
            <a href="https://php.watch/versions/8.0/resource-CurlHandle">RFC</a>
          </li>
        </ul>
      </div>
      <div class="php8-column">
        <h2 class="php8-h2 php8-h2_margin-top">New Classes, Interfaces, and Functions</h2>
        <ul>
          <li>
            <a href="https://wiki.php.net/rfc/weak_maps">Weak Map</a> class
          </li>
          <li>
            <a href="https://wiki.php.net/rfc/stringable">Stringable</a> interface
          </li>
          <li>
            <a href="https://wiki.php.net/rfc/str_contains">str_contains()</a>,
            <a href="https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions">str_starts_with()</a>,
            <a href="https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions">str_ends_with()</a>
          </li>
          <li>
            <a href="https://github.com/php/php-src/pull/4769">fdiv()</a>
          </li>
          <li>
            <a href="https://wiki.php.net/rfc/get_debug_type">get_debug_type()</a>
          </li>
          <li>
            <a href="https://github.com/php/php-src/pull/5427">get_resource_id()</a>
          </li>
          <li>
            <a href="https://wiki.php.net/rfc/token_as_object">token_get_all()</a> object implementation
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="php8-section php8-section_dark php8-section_footer php8-footer center">
    <div class="php8-section__inner">
      <h2 class="php8-h2">
        Get free performance improvement.<br class="display-none-lg display-block-md">
        Get better syntax.<br class="display-block-lg display-none-md display-block-sm">
        Get more strictness.
      </h2>
      <div class="php8-button-wrapper">
        <a class="php8-button php8-button_light" href="#">Go update to PHP 8!</a>
      </div>
      <div class="php8-footer__content">
        <p>
          For source downloads of PHP 8 please visit our <a href="http://www.php.net/downloads">downloads</a> page.
          Windows binaries can be found on the <a href="http://windows.php.net/download">PHP for Windows</a> site.
          The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-8.php">ChangeLog</a>.
        </p>
        <p>
          The <a href="http://php.net/manual/en/migration8.php">migration guide</a> is available in the PHP Manual. Please
          consult it for the detailed list of new features and backward-incompatible changes.
        </p>
      </div>
    </div>
  </div>
</div>




<?php site_footer();