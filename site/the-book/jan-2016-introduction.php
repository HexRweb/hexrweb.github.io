<?php

require("../assets/home/functions.php");
home_functions::print_header("","book","The Book");

?><div class="container"><h1 class="center">The Book (by HexR Web)</h1><p class="flow-text">Today is January 1, 2016.</p><p class="flow-text">It's the start of a new year, and because of that, here at HexR, we decided to start something new. It's called " <em>The Book</em> ". Our goal is to write one article per month (usually posted on the first weekend) about something related to <abbr title="Information Technology">IT</abbr> in human terminology. In the end, hopefully, we won't need to exist because the creation and usage of technology will have become something that everyone understands from the availability of a <em>good</em> resource that's <em>easy</em> to understand. If you want to follow us on our journey, you can join our <a target="_blank" href="http://eepurl.com/bLxM91">mailing list</a>!</p><p class="flow-text"> Let's see where this takes us!</p><p class="flow-text">Until next month,<br/>~The HexR Minions</p></div><div class="container"><a href="/the-book" class="left flow-text">Back to ToC</a><a href="b]feb-2016-computer-components" class="right flow-text">Next Post (Feb 2016 - Computer Components)</a></div><br /><br /><div id="disqus_thread" class="container"></div><br /><br /><br /><br /><?php

$extras = "
<script>
var disqus_config = function () {
this.page.url = \"https://hexr.org/the-book/jan-2016-introduction\";
this.page.identifier = \"THE_BOOK-INTRO\"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
(function() {var d = document, s = d.createElement('script'); s.src = '//thebook-hexr.disqus.com/embed.js'; s.setAttribute('data-timestamp', +new Date()); (d.head || d.body).appendChild(s);})();
</script>";
home_functions::get_footer($extras);

?>
