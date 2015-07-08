# Onfleet-PHP
<p>Onfleet-PHP is an API wrapper for <a href="http://docs.onfleet.com">Onfleet's APIs</a>.</p>

<h2><a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true"><span class="octicon octicon-link"></span></a>Installation</h2>

<p>Include Onfleet.php into your .php file.</p>

<pre><code>include "Onfleet.php";</code></pre>

<h2><a id="user-content-usage" class="anchor" href="#usage" aria-hidden="true"><span class="octicon octicon-link"></span></a>Usage</h2>

<p>You can create an instance of the API wrapper:</p>
<pre><code>$config = array("api_name" => "Replace with Name", "api_key" => "Replace with key");
$onfleet = new Onfleet($config);</code></pre>

<p>Example to Create Administrator:</p>
<pre><code>$params = array("name" => "Stuart Little", "email" => "your@email.com", "phone" => "6615991234");
$response = $onfleet->admin_create($params);</code></pre>

<p>Example to List Tasks:</p>
<pre><code>$params = array("state" => 0);
$response = $onfleet->tasks($params);</code></pre>

<h2><a id="user-content-contributing" class="anchor" href="#contributing" aria-hidden="true"><span class="octicon octicon-link"></span></a>Contributing</h2>

<ol>
<li>Fork it ( <a href="https://github.com/billybateman/Onfleet-PHP/fork">https://github.com/billybateman/Onfleet-PHP/fork</a> )</li>
<li>Create your feature branch (<code>git checkout -b my-new-feature</code>)</li>
<li>Commit your changes (<code>git commit -am 'Add some feature'</code>)</li>
<li>Push to the branch (<code>git push origin my-new-feature</code>)</li>
<li>Create a new Pull Request</li>
</ol>
