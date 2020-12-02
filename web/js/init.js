_5grid.ready(function() {

	if (_5grid.isDesktop) {
		$('#nav > ul').dropotron({
			offsetY: -17,
			offsetX: -1,
			mode: 'fade',
			noOpenerFade: true
		});
	}

});

// decrypt helper function
function decryptCharcode(n,start,end,offset) {
	n = n + offset;
	if (offset > 0 && n > end) {
		n = start + (n - end - 1);
	} else if (offset < 0 && n < start) {
		n = end - (start - n - 1);
	}
	return String.fromCharCode(n);
}

// decrypt string
function decryptString(enc,offset) {
	var dec = "";
	var len = enc.length;
	for(var i=0; i < len; i++) {
		var n = enc.charCodeAt(i);
		if (n >= 0x2B && n <= 0x3A) {
			dec += decryptCharcode(n,0x2B,0x3A,offset);	// 0-9 . , - + / :
		} else if (n >= 0x40 && n <= 0x5A) {
			dec += decryptCharcode(n,0x40,0x5A,offset);	// A-Z @
		} else if (n >= 0x61 && n <= 0x7A) {
			dec += decryptCharcode(n,0x61,0x7A,offset);	// a-z
		} else {
			dec += enc.charAt(i);
		}
	}
	return dec;
}

// decrypt spam-protected emails
function linkTo_UnCryptMailto(s) {
	location.href = 'mailto:'+decryptString(s, -3);
}

var cookieInfo = function() {
  var cookieName = 'cookieInfo';

  function init() {
  	addMarkup();
  	bindEvents();

    if (getCookie() === false) {
      displayBanner();
    } else {
      $('.js-cookie-info').remove();
    }
  };

  function addMarkup() {
  	$('body').append('<div class="cookie-info js-cookie-info"></div>');
	}

  function bindEvents() {
  	$('body').on('click', '.js-cookie-ok', function() {
      setCookie();
      $('.js-cookie-info').fadeOut();
		});
	}

  function getCookie() {
    return (document.cookie.indexOf(cookieName + '=true') > -1);
  };

  function setCookie() {
    document.cookie = cookieName + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
  };

  function displayBanner() {
  	var cookieText = '<div class="cookie-text">' +
			'<p>Diese Website nutzt Cookies, um Ihnen die bestmögliche Funktionalität bieten zu können.</p>' +
			'<p>Weitere Informationen zu Cookies erhalten Sie in unserer <a href="/datenschutz.html">Datenschutzerklärung</a>.</p>' +
			'<button class="js-cookie-ok">Okay, verstanden</button>'
			'</div>';
    $('.js-cookie-info').html(cookieText);
  };

  init();
};

setTimeout(cookieInfo, 1500);
