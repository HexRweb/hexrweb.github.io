<?php

class home_functions
{
	public function print_header($headers = "",$tab="home",$title="")
	{
		$print ="<!doctype html><html><head><title>".$title." | HexR</title><meta name='description' content='HexR is a small independent nonprofit (not licensed) business that creates and manages semi-static websites for small business at little to no charge.' /><meta name='keywords' content='HexR Website Design Development Free' /><meta name=\"robots\" content=\"index, follow\" /><meta name='language' content='english' /><meta name='author' content='HexR' /><meta name='viewport' content=\"width=device-width, initial-scale=1\"><meta name='HandheldFriendly' content='true' /><meta charset='UTF-8' /><link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css\" type=\"text/css\" /><link href=\"/assets/home/css/global.css\" rel=\"stylesheet\"><script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-latest.min.js\"></script><script type=\"text/javascript\" src=\"/assets/home/js/combined.min.js\"></script><noscript><style>main,footer{display:none;}#noscript{display:inherit;}</style></noscript>". $headers."</head><body class=\"cyan darken-2\"><header><div class=\"navbar-fixed hexr-background\"><nav class=\"hexr-background\"><div class=\"nav-wrapper hexr-background\"><a href=\"/\" class=\"brand-logo font-anders hide-on-med-and-down "; if($tab == "home") $print .='active'; $print.= "\">HexR</a><a href=\"/\" class=\"brand-logo font-anders center hide-on-large-only "; if($tab == "home") $print .='active'; $print.= "\">HexR</a><a href=\"#\" data-activates=\"mobile\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a><ul class=\"right hide-on-med-and-down\"><li><a class=\"flow-text "; if($tab == "about") $print .='active'; $print.= "\" href=\"/about\">About</a></li><li><a class=\"flow-text "; if($tab == "initiative") $print .='active'; $print.= "\" href=\"/initiative\">Initiative</a></li><li><a class=\"flow-text "; if($tab == "projects") $print .='active'; $print.= "\" href=\"/projects\">Projects</a></li><li><a class=\"flow-text "; if($tab == "pricing") $print .='active'; $print.= "\" href=\"/pricing\">Pricing</a></li><li><a class=\"flow-text "; if($tab == "faq") $print .='active'; $print.= "\" href=\"/faq\">FAQ</a></li><li><a class=\"flow-text "; if($tab == "clients") $print .='active'; $print.= "\" href=\"/clients\">Clients</a></li><li><a class=\"flow-text "; if($tab == "sponsors") $print .='active'; $print.= "\" href=\"/sponsors\">Sponsors</a></li><li><a class=\"flow-text "; if($tab == "contact") $print .='active'; $print.= "\" href=\"/contact\">Contact</a></li><li><a class=\"center"; if($tab ==="book") $print .='active'; $print.="\" href=\"/the-book\">The Book</a></li></ul><ul class=\"side-nav page-background white-text\" id=\"mobile\"><li><a class=\"center "; if($tab == "about") $print .='active'; $print.= "\" href=\"/about\">About</a></li><li><a class=\"center "; if($tab == "initiative") $print .='active'; $print.= "\" href=\"/initiative\">Initiative</a></li><li><a class=\"center "; if($tab == "projects") $print .='active'; $print.= "\" href=\"/projects\">Projects</a></li><li><a class=\"center "; if($tab == "pricing") $print .='active'; $print.= "\" href=\"/pricing\">Pricing</a></li><li><a class=\"center "; if($tab == "faq") $print .='active'; $print.= "\" href=\"/faq\">FAQ</a></li><li><a class=\"center "; if($tab == "clients") $print .='active'; $print.= "\" href=\"/clients\">Clients</a></li><li><a class=\"center"; if($tab ==="book") $print .='active'; $print.="\" href=\"/the-book\">The Book</a></li><li><a class=\"center "; if($tab == "sponsors") $print .='active'; $print.= "\" href=\"/sponsors\">Sponsors</a></li><li><a class=\"center "; if($tab == "contact") $print .='active'; $print.= "\" href=\"/contact\">Contact</a></li></ul></div></nav></div></header><div id=\"noscript\" class=\"center valign-wrapper animated bounce\"><div class=\"valign center\" id=\"noscript-wrapper\"><h5>Uh-Oh!</h5><h4>Why no JavaScript?</h4><h3>This website requires javascript to run!</h3><h2><a href=\"//enable-javascript.com/\" target=\"_blank\">Enable JavaScript</a> to find out what HexR is about!</h2></div></div>";
		if($tab == "home")
			$print .= "<main>";
		else
			$print .= "<main class='white-text grey darken-4'>";
		print $print;
	}

