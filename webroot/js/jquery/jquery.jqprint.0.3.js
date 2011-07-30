
<!-- saved from url=(0059)http://plugins.jquery.com/files/jquery.jqprint.0.3.js_0.txt -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>function notifyScript() {     var evt = document.createEvent("Event");     evt.initEvent("notify", false, false);     if (document.getElementById("addthis-extension-script") == null) {        var d=document.createElement("div"); d.setAttribute("style", "display:none"); d.setAttribute("id", "addthis-extension-script");         if (window._ate)             d.textContent=_ate.pub();         else if(window.addthis_config && addthis_config.pubid)          d.textContent= addthis_config.pubid;        else if(window.addthis_config && addthis_config.username)          d.textContent= addthis_config.username;        else if(window.addthis_pub)          d.textContent= addthis_pub;        else             d.textContent="";         document.body.appendChild(d);     }    document.documentElement.dispatchEvent(evt); }notifyScript()</script></head><body><pre style="word-wrap: break-word; white-space: pre-wrap;">// -----------------------------------------------------------------------
// Eros Fratini - eros@recoding.it
// jqprint 0.3
//
// - 19/06/2009 - some new implementations, added Opera support
// - 11/05/2009 - first sketch
//
// Printing plug-in for jQuery, evolution of jPrintArea: http://plugins.jquery.com/project/jPrintArea
// requires jQuery 1.3.x
//
// Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
//------------------------------------------------------------------------

(function($) {
    var opt;

    $.fn.jqprint = function (options) {
        opt = $.extend({}, $.fn.jqprint.defaults, options);

        var $element = (this instanceof jQuery) ? this : $(this);
        
        if (opt.operaSupport &amp;&amp; $.browser.opera) 
        { 
            var tab = window.open("","jqPrint-preview");
            tab.document.open();

            var doc = tab.document;
        }
        else 
        {
            var $iframe = $("&lt;iframe  /&gt;");
        
            if (!opt.debug) { $iframe.css({ position: "absolute", width: "0px", height: "0px", left: "-600px", top: "-600px" }); }

            $iframe.appendTo("body");
            var doc = $iframe[0].contentWindow.document;
        }
        
        if (opt.importCSS)
        {
            if ($("link[media=print]").length &gt; 0) 
            {
                $("link[media=print]").each( function() {
                    doc.write("&lt;link type='text/css' rel='stylesheet' href='" + $(this).attr("href") + "' media='print' /&gt;");
                });
            }
            else 
            {
                $("link").each( function() {
                    doc.write("&lt;link type='text/css' rel='stylesheet' href='" + $(this).attr("href") + "' /&gt;");
                });
            }
        }
        
        if (opt.printContainer) { doc.write($element.outer()); }
        else { $element.each( function() { doc.write($(this).html()); }); }
        
        doc.close();
        
        (opt.operaSupport &amp;&amp; $.browser.opera ? tab : $iframe[0].contentWindow).focus();
        setTimeout( function() { (opt.operaSupport &amp;&amp; $.browser.opera ? tab : $iframe[0].contentWindow).print(); if (tab) { tab.close(); } }, 1000);
    }
    
    $.fn.jqprint.defaults = {
		debug: false,
		importCSS: true, 
		printContainer: true,
		operaSupport: true
	};

    // Thanks to 9__, found at http://users.livejournal.com/9__/380664.html
    jQuery.fn.outer = function() {
      return $($('&lt;div&gt;&lt;/div&gt;').html(this.clone())).html();
    } 
})(jQuery);</pre><div style="display:none" id="addthis-extension-script"></div></body></html>