	public function get_footer($extras = "",$tab = "home")
	{
		$print =  "</main><footer class=\"page-footer hexr-background\"><div class=\"container valign-wrapper\"><div class=\"row valign\"><div class=\"col l6 s12 valign\"><br/><img src=\"//hexr.org/assets/images/400x500-home.png\" class=\"center logo small responsive-img\" alt=\"hexr logo\" /><p class=\"grey-text text-lighten-4\">HexR. The only organization fully dedicated to producing the best websites for everyone. We're ready to take any challenge you throw at us, from a small single page site to a large ten thousand page site. From the fearing individual to the tech savvy engineer. Whoever you are and whatever you need, we\'re ready to help you.<a href=\"/request\" class=\"teal-text text-accent-4\">Lets get started</a>!</p></div><div class=\"col l4 offset-l2 s12\"><br class=\"hide-on-med-and-down\"/><br class=\"hide-on-med-and-down\"/><br class=\"hide-on-med-and-down\"/><h5 class=\"white-text center\">Quick Links</h5><ul class=\"center\"><li><a class=\"teal-text text-accent-4 flow-text footer-nav-link "; if($tab == 'contact') $print .='active'; $print .="\" href=\"/contact\">Contact</a></li><li><a class=\"teal-text text-accent-4 flow-text footer-nav-link "; if($tab == 'policies') $print .='active'; $print .="\" href=\"/policies#legal\">Legal</a></li><li><a class=\"teal-text text-accent-4 flow-text footer-nav-link "; if($tab == 'initiative') $print .='active'; $print .="\" href=\"/initiative\">Initiative</a></li><li><a class=\"teal-text text-accent-4 flow-text footer-nav-link "; if($tab == 'about') $print .='active'; $print .="\" href=\"/about\">About</a></li><li><a class=\"teal-text text-accent-4 flow-text footer-nav-link "; if($tab == 'policies') $print .='active'; $print .="\" href=\"/policies#tos\">Terms of Service</a></li><li><a class=\"teal-text text-accent-4 flow-text footer-nav-link "; if($tab == 'policies') $print .='active'; $print .="\" href=\"/policies#privacy\">Privacy Policy</a></li></ul></div></div></div><div class=\"footer-copyright\"><div class=\"container center\">&copy; 2015 HexR Website Design, Development and Production. <a href=\"/contact\" class=\"teal-text text-accent-4\">Contact for information</a></div></div></footer></body><div id=\"scripts\" class=\"hide\"><link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"><!--<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css\">--><script type=\"text/javascript\" src=\"/assets/home/js/global.js\" defer></script><script src='https://www.google.com/recaptcha/api.js' async></script><!-- Piwik --><script type=\"text/javascript\">var _paq = _paq || [];_paq.push(['trackPageView']);_paq.push(['enableLinkTracking']);(function() {var u=\"//proxy.hexr.org/a/p\";_paq.push(['setTrackerUrl', u+'piwik.php']);_paq.push(['setSiteId', 1]);var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'.js'; s.parentNode.insertBefore(g,s);})();</script><noscript><p><img src=\"//assets.hexr.org/lib/piwik/piwik.php?idsite=1\" style=\"border:0;\" alt=\"\" /></p></noscript><!-- End Piwik Code -->".$extras."</div></html>";
		echo $print;
	}

	public static function get_link($where = "home")
	{
		$base = "";
		switch(strtolower($where))
		{
			case "home":
				return $base."/";
			case "about":
				return $base."/about";
			case "initiative":
				return $base."/initiative";
			case "projects":
				return $base."/projects";
			case "contact":
				return $base."/contact";
			case "plans":
				return $base."/request";
			case "sponsors":
				return $base."/sponsors";
			case "donate":
				return $base."/donate";
			case "faq":
				return $base."/faq";
			case "clients":
				return $base."/clients";
			case "pricing":
				return $base."/request";
			case "book":
				return $base."/the-book";
			default:
				return $base;
		}
	}
}