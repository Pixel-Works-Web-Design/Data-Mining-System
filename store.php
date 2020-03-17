
<!doctype html>
<html class="no-js" lang="en">
<head>
<!-- ROIHunterEasy HeadSnippet start -->

    <!-- RHEasy Global Site Tag (gtag.js) - Google AdWords: 967423690 --><script async src="https://www.googletagmanager.com/gtag/js?id=AW-967423690"></script><script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-967423690');
</script>

    <script type="text/javascript">
        (function() {

            var remarketingType = 'OTHER';

             // if current page is NOT cart page
            var cartPageActive = false; // unset cart page flag
            

             // if current page is NOT product page
            var productPageActive = false; // unset product page flag
            

            
            var collectionPageActive = true;

            var prodIds = ['shopify_1967506128961_17869717733441', 'shopify_1967501180993_17869701611585', 'shopify_1965598539841_17862821478465', 'shopify_1965550633025_17862659145793', 'shopify_1365547581505_12399140274241', 'shopify_1958256738369_17834133520449', 'shopify_1961739485249_17847046144065', 'shopify_9992979408_43368612688', 'shopify_1365655093313_12400402464833', 'shopify_1362817155137_12372240007233', 'shopify_26953744400_221008691216', 'shopify_1365566849089_12399323316289', 'shopify_9988835792_43300727632', 'shopify_1958262243393_17834157604929', 'shopify_9857187280_41665222096', 'shopify_1362805489729_12372119126081', 'shopify_1362810601537_12372165066817', 'shopify_1951332302913_17805819183169', 'shopify_1958249201729_17834095771713', 'shopify_1965568229441_17862727925825', 'shopify_1965536411713_17862593675329', 'shopify_9990661840_43332257488', 'shopify_22597369872_149149712400', 'shopify_9993656656_43375063440', 'shopify_1364287225921_12386649014337', 'shopify_5375248837_43376366544', 'shopify_447030648_1241436988', 'shopify_9993032464_43368712464', 'shopify_49914970128_410678231056', 'shopify_2246214853_6467571525', 'shopify_1960067498049_17840855547969', 'shopify_1959947403329_17840456695873', 'shopify_1959944355905_17840447324225', 'shopify_1959924367425_17840379363393', 'shopify_1959907033153_17840289873985', 'shopify_1959896973377_17840216997953', 'shopify_1959894417473_17840199696449', 'shopify_1951334629441_17805840121921', 'shopify_1951324569665_17805796671553', 'shopify_1950526210113_17803333599297', 'shopify_1950520868929_17803313119297', 'shopify_1949318381633_17799501971521', 'shopify_1949314121793_17799491321921', 'shopify_1949308813377_17799475003457', 'shopify_1949302095937_17799457144897', 'shopify_1949298196545_17799446462529', 'shopify_1949294133313_17799436795969', 'shopify_1949291708481_17799431028801', 'shopify_1949288235073_17799418839105', 'shopify_1949284466753_17799411466305'];
            if (remarketingType == 'OTHER') {
                var googleTagParams = {
                    dynx_itemid: prodIds,
                    dynx_pagetype: 'searchresults'
                };
            } else {
                var googleTagParams = {
                    ecomm_prodid: prodIds,
                    ecomm_pagetype: 'category'
                };
            }
            

            
            var mainPageActive = false;
            

            var cartPage = {
                active: cartPageActive, // flag true/false
                // if facebookEventParams is undefined set facebookEventParams = null
                facebookEventParams: typeof facebookEventParams !== 'undefined' ? facebookEventParams : null,
                googleTagParams: typeof googleTagParams !== 'undefined' ? googleTagParams : null
            };

            var productPage = {
                active: productPageActive, // flag true/false
                facebookEventParams: typeof facebookEventParams !== 'undefined' ? facebookEventParams : null,
                googleTagParams: typeof googleTagParams !== 'undefined' ? googleTagParams : null
            };

            var collectionPage = {
                active: collectionPageActive, // flag true/false
                facebookEventParams: null,
                googleTagParams: typeof googleTagParams !== 'undefined' ? googleTagParams : null
            };

            var mainPage = {
                active: mainPageActive,
                facebookEventParams: null,
                googleTagParams: typeof googleTagParams !== 'undefined' ? googleTagParams : null
            };

            // here we initialize our global object which contains all necessary information for
            // our all scripts which fired some google or facebook analytic events etc.
            // we should use some unique name to identify this object to avoid names conflict
            // relative to other global objects
            var hash = 'ROIHunterEasy_5a83c915b9f3150f071dd42973557062ac2f30b295a5b6393544410da07ecb27';
            window[hash] = {
                cartPage: cartPage,
                productPage: productPage,
                collectionPage: collectionPage,
                mainPage: mainPage,
                remarketingType: remarketingType
            };

            // begin: initialize our rheasy_fbq object for facebook tracking
            window[hash].rheasy_fbq = function() {
                if (arguments.length === 0) {
                    return;
                }

                var pixelId, trackType, contentObj;     //get parameters:

                if (typeof arguments[0] === 'string') pixelId = arguments[0];       //param string PIXEL ID
                if (typeof arguments[1] === 'string') trackType = arguments[1];     //param string TRACK TYPE (PageView, Purchase)
                if (typeof arguments[2] === 'object') contentObj = arguments[2];    //param object (may be null):
                                                                                    //    {value : subtotal_price,
                                                                                    //     content_type : some_string,
                                                                                    //     currency : shop_curency,
                                                                                    //     contents : [{id, quantity, item_price}, ...] instance of array
                                                                                    //    }

                var argumentsAreValid = typeof pixelId === 'string' && pixelId.replace(/\s+/gi, '') !== '' &&
                    typeof trackType === 'string' && trackType.replace(/\s+/gi, '') !== '';

                if (!argumentsAreValid) {
                    console.error('RH PIXEL - INVALID ARGUMENTS');
                    return;
                }

                var params = [];
                params.push('id=' + encodeURIComponent(pixelId));
                switch (trackType) {
                    case 'PageView':
                    case 'ViewContent':
                    case 'Search':
                    case 'AddToCart':
                    case 'InitiateCheckout':
                    case 'AddPaymentInfo':
                    case 'Lead':
                    case 'CompleteRegistration':
                    case 'Purchase':
                    case 'AddToWishlist':
                        params.push('ev=' + encodeURIComponent(trackType));
                        break;
                    default:
                        console.error('RH PIXEL - BAD TRACKTYPE');
                        return;
                }

                params.push('dl=' + encodeURIComponent(document.location.href));
                if (document.referrer) params.push('rl=' + encodeURIComponent(document.referrer));
                params.push('if=false');
                params.push('ts=' + new Date().getTime());

                /* Custom parameters to string */
                if (typeof contentObj === 'object') {                                               //`contents : [{id, quantity, item_price}, ...]` to string
                    for (var u in contentObj) {
                        if (typeof contentObj[u] === 'object' && contentObj[u] instanceof Array) {  // `[{id, quantity, item_price}, ...]` to string
                            if (contentObj[u].length > 0) {
                                for (var y = 0; y < contentObj[u].length; y++) {
                                    if (typeof contentObj[u][y] === 'object') {                     // `{id, quantity, item_price}` to string
                                        contentObj[u][y] = JSON.stringify(contentObj[u][y]);
                                    }
                                    contentObj[u][y] = (contentObj[u][y] + '')  //JSON to string
                                        .replace(/^\s+|\s+$/gi, '')             //delete white characterts from begin on end of the string
                                        .replace(/\s+/gi, ' ')                  //replace white characters inside string to ' '
                                }
                                params.push('cd[' + u + ']=' + encodeURIComponent(contentObj[u].join(',')   //create JSON array - [param1,param2,param3]
                                    .replace(/^/gi, '[')
                                    .replace(/$/gi, ']')))
                            }
                        } else if (typeof contentObj[u] === 'string') {
                            params.push('cd[' + u + ']=' + encodeURIComponent(contentObj[u]));
                        }
                    }
                }

                var imgId = new Date().getTime();
                var img = document.createElement('img');
                img.id = 'fb_' + imgId, img.src = 'https://www.facebook.com/tr/?' + params.join('&'), img.width = 1, img.height = 1, img.style = 'display:none;';
                document.head.appendChild(img);
                window.setTimeout(function() { var t = document.getElementById('fb_' + imgId);
                    t.parentElement.removeChild(t); }, 1000);

            };
            // end of: initializing rheasy_fbq object
        })();
    </script><!-- ROIHunterEasy HeadSnippet end -->

  <!-- Masonry v3.10.0 -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff">

  
  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0191/2234/files/logo_zopim.png?v=1546365340" type="image/png" />
  

  <title>
    INDIANA Wooden Furniture: Choose Natural Wood Furniture Design Online | Saraf Furniture &ndash; Furniture Online: Buy Wooden Furniture for Every Home | Saraf Furniture
  </title>
  
  <meta name="description" content="Find rust-free heavy strength coated metal furniture like INDIANA thar bookcase, rock lamp table, coffee table, TV Unit, sideboard, coffee table, pod stool, dining set, console table bar stool / bar chair and more, all at a best price with free shipping." />
  
  <link rel="canonical" href="https://www.insaraf.com/collections/indiana" />

      
    <meta property="og:site_name" content="Furniture Online: Buy Wooden Furniture for Every Home | Saraf Furniture" />
    
        <meta property="og:type" content="website" />
        
    

  <meta name="google-site-verification" content="s25bxVGe8lNnbnoxHAC8NjzLhL-ORFlNsu75najsgNw">
<meta name="google-site-verification" content="DYSH4CIPF7sKnw7UuSRdSCyt_xYGc9R3sN82J6O0_Gk">
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/1912234/digital_wallets/dialog">
<link rel="alternate" type="application/atom+xml" title="Feed" href="/collections/indiana.atom" />
<link rel="next" href="/collections/indiana?page=2">
<link rel="alternate" type="application/json+oembed" href="https://www.insaraf.com/collections/indiana.oembed">
<script id="shopify-features" type="application/json">{"accessToken":"9f3ab174d1d95f82b19e9f27d547458f","betas":[],"domain":"www.insaraf.com","shopId":1912234,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "saraf-furniture.myshopify.com";
Shopify.currency = {"active":"INR","rate":"1.0"};
Shopify.theme = {"name":"Masonry 2019 Work with Options","id":43853643841,"theme_store_id":450,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=saraf-furniture.myshopify.com","https:\/\/orderstatus.w3apps.co\/js\/orderlookup.js?shop=saraf-furniture.myshopify.com","https:\/\/assets.cartactivity.com\/assets\/recent_activities.js?shop=saraf-furniture.myshopify.com","https:\/\/chimpstatic.com\/mcjs-connected\/js\/users\/77cdb105188418c1e3fdb51ff\/e78eaf47b81522e34a5b1c0e9.js?shop=saraf-furniture.myshopify.com","\/\/s3.amazonaws.com\/clean-themes-splat\/shops\/generated_scripts\/000\/000\/209\/original\/generated_script.js?1547788030\u0026shop=saraf-furniture.myshopify.com","https:\/\/files-shopify.mageworx.com\/productoptions\/source.js?mw_productoptions_t=1548358578\u0026shop=saraf-furniture.myshopify.com","https:\/\/recovermycart.com\/RememberMyCart\/Manage\/CartJS?shop=saraf-furniture.myshopify.com\u0026shop=saraf-furniture.myshopify.com","https:\/\/d3g420rgevyqxw.cloudfront.net\/cff.production.min.js?shop=saraf-furniture.myshopify.com","https:\/\/cdn-stamped-io.azureedge.net\/files\/widget.min.js?shop=saraf-furniture.myshopify.com","https:\/\/d3g420rgevyqxw.cloudfront.net\/cffOrderEdit.production.min.js?shop=saraf-furniture.myshopify.com","https:\/\/cdn.shopify.com\/s\/files\/1\/0191\/2234\/t\/40\/assets\/zendesk-embeddable.js?17785141279291812988\u0026shop=saraf-furniture.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":1912234,"offset":19800,"reqid":"51f7d940-6182-45ee-b18e-7019f00d6b92","pageurl":"www.insaraf.com\/collections\/indiana","u":"ae6548b9ca64","p":"collection","rtyp":"collection","rid":148878213};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "saraf-furniture.myshopify.com";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'INR';
var meta = {"page":{"pageType":"collection","resourceType":"collection","resourceId":148878213}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  <!-- Google Code for sales-cpc Conversion Page -->

/* <![CDATA[ */
var google_conversion_id = 967423690;
var google_conversion_language = “en”;
var google_conversion_format = “3";
var google_conversion_color = “ffffff”;
var google_conversion_label = “ApOmCJuxpmoQyu2mzQM”;
if (%=data-checkout-payment-due-target %) {
        var google_conversion_value = <%=data-checkout-payment-due-target %>;
}
        
var google_conversion_currency = “INR”;
var google_remarketing_only = false;
/* ]]> */



<noscript>
<div style=“display:inline;“>
<img height=“1” width=“1" style=“border-style:none;” alt=“” src=“//www.googleadservices.com/pagead/conversion/967423690/?value=1.00&amp;currency_code=INR&amp;label=ApOmCJuxpmoQyu2mzQM&amp;guid=ON&amp;script=0“/>
</div>
</noscript>
};
</script>
<script class="analytics">(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');


(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') === -1 &&
        window.location.pathname.indexOf('/thank_you') === -1) {
      return;
    }

    var twoMonthsFromNow = new Date(Date.now())
    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

    document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":1912234,"isMerchantRequest":null,"themeId":43853643841,"themeCityHash":11007099790029859289}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.01},"Google Analytics":{"trackingId":"UA-84018367-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Facebook Pixel":{"pixelIds":["1574418069462530"],"agent":"plshopify1.2"},"Google Gtag Pixel":{"conversionId":"967423690","eventLabels":[{"type":"page_view","action_label":"AW-967423690\/ZPGnCIao5ooBEMrtps0D"},{"type":"purchase","action_label":"AW-967423690\/dBPrCImo5ooBEMrtps0D"},{"type":"view_item","action_label":"AW-967423690\/W1UyCIyo5ooBEMrtps0D"},{"type":"add_to_cart","action_label":"AW-967423690\/Xa-kCI-o5ooBEMrtps0D"},{"type":"begin_checkout","action_label":"AW-967423690\/fId9CIqp5ooBEMrtps0D"},{"type":"search","action_label":"AW-967423690\/klLYCI2p5ooBEMrtps0D"},{"type":"add_payment_info","action_label":"AW-967423690\/N2slCJCp5ooBEMrtps0D"}],"targetCountry":"IN"},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    
      ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();
      
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"collection","resourceType":"collection","resourceId":148878213}
        );
      
      
        window.ShopifyAnalytics.lib.track(
          "Viewed Product Category",
          {"category":"Collection: indiana","nonInteraction":true}
        );
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-76ce6d7f3e50d4b8c05874c34d2ea1340c45e5babba61276dadcaeed488ca16a.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script integrity="sha256-2CaXyZcSpeipNzGEdTSRcCglaGi7BJGfF4y5LKK+gU8=" defer="defer" src="//cdn.shopify.com/s/assets/storefront/express_buttons-d82697c99712a5e8a93731847534917028256868bb04919f178cb92ca2be814f.js" crossorigin="anonymous"></script>
<script integrity="sha256-wVO039M3uMymMFjKDcSW90f3TAT7vRyPziQZqsSnEpc=" defer="defer" src="//cdn.shopify.com/s/assets/storefront/features-c153b4dfd337b8cca63058ca0dc496f747f74c04fbbd1c8fce2419aac4a71297.js" crossorigin="anonymous"></script>
<script defer="defer" src="//cdn.shopify.com/s/assets/themes_support/ga_urchin_forms-68ca1924c495cfc55dac65f4853e0c9a395387ffedc8fe58e0f2e677f95d7f23.js"></script>



  <link href="//cdn.shopify.com/s/files/1/0191/2234/t/38/assets/styles.scss.css?13577491605170241586" rel="stylesheet" type="text/css" media="all" />

  

  <script src="//cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
  <script>
    document.documentElement.className = ''; //Remove no-js class
    window.theme = window.theme || {};
    theme.jQuery = jQuery;
    theme.money_format = "\u003cspan class=money\u003eRs. {{amount}} \u003c\/span\u003e";
    theme.money_container = 'span.theme-money';
  </script>






<noscript>
    <style>
      .limoniapps-discountninja-block{animation:unset;}.limoniapps-discountninja-block:after{animation:unset;}.limoniapps-discountninja-block .limoniapps-discountninja-button-spinner:before{animation:unset;}
    </style>
</noscript>

<style>
  @charset "UTF-8";

  /*! animate.css -http://daneden.me/animate | Version - 3.5.2 | Licensed under the MIT license - http://opensource.org/licenses/MIT | Copyright (c) 2017 Daniel Eden */
  .animated{animation-duration:1s;animation-fill-mode:both
  }.animated.infinite{animation-iteration-count:infinite
  }.animated.hinge{animation-duration:2s}.animated.bounceIn,.animated.bounceOut,.animated.flipOutX,.animated.flipOutY{animation-duration:.75s}@keyframes bounce {0%,20%,53%,80%,to { animation - timing - function:cubic - bezier(.215, .61, .355, 1); transform: translateZ(0)}40%,43%{ animation - timing - function:cubic - bezier(.755, .05, .855, .06); transform: translate3d(0, -30px, 0)}70%{ animation - timing - function:cubic - bezier(.755, .05, .855, .06); transform: translate3d(0, -15px, 0)}90%{ transform: translate3d(0, -4px, 0)} }.bounce{animation-name:bounce;transform-origin:center bottom}@keyframes flash {0%,50%,to { opacity: 1}25%,75%{ opacity: 0} }.flash{animation-name:flash}@keyframes pulse {0%{ transform: scaleX(1)}50%{ transform: scale3d(1.05, 1.05, 1.05)} to { transform: scaleX(1)} }.pulse{animation-name:pulse}@keyframes rubberBand {0%{ transform: scaleX(1)}30%{ transform: scale3d(1.25, .75, 1)}40%{ transform: scale3d(.75, 1.25, 1)}50%{ transform: scale3d(1.15, .85, 1)}65%{ transform: scale3d(.95, 1.05, 1)}75%{ transform: scale3d(1.05, .95, 1)} to { transform: scaleX(1)} }.rubberBand{animation-name:rubberBand}@keyframes shake {0%,to { transform: translateZ(0)}10%,30%,50%,70%,90%{ transform: translate3d(-10px, 0, 0)}20%,40%,60%,80%{ transform: translate3d(10px, 0, 0)} }.shake{animation-name:shake}@keyframes headShake {0%{ transform: translateX(0)}6.5%{ transform: translateX(-6px) rotateY(-9deg)}18.5%{ transform: translateX(5px) rotateY(7deg)}31.5%{ transform: translateX(-3px) rotateY(-5deg)}43.5%{ transform: translateX(2px) rotateY(3deg)}50%{ transform: translateX(0)} }.headShake{animation-timing-function:ease-in-out;animation-name:headShake}@keyframes swing {20%{ transform: rotate(15deg)}40%{ transform: rotate(-10deg)}60%{ transform: rotate(5deg)}80%{ transform: rotate(-5deg)} to { transform: rotate(0deg)} }.swing{transform-origin:top center; animation-name:swing}@keyframes tada {0%{ transform: scaleX(1)}10%,20%{ transform: scale3d(.9, .9, .9) rotate(-3deg)}30%,50%,70%,90%{ transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)}40%,60%,80%{ transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)} to { transform: scaleX(1)} }.tada{animation-name:tada}@keyframes wobble {0%{ transform: none}15%{ transform: translate3d(-25 %, 0, 0) rotate(-5deg)}30%{ transform: translate3d(20 %, 0, 0) rotate(3deg)}45%{ transform: translate3d(-15 %, 0, 0) rotate(-3deg)}60%{ transform: translate3d(10 %, 0, 0) rotate(2deg)}75%{ transform: translate3d(-5 %, 0, 0) rotate(-1deg)} to { transform: none} }.wobble{animation-name:wobble}@keyframes jello {0%,11.1%,to { transform: none}22.2%{ transform: skewX(-12.5deg) skewY(-12.5deg)}33.3%{ transform: skewX(6.25deg) skewY(6.25deg)}44.4%{ transform: skewX(-3.125deg) skewY(-3.125deg)}55.5%{ transform: skewX(1.5625deg) skewY(1.5625deg)}66.6%{ transform: skewX(-.78125deg) skewY(-.78125deg)}77.7%{ transform: skewX(.390625deg) skewY(.390625deg)}88.8%{ transform: skewX(-.1953125deg) skewY(-.1953125deg)} }.jello{animation-name:jello;transform-origin:center}@keyframes bounceIn {0%,20%,40%,60%,80%,to { animation - timing - function:cubic - bezier(.215, .61, .355, 1)}0%{ opacity: 0; transform: scale3d(.3, .3, .3)}20%{ transform: scale3d(1.1, 1.1, 1.1)}40%{ transform: scale3d(.9, .9, .9)}60%{ opacity: 1; transform: scale3d(1.03, 1.03, 1.03)}80%{ transform: scale3d(.97, .97, .97)} to { opacity: 1; transform: scaleX(1)} }.bounceIn{animation-name:bounceIn}@keyframes bounceInDown {0%,60%,75%,90%,to { animation - timing - function:cubic - bezier(.215, .61, .355, 1)}0%{ opacity: 0; transform: translate3d(0, -3000px, 0)}60%{ opacity: 1; transform: translate3d(0, 25px, 0)}75%{ transform: translate3d(0, -10px, 0)}90%{ transform: translate3d(0, 5px, 0)} to { transform: none} }.bounceInDown{animation-name:bounceInDown}@keyframes bounceInLeft {0%,60%,75%,90%,to { animation - timing - function:cubic - bezier(.215, .61, .355, 1)}0%{ opacity: 0; transform: translate3d(-3000px, 0, 0)}60%{ opacity: 1; transform: translate3d(25px, 0, 0)}75%{ transform: translate3d(-10px, 0, 0)}90%{ transform: translate3d(5px, 0, 0)} to { transform: none} }.bounceInLeft{animation-name:bounceInLeft}@keyframes bounceInRight {0%,60%,75%,90%,to { animation - timing - function:cubic - bezier(.215, .61, .355, 1)}0%{ opacity: 0; transform: translate3d(3000px, 0, 0)}60%{ opacity: 1; transform: translate3d(-25px, 0, 0)}75%{ transform: translate3d(10px, 0, 0)}90%{ transform: translate3d(-5px, 0, 0)} to { transform: none} }.bounceInRight{animation-name:bounceInRight}@keyframes bounceInUp {0%,60%,75%,90%,to { animation - timing - function:cubic - bezier(.215, .61, .355, 1)}0%{ opacity: 0; transform: translate3d(0, 3000px, 0)}60%{ opacity: 1; transform: translate3d(0, -20px, 0)}75%{ transform: translate3d(0, 10px, 0)}90%{ transform: translate3d(0, -5px, 0)} to { transform: translateZ(0)} }.bounceInUp{animation-name:bounceInUp}@keyframes bounceOut {20%{ transform: scale3d(.9, .9, .9)}50%,55%{ opacity: 1; transform: scale3d(1.1, 1.1, 1.1)} to { opacity: 0; transform: scale3d(.3, .3, .3)} }.bounceOut{animation-name:bounceOut}@keyframes bounceOutDown {20%{ transform: translate3d(0, 10px, 0)}40%,45%{ opacity: 1; transform: translate3d(0, -20px, 0)} to { opacity: 0; transform: translate3d(0, 2000px, 0)} }.bounceOutDown{animation-name:bounceOutDown}@keyframes bounceOutLeft {20%{ opacity: 1; transform: translate3d(20px, 0, 0)} to { opacity: 0; transform: translate3d(-2000px, 0, 0)} }.bounceOutLeft{animation-name:bounceOutLeft}@keyframes bounceOutRight {20%{ opacity: 1; transform: translate3d(-20px, 0, 0)} to { opacity: 0; transform: translate3d(2000px, 0, 0)} }.bounceOutRight{animation-name:bounceOutRight}@keyframes bounceOutUp {20%{ transform: translate3d(0, -10px, 0)}40%,45%{ opacity: 1; transform: translate3d(0, 20px, 0)} to { opacity: 0; transform: translate3d(0, -2000px, 0)} }.bounceOutUp{animation-name:bounceOutUp}@keyframes fadeIn {0%{ opacity: 0} to { opacity: 1} }.fadeIn{animation-name:fadeIn}@keyframes fadeInDown {0%{ opacity: 0; transform: translate3d(0, -100 %, 0)} to { opacity: 1; transform: none} }.fadeInDown{animation-name:fadeInDown}@keyframes fadeInDownBig {0%{ opacity: 0; transform: translate3d(0, -2000px, 0)} to { opacity: 1; transform: none} }.fadeInDownBig{animation-name:fadeInDownBig}@keyframes fadeInLeft {0%{ opacity: 0; transform: translate3d(-100 %, 0, 0)} to { opacity: 1; transform: none} }.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInLeftBig {0%{ opacity: 0; transform: translate3d(-2000px, 0, 0)} to { opacity: 1; transform: none} }.fadeInLeftBig{animation-name:fadeInLeftBig}@keyframes fadeInRight {0%{ opacity: 0; transform: translate3d(100 %, 0, 0)} to { opacity: 1; transform: none} }.fadeInRight{animation-name:fadeInRight}@keyframes fadeInRightBig {0%{ opacity: 0; transform: translate3d(2000px, 0, 0)} to { opacity: 1; transform: none} }.fadeInRightBig{animation-name:fadeInRightBig}@keyframes fadeInUp {0%{ opacity: 0; transform: translate3d(0, 100 %, 0)} to { opacity: 1; transform: none} }.fadeInUp{animation-name:fadeInUp}@keyframes fadeInUpBig {0%{ opacity: 0; transform: translate3d(0, 2000px, 0)} to { opacity: 1; transform: none} }.fadeInUpBig{animation-name:fadeInUpBig}@keyframes fadeOut {0%{ opacity: 1} to { opacity: 0} }.fadeOut{animation-name:fadeOut}@keyframes fadeOutDown {0%{ opacity: 1} to { opacity: 0; transform: translate3d(0, 100 %, 0)} }.fadeOutDown{animation-name:fadeOutDown}@keyframes fadeOutDownBig {0%{ opacity: 1} to { opacity: 0; transform: translate3d(0, 2000px, 0)} }.fadeOutDownBig{animation-name:fadeOutDownBig}@keyframes fadeOutLeft {0%{ opacity: 1} to { opacity: 0; transform: translate3d(-100 %, 0, 0)} }.fadeOutLeft{animation-name:fadeOutLeft}@keyframes fadeOutLeftBig {0%{ opacity: 1} to { opacity: 0; transform: translate3d(-2000px, 0, 0)} }.fadeOutLeftBig{animation-name:fadeOutLeftBig}@keyframes fadeOutRight {0%{ opacity: 1} to { opacity: 0; transform: translate3d(100 %, 0, 0)} }.fadeOutRight{animation-name:fadeOutRight}@keyframes fadeOutRightBig {0%{ opacity: 1} to { opacity: 0; transform: translate3d(2000px, 0, 0)} }.fadeOutRightBig{animation-name:fadeOutRightBig}@keyframes fadeOutUp {0%{ opacity: 1} to { opacity: 0; transform: translate3d(0, -100 %, 0)} }.fadeOutUp{animation-name:fadeOutUp}@keyframes fadeOutUpBig {0%{ opacity: 1} to { opacity: 0; transform: translate3d(0, -2000px, 0)} }.fadeOutUpBig{animation-name:fadeOutUpBig}@keyframes flip {0%{ transform: perspective(400px) rotateY(-1turn); animation - timing - function:ease -out}40%{ transform: perspective(400px) translateZ(150px) rotateY(-190deg); animation - timing - function:ease -out}50%{ transform: perspective(400px) translateZ(150px) rotateY(-170deg); animation - timing - function:ease -in}80%{ transform: perspective(400px) scale3d(.95, .95, .95); animation - timing - function:ease -in} to { transform: perspective(400px); animation - timing - function:ease -in} }.animated.flip{-webkit-backface-visibility:visible;backface-visibility:visible;animation-name:flip}@keyframes flipInX {0%{ transform: perspective(400px) rotateX(90deg); animation - timing - function:ease -in; opacity: 0}40%{ transform: perspective(400px) rotateX(-20deg); animation - timing - function:ease -in}60%{ transform: perspective(400px) rotateX(10deg); opacity: 1}80%{ transform: perspective(400px) rotateX(-5deg)} to { transform: perspective(400px)} }.flipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInX}@keyframes flipInY {0%{ transform: perspective(400px) rotateY(90deg); animation - timing - function:ease -in; opacity: 0}40%{ transform: perspective(400px) rotateY(-20deg); animation - timing - function:ease -in}60%{ transform: perspective(400px) rotateY(10deg); opacity: 1}80%{ transform: perspective(400px) rotateY(-5deg)} to { transform: perspective(400px)} }.flipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInY}@keyframes flipOutX {0%{ transform: perspective(400px)}30%{ transform: perspective(400px) rotateX(-20deg); opacity: 1} to { transform: perspective(400px) rotateX(90deg); opacity: 0} }.flipOutX{animation-name:flipOutX;-webkit-backface-visibility:visible!important;backface-visibility:visible!important}@keyframes flipOutY {0%{ transform: perspective(400px)}30%{ transform: perspective(400px) rotateY(-15deg); opacity: 1} to { transform: perspective(400px) rotateY(90deg); opacity: 0} }.flipOutY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipOutY}@keyframes lightSpeedIn {0%{ transform: translate3d(100 %, 0, 0) skewX(-30deg); opacity: 0}60%{ transform: skewX(20deg); opacity: 1}80%{ transform: skewX(-5deg); opacity: 1} to { transform: none; opacity: 1} }.lightSpeedIn{animation-name:lightSpeedIn;animation-timing-function:ease-out}@keyframes lightSpeedOut {0%{ opacity: 1} to { transform: translate3d(100 %, 0, 0) skewX(30deg); opacity: 0} }.lightSpeedOut{animation-name:lightSpeedOut;animation-timing-function:ease-in}@keyframes rotateIn {0%{ transform - origin:center; transform: rotate(-200deg); opacity: 0} to { transform - origin:center; transform: none; opacity: 1} }.rotateIn{animation-name:rotateIn}@keyframes rotateInDownLeft {0%{ transform - origin:left bottom; transform: rotate(-45deg); opacity: 0} to { transform - origin:left bottom; transform: none; opacity: 1} }.rotateInDownLeft{animation-name:rotateInDownLeft}@keyframes rotateInDownRight {0%{ transform - origin:right bottom; transform: rotate(45deg); opacity: 0} to { transform - origin:right bottom; transform: none; opacity: 1} }.rotateInDownRight{animation-name:rotateInDownRight}@keyframes rotateInUpLeft {0%{ transform - origin:left bottom; transform: rotate(45deg); opacity: 0} to { transform - origin:left bottom; transform: none; opacity: 1} }.rotateInUpLeft{animation-name:rotateInUpLeft}@keyframes rotateInUpRight {0%{ transform - origin:right bottom; transform: rotate(-90deg); opacity: 0} to { transform - origin:right bottom; transform: none; opacity: 1} }.rotateInUpRight{animation-name:rotateInUpRight}@keyframes rotateOut {0%{ transform - origin:center; opacity: 1} to { transform - origin:center; transform: rotate(200deg); opacity: 0} }.rotateOut{animation-name:rotateOut}@keyframes rotateOutDownLeft {0%{ transform - origin:left bottom; opacity: 1} to { transform - origin:left bottom; transform: rotate(45deg); opacity: 0} }.rotateOutDownLeft{animation-name:rotateOutDownLeft}@keyframes rotateOutDownRight {0%{ transform - origin:right bottom; opacity: 1} to { transform - origin:right bottom; transform: rotate(-45deg); opacity: 0} }.rotateOutDownRight{animation-name:rotateOutDownRight}@keyframes rotateOutUpLeft {0%{ transform - origin:left bottom; opacity: 1} to { transform - origin:left bottom; transform: rotate(-45deg); opacity: 0} }.rotateOutUpLeft{animation-name:rotateOutUpLeft}@keyframes rotateOutUpRight {0%{ transform - origin:right bottom; opacity: 1} to { transform - origin:right bottom; transform: rotate(90deg); opacity: 0} }.rotateOutUpRight{animation-name:rotateOutUpRight}@keyframes hinge {0%{ transform - origin:top left; animation - timing - function:ease -in-out}20%,60%{ transform: rotate(80deg); transform - origin:top left; animation - timing - function:ease -in-out}40%,80%{ transform: rotate(60deg); transform - origin:top left; animation - timing - function:ease -in-out; opacity: 1} to { transform: translate3d(0, 700px, 0); opacity: 0} }.hinge{animation-name:hinge}@keyframes jackInTheBox {0%{ opacity: 0; transform: scale(.1) rotate(30deg); transform - origin:center bottom}50%{ transform: rotate(-10deg)}70%{ transform: rotate(3deg)} to { opacity: 1; transform: scale(1)} }.jackInTheBox{animation-name:jackInTheBox}@keyframes rollIn {0%{ opacity: 0; transform: translate3d(-100 %, 0, 0) rotate(-120deg)} to { opacity: 1; transform: none} }.rollIn{animation-name:rollIn}@keyframes rollOut {0%{ opacity: 1} to { opacity: 0; transform: translate3d(100 %, 0, 0) rotate(120deg)} }.rollOut{animation-name:rollOut}@keyframes zoomIn {0%{ opacity: 0; transform: scale3d(.3, .3, .3)}50%{ opacity: 1} }.zoomIn{animation-name:zoomIn}@keyframes zoomInDown {0%{ opacity: 0; transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0); animation - timing - function:cubic - bezier(.55, .055, .675, .19)}60%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0); animation - timing - function:cubic - bezier(.175, .885, .32, 1)} }.zoomInDown{animation-name:zoomInDown}@keyframes zoomInLeft {0%{ opacity: 0; transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0); animation - timing - function:cubic - bezier(.55, .055, .675, .19)}60%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0); animation - timing - function:cubic - bezier(.175, .885, .32, 1)} }.zoomInLeft{animation-name:zoomInLeft}@keyframes zoomInRight {0%{ opacity: 0; transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0); animation - timing - function:cubic - bezier(.55, .055, .675, .19)}60%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0); animation - timing - function:cubic - bezier(.175, .885, .32, 1)} }.zoomInRight{animation-name:zoomInRight}@keyframes zoomInUp {0%{ opacity: 0; transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0); animation - timing - function:cubic - bezier(.55, .055, .675, .19)}60%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0); animation - timing - function:cubic - bezier(.175, .885, .32, 1)} }.zoomInUp{animation-name:zoomInUp}@keyframes zoomOut {0%{ opacity: 1}50%{ opacity: 0; transform: scale3d(.3, .3, .3)} to { opacity: 0} }.zoomOut{animation-name:zoomOut}@keyframes zoomOutDown {40%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0); animation - timing - function:cubic - bezier(.55, .055, .675, .19)} to { opacity: 0; transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0); transform - origin:center bottom; animation - timing - function:cubic - bezier(.175, .885, .32, 1)} }.zoomOutDown{animation-name:zoomOutDown}@keyframes zoomOutLeft {40%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)} to { opacity: 0; transform: scale(.1) translate3d(-2000px, 0, 0); transform - origin:left center} }.zoomOutLeft{animation-name:zoomOutLeft}@keyframes zoomOutRight {40%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)} to { opacity: 0; transform: scale(.1) translate3d(2000px, 0, 0); transform - origin:right center} }.zoomOutRight{animation-name:zoomOutRight}@keyframes zoomOutUp {40%{ opacity: 1; transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0); animation - timing - function:cubic - bezier(.55, .055, .675, .19)} to { opacity: 0; transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0); transform - origin:center bottom; animation - timing - function:cubic - bezier(.175, .885, .32, 1)} }.zoomOutUp{animation-name:zoomOutUp}@keyframes slideInDown {0%{ transform: translate3d(0, -100 %, 0); visibility: visible} to { transform: translateZ(0)} }.slideInDown{animation-name:slideInDown}@keyframes slideInLeft {0%{ transform: translate3d(-100 %, 0, 0); visibility: visible} to { transform: translateZ(0)} }.slideInLeft{animation-name:slideInLeft}@keyframes slideInRight {0%{ transform: translate3d(100 %, 0, 0); visibility: visible} to { transform: translateZ(0)} }.slideInRight{animation-name:slideInRight}@keyframes slideInUp {0%{ transform: translate3d(0, 100 %, 0); visibility: visible} to { transform: translateZ(0)} }.slideInUp{animation-name:slideInUp}@keyframes slideOutDown {0%{ transform: translateZ(0)} to { visibility: hidden; transform: translate3d(0, 100 %, 0)} }.slideOutDown{animation-name:slideOutDown}@keyframes slideOutLeft {0%{ transform: translateZ(0)} to { visibility: hidden; transform: translate3d(-100 %, 0, 0)} }.slideOutLeft{animation-name:slideOutLeft}@keyframes slideOutRight {0%{ transform: translateZ(0)} to { visibility: hidden; transform: translate3d(100 %, 0, 0)} }.slideOutRight{animation-name:slideOutRight}@keyframes slideOutUp {0%{ transform: translateZ(0)} to { visibility: hidden; transform: translate3d(0, -100 %, 0)} }.slideOutUp{animation-name:slideOutUp}

  /*! Discount Ninja Building Blocks */
 .limoniapps-popup{padding:0;margin:0;box-sizing:border-box;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99999;outline:0;height:100%;word-break:break-word}.Polaris-Preview-Mobile .limoniapps-popup{position:unset}.limoniapps-popup .limoniapps-popup-vertical-alignment-helper{display:table;height:100%;width:100%}.limoniapps-popup-vertical-align-center{display:table-cell;vertical-align:middle;height:100%}@media(max-width:500px){.limoniapps-popup-vertical-align-center{vertical-align:top}}@media(max-width:500px){.limoniapps-popup .limoniapps-content{margin-top:10px}}.limoniapps-popup:not(.limoniapps-size-fullscreen) .limoniapps-popup-vertical-align-center{padding:0 15px}.limoniapps-popup .limoniapps-content{border:solid 1px #000;position:relative;background-color:#fff;margin:0 auto;display:flex;background-repeat:no-repeat;background-size:cover;background-position:center center}.limoniapps-popup .limoniapps-body{width:100%;display:flex;flex-direction:column;padding:20px;z-index:1;text-align:center}.limoniapps-popup:not(.limoniapps-action-hanging) .limoniapps-body{position:relative}@media(max-width:500px){.limoniapps-popup .limoniapps-body{padding-left:10px;padding-right:10px}}@media(max-width:500px) and (max-height:600px){.limoniapps-popup .limoniapps-body{max-height:450px}}@media(max-width:500px) and (max-height:700px) and (min-height:601px){.limoniapps-popup .limoniapps-body{max-height:550px}}@media(max-width:500px) and (max-height:800px) and (min-height:701px){.limoniapps-popup .limoniapps-body{max-height:650px}}.limoniapps-popup.limoniapps-size-fullscreen .limoniapps-body{justify-content:center}.limoniapps-popup .limoniapps-close{position:absolute;font-size:20px;padding:0;height:30px;width:30px;line-height:29px;top:5px;right:5px;border-width:0;outline:0;text-align:center;cursor:pointer;font-weight:100;z-index:2}.limoniapps-popup .limoniapps-middle-pane{display:inline-block;margin-bottom:10px}.limoniapps-popup.limoniapps-size-small .limoniapps-middle-pane{width:100%;height:150px}.limoniapps-popup.limoniapps-size-medium .limoniapps-middle-pane{width:100%;height:200px}.limoniapps-popup.limoniapps-size-large .limoniapps-middle-pane{width:100%;height:300px}.limoniapps-popup.limoniapps-size-fullscreen .limoniapps-middle-pane{width:100%;height:300px}.limoniapps-popup.limoniapps-size-small.limoniapps-align-left .limoniapps-middle-pane,.limoniapps-popup.limoniapps-size-small.limoniapps-align-right .limoniapps-middle-pane{height:140px;width:100%}.limoniapps-popup.limoniapps-size-medium.limoniapps-align-left .limoniapps-middle-pane,.limoniapps-popup.limoniapps-size-medium.limoniapps-align-right .limoniapps-middle-pane{height:200px;width:100%}.limoniapps-popup.limoniapps-size-large.limoniapps-align-left .limoniapps-middle-pane,.limoniapps-popup.limoniapps-size-large.limoniapps-align-right .limoniapps-middle-pane{height:260px;width:100%}.limoniapps-popup .limoniapps-image{padding-top:50%;padding-bottom:50%}.limoniapps-popup.limoniapps-align-left .limoniapps-body{padding:20px;text-align:left}.limoniapps-popup.limoniapps-align-right .limoniapps-body{padding:20px;text-align:right}@media(min-width:400px){.limoniapps-popup.limoniapps-size-small.limoniapps-align-right .limoniapps-body{margin-left:50%}.limoniapps-popup.limoniapps-size-small.limoniapps-align-left .limoniapps-body,.limoniapps-popup.limoniapps-size-small.limoniapps-align-right .limoniapps-body{width:50%}}@media(min-width:550px){.limoniapps-popup.limoniapps-size-medium.limoniapps-align-right .limoniapps-body{margin-left:50%}.limoniapps-popup.limoniapps-size-medium.limoniapps-align-left .limoniapps-body,.limoniapps-popup.limoniapps-size-medium.limoniapps-align-right .limoniapps-body{width:50%}}@media(min-width:600px){.limoniapps-popup.limoniapps-size-large.limoniapps-align-right .limoniapps-body{margin-left:50%}.limoniapps-popup.limoniapps-size-large.limoniapps-align-left .limoniapps-body,.limoniapps-popup.limoniapps-size-large.limoniapps-align-right .limoniapps-body{width:50%}.limoniapps-popup.limoniapps-size-fullscreen.limoniapps-align-right .limoniapps-body{margin-left:50%}.limoniapps-popup.limoniapps-size-fullscreen.limoniapps-align-left .limoniapps-body,.limoniapps-popup.limoniapps-size-fullscreen.limoniapps-align-right .limoniapps-body{width:50%}}.limoniapps-popup.limoniapps-size-small .limoniapps-content{max-width:350px}.limoniapps-popup.limoniapps-size-small.limoniapps-shape-square .limoniapps-content{min-height:350px}.limoniapps-popup.limoniapps-size-small.limoniapps-shape-rectangle .limoniapps-content{min-height:175px}.limoniapps-popup.limoniapps-size-medium .limoniapps-content{max-width:500px}.limoniapps-popup.limoniapps-size-medium.limoniapps-shape-square .limoniapps-content{min-height:500px}.limoniapps-popup.limoniapps-size-medium.limoniapps-shape-rectangle .limoniapps-content{min-height:250px}.limoniapps-popup.limoniapps-size-large .limoniapps-content{max-width:650px}.limoniapps-popup.limoniapps-size-large.limoniapps-shape-square .limoniapps-content{min-height:650px}.limoniapps-popup.limoniapps-size-large.limoniapps-shape-rectangle .limoniapps-content{min-height:325px}@media(max-width:500px){.limoniapps-popup.limoniapps-size-small .limoniapps-content,.limoniapps-popup.limoniapps-size-small.limoniapps-shape-rectangle .limoniapps-content,.limoniapps-popup.limoniapps-size-small.limoniapps-shape-square .limoniapps-content,.limoniapps-popup.limoniapps-size-medium .limoniapps-content,.limoniapps-popup.limoniapps-size-medium.limoniapps-shape-square .limoniapps-content,.limoniapps-popup.limoniapps-size-medium.limoniapps-shape-rectangle .limoniapps-content{max-width:100%;max-height:60%;min-height:50%}.limoniapps-popup.limoniapps-size-large .limoniapps-content,.limoniapps-popup.limoniapps-size-large.limoniapps-shape-square .limoniapps-content,.limoniapps-popup.limoniapps-size-large.limoniapps-shape-rectangle .limoniapps-content{max-width:100%;max-height:80%;min-height:80%}}.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-small .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-small.limoniapps-shape-rectangle .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-small.limoniapps-shape-square .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-medium .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-medium.limoniapps-shape-square .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-medium.limoniapps-shape-rectangle .limoniapps-content{max-width:100%;max-height:60%;min-height:50%}.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-large .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-large.limoniapps-shape-square .limoniapps-content,.Polaris-Preview-Mobile .limoniapps-popup.limoniapps-size-large.limoniapps-shape-rectangle .limoniapps-content{max-width:100%;max-height:80%;min-height:80%}.limoniapps-popup.limoniapps-size-fullscreen .limoniapps-content{width:100%;height:100%}.limoniapps-popup .limoniapps-footer{width:100%}.limoniapps-popup .limoniapps-email-pane{margin:15px 0 30px 0}.limoniapps-popup.limoniapps-size-fullscreen .limoniapps-email-pane{margin:30px 0 30px 0}.limoniapps-popup .limoniapps-email-pane input{border-width:0 0 1px 0;border-style:solid;padding:5px 0;line-height:35px;height:35px;font-size:16px;max-width:300px;outline:0;width:100%}.limoniapps-popup.limoniapps-size-medium .limoniapps-email-pane input{font-size:14px}.limoniapps-popup.limoniapps-size-small .limoniapps-email-pane input{font-size:12px}.limoniapps-popup .limoniapps-action{white-space:nowrap;margin:0 -5px}.limoniapps-popup.limoniapps-action-hanging .limoniapps-action{position:absolute;display:inline-block;bottom:-20px;right:20px;margin-bottom:0}.limoniapps-popup.limoniapps-action-hanging .limoniapps-lnk-dismiss{position:absolute;display:block;bottom:-45px;right:20px}.limoniapps-action-btn{padding:15px 40px 15px 40px;outline:0;margin:0 5px;cursor:pointer;border-style:solid}.limoniapps-action-btn.small{padding:5px 10px 5px 10px}.limoniapps-action-btn.medium{padding:10px 20px 10px 20px}.limoniapps-action-btn.large{padding:15px 40px 15px 40px}.limoniapps-action-btn:hover{opacity:.8}.limoniapps-action-btn.limoniapps-action-btn-iconleft{position:relative}.limoniapps-action-btn.limoniapps-action-btn-iconleft .limoniapps-fa-icon{background-color:#000;opacity:.2;display:inline-block;padding-right:10px;position:absolute;left:0;top:0;height:100%;border-radius:inherit;border-top-right-radius:0;border-bottom-right-radius:0}.limoniapps-action-btn.small.limoniapps-action-btn-iconleft .limoniapps-fa-icon{width:30px}.limoniapps-action-btn.medium.limoniapps-action-btn-iconleft .limoniapps-fa-icon{width:40px}.limoniapps-action-btn.large.limoniapps-action-btn-iconleft .limoniapps-fa-icon{width:50px}.limoniapps-action-btn.limoniapps-action-btn-iconleft .limoniapps-fa-icon .fa{position:absolute}.limoniapps-action-btn.small.limoniapps-action-btn-iconleft .limoniapps-fa-icon .fa{font-size:16px;position:absolute;left:calc(50% - 8px);top:calc(50% - 8px)}.limoniapps-action-btn.medium.limoniapps-action-btn-iconleft .limoniapps-fa-icon .fa{font-size:18px;position:absolute;left:calc(50% - 9px);top:calc(50% - 9px)}.limoniapps-action-btn.large.limoniapps-action-btn-iconleft .limoniapps-fa-icon .fa{font-size:20px;position:absolute;left:calc(50% - 10px);top:calc(50% - 10px)}.limoniapps-action-btn-label{white-space:normal}.limoniapps-action-btn.small.limoniapps-action-btn-iconleft .limoniapps-action-btn-label{padding-left:30px}.limoniapps-action-btn.medium.limoniapps-action-btn-iconleft .limoniapps-action-btn-label{padding-left:40px}.limoniapps-action-btn.large.limoniapps-action-btn-iconleft .limoniapps-action-btn-label{padding-left:50px}.limoniapps-popup .limoniapps-lnk-dismiss{padding-bottom:1px;display:block;cursor:pointer}.limoniapps-popup.limoniapps-size-small .limoniapps-lnk-dismiss{font-size:10px}.limoniapps-popup.limoniapps-size-medium .limoniapps-lnk-dismiss{font-size:12px}.limoniapps-popup.limoniapps-size-large .limoniapps-lnk-dismiss{font-size:14px}.limoniapps-popup .limoniapps-box{width:100%;display:table;height:calc(100% - 50px);overflow:hidden}.limoniapps-popup.limoniapps-content-bottom .limoniapps-box{display:flex;flex-direction:column;justify-content:flex-end}.limoniapps-popup.limoniapps-overlay-4 .limoniapps-content:before{background-color:rgba(0,0,0,.2);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-3 .limoniapps-content:before{background-color:rgba(0,0,0,.4);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-2 .limoniapps-content:before{background-color:rgba(0,0,0,.6);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-1 .limoniapps-content:before{background-color:rgba(0,0,0,.8);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-5 .limoniapps-content:before{background-color:rgba(255,255,255,0);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-6 .limoniapps-content:before{background-color:rgba(255,255,255,.2);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-7 .limoniapps-content:before{background-color:rgba(255,255,255,.4);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-8 .limoniapps-content:before{background-color:rgba(255,255,255,.6);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup.limoniapps-overlay-9 .limoniapps-content:before{background-color:rgba(255,255,255,.8);content:' ';height:100%;width:100%;position:absolute;left:0;top:0;right:0;bottom:0}.limoniapps-popup .limoniapps-message-body-content{display:table}.limoniapps-message-body-content-row{display:table-row}.limoniapps-message-body-content-text{display:table-cell}.limoniapps-message-body-content-image{display:table-cell;vertical-align:top;height:100%}.limoniapps-message-body-cell{display:table-cell;vertical-align:middle}.limoniapps-message-body-inner-table{display:table}.limoniapps-message-body-inner-row{display:table-row;height:100%}.limoniapps-message-body-inner-left{display:table-cell;vertical-align:top;height:100%}.limoniapps-message-body-inner-right{display:table-cell;vertical-align:top;height:100%}.limoniapps-message-body-inner-right-table{display:table}.limoniapps-message-body-inner-right-headerrow{display:table-row;height:20%}.limoniapps-message-body-content-right-headercell{display:table-cell;vertical-align:middle}.limoniapps-message-body-inner-right-bodyrow{display:table-row;height:20%}.limoniapps-message-body-inner-right-bodycell{display:table-cell;vertical-align:middle}.limoniapps-message-body-inner-right-footerrow{display:table-row;height:20%}.limoniapps-message-body-content-right-footercell{display:table-cell;vertical-align:middle}.limoniapps-message-body-inner-left-table{display:table}.limoniapps-message-body-inner-left-headerrow{display:table-row;height:20%}.limoniapps-message-body-content-left-headercell{display:table-cell;vertical-align:middle}.limoniapps-message-body-inner-left-bodyrow{display:table-row;height:20%}.limoniapps-message-body-content-left-bodycell{display:table-cell;vertical-align:middle}.limoniapps-message-body-inner-left-footerrow{display:table-row;height:20%}.limoniapps-message-body-content-left-footercell{display:table-cell;vertical-align:middle}.limoniapps-popup .limoniapps-message-body-content{display:table}.limoniapps-popup .limoniapps-message-header-row{height:20%;display:table-row}.limoniapps-popup .limoniapps-message-body-row{height:60%;display:table-row;padding:10px 0}.limoniapps-popup .limoniapps-message-footer-row{height:20%;display:table-row}.limoniapps-popup .limoniapps-message-header{display:table-cell;vertical-align:middle}.limoniapps-popup .limoniapps-message-body{display:table-cell;vertical-align:middle}.limoniapps-popup .limoniapps-message-footer{display:table-cell;vertical-align:middle}.limoniapps-popup.limoniapps-size-small .limoniapps-message-header{font-size:18px;margin-bottom:10px}.limoniapps-popup.limoniapps-size-medium .limoniapps-message-header{font-size:22px;margin-bottom:15px}.limoniapps-popup.limoniapps-size-large .limoniapps-message-header{font-size:26px;margin-bottom:20px}.limoniapps-popup.limoniapps-size-fullscreen .limoniapps-message-header{font-size:30px;margin-bottom:30px}.limoniapps-message-header .limoniapps-fa-icon{display:inline-block}.limoniapps-notify-default{border-style:solid;width:400px;box-sizing:border-box;position:relative;word-break:break-word}@media(max-width:500px){.limoniapps-notify-default{width:calc(100% - 40px);max-width:initial}}.limoniapps-notify-default .limoniapps-box{display:flex;font-size:0;border-radius:inherit;overflow:hidden}.limoniapps-notify-default .limoniapps-col-image{padding:12px;border-radius:inherit;border-top-right-radius:0;border-bottom-right-radius:0;border-style:solid;border-width:0;width:30%}.limoniapps-notify-default .limoniapps-col-image>.limoniapps-image{width:100%;padding-top:100%;background-position:center;background-size:cover;background-repeat:no-repeat;border-style:solid}.limoniapps-notify-default .limoniapps-col-info{font-size:14px;padding:12px;width:100%;overflow:hidden}.limoniapps-notify-default .limoniapps-title{margin-bottom:5px}.limoniapps-notify-default.limoniapps-closable .limoniapps-title{margin-right:20px}.limoniapps-notify-default>.limoniapps-message{font-size:80%}.limoniapps-notify-default .limoniapps-actions .limoniapps-action-btn{margin:15px 10px 0 0;outline:0}.limoniapps-notify-default .limoniapps-actions .limoniapps-action-btn:last-child{margin-right:0}.limoniapps-notify-default .limoniapps-actions .limoniapps-action-btn:hover{cursor:pointer}.limoniapps-notification-buttons{position:absolute;padding:0;height:25px;width:25px;line-height:24px;top:0 !important;right:20px !important;outline:0}.limoniapps-notification-buttons .limoniapps-notification-button-left{position:relative;float:right;cursor:pointer}.limoniapps-notification-buttons .limoniapps-notification-button-right{position:relative;float:right;cursor:pointer}.limoniapps-notify-default ul{margin-bottom:0}.limoniapps-sticky-topbar{width:100%;top:0;left:0;right:0;word-break:break-word}.limoniapps-sticky-topbar .limoniapps-box{width:100%;font-size:0}@media(max-width:500px){.limoniapps-sticky-topbar .limoniapps-box,.limoniapps-sticky-topbar.limoniapps-closable .limoniapps-box{padding-right:0}}@media(min-width:501px){.limoniapps-sticky-topbar .limoniapps-box{display:flex}}.limoniapps-sticky-topbar .limoniapps-box .limoniapps-content{display:flex;width:100%;background-size:cover;background-position:center;background-repeat:no-repeat}.limoniapps-sticky-topbar .limoniapps-close{position:absolute;font-size:20px;padding:0;height:35px;width:35px;line-height:34px;top:0 !important;right:0 !important;background-color:transparent;border-width:0;color:rgba(0,0,0,.7);border-top-right-radius:5px;outline:0;display:none;z-index:1}.limoniapps-sticky-topbar.limoniapps-closable .limoniapps-close{display:block}.limoniapps-sticky-topbar .limoniapps-close:hover{cursor:pointer;color:rgba(0,0,0,.9)}.limoniapps-sticky-topbar .limoniapps-col-image{background-color:#eee;min-width:80px;margin:0 20px 0 0;padding:12px}@media(max-width:500px){.limoniapps-sticky-topbar .limoniapps-col-image{min-width:80px}}.limoniapps-sticky-topbar .limoniapps-image{width:56px;height:56px;background-size:cover;background-position:center;background-repeat:no-repeat}.limoniapps-sticky-topbar.limoniapps-image-circle .limoniapps-image{border-radius:50%}@media(max-width:500px){.limoniapps-sticky-topbar .limoniapps-image{width:56px;height:56px}}.limoniapps-sticky-topbar .limoniapps-col-info{width:100%;padding:10px 20px;display:flex;align-items:center}.limoniapps-sticky-topbar .limoniapps-col-image+.limoniapps-col-info{padding-left:0}.limoniapps-sticky-topbar .limoniapps-col-info .limoniapps-info{width:100%}.limoniapps-sticky-topbar .limoniapps-col-info .limoniapps-info .limoniapps-title{margin-bottom:5px;width:100%}.limoniapps-sticky-topbar .limoniapps-col-info .limoniapps-info .limoniapps-message{width:100%;padding-right:30px}@media(max-width:500px){.limoniapps-sticky-topbar .limoniapps-col-info{padding-right:35px}}.limoniapps-sticky-topbar .limoniapps-col-actions{white-space:nowrap;padding:10px 5px;display:flex;align-items:center}@media(min-width:501px){.limoniapps-sticky-topbar .limoniapps-col-actions{padding-right:35px}}.limoniapps-sticky-topbar .limoniapps-col-actions .limoniapps-action{display:inline-block;padding:0 5px}.limoniapps-sticky-topbar .limoniapps-col-actions .limoniapps-action .limoniapps-action-btn{margin-left:10px;border-radius:3px;box-shadow:0 2px 1px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3);outline:0}@media(max-width:500px){.limoniapps-sticky-topbar .limoniapps-col-actions .limoniapps-action{width:50%}.limoniapps-sticky-topbar .limoniapps-col-actions .limoniapps-action-btn{width:100%}}.limoniapps-sticky-topbar .limoniapps-col-actions .limoniapps-action-btn:first-child{margin-left:0}.limoniapps-background-twocolors{position:absolute;top:0;left:0;right:0;margin:auto;z-index:-1;overflow:hidden}.limoniapps-background-singlecolor{position:absolute;top:0;left:0;right:0;margin:auto;z-index:-2;overflow:hidden}.limoniapps-stick-to-top{top:0;position:fixed;left:0;width:100%;overflow:hidden;box-sizing:border-box;z-index:99998}.limoniapps-stick-to-bottom{bottom:0;position:fixed;left:0;width:100%;overflow:hidden;box-sizing:border-box;z-index:99998}#limoniapps-discountninja-stickybar-wrapper p,#limoniapps-discountninja-stickybar-wrapper span{margin:0;padding:0}.limoniapps-notify-default p,.limoniapps-notify-default span{margin:0;padding:0}.limoniapps-popup p,.limoniapps-popup span{margin:0;padding:0}a.limoniapps-poweredby:visited,a.limoniapps-poweredby:hover{text-align:right !important;font-size:14px !important;margin:0 !important;color:#fff !important;opacity:1 !important;text-decoration-line:underline !important;text-decoration:underline !important;display:block}.limoniapps-poweredby{text-align:right !important;font-size:14px !important;margin:0 !important;color:#fff !important;opacity:.2 !important;text-decoration-line:underline !important;text-decoration:underline !important;display:block}.limoniapps-notify-poweredby{margin-bottom:-12px;margin-top:5px}.limoniapps-stickybar-poweredby{margin-bottom:-10px;margin-top:5px;position:absolute;bottom:10px;right:10px}.limoniapps-popup-poweredby{position:absolute;top:-22px;right:0}.limoniapps-poweredby-hidden{display:none !important}@-webkit-keyframes animationLimoniAppsBlock{0%{opacity:.2;pointer-events:none}99%{opacity:.2;pointer-events:none}100%{opacity:1;pointer-events:all}}@-moz-keyframes animationLimoniAppsBlock{0%{opacity:.2;pointer-events:none}99%{opacity:.2;pointer-events:none}100%{opacity:1;pointer-events:all}}@-o-keyframes animationLimoniAppsBlock{0%{opacity:.2;pointer-events:none;}99%{opacity:.2;pointer-events:none;}100%{opacity:1;pointer-events:all;}}@keyframes animationLimoniAppsBlock{0%{opacity:.2;pointer-events:none}99%{opacity:.2;pointer-events:none}100%{opacity:1;pointer-events:all}}@-webkit-keyframes animationLimoniAppsHide{0%{visibility:visible}99%{visibility:visible}100%{visibility:hidden}}@-moz-keyframes animationLimoniAppsHide{0%{visibility:visible}99%{visibility:visible}100%{visibility:hidden}}@-o-keyframes animationLimoniAppsHide{0%{visibility:visible;}99%{visibility:visible;}100%{visibility:hidden;}}@keyframes animationLimoniAppsHide{0%{visibility:visible}99%{visibility:visible}100%{visibility:hidden}}@-moz-keyframes animationLimoniAppsSpinner{to{transform:rotate(360deg)}}@-webkit-keyframes animationLimoniAppsSpinner{to{transform:rotate(360deg)}}@-o-keyframes animationLimoniAppsSpinner{to{transform:rotate(360deg);}}@keyframes animationLimoniAppsSpinner{to{transform:rotate(360deg)}}.limoniapps-discountninja-block .limoniapps-discountninja-spinner.button:before,.limoniapps-discountninja-block .limoniapps-discountninja-spinner.price:before{visibility:hidden;content:'';box-sizing:border-box;position:absolute;width:20px;height:20px;border-radius:50%;border:2px solid #ccc;border-top-color:#333;opacity:1 !important}.limoniapps-discountninja-block .limoniapps-discountninja-spinner.button:before{top:calc(50% + 5px);left:50%;margin-top:-10px;margin-left:-10px}.limoniapps-discountninja-block .limoniapps-discountninja-dots-wrapper{position:relative}.limoniapps-discountninja-block .limoniapps-discountninja-dots{left:50%;top:50%;position:absolute;width:10px;height:10px;border-radius:5px;background-color:#bbb;color:#bbb;-webkit-animation-delay:.5s;-moz-animation-delay:.5s;-o-animation-delay:.5s;animation-delay:.5s;visibility:hidden}.limoniapps-discountninja-block .limoniapps-discountninja-dots::before,.limoniapps-discountninja-block .limoniapps-discountninja-dots::after{content:'';top:0;position:absolute;width:10px;height:10px;border-radius:5px;background-color:#bbb;color:#bbb}.limoniapps-discountninja-block .limoniapps-discountninja-dots::before{left:-15px;-webkit-animation-delay:0s;-moz-animation-delay:0s;-o-animation-delay:0s;animation-delay:0s}.limoniapps-discountninja-block .limoniapps-discountninja-dots::after{left:15px;-webkit-animation-delay:1s;-moz-animation-delay:1s;-o-animation-delay:1s;animation-delay:1s}@keyframes animationLimoniAppsDots{0%{background-color:#eee}100%{background-color:#bbb}}.preview-visualcomponents-body-white{background-color:#fff}.preview-visualcomponents-lineitem.row{margin:0;height:35%}.preview-visualcomponents-lineitem-column1{margin:0;padding:0}.preview-visualcomponents-lineitem-column2{margin:0;padding:0;margin-left:5px}.preview-visualcomponents-lineitem-column3{margin:0;padding:0}.preview-visualcomponents-lineitem-productimage{height:20px;width:20px;background-color:#c4cdd5;margin-top:4px;margin-left:4px}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column1 .preview-visualcomponents-content-line1{background-color:#dfe3e8}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column1 .preview-visualcomponents-content-line2{background-color:#dfe3e8}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column2 .preview-visualcomponents-content-line1{background-color:#dfe3e8}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column2 .preview-visualcomponents-content-line2{background-color:#dfe3e8}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column3 .preview-visualcomponents-content-line1{background-color:#dfe3e8}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column3 .preview-visualcomponents-content-line2{background-color:#dfe3e8}.preview-visualcomponents-lineitem-productprice{position:absolute;top:15px;left:0;font-size:10px}.preview-visualcomponents-lineitem-productprice .preview-visualcomponents-price-discounted{color:#5c6ac4}.preview-visualcomponents-lineitem-productprice .preview-visualcomponents-price-original{text-decoration-line:line-through;color:#5c6ac4}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column2 .preview-visualcomponents-lineitem-productprice-comment .preview-visualcomponents-content-line1{background-color:#108043;top:32px}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column2 .preview-visualcomponents-lineitem-productprice-comment .preview-visualcomponents-content-line2{background-color:#108043;top:38px}.preview-visualcomponents-lineitem-lineprice{font-size:10px;line-height:14px}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column3 .preview-visualcomponents-lineitem-lineprice .preview-visualcomponents-price-discounted{color:#5c6ac4}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column3 .preview-visualcomponents-lineitem-lineprice .preview-visualcomponents-price-original{text-decoration-line:line-through;color:#5c6ac4}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column3 .preview-visualcomponents-lineitem-lineprice-comment .preview-visualcomponents-content-line1{background-color:#007ace;top:30px}.preview-visualcomponents-lineitem .preview-visualcomponents-lineitem-column3 .preview-visualcomponents-lineitem-lineprice-comment .preview-visualcomponents-content-line2{background-color:#007ace;top:36px}.preview-visualcomponents-subtotal{margin:0}.preview-visualcomponents-subtotal-column1{margin:0;padding:0}.preview-visualcomponents-subtotal-column2{margin:0;padding:0;margin-right:10px;margin-top:-10px}.preview-visualcomponents-subtotal-line{height:1px;width:100%;background-color:#c4cdd5;width:80%;height:2px;right:0;top:0;position:absolute;margin:0 !important}.preview-visualcomponents-subtotal-price{text-align:right;font-size:11px;margin:0;margin-top:10px}.preview-visualcomponents-subtotal-price .preview-visualcomponents-price-discounted{color:#5c6ac4}.preview-visualcomponents-subtotal-price .preview-visualcomponents-price-original{text-decoration-line:line-through;color:#5c6ac4}.preview-visualcomponents-subtotal .preview-visualcomponents-content-line1{background-color:#9c6ade;top:24px;right:0;left:unset}.preview-visualcomponents-subtotal .preview-visualcomponents-content-line2{background-color:#9c6ade;top:30px;right:0;left:unset}.limoniapps-notify-default li{list-style-type:circle;list-style-image:none;list-style-position:inside}a.limoniapps-targetlink{color:inherit;text-decoration-line:underline;text-decoration:underline}a.limoniapps-targetlink:hover{color:inherit;opacity:.8}a.limoniapps-targetlink:visited{color:inherit}.limoniapps-message.limoniapps-message-footer{padding-top:5px}.limoniapps-message.limoniapps-message-timerfooter{padding-top:0}.limoniapps-badge{position:fixed;border:1px solid #000;text-align:center;vertical-align:middle;z-index:9999;background-color:#fff;font-size:18px;box-shadow:0 0 5px 2px rgba(0,0,0,.2)}.limoniapps-badge .limoniapps-minimal-box:hover{cursor:pointer}.limoniapps-badge .limoniapps-subtle-box{display:none;text-align:center;flex-direction:column}.limoniapps-notify-default .limoniapps-offercount{position:absolute;background-color:#fff;color:#111;height:30px;width:30px;line-height:28px;border-radius:50%;border:1px solid #111;text-align:center;font-weight:700;font-size:1em}.limoniapps-notify-default[data-notify-position="bottom-left"] .limoniapps-offercount{right:-15px;top:-15px}.limoniapps-notify-default[data-notify-position="bottom-right"] .limoniapps-offercount{left:-15px;top:-15px}.limoniapps-notify-default[data-notify-position="top-left"] .limoniapps-offercount{right:-15px;bottom:-15px}.limoniapps-notify-default[data-notify-position="top-right"] .limoniapps-offercount{left:-15px;bottom:-15px}.limoniapps-notify-default[preview-position="bottom-left"] .limoniapps-offercount{right:-15px;top:-15px}.limoniapps-notify-default[preview-position="bottom-right"] .limoniapps-offercount{left:-15px;top:-15px}.limoniapps-notify-default[preview-position="top-left"] .limoniapps-offercount{right:-15px;bottom:-15px}.limoniapps-notify-default[preview-position="top-right"] .limoniapps-offercount{left:-15px;bottom:-15px}.limoniapps-badge .limoniapps-offercount{position:absolute;background-color:#fff;color:#111;height:30px;width:30px;line-height:28px;border-radius:50%;border:1px solid #111}.limoniapps-badge.limoniapps-top-left .limoniapps-offercount,.limoniapps-badge.limoniapps-top-middle .limoniapps-offercount,.limoniapps-badge.limoniapps-top-right .limoniapps-offercount{left:-15px;bottom:-15px}.limoniapps-badge.limoniapps-right-top .limoniapps-offercount,.limoniapps-badge.limoniapps-right-middle .limoniapps-offercount,.limoniapps-badge.limoniapps-right-bottom .limoniapps-offercount,.limoniapps-badge.limoniapps-bottom-left .limoniapps-offercount,.limoniapps-badge.limoniapps-bottom-middle .limoniapps-offercount,.limoniapps-badge.limoniapps-bottom-right .limoniapps-offercount{left:-15px;top:-15px}.limoniapps-badge.limoniapps-left-top .limoniapps-offercount,.limoniapps-badge.limoniapps-left-middle .limoniapps-offercount,.limoniapps-badge.limoniapps-left-bottom .limoniapps-offercount{right:-15px;top:-15px}.limoniapps-badge .limoniapps-subtle-box .limoniapps-image-pane{padding:5px 10px 5px 10px;position:relative}.limoniapps-badge .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close{position:absolute;font-size:20px;padding:0;height:30px;width:30px;line-height:29px;top:0;right:5px;border-width:0;color:rgba(0,0,0,.7);border-top-right-radius:5px;outline:0}.limoniapps-badge.limoniapps-top-left .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close,.limoniapps-badge.limoniapps-top-middle .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close,.limoniapps-badge.limoniapps-top-right .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close{bottom:0;top:auto}.limoniapps-badge.limoniapps-left-top .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close,.limoniapps-badge.limoniapps-left-middle .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close,.limoniapps-badge.limoniapps-left-bottom .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close{left:5px;right:auto}.limoniapps-badge .limoniapps-subtle-box .limoniapps-image-pane .limoniapps-close:hover{color:#000;cursor:pointer}.limoniapps-badge .limoniapps-subtle-box .limoniapps-message{padding:10px 15px}.limoniapps-badge .limoniapps-subtle-box .limoniapps-action{padding:10px 15px}.limoniapps-badge .limoniapps-subtle-box .limoniapps-action .limoniapps-action-btn{padding:10px;outline:0;font-size:14px;border-radius:3px;width:100%;cursor:pointer;box-shadow:0 2px 1px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3)}.limoniapps-badge .limoniapps-subtle-box .limoniapps-image{height:120px;width:120px;display:inline-block;margin-top:-70px;background-color:#fff;background-repeat:no-repeat;background-size:cover;background-position:center center}.limoniapps-badge.limoniapps-image-circle .limoniapps-subtle-box .limoniapps-image{border-radius:50%}.limoniapps-badge.limoniapps-image-bordered .limoniapps-subtle-box .limoniapps-image{border-width:1px;border-style:solid;border-color:#000}.limoniapps-badge.limoniapps-top-left .limoniapps-subtle-box .limoniapps-image,.limoniapps-badge.limoniapps-top-middle .limoniapps-subtle-box .limoniapps-image,.limoniapps-badge.limoniapps-top-right .limoniapps-subtle-box .limoniapps-image{margin-bottom:-70px;margin-top:0}.limoniapps-badge.limoniapps-subtled{height:auto;width:250px}.limoniapps-badge.limoniapps-subtled .limoniapps-subtle-box{display:flex;padding:5px 0}.limoniapps-badge.limoniapps-top-left .limoniapps-subtle-box,.limoniapps-badge.limoniapps-top-middle .limoniapps-subtle-box,.limoniapps-badge.limoniapps-top-right .limoniapps-subtle-box{flex-direction:column-reverse}.limoniapps-badge.limoniapps-subtled .limoniapps-minimal-box{display:none}.limoniapps-badge .limoniapps-minimal-box{display:table;height:100%;width:100%;white-space:nowrap}.limoniapps-badge .limoniapps-minimal-box>span{display:table-cell;vertical-align:middle}.limoniapps-badge.limoniapps-top-left{top:0;left:70px;width:250px;height:50px;border-top-width:0;border-bottom-left-radius:5px;border-bottom-right-radius:5px}.limoniapps-badge.limoniapps-top-middle{top:0;left:50%;margin-left:-125px;width:250px;height:50px;border-top-width:0;border-bottom-left-radius:5px;border-bottom-right-radius:5px}.limoniapps-badge.limoniapps-top-right{top:0;right:70px;width:250px;height:50px;border-top-width:0;border-bottom-left-radius:5px;border-bottom-right-radius:5px}.limoniapps-badge.limoniapps-right-top{right:0;top:70px;width:50px;height:250px;border-right-width:0;border-top-left-radius:5px;border-bottom-left-radius:5px}.limoniapps-badge.limoniapps-right-middle{right:0;width:50px;top:50%;margin-top:-125px;height:250px;border-right-width:0;border-top-left-radius:5px;border-bottom-left-radius:5px}.limoniapps-badge.limoniapps-right-bottom{right:0;bottom:70px;width:50px;height:250px;border-right-width:0;border-top-left-radius:5px;border-bottom-left-radius:5px}.limoniapps-badge.limoniapps-bottom-right{bottom:0;right:70px;width:250px;height:50px;border-bottom-width:0;border-top-left-radius:5px;border-top-right-radius:5px}.limoniapps-badge.limoniapps-bottom-middle{bottom:0;width:250px;left:50%;margin-left:-125px;height:50px;border-bottom-width:0;border-top-left-radius:5px;border-top-right-radius:5px}.limoniapps-badge.limoniapps-bottom-left{bottom:0;left:70px;width:250px;height:50px;border-bottom-width:0;border-top-left-radius:5px;border-top-right-radius:5px}.limoniapps-badge.limoniapps-left-bottom{left:0;bottom:70px;width:50px;height:250px;border-left-width:0;border-top-right-radius:5px;border-bottom-right-radius:5px}.limoniapps-badge.limoniapps-left-middle{left:0;width:50px;top:50%;margin-top:-125px;height:250px;border-left-width:0;border-top-right-radius:5px;border-bottom-right-radius:5px}.limoniapps-badge.limoniapps-left-top{left:0;top:70px;width:50px;height:250px;border-left-width:0;border-top-right-radius:5px;border-bottom-right-radius:5px}@media(max-width:600px){.limoniapps-badge.limoniapps-top-left{left:50%;margin-left:-125px}.limoniapps-badge.limoniapps-top-right{right:auto;left:50%;margin-left:-125px}.limoniapps-badge.limoniapps-right-top{top:50%;margin-top:-125px}.limoniapps-badge.limoniapps-right-bottom{bottom:auto;top:50%;margin-top:-125px}.limoniapps-badge.limoniapps-bottom-right{right:auto;left:50%;margin-left:-125px}.limoniapps-badge.limoniapps-bottom-left{left:50%;margin-left:-125px}.limoniapps-badge.limoniapps-left-bottom{bottom:auto;top:50%;margin-top:-125px}.limoniapps-badge .limoniapps-left-top{top:50%;margin-top:-125px}}.limoniapps-badge.limoniapps-right-top .limoniapps-minimal-box,.limoniapps-badge.limoniapps-right-middle .limoniapps-minimal-box,.limoniapps-badge.limoniapps-right-bottom .limoniapps-minimal-box{-ms-transform:rotate(90deg);-moz-transform:rotate(90deg);-webkit-transform:rotate(90deg);-o-transform:rotate(90deg);position:relative;height:50px;width:250px;left:-100px;top:100px}.limoniapps-badge.limoniapps-left-top .limoniapps-minimal-box,.limoniapps-badge.limoniapps-left-middle .limoniapps-minimal-box,.limoniapps-badge.limoniapps-left-bottom .limoniapps-minimal-box{-ms-transform:rotate(-90deg);-moz-transform:rotate(-90deg);-webkit-transform:rotate(-90deg);-o-transform:rotate(-90deg);position:relative;height:50px;width:250px;left:-100px;top:100px}.alert-limoniapps-notification-testmodeoutput{display:inline-block;margin:0 auto;position:fixed;transition:all .5s ease-in-out 0s;z-index:999999 !important;top:20px;left:20px;animation-iteration-count:1;background:#fff;color:#000;border:1px solid #000;width:300px;opacity:.9;padding:10px}.alert-limoniapps-notification-testmodeoutput .close{color:#000;position:absolute;right:5px;top:5px;border:0;background:none;padding:0;min-width:20px;max-width:20px;font-size:20px}.alert-limoniapps-notification-testmodeoutput [data-notify="icon"]{color:#008000}.alert-limoniapps-notification-testmodeoutput [data-notify="title"]{font-weight:600;color:#008000}
 </style>
<style>.limoniapps-discountninja-block{-webkit-animation: animationLimoniAppsBlock 4s ease-out;-moz-animation: animationLimoniAppsBlock 4s ease-out;-o-animation: animationLimoniAppsBlock 4s ease-out;animation: animationLimoniAppsBlock 4s ease-out;position: relative;}
.limoniapps-discountninja-block-prices{-webkit-animation:animationLimoniAppsBlock 8s ease-out;-moz-animation:animationLimoniAppsBlock 8s ease-out;-o-animation:animationLimoniAppsBlock 8s ease-out;animation:animationLimoniAppsBlock 8s ease-out; position: relative;}
.limoniapps-discountninja-block .limoniapps-discountninja-dots { -webkit-animation: animationLimoniAppsHide 7s linear, animationLimoniAppsDots 1s 7 alternate;-moz-animation: animationLimoniAppsHide 7s linear, animationLimoniAppsDots 1s 7 alternate;-o-animation: animationLimoniAppsHide 7s linear, animationLimoniAppsDots 1s 7 alternate;animation: animationLimoniAppsHide 7s linear, animationLimoniAppsDots 1s 7 alternate;}
.limoniapps-discountninja-block .limoniapps-discountninja-dots::before { -webkit-animation: animationLimoniAppsHide 8s linear, animationLimoniAppsDots 1s 8 alternate;-moz-animation: animationLimoniAppsHide 8s linear, animationLimoniAppsDots 1s 8 alternate;-o-animation: animationLimoniAppsHide 8s linear, animationLimoniAppsDots 1s 8 alternate;animation: animationLimoniAppsHide 8s linear, animationLimoniAppsDots 1s 8 alternate;}
.limoniapps-discountninja-block .limoniapps-discountninja-dots::after { -webkit-animation: animationLimoniAppsHide 7.5s linear, animationLimoniAppsDots 1s 7.5 alternate;-moz-animation: animationLimoniAppsHide 7.5s linear, animationLimoniAppsDots 1s 7.5 alternate;-o-animation: animationLimoniAppsHide 7.5s linear, animationLimoniAppsDots 1s 7.5 alternate;animation: animationLimoniAppsHide 7.5s linear, animationLimoniAppsDots 1s 7.5 alternate;}
.limoniapps-discountninja-block-buttons{-webkit-animation:animationLimoniAppsBlock 8s ease-out;-moz-animation:animationLimoniAppsBlock 8s ease-out;-o-animation:animationLimoniAppsBlock 8s ease-out;animation:animationLimoniAppsBlock 8s ease-out; position: relative;}
.limoniapps-discountninja-block .limoniapps-discountninja-spinner.button:before,.limoniapps-discountninja-block .limoniapps-discountninja-spinner.price:before{-webkit-animation:animationLimoniAppsSpinner 1s 8, animationLimoniAppsHide 8s linear;-moz-animation:animationLimoniAppsSpinner 1s 8,animationLimoniAppsHide 8s linear;-o-animation:animationLimoniAppsSpinner 1s 8,animationLimoniAppsHide 8s linear;animation:animationLimoniAppsSpinner 1s 8,animationLimoniAppsHide 8s linear;}
</style>
<style>



</style>




<script>
/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
function LimoniAppsLoadJQuery(callback) {
if (typeof jQuery !== 'function') {
    !function (e, t) { "use strict"; "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) { if (!e.document) throw new Error("jQuery requires a window with a document"); return t(e) } : t(e) }("undefined" != typeof window ? window : this, function (e, t) { "use strict"; var n = [], r = e.document, i = Object.getPrototypeOf, o = n.slice, a = n.concat, s = n.push, u = n.indexOf, l = {}, c = l.toString, f = l.hasOwnProperty, p = f.toString, d = p.call(Object), h = {}, g = function e(t) { return "function" == typeof t && "number" != typeof t.nodeType }, y = function e(t) { return null != t && t === t.window }, v = { type: !0, src: !0, noModule: !0 }; function m(e, t, n) { var i, o = (t = t || r).createElement("script"); if (o.text = e, n) for (i in v) n[i] && (o[i] = n[i]); t.head.appendChild(o).parentNode.removeChild(o) } function x(e) { return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e } var b = "3.3.1", w = function (e, t) { return new w.fn.init(e, t) }, T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g; w.fn = w.prototype = { jquery: "3.3.1", constructor: w, length: 0, toArray: function () { return o.call(this) }, get: function (e) { return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e] }, pushStack: function (e) { var t = w.merge(this.constructor(), e); return t.prevObject = this, t }, each: function (e) { return w.each(this, e) }, map: function (e) { return this.pushStack(w.map(this, function (t, n) { return e.call(t, n, t) })) }, slice: function () { return this.pushStack(o.apply(this, arguments)) }, first: function () { return this.eq(0) }, last: function () { return this.eq(-1) }, eq: function (e) { var t = this.length, n = +e + (e < 0 ? t : 0); return this.pushStack(n >= 0 && n < t ? [this[n]] : []) }, end: function () { return this.prevObject || this.constructor() }, push: s, sort: n.sort, splice: n.splice }, w.extend = w.fn.extend = function () { var e, t, n, r, i, o, a = arguments[0] || {}, s = 1, u = arguments.length, l = !1; for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++)if (null != (e = arguments[s])) for (t in e) n = a[t], a !== (r = e[t]) && (l && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && w.isPlainObject(n) ? n : {}, a[t] = w.extend(l, o, r)) : void 0 !== r && (a[t] = r)); return a }, w.extend({ expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) { throw new Error(e) }, noop: function () { }, isPlainObject: function (e) { var t, n; return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || "function" == typeof (n = f.call(t, "constructor") && t.constructor) && p.call(n) === d) }, isEmptyObject: function (e) { var t; for (t in e) return !1; return !0 }, globalEval: function (e) { m(e) }, each: function (e, t) { var n, r = 0; if (C(e)) { for (n = e.length; r < n; r++)if (!1 === t.call(e[r], r, e[r])) break } else for (r in e) if (!1 === t.call(e[r], r, e[r])) break; return e }, trim: function (e) { return null == e ? "" : (e + "").replace(T, "") }, makeArray: function (e, t) { var n = t || []; return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n }, inArray: function (e, t, n) { return null == t ? -1 : u.call(t, e, n) }, merge: function (e, t) { for (var n = +t.length, r = 0, i = e.length; r < n; r++)e[i++] = t[r]; return e.length = i, e }, grep: function (e, t, n) { for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++)(r = !t(e[o], o)) !== s && i.push(e[o]); return i }, map: function (e, t, n) { var r, i, o = 0, s = []; if (C(e)) for (r = e.length; o < r; o++)null != (i = t(e[o], o, n)) && s.push(i); else for (o in e) null != (i = t(e[o], o, n)) && s.push(i); return a.apply([], s) }, guid: 1, support: h }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) { l["[object " + t + "]"] = t.toLowerCase() }); function C(e) { var t = !!e && "length" in e && e.length, n = x(e); return !g(e) && !y(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e) } var E = function (e) { var t, n, r, i, o, a, s, u, l, c, f, p, d, h, g, y, v, m, x, b = "sizzle" + 1 * new Date, w = e.document, T = 0, C = 0, E = ae(), k = ae(), S = ae(), D = function (e, t) { return e === t && (f = !0), 0 }, N = {}.hasOwnProperty, A = [], j = A.pop, q = A.push, L = A.push, H = A.slice, O = function (e, t) { for (var n = 0, r = e.length; n < r; n++)if (e[n] === t) return n; return -1 }, P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", M = "[\\x20\\t\\r\\n\\f]", R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+", I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]", W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)", $ = new RegExp(M + "+", "g"), B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"), F = new RegExp("^" + M + "*," + M + "*"), _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"), z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"), X = new RegExp(W), U = new RegExp("^" + R + "$"), V = { ID: new RegExp("^#(" + R + ")"), CLASS: new RegExp("^\\.(" + R + ")"), TAG: new RegExp("^(" + R + "|[*])"), ATTR: new RegExp("^" + I), PSEUDO: new RegExp("^" + W), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"), bool: new RegExp("^(?:" + P + ")$", "i"), needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i") }, G = /^(?:input|select|textarea|button)$/i, Y = /^h\d$/i, Q = /^[^{]+\{\s*\[native \w/, J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, K = /[+~]/, Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"), ee = function (e, t, n) { var r = "0x" + t - 65536; return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320) }, te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, ne = function (e, t) { return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e }, re = function () { p() }, ie = me(function (e) { return !0 === e.disabled && ("form" in e || "label" in e) }, { dir: "parentNode", next: "legend" }); try { L.apply(A = H.call(w.childNodes), w.childNodes), A[w.childNodes.length].nodeType } catch (e) { L = { apply: A.length ? function (e, t) { q.apply(e, H.call(t)) } : function (e, t) { var n = e.length, r = 0; while (e[n++] = t[r++]); e.length = n - 1 } } } function oe(e, t, r, i) { var o, s, l, c, f, h, v, m = t && t.ownerDocument, T = t ? t.nodeType : 9; if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r; if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), t = t || d, g)) { if (11 !== T && (f = J.exec(e))) if (o = f[1]) { if (9 === T) { if (!(l = t.getElementById(o))) return r; if (l.id === o) return r.push(l), r } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r } else { if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r; if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r } if (n.qsa && !S[e + " "] && (!y || !y.test(e))) { if (1 !== T) m = t, v = e; else if ("object" !== t.nodeName.toLowerCase()) { (c = t.getAttribute("id")) ? c = c.replace(te, ne) : t.setAttribute("id", c = b), s = (h = a(e)).length; while (s--) h[s] = "#" + c + " " + ve(h[s]); v = h.join(","), m = K.test(e) && ge(t.parentNode) || t } if (v) try { return L.apply(r, m.querySelectorAll(v)), r } catch (e) { } finally { c === b && t.removeAttribute("id") } } } return u(e.replace(B, "$1"), t, r, i) } function ae() { var e = []; function t(n, i) { return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i } return t } function se(e) { return e[b] = !0, e } function ue(e) { var t = d.createElement("fieldset"); try { return !!e(t) } catch (e) { return !1 } finally { t.parentNode && t.parentNode.removeChild(t), t = null } } function le(e, t) { var n = e.split("|"), i = n.length; while (i--) r.attrHandle[n[i]] = t } function ce(e, t) { var n = t && e, r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex; if (r) return r; if (n) while (n = n.nextSibling) if (n === t) return -1; return e ? 1 : -1 } function fe(e) { return function (t) { return "input" === t.nodeName.toLowerCase() && t.type === e } } function pe(e) { return function (t) { var n = t.nodeName.toLowerCase(); return ("input" === n || "button" === n) && t.type === e } } function de(e) { return function (t) { return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ie(t) === e : t.disabled === e : "label" in t && t.disabled === e } } function he(e) { return se(function (t) { return t = +t, se(function (n, r) { var i, o = e([], n.length, t), a = o.length; while (a--) n[i = o[a]] && (n[i] = !(r[i] = n[i])) }) }) } function ge(e) { return e && "undefined" != typeof e.getElementsByTagName && e } n = oe.support = {}, o = oe.isXML = function (e) { var t = e && (e.ownerDocument || e).documentElement; return !!t && "HTML" !== t.nodeName }, p = oe.setDocument = function (e) { var t, i, a = e ? e.ownerDocument || e : w; return a !== d && 9 === a.nodeType && a.documentElement ? (d = a, h = d.documentElement, g = !o(d), w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)), n.attributes = ue(function (e) { return e.className = "i", !e.getAttribute("className") }), n.getElementsByTagName = ue(function (e) { return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length }), n.getElementsByClassName = Q.test(d.getElementsByClassName), n.getById = ue(function (e) { return h.appendChild(e).id = b, !d.getElementsByName || !d.getElementsByName(b).length }), n.getById ? (r.filter.ID = function (e) { var t = e.replace(Z, ee); return function (e) { return e.getAttribute("id") === t } }, r.find.ID = function (e, t) { if ("undefined" != typeof t.getElementById && g) { var n = t.getElementById(e); return n ? [n] : [] } }) : (r.filter.ID = function (e) { var t = e.replace(Z, ee); return function (e) { var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id"); return n && n.value === t } }, r.find.ID = function (e, t) { if ("undefined" != typeof t.getElementById && g) { var n, r, i, o = t.getElementById(e); if (o) { if ((n = o.getAttributeNode("id")) && n.value === e) return [o]; i = t.getElementsByName(e), r = 0; while (o = i[r++]) if ((n = o.getAttributeNode("id")) && n.value === e) return [o] } return [] } }), r.find.TAG = n.getElementsByTagName ? function (e, t) { return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0 } : function (e, t) { var n, r = [], i = 0, o = t.getElementsByTagName(e); if ("*" === e) { while (n = o[i++]) 1 === n.nodeType && r.push(n); return r } return o }, r.find.CLASS = n.getElementsByClassName && function (e, t) { if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e) }, v = [], y = [], (n.qsa = Q.test(d.querySelectorAll)) && (ue(function (e) { h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="), e.querySelectorAll(":checked").length || y.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]") }), ue(function (e) { e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>"; var t = d.createElement("input"); t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), y.push(",.*:") })), (n.matchesSelector = Q.test(m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ue(function (e) { n.disconnectedMatch = m.call(e, "*"), m.call(e, "[s!='']:x"), v.push("!=", W) }), y = y.length && new RegExp(y.join("|")), v = v.length && new RegExp(v.join("|")), t = Q.test(h.compareDocumentPosition), x = t || Q.test(h.contains) ? function (e, t) { var n = 9 === e.nodeType ? e.documentElement : e, r = t && t.parentNode; return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r))) } : function (e, t) { if (t) while (t = t.parentNode) if (t === e) return !0; return !1 }, D = t ? function (e, t) { if (e === t) return f = !0, 0; var r = !e.compareDocumentPosition - !t.compareDocumentPosition; return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === d || e.ownerDocument === w && x(w, e) ? -1 : t === d || t.ownerDocument === w && x(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1) } : function (e, t) { if (e === t) return f = !0, 0; var n, r = 0, i = e.parentNode, o = t.parentNode, a = [e], s = [t]; if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0; if (i === o) return ce(e, t); n = e; while (n = n.parentNode) a.unshift(n); n = t; while (n = n.parentNode) s.unshift(n); while (a[r] === s[r]) r++; return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0 }, d) : d }, oe.matches = function (e, t) { return oe(e, null, null, t) }, oe.matchesSelector = function (e, t) { if ((e.ownerDocument || e) !== d && p(e), t = t.replace(z, "='$1']"), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))) try { var r = m.call(e, t); if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r } catch (e) { } return oe(t, d, null, [e]).length > 0 }, oe.contains = function (e, t) { return (e.ownerDocument || e) !== d && p(e), x(e, t) }, oe.attr = function (e, t) { (e.ownerDocument || e) !== d && p(e); var i = r.attrHandle[t.toLowerCase()], o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0; return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null }, oe.escape = function (e) { return (e + "").replace(te, ne) }, oe.error = function (e) { throw new Error("Syntax error, unrecognized expression: " + e) }, oe.uniqueSort = function (e) { var t, r = [], i = 0, o = 0; if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(D), f) { while (t = e[o++]) t === e[o] && (i = r.push(o)); while (i--) e.splice(r[i], 1) } return c = null, e }, i = oe.getText = function (e) { var t, n = "", r = 0, o = e.nodeType; if (o) { if (1 === o || 9 === o || 11 === o) { if ("string" == typeof e.textContent) return e.textContent; for (e = e.firstChild; e; e = e.nextSibling)n += i(e) } else if (3 === o || 4 === o) return e.nodeValue } else while (t = e[r++]) n += i(t); return n }, (r = oe.selectors = { cacheLength: 50, createPseudo: se, match: V, attrHandle: {}, find: {}, relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } }, preFilter: { ATTR: function (e) { return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4) }, CHILD: function (e) { return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e }, PSEUDO: function (e) { var t, n = !e[6] && e[2]; return V.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3)) } }, filter: { TAG: function (e) { var t = e.replace(Z, ee).toLowerCase(); return "*" === e ? function () { return !0 } : function (e) { return e.nodeName && e.nodeName.toLowerCase() === t } }, CLASS: function (e) { var t = E[e + " "]; return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && E(e, function (e) { return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "") }) }, ATTR: function (e, t, n) { return function (r) { var i = oe.attr(r, e); return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i.replace($, " ") + " ").indexOf(n) > -1 : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-")) } }, CHILD: function (e, t, n, r, i) { var o = "nth" !== e.slice(0, 3), a = "last" !== e.slice(-4), s = "of-type" === t; return 1 === r && 0 === i ? function (e) { return !!e.parentNode } : function (t, n, u) { var l, c, f, p, d, h, g = o !== a ? "nextSibling" : "previousSibling", y = t.parentNode, v = s && t.nodeName.toLowerCase(), m = !u && !s, x = !1; if (y) { if (o) { while (g) { p = t; while (p = p[g]) if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1; h = g = "only" === e && !h && "nextSibling" } return !0 } if (h = [a ? y.firstChild : y.lastChild], a && m) { x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], p = d && y.childNodes[d]; while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) if (1 === p.nodeType && ++x && p === t) { c[e] = [T, d, x]; break } } else if (m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x) while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break; return (x -= i) === r || x % r == 0 && x / r >= 0 } } }, PSEUDO: function (e, t) { var n, i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e); return i[b] ? i(t) : i.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? se(function (e, n) { var r, o = i(e, t), a = o.length; while (a--) e[r = O(e, o[a])] = !(n[r] = o[a]) }) : function (e) { return i(e, 0, n) }) : i } }, pseudos: { not: se(function (e) { var t = [], n = [], r = s(e.replace(B, "$1")); return r[b] ? se(function (e, t, n, i) { var o, a = r(e, null, i, []), s = e.length; while (s--) (o = a[s]) && (e[s] = !(t[s] = o)) }) : function (e, i, o) { return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop() } }), has: se(function (e) { return function (t) { return oe(e, t).length > 0 } }), contains: se(function (e) { return e = e.replace(Z, ee), function (t) { return (t.textContent || t.innerText || i(t)).indexOf(e) > -1 } }), lang: se(function (e) { return U.test(e || "") || oe.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(), function (t) { var n; do { if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-") } while ((t = t.parentNode) && 1 === t.nodeType); return !1 } }), target: function (t) { var n = e.location && e.location.hash; return n && n.slice(1) === t.id }, root: function (e) { return e === h }, focus: function (e) { return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex) }, enabled: de(!1), disabled: de(!0), checked: function (e) { var t = e.nodeName.toLowerCase(); return "input" === t && !!e.checked || "option" === t && !!e.selected }, selected: function (e) { return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected }, empty: function (e) { for (e = e.firstChild; e; e = e.nextSibling)if (e.nodeType < 6) return !1; return !0 }, parent: function (e) { return !r.pseudos.empty(e) }, header: function (e) { return Y.test(e.nodeName) }, input: function (e) { return G.test(e.nodeName) }, button: function (e) { var t = e.nodeName.toLowerCase(); return "input" === t && "button" === e.type || "button" === t }, text: function (e) { var t; return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase()) }, first: he(function () { return [0] }), last: he(function (e, t) { return [t - 1] }), eq: he(function (e, t, n) { return [n < 0 ? n + t : n] }), even: he(function (e, t) { for (var n = 0; n < t; n += 2)e.push(n); return e }), odd: he(function (e, t) { for (var n = 1; n < t; n += 2)e.push(n); return e }), lt: he(function (e, t, n) { for (var r = n < 0 ? n + t : n; --r >= 0;)e.push(r); return e }), gt: he(function (e, t, n) { for (var r = n < 0 ? n + t : n; ++r < t;)e.push(r); return e }) } }).pseudos.nth = r.pseudos.eq; for (t in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) r.pseudos[t] = fe(t); for (t in { submit: !0, reset: !0 }) r.pseudos[t] = pe(t); function ye() { } ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = oe.tokenize = function (e, t) { var n, i, o, a, s, u, l, c = k[e + " "]; if (c) return t ? 0 : c.slice(0); s = e, u = [], l = r.preFilter; while (s) { n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({ value: n, type: i[0].replace(B, " ") }), s = s.slice(n.length)); for (a in r.filter) !(i = V[a].exec(s)) || l[a] && !(i = l[a](i)) || (n = i.shift(), o.push({ value: n, type: a, matches: i }), s = s.slice(n.length)); if (!n) break } return t ? s.length : s ? oe.error(e) : k(e, u).slice(0) }; function ve(e) { for (var t = 0, n = e.length, r = ""; t < n; t++)r += e[t].value; return r } function me(e, t, n) { var r = t.dir, i = t.next, o = i || r, a = n && "parentNode" === o, s = C++; return t.first ? function (t, n, i) { while (t = t[r]) if (1 === t.nodeType || a) return e(t, n, i); return !1 } : function (t, n, u) { var l, c, f, p = [T, s]; if (u) { while (t = t[r]) if ((1 === t.nodeType || a) && e(t, n, u)) return !0 } else while (t = t[r]) if (1 === t.nodeType || a) if (f = t[b] || (t[b] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t; else { if ((l = c[o]) && l[0] === T && l[1] === s) return p[2] = l[2]; if (c[o] = p, p[2] = e(t, n, u)) return !0 } return !1 } } function xe(e) { return e.length > 1 ? function (t, n, r) { var i = e.length; while (i--) if (!e[i](t, n, r)) return !1; return !0 } : e[0] } function be(e, t, n) { for (var r = 0, i = t.length; r < i; r++)oe(e, t[r], n); return n } function we(e, t, n, r, i) { for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s))); return a } function Te(e, t, n, r, i, o) { return r && !r[b] && (r = Te(r)), i && !i[b] && (i = Te(i, o)), se(function (o, a, s, u) { var l, c, f, p = [], d = [], h = a.length, g = o || be(t || "*", s.nodeType ? [s] : s, []), y = !e || !o && t ? g : we(g, p, e, s, u), v = n ? i || (o ? e : h || r) ? [] : a : y; if (n && n(y, v, s, u), r) { l = we(v, d), r(l, [], s, u), c = l.length; while (c--) (f = l[c]) && (v[d[c]] = !(y[d[c]] = f)) } if (o) { if (i || e) { if (i) { l = [], c = v.length; while (c--) (f = v[c]) && l.push(y[c] = f); i(null, v = [], l, u) } c = v.length; while (c--) (f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f)) } } else v = we(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, u) : L.apply(a, v) }) } function Ce(e) { for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = me(function (e) { return e === t }, s, !0), f = me(function (e) { return O(t, e) > -1 }, s, !0), p = [function (e, n, r) { var i = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r)); return t = null, i }]; u < o; u++)if (n = r.relative[e[u].type]) p = [me(xe(p), n)]; else { if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) { for (i = ++u; i < o; i++)if (r.relative[e[i].type]) break; return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({ value: " " === e[u - 2].type ? "*" : "" })).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce(e = e.slice(i)), i < o && ve(e)) } p.push(n) } return xe(p) } function Ee(e, t) { var n = t.length > 0, i = e.length > 0, o = function (o, a, s, u, c) { var f, h, y, v = 0, m = "0", x = o && [], b = [], w = l, C = o || i && r.find.TAG("*", c), E = T += null == w ? 1 : Math.random() || .1, k = C.length; for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) { if (i && f) { h = 0, a || f.ownerDocument === d || (p(f), s = !g); while (y = e[h++]) if (y(f, a || d, s)) { u.push(f); break } c && (T = E) } n && ((f = !y && f) && v-- , o && x.push(f)) } if (v += m, n && m !== v) { h = 0; while (y = t[h++]) y(x, b, a, s); if (o) { if (v > 0) while (m--) x[m] || b[m] || (b[m] = j.call(u)); b = we(b) } L.apply(u, b), c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u) } return c && (T = E, l = w), x }; return n ? se(o) : o } return s = oe.compile = function (e, t) { var n, r = [], i = [], o = S[e + " "]; if (!o) { t || (t = a(e)), n = t.length; while (n--) (o = Ce(t[n]))[b] ? r.push(o) : i.push(o); (o = S(e, Ee(i, r))).selector = e } return o }, u = oe.select = function (e, t, n, i) { var o, u, l, c, f, p = "function" == typeof e && e, d = !i && a(e = p.selector || e); if (n = n || [], 1 === d.length) { if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) { if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n; p && (t = t.parentNode), e = e.slice(u.shift().value.length) } o = V.needsContext.test(e) ? 0 : u.length; while (o--) { if (l = u[o], r.relative[c = l.type]) break; if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), K.test(u[0].type) && ge(t.parentNode) || t))) { if (u.splice(o, 1), !(e = i.length && ve(u))) return L.apply(n, i), n; break } } } return (p || s(e, d))(i, t, !g, n, !t || K.test(e) && ge(t.parentNode) || t), n }, n.sortStable = b.split("").sort(D).join("") === b, n.detectDuplicates = !!f, p(), n.sortDetached = ue(function (e) { return 1 & e.compareDocumentPosition(d.createElement("fieldset")) }), ue(function (e) { return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href") }) || le("type|href|height|width", function (e, t, n) { if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2) }), n.attributes && ue(function (e) { return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value") }) || le("value", function (e, t, n) { if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue }), ue(function (e) { return null == e.getAttribute("disabled") }) || le(P, function (e, t, n) { var r; if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null }), oe }(e); w.find = E, w.expr = E.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = E.uniqueSort, w.text = E.getText, w.isXMLDoc = E.isXML, w.contains = E.contains, w.escapeSelector = E.escape; var k = function (e, t, n) { var r = [], i = void 0 !== n; while ((e = e[t]) && 9 !== e.nodeType) if (1 === e.nodeType) { if (i && w(e).is(n)) break; r.push(e) } return r }, S = function (e, t) { for (var n = []; e; e = e.nextSibling)1 === e.nodeType && e !== t && n.push(e); return n }, D = w.expr.match.needsContext; function N(e, t) { return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase() } var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i; function j(e, t, n) { return g(t) ? w.grep(e, function (e, r) { return !!t.call(e, r, e) !== n }) : t.nodeType ? w.grep(e, function (e) { return e === t !== n }) : "string" != typeof t ? w.grep(e, function (e) { return u.call(t, e) > -1 !== n }) : w.filter(t, e, n) } w.filter = function (e, t, n) { var r = t[0]; return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) { return 1 === e.nodeType })) }, w.fn.extend({ find: function (e) { var t, n, r = this.length, i = this; if ("string" != typeof e) return this.pushStack(w(e).filter(function () { for (t = 0; t < r; t++)if (w.contains(i[t], this)) return !0 })); for (n = this.pushStack([]), t = 0; t < r; t++)w.find(e, i[t], n); return r > 1 ? w.uniqueSort(n) : n }, filter: function (e) { return this.pushStack(j(this, e || [], !1)) }, not: function (e) { return this.pushStack(j(this, e || [], !0)) }, is: function (e) { return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length } }); var q, L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/; (w.fn.init = function (e, t, n) { var i, o; if (!e) return this; if (n = n || q, "string" == typeof e) { if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e); if (i[1]) { if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t)) for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]); return this } return (o = r.getElementById(i[2])) && (this[0] = o, this.length = 1), this } return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this) }).prototype = w.fn, q = w(r); var H = /^(?:parents|prev(?:Until|All))/, O = { children: !0, contents: !0, next: !0, prev: !0 }; w.fn.extend({ has: function (e) { var t = w(e, this), n = t.length; return this.filter(function () { for (var e = 0; e < n; e++)if (w.contains(this, t[e])) return !0 }) }, closest: function (e, t) { var n, r = 0, i = this.length, o = [], a = "string" != typeof e && w(e); if (!D.test(e)) for (; r < i; r++)for (n = this[r]; n && n !== t; n = n.parentNode)if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) { o.push(n); break } return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o) }, index: function (e) { return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1 }, add: function (e, t) { return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t)))) }, addBack: function (e) { return this.add(null == e ? this.prevObject : this.prevObject.filter(e)) } }); function P(e, t) { while ((e = e[t]) && 1 !== e.nodeType); return e } w.each({ parent: function (e) { var t = e.parentNode; return t && 11 !== t.nodeType ? t : null }, parents: function (e) { return k(e, "parentNode") }, parentsUntil: function (e, t, n) { return k(e, "parentNode", n) }, next: function (e) { return P(e, "nextSibling") }, prev: function (e) { return P(e, "previousSibling") }, nextAll: function (e) { return k(e, "nextSibling") }, prevAll: function (e) { return k(e, "previousSibling") }, nextUntil: function (e, t, n) { return k(e, "nextSibling", n) }, prevUntil: function (e, t, n) { return k(e, "previousSibling", n) }, siblings: function (e) { return S((e.parentNode || {}).firstChild, e) }, children: function (e) { return S(e.firstChild) }, contents: function (e) { return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes)) } }, function (e, t) { w.fn[e] = function (n, r) { var i = w.map(this, t, n); return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i) } }); var M = /[^\x20\t\r\n\f]+/g; function R(e) { var t = {}; return w.each(e.match(M) || [], function (e, n) { t[n] = !0 }), t } w.Callbacks = function (e) { e = "string" == typeof e ? R(e) : w.extend({}, e); var t, n, r, i, o = [], a = [], s = -1, u = function () { for (i = i || e.once, r = t = !0; a.length; s = -1) { n = a.shift(); while (++s < o.length) !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length, n = !1) } e.memory || (n = !1), t = !1, i && (o = n ? [] : "") }, l = { add: function () { return o && (n && !t && (s = o.length - 1, a.push(n)), function t(n) { w.each(n, function (n, r) { g(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== x(r) && t(r) }) }(arguments), n && !t && u()), this }, remove: function () { return w.each(arguments, function (e, t) { var n; while ((n = w.inArray(t, o, n)) > -1) o.splice(n, 1), n <= s && s-- }), this }, has: function (e) { return e ? w.inArray(e, o) > -1 : o.length > 0 }, empty: function () { return o && (o = []), this }, disable: function () { return i = a = [], o = n = "", this }, disabled: function () { return !o }, lock: function () { return i = a = [], n || t || (o = n = ""), this }, locked: function () { return !!i }, fireWith: function (e, n) { return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || u()), this }, fire: function () { return l.fireWith(this, arguments), this }, fired: function () { return !!r } }; return l }; function I(e) { return e } function W(e) { throw e } function $(e, t, n, r) { var i; try { e && g(i = e.promise) ? i.call(e).done(t).fail(n) : e && g(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r)) } catch (e) { n.apply(void 0, [e]) } } w.extend({ Deferred: function (t) { var n = [["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2], ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]], r = "pending", i = { state: function () { return r }, always: function () { return o.done(arguments).fail(arguments), this }, "catch": function (e) { return i.then(null, e) }, pipe: function () { var e = arguments; return w.Deferred(function (t) { w.each(n, function (n, r) { var i = g(e[r[4]]) && e[r[4]]; o[r[1]](function () { var e = i && i.apply(this, arguments); e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments) }) }), e = null }).promise() }, then: function (t, r, i) { var o = 0; function a(t, n, r, i) { return function () { var s = this, u = arguments, l = function () { var e, l; if (!(t < o)) { if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution"); l = e && ("object" == typeof e || "function" == typeof e) && e.then, g(l) ? i ? l.call(e, a(o, n, I, i), a(o, n, W, i)) : (o++ , l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith))) : (r !== I && (s = void 0, u = [e]), (i || n.resolveWith)(s, u)) } }, c = i ? l : function () { try { l() } catch (e) { w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && (s = void 0, u = [e]), n.rejectWith(s, u)) } }; t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c)) } } return w.Deferred(function (e) { n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W)) }).promise() }, promise: function (e) { return null != e ? w.extend(e, i) : i } }, o = {}; return w.each(n, function (e, t) { var a = t[2], s = t[5]; i[t[1]] = a.add, s && a.add(function () { r = s }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () { return o[t[0] + "With"](this === o ? void 0 : this, arguments), this }, o[t[0] + "With"] = a.fireWith }), i.promise(o), t && t.call(o, o), o }, when: function (e) { var t = arguments.length, n = t, r = Array(n), i = o.call(arguments), a = w.Deferred(), s = function (e) { return function (n) { r[e] = this, i[e] = arguments.length > 1 ? o.call(arguments) : n, --t || a.resolveWith(r, i) } }; if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then(); while (n--) $(i[n], s(n), a.reject); return a.promise() } }); var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/; w.Deferred.exceptionHook = function (t, n) { e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n) }, w.readyException = function (t) { e.setTimeout(function () { throw t }) }; var F = w.Deferred(); w.fn.ready = function (e) { return F.then(e)["catch"](function (e) { w.readyException(e) }), this }, w.extend({ isReady: !1, readyWait: 1, ready: function (e) { (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== e && --w.readyWait > 0 || F.resolveWith(r, [w])) } }), w.ready.then = F.then; function _() { r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready() } "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _)); var z = function (e, t, n, r, i, o, a) { var s = 0, u = e.length, l = null == n; if ("object" === x(n)) { i = !0; for (s in n) z(e, t, s, n[s], !0, o, a) } else if (void 0 !== r && (i = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function (e, t, n) { return l.call(w(e), n) })), t)) for (; s < u; s++)t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n))); return i ? e : l ? t.call(e) : u ? t(e[0], n) : o }, X = /^-ms-/, U = /-([a-z])/g; function V(e, t) { return t.toUpperCase() } function G(e) { return e.replace(X, "ms-").replace(U, V) } var Y = function (e) { return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType }; function Q() { this.expando = w.expando + Q.uid++ } Q.uid = 1, Q.prototype = { cache: function (e) { var t = e[this.expando]; return t || (t = {}, Y(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, { value: t, configurable: !0 }))), t }, set: function (e, t, n) { var r, i = this.cache(e); if ("string" == typeof t) i[G(t)] = n; else for (r in t) i[G(r)] = t[r]; return i }, get: function (e, t) { return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)] }, access: function (e, t, n) { return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t) }, remove: function (e, t) { var n, r = e[this.expando]; if (void 0 !== r) { if (void 0 !== t) { n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length; while (n--) delete r[t[n]] } (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]) } }, hasData: function (e) { var t = e[this.expando]; return void 0 !== t && !w.isEmptyObject(t) } }; var J = new Q, K = new Q, Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, ee = /[A-Z]/g; function te(e) { return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e) } function ne(e, t, n) { var r; if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(ee, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) { try { n = te(n) } catch (e) { } K.set(e, t, n) } else n = void 0; return n } w.extend({ hasData: function (e) { return K.hasData(e) || J.hasData(e) }, data: function (e, t, n) { return K.access(e, t, n) }, removeData: function (e, t) { K.remove(e, t) }, _data: function (e, t, n) { return J.access(e, t, n) }, _removeData: function (e, t) { J.remove(e, t) } }), w.fn.extend({ data: function (e, t) { var n, r, i, o = this[0], a = o && o.attributes; if (void 0 === e) { if (this.length && (i = K.get(o), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) { n = a.length; while (n--) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = G(r.slice(5)), ne(o, r, i[r])); J.set(o, "hasDataAttrs", !0) } return i } return "object" == typeof e ? this.each(function () { K.set(this, e) }) : z(this, function (t) { var n; if (o && void 0 === t) { if (void 0 !== (n = K.get(o, e))) return n; if (void 0 !== (n = ne(o, e))) return n } else this.each(function () { K.set(this, e, t) }) }, null, t, arguments.length > 1, null, !0) }, removeData: function (e) { return this.each(function () { K.remove(this, e) }) } }), w.extend({ queue: function (e, t, n) { var r; if (e) return t = (t || "fx") + "queue", r = J.get(e, t), n && (!r || Array.isArray(n) ? r = J.access(e, t, w.makeArray(n)) : r.push(n)), r || [] }, dequeue: function (e, t) { t = t || "fx"; var n = w.queue(e, t), r = n.length, i = n.shift(), o = w._queueHooks(e, t), a = function () { w.dequeue(e, t) }; "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire() }, _queueHooks: function (e, t) { var n = t + "queueHooks"; return J.get(e, n) || J.access(e, n, { empty: w.Callbacks("once memory").add(function () { J.remove(e, [t + "queue", n]) }) }) } }), w.fn.extend({ queue: function (e, t) { var n = 2; return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () { var n = w.queue(this, e, t); w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e) }) }, dequeue: function (e) { return this.each(function () { w.dequeue(this, e) }) }, clearQueue: function (e) { return this.queue(e || "fx", []) }, promise: function (e, t) { var n, r = 1, i = w.Deferred(), o = this, a = this.length, s = function () { --r || i.resolveWith(o, [o]) }; "string" != typeof e && (t = e, e = void 0), e = e || "fx"; while (a--) (n = J.get(o[a], e + "queueHooks")) && n.empty && (r++ , n.empty.add(s)); return s(), i.promise(t) } }); var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"), oe = ["Top", "Right", "Bottom", "Left"], ae = function (e, t) { return "none" === (e = t || e).style.display || "" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display") }, se = function (e, t, n, r) { var i, o, a = {}; for (o in t) a[o] = e.style[o], e.style[o] = t[o]; i = n.apply(e, r || []); for (o in t) e.style[o] = a[o]; return i }; function ue(e, t, n, r) { var i, o, a = 20, s = r ? function () { return r.cur() } : function () { return w.css(e, t, "") }, u = s(), l = n && n[3] || (w.cssNumber[t] ? "" : "px"), c = (w.cssNumber[t] || "px" !== l && +u) && ie.exec(w.css(e, t)); if (c && c[3] !== l) { u /= 2, l = l || c[3], c = +u || 1; while (a--) w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o; c *= 2, w.style(e, t, c + l), n = n || [] } return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i } var le = {}; function ce(e) { var t, n = e.ownerDocument, r = e.nodeName, i = le[r]; return i || (t = n.body.appendChild(n.createElement(r)), i = w.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), le[r] = i, i) } function fe(e, t) { for (var n, r, i = [], o = 0, a = e.length; o < a; o++)(r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = J.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && (i[o] = "none", J.set(r, "display", n))); for (o = 0; o < a; o++)null != i[o] && (e[o].style.display = i[o]); return e } w.fn.extend({ show: function () { return fe(this, !0) }, hide: function () { return fe(this) }, toggle: function (e) { return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () { ae(this) ? w(this).show() : w(this).hide() }) } }); var pe = /^(?:checkbox|radio)$/i, de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i, he = /^$|^module$|\/(?:java|ecma)script/i, ge = { option: [1, "<select multiple='multiple'>", "</select>"], thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""] }; ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td; function ye(e, t) { var n; return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && N(e, t) ? w.merge([e], n) : n } function ve(e, t) { for (var n = 0, r = e.length; n < r; n++)J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval")) } var me = /<|&#?\w+;/; function xe(e, t, n, r, i) { for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)if ((o = e[d]) || 0 === o) if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o); else if (me.test(o)) { a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2], c = u[0]; while (c--) a = a.lastChild; w.merge(p, a.childNodes), (a = f.firstChild).textContent = "" } else p.push(t.createTextNode(o)); f.textContent = "", d = 0; while (o = p[d++]) if (r && w.inArray(o, r) > -1) i && i.push(o); else if (l = w.contains(o.ownerDocument, o), a = ye(f.appendChild(o), "script"), l && ve(a), n) { c = 0; while (o = a[c++]) he.test(o.type || "") && n.push(o) } return f } !function () { var e = r.createDocumentFragment().appendChild(r.createElement("div")), t = r.createElement("input"); t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue }(); var be = r.documentElement, we = /^key/, Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/, Ce = /^([^.]*)(?:\.(.+)|)/; function Ee() { return !0 } function ke() { return !1 } function Se() { try { return r.activeElement } catch (e) { } } function De(e, t, n, r, i, o) { var a, s; if ("object" == typeof t) { "string" != typeof n && (r = r || n, n = void 0); for (s in t) De(e, s, n, r, t[s], o); return e } if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke; else if (!i) return e; return 1 === o && (a = i, (i = function (e) { return w().off(e), a.apply(this, arguments) }).guid = a.guid || (a.guid = w.guid++)), e.each(function () { w.event.add(this, t, i, r, n) }) } w.event = { global: {}, add: function (e, t, n, r, i) { var o, a, s, u, l, c, f, p, d, h, g, y = J.get(e); if (y) { n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(be, i), n.guid || (n.guid = w.guid++), (u = y.events) || (u = y.events = {}), (a = y.handle) || (a = y.handle = function (t) { return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0 }), l = (t = (t || "").match(M) || [""]).length; while (l--) d = g = (s = Ce.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = w.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = w.event.special[d] || {}, c = w.extend({ type: d, origType: g, data: r, handler: n, guid: n.guid, selector: i, needsContext: i && w.expr.match.needsContext.test(i), namespace: h.join(".") }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), w.event.global[d] = !0) } }, remove: function (e, t, n, r, i) { var o, a, s, u, l, c, f, p, d, h, g, y = J.hasData(e) && J.get(e); if (y && (u = y.events)) { l = (t = (t || "").match(M) || [""]).length; while (l--) if (s = Ce.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) { f = w.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length; while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount-- , f.remove && f.remove.call(e, c)); a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, y.handle) || w.removeEvent(e, d, y.handle), delete u[d]) } else for (d in u) w.event.remove(e, d + t[l], n, r, !0); w.isEmptyObject(u) && J.remove(e, "handle events") } }, dispatch: function (e) { var t = w.event.fix(e), n, r, i, o, a, s, u = new Array(arguments.length), l = (J.get(this, "events") || {})[t.type] || [], c = w.event.special[t.type] || {}; for (u[0] = t, n = 1; n < arguments.length; n++)u[n] = arguments[n]; if (t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) { s = w.event.handlers.call(this, t, l), n = 0; while ((o = s[n++]) && !t.isPropagationStopped()) { t.currentTarget = o.elem, r = 0; while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped()) t.rnamespace && !t.rnamespace.test(a.namespace) || (t.handleObj = a, t.data = a.data, void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation())) } return c.postDispatch && c.postDispatch.call(this, t), t.result } }, handlers: function (e, t) { var n, r, i, o, a, s = [], u = t.delegateCount, l = e.target; if (u && l.nodeType && !("click" === e.type && e.button >= 1)) for (; l !== this; l = l.parentNode || this)if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) { for (o = [], a = {}, n = 0; n < u; n++)void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r); o.length && s.push({ elem: l, handlers: o }) } return l = this, u < t.length && s.push({ elem: l, handlers: t.slice(u) }), s }, addProp: function (e, t) { Object.defineProperty(w.Event.prototype, e, { enumerable: !0, configurable: !0, get: g(t) ? function () { if (this.originalEvent) return t(this.originalEvent) } : function () { if (this.originalEvent) return this.originalEvent[e] }, set: function (t) { Object.defineProperty(this, e, { enumerable: !0, configurable: !0, writable: !0, value: t }) } }) }, fix: function (e) { return e[w.expando] ? e : new w.Event(e) }, special: { load: { noBubble: !0 }, focus: { trigger: function () { if (this !== Se() && this.focus) return this.focus(), !1 }, delegateType: "focusin" }, blur: { trigger: function () { if (this === Se() && this.blur) return this.blur(), !1 }, delegateType: "focusout" }, click: { trigger: function () { if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1 }, _default: function (e) { return N(e.target, "a") } }, beforeunload: { postDispatch: function (e) { void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result) } } } }, w.removeEvent = function (e, t, n) { e.removeEventListener && e.removeEventListener(t, n) }, w.Event = function (e, t) { if (!(this instanceof w.Event)) return new w.Event(e, t); e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0 }, w.Event.prototype = { constructor: w.Event, isDefaultPrevented: ke, isPropagationStopped: ke, isImmediatePropagationStopped: ke, isSimulated: !1, preventDefault: function () { var e = this.originalEvent; this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault() }, stopPropagation: function () { var e = this.originalEvent; this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation() }, stopImmediatePropagation: function () { var e = this.originalEvent; this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation() } }, w.each({ altKey: !0, bubbles: !0, cancelable: !0, changedTouches: !0, ctrlKey: !0, detail: !0, eventPhase: !0, metaKey: !0, pageX: !0, pageY: !0, shiftKey: !0, view: !0, "char": !0, charCode: !0, key: !0, keyCode: !0, button: !0, buttons: !0, clientX: !0, clientY: !0, offsetX: !0, offsetY: !0, pointerId: !0, pointerType: !0, screenX: !0, screenY: !0, targetTouches: !0, toElement: !0, touches: !0, which: function (e) { var t = e.button; return null == e.which && we.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which } }, w.event.addProp), w.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function (e, t) { w.event.special[e] = { delegateType: t, bindType: t, handle: function (e) { var n, r = this, i = e.relatedTarget, o = e.handleObj; return i && (i === r || w.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n } } }), w.fn.extend({ on: function (e, t, n, r) { return De(this, e, t, n, r) }, one: function (e, t, n, r) { return De(this, e, t, n, r, 1) }, off: function (e, t, n) { var r, i; if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this; if ("object" == typeof e) { for (i in e) this.off(i, t, e[i]); return this } return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () { w.event.remove(this, e, n, t) }) } }); var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi, Ae = /<script|<style|<link/i, je = /checked\s*(?:[^=]|=\s*.checked.)/i, qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g; function Le(e, t) { return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e } function He(e) { return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e } function Oe(e) { return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e } function Pe(e, t) { var n, r, i, o, a, s, u, l; if (1 === t.nodeType) { if (J.hasData(e) && (o = J.access(e), a = J.set(t, o), l = o.events)) { delete a.handle, a.events = {}; for (i in l) for (n = 0, r = l[i].length; n < r; n++)w.event.add(t, i, l[i][n]) } K.hasData(e) && (s = K.access(e), u = w.extend({}, s), K.set(t, u)) } } function Me(e, t) { var n = t.nodeName.toLowerCase(); "input" === n && pe.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue) } function Re(e, t, n, r) { t = a.apply([], t); var i, o, s, u, l, c, f = 0, p = e.length, d = p - 1, y = t[0], v = g(y); if (v || p > 1 && "string" == typeof y && !h.checkClone && je.test(y)) return e.each(function (i) { var o = e.eq(i); v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r) }); if (p && (i = xe(t, e[0].ownerDocument, !1, e, r), o = i.firstChild, 1 === i.childNodes.length && (i = o), o || r)) { for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++)l = i, f !== d && (l = w.clone(l, !0, !0), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f); if (u) for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++)l = s[f], he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l)) } return e } function Ie(e, t, n) { for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++)n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r)); return e } w.extend({ htmlPrefilter: function (e) { return e.replace(Ne, "<$1></$2>") }, clone: function (e, t, n) { var r, i, o, a, s = e.cloneNode(!0), u = w.contains(e.ownerDocument, e); if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e))) for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++)Me(o[r], a[r]); if (t) if (n) for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++)Pe(o[r], a[r]); else Pe(e, s); return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s }, cleanData: function (e) { for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++)if (Y(n)) { if (t = n[J.expando]) { if (t.events) for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle); n[J.expando] = void 0 } n[K.expando] && (n[K.expando] = void 0) } } }), w.fn.extend({ detach: function (e) { return Ie(this, e, !0) }, remove: function (e) { return Ie(this, e) }, text: function (e) { return z(this, function (e) { return void 0 === e ? w.text(this) : this.empty().each(function () { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e) }) }, null, e, arguments.length) }, append: function () { return Re(this, arguments, function (e) { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Le(this, e).appendChild(e) }) }, prepend: function () { return Re(this, arguments, function (e) { if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) { var t = Le(this, e); t.insertBefore(e, t.firstChild) } }) }, before: function () { return Re(this, arguments, function (e) { this.parentNode && this.parentNode.insertBefore(e, this) }) }, after: function () { return Re(this, arguments, function (e) { this.parentNode && this.parentNode.insertBefore(e, this.nextSibling) }) }, empty: function () { for (var e, t = 0; null != (e = this[t]); t++)1 === e.nodeType && (w.cleanData(ye(e, !1)), e.textContent = ""); return this }, clone: function (e, t) { return e = null != e && e, t = null == t ? e : t, this.map(function () { return w.clone(this, e, t) }) }, html: function (e) { return z(this, function (e) { var t = this[0] || {}, n = 0, r = this.length; if (void 0 === e && 1 === t.nodeType) return t.innerHTML; if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) { e = w.htmlPrefilter(e); try { for (; n < r; n++)1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), t.innerHTML = e); t = 0 } catch (e) { } } t && this.empty().append(e) }, null, e, arguments.length) }, replaceWith: function () { var e = []; return Re(this, arguments, function (t) { var n = this.parentNode; w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this)) }, e) } }), w.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (e, t) { w.fn[e] = function (e) { for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++)n = a === o ? this : this.clone(!0), w(i[a])[t](n), s.apply(r, n.get()); return this.pushStack(r) } }); var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"), $e = function (t) { var n = t.ownerDocument.defaultView; return n && n.opener || (n = e), n.getComputedStyle(t) }, Be = new RegExp(oe.join("|"), "i"); !function () { function t() { if (c) { l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", be.appendChild(l).appendChild(c); var t = e.getComputedStyle(c); i = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", be.removeChild(l), c = null } } function n(e) { return Math.round(parseFloat(e)) } var i, o, a, s, u, l = r.createElement("div"), c = r.createElement("div"); c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, { boxSizingReliable: function () { return t(), o }, pixelBoxStyles: function () { return t(), s }, pixelPosition: function () { return t(), i }, reliableMarginLeft: function () { return t(), u }, scrollboxSize: function () { return t(), a } })) }(); function Fe(e, t, n) { var r, i, o, a, s = e.style; return (n = n || $e(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)), !h.pixelBoxStyles() && We.test(a) && Be.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a } function _e(e, t) { return { get: function () { if (!e()) return (this.get = t).apply(this, arguments); delete this.get } } } var ze = /^(none|table(?!-c[ea]).+)/, Xe = /^--/, Ue = { position: "absolute", visibility: "hidden", display: "block" }, Ve = { letterSpacing: "0", fontWeight: "400" }, Ge = ["Webkit", "Moz", "ms"], Ye = r.createElement("div").style; function Qe(e) { if (e in Ye) return e; var t = e[0].toUpperCase() + e.slice(1), n = Ge.length; while (n--) if ((e = Ge[n] + t) in Ye) return e } function Je(e) { var t = w.cssProps[e]; return t || (t = w.cssProps[e] = Qe(e) || e), t } function Ke(e, t, n) { var r = ie.exec(t); return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t } function Ze(e, t, n, r, i, o) { var a = "width" === t ? 1 : 0, s = 0, u = 0; if (n === (r ? "border" : "content")) return 0; for (; a < 4; a += 2)"margin" === n && (u += w.css(e, n + oe[a], !0, i)), r ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i))) : (u += w.css(e, "padding" + oe[a], !0, i), "padding" !== n ? u += w.css(e, "border" + oe[a] + "Width", !0, i) : s += w.css(e, "border" + oe[a] + "Width", !0, i)); return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5))), u } function et(e, t, n) { var r = $e(e), i = Fe(e, t, r), o = "border-box" === w.css(e, "boxSizing", !1, r), a = o; if (We.test(i)) { if (!n) return i; i = "auto" } return a = a && (h.boxSizingReliable() || i === e.style[t]), ("auto" === i || !parseFloat(i) && "inline" === w.css(e, "display", !1, r)) && (i = e["offset" + t[0].toUpperCase() + t.slice(1)], a = !0), (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px" } w.extend({ cssHooks: { opacity: { get: function (e, t) { if (t) { var n = Fe(e, "opacity"); return "" === n ? "1" : n } } } }, cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 }, cssProps: {}, style: function (e, t, n, r) { if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) { var i, o, a, s = G(t), u = Xe.test(t), l = e.style; if (u || (t = Je(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t]; "string" == (o = typeof n) && (i = ie.exec(n)) && i[1] && (n = ue(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n)) } }, css: function (e, t, n, r) { var i, o, a, s = G(t); return Xe.test(t) || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Fe(e, t, r)), "normal" === i && t in Ve && (i = Ve[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i } }), w.each(["height", "width"], function (e, t) { w.cssHooks[t] = { get: function (e, n, r) { if (n) return !ze.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? et(e, t, r) : se(e, Ue, function () { return et(e, t, r) }) }, set: function (e, n, r) { var i, o = $e(e), a = "border-box" === w.css(e, "boxSizing", !1, o), s = r && Ze(e, t, r, a, o); return a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - .5)), s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ke(e, n, s) } } }), w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) { if (t) return (parseFloat(Fe(e, "marginLeft")) || e.getBoundingClientRect().left - se(e, { marginLeft: 0 }, function () { return e.getBoundingClientRect().left })) + "px" }), w.each({ margin: "", padding: "", border: "Width" }, function (e, t) { w.cssHooks[e + t] = { expand: function (n) { for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++)i[e + oe[r] + t] = o[r] || o[r - 2] || o[0]; return i } }, "margin" !== e && (w.cssHooks[e + t].set = Ke) }), w.fn.extend({ css: function (e, t) { return z(this, function (e, t, n) { var r, i, o = {}, a = 0; if (Array.isArray(t)) { for (r = $e(e), i = t.length; a < i; a++)o[t[a]] = w.css(e, t[a], !1, r); return o } return void 0 !== n ? w.style(e, t, n) : w.css(e, t) }, e, t, arguments.length > 1) } }); function tt(e, t, n, r, i) { return new tt.prototype.init(e, t, n, r, i) } w.Tween = tt, tt.prototype = { constructor: tt, init: function (e, t, n, r, i, o) { this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px") }, cur: function () { var e = tt.propHooks[this.prop]; return e && e.get ? e.get(this) : tt.propHooks._default.get(this) }, run: function (e) { var t, n = tt.propHooks[this.prop]; return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : tt.propHooks._default.set(this), this } }, tt.prototype.init.prototype = tt.prototype, tt.propHooks = { _default: { get: function (e) { var t; return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0 }, set: function (e) { w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit) } } }, tt.propHooks.scrollTop = tt.propHooks.scrollLeft = { set: function (e) { e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now) } }, w.easing = { linear: function (e) { return e }, swing: function (e) { return .5 - Math.cos(e * Math.PI) / 2 }, _default: "swing" }, w.fx = tt.prototype.init, w.fx.step = {}; var nt, rt, it = /^(?:toggle|show|hide)$/, ot = /queueHooks$/; function at() { rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick()) } function st() { return e.setTimeout(function () { nt = void 0 }), nt = Date.now() } function ut(e, t) { var n, r = 0, i = { height: e }; for (t = t ? 1 : 0; r < 4; r += 2 - t)i["margin" + (n = oe[r])] = i["padding" + n] = e; return t && (i.opacity = i.width = e), i } function lt(e, t, n) { for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++)if (r = i[o].call(n, t, e)) return r } function ct(e, t, n) { var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t, p = this, d = {}, h = e.style, g = e.nodeType && ae(e), y = J.get(e, "fxshow"); n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () { a.unqueued || s() }), a.unqueued++ , p.always(function () { p.always(function () { a.unqueued-- , w.queue(e, "fx").length || a.empty.fire() }) })); for (r in t) if (i = t[r], it.test(i)) { if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) { if ("show" !== i || !y || void 0 === y[r]) continue; g = !0 } d[r] = y && y[r] || w.style(e, r) } if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) { f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = y && y.display) && (l = J.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (p.done(function () { h.display = l }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () { h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2] })), u = !1; for (r in d) u || (y ? "hidden" in y && (g = y.hidden) : y = J.access(e, "fxshow", { display: l }), o && (y.hidden = !g), g && fe([e], !0), p.done(function () { g || fe([e]), J.remove(e, "fxshow"); for (r in d) w.style(e, r, d[r]) })), u = lt(g ? y[r] : 0, r, p), r in y || (y[r] = u.start, g && (u.end = u.start, u.start = 0)) } } function ft(e, t) { var n, r, i, o, a; for (n in e) if (r = G(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) { o = a.expand(o), delete e[r]; for (n in o) n in e || (e[n] = o[n], t[n] = i) } else t[r] = i } function pt(e, t, n) { var r, i, o = 0, a = pt.prefilters.length, s = w.Deferred().always(function () { delete u.elem }), u = function () { if (i) return !1; for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++)l.tweens[o].run(r); return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1) }, l = s.promise({ elem: e, props: w.extend({}, t), opts: w.extend(!0, { specialEasing: {}, easing: w.easing._default }, n), originalProperties: t, originalOptions: n, startTime: nt || st(), duration: n.duration, tweens: [], createTween: function (t, n) { var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing); return l.tweens.push(r), r }, stop: function (t) { var n = 0, r = t ? l.tweens.length : 0; if (i) return this; for (i = !0; n < r; n++)l.tweens[n].run(1); return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this } }), c = l.props; for (ft(c, l.opts.specialEasing); o < a; o++)if (r = pt.prefilters[o].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r; return w.map(c, lt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, { elem: e, anim: l, queue: l.opts.queue })), l } w.Animation = w.extend(pt, { tweeners: { "*": [function (e, t) { var n = this.createTween(e, t); return ue(n.elem, e, ie.exec(t), n), n }] }, tweener: function (e, t) { g(e) ? (t = e, e = ["*"]) : e = e.match(M); for (var n, r = 0, i = e.length; r < i; r++)n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t) }, prefilters: [ct], prefilter: function (e, t) { t ? pt.prefilters.unshift(e) : pt.prefilters.push(e) } }), w.speed = function (e, t, n) { var r = e && "object" == typeof e ? w.extend({}, e) : { complete: n || !n && t || g(e) && e, duration: e, easing: n && t || t && !g(t) && t }; return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () { g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue) }, r }, w.fn.extend({ fadeTo: function (e, t, n, r) { return this.filter(ae).css("opacity", 0).show().end().animate({ opacity: t }, e, n, r) }, animate: function (e, t, n, r) { var i = w.isEmptyObject(e), o = w.speed(t, n, r), a = function () { var t = pt(this, w.extend({}, e), o); (i || J.get(this, "finish")) && t.stop(!0) }; return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a) }, stop: function (e, t, n) { var r = function (e) { var t = e.stop; delete e.stop, t(n) }; return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () { var t = !0, i = null != e && e + "queueHooks", o = w.timers, a = J.get(this); if (i) a[i] && a[i].stop && r(a[i]); else for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]); for (i = o.length; i--;)o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1)); !t && n || w.dequeue(this, e) }) }, finish: function (e) { return !1 !== e && (e = e || "fx"), this.each(function () { var t, n = J.get(this), r = n[e + "queue"], i = n[e + "queueHooks"], o = w.timers, a = r ? r.length : 0; for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;)o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1)); for (t = 0; t < a; t++)r[t] && r[t].finish && r[t].finish.call(this); delete n.finish }) } }), w.each(["toggle", "show", "hide"], function (e, t) { var n = w.fn[t]; w.fn[t] = function (e, r, i) { return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i) } }), w.each({ slideDown: ut("show"), slideUp: ut("hide"), slideToggle: ut("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (e, t) { w.fn[e] = function (e, n, r) { return this.animate(t, e, n, r) } }), w.timers = [], w.fx.tick = function () { var e, t = 0, n = w.timers; for (nt = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1); n.length || w.fx.stop(), nt = void 0 }, w.fx.timer = function (e) { w.timers.push(e), w.fx.start() }, w.fx.interval = 13, w.fx.start = function () { rt || (rt = !0, at()) }, w.fx.stop = function () { rt = null }, w.fx.speeds = { slow: 600, fast: 200, _default: 400 }, w.fn.delay = function (t, n) { return t = w.fx ? w.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, r) { var i = e.setTimeout(n, t); r.stop = function () { e.clearTimeout(i) } }) }, function () { var e = r.createElement("input"), t = r.createElement("select").appendChild(r.createElement("option")); e.type = "checkbox", h.checkOn = "" !== e.value, h.optSelected = t.selected, (e = r.createElement("input")).value = "t", e.type = "radio", h.radioValue = "t" === e.value }(); var dt, ht = w.expr.attrHandle; w.fn.extend({ attr: function (e, t) { return z(this, w.attr, e, t, arguments.length > 1) }, removeAttr: function (e) { return this.each(function () { w.removeAttr(this, e) }) } }), w.extend({ attr: function (e, t, n) { var r, i, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r) }, attrHooks: { type: { set: function (e, t) { if (!h.radioValue && "radio" === t && N(e, "input")) { var n = e.value; return e.setAttribute("type", t), n && (e.value = n), t } } } }, removeAttr: function (e, t) { var n, r = 0, i = t && t.match(M); if (i && 1 === e.nodeType) while (n = i[r++]) e.removeAttribute(n) } }), dt = { set: function (e, t, n) { return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n } }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) { var n = ht[t] || w.find.attr; ht[t] = function (e, t, r) { var i, o, a = t.toLowerCase(); return r || (o = ht[a], ht[a] = i, i = null != n(e, t, r) ? a : null, ht[a] = o), i } }); var gt = /^(?:input|select|textarea|button)$/i, yt = /^(?:a|area)$/i; w.fn.extend({ prop: function (e, t) { return z(this, w.prop, e, t, arguments.length > 1) }, removeProp: function (e) { return this.each(function () { delete this[w.propFix[e] || e] }) } }), w.extend({ prop: function (e, t, n) { var r, i, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t] }, propHooks: { tabIndex: { get: function (e) { var t = w.find.attr(e, "tabindex"); return t ? parseInt(t, 10) : gt.test(e.nodeName) || yt.test(e.nodeName) && e.href ? 0 : -1 } } }, propFix: { "for": "htmlFor", "class": "className" } }), h.optSelected || (w.propHooks.selected = { get: function (e) { var t = e.parentNode; return t && t.parentNode && t.parentNode.selectedIndex, null }, set: function (e) { var t = e.parentNode; t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex) } }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () { w.propFix[this.toLowerCase()] = this }); function vt(e) { return (e.match(M) || []).join(" ") } function mt(e) { return e.getAttribute && e.getAttribute("class") || "" } function xt(e) { return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : [] } w.fn.extend({ addClass: function (e) { var t, n, r, i, o, a, s, u = 0; if (g(e)) return this.each(function (t) { w(this).addClass(e.call(this, t, mt(this))) }); if ((t = xt(e)).length) while (n = this[u++]) if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") { a = 0; while (o = t[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " "); i !== (s = vt(r)) && n.setAttribute("class", s) } return this }, removeClass: function (e) { var t, n, r, i, o, a, s, u = 0; if (g(e)) return this.each(function (t) { w(this).removeClass(e.call(this, t, mt(this))) }); if (!arguments.length) return this.attr("class", ""); if ((t = xt(e)).length) while (n = this[u++]) if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") { a = 0; while (o = t[a++]) while (r.indexOf(" " + o + " ") > -1) r = r.replace(" " + o + " ", " "); i !== (s = vt(r)) && n.setAttribute("class", s) } return this }, toggleClass: function (e, t) { var n = typeof e, r = "string" === n || Array.isArray(e); return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) { w(this).toggleClass(e.call(this, n, mt(this), t), t) }) : this.each(function () { var t, i, o, a; if (r) { i = 0, o = w(this), a = xt(e); while (t = a[i++]) o.hasClass(t) ? o.removeClass(t) : o.addClass(t) } else void 0 !== e && "boolean" !== n || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || "")) }) }, hasClass: function (e) { var t, n, r = 0; t = " " + e + " "; while (n = this[r++]) if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0; return !1 } }); var bt = /\r/g; w.fn.extend({ val: function (e) { var t, n, r, i = this[0]; { if (arguments.length) return r = g(e), this.each(function (n) { var i; 1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, function (e) { return null == e ? "" : e + "" })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i)) }); if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n } } }), w.extend({ valHooks: { option: { get: function (e) { var t = w.find.attr(e, "value"); return null != t ? t : vt(w.text(e)) } }, select: { get: function (e) { var t, n, r, i = e.options, o = e.selectedIndex, a = "select-one" === e.type, s = a ? null : [], u = a ? o + 1 : i.length; for (r = o < 0 ? u : a ? o : 0; r < u; r++)if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) { if (t = w(n).val(), a) return t; s.push(t) } return s }, set: function (e, t) { var n, r, i = e.options, o = w.makeArray(t), a = i.length; while (a--) ((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0); return n || (e.selectedIndex = -1), o } } } }), w.each(["radio", "checkbox"], function () { w.valHooks[this] = { set: function (e, t) { if (Array.isArray(t)) return e.checked = w.inArray(w(e).val(), t) > -1 } }, h.checkOn || (w.valHooks[this].get = function (e) { return null === e.getAttribute("value") ? "on" : e.value }) }), h.focusin = "onfocusin" in e; var wt = /^(?:focusinfocus|focusoutblur)$/, Tt = function (e) { e.stopPropagation() }; w.extend(w.event, { trigger: function (t, n, i, o) { var a, s, u, l, c, p, d, h, v = [i || r], m = f.call(t, "type") ? t.type : t, x = f.call(t, "namespace") ? t.namespace.split(".") : []; if (s = h = u = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !wt.test(m + w.event.triggered) && (m.indexOf(".") > -1 && (m = (x = m.split(".")).shift(), x.sort()), c = m.indexOf(":") < 0 && "on" + m, t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = x.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : w.makeArray(n, [t]), d = w.event.special[m] || {}, o || !d.trigger || !1 !== d.trigger.apply(i, n))) { if (!o && !d.noBubble && !y(i)) { for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode)v.push(s), u = s; u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e) } a = 0; while ((s = v[a++]) && !t.isPropagationStopped()) h = s, t.type = a > 1 ? l : d.bindType || m, (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n), (p = c && s[c]) && p.apply && Y(s) && (t.result = p.apply(s, n), !1 === t.result && t.preventDefault()); return t.type = m, o || t.isDefaultPrevented() || d._default && !1 !== d._default.apply(v.pop(), n) || !Y(i) || c && g(i[m]) && !y(i) && ((u = i[c]) && (i[c] = null), w.event.triggered = m, t.isPropagationStopped() && h.addEventListener(m, Tt), i[m](), t.isPropagationStopped() && h.removeEventListener(m, Tt), w.event.triggered = void 0, u && (i[c] = u)), t.result } }, simulate: function (e, t, n) { var r = w.extend(new w.Event, n, { type: e, isSimulated: !0 }); w.event.trigger(r, null, t) } }), w.fn.extend({ trigger: function (e, t) { return this.each(function () { w.event.trigger(e, t, this) }) }, triggerHandler: function (e, t) { var n = this[0]; if (n) return w.event.trigger(e, t, n, !0) } }), h.focusin || w.each({ focus: "focusin", blur: "focusout" }, function (e, t) { var n = function (e) { w.event.simulate(t, e.target, w.event.fix(e)) }; w.event.special[t] = { setup: function () { var r = this.ownerDocument || this, i = J.access(r, t); i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1) }, teardown: function () { var r = this.ownerDocument || this, i = J.access(r, t) - 1; i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t)) } } }); var Ct = e.location, Et = Date.now(), kt = /\?/; w.parseXML = function (t) { var n; if (!t || "string" != typeof t) return null; try { n = (new e.DOMParser).parseFromString(t, "text/xml") } catch (e) { n = void 0 } return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n }; var St = /\[\]$/, Dt = /\r?\n/g, Nt = /^(?:submit|button|image|reset|file)$/i, At = /^(?:input|select|textarea|keygen)/i; function jt(e, t, n, r) { var i; if (Array.isArray(t)) w.each(t, function (t, i) { n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r) }); else if (n || "object" !== x(t)) r(e, t); else for (i in t) jt(e + "[" + i + "]", t[i], n, r) } w.param = function (e, t) { var n, r = [], i = function (e, t) { var n = g(t) ? t() : t; r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n) }; if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () { i(this.name, this.value) }); else for (n in e) jt(n, e[n], t, i); return r.join("&") }, w.fn.extend({ serialize: function () { return w.param(this.serializeArray()) }, serializeArray: function () { return this.map(function () { var e = w.prop(this, "elements"); return e ? w.makeArray(e) : this }).filter(function () { var e = this.type; return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e)) }).map(function (e, t) { var n = w(this).val(); return null == n ? null : Array.isArray(n) ? w.map(n, function (e) { return { name: t.name, value: e.replace(Dt, "\r\n") } }) : { name: t.name, value: n.replace(Dt, "\r\n") } }).get() } }); var qt = /%20/g, Lt = /#.*$/, Ht = /([?&])_=[^&]*/, Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm, Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Mt = /^(?:GET|HEAD)$/, Rt = /^\/\//, It = {}, Wt = {}, $t = "*/".concat("*"), Bt = r.createElement("a"); Bt.href = Ct.href; function Ft(e) { return function (t, n) { "string" != typeof t && (n = t, t = "*"); var r, i = 0, o = t.toLowerCase().match(M) || []; if (g(n)) while (r = o[i++]) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n) } } function _t(e, t, n, r) { var i = {}, o = e === Wt; function a(s) { var u; return i[s] = !0, w.each(e[s] || [], function (e, s) { var l = s(t, n, r); return "string" != typeof l || o || i[l] ? o ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1) }), u } return a(t.dataTypes[0]) || !i["*"] && a("*") } function zt(e, t) { var n, r, i = w.ajaxSettings.flatOptions || {}; for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]); return r && w.extend(!0, e, r), e } function Xt(e, t, n) { var r, i, o, a, s = e.contents, u = e.dataTypes; while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type")); if (r) for (i in s) if (s[i] && s[i].test(r)) { u.unshift(i); break } if (u[0] in n) o = u[0]; else { for (i in n) { if (!u[0] || e.converters[i + " " + u[0]]) { o = i; break } a || (a = i) } o = o || a } if (o) return o !== u[0] && u.unshift(o), n[o] } function Ut(e, t, n, r) { var i, o, a, s, u, l = {}, c = e.dataTypes.slice(); if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a]; o = c.shift(); while (o) if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift()) if ("*" === o) o = u; else if ("*" !== u && u !== o) { if (!(a = l[u + " " + o] || l["* " + o])) for (i in l) if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) { !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1])); break } if (!0 !== a) if (a && e["throws"]) t = a(t); else try { t = a(t) } catch (e) { return { state: "parsererror", error: a ? e : "No conversion from " + u + " to " + o } } } return { state: "success", data: t } } w.extend({ active: 0, lastModified: {}, etag: {}, ajaxSettings: { url: Ct.href, type: "GET", isLocal: Pt.test(Ct.protocol), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": $t, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": JSON.parse, "text xml": w.parseXML }, flatOptions: { url: !0, context: !0 } }, ajaxSetup: function (e, t) { return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e) }, ajaxPrefilter: Ft(It), ajaxTransport: Ft(Wt), ajax: function (t, n) { "object" == typeof t && (n = t, t = void 0), n = n || {}; var i, o, a, s, u, l, c, f, p, d, h = w.ajaxSetup({}, n), g = h.context || h, y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event, v = w.Deferred(), m = w.Callbacks("once memory"), x = h.statusCode || {}, b = {}, T = {}, C = "canceled", E = { readyState: 0, getResponseHeader: function (e) { var t; if (c) { if (!s) { s = {}; while (t = Ot.exec(a)) s[t[1].toLowerCase()] = t[2] } t = s[e.toLowerCase()] } return null == t ? null : t }, getAllResponseHeaders: function () { return c ? a : null }, setRequestHeader: function (e, t) { return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, b[e] = t), this }, overrideMimeType: function (e) { return null == c && (h.mimeType = e), this }, statusCode: function (e) { var t; if (e) if (c) E.always(e[E.status]); else for (t in e) x[t] = [x[t], e[t]]; return this }, abort: function (e) { var t = e || C; return i && i.abort(t), k(0, t), this } }; if (v.promise(E), h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""], null == h.crossDomain) { l = r.createElement("a"); try { l.href = h.url, l.href = l.href, h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host } catch (e) { h.crossDomain = !0 } } if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c) return E; (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Mt.test(h.type), o = h.url.replace(Lt, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (d = h.url.slice(o.length), h.data && (h.processData || "string" == typeof h.data) && (o += (kt.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(Ht, "$1"), d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d), h.url = o + d), h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && E.setRequestHeader("Content-Type", h.contentType), E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]); for (p in h.headers) E.setRequestHeader(p, h.headers[p]); if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort(); if (C = "abort", m.add(h.complete), E.done(h.success), E.fail(h.error), i = _t(Wt, h, n, E)) { if (E.readyState = 1, f && y.trigger("ajaxSend", [E, h]), c) return E; h.async && h.timeout > 0 && (u = e.setTimeout(function () { E.abort("timeout") }, h.timeout)); try { c = !1, i.send(b, k) } catch (e) { if (c) throw e; k(-1, e) } } else k(-1, "No Transport"); function k(t, n, r, s) { var l, p, d, b, T, C = n; c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", E.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = Xt(h, E, r)), b = Ut(h, b, E, l), l ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = b.state, p = b.data, l = !(d = b.error))) : (d = C, !t && C || (C = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (n || C) + "", l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]), E.statusCode(x), x = void 0, f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]), m.fireWith(g, [E, C]), f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop"))) } return E }, getJSON: function (e, t, n) { return w.get(e, t, n, "json") }, getScript: function (e, t) { return w.get(e, void 0, t, "script") } }), w.each(["get", "post"], function (e, t) { w[t] = function (e, n, r, i) { return g(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({ url: e, type: t, dataType: i, data: n, success: r }, w.isPlainObject(e) && e)) } }), w._evalUrl = function (e) { return w.ajax({ url: e, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, "throws": !0 }) }, w.fn.extend({ wrapAll: function (e) { var t; return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () { var e = this; while (e.firstElementChild) e = e.firstElementChild; return e }).append(this)), this }, wrapInner: function (e) { return g(e) ? this.each(function (t) { w(this).wrapInner(e.call(this, t)) }) : this.each(function () { var t = w(this), n = t.contents(); n.length ? n.wrapAll(e) : t.append(e) }) }, wrap: function (e) { var t = g(e); return this.each(function (n) { w(this).wrapAll(t ? e.call(this, n) : e) }) }, unwrap: function (e) { return this.parent(e).not("body").each(function () { w(this).replaceWith(this.childNodes) }), this } }), w.expr.pseudos.hidden = function (e) { return !w.expr.pseudos.visible(e) }, w.expr.pseudos.visible = function (e) { return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length) }, w.ajaxSettings.xhr = function () { try { return new e.XMLHttpRequest } catch (e) { } }; var Vt = { 0: 200, 1223: 204 }, Gt = w.ajaxSettings.xhr(); h.cors = !!Gt && "withCredentials" in Gt, h.ajax = Gt = !!Gt, w.ajaxTransport(function (t) { var n, r; if (h.cors || Gt && !t.crossDomain) return { send: function (i, o) { var a, s = t.xhr(); if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) s[a] = t.xhrFields[a]; t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest"); for (a in i) s.setRequestHeader(a, i[a]); n = function (e) { return function () { n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? { binary: s.response } : { text: s.responseText }, s.getAllResponseHeaders())) } }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () { 4 === s.readyState && e.setTimeout(function () { n && r() }) }, n = n("abort"); try { s.send(t.hasContent && t.data || null) } catch (e) { if (n) throw e } }, abort: function () { n && n() } } }), w.ajaxPrefilter(function (e) { e.crossDomain && (e.contents.script = !1) }), w.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function (e) { return w.globalEval(e), e } } }), w.ajaxPrefilter("script", function (e) { void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET") }), w.ajaxTransport("script", function (e) { if (e.crossDomain) { var t, n; return { send: function (i, o) { t = w("<script>").prop({ charset: e.scriptCharset, src: e.url }).on("load error", n = function (e) { t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type) }), r.head.appendChild(t[0]) }, abort: function () { n && n() } } } }); var Yt = [], Qt = /(=)\?(?=&|$)|\?\?/; w.ajaxSetup({ jsonp: "callback", jsonpCallback: function () { var e = Yt.pop() || w.expando + "_" + Et++; return this[e] = !0, e } }), w.ajaxPrefilter("json jsonp", function (t, n, r) { var i, o, a, s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data"); if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Qt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () { return a || w.error(i + " was not called"), a[0] }, t.dataTypes[0] = "json", o = e[i], e[i] = function () { a = arguments }, r.always(function () { void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Yt.push(i)), a && g(o) && o(a[0]), a = o = void 0 }), "script" }), h.createHTMLDocument = function () { var e = r.implementation.createHTMLDocument("").body; return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length }(), w.parseHTML = function (e, t, n) { if ("string" != typeof e) return []; "boolean" == typeof t && (n = t, t = !1); var i, o, a; return t || (h.createHTMLDocument ? ((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(i)) : t = r), o = A.exec(e), a = !n && [], o ? [t.createElement(o[1])] : (o = xe([e], t, a), a && a.length && w(a).remove(), w.merge([], o.childNodes)) }, w.fn.load = function (e, t, n) { var r, i, o, a = this, s = e.indexOf(" "); return s > -1 && (r = vt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), a.length > 0 && w.ajax({ url: e, type: i || "GET", dataType: "html", data: t }).done(function (e) { o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e) }).always(n && function (e, t) { a.each(function () { n.apply(this, o || [e.responseText, t, e]) }) }), this }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) { w.fn[t] = function (e) { return this.on(t, e) } }), w.expr.pseudos.animated = function (e) { return w.grep(w.timers, function (t) { return e === t.elem }).length }, w.offset = { setOffset: function (e, t, n) { var r, i, o, a, s, u, l, c = w.css(e, "position"), f = w(e), p = {}; "static" === c && (e.style.position = "relative"), s = f.offset(), o = w.css(e, "top"), u = w.css(e, "left"), (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? (a = (r = f.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (p.top = t.top - s.top + a), null != t.left && (p.left = t.left - s.left + i), "using" in t ? t.using.call(e, p) : f.css(p) } }, w.fn.extend({ offset: function (e) { if (arguments.length) return void 0 === e ? this : this.each(function (t) { w.offset.setOffset(this, e, t) }); var t, n, r = this[0]; if (r) return r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, { top: t.top + n.pageYOffset, left: t.left + n.pageXOffset }) : { top: 0, left: 0 } }, position: function () { if (this[0]) { var e, t, n, r = this[0], i = { top: 0, left: 0 }; if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect(); else { t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement; while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) e = e.parentNode; e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0)) } return { top: t.top - i.top - w.css(r, "marginTop", !0), left: t.left - i.left - w.css(r, "marginLeft", !0) } } }, offsetParent: function () { return this.map(function () { var e = this.offsetParent; while (e && "static" === w.css(e, "position")) e = e.offsetParent; return e || be }) } }), w.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (e, t) { var n = "pageYOffset" === t; w.fn[e] = function (r) { return z(this, function (e, r, i) { var o; if (y(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r]; o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i }, e, r, arguments.length) } }), w.each(["top", "left"], function (e, t) { w.cssHooks[t] = _e(h.pixelPosition, function (e, n) { if (n) return n = Fe(e, t), We.test(n) ? w(e).position()[t] + "px" : n }) }), w.each({ Height: "height", Width: "width" }, function (e, t) { w.each({ padding: "inner" + e, content: t, "": "outer" + e }, function (n, r) { w.fn[r] = function (i, o) { var a = arguments.length && (n || "boolean" != typeof i), s = n || (!0 === i || !0 === o ? "margin" : "border"); return z(this, function (t, n, i) { var o; return y(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s) }, t, a ? i : void 0, a) } }) }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) { w.fn[t] = function (e, n) { return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t) } }), w.fn.extend({ hover: function (e, t) { return this.mouseenter(e).mouseleave(t || e) } }), w.fn.extend({ bind: function (e, t, n) { return this.on(e, null, t, n) }, unbind: function (e, t) { return this.off(e, null, t) }, delegate: function (e, t, n, r) { return this.on(t, e, n, r) }, undelegate: function (e, t, n) { return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n) } }), w.proxy = function (e, t) { var n, r, i; if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = o.call(arguments, 2), i = function () { return e.apply(t || this, r.concat(o.call(arguments))) }, i.guid = e.guid = e.guid || w.guid++ , i }, w.holdReady = function (e) { e ? w.readyWait++ : w.ready(!0) }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = N, w.isFunction = g, w.isWindow = y, w.camelCase = G, w.type = x, w.now = Date.now, w.isNumeric = function (e) { var t = w.type(e); return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e)) }, "function" == typeof define && define.amd && define("jquery", [], function () { return w }); var Jt = e.jQuery, Kt = e.$; return w.noConflict = function (t) { return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w }, t || (e.jQuery = e.$ = w), w });
}
if (callback) callback();
}

/*! Font Awesome by Dave Gandy - http://fontawesome.io | Licensed under MIT License and SIL OFL 1.1 (http://fontawesome.io/license/) */
function LimoniAppsLoadFontAwesome(callback) {
if (typeof window.FontAwesomeCdnConfig !== 'object') {
window.FontAwesomeCdnConfig = { autoA11y: { enabled: false }, asyncLoading: { enabled: false }, reporting: { enabled: true, domains: "localhost, *.dev" }, useUrl: "use.fontawesome.com", faCdnUrl: "https://cdn.fontawesome.com:443", code: "a2530aeeee" };
!function(){function a(a){var b,c=[],d=document,e=d.documentElement.doScroll,f="DOMContentLoaded",g=(e?/^loaded|^c/:/^loaded|^i|^c/).test(d.readyState);g||d.addEventListener(f,b=function(){for(d.removeEventListener(f,b),g=1;b=c.shift();)b()}),g?setTimeout(a,0):c.push(a)}function b(a,b){var c=!1;return a.split(",").forEach(function(a){var d=new RegExp(a.trim().replace(".","\\.").replace("*","(.*)"));b.match(d)&&(c=!0)}),c}function c(a){"undefined"!=typeof MutationObserver&&new MutationObserver(a).observe(document,{childList:!0,subtree:!0})}function d(a){var b,c,d,e;a=a||"fa",b=document.querySelectorAll("."+a),Array.prototype.forEach.call(b,function(a){c=a.getAttribute("title"),a.setAttribute("aria-hidden","true"),d=a.nextElementSibling?!a.nextElementSibling.classList.contains("sr-only"):!0,c&&d&&(e=document.createElement("span"),e.innerHTML=c,e.classList.add("sr-only"),a.parentNode.insertBefore(e,a.nextSibling))})}!function(){"use strict";function a(a){l.push(a),1==l.length&&k()}function b(){for(;l.length;)l[0](),l.shift()}function c(a){this.a=m,this.b=void 0,this.f=[];var b=this;try{a(function(a){f(b,a)},function(a){g(b,a)})}catch(c){g(b,c)}}function d(a){return new c(function(b,c){c(a)})}function e(a){return new c(function(b){b(a)})}function f(a,b){if(a.a==m){if(b==a)throw new TypeError;var c=!1;try{var d=b&&b.then;if(null!=b&&"object"==typeof b&&"function"==typeof d)return void d.call(b,function(b){c||f(a,b),c=!0},function(b){c||g(a,b),c=!0})}catch(e){return void(c||g(a,e))}a.a=0,a.b=b,h(a)}}function g(a,b){if(a.a==m){if(b==a)throw new TypeError;a.a=1,a.b=b,h(a)}}function h(b){a(function(){if(b.a!=m)for(;b.f.length;){var a=b.f.shift(),c=a[0],d=a[1],e=a[2],a=a[3];try{0==b.a?e("function"==typeof c?c.call(void 0,b.b):b.b):1==b.a&&("function"==typeof d?e(d.call(void 0,b.b)):a(b.b))}catch(f){a(f)}}})}function i(a){return new c(function(b,c){function d(c){return function(d){g[c]=d,f+=1,f==a.length&&b(g)}}var f=0,g=[];0==a.length&&b(g);for(var h=0;h<a.length;h+=1)e(a[h]).c(d(h),c)})}function j(a){return new c(function(b,c){for(var d=0;d<a.length;d+=1)e(a[d]).c(b,c)})}var k,l=[];k=function(){setTimeout(b)};var m=2;c.prototype.g=function(a){return this.c(void 0,a)},c.prototype.c=function(a,b){var d=this;return new c(function(c,e){d.f.push([a,b,c,e]),h(d)})},window.Promise||(window.Promise=c,window.Promise.resolve=e,window.Promise.reject=d,window.Promise.race=j,window.Promise.all=i,window.Promise.prototype.then=c.prototype.c,window.Promise.prototype["catch"]=c.prototype.g)}(),function(){function a(a){this.el=a;for(var b=a.className.replace(/^\s+|\s+$/g,"").split(/\s+/),c=0;c<b.length;c++)d.call(this,b[c])}function b(a,b,c){Object.defineProperty?Object.defineProperty(a,b,{get:c}):a.__defineGetter__(b,c)}if(!("undefined"==typeof window.Element||"classList"in document.documentElement)){var c=Array.prototype,d=c.push,e=c.splice,f=c.join;a.prototype={add:function(a){this.contains(a)||(d.call(this,a),this.el.className=this.toString())},contains:function(a){return-1!=this.el.className.indexOf(a)},item:function(a){return this[a]||null},remove:function(a){if(this.contains(a)){for(var b=0;b<this.length&&this[b]!=a;b++);e.call(this,b,1),this.el.className=this.toString()}},toString:function(){return f.call(this," ")},toggle:function(a){return this.contains(a)?this.remove(a):this.add(a),this.contains(a)}},window.DOMTokenList=a,b(Element.prototype,"classList",function(){return new a(this)})}}();var e=function(a,b,c){function d(a){return g.body?a():void setTimeout(function(){d(a)})}function e(){h.addEventListener&&h.removeEventListener("load",e),h.media=c||"all"}var f,g=window.document,h=g.createElement("link");if(b)f=b;else{var i=(g.body||g.getElementsByTagName("head")[0]).childNodes;f=i[i.length-1]}var j=g.styleSheets;h.rel="stylesheet",h.href=a,h.media="only x",d(function(){f.parentNode.insertBefore(h,b?f:f.nextSibling)});var k=function(a){for(var b=h.href,c=j.length;c--;)if(j[c].href===b)return a();setTimeout(function(){k(a)})};return h.addEventListener&&h.addEventListener("load",e),h.onloadcssdefined=k,k(e),h},f=null;!function(){function a(a,b){document.addEventListener?a.addEventListener("scroll",b,!1):a.attachEvent("scroll",b)}function b(a){document.body?a():document.addEventListener?document.addEventListener("DOMContentLoaded",function b(){document.removeEventListener("DOMContentLoaded",b),a()}):document.attachEvent("onreadystatechange",function c(){"interactive"!=document.readyState&&"complete"!=document.readyState||(document.detachEvent("onreadystatechange",c),a())})}function c(a){this.a=document.createElement("div"),this.a.setAttribute("aria-hidden","true"),this.a.appendChild(document.createTextNode(a)),this.b=document.createElement("span"),this.c=document.createElement("span"),this.h=document.createElement("span"),this.f=document.createElement("span"),this.g=-1,this.b.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.c.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.f.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.h.style.cssText="display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;",this.b.appendChild(this.h),this.c.appendChild(this.f),this.a.appendChild(this.b),this.a.appendChild(this.c)}function d(a,b){a.a.style.cssText="max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:"+b+";"}function e(a){var b=a.a.offsetWidth,c=b+100;return a.f.style.width=c+"px",a.c.scrollLeft=c,a.b.scrollLeft=a.b.scrollWidth+100,a.g!==b?(a.g=b,!0):!1}function g(b,c){function d(){var a=f;e(a)&&a.a.parentNode&&c(a.g)}var f=b;a(b.b,d),a(b.c,d),e(b)}function h(a,b){var c=b||{};this.family=a,this.style=c.style||"normal",this.weight=c.weight||"normal",this.stretch=c.stretch||"normal"}function i(){if(null===l){var a=document.createElement("div");try{a.style.font="condensed 100px sans-serif"}catch(b){}l=""!==a.style.font}return l}function j(a,b){return[a.style,a.weight,i()?a.stretch:"","100px",b].join(" ")}var k=null,l=null,m=null;h.prototype.load=function(a,e){var f=this,h=a||"BESbswy",i=e||3e3,l=(new Date).getTime();return new Promise(function(a,e){if(null===m&&(m=!!window.FontFace),m){var n=new Promise(function(a,b){function c(){(new Date).getTime()-l>=i?b():document.fonts.load(j(f,f.family),h).then(function(b){1<=b.length?a():setTimeout(c,25)},function(){b()})}c()}),o=new Promise(function(a,b){setTimeout(b,i)});Promise.race([o,n]).then(function(){a(f)},function(){e(f)})}else b(function(){function b(){var b;(b=-1!=q&&-1!=r||-1!=q&&-1!=s||-1!=r&&-1!=s)&&((b=q!=r&&q!=s&&r!=s)||(null===k&&(b=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent),k=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))),b=k&&(q==t&&r==t&&s==t||q==u&&r==u&&s==u||q==v&&r==v&&s==v)),b=!b),b&&(w.parentNode&&w.parentNode.removeChild(w),clearTimeout(x),a(f))}function m(){if((new Date).getTime()-l>=i)w.parentNode&&w.parentNode.removeChild(w),e(f);else{var a=document.hidden;!0!==a&&void 0!==a||(q=n.a.offsetWidth,r=o.a.offsetWidth,s=p.a.offsetWidth,b()),x=setTimeout(m,50)}}var n=new c(h),o=new c(h),p=new c(h),q=-1,r=-1,s=-1,t=-1,u=-1,v=-1,w=document.createElement("div"),x=0;w.dir="ltr",d(n,j(f,"sans-serif")),d(o,j(f,"serif")),d(p,j(f,"monospace")),w.appendChild(n.a),w.appendChild(o.a),w.appendChild(p.a),document.body.appendChild(w),t=n.a.offsetWidth,u=o.a.offsetWidth,v=p.a.offsetWidth,m(),g(n,function(a){q=a,b()}),d(n,j(f,'"'+f.family+'",sans-serif')),g(o,function(a){r=a,b()}),d(o,j(f,'"'+f.family+'",serif')),g(p,function(a){s=a,b()}),d(p,j(f,'"'+f.family+'",monospace'))})})},f=h}();var g={observe:function(a,b){for(var c=b.prefix,d=function(a){var b=a.weight?"-"+a.weight:"",d=a.style?"-"+a.style:"",e=a.className?"-"+a.className:"",g=a.className?"-"+a.className+b+d:"",h=document.getElementsByTagName("html")[0].classList,i=function(a){h.add(c+e+"-"+a),h.add(c+g+"-"+a)},j=function(a){h.remove(c+e+"-"+a),h.remove(c+g+"-"+a)};i("loading"),new f(a.familyName).load(a.testString).then(function(){i("ready"),j("loading")},function(){i("failed"),j("loading")})},e=0;e<a.length;e++)d(a[e])}},h={load:function(a){var b=document.createElement("link");b.href=a,b.media="all",b.rel="stylesheet",document.getElementsByTagName("head")[0].appendChild(b)},loadAsync:function(a){e(a)}},i={load:function(a){var b=document.createElement("script"),c=document.scripts[0];b.src=a,c.parentNode.appendChild(b)}};try{if(window.FontAwesomeCdnConfig){var j=window.FontAwesomeCdnConfig,k=j.useUrl,l=j.faCdnUrl,m=j.code,n="FontAwesome",o="fa",p="?",q=d.bind(d,"fa"),r=function(){};j.autoA11y.enabled&&(a(q),c(q)),j.reporting.enabled&&b(j.reporting.domains,location.host),cssUrl="https://"+k+"/"+m+".css",new f(n).load(p).then(function(){var a=(window.FontAwesomeHooks||{}).loaded||r;a()},r),j.asyncLoading.enabled?h.loadAsync(cssUrl):h.load(cssUrl),g.observe([{familyName:n,testString:p}],{prefix:o+"-events-icons"})}}catch(s){}}();
}
if (callback) callback();
}

/*! Ouibounce by Carl Sednaoui - https://github.com/carlsednaoui/ouibounce | Licensed under MIT License (https://github.com/carlsednaoui/ouibounce/blob/master/license.md) */
function LimoniAppsLoadOuiBounce(callback) {
if (typeof(ouibounce) !== 'function') {
!function(e,n){"function"==typeof define&&define.amd?define(n):"object"==typeof exports?module.exports=n(require,exports,module):e.ouibounce=n()}(this,function(e,n,o){return function(e,n){"use strict";function o(e,n){return"undefined"==typeof e?n:e}function i(e){var n=24*e*60*60*1e3,o=new Date;return o.setTime(o.getTime()+n),"; expires="+o.toUTCString()}function t(){s()||(L.addEventListener("mouseleave",u),L.addEventListener("mouseenter",r),L.addEventListener("keydown",c))}function u(e){e.clientY>k||(D=setTimeout(m,y))}function r(){D&&(clearTimeout(D),D=null)}function c(e){g||e.metaKey&&76===e.keyCode&&(g=!0,D=setTimeout(m,y))}function d(e,n){return a()[e]===n}function a(){for(var e=document.cookie.split("; "),n={},o=e.length-1;o>=0;o--){var i=e[o].split("=");n[i[0]]=i[1]}return n}function s(){return d(T,"true")&&!v}function m(){s()||(e&&(e.style.display="block"),E(),f())}function f(e){var n=e||{};"undefined"!=typeof n.cookieExpire&&(b=i(n.cookieExpire)),n.sitewide===!0&&(w=";path=/"),"undefined"!=typeof n.cookieDomain&&(x=";domain="+n.cookieDomain),"undefined"!=typeof n.cookieName&&(T=n.cookieName),document.cookie=T+"=true"+b+x+w,L.removeEventListener("mouseleave",u),L.removeEventListener("mouseenter",r),L.removeEventListener("keydown",c)}var l=n||{},v=l.aggressive||!1,k=o(l.sensitivity,20),p=o(l.timer,1e3),y=o(l.delay,0),E=l.callback||function(){},b=i(l.cookieExpire)||"",x=l.cookieDomain?";domain="+l.cookieDomain:"",T=l.cookieName?l.cookieName:"viewedOuibounceModal",w=l.sitewide===!0?";path=/":"",D=null,L=document.documentElement;setTimeout(t,p);var g=!1;return{fire:m,disable:f,isDisabled:s}}});
}
if (callback) callback();
}

/* Project: Bootstrap Growl = v3.1.3 | Description: Turns standard Bootstrap alerts into "Growl-like" notifications. | Author: Mouse0270 aka Robert McIntosh | License: MIT License | Website: https://github.com/mouse0270/bootstrap-growl */
function LimoniAppsLoadJQueryNotify(callback) {
if (typeof jQuery === 'function' && typeof jQuery.notify !== 'function') {
    !function (t) { "function" == typeof define && define.amd ? define(["jquery"], t) : t("object" == typeof exports ? require("jquery") : jQuery) }(function (t) { function e(e, i, n) { var i = { content: { message: "object" == typeof i ? i.message : i, title: i.title ? i.title : "", icon: i.icon ? i.icon : "", url: i.url ? i.url : "#", target: i.target ? i.target : "-" } }; n = t.extend(!0, {}, i, n), this.settings = t.extend(!0, {}, s, n), this._defaults = s, "-" == this.settings.content.target && (this.settings.content.target = this.settings.url_target), this.animations = { start: "webkitAnimationStart oanimationstart MSAnimationStart animationstart", end: "webkitAnimationEnd oanimationend MSAnimationEnd animationend" }, "number" == typeof this.settings.offset && (this.settings.offset = { x: this.settings.offset, y: this.settings.offset }), this.init() } var s = { element: "body", position: null, type: "info", allow_dismiss: !0, newest_on_top: !1, showProgressbar: !1, placement: { from: "top", align: "right" }, offset: 20, spacing: 10, z_index: 1031, delay: 5e3, timer: 1e3, url_target: "_blank", mouse_over: null, animate: { enter: "animated fadeInDown", exit: "animated fadeOutUp" }, onShow: null, onShown: null, onClose: null, onClosed: null, icon_type: "class", template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0} alert-{0}-dynamic alert-animation-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>' }; String.format = function () { for (var t = arguments[0], e = 1; e < arguments.length; e++) t = t.replace(RegExp("\\{" + (e - 1) + "\\}", "gm"), arguments[e]); return t }, t.extend(e.prototype, { init: function () { var t = this; this.buildNotify(), this.settings.content.icon && this.setIcon(), "#" != this.settings.content.url && this.styleURL(), this.placement(), this.bind(), this.notify = { $ele: this.$ele, update: function (e, s) { var i = {}; "string" == typeof e ? i[e] = s : i = e; for (var e in i) switch (e) { case "type": this.$ele.removeClass("alert-" + t.settings.type), this.$ele.find('[data-notify="progressbar"] > .progress-bar').removeClass("progress-bar-" + t.settings.type), t.settings.type = i[e], this.$ele.addClass("alert-" + i[e]).find('[data-notify="progressbar"] > .progress-bar').addClass("progress-bar-" + i[e]); break; case "icon": var n = this.$ele.find('[data-notify="icon"]'); "class" == t.settings.icon_type.toLowerCase() ? n.removeClass(t.settings.content.icon).addClass(i[e]) : (n.is("img") || n.find("img"), n.attr("src", i[e])); break; case "progress": var a = t.settings.delay - t.settings.delay * (i[e] / 100); this.$ele.data("notify-delay", a), this.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow", i[e]).css("width", i[e] + "%"); break; case "url": this.$ele.find('[data-notify="url"]').attr("href", i[e]); break; case "target": this.$ele.find('[data-notify="url"]').attr("target", i[e]); break; default: this.$ele.find('[data-notify="' + e + '"]').html(i[e]) } var o = this.$ele.outerHeight() + parseInt(t.settings.spacing) + parseInt(t.settings.offset.y); t.reposition(o) }, close: function () { t.close() } } }, buildNotify: function () { var e = this.settings.content; this.$ele = t(String.format(this.settings.template, this.settings.type, e.title, e.message, e.url, e.target)), this.$ele.attr("data-notify-position", this.settings.placement.from + "-" + this.settings.placement.align), this.settings.allow_dismiss || this.$ele.find('[data-notify="dismiss"]').css("display", "none"), (this.settings.delay <= 0 && !this.settings.showProgressbar || !this.settings.showProgressbar) && this.$ele.find('[data-notify="progressbar"]').remove() }, setIcon: function () { "class" == this.settings.icon_type.toLowerCase() ? this.$ele.find('[data-notify="icon"]').addClass(this.settings.content.icon) : this.$ele.find('[data-notify="icon"]').is("img") ? this.$ele.find('[data-notify="icon"]').attr("src", this.settings.content.icon) : this.$ele.find('[data-notify="icon"]').append('<img src="' + this.settings.content.icon + '" alt="Notify Icon" />') }, styleURL: function () { this.$ele.find('[data-notify="url"]').css({ backgroundImage: "url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)", height: "100%", left: "0px", position: "absolute", top: "0px", width: "100%", zIndex: this.settings.z_index + 1 }), this.$ele.find('[data-notify="dismiss"]').css({ position: "absolute", right: "10px", top: "5px", zIndex: this.settings.z_index + 2 }) }, placement: function () { var e = this, s = this.settings.offset.y, i = { display: "inline-block", margin: "0px auto", position: this.settings.position ? this.settings.position : "body" === this.settings.element ? "fixed" : "absolute", transition: "all .5s ease-in-out", zIndex: this.settings.z_index }, n = !1, a = this.settings; switch (t('[data-notify-position="' + this.settings.placement.from + "-" + this.settings.placement.align + '"]:not([data-closing="true"])').each(function () { return s = Math.max(s, parseInt(t(this).css(a.placement.from)) + parseInt(t(this).outerHeight()) + parseInt(a.spacing)) }), 1 == this.settings.newest_on_top && (s = this.settings.offset.y), i[this.settings.placement.from] = s + "px", this.settings.placement.align) { case "left": case "right": i[this.settings.placement.align] = this.settings.offset.x + "px"; break; case "center": i.left = 0, i.right = 0 } this.$ele.css(i).addClass(this.settings.animate.enter), t.each(Array("webkit", "moz", "o", "ms", ""), function (t, s) { e.$ele[0].style[s + "AnimationIterationCount"] = 1 }), t(this.settings.element).append(this.$ele), 1 == this.settings.newest_on_top && (s = parseInt(s) + parseInt(this.settings.spacing) + this.$ele.outerHeight(), this.reposition(s)), t.isFunction(e.settings.onShow) && e.settings.onShow.call(this.$ele), this.$ele.one(this.animations.start, function () { n = !0 }).one(this.animations.end, function () { t.isFunction(e.settings.onShown) && e.settings.onShown.call(this) }), setTimeout(function () { n || t.isFunction(e.settings.onShown) && e.settings.onShown.call(this) }, 600) }, bind: function () { var e = this; if (this.$ele.find('[data-notify="dismiss"]').on("click", function () { e.close() }), this.$ele.mouseover(function () { t(this).data("data-hover", "true") }).mouseout(function () { t(this).data("data-hover", "false") }), this.$ele.data("data-hover", "false"), this.settings.delay > 0) { e.$ele.data("notify-delay", e.settings.delay); var s = setInterval(function () { var t = parseInt(e.$ele.data("notify-delay")) - e.settings.timer; if ("false" === e.$ele.data("data-hover") && "pause" == e.settings.mouse_over || "pause" != e.settings.mouse_over) { var i = (e.settings.delay - t) / e.settings.delay * 100; e.$ele.data("notify-delay", t), e.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow", i).css("width", i + "%") } t <= -e.settings.timer && (clearInterval(s), e.close()) }, e.settings.timer) } }, close: function () { var e = this, s = parseInt(this.$ele.css(this.settings.placement.from)), i = !1; this.$ele.data("closing", "true").addClass(this.settings.animate.exit), e.reposition(s), t.isFunction(e.settings.onClose) && e.settings.onClose.call(this.$ele), this.$ele.one(this.animations.start, function () { i = !0 }).one(this.animations.end, function () { t(this).remove(), t.isFunction(e.settings.onClosed) && e.settings.onClosed.call(this) }), setTimeout(function () { i || (e.$ele.remove(), e.settings.onClosed && e.settings.onClosed(e.$ele)) }, 600) }, reposition: function (e) { var s = this, i = '[data-notify-position="' + this.settings.placement.from + "-" + this.settings.placement.align + '"]:not([data-closing="true"])', n = this.$ele.nextAll(i); 1 == this.settings.newest_on_top && (n = this.$ele.prevAll(i)), n.each(function () { t(this).css(s.settings.placement.from, e), e = parseInt(e) + parseInt(s.settings.spacing) + t(this).outerHeight() }) } }), t.notify = function (t, s) { var i = new e(this, t, s); return i.notify }, t.notifyDefaults = function (e) { return s = t.extend(!0, {}, s, e) }, t.notifyClose = function (e) { "undefined" == typeof e || "all" == e ? t("[data-notify]").find('[data-notify="dismiss"]').trigger("click") : t('[data-notify-position="' + e + '"]').find('[data-notify="dismiss"]').trigger("click") } });
}
if (typeof jQuery !== 'function' || typeof jQuery.notify !== 'function') {
    setTimeout(function() { LimoniAppsLoadJQueryNotify(callback); }, 50);
}
else {
    if (callback) callback();
}
}

/* Load dependency scripts */
LimoniAppsLoadJQuery(LimoniAppsLoadJQueryNotify(LimoniAppsLoadOuiBounce(LimoniAppsLoadFontAwesome())));
</script>


<script>
  function LimoniAppsLoadMoment(callback) {
  /*! moment.js | version : 2.18.1 | authors : Tim Wood, Iskren Chernev, Moment.js contributors | license : MIT | momentjs.com */
  if (typeof moment !== 'function') {
  !function (a, b) { "object" == typeof exports && "undefined" != typeof module ? module.exports = b() : "function" == typeof define && define.amd ? define(b) : a.moment = b() }(this, function () {
  "use strict"; function a() { return sd.apply(null, arguments) } function b(a) { sd = a } function c(a) { return a instanceof Array || "[object Array]" === Object.prototype.toString.call(a) } function d(a) { return null != a && "[object Object]" === Object.prototype.toString.call(a) } function e(a) { var b; for (b in a) return !1; return !0 } function f(a) { return void 0 === a } function g(a) { return "number" == typeof a || "[object Number]" === Object.prototype.toString.call(a) } function h(a) { return a instanceof Date || "[object Date]" === Object.prototype.toString.call(a) } function i(a, b) { var c, d = []; for (c = 0; c < a.length; ++c) d.push(b(a[c], c)); return d } function j(a, b) { return Object.prototype.hasOwnProperty.call(a, b) } function k(a, b) { for (var c in b) j(b, c) && (a[c] = b[c]); return j(b, "toString") && (a.toString = b.toString), j(b, "valueOf") && (a.valueOf = b.valueOf), a } function l(a, b, c, d) { return sb(a, b, c, d, !0).utc() } function m() { return { empty: !1, unusedTokens: [], unusedInput: [], overflow: -2, charsLeftOver: 0, nullInput: !1, invalidMonth: null, invalidFormat: !1, userInvalidated: !1, iso: !1, parsedDateParts: [], meridiem: null, rfc2822: !1, weekdayMismatch: !1 } } function n(a) { return null == a._pf && (a._pf = m()), a._pf } function o(a) { if (null == a._isValid) { var b = n(a), c = ud.call(b.parsedDateParts, function (a) { return null != a }), d = !isNaN(a._d.getTime()) && b.overflow < 0 && !b.empty && !b.invalidMonth && !b.invalidWeekday && !b.nullInput && !b.invalidFormat && !b.userInvalidated && (!b.meridiem || b.meridiem && c); if (a._strict && (d = d && 0 === b.charsLeftOver && 0 === b.unusedTokens.length && void 0 === b.bigHour), null != Object.isFrozen && Object.isFrozen(a)) return d; a._isValid = d } return a._isValid } function p(a) { var b = l(NaN); return null != a ? k(n(b), a) : n(b).userInvalidated = !0, b } function q(a, b) { var c, d, e; if (f(b._isAMomentObject) || (a._isAMomentObject = b._isAMomentObject), f(b._i) || (a._i = b._i), f(b._f) || (a._f = b._f), f(b._l) || (a._l = b._l), f(b._strict) || (a._strict = b._strict), f(b._tzm) || (a._tzm = b._tzm), f(b._isUTC) || (a._isUTC = b._isUTC), f(b._offset) || (a._offset = b._offset), f(b._pf) || (a._pf = n(b)), f(b._locale) || (a._locale = b._locale), vd.length > 0) for (c = 0; c < vd.length; c++) d = vd[c], e = b[d], f(e) || (a[d] = e); return a } function r(b) { q(this, b), this._d = new Date(null != b._d ? b._d.getTime() : NaN), this.isValid() || (this._d = new Date(NaN)), wd === !1 && (wd = !0, a.updateOffset(this), wd = !1) } function s(a) { return a instanceof r || null != a && null != a._isAMomentObject } function t(a) { return a < 0 ? Math.ceil(a) || 0 : Math.floor(a) } function u(a) { var b = +a, c = 0; return 0 !== b && isFinite(b) && (c = t(b)), c } function v(a, b, c) { var d, e = Math.min(a.length, b.length), f = Math.abs(a.length - b.length), g = 0; for (d = 0; d < e; d++) (c && a[d] !== b[d] || !c && u(a[d]) !== u(b[d])) && g++; return g + f } function w(b) { a.suppressDeprecationWarnings === !1 && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + b) } function x(b, c) { var d = !0; return k(function () { if (null != a.deprecationHandler && a.deprecationHandler(null, b), d) { for (var e, f = [], g = 0; g < arguments.length; g++) { if (e = "", "object" == typeof arguments[g]) { e += "\n[" + g + "] "; for (var h in arguments[0]) e += h + ": " + arguments[0][h] + ", "; e = e.slice(0, -2) } else e = arguments[g]; f.push(e) } w(b + "\nArguments: " + Array.prototype.slice.call(f).join("") + "\n" + (new Error).stack), d = !1 } return c.apply(this, arguments) }, c) } function y(b, c) { null != a.deprecationHandler && a.deprecationHandler(b, c), xd[b] || (w(c), xd[b] = !0) } function z(a) { return a instanceof Function || "[object Function]" === Object.prototype.toString.call(a) } function A(a) { var b, c; for (c in a) b = a[c], z(b) ? this[c] = b : this["_" + c] = b; this._config = a, this._dayOfMonthOrdinalParseLenient = new RegExp((this._dayOfMonthOrdinalParse.source || this._ordinalParse.source) + "|" + /\d{1,2}/.source) } function B(a, b) { var c, e = k({}, a); for (c in b) j(b, c) && (d(a[c]) && d(b[c]) ? (e[c] = {}, k(e[c], a[c]), k(e[c], b[c])) : null != b[c] ? e[c] = b[c] : delete e[c]); for (c in a) j(a, c) && !j(b, c) && d(a[c]) && (e[c] = k({}, e[c])); return e } function C(a) { null != a && this.set(a) } function D(a, b, c) { var d = this._calendar[a] || this._calendar.sameElse; return z(d) ? d.call(b, c) : d } function E(a) { var b = this._longDateFormat[a], c = this._longDateFormat[a.toUpperCase()]; return b || !c ? b : (this._longDateFormat[a] = c.replace(/MMMM|MM|DD|dddd/g, function (a) { return a.slice(1) }), this._longDateFormat[a]) } function F() { return this._invalidDate } function G(a) { return this._ordinal.replace("%d", a) } function H(a, b, c, d) { var e = this._relativeTime[c]; return z(e) ? e(a, b, c, d) : e.replace(/%d/i, a) } function I(a, b) { var c = this._relativeTime[a > 0 ? "future" : "past"]; return z(c) ? c(b) : c.replace(/%s/i, b) } function J(a, b) { var c = a.toLowerCase(); Hd[c] = Hd[c + "s"] = Hd[b] = a } function K(a) { return "string" == typeof a ? Hd[a] || Hd[a.toLowerCase()] : void 0 } function L(a) { var b, c, d = {}; for (c in a) j(a, c) && (b = K(c), b && (d[b] = a[c])); return d } function M(a, b) { Id[a] = b } function N(a) { var b = []; for (var c in a) b.push({ unit: c, priority: Id[c] }); return b.sort(function (a, b) { return a.priority - b.priority }), b } function O(b, c) { return function (d) { return null != d ? (Q(this, b, d), a.updateOffset(this, c), this) : P(this, b) } } function P(a, b) { return a.isValid() ? a._d["get" + (a._isUTC ? "UTC" : "") + b]() : NaN } function Q(a, b, c) { a.isValid() && a._d["set" + (a._isUTC ? "UTC" : "") + b](c) } function R(a) { return a = K(a), z(this[a]) ? this[a]() : this } function S(a, b) { if ("object" == typeof a) { a = L(a); for (var c = N(a), d = 0; d < c.length; d++) this[c[d].unit](a[c[d].unit]) } else if (a = K(a), z(this[a])) return this[a](b); return this } function T(a, b, c) { var d = "" + Math.abs(a), e = b - d.length, f = a >= 0; return (f ? c ? "+" : "" : "-") + Math.pow(10, Math.max(0, e)).toString().substr(1) + d } function U(a, b, c, d) { var e = d; "string" == typeof d && (e = function () { return this[d]() }), a && (Md[a] = e), b && (Md[b[0]] = function () { return T(e.apply(this, arguments), b[1], b[2]) }), c && (Md[c] = function () { return this.localeData().ordinal(e.apply(this, arguments), a) }) } function V(a) { return a.match(/\[[\s\S]/) ? a.replace(/^\[|\]$/g, "") : a.replace(/\\/g, "") } function W(a) { var b, c, d = a.match(Jd); for (b = 0, c = d.length; b < c; b++) Md[d[b]] ? d[b] = Md[d[b]] : d[b] = V(d[b]); return function (b) { var e, f = ""; for (e = 0; e < c; e++) f += z(d[e]) ? d[e].call(b, a) : d[e]; return f } } function X(a, b) { return a.isValid() ? (b = Y(b, a.localeData()), Ld[b] = Ld[b] || W(b), Ld[b](a)) : a.localeData().invalidDate() } function Y(a, b) { function c(a) { return b.longDateFormat(a) || a } var d = 5; for (Kd.lastIndex = 0; d >= 0 && Kd.test(a) ;) a = a.replace(Kd, c), Kd.lastIndex = 0, d -= 1; return a } function Z(a, b, c) { ce[a] = z(b) ? b : function (a, d) { return a && c ? c : b } } function $(a, b) { return j(ce, a) ? ce[a](b._strict, b._locale) : new RegExp(_(a)) } function _(a) { return aa(a.replace("\\", "").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function (a, b, c, d, e) { return b || c || d || e })) } function aa(a) { return a.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&") } function ba(a, b) { var c, d = b; for ("string" == typeof a && (a = [a]), g(b) && (d = function (a, c) { c[b] = u(a) }), c = 0; c < a.length; c++) de[a[c]] = d } function ca(a, b) { ba(a, function (a, c, d, e) { d._w = d._w || {}, b(a, d._w, d, e) }) } function da(a, b, c) { null != b && j(de, a) && de[a](b, c._a, c, a) } function ea(a, b) { return new Date(Date.UTC(a, b + 1, 0)).getUTCDate() } function fa(a, b) { return a ? c(this._months) ? this._months[a.month()] : this._months[(this._months.isFormat || oe).test(b) ? "format" : "standalone"][a.month()] : c(this._months) ? this._months : this._months.standalone } function ga(a, b) { return a ? c(this._monthsShort) ? this._monthsShort[a.month()] : this._monthsShort[oe.test(b) ? "format" : "standalone"][a.month()] : c(this._monthsShort) ? this._monthsShort : this._monthsShort.standalone } function ha(a, b, c) { var d, e, f, g = a.toLocaleLowerCase(); if (!this._monthsParse) for (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = [], d = 0; d < 12; ++d) f = l([2e3, d]), this._shortMonthsParse[d] = this.monthsShort(f, "").toLocaleLowerCase(), this._longMonthsParse[d] = this.months(f, "").toLocaleLowerCase(); return c ? "MMM" === b ? (e = ne.call(this._shortMonthsParse, g), e !== -1 ? e : null) : (e = ne.call(this._longMonthsParse, g), e !== -1 ? e : null) : "MMM" === b ? (e = ne.call(this._shortMonthsParse, g), e !== -1 ? e : (e = ne.call(this._longMonthsParse, g), e !== -1 ? e : null)) : (e = ne.call(this._longMonthsParse, g), e !== -1 ? e : (e = ne.call(this._shortMonthsParse, g), e !== -1 ? e : null)) } function ia(a, b, c) { var d, e, f; if (this._monthsParseExact) return ha.call(this, a, b, c); for (this._monthsParse || (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = []), d = 0; d < 12; d++) { if (e = l([2e3, d]), c && !this._longMonthsParse[d] && (this._longMonthsParse[d] = new RegExp("^" + this.months(e, "").replace(".", "") + "$", "i"), this._shortMonthsParse[d] = new RegExp("^" + this.monthsShort(e, "").replace(".", "") + "$", "i")), c || this._monthsParse[d] || (f = "^" + this.months(e, "") + "|^" + this.monthsShort(e, ""), this._monthsParse[d] = new RegExp(f.replace(".", ""), "i")), c && "MMMM" === b && this._longMonthsParse[d].test(a)) return d; if (c && "MMM" === b && this._shortMonthsParse[d].test(a)) return d; if (!c && this._monthsParse[d].test(a)) return d } } function ja(a, b) { var c; if (!a.isValid()) return a; if ("string" == typeof b) if (/^\d+$/.test(b)) b = u(b); else if (b = a.localeData().monthsParse(b), !g(b)) return a; return c = Math.min(a.date(), ea(a.year(), b)), a._d["set" + (a._isUTC ? "UTC" : "") + "Month"](b, c), a } function ka(b) { return null != b ? (ja(this, b), a.updateOffset(this, !0), this) : P(this, "Month") } function la() { return ea(this.year(), this.month()) } function ma(a) { return this._monthsParseExact ? (j(this, "_monthsRegex") || oa.call(this), a ? this._monthsShortStrictRegex : this._monthsShortRegex) : (j(this, "_monthsShortRegex") || (this._monthsShortRegex = re), this._monthsShortStrictRegex && a ? this._monthsShortStrictRegex : this._monthsShortRegex) } function na(a) { return this._monthsParseExact ? (j(this, "_monthsRegex") || oa.call(this), a ? this._monthsStrictRegex : this._monthsRegex) : (j(this, "_monthsRegex") || (this._monthsRegex = se), this._monthsStrictRegex && a ? this._monthsStrictRegex : this._monthsRegex) } function oa() { function a(a, b) { return b.length - a.length } var b, c, d = [], e = [], f = []; for (b = 0; b < 12; b++) c = l([2e3, b]), d.push(this.monthsShort(c, "")), e.push(this.months(c, "")), f.push(this.months(c, "")), f.push(this.monthsShort(c, "")); for (d.sort(a), e.sort(a), f.sort(a), b = 0; b < 12; b++) d[b] = aa(d[b]), e[b] = aa(e[b]); for (b = 0; b < 24; b++) f[b] = aa(f[b]); this._monthsRegex = new RegExp("^(" + f.join("|") + ")", "i"), this._monthsShortRegex = this._monthsRegex, this._monthsStrictRegex = new RegExp("^(" + e.join("|") + ")", "i"), this._monthsShortStrictRegex = new RegExp("^(" + d.join("|") + ")", "i") } function pa(a) { return qa(a) ? 366 : 365 } function qa(a) { return a % 4 === 0 && a % 100 !== 0 || a % 400 === 0 } function ra() { return qa(this.year()) } function sa(a, b, c, d, e, f, g) { var h = new Date(a, b, c, d, e, f, g); return a < 100 && a >= 0 && isFinite(h.getFullYear()) && h.setFullYear(a), h } function ta(a) { var b = new Date(Date.UTC.apply(null, arguments)); return a < 100 && a >= 0 && isFinite(b.getUTCFullYear()) && b.setUTCFullYear(a), b } function ua(a, b, c) { var d = 7 + b - c, e = (7 + ta(a, 0, d).getUTCDay() - b) % 7; return -e + d - 1 } function va(a, b, c, d, e) { var f, g, h = (7 + c - d) % 7, i = ua(a, d, e), j = 1 + 7 * (b - 1) + h + i; return j <= 0 ? (f = a - 1, g = pa(f) + j) : j > pa(a) ? (f = a + 1, g = j - pa(a)) : (f = a, g = j), { year: f, dayOfYear: g } } function wa(a, b, c) { var d, e, f = ua(a.year(), b, c), g = Math.floor((a.dayOfYear() - f - 1) / 7) + 1; return g < 1 ? (e = a.year() - 1, d = g + xa(e, b, c)) : g > xa(a.year(), b, c) ? (d = g - xa(a.year(), b, c), e = a.year() + 1) : (e = a.year(), d = g), { week: d, year: e } } function xa(a, b, c) { var d = ua(a, b, c), e = ua(a + 1, b, c); return (pa(a) - d + e) / 7 } function ya(a) { return wa(a, this._week.dow, this._week.doy).week } function za() { return this._week.dow } function Aa() { return this._week.doy } function Ba(a) { var b = this.localeData().week(this); return null == a ? b : this.add(7 * (a - b), "d") } function Ca(a) { var b = wa(this, 1, 4).week; return null == a ? b : this.add(7 * (a - b), "d") } function Da(a, b) { return "string" != typeof a ? a : isNaN(a) ? (a = b.weekdaysParse(a), "number" == typeof a ? a : null) : parseInt(a, 10) } function Ea(a, b) { return "string" == typeof a ? b.weekdaysParse(a) % 7 || 7 : isNaN(a) ? null : a } function Fa(a, b) { return a ? c(this._weekdays) ? this._weekdays[a.day()] : this._weekdays[this._weekdays.isFormat.test(b) ? "format" : "standalone"][a.day()] : c(this._weekdays) ? this._weekdays : this._weekdays.standalone } function Ga(a) { return a ? this._weekdaysShort[a.day()] : this._weekdaysShort } function Ha(a) { return a ? this._weekdaysMin[a.day()] : this._weekdaysMin } function Ia(a, b, c) { var d, e, f, g = a.toLocaleLowerCase(); if (!this._weekdaysParse) for (this._weekdaysParse = [], this._shortWeekdaysParse = [], this._minWeekdaysParse = [], d = 0; d < 7; ++d) f = l([2e3, 1]).day(d), this._minWeekdaysParse[d] = this.weekdaysMin(f, "").toLocaleLowerCase(), this._shortWeekdaysParse[d] = this.weekdaysShort(f, "").toLocaleLowerCase(), this._weekdaysParse[d] = this.weekdays(f, "").toLocaleLowerCase(); return c ? "dddd" === b ? (e = ne.call(this._weekdaysParse, g), e !== -1 ? e : null) : "ddd" === b ? (e = ne.call(this._shortWeekdaysParse, g), e !== -1 ? e : null) : (e = ne.call(this._minWeekdaysParse, g), e !== -1 ? e : null) : "dddd" === b ? (e = ne.call(this._weekdaysParse, g), e !== -1 ? e : (e = ne.call(this._shortWeekdaysParse, g), e !== -1 ? e : (e = ne.call(this._minWeekdaysParse, g), e !== -1 ? e : null))) : "ddd" === b ? (e = ne.call(this._shortWeekdaysParse, g), e !== -1 ? e : (e = ne.call(this._weekdaysParse, g), e !== -1 ? e : (e = ne.call(this._minWeekdaysParse, g), e !== -1 ? e : null))) : (e = ne.call(this._minWeekdaysParse, g), e !== -1 ? e : (e = ne.call(this._weekdaysParse, g), e !== -1 ? e : (e = ne.call(this._shortWeekdaysParse, g), e !== -1 ? e : null))) } function Ja(a, b, c) { var d, e, f; if (this._weekdaysParseExact) return Ia.call(this, a, b, c); for (this._weekdaysParse || (this._weekdaysParse = [], this._minWeekdaysParse = [], this._shortWeekdaysParse = [], this._fullWeekdaysParse = []), d = 0; d < 7; d++) { if (e = l([2e3, 1]).day(d), c && !this._fullWeekdaysParse[d] && (this._fullWeekdaysParse[d] = new RegExp("^" + this.weekdays(e, "").replace(".", ".?") + "$", "i"), this._shortWeekdaysParse[d] = new RegExp("^" + this.weekdaysShort(e, "").replace(".", ".?") + "$", "i"), this._minWeekdaysParse[d] = new RegExp("^" + this.weekdaysMin(e, "").replace(".", ".?") + "$", "i")), this._weekdaysParse[d] || (f = "^" + this.weekdays(e, "") + "|^" + this.weekdaysShort(e, "") + "|^" + this.weekdaysMin(e, ""), this._weekdaysParse[d] = new RegExp(f.replace(".", ""), "i")), c && "dddd" === b && this._fullWeekdaysParse[d].test(a)) return d; if (c && "ddd" === b && this._shortWeekdaysParse[d].test(a)) return d; if (c && "dd" === b && this._minWeekdaysParse[d].test(a)) return d; if (!c && this._weekdaysParse[d].test(a)) return d } } function Ka(a) { if (!this.isValid()) return null != a ? this : NaN; var b = this._isUTC ? this._d.getUTCDay() : this._d.getDay(); return null != a ? (a = Da(a, this.localeData()), this.add(a - b, "d")) : b } function La(a) { if (!this.isValid()) return null != a ? this : NaN; var b = (this.day() + 7 - this.localeData()._week.dow) % 7; return null == a ? b : this.add(a - b, "d") } function Ma(a) { if (!this.isValid()) return null != a ? this : NaN; if (null != a) { var b = Ea(a, this.localeData()); return this.day(this.day() % 7 ? b : b - 7) } return this.day() || 7 } function Na(a) { return this._weekdaysParseExact ? (j(this, "_weekdaysRegex") || Qa.call(this), a ? this._weekdaysStrictRegex : this._weekdaysRegex) : (j(this, "_weekdaysRegex") || (this._weekdaysRegex = ye), this._weekdaysStrictRegex && a ? this._weekdaysStrictRegex : this._weekdaysRegex) } function Oa(a) { return this._weekdaysParseExact ? (j(this, "_weekdaysRegex") || Qa.call(this), a ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex) : (j(this, "_weekdaysShortRegex") || (this._weekdaysShortRegex = ze), this._weekdaysShortStrictRegex && a ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex) } function Pa(a) { return this._weekdaysParseExact ? (j(this, "_weekdaysRegex") || Qa.call(this), a ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex) : (j(this, "_weekdaysMinRegex") || (this._weekdaysMinRegex = Ae), this._weekdaysMinStrictRegex && a ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex) } function Qa() { function a(a, b) { return b.length - a.length } var b, c, d, e, f, g = [], h = [], i = [], j = []; for (b = 0; b < 7; b++) c = l([2e3, 1]).day(b), d = this.weekdaysMin(c, ""), e = this.weekdaysShort(c, ""), f = this.weekdays(c, ""), g.push(d), h.push(e), i.push(f), j.push(d), j.push(e), j.push(f); for (g.sort(a), h.sort(a), i.sort(a), j.sort(a), b = 0; b < 7; b++) h[b] = aa(h[b]), i[b] = aa(i[b]), j[b] = aa(j[b]); this._weekdaysRegex = new RegExp("^(" + j.join("|") + ")", "i"), this._weekdaysShortRegex = this._weekdaysRegex, this._weekdaysMinRegex = this._weekdaysRegex, this._weekdaysStrictRegex = new RegExp("^(" + i.join("|") + ")", "i"), this._weekdaysShortStrictRegex = new RegExp("^(" + h.join("|") + ")", "i"), this._weekdaysMinStrictRegex = new RegExp("^(" + g.join("|") + ")", "i") } function Ra() { return this.hours() % 12 || 12 } function Sa() { return this.hours() || 24 } function Ta(a, b) { U(a, 0, 0, function () { return this.localeData().meridiem(this.hours(), this.minutes(), b) }) } function Ua(a, b) { return b._meridiemParse } function Va(a) { return "p" === (a + "").toLowerCase().charAt(0) } function Wa(a, b, c) { return a > 11 ? c ? "pm" : "PM" : c ? "am" : "AM" } function Xa(a) { return a ? a.toLowerCase().replace("_", "-") : a } function Ya(a) { for (var b, c, d, e, f = 0; f < a.length;) { for (e = Xa(a[f]).split("-"), b = e.length, c = Xa(a[f + 1]), c = c ? c.split("-") : null; b > 0;) { if (d = Za(e.slice(0, b).join("-"))) return d; if (c && c.length >= b && v(e, c, !0) >= b - 1) break; b-- } f++ } return null } function Za(a) { var b = null; if (!Fe[a] && "undefined" != typeof module && module && module.exports) try { b = Be._abbr, require("./locale/" + a), $a(b) } catch (a) { } return Fe[a] } function $a(a, b) { var c; return a && (c = f(b) ? bb(a) : _a(a, b), c && (Be = c)), Be._abbr } function _a(a, b) { if (null !== b) { var c = Ee; if (b.abbr = a, null != Fe[a]) y("defineLocaleOverride", "use moment.updateLocale(localeName, config) to change an existing locale. moment.defineLocale(localeName, config) should only be used for creating a new locale See http://momentjs.com/guides/#/warnings/define-locale/ for more info."), c = Fe[a]._config; else if (null != b.parentLocale) { if (null == Fe[b.parentLocale]) return Ge[b.parentLocale] || (Ge[b.parentLocale] = []), Ge[b.parentLocale].push({ name: a, config: b }), null; c = Fe[b.parentLocale]._config } return Fe[a] = new C(B(c, b)), Ge[a] && Ge[a].forEach(function (a) { _a(a.name, a.config) }), $a(a), Fe[a] } return delete Fe[a], null } function ab(a, b) { if (null != b) { var c, d = Ee; null != Fe[a] && (d = Fe[a]._config), b = B(d, b), c = new C(b), c.parentLocale = Fe[a], Fe[a] = c, $a(a) } else null != Fe[a] && (null != Fe[a].parentLocale ? Fe[a] = Fe[a].parentLocale : null != Fe[a] && delete Fe[a]); return Fe[a] } function bb(a) { var b; if (a && a._locale && a._locale._abbr && (a = a._locale._abbr), !a) return Be; if (!c(a)) { if (b = Za(a)) return b; a = [a] } return Ya(a) } function cb() { return Ad(Fe) } function db(a) { var b, c = a._a; return c && n(a).overflow === -2 && (b = c[fe] < 0 || c[fe] > 11 ? fe : c[ge] < 1 || c[ge] > ea(c[ee], c[fe]) ? ge : c[he] < 0 || c[he] > 24 || 24 === c[he] && (0 !== c[ie] || 0 !== c[je] || 0 !== c[ke]) ? he : c[ie] < 0 || c[ie] > 59 ? ie : c[je] < 0 || c[je] > 59 ? je : c[ke] < 0 || c[ke] > 999 ? ke : -1, n(a)._overflowDayOfYear && (b < ee || b > ge) && (b = ge), n(a)._overflowWeeks && b === -1 && (b = le), n(a)._overflowWeekday && b === -1 && (b = me), n(a).overflow = b), a } function eb(a) { var b, c, d, e, f, g, h = a._i, i = He.exec(h) || Ie.exec(h); if (i) { for (n(a).iso = !0, b = 0, c = Ke.length; b < c; b++) if (Ke[b][1].exec(i[1])) { e = Ke[b][0], d = Ke[b][2] !== !1; break } if (null == e) return void (a._isValid = !1); if (i[3]) { for (b = 0, c = Le.length; b < c; b++) if (Le[b][1].exec(i[3])) { f = (i[2] || " ") + Le[b][0]; break } if (null == f) return void (a._isValid = !1) } if (!d && null != f) return void (a._isValid = !1); if (i[4]) { if (!Je.exec(i[4])) return void (a._isValid = !1); g = "Z" } a._f = e + (f || "") + (g || ""), lb(a) } else a._isValid = !1 } function fb(a) { var b, c, d, e, f, g, h, i, j = { " GMT": " +0000", " EDT": " -0400", " EST": " -0500", " CDT": " -0500", " CST": " -0600", " MDT": " -0600", " MST": " -0700", " PDT": " -0700", " PST": " -0800" }, k = "YXWVUTSRQPONZABCDEFGHIKLM"; if (b = a._i.replace(/\([^\)]*\)|[\n\t]/g, " ").replace(/(\s\s+)/g, " ").replace(/^\s|\s$/g, ""), c = Ne.exec(b)) { if (d = c[1] ? "ddd" + (5 === c[1].length ? ", " : " ") : "", e = "D MMM " + (c[2].length > 10 ? "YYYY " : "YY "), f = "HH:mm" + (c[4] ? ":ss" : ""), c[1]) { var l = new Date(c[2]), m = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"][l.getDay()]; if (c[1].substr(0, 3) !== m) return n(a).weekdayMismatch = !0, void (a._isValid = !1) } switch (c[5].length) { case 2: 0 === i ? h = " +0000" : (i = k.indexOf(c[5][1].toUpperCase()) - 12, h = (i < 0 ? " -" : " +") + ("" + i).replace(/^-?/, "0").match(/..$/)[0] + "00"); break; case 4: h = j[c[5]]; break; default: h = j[" GMT"] } c[5] = h, a._i = c.splice(1).join(""), g = " ZZ", a._f = d + e + f + g, lb(a), n(a).rfc2822 = !0 } else a._isValid = !1 } function gb(b) { var c = Me.exec(b._i); return null !== c ? void (b._d = new Date(+c[1])) : (eb(b), void (b._isValid === !1 && (delete b._isValid, fb(b), b._isValid === !1 && (delete b._isValid, a.createFromInputFallback(b))))) } function hb(a, b, c) { return null != a ? a : null != b ? b : c } function ib(b) { var c = new Date(a.now()); return b._useUTC ? [c.getUTCFullYear(), c.getUTCMonth(), c.getUTCDate()] : [c.getFullYear(), c.getMonth(), c.getDate()] } function jb(a) { var b, c, d, e, f = []; if (!a._d) { for (d = ib(a), a._w && null == a._a[ge] && null == a._a[fe] && kb(a), null != a._dayOfYear && (e = hb(a._a[ee], d[ee]), (a._dayOfYear > pa(e) || 0 === a._dayOfYear) && (n(a)._overflowDayOfYear = !0), c = ta(e, 0, a._dayOfYear), a._a[fe] = c.getUTCMonth(), a._a[ge] = c.getUTCDate()), b = 0; b < 3 && null == a._a[b]; ++b) a._a[b] = f[b] = d[b]; for (; b < 7; b++) a._a[b] = f[b] = null == a._a[b] ? 2 === b ? 1 : 0 : a._a[b]; 24 === a._a[he] && 0 === a._a[ie] && 0 === a._a[je] && 0 === a._a[ke] && (a._nextDay = !0, a._a[he] = 0), a._d = (a._useUTC ? ta : sa).apply(null, f), null != a._tzm && a._d.setUTCMinutes(a._d.getUTCMinutes() - a._tzm), a._nextDay && (a._a[he] = 24) } } function kb(a) { var b, c, d, e, f, g, h, i; if (b = a._w, null != b.GG || null != b.W || null != b.E) f = 1, g = 4, c = hb(b.GG, a._a[ee], wa(tb(), 1, 4).year), d = hb(b.W, 1), e = hb(b.E, 1), (e < 1 || e > 7) && (i = !0); else { f = a._locale._week.dow, g = a._locale._week.doy; var j = wa(tb(), f, g); c = hb(b.gg, a._a[ee], j.year), d = hb(b.w, j.week), null != b.d ? (e = b.d, (e < 0 || e > 6) && (i = !0)) : null != b.e ? (e = b.e + f, (b.e < 0 || b.e > 6) && (i = !0)) : e = f } d < 1 || d > xa(c, f, g) ? n(a)._overflowWeeks = !0 : null != i ? n(a)._overflowWeekday = !0 : (h = va(c, d, e, f, g), a._a[ee] = h.year, a._dayOfYear = h.dayOfYear) } function lb(b) { if (b._f === a.ISO_8601) return void eb(b); if (b._f === a.RFC_2822) return void fb(b); b._a = [], n(b).empty = !0; var c, d, e, f, g, h = "" + b._i, i = h.length, j = 0; for (e = Y(b._f, b._locale).match(Jd) || [], c = 0; c < e.length; c++) f = e[c], d = (h.match($(f, b)) || [])[0], d && (g = h.substr(0, h.indexOf(d)), g.length > 0 && n(b).unusedInput.push(g), h = h.slice(h.indexOf(d) + d.length), j += d.length), Md[f] ? (d ? n(b).empty = !1 : n(b).unusedTokens.push(f), da(f, d, b)) : b._strict && !d && n(b).unusedTokens.push(f); n(b).charsLeftOver = i - j, h.length > 0 && n(b).unusedInput.push(h), b._a[he] <= 12 && n(b).bigHour === !0 && b._a[he] > 0 && (n(b).bigHour = void 0), n(b).parsedDateParts = b._a.slice(0), n(b).meridiem = b._meridiem, b._a[he] = mb(b._locale, b._a[he], b._meridiem), jb(b), db(b) } function mb(a, b, c) { var d; return null == c ? b : null != a.meridiemHour ? a.meridiemHour(b, c) : null != a.isPM ? (d = a.isPM(c), d && b < 12 && (b += 12), d || 12 !== b || (b = 0), b) : b } function nb(a) { var b, c, d, e, f; if (0 === a._f.length) return n(a).invalidFormat = !0, void (a._d = new Date(NaN)); for (e = 0; e < a._f.length; e++) f = 0, b = q({}, a), null != a._useUTC && (b._useUTC = a._useUTC), b._f = a._f[e], lb(b), o(b) && (f += n(b).charsLeftOver, f += 10 * n(b).unusedTokens.length, n(b).score = f, (null == d || f < d) && (d = f, c = b)); k(a, c || b) } function ob(a) { if (!a._d) { var b = L(a._i); a._a = i([b.year, b.month, b.day || b.date, b.hour, b.minute, b.second, b.millisecond], function (a) { return a && parseInt(a, 10) }), jb(a) } } function pb(a) { var b = new r(db(qb(a))); return b._nextDay && (b.add(1, "d"), b._nextDay = void 0), b } function qb(a) { var b = a._i, d = a._f; return a._locale = a._locale || bb(a._l), null === b || void 0 === d && "" === b ? p({ nullInput: !0 }) : ("string" == typeof b && (a._i = b = a._locale.preparse(b)), s(b) ? new r(db(b)) : (h(b) ? a._d = b : c(d) ? nb(a) : d ? lb(a) : rb(a), o(a) || (a._d = null), a)) } function rb(b) { var e = b._i; f(e) ? b._d = new Date(a.now()) : h(e) ? b._d = new Date(e.valueOf()) : "string" == typeof e ? gb(b) : c(e) ? (b._a = i(e.slice(0), function (a) { return parseInt(a, 10) }), jb(b)) : d(e) ? ob(b) : g(e) ? b._d = new Date(e) : a.createFromInputFallback(b) } function sb(a, b, f, g, h) { var i = {}; return f !== !0 && f !== !1 || (g = f, f = void 0), (d(a) && e(a) || c(a) && 0 === a.length) && (a = void 0), i._isAMomentObject = !0, i._useUTC = i._isUTC = h, i._l = f, i._i = a, i._f = b, i._strict = g, pb(i) } function tb(a, b, c, d) { return sb(a, b, c, d, !1) } function ub(a, b) { var d, e; if (1 === b.length && c(b[0]) && (b = b[0]), !b.length) return tb(); for (d = b[0], e = 1; e < b.length; ++e) b[e].isValid() && !b[e][a](d) || (d = b[e]); return d } function vb() { var a = [].slice.call(arguments, 0); return ub("isBefore", a) } function wb() { var a = [].slice.call(arguments, 0); return ub("isAfter", a) } function xb(a) { for (var b in a) if (Re.indexOf(b) === -1 || null != a[b] && isNaN(a[b])) return !1; for (var c = !1, d = 0; d < Re.length; ++d) if (a[Re[d]]) { if (c) return !1; parseFloat(a[Re[d]]) !== u(a[Re[d]]) && (c = !0) } return !0 } function yb() { return this._isValid } function zb() { return Sb(NaN) } function Ab(a) { var b = L(a), c = b.year || 0, d = b.quarter || 0, e = b.month || 0, f = b.week || 0, g = b.day || 0, h = b.hour || 0, i = b.minute || 0, j = b.second || 0, k = b.millisecond || 0; this._isValid = xb(b), this._milliseconds = +k + 1e3 * j + 6e4 * i + 1e3 * h * 60 * 60, this._days = +g + 7 * f, this._months = +e + 3 * d + 12 * c, this._data = {}, this._locale = bb(), this._bubble() } function Bb(a) { return a instanceof Ab } function Cb(a) { return a < 0 ? Math.round(-1 * a) * -1 : Math.round(a) } function Db(a, b) { U(a, 0, 0, function () { var a = this.utcOffset(), c = "+"; return a < 0 && (a = -a, c = "-"), c + T(~~(a / 60), 2) + b + T(~~a % 60, 2) }) } function Eb(a, b) { var c = (b || "").match(a); if (null === c) return null; var d = c[c.length - 1] || [], e = (d + "").match(Se) || ["-", 0, 0], f = +(60 * e[1]) + u(e[2]); return 0 === f ? 0 : "+" === e[0] ? f : -f } function Fb(b, c) { var d, e; return c._isUTC ? (d = c.clone(), e = (s(b) || h(b) ? b.valueOf() : tb(b).valueOf()) - d.valueOf(), d._d.setTime(d._d.valueOf() + e), a.updateOffset(d, !1), d) : tb(b).local() } function Gb(a) { return 15 * -Math.round(a._d.getTimezoneOffset() / 15) } function Hb(b, c, d) { var e, f = this._offset || 0; if (!this.isValid()) return null != b ? this : NaN; if (null != b) { if ("string" == typeof b) { if (b = Eb(_d, b), null === b) return this } else Math.abs(b) < 16 && !d && (b = 60 * b); return !this._isUTC && c && (e = Gb(this)), this._offset = b, this._isUTC = !0, null != e && this.add(e, "m"), f !== b && (!c || this._changeInProgress ? Xb(this, Sb(b - f, "m"), 1, !1) : this._changeInProgress || (this._changeInProgress = !0, a.updateOffset(this, !0), this._changeInProgress = null)), this } return this._isUTC ? f : Gb(this) } function Ib(a, b) { return null != a ? ("string" != typeof a && (a = -a), this.utcOffset(a, b), this) : -this.utcOffset() } function Jb(a) { return this.utcOffset(0, a) } function Kb(a) { return this._isUTC && (this.utcOffset(0, a), this._isUTC = !1, a && this.subtract(Gb(this), "m")), this } function Lb() { if (null != this._tzm) this.utcOffset(this._tzm, !1, !0); else if ("string" == typeof this._i) { var a = Eb($d, this._i); null != a ? this.utcOffset(a) : this.utcOffset(0, !0) } return this } function Mb(a) { return !!this.isValid() && (a = a ? tb(a).utcOffset() : 0, (this.utcOffset() - a) % 60 === 0) } function Nb() { return this.utcOffset() > this.clone().month(0).utcOffset() || this.utcOffset() > this.clone().month(5).utcOffset() } function Ob() { if (!f(this._isDSTShifted)) return this._isDSTShifted; var a = {}; if (q(a, this), a = qb(a), a._a) { var b = a._isUTC ? l(a._a) : tb(a._a); this._isDSTShifted = this.isValid() && v(a._a, b.toArray()) > 0 } else this._isDSTShifted = !1; return this._isDSTShifted } function Pb() { return !!this.isValid() && !this._isUTC } function Qb() { return !!this.isValid() && this._isUTC } function Rb() { return !!this.isValid() && (this._isUTC && 0 === this._offset) } function Sb(a, b) { var c, d, e, f = a, h = null; return Bb(a) ? f = { ms: a._milliseconds, d: a._days, M: a._months } : g(a) ? (f = {}, b ? f[b] = a : f.milliseconds = a) : (h = Te.exec(a)) ? (c = "-" === h[1] ? -1 : 1, f = { y: 0, d: u(h[ge]) * c, h: u(h[he]) * c, m: u(h[ie]) * c, s: u(h[je]) * c, ms: u(Cb(1e3 * h[ke])) * c }) : (h = Ue.exec(a)) ? (c = "-" === h[1] ? -1 : 1, f = { y: Tb(h[2], c), M: Tb(h[3], c), w: Tb(h[4], c), d: Tb(h[5], c), h: Tb(h[6], c), m: Tb(h[7], c), s: Tb(h[8], c) }) : null == f ? f = {} : "object" == typeof f && ("from" in f || "to" in f) && (e = Vb(tb(f.from), tb(f.to)), f = {}, f.ms = e.milliseconds, f.M = e.months), d = new Ab(f), Bb(a) && j(a, "_locale") && (d._locale = a._locale), d } function Tb(a, b) { var c = a && parseFloat(a.replace(",", ".")); return (isNaN(c) ? 0 : c) * b } function Ub(a, b) { var c = { milliseconds: 0, months: 0 }; return c.months = b.month() - a.month() + 12 * (b.year() - a.year()), a.clone().add(c.months, "M").isAfter(b) && --c.months, c.milliseconds = +b - +a.clone().add(c.months, "M"), c } function Vb(a, b) { var c; return a.isValid() && b.isValid() ? (b = Fb(b, a), a.isBefore(b) ? c = Ub(a, b) : (c = Ub(b, a), c.milliseconds = -c.milliseconds, c.months = -c.months), c) : { milliseconds: 0, months: 0 } } function Wb(a, b) { return function (c, d) { var e, f; return null === d || isNaN(+d) || (y(b, "moment()." + b + "(period, number) is deprecated. Please use moment()." + b + "(number, period). See http://momentjs.com/guides/#/warnings/add-inverted-param/ for more info."), f = c, c = d, d = f), c = "string" == typeof c ? +c : c, e = Sb(c, d), Xb(this, e, a), this } } function Xb(b, c, d, e) { var f = c._milliseconds, g = Cb(c._days), h = Cb(c._months); b.isValid() && (e = null == e || e, f && b._d.setTime(b._d.valueOf() + f * d), g && Q(b, "Date", P(b, "Date") + g * d), h && ja(b, P(b, "Month") + h * d), e && a.updateOffset(b, g || h)) } function Yb(a, b) { var c = a.diff(b, "days", !0); return c < -6 ? "sameElse" : c < -1 ? "lastWeek" : c < 0 ? "lastDay" : c < 1 ? "sameDay" : c < 2 ? "nextDay" : c < 7 ? "nextWeek" : "sameElse" } function Zb(b, c) { var d = b || tb(), e = Fb(d, this).startOf("day"), f = a.calendarFormat(this, e) || "sameElse", g = c && (z(c[f]) ? c[f].call(this, d) : c[f]); return this.format(g || this.localeData().calendar(f, this, tb(d))) } function $b() { return new r(this) } function _b(a, b) { var c = s(a) ? a : tb(a); return !(!this.isValid() || !c.isValid()) && (b = K(f(b) ? "millisecond" : b), "millisecond" === b ? this.valueOf() > c.valueOf() : c.valueOf() < this.clone().startOf(b).valueOf()) } function ac(a, b) { var c = s(a) ? a : tb(a); return !(!this.isValid() || !c.isValid()) && (b = K(f(b) ? "millisecond" : b), "millisecond" === b ? this.valueOf() < c.valueOf() : this.clone().endOf(b).valueOf() < c.valueOf()) } function bc(a, b, c, d) { return d = d || "()", ("(" === d[0] ? this.isAfter(a, c) : !this.isBefore(a, c)) && (")" === d[1] ? this.isBefore(b, c) : !this.isAfter(b, c)) } function cc(a, b) { var c, d = s(a) ? a : tb(a); return !(!this.isValid() || !d.isValid()) && (b = K(b || "millisecond"), "millisecond" === b ? this.valueOf() === d.valueOf() : (c = d.valueOf(), this.clone().startOf(b).valueOf() <= c && c <= this.clone().endOf(b).valueOf())) } function dc(a, b) { return this.isSame(a, b) || this.isAfter(a, b) } function ec(a, b) { return this.isSame(a, b) || this.isBefore(a, b) } function fc(a, b, c) { var d, e, f, g; return this.isValid() ? (d = Fb(a, this), d.isValid() ? (e = 6e4 * (d.utcOffset() - this.utcOffset()), b = K(b), "year" === b || "month" === b || "quarter" === b ? (g = gc(this, d), "quarter" === b ? g /= 3 : "year" === b && (g /= 12)) : (f = this - d, g = "second" === b ? f / 1e3 : "minute" === b ? f / 6e4 : "hour" === b ? f / 36e5 : "day" === b ? (f - e) / 864e5 : "week" === b ? (f - e) / 6048e5 : f), c ? g : t(g)) : NaN) : NaN } function gc(a, b) { var c, d, e = 12 * (b.year() - a.year()) + (b.month() - a.month()), f = a.clone().add(e, "months"); return b - f < 0 ? (c = a.clone().add(e - 1, "months"), d = (b - f) / (f - c)) : (c = a.clone().add(e + 1, "months"), d = (b - f) / (c - f)), -(e + d) || 0 } function hc() { return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ") } function ic() { if (!this.isValid()) return null; var a = this.clone().utc(); return a.year() < 0 || a.year() > 9999 ? X(a, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]") : z(Date.prototype.toISOString) ? this.toDate().toISOString() : X(a, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]") } function jc() { if (!this.isValid()) return "moment.invalid(/* " + this._i + " */)"; var a = "moment", b = ""; this.isLocal() || (a = 0 === this.utcOffset() ? "moment.utc" : "moment.parseZone", b = "Z"); var c = "[" + a + '("]', d = 0 <= this.year() && this.year() <= 9999 ? "YYYY" : "YYYYYY", e = "-MM-DD[T]HH:mm:ss.SSS", f = b + '[")]'; return this.format(c + d + e + f) } function kc(b) { b || (b = this.isUtc() ? a.defaultFormatUtc : a.defaultFormat); var c = X(this, b); return this.localeData().postformat(c) } function lc(a, b) { return this.isValid() && (s(a) && a.isValid() || tb(a).isValid()) ? Sb({ to: this, from: a }).locale(this.locale()).humanize(!b) : this.localeData().invalidDate() } function mc(a) { return this.from(tb(), a) } function nc(a, b) { return this.isValid() && (s(a) && a.isValid() || tb(a).isValid()) ? Sb({ from: this, to: a }).locale(this.locale()).humanize(!b) : this.localeData().invalidDate() } function oc(a) { return this.to(tb(), a) } function pc(a) { var b; return void 0 === a ? this._locale._abbr : (b = bb(a), null != b && (this._locale = b), this) } function qc() { return this._locale } function rc(a) { switch (a = K(a)) { case "year": this.month(0); case "quarter": case "month": this.date(1); case "week": case "isoWeek": case "day": case "date": this.hours(0); case "hour": this.minutes(0); case "minute": this.seconds(0); case "second": this.milliseconds(0) } return "week" === a && this.weekday(0), "isoWeek" === a && this.isoWeekday(1), "quarter" === a && this.month(3 * Math.floor(this.month() / 3)), this } function sc(a) { return a = K(a), void 0 === a || "millisecond" === a ? this : ("date" === a && (a = "day"), this.startOf(a).add(1, "isoWeek" === a ? "week" : a).subtract(1, "ms")) } function tc() { return this._d.valueOf() - 6e4 * (this._offset || 0) } function uc() { return Math.floor(this.valueOf() / 1e3) } function vc() { return new Date(this.valueOf()) } function wc() { var a = this; return [a.year(), a.month(), a.date(), a.hour(), a.minute(), a.second(), a.millisecond()] } function xc() { var a = this; return { years: a.year(), months: a.month(), date: a.date(), hours: a.hours(), minutes: a.minutes(), seconds: a.seconds(), milliseconds: a.milliseconds() } } function yc() { return this.isValid() ? this.toISOString() : null } function zc() { return o(this) } function Ac() {
  return k({}, n(this))
  } function Bc() { return n(this).overflow } function Cc() { return { input: this._i, format: this._f, locale: this._locale, isUTC: this._isUTC, strict: this._strict } } function Dc(a, b) { U(0, [a, a.length], 0, b) } function Ec(a) { return Ic.call(this, a, this.week(), this.weekday(), this.localeData()._week.dow, this.localeData()._week.doy) } function Fc(a) { return Ic.call(this, a, this.isoWeek(), this.isoWeekday(), 1, 4) } function Gc() { return xa(this.year(), 1, 4) } function Hc() { var a = this.localeData()._week; return xa(this.year(), a.dow, a.doy) } function Ic(a, b, c, d, e) { var f; return null == a ? wa(this, d, e).year : (f = xa(a, d, e), b > f && (b = f), Jc.call(this, a, b, c, d, e)) } function Jc(a, b, c, d, e) { var f = va(a, b, c, d, e), g = ta(f.year, 0, f.dayOfYear); return this.year(g.getUTCFullYear()), this.month(g.getUTCMonth()), this.date(g.getUTCDate()), this } function Kc(a) { return null == a ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (a - 1) + this.month() % 3) } function Lc(a) { var b = Math.round((this.clone().startOf("day") - this.clone().startOf("year")) / 864e5) + 1; return null == a ? b : this.add(a - b, "d") } function Mc(a, b) { b[ke] = u(1e3 * ("0." + a)) } function Nc() { return this._isUTC ? "UTC" : "" } function Oc() { return this._isUTC ? "Coordinated Universal Time" : "" } function Pc(a) { return tb(1e3 * a) } function Qc() { return tb.apply(null, arguments).parseZone() } function Rc(a) { return a } function Sc(a, b, c, d) { var e = bb(), f = l().set(d, b); return e[c](f, a) } function Tc(a, b, c) { if (g(a) && (b = a, a = void 0), a = a || "", null != b) return Sc(a, b, c, "month"); var d, e = []; for (d = 0; d < 12; d++) e[d] = Sc(a, d, c, "month"); return e } function Uc(a, b, c, d) { "boolean" == typeof a ? (g(b) && (c = b, b = void 0), b = b || "") : (b = a, c = b, a = !1, g(b) && (c = b, b = void 0), b = b || ""); var e = bb(), f = a ? e._week.dow : 0; if (null != c) return Sc(b, (c + f) % 7, d, "day"); var h, i = []; for (h = 0; h < 7; h++) i[h] = Sc(b, (h + f) % 7, d, "day"); return i } function Vc(a, b) { return Tc(a, b, "months") } function Wc(a, b) { return Tc(a, b, "monthsShort") } function Xc(a, b, c) { return Uc(a, b, c, "weekdays") } function Yc(a, b, c) { return Uc(a, b, c, "weekdaysShort") } function Zc(a, b, c) { return Uc(a, b, c, "weekdaysMin") } function $c() { var a = this._data; return this._milliseconds = df(this._milliseconds), this._days = df(this._days), this._months = df(this._months), a.milliseconds = df(a.milliseconds), a.seconds = df(a.seconds), a.minutes = df(a.minutes), a.hours = df(a.hours), a.months = df(a.months), a.years = df(a.years), this } function _c(a, b, c, d) { var e = Sb(b, c); return a._milliseconds += d * e._milliseconds, a._days += d * e._days, a._months += d * e._months, a._bubble() } function ad(a, b) { return _c(this, a, b, 1) } function bd(a, b) { return _c(this, a, b, -1) } function cd(a) { return a < 0 ? Math.floor(a) : Math.ceil(a) } function dd() { var a, b, c, d, e, f = this._milliseconds, g = this._days, h = this._months, i = this._data; return f >= 0 && g >= 0 && h >= 0 || f <= 0 && g <= 0 && h <= 0 || (f += 864e5 * cd(fd(h) + g), g = 0, h = 0), i.milliseconds = f % 1e3, a = t(f / 1e3), i.seconds = a % 60, b = t(a / 60), i.minutes = b % 60, c = t(b / 60), i.hours = c % 24, g += t(c / 24), e = t(ed(g)), h += e, g -= cd(fd(e)), d = t(h / 12), h %= 12, i.days = g, i.months = h, i.years = d, this } function ed(a) { return 4800 * a / 146097 } function fd(a) { return 146097 * a / 4800 } function gd(a) { if (!this.isValid()) return NaN; var b, c, d = this._milliseconds; if (a = K(a), "month" === a || "year" === a) return b = this._days + d / 864e5, c = this._months + ed(b), "month" === a ? c : c / 12; switch (b = this._days + Math.round(fd(this._months)), a) { case "week": return b / 7 + d / 6048e5; case "day": return b + d / 864e5; case "hour": return 24 * b + d / 36e5; case "minute": return 1440 * b + d / 6e4; case "second": return 86400 * b + d / 1e3; case "millisecond": return Math.floor(864e5 * b) + d; default: throw new Error("Unknown unit " + a) } } function hd() { return this.isValid() ? this._milliseconds + 864e5 * this._days + this._months % 12 * 2592e6 + 31536e6 * u(this._months / 12) : NaN } function id(a) { return function () { return this.as(a) } } function jd(a) { return a = K(a), this.isValid() ? this[a + "s"]() : NaN } function kd(a) { return function () { return this.isValid() ? this._data[a] : NaN } } function ld() { return t(this.days() / 7) } function md(a, b, c, d, e) { return e.relativeTime(b || 1, !!c, a, d) } function nd(a, b, c) { var d = Sb(a).abs(), e = uf(d.as("s")), f = uf(d.as("m")), g = uf(d.as("h")), h = uf(d.as("d")), i = uf(d.as("M")), j = uf(d.as("y")), k = e <= vf.ss && ["s", e] || e < vf.s && ["ss", e] || f <= 1 && ["m"] || f < vf.m && ["mm", f] || g <= 1 && ["h"] || g < vf.h && ["hh", g] || h <= 1 && ["d"] || h < vf.d && ["dd", h] || i <= 1 && ["M"] || i < vf.M && ["MM", i] || j <= 1 && ["y"] || ["yy", j]; return k[2] = b, k[3] = +a > 0, k[4] = c, md.apply(null, k) } function od(a) { return void 0 === a ? uf : "function" == typeof a && (uf = a, !0) } function pd(a, b) { return void 0 !== vf[a] && (void 0 === b ? vf[a] : (vf[a] = b, "s" === a && (vf.ss = b - 1), !0)) } function qd(a) { if (!this.isValid()) return this.localeData().invalidDate(); var b = this.localeData(), c = nd(this, !a, b); return a && (c = b.pastFuture(+this, c)), b.postformat(c) } function rd() { if (!this.isValid()) return this.localeData().invalidDate(); var a, b, c, d = wf(this._milliseconds) / 1e3, e = wf(this._days), f = wf(this._months); a = t(d / 60), b = t(a / 60), d %= 60, a %= 60, c = t(f / 12), f %= 12; var g = c, h = f, i = e, j = b, k = a, l = d, m = this.asSeconds(); return m ? (m < 0 ? "-" : "") + "P" + (g ? g + "Y" : "") + (h ? h + "M" : "") + (i ? i + "D" : "") + (j || k || l ? "T" : "") + (j ? j + "H" : "") + (k ? k + "M" : "") + (l ? l + "S" : "") : "P0D" } var sd, td; td = Array.prototype.some ? Array.prototype.some : function (a) { for (var b = Object(this), c = b.length >>> 0, d = 0; d < c; d++) if (d in b && a.call(this, b[d], d, b)) return !0; return !1 }; var ud = td, vd = a.momentProperties = [], wd = !1, xd = {}; a.suppressDeprecationWarnings = !1, a.deprecationHandler = null; var yd; yd = Object.keys ? Object.keys : function (a) { var b, c = []; for (b in a) j(a, b) && c.push(b); return c }; var zd, Ad = yd, Bd = { sameDay: "[Today at] LT", nextDay: "[Tomorrow at] LT", nextWeek: "dddd [at] LT", lastDay: "[Yesterday at] LT", lastWeek: "[Last] dddd [at] LT", sameElse: "L" }, Cd = { LTS: "h:mm:ss A", LT: "h:mm A", L: "MM/DD/YYYY", LL: "MMMM D, YYYY", LLL: "MMMM D, YYYY h:mm A", LLLL: "dddd, MMMM D, YYYY h:mm A" }, Dd = "Invalid date", Ed = "%d", Fd = /\d{1,2}/, Gd = { future: "in %s", past: "%s ago", s: "a few seconds", ss: "%d seconds", m: "a minute", mm: "%d minutes", h: "an hour", hh: "%d hours", d: "a day", dd: "%d days", M: "a month", MM: "%d months", y: "a year", yy: "%d years" }, Hd = {}, Id = {}, Jd = /(\[[^\[]*\])|(\\)?([Hh]mm(ss)?|Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Qo?|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|kk?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g, Kd = /(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g, Ld = {}, Md = {}, Nd = /\d/, Od = /\d\d/, Pd = /\d{3}/, Qd = /\d{4}/, Rd = /[+-]?\d{6}/, Sd = /\d\d?/, Td = /\d\d\d\d?/, Ud = /\d\d\d\d\d\d?/, Vd = /\d{1,3}/, Wd = /\d{1,4}/, Xd = /[+-]?\d{1,6}/, Yd = /\d+/, Zd = /[+-]?\d+/, $d = /Z|[+-]\d\d:?\d\d/gi, _d = /Z|[+-]\d\d(?::?\d\d)?/gi, ae = /[+-]?\d+(\.\d{1,3})?/, be = /[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i, ce = {}, de = {}, ee = 0, fe = 1, ge = 2, he = 3, ie = 4, je = 5, ke = 6, le = 7, me = 8; zd = Array.prototype.indexOf ? Array.prototype.indexOf : function (a) { var b; for (b = 0; b < this.length; ++b) if (this[b] === a) return b; return -1 }; var ne = zd; U("M", ["MM", 2], "Mo", function () { return this.month() + 1 }), U("MMM", 0, 0, function (a) { return this.localeData().monthsShort(this, a) }), U("MMMM", 0, 0, function (a) { return this.localeData().months(this, a) }), J("month", "M"), M("month", 8), Z("M", Sd), Z("MM", Sd, Od), Z("MMM", function (a, b) { return b.monthsShortRegex(a) }), Z("MMMM", function (a, b) { return b.monthsRegex(a) }), ba(["M", "MM"], function (a, b) { b[fe] = u(a) - 1 }), ba(["MMM", "MMMM"], function (a, b, c, d) { var e = c._locale.monthsParse(a, d, c._strict); null != e ? b[fe] = e : n(c).invalidMonth = a }); var oe = /D[oD]?(\[[^\[\]]*\]|\s)+MMMM?/, pe = "January_February_March_April_May_June_July_August_September_October_November_December".split("_"), qe = "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"), re = be, se = be; U("Y", 0, 0, function () { var a = this.year(); return a <= 9999 ? "" + a : "+" + a }), U(0, ["YY", 2], 0, function () { return this.year() % 100 }), U(0, ["YYYY", 4], 0, "year"), U(0, ["YYYYY", 5], 0, "year"), U(0, ["YYYYYY", 6, !0], 0, "year"), J("year", "y"), M("year", 1), Z("Y", Zd), Z("YY", Sd, Od), Z("YYYY", Wd, Qd), Z("YYYYY", Xd, Rd), Z("YYYYYY", Xd, Rd), ba(["YYYYY", "YYYYYY"], ee), ba("YYYY", function (b, c) { c[ee] = 2 === b.length ? a.parseTwoDigitYear(b) : u(b) }), ba("YY", function (b, c) { c[ee] = a.parseTwoDigitYear(b) }), ba("Y", function (a, b) { b[ee] = parseInt(a, 10) }), a.parseTwoDigitYear = function (a) { return u(a) + (u(a) > 68 ? 1900 : 2e3) }; var te = O("FullYear", !0); U("w", ["ww", 2], "wo", "week"), U("W", ["WW", 2], "Wo", "isoWeek"), J("week", "w"), J("isoWeek", "W"), M("week", 5), M("isoWeek", 5), Z("w", Sd), Z("ww", Sd, Od), Z("W", Sd), Z("WW", Sd, Od), ca(["w", "ww", "W", "WW"], function (a, b, c, d) { b[d.substr(0, 1)] = u(a) }); var ue = { dow: 0, doy: 6 }; U("d", 0, "do", "day"), U("dd", 0, 0, function (a) { return this.localeData().weekdaysMin(this, a) }), U("ddd", 0, 0, function (a) { return this.localeData().weekdaysShort(this, a) }), U("dddd", 0, 0, function (a) { return this.localeData().weekdays(this, a) }), U("e", 0, 0, "weekday"), U("E", 0, 0, "isoWeekday"), J("day", "d"), J("weekday", "e"), J("isoWeekday", "E"), M("day", 11), M("weekday", 11), M("isoWeekday", 11), Z("d", Sd), Z("e", Sd), Z("E", Sd), Z("dd", function (a, b) { return b.weekdaysMinRegex(a) }), Z("ddd", function (a, b) { return b.weekdaysShortRegex(a) }), Z("dddd", function (a, b) { return b.weekdaysRegex(a) }), ca(["dd", "ddd", "dddd"], function (a, b, c, d) { var e = c._locale.weekdaysParse(a, d, c._strict); null != e ? b.d = e : n(c).invalidWeekday = a }), ca(["d", "e", "E"], function (a, b, c, d) { b[d] = u(a) }); var ve = "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"), we = "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"), xe = "Su_Mo_Tu_We_Th_Fr_Sa".split("_"), ye = be, ze = be, Ae = be; U("H", ["HH", 2], 0, "hour"), U("h", ["hh", 2], 0, Ra), U("k", ["kk", 2], 0, Sa), U("hmm", 0, 0, function () { return "" + Ra.apply(this) + T(this.minutes(), 2) }), U("hmmss", 0, 0, function () { return "" + Ra.apply(this) + T(this.minutes(), 2) + T(this.seconds(), 2) }), U("Hmm", 0, 0, function () { return "" + this.hours() + T(this.minutes(), 2) }), U("Hmmss", 0, 0, function () { return "" + this.hours() + T(this.minutes(), 2) + T(this.seconds(), 2) }), Ta("a", !0), Ta("A", !1), J("hour", "h"), M("hour", 13), Z("a", Ua), Z("A", Ua), Z("H", Sd), Z("h", Sd), Z("k", Sd), Z("HH", Sd, Od), Z("hh", Sd, Od), Z("kk", Sd, Od), Z("hmm", Td), Z("hmmss", Ud), Z("Hmm", Td), Z("Hmmss", Ud), ba(["H", "HH"], he), ba(["k", "kk"], function (a, b, c) { var d = u(a); b[he] = 24 === d ? 0 : d }), ba(["a", "A"], function (a, b, c) { c._isPm = c._locale.isPM(a), c._meridiem = a }), ba(["h", "hh"], function (a, b, c) { b[he] = u(a), n(c).bigHour = !0 }), ba("hmm", function (a, b, c) { var d = a.length - 2; b[he] = u(a.substr(0, d)), b[ie] = u(a.substr(d)), n(c).bigHour = !0 }), ba("hmmss", function (a, b, c) { var d = a.length - 4, e = a.length - 2; b[he] = u(a.substr(0, d)), b[ie] = u(a.substr(d, 2)), b[je] = u(a.substr(e)), n(c).bigHour = !0 }), ba("Hmm", function (a, b, c) { var d = a.length - 2; b[he] = u(a.substr(0, d)), b[ie] = u(a.substr(d)) }), ba("Hmmss", function (a, b, c) { var d = a.length - 4, e = a.length - 2; b[he] = u(a.substr(0, d)), b[ie] = u(a.substr(d, 2)), b[je] = u(a.substr(e)) }); var Be, Ce = /[ap]\.?m?\.?/i, De = O("Hours", !0), Ee = { calendar: Bd, longDateFormat: Cd, invalidDate: Dd, ordinal: Ed, dayOfMonthOrdinalParse: Fd, relativeTime: Gd, months: pe, monthsShort: qe, week: ue, weekdays: ve, weekdaysMin: xe, weekdaysShort: we, meridiemParse: Ce }, Fe = {}, Ge = {}, He = /^\s*((?:[+-]\d{6}|\d{4})-(?:\d\d-\d\d|W\d\d-\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?::\d\d(?::\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/, Ie = /^\s*((?:[+-]\d{6}|\d{4})(?:\d\d\d\d|W\d\d\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?:\d\d(?:\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/, Je = /Z|[+-]\d\d(?::?\d\d)?/, Ke = [["YYYYYY-MM-DD", /[+-]\d{6}-\d\d-\d\d/], ["YYYY-MM-DD", /\d{4}-\d\d-\d\d/], ["GGGG-[W]WW-E", /\d{4}-W\d\d-\d/], ["GGGG-[W]WW", /\d{4}-W\d\d/, !1], ["YYYY-DDD", /\d{4}-\d{3}/], ["YYYY-MM", /\d{4}-\d\d/, !1], ["YYYYYYMMDD", /[+-]\d{10}/], ["YYYYMMDD", /\d{8}/], ["GGGG[W]WWE", /\d{4}W\d{3}/], ["GGGG[W]WW", /\d{4}W\d{2}/, !1], ["YYYYDDD", /\d{7}/]], Le = [["HH:mm:ss.SSSS", /\d\d:\d\d:\d\d\.\d+/], ["HH:mm:ss,SSSS", /\d\d:\d\d:\d\d,\d+/], ["HH:mm:ss", /\d\d:\d\d:\d\d/], ["HH:mm", /\d\d:\d\d/], ["HHmmss.SSSS", /\d\d\d\d\d\d\.\d+/], ["HHmmss,SSSS", /\d\d\d\d\d\d,\d+/], ["HHmmss", /\d\d\d\d\d\d/], ["HHmm", /\d\d\d\d/], ["HH", /\d\d/]], Me = /^\/?Date\((\-?\d+)/i, Ne = /^((?:Mon|Tue|Wed|Thu|Fri|Sat|Sun),?\s)?(\d?\d\s(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s(?:\d\d)?\d\d\s)(\d\d:\d\d)(\:\d\d)?(\s(?:UT|GMT|[ECMP][SD]T|[A-IK-Za-ik-z]|[+-]\d{4}))$/; a.createFromInputFallback = x("value provided is not in a recognized RFC2822 or ISO format. moment construction falls back to js Date(), which is not reliable across all browsers and versions. Non RFC2822/ISO date formats are discouraged and will be removed in an upcoming major release. Please refer to http://momentjs.com/guides/#/warnings/js-date/ for more info.", function (a) { a._d = new Date(a._i + (a._useUTC ? " UTC" : "")) }), a.ISO_8601 = function () { }, a.RFC_2822 = function () { }; var Oe = x("moment().min is deprecated, use moment.max instead. http://momentjs.com/guides/#/warnings/min-max/", function () { var a = tb.apply(null, arguments); return this.isValid() && a.isValid() ? a < this ? this : a : p() }), Pe = x("moment().max is deprecated, use moment.min instead. http://momentjs.com/guides/#/warnings/min-max/", function () { var a = tb.apply(null, arguments); return this.isValid() && a.isValid() ? a > this ? this : a : p() }), Qe = function () { return Date.now ? Date.now() : +new Date }, Re = ["year", "quarter", "month", "week", "day", "hour", "minute", "second", "millisecond"]; Db("Z", ":"), Db("ZZ", ""), Z("Z", _d), Z("ZZ", _d), ba(["Z", "ZZ"], function (a, b, c) { c._useUTC = !0, c._tzm = Eb(_d, a) }); var Se = /([\+\-]|\d\d)/gi; a.updateOffset = function () { }; var Te = /^(\-)?(?:(\d*)[. ])?(\d+)\:(\d+)(?:\:(\d+)(\.\d*)?)?$/, Ue = /^(-)?P(?:(-?[0-9,.]*)Y)?(?:(-?[0-9,.]*)M)?(?:(-?[0-9,.]*)W)?(?:(-?[0-9,.]*)D)?(?:T(?:(-?[0-9,.]*)H)?(?:(-?[0-9,.]*)M)?(?:(-?[0-9,.]*)S)?)?$/; Sb.fn = Ab.prototype, Sb.invalid = zb; var Ve = Wb(1, "add"), We = Wb(-1, "subtract"); a.defaultFormat = "YYYY-MM-DDTHH:mm:ssZ", a.defaultFormatUtc = "YYYY-MM-DDTHH:mm:ss[Z]"; var Xe = x("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.", function (a) { return void 0 === a ? this.localeData() : this.locale(a) }); U(0, ["gg", 2], 0, function () { return this.weekYear() % 100 }), U(0, ["GG", 2], 0, function () { return this.isoWeekYear() % 100 }), Dc("gggg", "weekYear"), Dc("ggggg", "weekYear"), Dc("GGGG", "isoWeekYear"), Dc("GGGGG", "isoWeekYear"), J("weekYear", "gg"), J("isoWeekYear", "GG"), M("weekYear", 1), M("isoWeekYear", 1), Z("G", Zd), Z("g", Zd), Z("GG", Sd, Od), Z("gg", Sd, Od), Z("GGGG", Wd, Qd), Z("gggg", Wd, Qd), Z("GGGGG", Xd, Rd), Z("ggggg", Xd, Rd), ca(["gggg", "ggggg", "GGGG", "GGGGG"], function (a, b, c, d) { b[d.substr(0, 2)] = u(a) }), ca(["gg", "GG"], function (b, c, d, e) { c[e] = a.parseTwoDigitYear(b) }), U("Q", 0, "Qo", "quarter"), J("quarter", "Q"), M("quarter", 7), Z("Q", Nd), ba("Q", function (a, b) { b[fe] = 3 * (u(a) - 1) }), U("D", ["DD", 2], "Do", "date"), J("date", "D"), M("date", 9), Z("D", Sd), Z("DD", Sd, Od), Z("Do", function (a, b) { return a ? b._dayOfMonthOrdinalParse || b._ordinalParse : b._dayOfMonthOrdinalParseLenient }), ba(["D", "DD"], ge), ba("Do", function (a, b) { b[ge] = u(a.match(Sd)[0], 10) }); var Ye = O("Date", !0); U("DDD", ["DDDD", 3], "DDDo", "dayOfYear"), J("dayOfYear", "DDD"), M("dayOfYear", 4), Z("DDD", Vd), Z("DDDD", Pd), ba(["DDD", "DDDD"], function (a, b, c) { c._dayOfYear = u(a) }), U("m", ["mm", 2], 0, "minute"), J("minute", "m"), M("minute", 14), Z("m", Sd), Z("mm", Sd, Od), ba(["m", "mm"], ie); var Ze = O("Minutes", !1); U("s", ["ss", 2], 0, "second"), J("second", "s"), M("second", 15), Z("s", Sd), Z("ss", Sd, Od), ba(["s", "ss"], je); var $e = O("Seconds", !1); U("S", 0, 0, function () { return ~~(this.millisecond() / 100) }), U(0, ["SS", 2], 0, function () { return ~~(this.millisecond() / 10) }), U(0, ["SSS", 3], 0, "millisecond"), U(0, ["SSSS", 4], 0, function () { return 10 * this.millisecond() }), U(0, ["SSSSS", 5], 0, function () { return 100 * this.millisecond() }), U(0, ["SSSSSS", 6], 0, function () { return 1e3 * this.millisecond() }), U(0, ["SSSSSSS", 7], 0, function () { return 1e4 * this.millisecond() }), U(0, ["SSSSSSSS", 8], 0, function () { return 1e5 * this.millisecond() }), U(0, ["SSSSSSSSS", 9], 0, function () { return 1e6 * this.millisecond() }), J("millisecond", "ms"), M("millisecond", 16), Z("S", Vd, Nd), Z("SS", Vd, Od), Z("SSS", Vd, Pd); var _e; for (_e = "SSSS"; _e.length <= 9; _e += "S") Z(_e, Yd); for (_e = "S"; _e.length <= 9; _e += "S") ba(_e, Mc); var af = O("Milliseconds", !1); U("z", 0, 0, "zoneAbbr"), U("zz", 0, 0, "zoneName"); var bf = r.prototype; bf.add = Ve, bf.calendar = Zb, bf.clone = $b, bf.diff = fc, bf.endOf = sc, bf.format = kc, bf.from = lc, bf.fromNow = mc, bf.to = nc, bf.toNow = oc, bf.get = R, bf.invalidAt = Bc, bf.isAfter = _b, bf.isBefore = ac, bf.isBetween = bc, bf.isSame = cc, bf.isSameOrAfter = dc, bf.isSameOrBefore = ec, bf.isValid = zc, bf.lang = Xe, bf.locale = pc, bf.localeData = qc, bf.max = Pe, bf.min = Oe, bf.parsingFlags = Ac, bf.set = S, bf.startOf = rc, bf.subtract = We, bf.toArray = wc, bf.toObject = xc, bf.toDate = vc, bf.toISOString = ic, bf.inspect = jc, bf.toJSON = yc, bf.toString = hc, bf.unix = uc, bf.valueOf = tc, bf.creationData = Cc, bf.year = te, bf.isLeapYear = ra, bf.weekYear = Ec, bf.isoWeekYear = Fc, bf.quarter = bf.quarters = Kc, bf.month = ka, bf.daysInMonth = la, bf.week = bf.weeks = Ba, bf.isoWeek = bf.isoWeeks = Ca, bf.weeksInYear = Hc, bf.isoWeeksInYear = Gc, bf.date = Ye, bf.day = bf.days = Ka, bf.weekday = La, bf.isoWeekday = Ma, bf.dayOfYear = Lc, bf.hour = bf.hours = De, bf.minute = bf.minutes = Ze, bf.second = bf.seconds = $e, bf.millisecond = bf.milliseconds = af, bf.utcOffset = Hb, bf.utc = Jb, bf.local = Kb, bf.parseZone = Lb, bf.hasAlignedHourOffset = Mb, bf.isDST = Nb, bf.isLocal = Pb, bf.isUtcOffset = Qb, bf.isUtc = Rb, bf.isUTC = Rb, bf.zoneAbbr = Nc, bf.zoneName = Oc, bf.dates = x("dates accessor is deprecated. Use date instead.", Ye), bf.months = x("months accessor is deprecated. Use month instead", ka), bf.years = x("years accessor is deprecated. Use year instead", te), bf.zone = x("moment().zone is deprecated, use moment().utcOffset instead. http://momentjs.com/guides/#/warnings/zone/", Ib), bf.isDSTShifted = x("isDSTShifted is deprecated. See http://momentjs.com/guides/#/warnings/dst-shifted/ for more information", Ob); var cf = C.prototype; cf.calendar = D, cf.longDateFormat = E, cf.invalidDate = F, cf.ordinal = G, cf.preparse = Rc, cf.postformat = Rc, cf.relativeTime = H, cf.pastFuture = I, cf.set = A, cf.months = fa, cf.monthsShort = ga, cf.monthsParse = ia, cf.monthsRegex = na, cf.monthsShortRegex = ma, cf.week = ya, cf.firstDayOfYear = Aa, cf.firstDayOfWeek = za, cf.weekdays = Fa, cf.weekdaysMin = Ha, cf.weekdaysShort = Ga, cf.weekdaysParse = Ja, cf.weekdaysRegex = Na, cf.weekdaysShortRegex = Oa, cf.weekdaysMinRegex = Pa, cf.isPM = Va, cf.meridiem = Wa, $a("en", { dayOfMonthOrdinalParse: /\d{1,2}(th|st|nd|rd)/, ordinal: function (a) { var b = a % 10, c = 1 === u(a % 100 / 10) ? "th" : 1 === b ? "st" : 2 === b ? "nd" : 3 === b ? "rd" : "th"; return a + c } }), a.lang = x("moment.lang is deprecated. Use moment.locale instead.", $a), a.langData = x("moment.langData is deprecated. Use moment.localeData instead.", bb); var df = Math.abs, ef = id("ms"), ff = id("s"), gf = id("m"), hf = id("h"), jf = id("d"), kf = id("w"), lf = id("M"), mf = id("y"), nf = kd("milliseconds"), of = kd("seconds"), pf = kd("minutes"), qf = kd("hours"), rf = kd("days"), sf = kd("months"), tf = kd("years"), uf = Math.round, vf = { ss: 44, s: 45, m: 45, h: 22, d: 26, M: 11 }, wf = Math.abs, xf = Ab.prototype; return xf.isValid = yb, xf.abs = $c, xf.add = ad, xf.subtract = bd, xf.as = gd, xf.asMilliseconds = ef, xf.asSeconds = ff, xf.asMinutes = gf, xf.asHours = hf, xf.asDays = jf, xf.asWeeks = kf, xf.asMonths = lf, xf.asYears = mf, xf.valueOf = hd, xf._bubble = dd, xf.get = jd, xf.milliseconds = nf, xf.seconds = of, xf.minutes = pf, xf.hours = qf, xf.days = rf, xf.weeks = ld, xf.months = sf, xf.years = tf, xf.humanize = qd, xf.toISOString = rd, xf.toString = rd, xf.toJSON = rd, xf.locale = pc, xf.localeData = qc, xf.toIsoString = x("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", rd), xf.lang = Xe, U("X", 0, 0, "unix"), U("x", 0, 0, "valueOf"), Z("x", Zd), Z("X", ae), ba("X", function (a, b, c) { c._d = new Date(1e3 * parseFloat(a, 10)) }), ba("x", function (a, b, c) { c._d = new Date(u(a)) }), a.version = "2.18.1", b(tb), a.fn = bf, a.min = vb, a.max = wb, a.now = Qe, a.utc = l, a.unix = Pc, a.months = Vc, a.isDate = h, a.locale = $a, a.invalid = p, a.duration = Sb, a.isMoment = s, a.weekdays = Xc, a.parseZone = Qc, a.localeData = bb, a.isDuration = Bb, a.monthsShort = Wc, a.weekdaysMin = Zc, a.defineLocale = _a, a.updateLocale = ab, a.locales = cb, a.weekdaysShort = Yc, a.normalizeUnits = K, a.relativeTimeRounding = od, a.relativeTimeThreshold = pd, a.calendarFormat = Yb, a.prototype = bf, a
  });
  }
  if (callback) callback();
  }

  function LimoniAppsLoadMomentFormat(callback) {
  /*! Moment Duration Format v1.3.0 | https://github.com/jsmreese/moment-duration-format | Date: 2014-07-15 | Duration format plugin function for the Moment.js library | http://momentjs.com/ | Copyright 2014 John Madhavan-Reese | Released under the MIT license */
  if (typeof moment === 'function' && (typeof moment.duration === 'undefined' || typeof moment.duration.fn !== 'function')) {
  !function (e, t) { function n(e) { var t = ""; if (!(e = parseInt(e, 10)) || e < 1) return t; for (; e;) t += "0", e -= 1; return t } function r(e, t, r) { return null == e && (e = ""), e = "" + e, (r ? e : "") + n(t - e.length) + (r ? "" : e) } function i(e) { return "[object Array]" === Object.prototype.toString.call(e) } function o(e) { return "[object Object]" === Object.prototype.toString.call(e) } function u(e, t) { for (var n = e.length; n -= 1;) if (t(e[n])) return e[n] } function s(e, t) { var n, r = 0, i = e.length; for ("function" != typeof t && (n = t, t = function (e) { return e === n }) ; r < i;) { if (t(e[r])) return e[r]; r += 1 } } function a(e, t) { var n = 0, r = e.length; if (e && r) for (; n < r;) { if (!1 === t(e[n], n)) return; n += 1 } } function c(e, t) { var n = 0, r = e.length, i = []; if (!e || !r) return i; for (; n < r;) i[n] = t(e[n], n), n += 1; return i } function f(e, t) { return c(e, function (e) { return e[t] }) } function l(e) { var t = []; return a(e, function (e) { e && t.push(e) }), t } function p(e) { var t = []; return a(e, function (e) { s(t, e) || t.push(e) }), t } function h(e, t) { var n = []; return a(e, function (e) { a(t, function (t) { e === t && n.push(e) }) }), p(n) } function m(e, t) { var n = []; return a(e, function (r, i) { if (!t(r)) return n = e.slice(i), !1 }), n } function y(e, t) { return m(e.slice().reverse(), t).reverse() } function d(e, t) { for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]); return e } var g; if ("function" == typeof require) try { g = require("moment") } catch (e) { } if (!g && e.moment && (g = e.moment), !g) throw "Moment Duration Format cannot find Moment.js"; g.duration.fn.format = function () { var e, t, u, v, w, M, b = [].slice.call(arguments), k = d({}, this.format.defaults), j = g.duration(this); return k.duration = this, a(b, function (e) { "string" != typeof e && "function" != typeof e ? "number" != typeof e ? o(e) && d(k, e) : k.precision = e : k.template = e }), u = k.types = i(k.types) ? k.types : k.types.split(" "), "function" == typeof k.template && (k.template = k.template.apply(k)), e = new RegExp(c(u, function (e) { return k[e].source }).join("|"), "g"), v = function (e) { return s(u, function (t) { return k[t].test(e) }) }, t = c(k.template.match(e), function (e, t) { var n = v(e); return { index: t, length: e.length, token: "escape" === n ? e.replace(k.escape, "$1") : e, type: "escape" === n || "general" === n ? null : n } }, this), (w = h(u, p(l(f(t, "type"))))).length ? (a(w, function (e, n) { var r, i, o, u, s; r = j.as(e), i = r > 0 ? Math.floor(r) : Math.ceil(r), o = r - i, u = n + 1 === w.length, s = !n, a(t, function (t) { t.type === e && (d(t, { value: r, wholeValue: i, decimalValue: o, isLeast: u, isMost: s }), s && null == k.forceLength && t.length > 1 && (k.forceLength = !0)) }), j.subtract(i, e) }), k.trim && (t = ("left" === k.trim ? m : y)(t, function (e) { return !(e.isLeast || null != e.type && e.wholeValue) })), M = !1, "right" === k.trim && t.reverse(), t = c(t, function (e) { var t, i; if (!e.type) return e.token; if (t = e.isLeast && k.precision < 0 ? (Math.floor(e.wholeValue * Math.pow(10, k.precision)) * Math.pow(10, -k.precision)).toString() : e.wholeValue.toString(), t = t.replace(/^\-/, ""), e.length > 1 && (M || e.isMost || k.forceLength) && (t = r(t, e.length)), e.isLeast && k.precision > 0) switch ((i = e.decimalValue.toString().replace(/^\-/, "").split(/\.|e\-/)).length) { case 1: t += "." + r(i[0], k.precision, !0).slice(0, k.precision); break; case 2: t += "." + r(i[1], k.precision, !0).slice(0, k.precision); break; case 3: t += "." + r(n(+i[2] - 1) + (i[0] || "0") + i[1], k.precision, !0).slice(0, k.precision); break; default: throw "Moment Duration Format: unable to parse token decimal value." } return e.isMost && e.value < 0 && (t = "-" + t), M = !0, t }), "right" === k.trim && t.reverse(), t.join("")) : f(t, "token").join("") }, g.duration.fn.format.defaults = { escape: /\[(.+?)\]/, years: /[Yy]+/, months: /M+/, weeks: /[Ww]+/, days: /[Dd]+/, hours: /[Hh]+/, minutes: /m+/, seconds: /s+/, milliseconds: /S+/, general: /.+?/, types: "escape years months weeks days hours minutes seconds milliseconds general", trim: "left", precision: 0, forceLength: null, template: function () { var e = this.types, t = this.duration; switch (u(e, function (e) { return t._data[e] })) { case "seconds": return "h:mm:ss"; case "minutes": return "d[d] h:mm"; case "hours": return "d[d] h[h]"; case "days": return "M[m] d[d]"; case "weeks": return "y[y] w[w]"; case "months": return "y[y] M[m]"; case "years": return "y[y]"; default: return "y[y] M[m] d[d] h:mm:ss" } } } }(this);
  }
  if (callback) callback();
  }

  function LimoniAppsLoadMomentTimezone(callback) {
  /*! moment-timezone.js | version : 0.5.13 | Copyright (c) JS Foundation and other contributors | license : MIT | github.com/moment/moment-timezone */
  if (typeof moment === 'function' && typeof moment.tz !== 'function') {
  !function (c, M) { "use strict"; "function" == typeof define && define.amd ? define(["moment"], M) : "object" == typeof module && module.exports ? module.exports = M(require("moment")) : M(c.moment) }(this, function (c) { "use strict"; function M(c) { return c > 96 ? c - 87 : c > 64 ? c - 29 : c - 48 } function z(c) { var z = 0, A = c.split("."), b = A[0], o = A[1] || "", p = 1, n = 0, a = 1; for (45 === c.charCodeAt(0) && (z = 1, a = -1), z; z < b.length; z++) n = 60 * n + M(b.charCodeAt(z)); for (z = 0; z < o.length; z++) p /= 60, n += M(o.charCodeAt(z)) * p; return n * a } function A(c) { for (var M = 0; M < c.length; M++) c[M] = z(c[M]) } function b(c, M) { for (var z = 0; z < M; z++) c[z] = Math.round((c[z - 1] || 0) + 6e4 * c[z]); c[M - 1] = 1 / 0 } function o(c, M) { var z, A = []; for (z = 0; z < M.length; z++) A[z] = c[M[z]]; return A } function p(c) { var M = c.split("|"), z = M[2].split(" "), p = M[3].split(""), n = M[4].split(" "); return A(z), A(p), A(n), b(n, p.length), { name: M[0], abbrs: o(M[1].split(" "), p), offsets: o(z, p), untils: n, population: 0 | M[5] } } function n(c) { c && this._set(p(c)) } function a(c) { var M = c.toTimeString(), z = M.match(/\([a-z ]+\)/i); "GMT" === (z = z && z[0] ? (z = z[0].match(/[A-Z]/g)) ? z.join("") : void 0 : (z = M.match(/[A-Z]{3,5}/g)) ? z[0] : void 0) && (z = void 0), this.at = +c, this.abbr = z, this.offset = c.getTimezoneOffset() } function O(c) { this.zone = c, this.offsetScore = 0, this.abbrScore = 0 } function L(c, M) { for (var z, A; A = 6e4 * ((M.at - c.at) / 12e4 | 0) ;) (z = new a(new Date(c.at + A))).offset === c.offset ? c = z : M = z; return c } function q() { var c, M, z, A = (new Date).getFullYear() - 2, b = new a(new Date(A, 0, 1)), o = [b]; for (z = 1; z < 48; z++) (M = new a(new Date(A, z, 1))).offset !== b.offset && (c = L(b, M), o.push(c), o.push(new a(new Date(c.at + 6e4)))), b = M; for (z = 0; z < 4; z++) o.push(new a(new Date(A + z, 0, 1))), o.push(new a(new Date(A + z, 6, 1))); return o } function N(c, M) { return c.offsetScore !== M.offsetScore ? c.offsetScore - M.offsetScore : c.abbrScore !== M.abbrScore ? c.abbrScore - M.abbrScore : M.zone.population - c.zone.population } function i(c, M) { var z, b; for (A(M), z = 0; z < M.length; z++) b = M[z], m[b] = m[b] || {}, m[b][c] = !0 } function W(c) { var M, z, A, b = c.length, o = {}, p = []; for (M = 0; M < b; M++) { A = m[c[M].offset] || {}; for (z in A) A.hasOwnProperty(z) && (o[z] = !0) } for (M in o) o.hasOwnProperty(M) && p.push(R[M]); return p } function d() { try { var c = Intl.DateTimeFormat().resolvedOptions().timeZone; if (c) { var M = R[e(c)]; if (M) return M; u("Moment Timezone found " + c + " from the Intl api, but did not have that data loaded.") } } catch (c) { } var z, A, b, o = q(), p = o.length, n = W(o), a = []; for (A = 0; A < n.length; A++) { for (z = new O(f(n[A]), p), b = 0; b < p; b++) z.scoreOffsetAt(o[b]); a.push(z) } return a.sort(N), a.length > 0 ? a[0].zone.name : void 0 } function e(c) { return (c || "").toLowerCase().replace(/\//g, "_") } function X(c) { var M, z, A, b; for ("string" == typeof c && (c = [c]), M = 0; M < c.length; M++) b = e(z = (A = c[M].split("|"))[0]), E[b] = c[M], R[b] = z, A[5] && i(b, A[2].split(" ")) } function f(c, M) { c = e(c); var z, A = E[c]; return A instanceof n ? A : "string" == typeof A ? (A = new n(A), E[c] = A, A) : S[c] && M !== f && (z = f(S[c], f)) ? ((A = E[c] = new n)._set(z), A.name = R[c], A) : null } function B(c) { var M, z, A, b; for ("string" == typeof c && (c = [c]), M = 0; M < c.length; M++) A = e((z = c[M].split("|"))[0]), b = e(z[1]), S[A] = b, R[A] = z[0], S[b] = A, R[b] = z[1] } function r(c) { X(c.zones), B(c.links), t.dataVersion = c.version } function T(c) { return T.didShowError || (T.didShowError = !0, u("moment.tz.zoneExists('" + c + "') has been deprecated in favor of !moment.tz.zone('" + c + "')")), !!f(c) } function l(c) { return !(!c._a || void 0 !== c._tzm) } function u(c) { "undefined" != typeof console && "function" == typeof console.error && console.error(c) } function t(M) { var z = Array.prototype.slice.call(arguments, 0, -1), A = arguments[arguments.length - 1], b = f(A), o = c.utc.apply(null, z); return b && !c.isMoment(M) && l(o) && o.add(b.parse(o), "minutes"), o.tz(A), o } function C(c) { return function () { return this._z ? this._z.abbr(this) : c.call(this) } } var s, E = {}, S = {}, R = {}, m = {}, D = c.version.split("."), P = +D[0], g = +D[1]; (P < 2 || 2 === P && g < 6) && u("Moment Timezone requires Moment.js >= 2.6.0. You are using Moment.js " + c.version + ". See momentjs.com"), n.prototype = { _set: function (c) { this.name = c.name, this.abbrs = c.abbrs, this.untils = c.untils, this.offsets = c.offsets, this.population = c.population }, _index: function (c) { var M, z = +c, A = this.untils; for (M = 0; M < A.length; M++) if (z < A[M]) return M }, parse: function (c) { var M, z, A, b, o = +c, p = this.offsets, n = this.untils, a = n.length - 1; for (b = 0; b < a; b++) if (M = p[b], z = p[b + 1], A = p[b ? b - 1 : b], M < z && t.moveAmbiguousForward ? M = z : M > A && t.moveInvalidForward && (M = A), o < n[b] - 6e4 * M) return p[b]; return p[a] }, abbr: function (c) { return this.abbrs[this._index(c)] }, offset: function (c) { return this.offsets[this._index(c)] } }, O.prototype.scoreOffsetAt = function (c) { this.offsetScore += Math.abs(this.zone.offset(c.at) - c.offset), this.zone.abbr(c.at).replace(/[^A-Z]/g, "") !== c.abbr && this.abbrScore++ }, t.version = "0.5.13", t.dataVersion = "", t._zones = E, t._links = S, t._names = R, t.add = X, t.link = B, t.load = r, t.zone = f, t.zoneExists = T, t.guess = function (c) { return s && !c || (s = d()), s }, t.names = function () { var c, M = []; for (c in R) R.hasOwnProperty(c) && (E[c] || E[S[c]]) && R[c] && M.push(R[c]); return M.sort() }, t.Zone = n, t.unpack = p, t.unpackBase60 = z, t.needsOffset = l, t.moveInvalidForward = !0, t.moveAmbiguousForward = !1; var h = c.fn; c.tz = t, c.defaultZone = null, c.updateOffset = function (M, z) { var A, b = c.defaultZone; void 0 === M._z && (b && l(M) && !M._isUTC && (M._d = c.utc(M._a)._d, M.utc().add(b.parse(M), "minutes")), M._z = b), M._z && (A = M._z.offset(M), Math.abs(A) < 16 && (A /= 60), void 0 !== M.utcOffset ? M.utcOffset(-A, z) : M.zone(A, z)) }, h.tz = function (M) { return M ? (this._z = f(M), this._z ? c.updateOffset(this) : u("Moment Timezone has no data for " + M + ". See http://momentjs.com/timezone/docs/#/data-loading/."), this) : this._z ? this._z.name : void 0 }, h.zoneName = C(h.zoneName), h.zoneAbbr = C(h.zoneAbbr), h.utc = function (c) { return function () { return this._z = null, c.apply(this, arguments) } }(h.utc), c.tz.setDefault = function (M) { return (P < 2 || 2 === P && g < 9) && u("Moment Timezone setDefault() requires Moment.js >= 2.9.0. You are using Moment.js " + c.version + "."), c.defaultZone = M ? f(M) : null, c }; var w = c.momentProperties; return "[object Array]" === Object.prototype.toString.call(w) ? (w.push("_z"), w.push("_a")) : w && (w._z = null), r({ version: "2017b", zones: ["Africa/Abidjan|LMT GMT|g.8 0|01|-2ldXH.Q|48e5", "Africa/Accra|LMT GMT +0020|.Q 0 -k|012121212121212121212121212121212121212121212121|-26BbX.8 6tzX.8 MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE|41e5", "Africa/Nairobi|LMT EAT +0230 +0245|-2r.g -30 -2u -2J|01231|-1F3Cr.g 3Dzr.g okMu MFXJ|47e5", "Africa/Algiers|PMT WET WEST CET CEST|-9.l 0 -10 -10 -20|0121212121212121343431312123431213|-2nco9.l cNb9.l HA0 19A0 1iM0 11c0 1oo0 Wo0 1rc0 QM0 1EM0 UM0 DA0 Imo0 rd0 De0 9Xz0 1fb0 1ap0 16K0 2yo0 mEp0 hwL0 jxA0 11A0 dDd0 17b0 11B0 1cN0 2Dy0 1cN0 1fB0 1cL0|26e5", "Africa/Lagos|LMT WAT|-d.A -10|01|-22y0d.A|17e6", "Africa/Bissau|LMT -01 GMT|12.k 10 0|012|-2ldWV.E 2xonV.E|39e4", "Africa/Maputo|LMT CAT|-2a.k -20|01|-2GJea.k|26e5", "Africa/Cairo|EET EEST|-20 -30|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-1bIO0 vb0 1ip0 11z0 1iN0 1nz0 12p0 1pz0 10N0 1pz0 16p0 1jz0 s3d0 Vz0 1oN0 11b0 1oO0 10N0 1pz0 10N0 1pb0 10N0 1pb0 10N0 1pb0 10N0 1pz0 10N0 1pb0 10N0 1pb0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1WL0 rd0 1Rz0 wp0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1qL0 Xd0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1ny0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 WL0 1qN0 Rb0 1wp0 On0 1zd0 Lz0 1EN0 Fb0 c10 8n0 8Nd0 gL0 e10 mn0|15e6", "Africa/Casablanca|LMT WET WEST CET|u.k 0 -10 -10|0121212121212121213121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2gMnt.E 130Lt.E rb0 Dd0 dVb0 b6p0 TX0 EoB0 LL0 gnd0 rz0 43d0 AL0 1Nd0 XX0 1Cp0 pz0 dEp0 4mn0 SyN0 AL0 1Nd0 wn0 1FB0 Db0 1zd0 Lz0 1Nf0 wM0 co0 go0 1o00 s00 dA0 vc0 11A0 A00 e00 y00 11A0 uM0 e00 Dc0 11A0 s00 e00 IM0 WM0 mo0 gM0 LA0 WM0 jA0 e00 Rc0 11A0 e00 e00 U00 11A0 8o0 e00 11A0 11A0 5A0 e00 17c0 1fA0 1a00 1a00 1fA0 17c0 1io0 14o0 1lc0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1lc0 14o0 1fA0|32e5", "Africa/Ceuta|WET WEST CET CEST|0 -10 -10 -20|010101010101010101010232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-25KN0 11z0 drd0 18p0 3HX0 17d0 1fz0 1a10 1io0 1a00 1y7o0 LL0 gnd0 rz0 43d0 AL0 1Nd0 XX0 1Cp0 pz0 dEp0 4VB0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|85e3", "Africa/El_Aaiun|LMT -01 WET WEST|Q.M 10 0 -10|01232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1rDz7.c 1GVA7.c 6L0 AL0 1Nd0 XX0 1Cp0 pz0 1cBB0 AL0 1Nd0 wn0 1FB0 Db0 1zd0 Lz0 1Nf0 wM0 co0 go0 1o00 s00 dA0 vc0 11A0 A00 e00 y00 11A0 uM0 e00 Dc0 11A0 s00 e00 IM0 WM0 mo0 gM0 LA0 WM0 jA0 e00 Rc0 11A0 e00 e00 U00 11A0 8o0 e00 11A0 11A0 5A0 e00 17c0 1fA0 1a00 1a00 1fA0 17c0 1io0 14o0 1lc0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1lc0 14o0 1fA0|20e4", "Africa/Johannesburg|SAST SAST SAST|-1u -20 -30|012121|-2GJdu 1Ajdu 1cL0 1cN0 1cL0|84e5", "Africa/Khartoum|LMT CAT CAST EAT|-2a.8 -20 -30 -30|01212121212121212121212121212121213|-1yW2a.8 1zK0a.8 16L0 1iN0 17b0 1jd0 17b0 1ip0 17z0 1i10 17X0 1hB0 18n0 1hd0 19b0 1gp0 19z0 1iN0 17b0 1ip0 17z0 1i10 18n0 1hd0 18L0 1gN0 19b0 1gp0 19z0 1iN0 17z0 1i10 17X0 yGd0|51e5", "Africa/Monrovia|MMT MMT GMT|H.8 I.u 0|012|-23Lzg.Q 28G01.m|11e5", "Africa/Ndjamena|LMT WAT WAST|-10.c -10 -20|0121|-2le10.c 2J3c0.c Wn0|13e5", "Africa/Tripoli|LMT CET CEST EET|-Q.I -10 -20 -20|012121213121212121212121213123123|-21JcQ.I 1hnBQ.I vx0 4iP0 xx0 4eN0 Bb0 7ip0 U0n0 A10 1db0 1cN0 1db0 1dd0 1db0 1eN0 1bb0 1e10 1cL0 1c10 1db0 1dd0 1db0 1cN0 1db0 1q10 fAn0 1ep0 1db0 AKq0 TA0 1o00|11e5", "Africa/Tunis|PMT CET CEST|-9.l -10 -20|0121212121212121212121212121212121|-2nco9.l 18pa9.l 1qM0 DA0 3Tc0 11B0 1ze0 WM0 7z0 3d0 14L0 1cN0 1f90 1ar0 16J0 1gXB0 WM0 1rA0 11c0 nwo0 Ko0 1cM0 1cM0 1rA0 10M0 zuM0 10N0 1aN0 1qM0 WM0 1qM0 11A0 1o00|20e5", "Africa/Windhoek|+0130 SAST SAST CAT WAT WAST|-1u -20 -30 -20 -10 -20|012134545454545454545454545454545454545454545454545454545454545454545454545454545454545454545|-2GJdu 1Ajdu 1cL0 1SqL0 9NA0 11D0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 11B0 1nX0 11B0|32e4", "America/Adak|NST NWT NPT BST BDT AHST HST HDT|b0 a0 a0 b0 a0 a0 a0 90|012034343434343434343434343434343456767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17SX0 8wW0 iB0 Qlb0 52O0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cm0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|326", "America/Anchorage|AST AWT APT AHST AHDT YST AKST AKDT|a0 90 90 a0 90 90 90 80|012034343434343434343434343434343456767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17T00 8wX0 iA0 Qlb0 52O0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cm0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|30e4", "America/Port_of_Spain|LMT AST|46.4 40|01|-2kNvR.U|43e3", "America/Araguaina|LMT -03 -02|3c.M 30 20|0121212121212121212121212121212121212121212121212121|-2glwL.c HdKL.c 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 dMN0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 ny10 Lz0|14e4", "America/Argentina/Buenos_Aires|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323232323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wp0 Rb0 1wp0 TX0 A4p0 uL0 1qN0 WL0", "America/Argentina/Catamarca|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323132321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 rlB0 7B0 8zb0 uL0", "America/Argentina/Cordoba|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323132323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 A4p0 uL0 1qN0 WL0", "America/Argentina/Jujuy|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323121323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1ze0 TX0 1ld0 WK0 1wp0 TX0 A4p0 uL0", "America/Argentina/La_Rioja|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323231232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Qn0 qO0 16n0 Rb0 1wp0 TX0 rlB0 7B0 8zb0 uL0", "America/Argentina/Mendoza|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232312121321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1u20 SL0 1vd0 Tb0 1wp0 TW0 ri10 Op0 7TX0 uL0", "America/Argentina/Rio_Gallegos|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wp0 Rb0 1wp0 TX0 rlB0 7B0 8zb0 uL0", "America/Argentina/Salta|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323231323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 A4p0 uL0", "America/Argentina/San_Juan|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323231232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Qn0 qO0 16n0 Rb0 1wp0 TX0 rld0 m10 8lb0 uL0", "America/Argentina/San_Luis|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323121212321212|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 XX0 1q20 SL0 AN0 vDb0 m10 8lb0 8L0 jd0 1qN0 WL0 1qN0", "America/Argentina/Tucuman|CMT -04 -03 -02|4g.M 40 30 20|0121212121212121212121212121212121212121212323232313232123232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 rlB0 4N0 8BX0 uL0 1qN0 WL0", "America/Argentina/Ushuaia|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wp0 Rb0 1wp0 TX0 rkN0 8p0 8zb0 uL0", "America/Curacao|LMT -0430 AST|4z.L 4u 40|012|-2kV7o.d 28KLS.d|15e4", "America/Asuncion|AMT -04 -03|3O.E 40 30|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-1x589.k 1DKM9.k 3CL0 3Dd0 10L0 1pB0 10n0 1pB0 10n0 1pB0 1cL0 1dd0 1db0 1dd0 1cL0 1dd0 1cL0 1dd0 1cL0 1dd0 1db0 1dd0 1cL0 1dd0 1cL0 1dd0 1cL0 1dd0 1db0 1dd0 1cL0 1lB0 14n0 1dd0 1cL0 1fd0 WL0 1rd0 1aL0 1dB0 Xz0 1qp0 Xb0 1qN0 10L0 1rB0 TX0 1tB0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 1cL0 WN0 1qL0 11B0 1nX0 1ip0 WL0 1qN0 WL0 1qN0 WL0 1tB0 TX0 1tB0 TX0 1tB0 19X0 1a10 1fz0 1a10 1fz0 1cN0 17b0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0|28e5", "America/Atikokan|CST CDT CWT CPT EST|60 50 50 50 50|0101234|-25TQ0 1in0 Rnb0 3je0 8x30 iw0|28e2", "America/Bahia|LMT -03 -02|2y.4 30 20|01212121212121212121212121212121212121212121212121212121212121|-2glxp.U HdLp.U 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 l5B0 Rb0|27e5", "America/Bahia_Banderas|LMT MST CST PST MDT CDT|71 70 60 80 60 50|0121212131414141414141414141414141414152525252525252525252525252525252525252525252525252525252|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 otX0 gmN0 P2N0 13Vd0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nW0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|84e3", "America/Barbados|LMT BMT AST ADT|3W.t 3W.t 40 30|01232323232|-1Q0I1.v jsM0 1ODC1.v IL0 1ip0 17b0 1ip0 17b0 1ld0 13b0|28e4", "America/Belem|LMT -03 -02|3d.U 30 20|012121212121212121212121212121|-2glwK.4 HdKK.4 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0|20e5", "America/Belize|LMT CST -0530 CDT|5Q.M 60 5u 50|01212121212121212121212121212121212121212121212121213131|-2kBu7.c fPA7.c Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1f0Mu qn0 lxB0 mn0|57e3", "America/Blanc-Sablon|AST ADT AWT APT|40 30 30 30|010230|-25TS0 1in0 UGp0 8x50 iu0|11e2", "America/Boa_Vista|LMT -04 -03|42.E 40 30|0121212121212121212121212121212121|-2glvV.k HdKV.k 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 smp0 WL0 1tB0 2L0|62e2", "America/Bogota|BMT -05 -04|4U.g 50 40|0121|-2eb73.I 38yo3.I 2en0|90e5", "America/Boise|PST PDT MST MWT MPT MDT|80 70 70 60 60 60|0101023425252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252|-261q0 1nX0 11B0 1nX0 8C10 JCL0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 Dd0 1Kn0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|21e4", "America/Cambridge_Bay|-00 MST MWT MPT MDDT MDT CST CDT EST|0 70 60 60 50 60 60 50 50|0123141515151515151515151515151515151515151515678651515151515151515151515151515151515151515151515151515151515151515151515151|-21Jc0 RO90 8x20 ix0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11A0 1nX0 2K0 WQ0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|15e2", "America/Campo_Grande|LMT -04 -03|3C.s 40 30|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-2glwl.w HdLl.w 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 1C10 Lz0 1Ip0 HX0 1zd0 On0 1HB0 IL0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1zd0 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1C10 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1C10 Lz0 1C10 Lz0 1C10 Lz0 1C10 On0 1zd0 Rb0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0|77e4", "America/Cancun|LMT CST EST EDT CDT|5L.4 60 50 40 50|0123232341414141414141414141414141414141412|-1UQG0 2q2o0 yLB0 1lb0 14p0 1lb0 14p0 Lz0 xB0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 Dd0|63e4", "America/Caracas|CMT -0430 -04|4r.E 4u 40|01212|-2kV7w.k 28KM2.k 1IwOu kqo0|29e5", "America/Cayenne|LMT -04 -03|3t.k 40 30|012|-2mrwu.E 2gWou.E|58e3", "America/Panama|CMT EST|5j.A 50|01|-2uduE.o|15e5", "America/Chicago|CST CDT EST CWT CPT|60 50 50 50 50|01010101010101010101010101010101010102010101010103401010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 1wp0 TX0 WN0 1qL0 1cN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 11B0 1Hz0 14p0 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 RB0 8x30 iw0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|92e5", "America/Chihuahua|LMT MST CST CDT MDT|74.k 70 60 50 60|0121212323241414141414141414141414141414141414141414141414141414141414141414141414141414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 2zQN0 1lb0 14p0 1lb0 14q0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|81e4", "America/Costa_Rica|SJMT CST CDT|5A.d 60 50|0121212121|-1Xd6n.L 2lu0n.L Db0 1Kp0 Db0 pRB0 15b0 1kp0 mL0|12e5", "America/Creston|MST PST|70 80|010|-29DR0 43B0|53e2", "America/Cuiaba|LMT -04 -03|3I.k 40 30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-2glwf.E HdLf.E 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 4a10 HX0 1zd0 On0 1HB0 IL0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1zd0 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1C10 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1C10 Lz0 1C10 Lz0 1C10 Lz0 1C10 On0 1zd0 Rb0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0|54e4", "America/Danmarkshavn|LMT -03 -02 GMT|1e.E 30 20 0|01212121212121212121212121212121213|-2a5WJ.k 2z5fJ.k 19U0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 DC0|8", "America/Dawson|YST YDT YWT YPT YDDT PST PDT|90 80 80 80 70 80 70|0101023040565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565|-25TN0 1in0 1o10 13V0 Ser0 8x00 iz0 LCL0 1fA0 jrA0 fNd0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|13e2", "America/Dawson_Creek|PST PDT PWT PPT MST|80 70 70 70 70|0102301010101010101010101010101010101010101010101010101014|-25TO0 1in0 UGp0 8x10 iy0 3NB0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 ML0|12e3", "America/Denver|MST MDT MWT MPT|70 60 60 60|01010101023010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261r0 1nX0 11B0 1nX0 11B0 1qL0 WN0 mn0 Ord0 8x20 ix0 LCN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|26e5", "America/Detroit|LMT CST EST EWT EPT EDT|5w.b 60 50 40 40 40|01234252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252|-2Cgir.N peqr.N 156L0 8x40 iv0 6fd0 11z0 Jy10 SL0 dnB0 1cL0 s10 1Vz0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|37e5", "America/Edmonton|LMT MST MDT MWT MPT|7x.Q 70 60 60 60|01212121212121341212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2yd4q.8 shdq.8 1in0 17d0 hz0 2dB0 1fz0 1a10 11z0 1qN0 WL0 1qN0 11z0 IGN0 8x20 ix0 3NB0 11z0 LFB0 1cL0 3Cp0 1cL0 66N0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|10e5", "America/Eirunepe|LMT -05 -04|4D.s 50 40|0121212121212121212121212121212121|-2glvk.w HdLk.w 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 dPB0 On0 yTd0 d5X0|31e3", "America/El_Salvador|LMT CST CDT|5U.M 60 50|012121|-1XiG3.c 2Fvc3.c WL0 1qN0 WL0|11e5", "America/Tijuana|LMT MST PST PDT PWT PPT|7M.4 70 80 70 70 70|012123245232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1UQE0 4PX0 8mM0 8lc0 SN0 1cL0 pHB0 83r0 zI0 5O10 1Rz0 cOO0 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 BUp0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 U10 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|20e5", "America/Fort_Nelson|PST PDT PWT PPT MST|80 70 70 70 70|01023010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010104|-25TO0 1in0 UGp0 8x10 iy0 3NB0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0|39e2", "America/Fort_Wayne|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|010101023010101010101010101040454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 QI10 Db0 RB0 8x30 iw0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 5Tz0 1o10 qLb0 1cL0 1cN0 1cL0 1qhd0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Fortaleza|LMT -03 -02|2y 30 20|0121212121212121212121212121212121212121|-2glxq HdLq 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 nsp0 WL0 1tB0 5z0 2mN0 On0|34e5", "America/Glace_Bay|LMT AST ADT AWT APT|3X.M 40 30 30 30|012134121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2IsI0.c CwO0.c 1in0 UGp0 8x50 iu0 iq10 11z0 Jg10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|19e3", "America/Godthab|LMT -03 -02|3q.U 30 20|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2a5Ux.4 2z5dx.4 19U0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|17e3", "America/Goose_Bay|NST NDT NST NDT NWT NPT AST ADT ADDT|3u.Q 2u.Q 3u 2u 2u 2u 40 30 20|010232323232323245232323232323232323232323232323232323232326767676767676767676767676767676767676767676768676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-25TSt.8 1in0 DXb0 2HbX.8 WL0 1qN0 WL0 1qN0 WL0 1tB0 TX0 1tB0 WL0 1qN0 WL0 1qN0 7UHu itu 1tB0 WL0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1tB0 WL0 1ld0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 S10 g0u 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14n1 1lb0 14p0 1nW0 11C0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zcX Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|76e2", "America/Grand_Turk|KMT EST EDT AST|57.b 50 40 40|0121212121212121212121212121212121212121212121212121212121212121212121212123|-2l1uQ.N 2HHBQ.N 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|37e2", "America/Guatemala|LMT CST CDT|62.4 60 50|0121212121|-24KhV.U 2efXV.U An0 mtd0 Nz0 ifB0 17b0 zDB0 11z0|13e5", "America/Guayaquil|QMT -05 -04|5e 50 40|0121|-1yVSK 2uILK rz0|27e5", "America/Guyana|LMT -0345 -03 -04|3Q.E 3J 30 40|0123|-2dvU7.k 2r6LQ.k Bxbf|80e4", "America/Halifax|LMT AST ADT AWT APT|4e.o 40 30 30 30|0121212121212121212121212121212121212121212121212134121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2IsHJ.A xzzJ.A 1db0 3I30 1in0 3HX0 IL0 1E10 ML0 1yN0 Pb0 1Bd0 Mn0 1Bd0 Rz0 1w10 Xb0 1w10 LX0 1w10 Xb0 1w10 Lz0 1C10 Jz0 1E10 OL0 1yN0 Un0 1qp0 Xb0 1qp0 11X0 1w10 Lz0 1HB0 LX0 1C10 FX0 1w10 Xb0 1qp0 Xb0 1BB0 LX0 1td0 Xb0 1qp0 Xb0 Rf0 8x50 iu0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 3Qp0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 3Qp0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 6i10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|39e4", "America/Havana|HMT CST CDT|5t.A 50 40|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1Meuu.o 72zu.o ML0 sld0 An0 1Nd0 Db0 1Nd0 An0 6Ep0 An0 1Nd0 An0 JDd0 Mn0 1Ap0 On0 1fd0 11X0 1qN0 WL0 1wp0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 14n0 1ld0 14L0 1kN0 15b0 1kp0 1cL0 1cN0 1fz0 1a10 1fz0 1fB0 11z0 14p0 1nX0 11B0 1nX0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 14n0 1ld0 14n0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 1a10 1in0 1a10 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 17c0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 11A0 6i00 Rc0 1wo0 U00 1tA0 Rc0 1wo0 U00 1wo0 U00 1zc0 U00 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0|21e5", "America/Hermosillo|LMT MST CST PST MDT|7n.Q 70 60 80 60|0121212131414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 otX0 gmN0 P2N0 13Vd0 1lb0 14p0 1lb0 14p0 1lb0|64e4", "America/Indiana/Knox|CST CDT CWT CPT EST|60 50 50 50 50|0101023010101010101010101010101010101040101010101010101010101010101010101010101010101010141010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 3NB0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 11z0 1o10 11z0 1o10 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 3Cn0 8wp0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 z8o0 1o00 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Marengo|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|0101023010101010101010104545454545414545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 dyN0 11z0 6fd0 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 jrz0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1VA0 LA0 1BX0 1e6p0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Petersburg|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010104010101010101010101010141014545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 njX0 WN0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 3Fb0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 19co0 1o00 Rd0 1zb0 Oo0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Tell_City|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010101010454541010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 g0p0 11z0 1o10 11z0 1qL0 WN0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 caL0 1cL0 1cN0 1cL0 1qhd0 1o00 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Vevay|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|010102304545454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 kPB0 Awn0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1lnd0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Vincennes|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010101010454541014545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 g0p0 11z0 1o10 11z0 1qL0 WN0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 caL0 1cL0 1cN0 1cL0 1qhd0 1o00 Rd0 1zb0 Oo0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Winamac|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010101010101010454541054545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 jrz0 1cL0 1cN0 1cL0 1qhd0 1o00 Rd0 1za0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Inuvik|-00 PST PDDT MST MDT|0 80 60 70 60|0121343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-FnA0 tWU0 1fA0 wPe0 2pz0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|35e2", "America/Iqaluit|-00 EWT EPT EST EDDT EDT CST CDT|0 40 40 50 30 40 60 50|01234353535353535353535353535353535353535353567353535353535353535353535353535353535353535353535353535353535353535353535353|-16K00 7nX0 iv0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11C0 1nX0 11A0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|67e2", "America/Jamaica|KMT EST EDT|57.b 50 40|0121212121212121212121|-2l1uQ.N 2uM1Q.N 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0|94e4", "America/Juneau|PST PWT PPT PDT YDT YST AKST AKDT|80 70 70 70 80 90 90 80|01203030303030303030303030403030356767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17T20 8x10 iy0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cM0 1cM0 1cL0 1cN0 1fz0 1a10 1fz0 co0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|33e3", "America/Kentucky/Louisville|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|0101010102301010101010101010101010101454545454545414545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 3Fd0 Nb0 LPd0 11z0 RB0 8x30 iw0 Bb0 10N0 2bB0 8in0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 xz0 gso0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1VA0 LA0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Kentucky/Monticello|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|0101023010101010101010101010101010101010101010101010101010101010101010101454545454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 SWp0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11A0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/La_Paz|CMT BOST -04|4w.A 3w.A 40|012|-1x37r.o 13b0|19e5", "America/Lima|LMT -05 -04|58.A 50 40|0121212121212121|-2tyGP.o 1bDzP.o zX0 1aN0 1cL0 1cN0 1cL0 1PrB0 zX0 1O10 zX0 6Gp0 zX0 98p0 zX0|11e6", "America/Los_Angeles|PST PDT PWT PPT|80 70 70 70|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261q0 1nX0 11B0 1nX0 SgN0 8x10 iy0 5Wp1 1VaX 3dA0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1fA0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|15e6", "America/Maceio|LMT -03 -02|2m.Q 30 20|012121212121212121212121212121212121212121|-2glxB.8 HdLB.8 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 dMN0 Lz0 8Q10 WL0 1tB0 5z0 2mN0 On0|93e4", "America/Managua|MMT CST EST CDT|5J.c 60 50 50|0121313121213131|-1quie.M 1yAMe.M 4mn0 9Up0 Dz0 1K10 Dz0 s3F0 1KH0 DB0 9In0 k8p0 19X0 1o30 11y0|22e5", "America/Manaus|LMT -04 -03|40.4 40 30|01212121212121212121212121212121|-2glvX.U HdKX.U 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 dPB0 On0|19e5", "America/Martinique|FFMT AST ADT|44.k 40 30|0121|-2mPTT.E 2LPbT.E 19X0|39e4", "America/Matamoros|LMT CST CDT|6E 60 50|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1UQG0 2FjC0 1nX0 i6p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 U10 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|45e4", "America/Mazatlan|LMT MST CST PST MDT|75.E 70 60 80 60|0121212131414141414141414141414141414141414141414141414141414141414141414141414141414141414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 otX0 gmN0 P2N0 13Vd0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|44e4", "America/Menominee|CST CDT CWT CPT EST|60 50 50 50 50|01010230101041010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 LCN0 1fz0 6410 9Jb0 1cM0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|85e2", "America/Merida|LMT CST EST CDT|5W.s 60 50 50|0121313131313131313131313131313131313131313131313131313131313131313131313131313131313131|-1UQG0 2q2o0 2hz0 wu30 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|11e5", "America/Metlakatla|PST PWT PPT PDT AKST AKDT|80 70 70 70 90 80|0120303030303030303030303030303030454545454545454545454545454545454545454545454|-17T20 8x10 iy0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1hU10 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|14e2", "America/Mexico_City|LMT MST CST CDT CWT|6A.A 70 60 50 50|012121232324232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 gEn0 TX0 3xd0 Jb0 6zB0 SL0 e5d0 17b0 1Pff0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|20e6", "America/Miquelon|LMT AST -03 -02|3I.E 40 30 20|012323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-2mKkf.k 2LTAf.k gQ10 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|61e2", "America/Moncton|EST AST ADT AWT APT|50 40 30 30 30|012121212121212121212134121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2IsH0 CwN0 1in0 zAo0 An0 1Nd0 An0 1Nd0 An0 1Nd0 An0 1Nd0 An0 1Nd0 An0 1K10 Lz0 1zB0 NX0 1u10 Wn0 S20 8x50 iu0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 3Cp0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14n1 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 ReX 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|64e3", "America/Monterrey|LMT CST CDT|6F.g 60 50|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1UQG0 2FjC0 1nX0 i6p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|41e5", "America/Montevideo|MMT -0330 -03 -02 -0230|3I.I 3u 30 20 2u|012121212121212121212121213232323232324242423243232323232323232323232323232323232323232|-20UIf.g 8jzJ.g 1cLu 1dcu 1cLu 1dcu 1cLu ircu 11zu 1o0u 11zu 1o0u 11zu 1qMu WLu 1qMu WLu 1qMu WLu 1qMu 11zu 1o0u 11zu NAu 11bu 2iMu zWu Dq10 19X0 pd0 jz0 cm10 19X0 1fB0 1on0 11d0 1oL0 1nB0 1fzu 1aou 1fzu 1aou 1fzu 3nAu Jb0 3MN0 1SLu 4jzu 2PB0 Lb0 3Dd0 1pb0 ixd0 An0 1MN0 An0 1wp0 On0 1wp0 Rb0 1zd0 On0 1wp0 Rb0 s8p0 1fB0 1ip0 11z0 1ld0 14n0 1o10 11z0 1o10 11z0 1o10 14n0 1ld0 14n0 1ld0 14n0 1o10 11z0 1o10 11z0 1o10 11z0|17e5", "America/Toronto|EST EDT EWT EPT|50 40 40 40|01010101010101010101010101010101010101010101012301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TR0 1in0 11Wu 1nzu 1fD0 WJ0 1wr0 Nb0 1Ap0 On0 1zd0 On0 1wp0 TX0 1tB0 TX0 1tB0 TX0 1tB0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 4kM0 8x40 iv0 1o10 11z0 1nX0 11z0 1o10 11z0 1o10 1qL0 11D0 1nX0 11B0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|65e5", "America/Nassau|LMT EST EDT|59.u 50 40|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2kNuO.u 26XdO.u 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|24e4", "America/New_York|EST EDT EWT EPT|50 40 40 40|01010101010101010101010101010101010101010101010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261t0 1nX0 11B0 1nX0 11B0 1qL0 1a10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 RB0 8x40 iv0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|21e6", "America/Nipigon|EST EDT EWT EPT|50 40 40 40|010123010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TR0 1in0 Rnb0 3je0 8x40 iv0 19yN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|16e2", "America/Nome|NST NWT NPT BST BDT YST AKST AKDT|b0 a0 a0 b0 a0 90 90 80|012034343434343434343434343434343456767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17SX0 8wW0 iB0 Qlb0 52O0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cl0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|38e2", "America/Noronha|LMT -02 -01|29.E 20 10|0121212121212121212121212121212121212121|-2glxO.k HdKO.k 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 nsp0 WL0 1tB0 2L0 2pB0 On0|30e2", "America/North_Dakota/Beulah|MST MDT MWT MPT CST CDT|70 60 60 60 60 50|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101014545454545454545454545454545454545454545454545454545454|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Oo0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/North_Dakota/Center|MST MDT MWT MPT CST CDT|70 60 60 60 60 50|010102301010101010101010101010101010101010101010101010101014545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14o0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/North_Dakota/New_Salem|MST MDT MWT MPT CST CDT|70 60 60 60 60 50|010102301010101010101010101010101010101010101010101010101010101010101010101010101454545454545454545454545454545454545454545454545454545454545454545454|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14o0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Ojinaga|LMT MST CST CDT MDT|6V.E 70 60 50 60|0121212323241414141414141414141414141414141414141414141414141414141414141414141414141414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 2zQN0 1lb0 14p0 1lb0 14q0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 U10 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e3", "America/Pangnirtung|-00 AST AWT APT ADDT ADT EDT EST CST CDT|0 40 30 30 20 30 40 50 60 50|012314151515151515151515151515151515167676767689767676767676767676767676767676767676767676767676767676767676767676767676767|-1XiM0 PnG0 8x50 iu0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1o00 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11C0 1nX0 11A0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|14e2", "America/Paramaribo|LMT PMT PMT -0330 -03|3E.E 3E.Q 3E.A 3u 30|01234|-2nDUj.k Wqo0.c qanX.I 1yVXN.o|24e4", "America/Phoenix|MST MDT MWT|70 60 60|01010202010|-261r0 1nX0 11B0 1nX0 SgN0 4Al1 Ap0 1db0 SWqX 1cL0|42e5", "America/Port-au-Prince|PPMT EST EDT|4N 50 40|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-28RHb 2FnMb 19X0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14q0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 i6n0 1nX0 11B0 1nX0 d430 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 3iN0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e5", "America/Rio_Branco|LMT -05 -04|4v.c 50 40|01212121212121212121212121212121|-2glvs.M HdLs.M 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 NBd0 d5X0|31e4", "America/Porto_Velho|LMT -04 -03|4f.A 40 30|012121212121212121212121212121|-2glvI.o HdKI.o 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0|37e4", "America/Puerto_Rico|AST AWT APT|40 30 30|0120|-17lU0 7XT0 iu0|24e5", "America/Punta_Arenas|SMT -05 -04 -03|4G.K 50 40 30|0102021212121212121232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-2q2jh.e fJAh.e 5knG.K 1Vzh.e jRAG.K 1pbh.e 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 nHX0 op0 blz0 ko0 Qeo0 WL0 1zd0 On0 1ip0 11z0 1o10 11z0 1qN0 WL0 1ld0 14n0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0", "America/Rainy_River|CST CDT CWT CPT|60 50 50 50|010123010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TQ0 1in0 Rnb0 3je0 8x30 iw0 19yN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|842", "America/Rankin_Inlet|-00 CST CDDT CDT EST|0 60 40 50 50|012131313131313131313131313131313131313131313431313131313131313131313131313131313131313131313131313131313131313131313131|-vDc0 keu0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|26e2", "America/Recife|LMT -03 -02|2j.A 30 20|0121212121212121212121212121212121212121|-2glxE.o HdLE.o 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 nsp0 WL0 1tB0 2L0 2pB0 On0|33e5", "America/Regina|LMT MST MDT MWT MPT CST|6W.A 70 60 60 60 60|012121212121212121212121341212121212121212121212121215|-2AD51.o uHe1.o 1in0 s2L0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 66N0 1cL0 1cN0 19X0 1fB0 1cL0 1fB0 1cL0 1cN0 1cL0 M30 8x20 ix0 1ip0 1cL0 1ip0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 3NB0 1cL0 1cN0|19e4", "America/Resolute|-00 CST CDDT CDT EST|0 60 40 50 50|012131313131313131313131313131313131313131313431313131313431313131313131313131313131313131313131313131313131313131313131|-SnA0 GWS0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|229", "America/Santarem|LMT -04 -03|3C.M 40 30|0121212121212121212121212121212|-2glwl.c HdLl.c 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 NBd0|21e4", "America/Santiago|SMT -05 -04 -03|4G.K 50 40 30|010202121212121212321232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-2q2jh.e fJAh.e 5knG.K 1Vzh.e jRAG.K 1pbh.e 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 nHX0 op0 9Bz0 jb0 1oN0 ko0 Qeo0 WL0 1zd0 On0 1ip0 11z0 1o10 11z0 1qN0 WL0 1ld0 14n0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0|62e5", "America/Santo_Domingo|SDMT EST EDT -0430 AST|4E 50 40 4u 40|01213131313131414|-1ttjk 1lJMk Mn0 6sp0 Lbu 1Cou yLu 1RAu wLu 1QMu xzu 1Q0u xXu 1PAu 13jB0 e00|29e5", "America/Sao_Paulo|LMT -03 -02|36.s 30 20|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-2glwR.w HdKR.w 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 pTd0 PX0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 1C10 Lz0 1Ip0 HX0 1zd0 On0 1HB0 IL0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1zd0 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1C10 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1C10 Lz0 1C10 Lz0 1C10 Lz0 1C10 On0 1zd0 Rb0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0|20e6", "America/Scoresbysund|LMT -02 -01 +00|1r.Q 20 10 0|0121323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-2a5Ww.8 2z5ew.8 1a00 1cK0 1cL0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|452", "America/Sitka|PST PWT PPT PDT YST AKST AKDT|80 70 70 70 90 90 80|01203030303030303030303030303030345656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565|-17T20 8x10 iy0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 co0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|90e2", "America/St_Johns|NST NDT NST NDT NWT NPT NDDT|3u.Q 2u.Q 3u 2u 2u 2u 1u|01010101010101010101010101010101010102323232323232324523232323232323232323232323232323232323232323232323232323232323232323232323232323232326232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-28oit.8 14L0 1nB0 1in0 1gm0 Dz0 1JB0 1cL0 1cN0 1cL0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 1cL0 1cN0 1cL0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 1cL0 1fB0 19X0 1fB0 19X0 10O0 eKX.8 19X0 1iq0 WL0 1qN0 WL0 1qN0 WL0 1tB0 TX0 1tB0 WL0 1qN0 WL0 1qN0 7UHu itu 1tB0 WL0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1tB0 WL0 1ld0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14n1 1lb0 14p0 1nW0 11C0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zcX Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|11e4", "America/Swift_Current|LMT MST MDT MWT MPT CST|7b.k 70 60 60 60 60|012134121212121212121215|-2AD4M.E uHdM.E 1in0 UGp0 8x20 ix0 1o10 17b0 1ip0 11z0 1o10 11z0 1o10 11z0 isN0 1cL0 3Cp0 1cL0 1cN0 11z0 1qN0 WL0 pMp0|16e3", "America/Tegucigalpa|LMT CST CDT|5M.Q 60 50|01212121|-1WGGb.8 2ETcb.8 WL0 1qN0 WL0 GRd0 AL0|11e5", "America/Thule|LMT AST ADT|4z.8 40 30|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2a5To.Q 31NBo.Q 1cL0 1cN0 1cL0 1fB0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|656", "America/Thunder_Bay|CST EST EWT EPT EDT|60 50 40 40 40|0123141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141|-2q5S0 1iaN0 8x40 iv0 XNB0 1cL0 1cN0 1fz0 1cN0 1cL0 3Cp0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|11e4", "America/Vancouver|PST PDT PWT PPT|80 70 70 70|0102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TO0 1in0 UGp0 8x10 iy0 1o10 17b0 1ip0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e5", "America/Whitehorse|YST YDT YWT YPT YDDT PST PDT|90 80 80 80 70 80 70|0101023040565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565|-25TN0 1in0 1o10 13V0 Ser0 8x00 iz0 LCL0 1fA0 3NA0 vrd0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e3", "America/Winnipeg|CST CDT CWT CPT|60 50 50 50|010101023010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aIi0 WL0 3ND0 1in0 Jap0 Rb0 aCN0 8x30 iw0 1tB0 11z0 1ip0 11z0 1o10 11z0 1o10 11z0 1rd0 10L0 1op0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 1cL0 1cN0 11z0 6i10 WL0 6i10 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|66e4", "America/Yakutat|YST YWT YPT YDT AKST AKDT|90 80 80 80 90 80|01203030303030303030303030303030304545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-17T10 8x00 iz0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cn0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|642", "America/Yellowknife|-00 MST MWT MPT MDDT MDT|0 70 60 60 50 60|012314151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151|-1pdA0 hix0 8x20 ix0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|19e3", "Antarctica/Casey|-00 +08 +11|0 -80 -b0|0121212|-2q00 1DjS0 T90 40P0 KL0 blz0|10", "Antarctica/Davis|-00 +07 +05|0 -70 -50|01012121|-vyo0 iXt0 alj0 1D7v0 VB0 3Wn0 KN0|70", "Antarctica/DumontDUrville|-00 +10|0 -a0|0101|-U0o0 cfq0 bFm0|80", "Antarctica/Macquarie|AEST AEDT -00 +11|-a0 -b0 0 -b0|0102010101010101010101010101010101010101010101010101010101010101010101010101010101010101013|-29E80 19X0 4SL0 1ayy0 Lvs0 1cM0 1o00 Rc0 1wo0 Rc0 1wo0 U00 1wo0 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1qM0 WM0 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1wo0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 11A0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 11A0 1o00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1cM0 1cM0 1cM0|1", "Antarctica/Mawson|-00 +06 +05|0 -60 -50|012|-CEo0 2fyk0|60", "Pacific/Auckland|NZMT NZST NZST NZDT|-bu -cu -c0 -d0|01020202020202020202020202023232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-1GCVu Lz0 1tB0 11zu 1o0u 11zu 1o0u 11zu 1o0u 14nu 1lcu 14nu 1lcu 1lbu 11Au 1nXu 11Au 1nXu 11Au 1nXu 11Au 1nXu 11Au 1qLu WMu 1qLu 11Au 1n1bu IM0 1C00 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1qM0 14o0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1io0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00|14e5", "Antarctica/Palmer|-00 -03 -04 -02|0 30 40 20|0121212121213121212121212121212121212121212121212121212121212121212121212121212121|-cao0 nD0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 jsN0 14N0 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0|40", "Antarctica/Rothera|-00 -03|0 30|01|gOo0|130", "Antarctica/Syowa|-00 +03|0 -30|01|-vs00|20", "Antarctica/Troll|-00 +00 +02|0 0 -20|01212121212121212121212121212121212121212121212121212121212121212121|1puo0 hd0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|40", "Antarctica/Vostok|-00 +06|0 -60|01|-tjA0|25", "Europe/Oslo|CET CEST|-10 -20|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2awM0 Qm0 W6o0 5pf0 WM0 1fA0 1cM0 1cM0 1cM0 1cM0 wJc0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1qM0 WM0 zpc0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|62e4", "Asia/Riyadh|LMT +03|-36.Q -30|01|-TvD6.Q|57e5", "Asia/Almaty|LMT +05 +06 +07|-57.M -50 -60 -70|012323232323232323232321232323232323232323232323232|-1Pc57.M eUo7.M 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0|15e5", "Asia/Amman|LMT EET EEST|-2n.I -20 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1yW2n.I 1HiMn.I KL0 1oN0 11b0 1oN0 11b0 1pd0 1dz0 1cp0 11b0 1op0 11b0 fO10 1db0 1e10 1cL0 1cN0 1cL0 1cN0 1fz0 1pd0 10n0 1ld0 14n0 1hB0 15b0 1ip0 19X0 1cN0 1cL0 1cN0 17b0 1ld0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1So0 y00 1fc0 1dc0 1co0 1dc0 1cM0 1cM0 1cM0 1o00 11A0 1lc0 17c0 1cM0 1cM0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 4bX0 Dd0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0|25e5", "Asia/Anadyr|LMT +12 +13 +14 +11|-bN.U -c0 -d0 -e0 -b0|01232121212121212121214121212121212121212121212121212121212141|-1PcbN.U eUnN.U 23CL0 1db0 2q10 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|13e3", "Asia/Aqtau|LMT +04 +05 +06|-3l.4 -40 -50 -60|012323232323232323232123232312121212121212121212|-1Pc3l.4 eUnl.4 24PX0 2pX0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0|15e4", "Asia/Aqtobe|LMT +04 +05 +06|-3M.E -40 -50 -60|0123232323232323232321232323232323232323232323232|-1Pc3M.E eUnM.E 23CL0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0|27e4", "Asia/Ashgabat|LMT +04 +05 +06|-3R.w -40 -50 -60|0123232323232323232323212|-1Pc3R.w eUnR.w 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0|41e4", "Asia/Atyrau|LMT +03 +05 +06 +04|-3r.I -30 -50 -60 -40|01232323232323232323242323232323232324242424242|-1Pc3r.I eUor.I 24PW0 2pX0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 2sp0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0", "Asia/Baghdad|BMT +03 +04|-2V.A -30 -40|012121212121212121212121212121212121212121212121212121|-26BeV.A 2ACnV.A 11b0 1cp0 1dz0 1dd0 1db0 1cN0 1cp0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1de0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0|66e5", "Asia/Qatar|LMT +04 +03|-3q.8 -40 -30|012|-21Jfq.8 27BXq.8|96e4", "Asia/Baku|LMT +03 +04 +05|-3j.o -30 -40 -50|01232323232323232323232123232323232323232323232323232323232323232|-1Pc3j.o 1jUoj.o WCL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 1cM0 9Je0 1o00 11z0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00|27e5", "Asia/Bangkok|BMT +07|-6G.4 -70|01|-218SG.4|15e6", "Asia/Barnaul|LMT +06 +07 +08|-5z -60 -70 -80|0123232323232323232323212323232321212121212121212121212121212121212|-21S5z pCnz 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 p90 LE0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0", "Asia/Beirut|EET EEST|-20 -30|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-21aq0 1on0 1410 1db0 19B0 1in0 1ip0 WL0 1lQp0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 11b0 q6N0 En0 1oN0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 11b0 1op0 11b0 dA10 17b0 1iN0 17b0 1iN0 17b0 1iN0 17b0 1vB0 SL0 1mp0 13z0 1iN0 17b0 1iN0 17b0 1jd0 12n0 1a10 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0|22e5", "Asia/Bishkek|LMT +05 +06 +07|-4W.o -50 -60 -70|012323232323232323232321212121212121212121212121212|-1Pc4W.o eUnW.o 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2e00 1tX0 17b0 1ip0 17b0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1cPu 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0|87e4", "Asia/Brunei|LMT +0730 +08|-7D.E -7u -80|012|-1KITD.E gDc9.E|42e4", "Asia/Kolkata|HMT +0630 IST|-5R.k -6u -5u|01212|-18LFR.k 1unn.k HB0 7zX0|15e6", "Asia/Chita|LMT +08 +09 +10|-7x.Q -80 -90 -a0|012323232323232323232321232323232323232323232323232323232323232312|-21Q7x.Q pAnx.Q 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3re0|33e4", "Asia/Choibalsan|LMT +07 +08 +10 +09|-7C -70 -80 -a0 -90|0123434343434343434343434343434343434343434343424242|-2APHC 2UkoC cKn0 1da0 1dd0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 6hD0 11z0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 3Db0 h1f0 1cJ0 1cP0 1cJ0|38e3", "Asia/Shanghai|CST CDT|-80 -90|01010101010101010|-1c1I0 LX0 16p0 1jz0 1Myp0 Rb0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0|23e6", "Asia/Colombo|MMT +0530 +06 +0630|-5j.w -5u -60 -6u|01231321|-2zOtj.w 1rFbN.w 1zzu 7Apu 23dz0 11zu n3cu|22e5", "Asia/Dhaka|HMT +0630 +0530 +06 +07|-5R.k -6u -5u -60 -70|0121343|-18LFR.k 1unn.k HB0 m6n0 2kxbu 1i00|16e6", "Asia/Damascus|LMT EET EEST|-2p.c -20 -30|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-21Jep.c Hep.c 17b0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1xRB0 11X0 1oN0 10L0 1pB0 11b0 1oN0 10L0 1mp0 13X0 1oN0 11b0 1pd0 11b0 1oN0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 Nb0 1AN0 Nb0 bcp0 19X0 1gp0 19X0 3ld0 1xX0 Vd0 1Bz0 Sp0 1vX0 10p0 1dz0 1cN0 1cL0 1db0 1db0 1g10 1an0 1ap0 1db0 1fd0 1db0 1cN0 1db0 1dd0 1db0 1cp0 1dz0 1c10 1dX0 1cN0 1db0 1dd0 1db0 1cN0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1db0 1cN0 1db0 1cN0 19z0 1fB0 1qL0 11B0 1on0 Wp0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0|26e5", "Asia/Dili|LMT +08 +09|-8m.k -80 -90|01212|-2le8m.k 1dnXm.k 1nfA0 Xld0|19e4", "Asia/Dubai|LMT +04|-3F.c -40|01|-21JfF.c|39e5", "Asia/Dushanbe|LMT +05 +06 +07|-4z.c -50 -60 -70|012323232323232323232321|-1Pc4z.c eUnz.c 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2hB0|76e4", "Asia/Famagusta|LMT EET EEST +03|-2f.M -20 -30 -30|01212121212121212121212121212121212121212121212121212121212121212121212121212121212123|-1Vc2f.M 2a3cf.M 1cL0 1qp0 Xz0 19B0 19X0 1fB0 1db0 1cp0 1cL0 1fB0 19X0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1o30 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 15U0", "Asia/Gaza|EET EEST IST IDT|-20 -30 -20 -30|010101010101010101010101010101012323232323232323232323232320101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-1c2q0 5Rb0 10r0 1px0 10N0 1pz0 16p0 1jB0 16p0 1jx0 pBd0 Vz0 1oN0 11b0 1oO0 10N0 1pz0 10N0 1pb0 10N0 1pb0 10N0 1pb0 10N0 1pz0 10N0 1pb0 10N0 1pb0 11d0 1oL0 dW0 hfB0 Db0 1fB0 Rb0 npB0 11z0 1C10 IL0 1s10 10n0 1o10 WL0 1zd0 On0 1ld0 11z0 1o10 14n0 1o10 14n0 1nd0 12n0 1nd0 Xz0 1q10 12n0 M10 C00 17c0 1io0 17c0 1io0 17c0 1o00 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 17c0 1io0 18N0 1bz0 19z0 1gp0 1610 1iL0 11z0 1o10 14o0 1lA1 SKX 1xd1 MKX 1AN0 1a00 1fA0 1cL0 1cN0 1nX0 1210 1nz0 1220 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0|18e5", "Asia/Hebron|EET EEST IST IDT|-20 -30 -20 -30|01010101010101010101010101010101232323232323232323232323232010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-1c2q0 5Rb0 10r0 1px0 10N0 1pz0 16p0 1jB0 16p0 1jx0 pBd0 Vz0 1oN0 11b0 1oO0 10N0 1pz0 10N0 1pb0 10N0 1pb0 10N0 1pb0 10N0 1pz0 10N0 1pb0 10N0 1pb0 11d0 1oL0 dW0 hfB0 Db0 1fB0 Rb0 npB0 11z0 1C10 IL0 1s10 10n0 1o10 WL0 1zd0 On0 1ld0 11z0 1o10 14n0 1o10 14n0 1nd0 12n0 1nd0 Xz0 1q10 12n0 M10 C00 17c0 1io0 17c0 1io0 17c0 1o00 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 17c0 1io0 18N0 1bz0 19z0 1gp0 1610 1iL0 12L0 1mN0 14o0 1lc0 Tb0 1xd1 MKX bB0 cn0 1cN0 1a00 1fA0 1cL0 1cN0 1nX0 1210 1nz0 1220 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0|25e4", "Asia/Ho_Chi_Minh|LMT PLMT +07 +08 +09|-76.E -76.u -70 -80 -90|0123423232|-2yC76.E bK00.a 1h7b6.u 5lz0 18o0 3Oq0 k5b0 aW00 BAM0|90e5", "Asia/Hong_Kong|LMT HKT HKST JST|-7A.G -80 -90 -90|0121312121212121212121212121212121212121212121212121212121212121212121|-2CFHA.G 1sEP6.G 1cL0 ylu 93X0 1qQu 1tX0 Rd0 1In0 NB0 1cL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1kL0 14N0 1nX0 U10 1tz0 U10 1wn0 Rd0 1wn0 U10 1tz0 U10 1tz0 U10 1tz0 U10 1wn0 Rd0 1wn0 Rd0 1wn0 U10 1tz0 U10 1tz0 17d0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 s10 1Vz0 1cN0 1cL0 1cN0 1cL0 6fd0 14n0|73e5", "Asia/Hovd|LMT +06 +07 +08|-66.A -60 -70 -80|012323232323232323232323232323232323232323232323232|-2APG6.A 2Uko6.A cKn0 1db0 1dd0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 6hD0 11z0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 kEp0 1cJ0 1cP0 1cJ0|81e3", "Asia/Irkutsk|IMT +07 +08 +09|-6V.5 -70 -80 -90|01232323232323232323232123232323232323232323232323232323232323232|-21zGV.5 pjXV.5 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|60e4", "Europe/Istanbul|IMT EET EEST +04 +03|-1U.U -20 -30 -40 -30|012121212121212121212121212121212121212121212121212121234343434342121212121212121212121212121212121212121212121212121212121212124|-2ogNU.U dzzU.U 11b0 8tB0 1on0 1410 1db0 19B0 1in0 3Rd0 Un0 1oN0 11b0 zSp0 CL0 mN0 1Vz0 1gN0 1pz0 5Rd0 1fz0 1yp0 ML0 1kp0 17b0 1ip0 17b0 1fB0 19X0 1jB0 18L0 1ip0 17z0 qdd0 xX0 3S10 Tz0 dA10 11z0 1o10 11z0 1qN0 11z0 1ze0 11B0 WM0 1qO0 WI0 1nX0 1rB0 10L0 11B0 1in0 17d0 1in0 2pX0 19E0 1fU0 16Q0 1iI0 16Q0 1iI0 1Vd0 pb0 3Kp0 14o0 1de0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1a00 1fA0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WO0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 Xc0 1qo0 WM0 1qM0 11A0 1o00 1200 1nA0 11A0 1tA0 U00 15w0|13e6", "Asia/Jakarta|BMT +0720 +0730 +09 +08 WIB|-77.c -7k -7u -90 -80 -70|01232425|-1Q0Tk luM0 mPzO 8vWu 6kpu 4PXu xhcu|31e6", "Asia/Jayapura|LMT +09 +0930 WIT|-9m.M -90 -9u -90|0123|-1uu9m.M sMMm.M L4nu|26e4", "Asia/Jerusalem|JMT IST IDT IDDT|-2k.E -20 -30 -40|01212121212132121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-26Bek.E SyMk.E 5Rb0 10r0 1px0 10N0 1pz0 16p0 1jB0 16p0 1jx0 3LB0 Em0 or0 1cn0 1dB0 16n0 10O0 1ja0 1tC0 14o0 1cM0 1a00 11A0 1Na0 An0 1MP0 AJ0 1Kp0 LC0 1oo0 Wl0 EQN0 Db0 1fB0 Rb0 npB0 11z0 1C10 IL0 1s10 10n0 1o10 WL0 1zd0 On0 1ld0 11z0 1o10 14n0 1o10 14n0 1nd0 12n0 1nd0 Xz0 1q10 12n0 1hB0 1dX0 1ep0 1aL0 1eN0 17X0 1nf0 11z0 1tB0 19W0 1e10 17b0 1ep0 1gL0 18N0 1fz0 1eN0 17b0 1gq0 1gn0 19d0 1dz0 1c10 17X0 1hB0 1gn0 19d0 1dz0 1c10 17X0 1kp0 1dz0 1c10 1aL0 1eN0 1oL0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0|81e4", "Asia/Kabul|+04 +0430|-40 -4u|01|-10Qs0|46e5", "Asia/Kamchatka|LMT +11 +12 +13|-ay.A -b0 -c0 -d0|012323232323232323232321232323232323232323232323232323232323212|-1SLKy.A ivXy.A 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|18e4", "Asia/Karachi|LMT +0530 +0630 +05 PKT PKST|-4s.c -5u -6u -50 -50 -60|012134545454|-2xoss.c 1qOKW.c 7zX0 eup0 LqMu 1fy00 1cL0 dK10 11b0 1610 1jX0|24e6", "Asia/Urumqi|LMT +06|-5O.k -60|01|-1GgtO.k|32e5", "Asia/Kathmandu|LMT +0530 +0545|-5F.g -5u -5J|012|-21JhF.g 2EGMb.g|12e5", "Asia/Khandyga|LMT +08 +09 +10 +11|-92.d -80 -90 -a0 -b0|0123232323232323232323212323232323232323232323232343434343434343432|-21Q92.d pAp2.d 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 qK0 yN0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 17V0 7zD0|66e2", "Asia/Krasnoyarsk|LMT +06 +07 +08|-6b.q -60 -70 -80|01232323232323232323232123232323232323232323232323232323232323232|-21Hib.q prAb.q 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|10e5", "Asia/Kuala_Lumpur|SMT +07 +0720 +0730 +09 +08|-6T.p -70 -7k -7u -90 -80|0123435|-2Bg6T.p 17anT.p l5XE 17bO 8Fyu 1so1u|71e5", "Asia/Kuching|LMT +0730 +08 +0820 +09|-7l.k -7u -80 -8k -90|0123232323232323242|-1KITl.k gDbP.k 6ynu AnE 1O0k AnE 1NAk AnE 1NAk AnE 1NAk AnE 1O0k AnE 1NAk AnE pAk 8Fz0|13e4", "Asia/Macau|LMT CST CDT|-7y.k -80 -90|012121212121212121212121212121212121212121|-2le7y.k 1XO34.k 1wn0 Rd0 1wn0 R9u 1wqu U10 1tz0 TVu 1tz0 17gu 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cJu 1cL0 1cN0 1fz0 1cN0 1cOu 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cJu 1cL0 1cN0 1fz0 1cN0 1cL0|57e4", "Asia/Magadan|LMT +10 +11 +12|-a3.c -a0 -b0 -c0|012323232323232323232321232323232323232323232323232323232323232312|-1Pca3.c eUo3.c 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3Cq0|95e3", "Asia/Makassar|LMT MMT +08 +09 WITA|-7V.A -7V.A -80 -90 -80|01234|-21JjV.A vfc0 myLV.A 8ML0|15e5", "Asia/Manila|+08 +09|-80 -90|010101010|-1kJI0 AL0 cK10 65X0 mXB0 vX0 VK10 1db0|24e6", "Asia/Nicosia|LMT EET EEST|-2d.s -20 -30|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1Vc2d.s 2a3cd.s 1cL0 1qp0 Xz0 19B0 19X0 1fB0 1db0 1cp0 1cL0 1fB0 19X0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1o30 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|32e4", "Asia/Novokuznetsk|LMT +06 +07 +08|-5M.M -60 -70 -80|012323232323232323232321232323232323232323232323232323232323212|-1PctM.M eULM.M 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|55e4", "Asia/Novosibirsk|LMT +06 +07 +08|-5v.E -60 -70 -80|0123232323232323232323212323212121212121212121212121212121212121212|-21Qnv.E pAFv.E 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 ml0 Os0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 4eN0|15e5", "Asia/Omsk|LMT +05 +06 +07|-4R.u -50 -60 -70|01232323232323232323232123232323232323232323232323232323232323232|-224sR.u pMLR.u 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|12e5", "Asia/Oral|LMT +03 +05 +06 +04|-3p.o -30 -50 -60 -40|01232323232323232424242424242424242424242424242|-1Pc3p.o eUop.o 23CK0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 1cM0 1cM0 IM0 1EM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0|27e4", "Asia/Pontianak|LMT PMT +0730 +09 +08 WITA WIB|-7h.k -7h.k -7u -90 -80 -80 -70|012324256|-2ua7h.k XE00 munL.k 8Rau 6kpu 4PXu xhcu Wqnu|23e4", "Asia/Pyongyang|LMT KST JST KST|-8n -8u -90 -90|01231|-2um8n 97XR 1lTzu 2Onc0|29e5", "Asia/Qyzylorda|LMT +04 +05 +06|-4l.Q -40 -50 -60|0123232323232323232323232323232323232323232323|-1Pc4l.Q eUol.Q 23CL0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 3ao0 1EM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0|73e4", "Asia/Rangoon|RMT +0630 +09|-6o.E -6u -90|0121|-21Jio.E SmnS.E 7j9u|48e5", "Asia/Sakhalin|LMT +09 +11 +12 +10|-9u.M -90 -b0 -c0 -a0|01232323232323232323232423232323232424242424242424242424242424242|-2AGVu.M 1BoMu.M 1qFa0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 2pB0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0|58e4", "Asia/Samarkand|LMT +04 +05 +06|-4r.R -40 -50 -60|01232323232323232323232|-1Pc4r.R eUor.R 23CL0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0|36e4", "Asia/Seoul|LMT KST JST KST KDT KDT|-8r.Q -8u -90 -90 -9u -a0|0123141414141414135353|-2um8r.Q 97XV.Q 1m1zu kKo0 2I0u OL0 1FB0 Rb0 1qN0 TX0 1tB0 TX0 1tB0 TX0 1tB0 TX0 2ap0 12FBu 11A0 1o00 11A0|23e6", "Asia/Srednekolymsk|LMT +10 +11 +12|-ae.Q -a0 -b0 -c0|01232323232323232323232123232323232323232323232323232323232323232|-1Pcae.Q eUoe.Q 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|35e2", "Asia/Taipei|CST JST CDT|-80 -90 -90|01020202020202020202020202020202020202020|-1iw80 joM0 1yo0 Tz0 1ip0 1jX0 1cN0 11b0 1oN0 11b0 1oN0 11b0 1oN0 11b0 10N0 1BX0 10p0 1pz0 10p0 1pz0 10p0 1db0 1dd0 1db0 1cN0 1db0 1cN0 1db0 1cN0 1db0 1BB0 ML0 1Bd0 ML0 uq10 1db0 1cN0 1db0 97B0 AL0|74e5", "Asia/Tashkent|LMT +05 +06 +07|-4B.b -50 -60 -70|012323232323232323232321|-1Pc4B.b eUnB.b 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0|23e5", "Asia/Tbilisi|TBMT +03 +04 +05|-2X.b -30 -40 -50|0123232323232323232323212121232323232323232323212|-1Pc2X.b 1jUnX.b WCL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 1cK0 1cL0 1cN0 1cL0 1cN0 2pz0 1cL0 1fB0 3Nz0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 An0 Os0 WM0|11e5", "Asia/Tehran|LMT TMT +0330 +04 +05 +0430|-3p.I -3p.I -3u -40 -50 -4u|01234325252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252|-2btDp.I 1d3c0 1huLT.I TXu 1pz0 sN0 vAu 1cL0 1dB0 1en0 pNB0 UL0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 64p0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0|14e6", "Asia/Thimphu|LMT +0530 +06|-5W.A -5u -60|012|-Su5W.A 1BGMs.A|79e3", "Asia/Tokyo|JST JDT|-90 -a0|010101010|-QJH0 QL0 1lB0 13X0 1zB0 NX0 1zB0 NX0|38e6", "Asia/Tomsk|LMT +06 +07 +08|-5D.P -60 -70 -80|0123232323232323232323212323232323232323232323212121212121212121212|-21NhD.P pxzD.P 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 co0 1bB0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3Qp0|10e5", "Asia/Ulaanbaatar|LMT +07 +08 +09|-77.w -70 -80 -90|012323232323232323232323232323232323232323232323232|-2APH7.w 2Uko7.w cKn0 1db0 1dd0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 6hD0 11z0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 kEp0 1cJ0 1cP0 1cJ0|12e5", "Asia/Ust-Nera|LMT +08 +09 +12 +11 +10|-9w.S -80 -90 -c0 -b0 -a0|012343434343434343434345434343434343434343434343434343434343434345|-21Q9w.S pApw.S 23CL0 1d90 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 17V0 7zD0|65e2", "Asia/Vladivostok|LMT +09 +10 +11|-8L.v -90 -a0 -b0|01232323232323232323232123232323232323232323232323232323232323232|-1SJIL.v itXL.v 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|60e4", "Asia/Yakutsk|LMT +08 +09 +10|-8C.W -80 -90 -a0|01232323232323232323232123232323232323232323232323232323232323232|-21Q8C.W pAoC.W 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|28e4", "Asia/Yekaterinburg|LMT PMT +04 +05 +06|-42.x -3J.5 -40 -50 -60|012343434343434343434343234343434343434343434343434343434343434343|-2ag42.x 7mQh.s qBvJ.5 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|14e5", "Asia/Yerevan|LMT +03 +04 +05|-2W -30 -40 -50|0123232323232323232323212121212323232323232323232323232323232|-1Pc2W 1jUnW WCL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 4RX0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0|13e5", "Atlantic/Azores|HMT -02 -01 +00 WET|1S.w 20 10 0 0|01212121212121212121212121212121212121212121232123212321232121212121212121212121212121212121212121232323232323232323232323232323234323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-2ldW5.s aPX5.s Sp0 LX0 1vc0 Tc0 1uM0 SM0 1vc0 Tc0 1vc0 SM0 1vc0 6600 1co0 3E00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 3I00 17c0 1cM0 1cM0 3Fc0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 1tA0 1cM0 1dc0 1400 gL0 IM0 s10 U00 dX0 Rc0 pd0 Rc0 gL0 Oo0 pd0 Rc0 gL0 Oo0 pd0 14o0 1cM0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 3Co0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 qIl0 1cM0 1fA0 1cM0 1cM0 1cN0 1cL0 1cN0 1cM0 1cM0 1cM0 1cM0 1cN0 1cL0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cL0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|25e4", "Atlantic/Bermuda|LMT AST ADT|4j.i 40 30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1BnRE.G 1LTbE.G 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|65e3", "Atlantic/Canary|LMT -01 WET WEST|11.A 10 0 -10|01232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1UtaW.o XPAW.o 1lAK0 1a10 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|54e4", "Atlantic/Cape_Verde|LMT -02 -01|1y.4 20 10|01212|-2xomp.U 1qOMp.U 7zX0 1djf0|50e4", "Atlantic/Faroe|LMT WET WEST|r.4 0 -10|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2uSnw.U 2Wgow.U 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|49e3", "Atlantic/Madeira|FMT -01 +00 +01 WET WEST|17.A 10 0 -10 0 -10|01212121212121212121212121212121212121212121232123212321232121212121212121212121212121212121212121454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-2ldWQ.o aPWQ.o Sp0 LX0 1vc0 Tc0 1uM0 SM0 1vc0 Tc0 1vc0 SM0 1vc0 6600 1co0 3E00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 3I00 17c0 1cM0 1cM0 3Fc0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 1tA0 1cM0 1dc0 1400 gL0 IM0 s10 U00 dX0 Rc0 pd0 Rc0 gL0 Oo0 pd0 Rc0 gL0 Oo0 pd0 14o0 1cM0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 3Co0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 qIl0 1cM0 1fA0 1cM0 1cM0 1cN0 1cL0 1cN0 1cM0 1cM0 1cM0 1cM0 1cN0 1cL0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|27e4", "Atlantic/Reykjavik|LMT -01 +00 GMT|1s 10 0 0|012121212121212121212121212121212121212121212121212121212121212121213|-2uWmw mfaw 1Bd0 ML0 1LB0 Cn0 1LB0 3fX0 C10 HrX0 1cO0 LB0 1EL0 LA0 1C00 Oo0 1wo0 Rc0 1wo0 Rc0 1wo0 Rc0 1zc0 Oo0 1zc0 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1lc0 14o0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 14o0|12e4", "Atlantic/South_Georgia|-02|20|0||30", "Atlantic/Stanley|SMT -04 -03 -02|3P.o 40 30 20|012121212121212323212121212121212121212121212121212121212121212121212|-2kJw8.A 12bA8.A 19X0 1fB0 19X0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1fB0 Cn0 1Cc10 WL0 1qL0 U10 1tz0 2mN0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1tz0 U10 1tz0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1tz0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qN0 U10 1wn0 Rd0 1wn0 U10 1tz0 U10 1tz0 U10 1tz0 U10 1tz0 U10 1wn0 U10 1tz0 U10 1tz0 U10|21e2", "Australia/Sydney|AEST AEDT|-a0 -b0|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 14o0 1o00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1tA0 WM0 1tA0 U00 1tA0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 11A0 1o00 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|40e5", "Australia/Adelaide|ACST ACDT|-9u -au|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lt xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 Oo0 1zc0 WM0 1qM0 Rc0 1zc0 U00 1tA0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|11e5", "Australia/Brisbane|AEST AEDT|-a0 -b0|01010101010101010|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 H1A0 Oo0 1zc0 Oo0 1zc0 Oo0|20e5", "Australia/Broken_Hill|ACST ACDT|-9u -au|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lt xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 14o0 1o00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1tA0 WM0 1tA0 U00 1tA0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|18e3", "Australia/Currie|AEST AEDT|-a0 -b0|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-29E80 19X0 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1qM0 WM0 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1wo0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 11A0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 11A0 1o00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|746", "Australia/Darwin|ACST ACDT|-9u -au|010101010|-293lt xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0|12e4", "Australia/Eucla|+0845 +0945|-8J -9J|0101010101010101010|-293kI xcX 10jd0 yL0 1cN0 1cL0 1gSp0 Oo0 l5A0 Oo0 iJA0 G00 zU00 IM0 1qM0 11A0 1o00 11A0|368", "Australia/Hobart|AEST AEDT|-a0 -b0|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-29E80 19X0 10jd0 yL0 1cN0 1cL0 1fB0 19X0 VfB0 1cM0 1o00 Rc0 1wo0 Rc0 1wo0 U00 1wo0 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1qM0 WM0 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1wo0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 11A0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 11A0 1o00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|21e4", "Australia/Lord_Howe|AEST +1030 +1130 +11|-a0 -au -bu -b0|0121212121313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313|raC0 1zdu Rb0 1zd0 On0 1zd0 On0 1zd0 On0 1zd0 TXu 1qMu WLu 1tAu WLu 1tAu TXu 1tAu Onu 1zcu Onu 1zcu Onu 1zcu Rbu 1zcu Onu 1zcu Onu 1zcu 11zu 1o0u 11zu 1o0u 11zu 1o0u 11zu 1qMu WLu 11Au 1nXu 1qMu 11zu 1o0u 11zu 1o0u 11zu 1qMu WLu 1qMu 11zu 1o0u WLu 1qMu 14nu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1fzu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu|347", "Australia/Lindeman|AEST AEDT|-a0 -b0|010101010101010101010|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 H1A0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0|10", "Australia/Melbourne|AEST AEDT|-a0 -b0|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1qM0 11A0 1tA0 U00 1tA0 U00 1tA0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 11A0 1o00 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|39e5", "Australia/Perth|AWST AWDT|-80 -90|0101010101010101010|-293jX xcX 10jd0 yL0 1cN0 1cL0 1gSp0 Oo0 l5A0 Oo0 iJA0 G00 zU00 IM0 1qM0 11A0 1o00 11A0|18e5", "CET|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 16M0 1gMM0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "CST6CDT|CST CDT CWT CPT|60 50 50 50|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "Pacific/Easter|EMT -07 -06 -05|7h.s 70 60 50|012121212121212121212121212123232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-1uSgG.w 1s4IG.w WL0 1zd0 On0 1ip0 11z0 1o10 11z0 1qN0 WL0 1ld0 14n0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 2pA0 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0|30e2", "EET|EET EEST|-20 -30|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|hDB0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "EST|EST|50|0|", "EST5EDT|EST EDT EWT EPT|50 40 40 40|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261t0 1nX0 11B0 1nX0 SgN0 8x40 iv0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "Europe/Dublin|DMT IST GMT BST IST|p.l -y.D 0 -10 -10|01232323232324242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242|-2ax9y.D Rc0 1fzy.D 14M0 1fc0 1g00 1co0 1dc0 1co0 1oo0 1400 1dc0 19A0 1io0 1io0 WM0 1o00 14o0 1o00 17c0 1io0 17c0 1fA0 1a00 1lc0 17c0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1cM0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1io0 1qM0 Dc0 g5X0 14p0 1wn0 17d0 1io0 11A0 1o00 17c0 1fA0 1a00 1fA0 1cM0 1fA0 1a00 17c0 1fA0 1a00 1io0 17c0 1lc0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1a00 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1tA0 IM0 90o0 U00 1tA0 U00 1tA0 U00 1tA0 U00 1tA0 WM0 1qM0 WM0 1qM0 WM0 1tA0 U00 1tA0 U00 1tA0 11z0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 14o0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Etc/GMT+0|GMT|0|0|", "Etc/GMT+1|-01|10|0|", "Etc/GMT+10|-10|a0|0|", "Etc/GMT+11|-11|b0|0|", "Etc/GMT+12|-12|c0|0|", "Etc/GMT+3|-03|30|0|", "Etc/GMT+4|-04|40|0|", "Etc/GMT+5|-05|50|0|", "Etc/GMT+6|-06|60|0|", "Etc/GMT+7|-07|70|0|", "Etc/GMT+8|-08|80|0|", "Etc/GMT+9|-09|90|0|", "Etc/GMT-1|+01|-10|0|", "Pacific/Port_Moresby|+10|-a0|0||25e4", "Pacific/Pohnpei|+11|-b0|0||34e3", "Pacific/Tarawa|+12|-c0|0||29e3", "Etc/GMT-13|+13|-d0|0|", "Etc/GMT-14|+14|-e0|0|", "Etc/GMT-2|+02|-20|0|", "Etc/GMT-3|+03|-30|0|", "Etc/GMT-4|+04|-40|0|", "Etc/GMT-5|+05|-50|0|", "Etc/GMT-6|+06|-60|0|", "Indian/Christmas|+07|-70|0||21e2", "Etc/GMT-8|+08|-80|0|", "Pacific/Palau|+09|-90|0||21e3", "Etc/UCT|UCT|0|0|", "Etc/UTC|UTC|0|0|", "Europe/Amsterdam|AMT NST +0120 +0020 CEST CET|-j.w -1j.w -1k -k -20 -10|010101010101010101010101010101010101010101012323234545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545|-2aFcj.w 11b0 1iP0 11A0 1io0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1co0 1io0 1yo0 Pc0 1a00 1fA0 1Bc0 Mo0 1tc0 Uo0 1tA0 U00 1uo0 W00 1s00 VA0 1so0 Vc0 1sM0 UM0 1wo0 Rc0 1u00 Wo0 1rA0 W00 1s00 VA0 1sM0 UM0 1w00 fV0 BCX.w 1tA0 U00 1u00 Wo0 1sm0 601k WM0 1fA0 1cM0 1cM0 1cM0 16M0 1gMM0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|16e5", "Europe/Andorra|WET CET CEST|0 -10 -20|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-UBA0 1xIN0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|79e3", "Europe/Astrakhan|LMT +03 +04 +05|-3c.c -30 -40 -50|012323232323232323212121212121212121212121212121212121212121212|-1Pcrc.c eUMc.c 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0", "Europe/Athens|AMT EET EEST CEST CET|-1y.Q -20 -30 -20 -10|012123434121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2a61x.Q CNbx.Q mn0 kU10 9b0 3Es0 Xa0 1fb0 1dd0 k3X0 Nz0 SCp0 1vc0 SO0 1cM0 1a00 1ao0 1fc0 1a10 1fG0 1cg0 1dX0 1bX0 1cQ0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|35e5", "Europe/London|GMT BST BDST|0 -10 -20|0101010101010101010101010101010101010101010101010121212121210101210101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2axa0 Rc0 1fA0 14M0 1fc0 1g00 1co0 1dc0 1co0 1oo0 1400 1dc0 19A0 1io0 1io0 WM0 1o00 14o0 1o00 17c0 1io0 17c0 1fA0 1a00 1lc0 17c0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1cM0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1io0 1qM0 Dc0 2Rz0 Dc0 1zc0 Oo0 1zc0 Rc0 1wo0 17c0 1iM0 FA0 xB0 1fA0 1a00 14o0 bb0 LA0 xB0 Rc0 1wo0 11A0 1o00 17c0 1fA0 1a00 1fA0 1cM0 1fA0 1a00 17c0 1fA0 1a00 1io0 17c0 1lc0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1a00 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1tA0 IM0 90o0 U00 1tA0 U00 1tA0 U00 1tA0 U00 1tA0 WM0 1qM0 WM0 1qM0 WM0 1tA0 U00 1tA0 U00 1tA0 11z0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 14o0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|10e6", "Europe/Belgrade|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-19RC0 3IP0 WM0 1fA0 1cM0 1cM0 1rc0 Qo0 1vmo0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Berlin|CET CEST CEMT|-10 -20 -30|01010101010101210101210101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 kL0 Nc0 m10 WM0 1ao0 1cp0 dX0 jz0 Dd0 1io0 17c0 1fA0 1a00 1ehA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|41e5", "Europe/Prague|CET CEST|-10 -20|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 16M0 1lc0 1tA0 17A0 11c0 1io0 17c0 1io0 17c0 1fc0 1ao0 1bNc0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|13e5", "Europe/Brussels|WET CET CEST WEST|0 -10 -20 -10|0121212103030303030303030303030303030303030303030303212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2ehc0 3zX0 11c0 1iO0 11A0 1o00 11A0 my0 Ic0 1qM0 Rc0 1EM0 UM0 1u00 10o0 1io0 1io0 17c0 1a00 1fA0 1cM0 1cM0 1io0 17c0 1fA0 1a00 1io0 1a30 1io0 17c0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 y00 5Wn0 WM0 1fA0 1cM0 16M0 1iM0 16M0 1C00 Uo0 1eeo0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|21e5", "Europe/Bucharest|BMT EET EEST|-1I.o -20 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1xApI.o 20LI.o RA0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1Axc0 On0 1fA0 1a10 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cK0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cL0 1cN0 1cL0 1fB0 1nX0 11E0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|19e5", "Europe/Budapest|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1ip0 17b0 1op0 1tb0 Q2m0 3Ne0 WM0 1fA0 1cM0 1cM0 1oJ0 1dc0 1030 1fA0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1iM0 1fA0 8Ha0 Rb0 1wN0 Rb0 1BB0 Lz0 1C20 LB0 SNX0 1a10 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|17e5", "Europe/Zurich|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-19Lc0 11A0 1o00 11A0 1xG10 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|38e4", "Europe/Chisinau|CMT BMT EET EEST CEST CET MSK MSD|-1T -1I.o -20 -30 -20 -10 -30 -40|012323232323232323234545467676767676767676767323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-26jdT wGMa.A 20LI.o RA0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 27A0 2en0 39g0 WM0 1fA0 1cM0 V90 1t7z0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 gL0 WO0 1cM0 1cM0 1cK0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1nX0 11D0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|67e4", "Europe/Copenhagen|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2azC0 Tz0 VuO0 60q0 WM0 1fA0 1cM0 1cM0 1cM0 S00 1HA0 Nc0 1C00 Dc0 1Nc0 Ao0 1h5A0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Gibraltar|GMT BST BDST CET CEST|0 -10 -20 -10 -20|010101010101010101010101010101010101010101010101012121212121010121010101010101010101034343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-2axa0 Rc0 1fA0 14M0 1fc0 1g00 1co0 1dc0 1co0 1oo0 1400 1dc0 19A0 1io0 1io0 WM0 1o00 14o0 1o00 17c0 1io0 17c0 1fA0 1a00 1lc0 17c0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1cM0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1io0 1qM0 Dc0 2Rz0 Dc0 1zc0 Oo0 1zc0 Rc0 1wo0 17c0 1iM0 FA0 xB0 1fA0 1a00 14o0 bb0 LA0 xB0 Rc0 1wo0 11A0 1o00 17c0 1fA0 1a00 1fA0 1cM0 1fA0 1a00 17c0 1fA0 1a00 1io0 17c0 1lc0 17c0 1fA0 10Jz0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|30e3", "Europe/Helsinki|HMT EET EEST|-1D.N -20 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1WuND.N OULD.N 1dA0 1xGq0 1cM0 1cM0 1cM0 1cN0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Kaliningrad|CET CEST CET CEST MSK MSD EEST EET +03|-10 -20 -20 -30 -30 -40 -30 -20 -30|0101010101010232454545454545454546767676767676767676767676767676767676767676787|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 Am0 Lb0 1en0 op0 1pNz0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|44e4", "Europe/Kiev|KMT EET MSK CEST CET MSD EEST|-22.4 -20 -30 -20 -10 -40 -30|0123434252525252525252525256161616161616161616161616161616161616161616161616161616161616161616161616161616161616161616161|-1Pc22.4 eUo2.4 rnz0 2Hg0 WM0 1fA0 da0 1v4m0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 Db0 3220 1cK0 1cL0 1cN0 1cL0 1cN0 1cL0 1cQ0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|34e5", "Europe/Kirov|LMT +03 +04 +05|-3i.M -30 -40 -50|01232323232323232321212121212121212121212121212121212121212121|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|48e4", "Europe/Lisbon|LMT WET WEST WEMT CET CEST|A.J 0 -10 -20 -10 -20|012121212121212121212121212121212121212121212321232123212321212121212121212121212121212121212121214121212121212121212121212121212124545454212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2ldXn.f aPWn.f Sp0 LX0 1vc0 Tc0 1uM0 SM0 1vc0 Tc0 1vc0 SM0 1vc0 6600 1co0 3E00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 3I00 17c0 1cM0 1cM0 3Fc0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 1tA0 1cM0 1dc0 1400 gL0 IM0 s10 U00 dX0 Rc0 pd0 Rc0 gL0 Oo0 pd0 Rc0 gL0 Oo0 pd0 14o0 1cM0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 3Co0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 pvy0 1cM0 1cM0 1fA0 1cM0 1cM0 1cN0 1cL0 1cN0 1cM0 1cM0 1cM0 1cM0 1cN0 1cL0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|27e5", "Europe/Luxembourg|LMT CET CEST WET WEST WEST WET|-o.A -10 -20 0 -10 -20 -10|0121212134343434343434343434343434343434343434343434565651212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2DG0o.A t6mo.A TB0 1nX0 Up0 1o20 11A0 rW0 CM0 1qP0 R90 1EO0 UK0 1u20 10m0 1ip0 1in0 17e0 19W0 1fB0 1db0 1cp0 1in0 17d0 1fz0 1a10 1in0 1a10 1in0 17f0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 vA0 60L0 WM0 1fA0 1cM0 17c0 1io0 16M0 1C00 Uo0 1eeo0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|54e4", "Europe/Madrid|WET WEST WEMT CET CEST|0 -10 -20 -10 -20|010101010101010101210343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-25Td0 19B0 1cL0 1dd0 b1z0 18p0 3HX0 17d0 1fz0 1a10 1io0 1a00 1in0 17d0 iIn0 Hd0 1cL0 bb0 1200 2s20 14n0 5aL0 Mp0 1vz0 17d0 1in0 17d0 1in0 17d0 1in0 17d0 6hX0 11B0 XHX0 1a10 1fz0 1a10 19X0 1cN0 1fz0 1a10 1fC0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|62e5", "Europe/Malta|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2arB0 Lz0 1cN0 1db0 1410 1on0 Wp0 1qL0 17d0 1cL0 M3B0 5M20 WM0 1fA0 1co0 17c0 1iM0 16m0 1de0 1lc0 14m0 1lc0 WO0 1qM0 GTW0 On0 1C10 LA0 1C00 LA0 1EM0 LA0 1C00 LA0 1zc0 Oo0 1C00 Oo0 1co0 1cM0 1lA0 Xc0 1qq0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1iN0 19z0 1fB0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|42e4", "Europe/Minsk|MMT EET MSK CEST CET MSD EEST +03|-1O -20 -30 -20 -10 -40 -30 -30|01234343252525252525252525261616161616161616161616161616161616161617|-1Pc1O eUnO qNX0 3gQ0 WM0 1fA0 1cM0 Al0 1tsn0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 3Fc0 1cN0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0|19e5", "Europe/Monaco|PMT WET WEST WEMT CET CEST|-9.l 0 -10 -20 -10 -20|01212121212121212121212121212121212121212121212121232323232345454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-2nco9.l cNb9.l HA0 19A0 1iM0 11c0 1oo0 Wo0 1rc0 QM0 1EM0 UM0 1u00 10o0 1io0 1wo0 Rc0 1a00 1fA0 1cM0 1cM0 1io0 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Df0 2RV0 11z0 11B0 1ze0 WM0 1fA0 1cM0 1fa0 1aq0 16M0 1ekn0 1cL0 1fC0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|38e3", "Europe/Moscow|MMT MMT MST MDST MSD MSK +05 EET EEST MSK|-2u.h -2v.j -3v.j -4v.j -40 -30 -50 -20 -30 -40|012132345464575454545454545454545458754545454545454545454545454545454545454595|-2ag2u.h 2pyW.W 1bA0 11X0 GN0 1Hb0 c4v.j ik0 3DA0 dz0 15A0 c10 2q10 iM10 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cN0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|16e6", "Europe/Paris|PMT WET WEST CEST CET WEMT|-9.l 0 -10 -20 -10 -20|0121212121212121212121212121212121212121212121212123434352543434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434|-2nco8.l cNb8.l HA0 19A0 1iM0 11c0 1oo0 Wo0 1rc0 QM0 1EM0 UM0 1u00 10o0 1io0 1wo0 Rc0 1a00 1fA0 1cM0 1cM0 1io0 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Df0 Ik0 5M30 WM0 1fA0 1cM0 Vx0 hB0 1aq0 16M0 1ekn0 1cL0 1fC0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|11e6", "Europe/Riga|RMT LST EET MSK CEST CET MSD EEST|-1A.y -2A.y -20 -30 -20 -10 -40 -30|010102345454536363636363636363727272727272727272727272727272727272727272727272727272727272727272727272727272727272727272727272|-25TzA.y 11A0 1iM0 ko0 gWm0 yDXA.y 2bX0 3fE0 WM0 1fA0 1cM0 1cM0 4m0 1sLy0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cN0 1o00 11A0 1o00 11A0 1qM0 3oo0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|64e4", "Europe/Rome|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2arB0 Lz0 1cN0 1db0 1410 1on0 Wp0 1qL0 17d0 1cL0 M3B0 5M20 WM0 1fA0 1cM0 16M0 1iM0 16m0 1de0 1lc0 14m0 1lc0 WO0 1qM0 GTW0 On0 1C10 LA0 1C00 LA0 1EM0 LA0 1C00 LA0 1zc0 Oo0 1C00 Oo0 1C00 LA0 1zc0 Oo0 1C00 LA0 1C00 LA0 1zc0 Oo0 1C00 Oo0 1zc0 Oo0 1fC0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|39e5", "Europe/Samara|LMT +03 +04 +05|-3k.k -30 -40 -50|0123232323232323232121232323232323232323232323232323232323212|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 2y10 14m0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|12e5", "Europe/Saratov|LMT +03 +04 +05|-34.i -30 -40 -50|012323232323232321212121212121212121212121212121212121212121212|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1cM0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 5810", "Europe/Simferopol|SMT EET MSK CEST CET MSD EEST MSK|-2g -20 -30 -20 -10 -40 -30 -40|012343432525252525252525252161616525252616161616161616161616161616161616172|-1Pc2g eUog rEn0 2qs0 WM0 1fA0 1cM0 3V0 1u0L0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1Q00 4eL0 1cL0 1cN0 1cL0 1cN0 dX0 WL0 1cN0 1cL0 1fB0 1o30 11B0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11z0 1nW0|33e4", "Europe/Sofia|EET CET CEST EEST|-20 -10 -20 -30|01212103030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030|-168L0 WM0 1fA0 1cM0 1cM0 1cN0 1mKH0 1dd0 1fb0 1ap0 1fb0 1a20 1fy0 1a30 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cK0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1nX0 11E0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Stockholm|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2azC0 TB0 2yDe0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|15e5", "Europe/Tallinn|TMT CET CEST EET MSK MSD EEST|-1D -10 -20 -20 -30 -40 -30|012103421212454545454545454546363636363636363636363636363636363636363636363636363636363636363636363636363636363636363636363|-26oND teD 11A0 1Ta0 4rXl KSLD 2FX0 2Jg0 WM0 1fA0 1cM0 18J0 1sTX0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o10 11A0 1qM0 5QM0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|41e4", "Europe/Tirane|LMT CET CEST|-1j.k -10 -20|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2glBj.k 14pcj.k 5LC0 WM0 4M0 1fCK0 10n0 1op0 11z0 1pd0 11z0 1qN0 WL0 1qp0 Xb0 1qp0 Xb0 1qp0 11z0 1lB0 11z0 1qN0 11z0 1iN0 16n0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|42e4", "Europe/Ulyanovsk|LMT +03 +04 +05 +02|-3d.A -30 -40 -50 -20|01232323232323232321214121212121212121212121212121212121212121212|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0", "Europe/Uzhgorod|CET CEST MSK MSD EET EEST|-10 -20 -30 -40 -20 -30|010101023232323232323232320454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-1cqL0 6i00 WM0 1fA0 1cM0 1ml0 1Cp0 1r3W0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1Q00 1Nf0 2pw0 1cL0 1cN0 1cL0 1cN0 1cL0 1cQ0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|11e4", "Europe/Vienna|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 3KM0 14o0 LA00 6i00 WM0 1fA0 1cM0 1cM0 1cM0 400 2qM0 1a00 1cM0 1cM0 1io0 17c0 1gHa0 19X0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|18e5", "Europe/Vilnius|WMT KMT CET EET MSK CEST MSD EEST|-1o -1z.A -10 -20 -30 -20 -40 -30|012324525254646464646464646473737373737373737352537373737373737373737373737373737373737373737373737373737373737373737373|-293do 6ILM.o 1Ooz.A zz0 Mfd0 29W0 3is0 WM0 1fA0 1cM0 LV0 1tgL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11B0 1o00 11A0 1qM0 8io0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|54e4", "Europe/Volgograd|LMT +03 +04 +05|-2V.E -30 -40 -50|01232323232323232121212121212121212121212121212121212121212121|-21IqV.E psLV.E 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1cM0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|10e5", "Europe/Warsaw|WMT CET CEST EET EEST|-1o -10 -20 -20 -30|012121234312121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2ctdo 1LXo 11d0 1iO0 11A0 1o00 11A0 1on0 11A0 6zy0 HWP0 5IM0 WM0 1fA0 1cM0 1dz0 1mL0 1en0 15B0 1aq0 1nA0 11A0 1io0 17c0 1fA0 1a00 iDX0 LA0 1cM0 1cM0 1C00 Oo0 1cM0 1cM0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1C00 LA0 uso0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|17e5", "Europe/Zaporozhye|+0220 EET MSK CEST CET MSD EEST|-2k -20 -30 -20 -10 -40 -30|01234342525252525252525252526161616161616161616161616161616161616161616161616161616161616161616161616161616161616161616161|-1Pc2k eUok rdb0 2RE0 WM0 1fA0 8m0 1v9a0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cK0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cQ0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|77e4", "HST|HST|a0|0|", "Indian/Chagos|LMT +05 +06|-4N.E -50 -60|012|-2xosN.E 3AGLN.E|30e2", "Indian/Cocos|+0630|-6u|0||596", "Indian/Kerguelen|-00 +05|0 -50|01|-MG00|130", "Indian/Mahe|LMT +04|-3F.M -40|01|-2yO3F.M|79e3", "Indian/Maldives|MMT +05|-4S -50|01|-olgS|35e4", "Indian/Mauritius|LMT +04 +05|-3O -40 -50|012121|-2xorO 34unO 14L0 12kr0 11z0|15e4", "Indian/Reunion|LMT +04|-3F.Q -40|01|-2mDDF.Q|84e4", "Pacific/Kwajalein|+11 -12 +12|-b0 c0 -c0|012|-AX0 W9X0|14e3", "MET|MET MEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 16M0 1gMM0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "MST|MST|70|0|", "MST7MDT|MST MDT MWT MPT|70 60 60 60|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "Pacific/Chatham|+1215 +1245 +1345|-cf -cJ -dJ|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-WqAf 1adef IM0 1C00 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1qM0 14o0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1io0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00|600", "PST8PDT|PST PDT PWT PPT|80 70 70 70|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261q0 1nX0 11B0 1nX0 SgN0 8x10 iy0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "Pacific/Apia|LMT -1130 -11 -10 +14 +13|bq.U bu b0 a0 -e0 -d0|01232345454545454545454545454545454545454545454545454545454|-2nDMx.4 1yW03.4 2rRbu 1ff0 1a00 CI0 AQ0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00|37e3", "Pacific/Bougainville|+10 +09 +11|-a0 -90 -b0|0102|-16Wy0 7CN0 2MQp0|18e4", "Pacific/Efate|LMT +11 +12|-bd.g -b0 -c0|0121212121212121212121|-2l9nd.g 2Szcd.g 1cL0 1oN0 10L0 1fB0 19X0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 Lz0 1Nd0 An0|66e3", "Pacific/Enderbury|-12 -11 +13|c0 b0 -d0|012|nIc0 B8n0|1", "Pacific/Fakaofo|-11 +13|b0 -d0|01|1Gfn0|483", "Pacific/Fiji|LMT +12 +13|-bT.I -c0 -d0|0121212121212121212121212121212121212121212121212121212121212121|-2bUzT.I 3m8NT.I LA0 1EM0 IM0 nJc0 LA0 1o00 Rc0 1wo0 Ao0 1Nc0 Ao0 1Q00 xz0 1SN0 uM0 1SM0 uM0 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0|88e4", "Pacific/Galapagos|LMT -05 -06|5W.o 50 60|01212|-1yVS1.A 2dTz1.A gNd0 rz0|25e3", "Pacific/Gambier|LMT -09|8X.M 90|01|-2jof0.c|125", "Pacific/Guadalcanal|LMT +11|-aD.M -b0|01|-2joyD.M|11e4", "Pacific/Guam|GST ChST|-a0 -a0|01|1fpq0|17e4", "Pacific/Honolulu|HST HDT HST|au 9u a0|010102|-1thLu 8x0 lef0 8Pz0 46p0|37e4", "Pacific/Kiritimati|-1040 -10 +14|aE a0 -e0|012|nIaE B8nk|51e2", "Pacific/Kosrae|+11 +12|-b0 -c0|010|-AX0 1bdz0|66e2", "Pacific/Majuro|+11 +12|-b0 -c0|01|-AX0|28e3", "Pacific/Marquesas|LMT -0930|9i 9u|01|-2joeG|86e2", "Pacific/Pago_Pago|LMT SST|bm.M b0|01|-2nDMB.c|37e2", "Pacific/Nauru|LMT +1130 +09 +12|-b7.E -bu -90 -c0|01213|-1Xdn7.E PvzB.E 5RCu 1ouJu|10e3", "Pacific/Niue|-1120 -1130 -11|bk bu b0|012|-KfME 17y0a|12e2", "Pacific/Norfolk|+1112 +1130 +1230 +11|-bc -bu -cu -b0|01213|-Kgbc W01G On0 1COp0|25e4", "Pacific/Noumea|LMT +11 +12|-b5.M -b0 -c0|01212121|-2l9n5.M 2EqM5.M xX0 1PB0 yn0 HeP0 Ao0|98e3", "Pacific/Pitcairn|-0830 -08|8u 80|01|18Vku|56", "Pacific/Rarotonga|-1030 -0930 -10|au 9u a0|012121212121212121212121212|lyWu IL0 1zcu Onu 1zcu Onu 1zcu Rbu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Rbu 1zcu Onu 1zcu Onu 1zcu Onu|13e3", "Pacific/Tahiti|LMT -10|9W.g a0|01|-2joe1.I|18e4", "Pacific/Tongatapu|+1220 +13 +14|-ck -d0 -e0|0121212121212121212121212121212121212121212121212121|-1aB0k 2n5dk 15A0 1wo0 xz0 1Q10 xz0 zWN0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1SM0 uM0|75e3", "WET|WET WEST|0 -10|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|hDB0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00"], links: ["Africa/Abidjan|Africa/Bamako", "Africa/Abidjan|Africa/Banjul", "Africa/Abidjan|Africa/Conakry", "Africa/Abidjan|Africa/Dakar", "Africa/Abidjan|Africa/Freetown", "Africa/Abidjan|Africa/Lome", "Africa/Abidjan|Africa/Nouakchott", "Africa/Abidjan|Africa/Ouagadougou", "Africa/Abidjan|Africa/Sao_Tome", "Africa/Abidjan|Africa/Timbuktu", "Africa/Abidjan|Atlantic/St_Helena", "Africa/Cairo|Egypt", "Africa/Johannesburg|Africa/Maseru", "Africa/Johannesburg|Africa/Mbabane", "Africa/Khartoum|Africa/Juba", "Africa/Lagos|Africa/Bangui", "Africa/Lagos|Africa/Brazzaville", "Africa/Lagos|Africa/Douala", "Africa/Lagos|Africa/Kinshasa", "Africa/Lagos|Africa/Libreville", "Africa/Lagos|Africa/Luanda", "Africa/Lagos|Africa/Malabo", "Africa/Lagos|Africa/Niamey", "Africa/Lagos|Africa/Porto-Novo", "Africa/Maputo|Africa/Blantyre", "Africa/Maputo|Africa/Bujumbura", "Africa/Maputo|Africa/Gaborone", "Africa/Maputo|Africa/Harare", "Africa/Maputo|Africa/Kigali", "Africa/Maputo|Africa/Lubumbashi", "Africa/Maputo|Africa/Lusaka", "Africa/Nairobi|Africa/Addis_Ababa", "Africa/Nairobi|Africa/Asmara", "Africa/Nairobi|Africa/Asmera", "Africa/Nairobi|Africa/Dar_es_Salaam", "Africa/Nairobi|Africa/Djibouti", "Africa/Nairobi|Africa/Kampala", "Africa/Nairobi|Africa/Mogadishu", "Africa/Nairobi|Indian/Antananarivo", "Africa/Nairobi|Indian/Comoro", "Africa/Nairobi|Indian/Mayotte", "Africa/Tripoli|Libya", "America/Adak|America/Atka", "America/Adak|US/Aleutian", "America/Anchorage|US/Alaska", "America/Argentina/Buenos_Aires|America/Buenos_Aires", "America/Argentina/Catamarca|America/Argentina/ComodRivadavia", "America/Argentina/Catamarca|America/Catamarca", "America/Argentina/Cordoba|America/Cordoba", "America/Argentina/Cordoba|America/Rosario", "America/Argentina/Jujuy|America/Jujuy", "America/Argentina/Mendoza|America/Mendoza", "America/Atikokan|America/Coral_Harbour", "America/Chicago|US/Central", "America/Curacao|America/Aruba", "America/Curacao|America/Kralendijk", "America/Curacao|America/Lower_Princes", "America/Denver|America/Shiprock", "America/Denver|Navajo", "America/Denver|US/Mountain", "America/Detroit|US/Michigan", "America/Edmonton|Canada/Mountain", "America/Fort_Wayne|America/Indiana/Indianapolis", "America/Fort_Wayne|America/Indianapolis", "America/Fort_Wayne|US/East-Indiana", "America/Halifax|Canada/Atlantic", "America/Havana|Cuba", "America/Indiana/Knox|America/Knox_IN", "America/Indiana/Knox|US/Indiana-Starke", "America/Jamaica|Jamaica", "America/Kentucky/Louisville|America/Louisville", "America/Los_Angeles|US/Pacific", "America/Los_Angeles|US/Pacific-New", "America/Manaus|Brazil/West", "America/Mazatlan|Mexico/BajaSur", "America/Mexico_City|Mexico/General", "America/New_York|US/Eastern", "America/Noronha|Brazil/DeNoronha", "America/Panama|America/Cayman", "America/Phoenix|US/Arizona", "America/Port_of_Spain|America/Anguilla", "America/Port_of_Spain|America/Antigua", "America/Port_of_Spain|America/Dominica", "America/Port_of_Spain|America/Grenada", "America/Port_of_Spain|America/Guadeloupe", "America/Port_of_Spain|America/Marigot", "America/Port_of_Spain|America/Montserrat", "America/Port_of_Spain|America/St_Barthelemy", "America/Port_of_Spain|America/St_Kitts", "America/Port_of_Spain|America/St_Lucia", "America/Port_of_Spain|America/St_Thomas", "America/Port_of_Spain|America/St_Vincent", "America/Port_of_Spain|America/Tortola", "America/Port_of_Spain|America/Virgin", "America/Regina|Canada/East-Saskatchewan", "America/Regina|Canada/Saskatchewan", "America/Rio_Branco|America/Porto_Acre", "America/Rio_Branco|Brazil/Acre", "America/Santiago|Chile/Continental", "America/Sao_Paulo|Brazil/East", "America/St_Johns|Canada/Newfoundland", "America/Tijuana|America/Ensenada", "America/Tijuana|America/Santa_Isabel", "America/Tijuana|Mexico/BajaNorte", "America/Toronto|America/Montreal", "America/Toronto|Canada/Eastern", "America/Vancouver|Canada/Pacific", "America/Whitehorse|Canada/Yukon", "America/Winnipeg|Canada/Central", "Asia/Ashgabat|Asia/Ashkhabad", "Asia/Bangkok|Asia/Phnom_Penh", "Asia/Bangkok|Asia/Vientiane", "Asia/Dhaka|Asia/Dacca", "Asia/Dubai|Asia/Muscat", "Asia/Ho_Chi_Minh|Asia/Saigon", "Asia/Hong_Kong|Hongkong", "Asia/Jerusalem|Asia/Tel_Aviv", "Asia/Jerusalem|Israel", "Asia/Kathmandu|Asia/Katmandu", "Asia/Kolkata|Asia/Calcutta", "Asia/Kuala_Lumpur|Asia/Singapore", "Asia/Kuala_Lumpur|Singapore", "Asia/Macau|Asia/Macao", "Asia/Makassar|Asia/Ujung_Pandang", "Asia/Nicosia|Europe/Nicosia", "Asia/Qatar|Asia/Bahrain", "Asia/Rangoon|Asia/Yangon", "Asia/Riyadh|Asia/Aden", "Asia/Riyadh|Asia/Kuwait", "Asia/Seoul|ROK", "Asia/Shanghai|Asia/Chongqing", "Asia/Shanghai|Asia/Chungking", "Asia/Shanghai|Asia/Harbin", "Asia/Shanghai|PRC", "Asia/Taipei|ROC", "Asia/Tehran|Iran", "Asia/Thimphu|Asia/Thimbu", "Asia/Tokyo|Japan", "Asia/Ulaanbaatar|Asia/Ulan_Bator", "Asia/Urumqi|Asia/Kashgar", "Atlantic/Faroe|Atlantic/Faeroe", "Atlantic/Reykjavik|Iceland", "Atlantic/South_Georgia|Etc/GMT+2", "Australia/Adelaide|Australia/South", "Australia/Brisbane|Australia/Queensland", "Australia/Broken_Hill|Australia/Yancowinna", "Australia/Darwin|Australia/North", "Australia/Hobart|Australia/Tasmania", "Australia/Lord_Howe|Australia/LHI", "Australia/Melbourne|Australia/Victoria", "Australia/Perth|Australia/West", "Australia/Sydney|Australia/ACT", "Australia/Sydney|Australia/Canberra", "Australia/Sydney|Australia/NSW", "Etc/GMT+0|Etc/GMT", "Etc/GMT+0|Etc/GMT-0", "Etc/GMT+0|Etc/GMT0", "Etc/GMT+0|Etc/Greenwich", "Etc/GMT+0|GMT", "Etc/GMT+0|GMT+0", "Etc/GMT+0|GMT-0", "Etc/GMT+0|GMT0", "Etc/GMT+0|Greenwich", "Etc/UCT|UCT", "Etc/UTC|Etc/Universal", "Etc/UTC|Etc/Zulu", "Etc/UTC|UTC", "Etc/UTC|Universal", "Etc/UTC|Zulu", "Europe/Belgrade|Europe/Ljubljana", "Europe/Belgrade|Europe/Podgorica", "Europe/Belgrade|Europe/Sarajevo", "Europe/Belgrade|Europe/Skopje", "Europe/Belgrade|Europe/Zagreb", "Europe/Chisinau|Europe/Tiraspol", "Europe/Dublin|Eire", "Europe/Helsinki|Europe/Mariehamn", "Europe/Istanbul|Asia/Istanbul", "Europe/Istanbul|Turkey", "Europe/Lisbon|Portugal", "Europe/London|Europe/Belfast", "Europe/London|Europe/Guernsey", "Europe/London|Europe/Isle_of_Man", "Europe/London|Europe/Jersey", "Europe/London|GB", "Europe/London|GB-Eire", "Europe/Moscow|W-SU", "Europe/Oslo|Arctic/Longyearbyen", "Europe/Oslo|Atlantic/Jan_Mayen", "Europe/Prague|Europe/Bratislava", "Europe/Rome|Europe/San_Marino", "Europe/Rome|Europe/Vatican", "Europe/Warsaw|Poland", "Europe/Zurich|Europe/Busingen", "Europe/Zurich|Europe/Vaduz", "Indian/Christmas|Etc/GMT-7", "Pacific/Auckland|Antarctica/McMurdo", "Pacific/Auckland|Antarctica/South_Pole", "Pacific/Auckland|NZ", "Pacific/Chatham|NZ-CHAT", "Pacific/Easter|Chile/EasterIsland", "Pacific/Guam|Pacific/Saipan", "Pacific/Honolulu|Pacific/Johnston", "Pacific/Honolulu|US/Hawaii", "Pacific/Kwajalein|Kwajalein", "Pacific/Pago_Pago|Pacific/Midway", "Pacific/Pago_Pago|Pacific/Samoa", "Pacific/Pago_Pago|US/Samoa", "Pacific/Palau|Etc/GMT-9", "Pacific/Pohnpei|Etc/GMT-11", "Pacific/Pohnpei|Pacific/Ponape", "Pacific/Port_Moresby|Etc/GMT-10", "Pacific/Port_Moresby|Pacific/Chuuk", "Pacific/Port_Moresby|Pacific/Truk", "Pacific/Port_Moresby|Pacific/Yap", "Pacific/Tarawa|Etc/GMT-12", "Pacific/Tarawa|Pacific/Funafuti", "Pacific/Tarawa|Pacific/Wake", "Pacific/Tarawa|Pacific/Wallis"] }), c });
  }
  if (callback) callback();
  }

  /* Load dependency scripts */
  LimoniAppsLoadMoment(LimoniAppsLoadMomentFormat(LimoniAppsLoadMomentTimezone()));
</script>


<script>
  window.limoniapps_discountninja_liquid = {
  MoneyFormat: "<span class=money>Rs. {{amount}} </span>",
  Customer: null,
  Cart: {"token":"134cee04cc0a38e6b10ae6ba83c646c9","note":null,"attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"INR"},
  Product: null,
  ProductVariants: null
  };</script>
<script src="//cdn.shopify.com/s/files/1/0191/2234/t/38/assets/limoniapps-discountninja.js?13577491605170241586" async></script>
</head>

<body class="template-collection">
<!-- ROIHunterEasy BodySection start --><script src="//cdn.shopify.com/s/files/1/0191/2234/t/38/assets/roi_hunter_easy_body_section.js?13577491605170241586" type="text/javascript"></script><!-- ROIHunterEasy BodySection end -->

  

  <div class="bodywrap cf">

    <div id="shopify-section-header" class="shopify-section">

<style>
  
  .mainnav .featured-link,
  .mainnav .featured-link:hover,
  .nav-outside-expanded-mode .mainnav .tier2 .featured-link,
  .nav-outside-expanded-mode .mainnav .tier2 .featured-link:hover {
    color: #dd6666;
  }
  

  
  .special-link--1 {
    background: #f2aa33;
    color: #ffffff;
  }
  
  .special-link--2 {
    background: #9a978f;
    color: #ffffff;
  }
  
  .special-link--3 {
    background: #ffffff;
    color: #4c4a4a;
  }
  
</style>
<div data-section-type="header-section">

  <div class="page-header cf ">
    <div class="page-header__inner">
      <a class="nav-toggle" href="#"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
</svg></a>

      <div class="shoplogo with-margin">
        <a href="/" title="Furniture Online: Buy Wooden Furniture for Every Home | Saraf Furniture">
          
          <span class="logoimg"><img src="//cdn.shopify.com/s/files/1/0191/2234/files/checkout_logo_70ac5860-e7f5-4cd9-8eea-49874c35a8bf_480x.png?v=1546364377" alt="Furniture Online: Buy Wooden Furniture for Every Home | Saraf Furniture" /></span>
          
        </a>
      </div>

      

      
      <span class="account-links">
        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMjU2LDMyYzEyMy41LDAsMjI0LDEwMC41LDIyNCwyMjRTMzc5LjUsNDgwLDI1Niw0ODBTMzIsMzc5LjUsMzIsMjU2UzEzMi41LDMyLDI1NiwzMiBNMjU2LDBDMTE0LjYyNSwwLDAsMTE0LjYyNSwwLDI1NiAgIHMxMTQuNjI1LDI1NiwyNTYsMjU2czI1Ni0xMTQuNjI1LDI1Ni0yNTZTMzk3LjM3NSwwLDI1NiwwTDI1NiwweiBNMzk4LjcxOSwzNDEuNTk0bC0xLjQzOC00LjM3NSAgIGMtMy4zNzUtMTAuMDYyLTE0LjUtMjAuNTYyLTI0Ljc1LTIzLjM3NUwzMzQuNjg4LDMwMy41Yy0xMC4yNS0yLjc4MS0yNC44NzUsMC45NjktMzIuNDA1LDguNWwtMTMuNjg4LDEzLjY4OCAgIGMtNDkuNzUtMTMuNDY5LTg4Ljc4MS01Mi41LTEwMi4yMTktMTAyLjI1bDEzLjY4OC0xMy42ODhjNy41LTcuNSwxMS4yNS0yMi4xMjUsOC40NjktMzIuNDA2TDE5OC4yMTksMTM5LjUgICBjLTIuNzgxLTEwLjI1LTEzLjM0NC0yMS4zNzUtMjMuNDA2LTI0Ljc1bC00LjMxMy0xLjQzOGMtMTAuMDk0LTMuMzc1LTI0LjUsMC4wMzEtMzIsNy41NjNsLTIwLjUsMjAuNSAgIGMtMy42NTYsMy42MjUtNiwxNC4wMzEtNiwxNC4wNjNjLTAuNjg4LDY1LjA2MywyNC44MTMsMTI3LjcxOSw3MC44MTMsMTczLjc1YzQ1Ljg3NSw0NS44NzUsMTA4LjMxMyw3MS4zNDUsMTczLjE1Niw3MC43ODEgICBjMC4zNDQsMCwxMS4wNjMtMi4yODEsMTQuNzE5LTUuOTM4bDIwLjUtMjAuNUMzOTguNjg4LDM2Ni4wNjIsNDAyLjA2MiwzNTEuNjU2LDM5OC43MTksMzQxLjU5NHoiIGZpbGw9IiMwMDAwMDAiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" style="margin-right:7px; margin-top:7px" width="16px";/><b>080 6741 4797</b> . Mail : furniture@insaraf.com | &nbsp
        
        <a href="/account/login" id="customer_login_link">Login</a> /
        <a href="/account/register" id="customer_register_link">Register</a>
        
      </span>
      

      <span class="search-and-cart">
        <a class="search desktop-only" href="/search"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Search</title>
  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
  <path d="M0 0h24v24H0z" fill="none"/>
</svg></a>
<span class="mobile-only"><a href="tel:+918067414797"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMjU2LDMyYzEyMy41LDAsMjI0LDEwMC41LDIyNCwyMjRTMzc5LjUsNDgwLDI1Niw0ODBTMzIsMzc5LjUsMzIsMjU2UzEzMi41LDMyLDI1NiwzMiBNMjU2LDBDMTE0LjYyNSwwLDAsMTE0LjYyNSwwLDI1NiAgIHMxMTQuNjI1LDI1NiwyNTYsMjU2czI1Ni0xMTQuNjI1LDI1Ni0yNTZTMzk3LjM3NSwwLDI1NiwwTDI1NiwweiBNMzk4LjcxOSwzNDEuNTk0bC0xLjQzOC00LjM3NSAgIGMtMy4zNzUtMTAuMDYyLTE0LjUtMjAuNTYyLTI0Ljc1LTIzLjM3NUwzMzQuNjg4LDMwMy41Yy0xMC4yNS0yLjc4MS0yNC44NzUsMC45NjktMzIuNDA1LDguNWwtMTMuNjg4LDEzLjY4OCAgIGMtNDkuNzUtMTMuNDY5LTg4Ljc4MS01Mi41LTEwMi4yMTktMTAyLjI1bDEzLjY4OC0xMy42ODhjNy41LTcuNSwxMS4yNS0yMi4xMjUsOC40NjktMzIuNDA2TDE5OC4yMTksMTM5LjUgICBjLTIuNzgxLTEwLjI1LTEzLjM0NC0yMS4zNzUtMjMuNDA2LTI0Ljc1bC00LjMxMy0xLjQzOGMtMTAuMDk0LTMuMzc1LTI0LjUsMC4wMzEtMzIsNy41NjNsLTIwLjUsMjAuNSAgIGMtMy42NTYsMy42MjUtNiwxNC4wMzEtNiwxNC4wNjNjLTAuNjg4LDY1LjA2MywyNC44MTMsMTI3LjcxOSw3MC44MTMsMTczLjc1YzQ1Ljg3NSw0NS44NzUsMTA4LjMxMyw3MS4zNDUsMTczLjE1Niw3MC43ODEgICBjMC4zNDQsMCwxMS4wNjMtMi4yODEsMTQuNzE5LTUuOTM4bDIwLjUtMjAuNUMzOTguNjg4LDM2Ni4wNjIsNDAyLjA2MiwzNTEuNjU2LDM5OC43MTksMzQxLjU5NHoiIGZpbGw9IiMwMDAwMDAiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" style="margin-right:7px"/></a></span>
        
        <span class="cartsummary">
          <span class="cartsummary__inner">
            <a href="/cart">
              <span class="title">Cart</span>
              <span class="numitems">(0)</span>
            </a>

            <span class="desktop-only">
              
<select name="currencies" aria-label="Choose a currency">
  
  
  <option value="INR" selected="selected">INR</option>
  
  
  
  
  <option value="GBP">GBP</option>
  
  
  
  <option value="CAD">CAD</option>
  
  
  
  <option value="USD">USD</option>
  
  
  
  <option value="AUD">AUD</option>
  
  
  
  <option value="EUR">EUR</option>
  
  
  
  <option value="JPY">JPY</option>
  
  
</select>


            </span>
          </span>
        </span>
      </span>
    </div>

    <div class="quick-search">
      <div class="row">
        <div class="quick-search__input-row">
          <form class="quick-search__form" name="search" action="/search">
            <button type="submit" class="button plain quick-search__submit"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Search</title>
  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
  <path d="M0 0h24v24H0z" fill="none"/>
</svg></button>
            <input class="quick-search__input" type="text" name="q" placeholder="Start typing..." value="" autocomplete="off" />
            <input type="hidden" name="type" value="product" />
            <a class="quick-search__close" href="#"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Close</title>
  <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
  <path d="M0 0h24v24H0z" fill="none"/>
</svg></a>
          </form>
        </div>
        <div class="quick-search__results">
          <div class="quick-search__loader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
          <div class="quick-search__results-items"></div>
        </div>
      </div>
    </div>

    
  </div>

  <div id="navbar" class="nav-style-out " data-section-type="sidebar-section">
    <div id="navpanel">
      <div class="shoplogo with-margin">
        <a href="/" title="Furniture Online: Buy Wooden Furniture for Every Home | Saraf Furniture">
          
          <span class="logoimg"><img src="//cdn.shopify.com/s/files/1/0191/2234/files/checkout_logo_70ac5860-e7f5-4cd9-8eea-49874c35a8bf_480x.png?v=1546364377" alt="Furniture Online: Buy Wooden Furniture for Every Home | Saraf Furniture" /></span>
          
        </a>
      </div>

      <div class="mobile-only search-box">
        <form name="search" action="/search">
          <input type="hidden" name="type" value="product" />
          <input type="text" name="q" placeholder="Search" value="" />
          <button type="submit" class="plain"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Search</title>
  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
  <path d="M0 0h24v24H0z" fill="none"/>
</svg></button>
        </form>
      </div>

      
      <div class="mainnav ">
        <div class="tier1" role="navigation" aria-label="Navigation">
          <a class="back" href="#" aria-controls="current-submenu" aria-label="Return to previous menu" tabindex="-1"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Left</title>
  <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/><path d="M0-.5h24v24H0z" fill="none"/>
</svg></a>
          <ul>
            
            <li class=""><a class="tier1title featured-link" href="/pages/new-launchs" aria-haspopup="true">New Launches</a>

              
              <div class="tier2">
                <div><div class="tier-title featured-link">New Launches</div></div>
                <ul>
                  
                  <li class=""><a href="/collections/new-launch-beds"   >New Launch Beds</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/new-launch-sofas"   >New Launch Sofa Sets</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/new-launch-dining"   >New Launch Dining Sets</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/new-launch-coffee-tables"   >New Launch Coffee Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/new-launches-others"   >More New Launches</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/wing-chairs-more"   >New Launch Wing Chairs</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/new-launches"   >All New Launches</a>

                    
                  </li>
                  
                </ul>
              </div>
              
            </li>
            
            <li class=""><a class="tier1title" href="/pages/living-room" aria-haspopup="true">Living Room</a>

              
              <div class="tier2">
                <div><div class="tier-title">Living Room</div></div>
                <ul>
                  
                  <li class=""><a href="/collections/sofa"   >Sofa Sets</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/3-seater-sofa"   >3 Seater Sofas</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/solid-wood-2-seater-sofas"   >2 Seater Sofas</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/single-seater-sofa"   >Single Seater Sofas</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/l-shape-sofas"   >L Shape Sofas</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/easy-chairs"   >Easy Chairs</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/wing-chairs-more"   >Wing Chairs</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/coffee-table"   >Coffee Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/bars"   >Bars</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/boxes"   >Boxes</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/bookshelves"   >BookShelves</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/tv-units"   >Tv units</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/console-table"   >Console Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/lamp-tables"   >Side / Lamp Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/bar-chair-stools"   >Bar Stools</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/chest-of-drawers"   >Chest of Drawers</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/desks-home-office"   >Study Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/shoe-racks"   >Shoe Racks</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/wall-clocks"   >Wall Cloks</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/benches"   >Benches</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/cd-racks"   >CD Racks</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/mandir"   >Mandir / Prayer Unit</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/accessories"   >Accessories</a>

                    
                  </li>
                  
                </ul>
              </div>
              
            </li>
            
            <li class=""><a class="tier1title" href="/pages/bedroom" aria-haspopup="true">Bedroom</a>

              
              <div class="tier2">
                <div><div class="tier-title">Bedroom</div></div>
                <ul>
                  
                  <li class=""><a href="/collections/beds"   >All Beds</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/poster-beds"   >Poster Beds</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/platform-beds"   >Platform Beds</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/bedside-tables"   >Bedside Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/dressers"   >Dresser</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/chest-of-drawers"   >Chest of Drawers</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/boxes"   >Boxes</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/wardrobe"   >Wardrobes</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/tv-units"   >Tv units</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/mirrors"   >Mirrors</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/wall-clocks"   >Wall Clocks</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/desks-home-office"   >Writing Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/accessories"   >Accessories</a>

                    
                  </li>
                  
                </ul>
              </div>
              
            </li>
            
            <li class=""><a class="tier1title" href="/pages/dining-room" aria-haspopup="true">Dining Room</a>

              
              <div class="tier2">
                <div><div class="tier-title">Dining Room</div></div>
                <ul>
                  
                  <li class=""><a href="/collections/dining-sets"   >Dining Sets</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/dining-tables"   >Dining Tables</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/benches"   >Benches</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/chairs"   >Chairs</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/kitchen-cabinet"   >Kitchen Cabinets</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/sideboards"   >Sideboards</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/chest-of-drawers"   >Chest of Drawers</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/tv-units"   >Tv units</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/mandir"   >Mandir / Prayer Unit</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/desks-home-office"   >Desks</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/bars"   >Bars</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/bar-chair-stools"   >Bar Chairs</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/wing-chairs-more"   >Wing Chairs</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/accessories"   >Accessories</a>

                    
                  </li>
                  
                </ul>
              </div>
              
            </li>
            
            <li class=""><a class="tier1title" href="/collections/garden-furniture" >Outdoor</a>

              
            </li>
            
            <li class=""><a class="tier1title" href="/pages/our-showrooms" >Stores</a>

              
            </li>
            
            <li class="active"><a class="tier1title" href="/pages/collections" aria-haspopup="true">Collections</a>

              
              <div class="tier2">
                <div><div class="tier-title">Collections</div></div>
                <ul>
                  
                  <li class=""><a href="/collections/brass-royale"   >Brass Royale</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/buck"   >Buck</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/capital"   >Capital</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/charlie"   >Charlie</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/contrast"   >Contrast</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/cube"   >Cube</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/hidcl-18"   >Cubex</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/durban"   >Durban</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/eva"   >EVA</a>

                    
                  </li>
                  
                  <li class="active"><a href="/collections/indiana"   >Indiana</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/jaipur"   >Jaipur</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/jali"   >Jali</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/jodhpur"   >Jodhpur</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/kuber"   >Kuber</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/maharaja"   >Maharaja</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/romeo"   >Romeo</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/shine"   >Shine</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/slant"   >Slant</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/tania"   >Tania</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/turner"   >Turner</a>

                    
                  </li>
                  
                  <li class=""><a href="/collections/voted"   >Voted</a>

                    
                  </li>
                  
                </ul>
              </div>
              
            </li>
            
            <li class=""><a class="tier1title" href="/pages/contact" >Contact</a>

              
            </li>
            
          </ul>

          
            <ul class="special-links">
              
              <li class="special-link special-link--1">
                <a href="/pages/new-launchs" target="_blank">New Launches 10% OFF</a>
              </li>
              
              <li class="special-link special-link--2">
                <a href="/collections/indiana" target="_blank">~ INDIANA ~</a>
              </li>
              
              <li class="special-link special-link--3">
                <a href="/pages/mobile-browser-apps" target="_blank">Mobile Apps</a>
              </li>
              
            </ul>
          

          
          <div class="account-links">
            
            <a href="/account/login" id="customer_login_link">Login</a> /
            <a href="/account/register" id="customer_register_link">Register</a>
            
          </div>
          

          
          <div class="mobile-only currency-switcher">
            
<select name="currencies" aria-label="Choose a currency">
  
  
  <option value="INR" selected="selected">INR</option>
  
  
  
  
  <option value="GBP">GBP</option>
  
  
  
  <option value="CAD">CAD</option>
  
  
  
  <option value="USD">USD</option>
  
  
  
  <option value="AUD">AUD</option>
  
  
  
  <option value="EUR">EUR</option>
  
  
  
  <option value="JPY">JPY</option>
  
  
</select>


          </div>
          
        </div>

      </div>
    </div>
  </div>

  <a class="quick-search-close-mask" href="#"></a>
</div>




</div>

    <div id="content">
      

<div id="shopify-section-collection-template" class="shopify-section"><div data-section-type="collection-template">
  






  <div class="content-header align-centre">
    <h1 class="page-title">Indiana</h1>
  </div>


  <div class="filter-row row cf">
    
    


    


    

    
    <div class="filter-group filter-group--start-hidden">
      <div class="filter-header">
        <a class="filter-toggle" href="#">
          Filter
          <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Down</title>
  <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/>
</svg>
        </a>

        
        <span class="filter-header__current-tags">
          

          
        </span>
      </div>

      <div class="filter-items">
        
        <div class="filter-dropdowns">
          
    <div class="filter filter--dropdown">
      <label for="custom_tagfilter1">Categories (Size or Sets)</label>
      <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Down</title>
  <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/>
</svg>
      <select class="navdrop" id="custom_tagfilter1" name="custom_tagfilter1">
        <option value="/collections/indiana/">All</option><option value="/collections/indiana/beds" data-custom="beds"
                    >Beds</option><option value="/collections/indiana/chair" data-custom="chair"
                    >chair</option><option value="/collections/indiana/coffee-tables" data-custom="coffee-tables"
                    >Coffee Tables</option><option value="/collections/indiana/dining-set" data-custom="dining-set"
                    >dining set</option><option value="/collections/indiana/dining-sets" data-custom="dining-sets"
                    >Dining Sets</option><option value="/collections/indiana/dining-tables" data-custom="dining-tables"
                    >dining tables</option><option value="/collections/indiana/sofa-sets" data-custom="sofa-sets"
                    >Sofa Sets</option></select>
    </div>
    
          
    <div class="filter filter--dropdown">
      <label for="custom_tagfilter2">Offers</label>
      <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Down</title>
  <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/>
</svg>
      <select class="navdrop" id="custom_tagfilter2" name="custom_tagfilter2">
        <option value="/collections/indiana/">All</option><option value="/collections/indiana/new-launches-with-10-off" data-custom="new-launches-with-10-off"
                    >New Launches (with 10% OFF)</option><option value="/collections/indiana/new-launches-with-40-off" data-custom="new-launches-with-40-off"
                    >New Launches (with 40% OFF)</option></select>
    </div>
    
        </div>
      </div>
    </div>
    
  </div>

  <div class="collection-sorter row cf">
    
    <div class="collection-sort inline-select">
      <label for="sort-by">Sort by</label>
      <select id="sort-by" data-initval="manual">
        <option value="manual">Featured</option>
        <option value="price-ascending">Price, low to high</option>
        <option value="price-descending">Price, high to low</option>
        <option value="title-ascending">A-Z</option>
        <option value="title-descending">Z-A</option>
        <option value="created-ascending">Date, old to new</option>
        <option value="created-descending">Date, new to old</option>
        <option value="best-selling">Best Selling</option>
      </select>
    </div>
    

    
  </div>

  <div class="blocklayout do-infinite">

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-woodlog-bed" title="Solid Wood INDIANA WoodLog Bed">
      <span class="productlabel general"><span>Extra 40% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_180x.jpg?v=1549579351 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_360x.jpg?v=1549579351 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_540x.jpg?v=1549579351 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_720x.jpg?v=1549579351 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_900x.jpg?v=1549579351 900w 675h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_1080x.jpg?v=1549579351 1080w 810h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_1296x.jpg?v=1549579351 1296w 972h,
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214.jpg?v=1549579351 1300w 975h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/11_aa95dddf-f77c-422f-8832-b0cb0c6f8214_1024x1024.jpg?v=1549579351" alt="Solid Wood INDIANA WoodLog Bed" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-woodlog-bed?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-woodlog-bed">Solid Wood INDIANA WoodLog Bed</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price price--reduced theme-money"><span class=money>Rs. 189,990.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 269,000.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1967506128961"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-woodgress-bed" title="Solid Wood INDIANA WoodGress Bed">
      <span class="productlabel general"><span>Extra 40% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_180x.jpg?v=1549579346 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_360x.jpg?v=1549579346 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_540x.jpg?v=1549579346 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_720x.jpg?v=1549579346 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_900x.jpg?v=1549579346 900w 675h,
    //cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_1080x.jpg?v=1549579346 1080w 810h,
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b.jpg?v=1549579346 1200w 900h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/10_78f9b59a-13f2-4c30-b552-077f0da8696b_1024x1024.jpg?v=1549579346" alt="Solid Wood INDIANA WoodGress Bed" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-woodgress-bed?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-woodgress-bed">Solid Wood INDIANA WoodGress Bed</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price price--reduced theme-money"><span class=money>Rs. 169,800.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 249,000.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1967501180993"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-woodtree-bed" title="Solid Wood INDIANA WoodTree Bed">
      <span class="productlabel general"><span>Extra 40% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_180x.jpg?v=1549579342 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_360x.jpg?v=1549579342 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_540x.jpg?v=1549579342 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_720x.jpg?v=1549579342 720w 539h,
    //cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_900x.jpg?v=1549579342 900w 674h,
    //cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_1080x.jpg?v=1549579342 1080w 809h,
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d.jpg?v=1549579342 1200w 899h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/9_b28965e2-28e0-41c1-9389-64fe6d53fa2d_1024x1024.jpg?v=1549579342" alt="Solid Wood INDIANA WoodTree Bed" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-woodtree-bed?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-woodtree-bed">Solid Wood INDIANA WoodTree Bed</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price price--reduced theme-money"><span class=money>Rs. 179,800.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 259,000.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1965598539841"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-live-bed" title="Solid Wood INDIANA Live Bed">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_180x.jpg?v=1547483571 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_360x.jpg?v=1547483571 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_540x.jpg?v=1547483571 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_720x.jpg?v=1547483571 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_900x.jpg?v=1547483571 900w 675h,
    //cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_1080x.jpg?v=1547483571 1080w 810h,
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985.jpg?v=1547483571 1100w 825h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/32_f92b21b2-2181-4ade-8a48-195f26687985_1024x1024.jpg?v=1547483571" alt="Solid Wood INDIANA Live Bed" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-live-bed?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-live-bed">Solid Wood INDIANA Live Bed</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 79,990.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1965550633025"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-pod-stool" title="Solid Wood INDIANA Pod Stool">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/38608_0_180x.jpg?v=1531072874 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38608_0_360x.jpg?v=1531072874 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38608_0_540x.jpg?v=1531072874 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38608_0_720x.jpg?v=1531072874 720w 480h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38608_0_900x.jpg?v=1531072874 900w 600h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/38608_0.jpg?v=1531072874 1000w 667h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/38608_0_1024x1024.jpg?v=1531072874" alt="Solid Wood INDIANA Pod Stool" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-pod-stool?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-pod-stool">Solid Wood INDIANA Pod Stool</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price price--reduced theme-money"><span class=money>Rs. 6,999.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 8,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1365547581505"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-lass-round-coffee-table" title="Solid Wood Indiana Lass Round Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/1_adc97140-8478-4e4d-8cd6-b223972a160a_180x.jpg?v=1547176843 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_adc97140-8478-4e4d-8cd6-b223972a160a_360x.jpg?v=1547176843 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_adc97140-8478-4e4d-8cd6-b223972a160a_540x.jpg?v=1547176843 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_adc97140-8478-4e4d-8cd6-b223972a160a_720x.jpg?v=1547176843 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/1_adc97140-8478-4e4d-8cd6-b223972a160a.jpg?v=1547176843 851w 851h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/1_adc97140-8478-4e4d-8cd6-b223972a160a_1024x1024.jpg?v=1547176843" alt="Solid Wood Indiana Lass Round Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-lass-round-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-lass-round-coffee-table">Solid Wood Indiana Lass Round Coffee Table</a>
    <div class="pricearea">
      
      <span class="price price--reduced theme-money"><span class=money>Rs. 11,999.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 15,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1958256738369"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-thar-sideboard-3-doors" title="Solid Wood INDIANA Thar Sideboard 3 Doors">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675_180x.jpg?v=1547312142 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675_360x.jpg?v=1547312142 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675_540x.jpg?v=1547312142 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675_720x.jpg?v=1547312142 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675_900x.jpg?v=1547312142 900w 675h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675.jpg?v=1547312142 1000w 750h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/5_2457d4f2-6794-49bc-b352-3b94b8f38675_1024x1024.jpg?v=1547312142" alt="Solid Wood INDIANA Thar Sideboard 3 Doors" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-thar-sideboard-3-doors?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-thar-sideboard-3-doors">Solid Wood INDIANA Thar Sideboard 3 Doors</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 41,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1961739485249"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-live-dining-set" title="Solid Wood Indiana Live Dining Set">
      <span class="productlabel general"><span>40% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/il_180x.jpg?v=1529687513 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/il_360x.jpg?v=1529687513 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/il_540x.jpg?v=1529687513 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/il_720x.jpg?v=1529687513 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/il.jpg?v=1529687513 751w 751h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/il_1024x1024.jpg?v=1529687513" alt="Solid Wood Indiana Live Dining Set" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-live-dining-set?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-live-dining-set">Solid Wood Indiana Live Dining Set</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 89,990.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="9992979408"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-nile-tv-unit" title="Solid Wood INDIANA Nile Tv Unit">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/38332_0_180x.jpg?v=1531072924 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38332_0_360x.jpg?v=1531072924 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38332_0_540x.jpg?v=1531072924 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38332_0_720x.jpg?v=1531072924 720w 480h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38332_0_900x.jpg?v=1531072924 900w 600h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/38332_0.jpg?v=1531072924 1000w 667h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/38332_0_1024x1024.jpg?v=1531072924" alt="Solid Wood INDIANA Nile Tv Unit" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-nile-tv-unit?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-nile-tv-unit">Solid Wood INDIANA Nile Tv Unit</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 28,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1365655093313"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-lass-coffee-table" title="Solid Wood INDIANA Lass Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/7_607343b4-468a-49da-958b-7e2fb913501c_180x.jpg?v=1544451916 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_607343b4-468a-49da-958b-7e2fb913501c_360x.jpg?v=1544451916 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_607343b4-468a-49da-958b-7e2fb913501c_540x.jpg?v=1544451916 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_607343b4-468a-49da-958b-7e2fb913501c_720x.jpg?v=1544451916 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/7_607343b4-468a-49da-958b-7e2fb913501c.jpg?v=1544451916 850w 850h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/7_607343b4-468a-49da-958b-7e2fb913501c_1024x1024.jpg?v=1544451916" alt="Solid Wood INDIANA Lass Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-lass-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-lass-coffee-table">Solid Wood INDIANA Lass Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 13,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1362817155137"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-hung-sofa" title="Solid Wood INDIANA Hung Sofa">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/DSC85441_180x.jpg?v=1536145191 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC85441_360x.jpg?v=1536145191 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC85441_540x.jpg?v=1536145191 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC85441_720x.jpg?v=1536145191 720w 481h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC85441.jpg?v=1536145191 851w 568h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/DSC85441_1024x1024.jpg?v=1536145191" alt="Solid Wood INDIANA Hung Sofa" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-hung-sofa?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-hung-sofa">Solid Wood INDIANA Hung Sofa</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 35,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="26953744400"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-roll-grand-coffee-table" title="Solid Wood INDIANA Roll GRAND Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/38607_3_180x.jpg?v=1531072666 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38607_3_360x.jpg?v=1531072666 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38607_3_540x.jpg?v=1531072666 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38607_3_720x.jpg?v=1531072666 720w 480h,
    //cdn.shopify.com/s/files/1/0191/2234/products/38607_3_900x.jpg?v=1531072666 900w 600h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/38607_3.jpg?v=1531072666 1000w 667h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/38607_3_1024x1024.jpg?v=1531072666" alt="Solid Wood INDIANA Roll GRAND Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-roll-grand-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-roll-grand-coffee-table">Solid Wood INDIANA Roll GRAND Coffee Table</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 16,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1365566849089"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-thar-dining-set" title="Solid Wood Indiana Thar Dining Set">
      <span class="productlabel general"><span>40% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/1_8abca18a-3d39-4bab-a053-2a56fc6585bb_180x.jpg?v=1546731671 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_8abca18a-3d39-4bab-a053-2a56fc6585bb_360x.jpg?v=1546731671 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_8abca18a-3d39-4bab-a053-2a56fc6585bb_540x.jpg?v=1546731671 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_8abca18a-3d39-4bab-a053-2a56fc6585bb_720x.jpg?v=1546731671 720w 481h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/1_8abca18a-3d39-4bab-a053-2a56fc6585bb.jpg?v=1546731671 851w 568h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/1_8abca18a-3d39-4bab-a053-2a56fc6585bb_1024x1024.jpg?v=1546731671" alt="Chair image for reference only" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-thar-dining-set?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-thar-dining-set">Solid Wood Indiana Thar Dining Set</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 179,900.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="9988835792"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-contrast-coffee-table" title="Solid Wood Indiana Contrast Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/1_9c61e881-f151-4543-9336-1121c50c460b_180x.jpg?v=1547176817 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_9c61e881-f151-4543-9336-1121c50c460b_360x.jpg?v=1547176817 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_9c61e881-f151-4543-9336-1121c50c460b_540x.jpg?v=1547176817 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_9c61e881-f151-4543-9336-1121c50c460b_720x.jpg?v=1547176817 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/1_9c61e881-f151-4543-9336-1121c50c460b.jpg?v=1547176817 751w 751h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/1_9c61e881-f151-4543-9336-1121c50c460b_1024x1024.jpg?v=1547176817" alt="Solid Wood Indiana Contrast Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-contrast-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-contrast-coffee-table">Solid Wood Indiana Contrast Coffee Table</a>
    <div class="pricearea">
      
      <span class="price price--reduced theme-money"><span class=money>Rs. 28,999.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 41,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1958262243393"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-walker-coffee-table" title="Solid Wood INDIANA Walker Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/Indiana_Walker_180x.jpg?v=1529671976 180w 264h,
    //cdn.shopify.com/s/files/1/0191/2234/products/Indiana_Walker_360x.jpg?v=1529671976 360w 527h,
    //cdn.shopify.com/s/files/1/0191/2234/products/Indiana_Walker_540x.jpg?v=1529671976 540w 791h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/Indiana_Walker.jpg?v=1529671976 651w 953h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/Indiana_Walker_1024x1024.jpg?v=1529671976" alt="Solid Wood INDIANA Walker Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-walker-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-walker-coffee-table">Solid Wood INDIANA Walker Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 11,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="9857187280"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-lass-sideboard" title="Solid Wood INDIANA Lass Sideboard">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/14_fce6b3bb-b6cc-4735-b7e5-01e44ca88248_180x.jpg?v=1544451912 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/14_fce6b3bb-b6cc-4735-b7e5-01e44ca88248_360x.jpg?v=1544451912 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/14_fce6b3bb-b6cc-4735-b7e5-01e44ca88248_540x.jpg?v=1544451912 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/14_fce6b3bb-b6cc-4735-b7e5-01e44ca88248_720x.jpg?v=1544451912 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/14_fce6b3bb-b6cc-4735-b7e5-01e44ca88248.jpg?v=1544451912 850w 850h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/14_fce6b3bb-b6cc-4735-b7e5-01e44ca88248_1024x1024.jpg?v=1544451912" alt="Solid Wood INDIANA Lass Sideboard" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-lass-sideboard?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-lass-sideboard">Solid Wood INDIANA Lass Sideboard</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 35,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1362805489729"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-lass-tv-unit" title="Solid Wood INDIANA Lass Tv Unit">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/50914_1_180x.jpg?v=1544451919 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/50914_1_360x.jpg?v=1544451919 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/50914_1_540x.jpg?v=1544451919 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/50914_1_720x.jpg?v=1544451919 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/50914_1.jpg?v=1544451919 850w 850h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/50914_1_1024x1024.jpg?v=1544451919" alt="Solid Wood INDIANA Lass Tv Unit" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-lass-tv-unit?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-lass-tv-unit">Solid Wood INDIANA Lass Tv Unit</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 21,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1362810601537"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table-set-4-seater" title="Solid Wood INDIANA Breakfast Dining Table Set 4 Seater">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/DSC_3139_2b9cd1c3-75be-46df-b5a6-2e9937c79d81_180x.jpg?v=1546807434 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3139_2b9cd1c3-75be-46df-b5a6-2e9937c79d81_360x.jpg?v=1546807434 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3139_2b9cd1c3-75be-46df-b5a6-2e9937c79d81_540x.jpg?v=1546807434 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3139_2b9cd1c3-75be-46df-b5a6-2e9937c79d81_720x.jpg?v=1546807434 720w 480h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3139_2b9cd1c3-75be-46df-b5a6-2e9937c79d81.jpg?v=1546807434 751w 501h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/DSC_3139_2b9cd1c3-75be-46df-b5a6-2e9937c79d81_1024x1024.jpg?v=1546807434" alt="Table + 4 Chairs" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table-set-4-seater?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table-set-4-seater">Solid Wood INDIANA Breakfast Dining Table Set 4 Seater</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 55,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1951332302913"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-round-coffee-table-3" title="Solid Wood Indiana Round Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/6_8c3aade4-0acf-4835-b623-9fca83518f61_180x.jpg?v=1547176835 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/6_8c3aade4-0acf-4835-b623-9fca83518f61_360x.jpg?v=1547176835 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/6_8c3aade4-0acf-4835-b623-9fca83518f61_540x.jpg?v=1547176835 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/6_8c3aade4-0acf-4835-b623-9fca83518f61_720x.jpg?v=1547176835 720w 720h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/6_8c3aade4-0acf-4835-b623-9fca83518f61.jpg?v=1547176835 851w 851h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/6_8c3aade4-0acf-4835-b623-9fca83518f61_1024x1024.jpg?v=1547176835" alt="Solid Wood Indiana Round Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-round-coffee-table-3?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-round-coffee-table-3">Solid Wood Indiana Round Coffee Table</a>
    <div class="pricearea">
      
      <span class="price price--reduced theme-money"><span class=money>Rs. 9,999.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 15,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1958249201729"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-walker-bed" title="Solid Wood INDIANA Walker Bed">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/12_c22b4a55-559d-4367-a042-6c0b3dbd160b_180x.jpg?v=1547483560 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/12_c22b4a55-559d-4367-a042-6c0b3dbd160b_360x.jpg?v=1547483560 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/12_c22b4a55-559d-4367-a042-6c0b3dbd160b_540x.jpg?v=1547483560 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/12_c22b4a55-559d-4367-a042-6c0b3dbd160b_720x.jpg?v=1547483560 720w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/12_c22b4a55-559d-4367-a042-6c0b3dbd160b.jpg?v=1547483560 900w 675h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/12_c22b4a55-559d-4367-a042-6c0b3dbd160b_1024x1024.jpg?v=1547483560" alt="Solid Wood INDIANA Walker Bed" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-walker-bed?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-walker-bed">Solid Wood INDIANA Walker Bed</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 79,990.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1965568229441"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-uptown-coffee-table" title="Solid Wood INDIANA UpTown Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_180x.jpg?v=1547483567 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_360x.jpg?v=1547483567 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_540x.jpg?v=1547483567 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_720x.jpg?v=1547483567 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_900x.jpg?v=1547483567 900w 675h,
    //cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_1080x.jpg?v=1547483567 1080w 810h,
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70.jpg?v=1547483567 1100w 825h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/7_e8c480aa-722b-4172-8550-213b66671e70_1024x1024.jpg?v=1547483567" alt="Solid Wood INDIANA UpTown Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-uptown-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-uptown-coffee-table">Solid Wood INDIANA UpTown Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 18,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1965536411713"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-rocket-stool" title="Solid Wood Indiana Rocket Stool">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/SC4905_50X34X50_180x.jpg?v=1529682944 180w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/SC4905_50X34X50_360x.jpg?v=1529682944 360w 539h,
    //cdn.shopify.com/s/files/1/0191/2234/products/SC4905_50X34X50_540x.jpg?v=1529682944 540w 809h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/SC4905_50X34X50.jpg?v=1529682944 701w 1050h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/SC4905_50X34X50_1024x1024.jpg?v=1529682944" alt="Solid Wood Indiana Rocket Stool" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-rocket-stool?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-rocket-stool">Solid Wood Indiana Rocket Stool</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 8,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="9990661840"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table" title="Solid Wood INDIANA Breakfast Dining Table Set">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/sq1_180x.jpg?v=1547998437 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/sq1_360x.jpg?v=1547998437 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/sq1_540x.jpg?v=1547998437 540w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/sq1.jpg?v=1547998437 700w 700h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/sq1_1024x1024.jpg?v=1547998437" alt="Solid Wood INDIANA Breakfast Dining Table Set" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table">Solid Wood INDIANA Breakfast Dining Table Set</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 24,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="22597369872"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-mirror" title="Solid Wood Indiana Mirror">
      <span class="productlabel general"><span>New Launch !</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/Screen_Shot_2017-10-03_at_9.36.57_PM_copy_180x.jpg?v=1529679360 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/Screen_Shot_2017-10-03_at_9.36.57_PM_copy_360x.jpg?v=1529679360 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/Screen_Shot_2017-10-03_at_9.36.57_PM_copy_540x.jpg?v=1529679360 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/Screen_Shot_2017-10-03_at_9.36.57_PM_copy_720x.jpg?v=1529679360 720w 481h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/Screen_Shot_2017-10-03_at_9.36.57_PM_copy.jpg?v=1529679360 851w 568h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/Screen_Shot_2017-10-03_at_9.36.57_PM_copy_1024x1024.jpg?v=1529679360" alt="Solid Wood Indiana Mirror" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-mirror?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-mirror">Solid Wood Indiana Mirror</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 18,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="9993656656"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-shade-coffee-table" title="Solid Wood INDIANA SHADE Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_180x.jpg?v=1530995333 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_360x.jpg?v=1530995333 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_540x.jpg?v=1530995333 540w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_720x.jpg?v=1530995333 720w 720h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_900x.jpg?v=1530995333 900w 900h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_1080x.jpg?v=1530995333 1080w 1080h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_1296x.jpg?v=1530995333 1296w 1296h,
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_1512x.jpg?v=1530995333 1512w 1512h,
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11.jpg?v=1530995333 1600w 1600h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/43508-FineBuy-Couchtisch-Massiv-Holz-115-cm-brei_11_1024x1024.jpg?v=1530995333" alt="Solid Wood INDIANA SHADE Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-shade-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-shade-coffee-table">Solid Wood INDIANA SHADE Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 16,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1364287225921"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-roll-coffee-table" title="Solid Wood INDIANA Roll Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/11_27ea784d-20ed-484a-af54-25116295f54c_180x.jpg?v=1529687267 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_27ea784d-20ed-484a-af54-25116295f54c_360x.jpg?v=1529687267 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_27ea784d-20ed-484a-af54-25116295f54c_540x.jpg?v=1529687267 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/11_27ea784d-20ed-484a-af54-25116295f54c_720x.jpg?v=1529687267 720w 481h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/11_27ea784d-20ed-484a-af54-25116295f54c.jpg?v=1529687267 851w 568h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/11_27ea784d-20ed-484a-af54-25116295f54c_1024x1024.jpg?v=1529687267" alt="Solid Wood INDIANA Roll Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-roll-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-roll-coffee-table">Solid Wood INDIANA Roll Coffee Table</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 11,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="5375248837"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-coffee-table" title="Solid Wood INDIANA Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/36708_1_180x.jpg?v=1529686879 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36708_1_360x.jpg?v=1529686879 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36708_1_540x.jpg?v=1529686879 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36708_1_720x.jpg?v=1529686879 720w 480h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36708_1_900x.jpg?v=1529686879 900w 600h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/36708_1.jpg?v=1529686879 1000w 667h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/36708_1_1024x1024.jpg?v=1529686879" alt="Solid Wood INDIANA Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-coffee-table">Solid Wood INDIANA Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 13,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="447030648"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-live-console-table" title="Solid Wood Indiana Live Console Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/4_d30c9f80-5384-45dc-9619-d5b9d6c11abe_180x.jpg?v=1544487632 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/4_d30c9f80-5384-45dc-9619-d5b9d6c11abe_360x.jpg?v=1544487632 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/4_d30c9f80-5384-45dc-9619-d5b9d6c11abe_540x.jpg?v=1544487632 540w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/4_d30c9f80-5384-45dc-9619-d5b9d6c11abe.jpg?v=1544487632 700w 700h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/4_d30c9f80-5384-45dc-9619-d5b9d6c11abe_1024x1024.jpg?v=1544487632" alt="Solid Wood Indiana Live Console Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-live-console-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-live-console-table">Solid Wood Indiana Live Console Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 28,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="9993032464"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-color-coffee-table" title="Solid Wood INDIANA COLOR Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/icc_180x.jpg?v=1529685206 180w 180h,
    //cdn.shopify.com/s/files/1/0191/2234/products/icc_360x.jpg?v=1529685206 360w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/icc_540x.jpg?v=1529685206 540w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/icc.jpg?v=1529685206 701w 701h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/icc_1024x1024.jpg?v=1529685206" alt="Solid Wood INDIANA COLOR Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-color-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-color-coffee-table">Solid Wood INDIANA COLOR Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 11,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="49914970128"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-lamp-table" title="Solid Wood INDIANA Lamp Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/36707_2_180x.jpg?v=1529686483 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36707_2_360x.jpg?v=1529686483 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36707_2_540x.jpg?v=1529686483 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36707_2_720x.jpg?v=1529686483 720w 480h,
    //cdn.shopify.com/s/files/1/0191/2234/products/36707_2_900x.jpg?v=1529686483 900w 600h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/36707_2.jpg?v=1529686483 1000w 667h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/36707_2_1024x1024.jpg?v=1529686483" alt="Solid Wood INDIANA Lamp Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-lamp-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-lamp-table">Solid Wood INDIANA Lamp Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 5,899.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="2246214853"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-medium fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-bedside-table" title="Solid Wood INDIANA Bedside Table">
      
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/6_16dda643-8a44-49b5-96ef-78232e7aef6a_180x.jpg?v=1547266050 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/6_16dda643-8a44-49b5-96ef-78232e7aef6a_360x.jpg?v=1547266050 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/6_16dda643-8a44-49b5-96ef-78232e7aef6a_540x.jpg?v=1547266050 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/6_16dda643-8a44-49b5-96ef-78232e7aef6a_720x.jpg?v=1547266050 720w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/6_16dda643-8a44-49b5-96ef-78232e7aef6a.jpg?v=1547266050 900w 675h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/6_16dda643-8a44-49b5-96ef-78232e7aef6a_1024x1024.jpg?v=1547266050" alt="Solid Wood INDIANA Bedside Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-bedside-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-bedside-table">Solid Wood INDIANA Bedside Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 8,799.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1960067498049"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/wooden-log-indiana-thar-bookcase-with-door-drawer" title="Wooden LOG Indiana Thar Bookcase with Door &amp; Drawer">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_180x.jpg?v=1547222195 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_360x.jpg?v=1547222195 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_540x.jpg?v=1547222195 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_720x.jpg?v=1547222195 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_900x.jpg?v=1547222195 900w 675h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_1080x.jpg?v=1547222195 1080w 810h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_1296x.jpg?v=1547222195 1296w 972h,
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_1512x.jpg?v=1547222195 1512w 1134h,
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7.jpg?v=1547222195 1600w 1200h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/15_d0c4fb22-6ec6-48d1-b785-8d13ae487cf7_1024x1024.jpg?v=1547222195" alt="Wooden LOG Indiana Thar Bookcase with Door &amp; Drawer" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/wooden-log-indiana-thar-bookcase-with-door-drawer?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/wooden-log-indiana-thar-bookcase-with-door-drawer">Wooden LOG Indiana Thar Bookcase with Door & Drawer</a>
    <div class="pricearea">
      
      <span class="price price--reduced theme-money"><span class=money>Rs. 25,999.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 39,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1959947403329"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/wooden-log-indiana-thar-bookcase-with-3-drawers" title="Wooden LOG Indiana Thar Bookcase with 3 Drawers">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_180x.jpg?v=1547222219 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_360x.jpg?v=1547222219 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_540x.jpg?v=1547222219 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_720x.jpg?v=1547222219 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_900x.jpg?v=1547222219 900w 675h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_1080x.jpg?v=1547222219 1080w 810h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_1296x.jpg?v=1547222219 1296w 972h,
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_1512x.jpg?v=1547222219 1512w 1134h,
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81.jpg?v=1547222219 1600w 1200h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/8_4352ed02-e964-404a-9684-77dbc9c62a81_1024x1024.jpg?v=1547222219" alt="Wooden LOG Indiana Thar Bookcase with 3 Drawers" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/wooden-log-indiana-thar-bookcase-with-3-drawers?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/wooden-log-indiana-thar-bookcase-with-3-drawers">Wooden LOG Indiana Thar Bookcase with 3 Drawers</a>
    <div class="pricearea">
      
      <span class="price price--reduced theme-money"><span class=money>Rs. 31,999.00 </span></span>
      
      <span class="was-price theme-money"><span class=money>Rs. 39,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1959944355905"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-thar-centre-table" title="Solid Wood INDIANA Thar Centre Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/2_5cb6c0f7-b002-456c-b365-76ed98b4d677_180x.jpg?v=1547222190 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_5cb6c0f7-b002-456c-b365-76ed98b4d677_360x.jpg?v=1547222190 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_5cb6c0f7-b002-456c-b365-76ed98b4d677_540x.jpg?v=1547222190 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_5cb6c0f7-b002-456c-b365-76ed98b4d677_720x.jpg?v=1547222190 720w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/2_5cb6c0f7-b002-456c-b365-76ed98b4d677.jpg?v=1547222190 900w 675h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/2_5cb6c0f7-b002-456c-b365-76ed98b4d677_1024x1024.jpg?v=1547222190" alt="Solid Wood INDIANA Thar Centre Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-thar-centre-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-thar-centre-table">Solid Wood INDIANA Thar Centre Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 21,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1959924367425"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-thar-tv-unit-with-2-drawers" title="Solid Wood INDIANA Thar Tv Unit with 2 Drawers">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/5_bb4a27ed-4652-4ce9-80ba-ab65a96da3df_180x.jpg?v=1547222249 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_bb4a27ed-4652-4ce9-80ba-ab65a96da3df_360x.jpg?v=1547222249 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_bb4a27ed-4652-4ce9-80ba-ab65a96da3df_540x.jpg?v=1547222249 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/5_bb4a27ed-4652-4ce9-80ba-ab65a96da3df_720x.jpg?v=1547222249 720w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/5_bb4a27ed-4652-4ce9-80ba-ab65a96da3df.jpg?v=1547222249 900w 675h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/5_bb4a27ed-4652-4ce9-80ba-ab65a96da3df_1024x1024.jpg?v=1547222249" alt="Solid Wood INDIANA Thar Tv Unit with 2 Drawers" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-thar-tv-unit-with-2-drawers?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-thar-tv-unit-with-2-drawers">Solid Wood INDIANA Thar Tv Unit with 2 Drawers</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 23,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1959907033153"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-shine-bench" title="Solid Wood INDIANA Shine Bench">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02_180x.jpg?v=1547222151 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02_360x.jpg?v=1547222151 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02_540x.jpg?v=1547222151 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02_720x.jpg?v=1547222151 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02_900x.jpg?v=1547222151 900w 675h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02.jpg?v=1547222151 1000w 750h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/1_b8c125a1-9ed1-418d-bb22-2a02386f8b02_1024x1024.jpg?v=1547222151" alt="Solid Wood INDIANA Shine Bench" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-shine-bench?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-shine-bench">Solid Wood INDIANA Shine Bench</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 25,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1959896973377"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-shine-coffee-table" title="Solid Wood INDIANA Shine Coffee Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d_180x.jpg?v=1547222235 180w 135h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d_360x.jpg?v=1547222235 360w 270h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d_540x.jpg?v=1547222235 540w 405h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d_720x.jpg?v=1547222235 720w 540h,
    //cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d_900x.jpg?v=1547222235 900w 675h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d.jpg?v=1547222235 1000w 750h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/2_f095ab15-f1f2-414f-b894-09c4fbabb21d_1024x1024.jpg?v=1547222235" alt="Solid Wood INDIANA Shine Coffee Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-shine-coffee-table?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-shine-coffee-table">Solid Wood INDIANA Shine Coffee Table</a>
    <div class="pricearea">
      
      <span class="price  theme-money"><span class=money>Rs. 18,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1959894417473"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-medium fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-breakfast-bar-chair" title="Solid Wood INDIANA Breakfast / Bar Chair">
      
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/DSC_3159_copy_ed9b4867-8696-42cf-bd08-41b33eaa3e5c_180x.jpg?v=1546807421 180w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3159_copy_ed9b4867-8696-42cf-bd08-41b33eaa3e5c_360x.jpg?v=1546807421 360w 481h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3159_copy_ed9b4867-8696-42cf-bd08-41b33eaa3e5c_540x.jpg?v=1546807421 540w 721h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3159_copy_ed9b4867-8696-42cf-bd08-41b33eaa3e5c.jpg?v=1546807421 651w 869h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/DSC_3159_copy_ed9b4867-8696-42cf-bd08-41b33eaa3e5c_1024x1024.jpg?v=1546807421" alt="Solid Wood INDIANA Breakfast / Bar Chair" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-breakfast-bar-chair?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-breakfast-bar-chair">Solid Wood INDIANA Breakfast / Bar Chair</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 8,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1951334629441"></span>
    </div>
  
  
</div>


    

    
















<div class="block product size-large fixed-ratio">
  <div class="main">
    <a class="img-link" href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table-1" title="Solid Wood INDIANA Breakfast Dining Table">
      <span class="productlabel general"><span>EXTRA 10% OFF</span></span>
      
        
        <div class="rimage-outer-wrapper lazyload fade-in rimage-bg-fit"
            data-bgset="//cdn.shopify.com/s/files/1/0191/2234/products/DSC_3157_copy_b3ff3788-cc9f-4420-b120-23f6f742af59_180x.jpg?v=1546807401 180w 120h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3157_copy_b3ff3788-cc9f-4420-b120-23f6f742af59_360x.jpg?v=1546807401 360w 240h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3157_copy_b3ff3788-cc9f-4420-b120-23f6f742af59_540x.jpg?v=1546807401 540w 360h,
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3157_copy_b3ff3788-cc9f-4420-b120-23f6f742af59_720x.jpg?v=1546807401 720w 481h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0191/2234/products/DSC_3157_copy_b3ff3788-cc9f-4420-b120-23f6f742af59.jpg?v=1546807401 851w 568h"
            data-sizes="auto"
            data-parent-fit="cover">
          <div class="rimage-wrapper" style="padding-top:66.7%">
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0191/2234/products/DSC_3157_copy_b3ff3788-cc9f-4420-b120-23f6f742af59_1024x1024.jpg?v=1546807401" alt="Solid Wood INDIANA Breakfast Dining Table" class="rimage__image">
            </noscript>
          </div>
        </div>
      
    </a>

    
    <div class="quick-buy-row">
      <a href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table-1?view=lightbox" class="quick-buy button button--slim">Quick View</a>
    </div>
    
  </div>

  <div class="sub">
    <a class="product-block-title" href="/collections/indiana/products/solid-wood-indiana-breakfast-dining-table-1">Solid Wood INDIANA Breakfast Dining Table</a>
    <div class="pricearea">
      <span class="from">From</span>
      <span class="price  theme-money"><span class=money>Rs. 28,999.00 </span></span>
      
    </div>
  </div>

  
    <div class="themed-product-reviews">
      <span class="shopify-product-reviews-badge" data-id="1951324569665"></span>
    </div>
  
  
</div>


    
  </div><!-- /.blocklayout -->

  <div class="row hidden hidden-pagination">
    <div class="pagination cf ">
  <span class="pagination__summary">
    Showing
    
    1 -
    39
    
    of
    
    104 results
  </span>

  
  
  <span class="prev"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Left</title>
  <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/><path d="M0-.5h24v24H0z" fill="none"/>
</svg></span>
  

  
  
  
  <span class="page current">1</span>
  
  
  
  <a class="page" href="/collections/indiana?page=2">2</a>
  
  
  
  <a class="page" href="/collections/indiana?page=3">3</a>
  
  
  

  
  <a class="next" href="/collections/indiana?page=2"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Right</title>
  <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/>
</svg></a>
  
  
</div>
  </div>

  
</div>


  <div class="reading-container rte align-centre"><div><img src="https://cdn.shopify.com/s/files/1/0191/2234/files/log_2_15bfd6ca-8f40-4d84-95f5-ea3c4facb363_50x50.png?v=1547314544" alt="" style="display: block; margin-left: auto; margin-right: auto;"></div>
<div style="text-align: center;">
<p>The <a href="https://www.insaraf.com/collections/indiana" target="_blank" title="Indiana" rel="noopener noreferrer">Indiana</a> finish is exclusively crafted for Indian suitability and elegance complemented with <strong>rust-free</strong> heavy strength <strong>coated metal</strong>. It is carved out from a single piece of wood the way it is <strong>naturally obtained</strong>. you can experience this look in <strong>different varieties</strong> of<a href="https://www.insaraf.com/collections/chairs" target="_blank" title=" seating chairs" rel="noopener noreferrer"> seating chairs</a>, <a href="https://www.insaraf.com/search?type=product&amp;q=*stool*" target="_blank" title="stool" rel="noopener noreferrer">stools</a>, <a href="https://www.insaraf.com/collections/coffee-table" target="_blank" title="coffee tables" rel="noopener noreferrer">coffee tables</a>, <a href="https://www.insaraf.com/collections/beds" target="_blank" title="beds" rel="noopener noreferrer">beds</a> and much more.</p>
</div></div>
  



</div>

    </div>

    <div id="shopify-section-footer" class="shopify-section"><div class="page-footer" data-section-type="footer-section">
  
    
      <div class="signup-form padded-block background-tint form">
        <div class="signup-form-container">
          <h6 class="h1 title">Inbox me!</h6>
          <div class="message rte"><p><strong>Exclusive&nbsp;Deals</strong>&nbsp;&amp;&nbsp;Early access to Offers &amp;&nbsp;Latest arrivals.</p></div>
          <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
            
              
              <div class="inline-input-button-row">
                <div class="inline-input-button-row__input">
                  <input type="hidden" id="contact_tags" name="contact[tags]" value="prospect,newsletter"/>
                  <input type="email" class="text required" value="" name="contact[email]" placeholder="Enter email" />
                </div>
                <div class="inline-input-button-row__button">
                  <button type="submit">Sign up</button>
                </div>
              </div>
            
          </form>
        </div>
      </div>
    
  

  <div class="page-footer__lower">
    
      <div class="page-footer__row page-footer__row-spacing page-footer__nav-column-container">
        
          <div class="page-footer__nav-column">
            <div class="nav-column__title h3"><button class="button plain"></button> <span class="chevron"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
  <title>Down</title>
  <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/>
</svg></span></div>
            <ul>
              
            </ul>
          </div>
        
      </div>
    

    <div class="page-footer__row">
      
        <ul class="page-footer__nav page-footer__row-spacing">
          
            <li><a href="/pages/order-status" title="">Order Status</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/mobile-browser-apps" title="">Apps</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/contact" title="">Contact Us</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/saraf-furniture-reviews-insaraf-com-reviews" title="">Reviews</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/media-press" title="">Press Media</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/about-us" title="">About Us</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/blogs/news" title="">Blog</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/first-tv-commercial" title="">First Tv Ad</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/international-shipping" title="">International Shipping</a> <span class="separator">&middot;</span></li>
          
            <li><a href="/pages/wooden-doors" title="">Wooden Doors</a></li>
          
        </ul>
      
      <div class="page-footer__social-icons page-footer__row-spacing">
        <div class="social-links">
  
  <a title="Twitter" class="twitter" target="_blank" href="https://twitter.com/saraffurniture"><svg width="48px" height="40px" viewBox="0 0 48 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Twitter</title>
    <defs></defs>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Black" transform="translate(-240.000000, -299.000000)" fill="#000000">
            <path d="M288,303.735283 C286.236309,304.538462 284.337383,305.081618 282.345483,305.324305 C284.379644,304.076201 285.940482,302.097147 286.675823,299.739617 C284.771263,300.895269 282.666667,301.736006 280.418384,302.18671 C278.626519,300.224991 276.065504,299 273.231203,299 C267.796443,299 263.387216,303.521488 263.387216,309.097508 C263.387216,309.88913 263.471738,310.657638 263.640782,311.397255 C255.456242,310.975442 248.201444,306.959552 243.341433,300.843265 C242.493397,302.339834 242.008804,304.076201 242.008804,305.925244 C242.008804,309.426869 243.747139,312.518238 246.389857,314.329722 C244.778306,314.280607 243.256911,313.821235 241.9271,313.070061 L241.9271,313.194294 C241.9271,318.08848 245.322064,322.17082 249.8299,323.095341 C249.004402,323.33225 248.133826,323.450704 247.235077,323.450704 C246.601162,323.450704 245.981335,323.390033 245.381229,323.271578 C246.634971,327.28169 250.269414,330.2026 254.580032,330.280607 C251.210424,332.99061 246.961789,334.605634 242.349709,334.605634 C241.555203,334.605634 240.769149,334.559408 240,334.466956 C244.358514,337.327194 249.53689,339 255.095615,339 C273.211481,339 283.114633,323.615385 283.114633,310.270495 C283.114633,309.831347 283.106181,309.392199 283.089276,308.961719 C285.013559,307.537378 286.684275,305.760563 288,303.735283" id="Twitter"></path>
        </g>
        <g id="Credit" transform="translate(-1332.000000, -476.000000)"></g>
    </g>
</svg></a>
  
  
  <a title="Facebook" class="facebook" target="_blank" href="https://www.facebook.com/furniture.saraf"><svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Facebook</title>
    <defs></defs>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Black" transform="translate(-325.000000, -295.000000)" fill="#000000">
            <path d="M350.638355,343 L327.649232,343 C326.185673,343 325,341.813592 325,340.350603 L325,297.649211 C325,296.18585 326.185859,295 327.649232,295 L370.350955,295 C371.813955,295 373,296.18585 373,297.649211 L373,340.350603 C373,341.813778 371.813769,343 370.350955,343 L358.119305,343 L358.119305,324.411755 L364.358521,324.411755 L365.292755,317.167586 L358.119305,317.167586 L358.119305,312.542641 C358.119305,310.445287 358.701712,309.01601 361.70929,309.01601 L365.545311,309.014333 L365.545311,302.535091 C364.881886,302.446808 362.604784,302.24957 359.955552,302.24957 C354.424834,302.24957 350.638355,305.625526 350.638355,311.825209 L350.638355,317.167586 L344.383122,317.167586 L344.383122,324.411755 L350.638355,324.411755 L350.638355,343 L350.638355,343 Z" id="Facebook"></path>
        </g>
        <g id="Credit" transform="translate(-1417.000000, -472.000000)"></g>
    </g>
</svg></a>
  
  
  <a title="Youtube" class="youtube" target="_blank" href="https://www.youtube.com/channel/UCchhSPXtU8DQA-9DL04OBhQ"><svg width="48px" height="34px" viewBox="0 0 48 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Youtube</title>
    <defs></defs>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Black" transform="translate(-567.000000, -302.000000)" fill="#000000">
            <path d="M586.044,325.269916 L586.0425,311.687742 L599.0115,318.502244 L586.044,325.269916 Z M614.52,309.334163 C614.52,309.334163 614.0505,306.003199 612.612,304.536366 C610.7865,302.610299 608.7405,302.601235 607.803,302.489448 C601.086,302 591.0105,302 591.0105,302 L590.9895,302 C590.9895,302 580.914,302 574.197,302.489448 C573.258,302.601235 571.2135,302.610299 569.3865,304.536366 C567.948,306.003199 567.48,309.334163 567.48,309.334163 C567.48,309.334163 567,313.246723 567,317.157773 L567,320.82561 C567,324.73817 567.48,328.64922 567.48,328.64922 C567.48,328.64922 567.948,331.980184 569.3865,333.447016 C571.2135,335.373084 573.612,335.312658 574.68,335.513574 C578.52,335.885191 591,336 591,336 C591,336 601.086,335.984894 607.803,335.495446 C608.7405,335.382148 610.7865,335.373084 612.612,333.447016 C614.0505,331.980184 614.52,328.64922 614.52,328.64922 C614.52,328.64922 615,324.73817 615,320.82561 L615,317.157773 C615,313.246723 614.52,309.334163 614.52,309.334163 L614.52,309.334163 Z" id="Youtube"></path>
        </g>
        <g id="Credit" transform="translate(-1659.000000, -479.000000)"></g>
    </g>
</svg></a>
  
  
  
  <a title="Instagram" class="instagram" target="_blank" href="https://www.instagram.com/saraf_furniture/"><svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Instagram</title>
    <defs></defs>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Black" transform="translate(-642.000000, -295.000000)" fill="#000000">
            <path d="M666.000048,295 C659.481991,295 658.664686,295.027628 656.104831,295.144427 C653.550311,295.260939 651.805665,295.666687 650.279088,296.260017 C648.700876,296.873258 647.362454,297.693897 646.028128,299.028128 C644.693897,300.362454 643.873258,301.700876 643.260017,303.279088 C642.666687,304.805665 642.260939,306.550311 642.144427,309.104831 C642.027628,311.664686 642,312.481991 642,319.000048 C642,325.518009 642.027628,326.335314 642.144427,328.895169 C642.260939,331.449689 642.666687,333.194335 643.260017,334.720912 C643.873258,336.299124 644.693897,337.637546 646.028128,338.971872 C647.362454,340.306103 648.700876,341.126742 650.279088,341.740079 C651.805665,342.333313 653.550311,342.739061 656.104831,342.855573 C658.664686,342.972372 659.481991,343 666.000048,343 C672.518009,343 673.335314,342.972372 675.895169,342.855573 C678.449689,342.739061 680.194335,342.333313 681.720912,341.740079 C683.299124,341.126742 684.637546,340.306103 685.971872,338.971872 C687.306103,337.637546 688.126742,336.299124 688.740079,334.720912 C689.333313,333.194335 689.739061,331.449689 689.855573,328.895169 C689.972372,326.335314 690,325.518009 690,319.000048 C690,312.481991 689.972372,311.664686 689.855573,309.104831 C689.739061,306.550311 689.333313,304.805665 688.740079,303.279088 C688.126742,301.700876 687.306103,300.362454 685.971872,299.028128 C684.637546,297.693897 683.299124,296.873258 681.720912,296.260017 C680.194335,295.666687 678.449689,295.260939 675.895169,295.144427 C673.335314,295.027628 672.518009,295 666.000048,295 Z M666.000048,299.324317 C672.40826,299.324317 673.167356,299.348801 675.69806,299.464266 C678.038036,299.570966 679.308818,299.961946 680.154513,300.290621 C681.274771,300.725997 682.074262,301.246066 682.91405,302.08595 C683.753934,302.925738 684.274003,303.725229 684.709379,304.845487 C685.038054,305.691182 685.429034,306.961964 685.535734,309.30194 C685.651199,311.832644 685.675683,312.59174 685.675683,319.000048 C685.675683,325.40826 685.651199,326.167356 685.535734,328.69806 C685.429034,331.038036 685.038054,332.308818 684.709379,333.154513 C684.274003,334.274771 683.753934,335.074262 682.91405,335.91405 C682.074262,336.753934 681.274771,337.274003 680.154513,337.709379 C679.308818,338.038054 678.038036,338.429034 675.69806,338.535734 C673.167737,338.651199 672.408736,338.675683 666.000048,338.675683 C659.591264,338.675683 658.832358,338.651199 656.30194,338.535734 C653.961964,338.429034 652.691182,338.038054 651.845487,337.709379 C650.725229,337.274003 649.925738,336.753934 649.08595,335.91405 C648.246161,335.074262 647.725997,334.274771 647.290621,333.154513 C646.961946,332.308818 646.570966,331.038036 646.464266,328.69806 C646.348801,326.167356 646.324317,325.40826 646.324317,319.000048 C646.324317,312.59174 646.348801,311.832644 646.464266,309.30194 C646.570966,306.961964 646.961946,305.691182 647.290621,304.845487 C647.725997,303.725229 648.246066,302.925738 649.08595,302.08595 C649.925738,301.246066 650.725229,300.725997 651.845487,300.290621 C652.691182,299.961946 653.961964,299.570966 656.30194,299.464266 C658.832644,299.348801 659.59174,299.324317 666.000048,299.324317 Z M666.000048,306.675683 C659.193424,306.675683 653.675683,312.193424 653.675683,319.000048 C653.675683,325.806576 659.193424,331.324317 666.000048,331.324317 C672.806576,331.324317 678.324317,325.806576 678.324317,319.000048 C678.324317,312.193424 672.806576,306.675683 666.000048,306.675683 Z M666.000048,327 C661.581701,327 658,323.418299 658,319.000048 C658,314.581701 661.581701,311 666.000048,311 C670.418299,311 674,314.581701 674,319.000048 C674,323.418299 670.418299,327 666.000048,327 Z M681.691284,306.188768 C681.691284,307.779365 680.401829,309.068724 678.811232,309.068724 C677.22073,309.068724 675.931276,307.779365 675.931276,306.188768 C675.931276,304.598171 677.22073,303.308716 678.811232,303.308716 C680.401829,303.308716 681.691284,304.598171 681.691284,306.188768 Z" id="Instagram"></path>
        </g>
        <g id="Credit" transform="translate(-1734.000000, -472.000000)"></g>
    </g>
</svg></a>
  
  
  <a title="Pinterest" class="pinterest" target="_blank" href="https://in.pinterest.com/insaraf/"><svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Pinterest</title>
    <defs></defs>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Black" transform="translate(-407.000000, -295.000000)" fill="#000000">
            <path d="M431.001411,295 C417.747575,295 407,305.744752 407,319.001411 C407,328.826072 412.910037,337.270594 421.368672,340.982007 C421.300935,339.308344 421.357382,337.293173 421.78356,335.469924 C422.246428,333.522491 424.871229,322.393897 424.871229,322.393897 C424.871229,322.393897 424.106368,320.861351 424.106368,318.59499 C424.106368,315.038808 426.169518,312.38296 428.73505,312.38296 C430.91674,312.38296 431.972306,314.022755 431.972306,315.987123 C431.972306,318.180102 430.572411,321.462515 429.852708,324.502205 C429.251543,327.050803 431.128418,329.125243 433.640325,329.125243 C438.187158,329.125243 441.249427,323.285765 441.249427,316.36532 C441.249427,311.10725 437.707356,307.170048 431.263891,307.170048 C423.985006,307.170048 419.449462,312.59746 419.449462,318.659905 C419.449462,320.754101 420.064738,322.227377 421.029988,323.367613 C421.475922,323.895396 421.535191,324.104251 421.374316,324.708238 C421.261422,325.145705 420.996119,326.21256 420.886047,326.633092 C420.725172,327.239901 420.23408,327.460046 419.686541,327.234256 C416.330746,325.865408 414.769977,322.193509 414.769977,318.064385 C414.769977,311.248368 420.519139,303.069148 431.921503,303.069148 C441.085729,303.069148 447.117128,309.704533 447.117128,316.819721 C447.117128,326.235138 441.884459,333.268478 434.165285,333.268478 C431.577174,333.268478 429.138649,331.868584 428.303228,330.279591 C428.303228,330.279591 426.908979,335.808608 426.615452,336.875463 C426.107426,338.724114 425.111131,340.575587 424.199506,342.014994 C426.358617,342.652849 428.63909,343 431.001411,343 C444.255248,343 455,332.255248 455,319.001411 C455,305.744752 444.255248,295 431.001411,295" id="Pinterest"></path>
        </g>
        <g id="Credit" transform="translate(-1499.000000, -472.000000)"></g>
    </g>
</svg></a>
  

  
</div>
      </div>
    </div>

    <div class="page-footer__row page-footer__row-spacing">
      <div class="copy">
        &copy; 2019 Saraf Furniture.

        

        

      </div>
      <span class="payment-methods">
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" height="24" width="38" role="img" aria-labelledby="pi-airtel_money"><title id="pi-airtel_money">Airtel Money</title><g fill-rule="evenodd" fill="none"><path fill="#EDEDED" d="M34.5 24h-31C1.6 24 0 22.4 0 20.5v-17C0 1.6 1.6 0 3.5 0h31C36.4 0 38 1.6 38 3.5v17c0 1.9-1.6 3.5-3.5 3.5z"/><path fill="#fff" d="M3.5 1C2.1 1 1 2.1 1 3.5v17C1 21.9 2.1 23 3.5 23h31c1.4 0 2.5-1.1 2.5-2.5v-17C37 2.1 35.9 1 34.5 1h-31z"/><path fill="#EB2227" d="M22.3 3c.6.1 1.2.2 1.7.3 2.2.4 3.9 2 4.5 4.1.3 1.6.1 3.3-.7 4.7-.9 1.8-2.1 3.3-3.7 4.5-2.1 1.8-4.6 3.2-7.3 4.1-.6.2-1.3.3-1.9.3-1.1.1-2.1-.7-2.2-1.8v-.5c.2-2.1 1.7-3.8 3.8-4.4.5 0 1 0 1.4.2.5.2.8.8.6 1.4-.1.2-.2.3-.3.4-.4.4-.8.8-1.2 1.1s-.7.6-1 1c-.2.2-.3.4-.4.6-.2.4 0 .6.4.6.2 0 .4 0 .6-.1 3.5-1.3 6.3-3.7 8.1-6.9.3-.5.4-1 .4-1.6.1-1.7-1-2.7-2.6-2.2-1.2.4-2.5.9-3.6 1.5-1.2.6-2.4 1.4-3.6 2-.9.5-1.9.8-3 .9-.5.1-1 0-1.4-.1-1-.1-1.8-1.1-1.6-2.3 0-.1 0-.2.1-.3.5-1.4 1.4-2.7 2.6-3.5 2.3-1.8 5-3.1 7.9-3.7.5-.1 1.1-.2 1.6-.3h.8z"/></g></svg>
        
          <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#002663"/><path d="M8.971 10.268l.774 1.876H8.203l.768-1.876zm16.075.078h-2.977v.827h2.929v1.239h-2.923v.922h2.977v.739l2.077-2.245-2.077-2.34-.006.858zm-14.063-2.34h3.995l.887 1.935L16.687 8h10.37l1.078 1.19L29.25 8h4.763l-3.519 3.852 3.483 3.828h-4.834l-1.078-1.19-1.125 1.19H10.03l-.494-1.19H8.406l-.495 1.19H4L7.286 8h3.43l.267.006zm8.663 1.078h-2.239l-1.5 3.536-1.625-3.536H12.06v4.81l-2.06-4.81H8.007l-2.382 5.512H7.18l.494-1.19h2.596l.494 1.19h2.72v-3.935l1.751 3.941h1.19l1.74-3.929v3.93h1.458l.024-5.52zm9.34 2.768l2.531-2.768h-1.822l-1.601 1.726-1.548-1.726h-5.894v5.518h5.81l1.614-1.738 1.548 1.738h1.875l-2.512-2.75z" fill="#FFF"/></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-diners_club"><title id="pi-diners_club">Diners Club</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z" fill="#3086C8"/></svg>
        
          <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-discover"><title id="pi-discover">Discover</title><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"/><path d="M37 16.95V21c0 1.1-.9 2-2 2H23.228c7.896-1.815 12.043-4.601 13.772-6.05z" fill="#EDA024"/><path fill="#494949" d="M9 11h20v2H9z"/><path d="M22 12c0 1.7-1.3 3-3 3s-3-1.4-3-3 1.4-3 3-3c1.7 0 3 1.3 3 3z" fill="#EDA024"/></svg>

        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" height="24" width="38" role="img" aria-labelledby="pi-freecharge"><title id="pi-freecharge">Freecharge</title><g fill-rule="evenodd" fill="none"><path fill="#EDEDED" d="M34.5 24h-31C1.6 24 0 22.4 0 20.5v-17C0 1.6 1.6 0 3.5 0h31C36.4 0 38 1.6 38 3.5v17c0 1.9-1.6 3.5-3.5 3.5z"/><path fill="#fff" d="M3.5 1C2.1 1 1 2.1 1 3.5v17C1 21.9 2.1 23 3.5 23h31c1.4 0 2.5-1.1 2.5-2.5v-17C37 2.1 35.9 1 34.5 1h-31z"/><circle cy="12" cx="19" r="9" fill="#E2704D"/><path fill="#fff" d="M16.6 11.7l.1-1.4s.7.1.9-.1c.4-.3.4-.9.5-1.2.3-1.4 2-2.2 3.8-1.7l-.2 1.4s-.1-.1-.4-.1c-1.1-.1-1.6.2-1.7 1.7h1.5l-.2 1-2.4 2.4h1.4c-1.2 1.3-2.8 2.9-3.8 3.8l1.3-2.6h-1.1c1-1.9 1-2 1.7-3.3"/></g></svg>
        
          <svg class="payment-icon" width="38" height="24" role="img" aria-labelledby="pi-jcb" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"><title id="pi-jcb">JCB</title><g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"/></g><path d="M11.5 5H15v11.5a2.5 2.5 0 0 1-2.5 2.5H9V7.5A2.5 2.5 0 0 1 11.5 5z" fill="#006EBC"/><path d="M18.5 5H22v11.5a2.5 2.5 0 0 1-2.5 2.5H16V7.5A2.5 2.5 0 0 1 18.5 5z" fill="#F00036"/><path d="M25.5 5H29v11.5a2.5 2.5 0 0 1-2.5 2.5H23V7.5A2.5 2.5 0 0 1 25.5 5z" fill="#2AB419"/><path d="M10.755 14.5c-1.06 0-2.122-.304-2.656-.987l.78-.676c.068 1.133 3.545 1.24 3.545-.19V9.5h1.802v3.147c0 .728-.574 1.322-1.573 1.632-.466.144-1.365.221-1.898.221zm8.116 0c-.674 0-1.388-.107-1.965-.366-.948-.425-1.312-1.206-1.3-2.199.012-1.014.436-1.782 1.468-2.165 1.319-.49 3.343-.261 3.926.27v.972c-.572-.521-1.958-.898-2.919-.46-.494.226-.737.917-.744 1.448-.006.56.245 1.252.744 1.497.953.467 2.39.04 2.919-.441v1.01c-.358.255-1.253.434-2.129.434zm8.679-2.587c.37-.235.582-.567.582-1.005 0-.438-.116-.687-.348-.939-.206-.207-.58-.469-1.238-.469H23v5h3.546c.696 0 1.097-.23 1.315-.415.283-.25.426-.53.426-.96 0-.431-.155-.908-.737-1.212zm-1.906-.281h-1.428v-1.444h1.495c.956 0 .944 1.444-.067 1.444zm.288 2.157h-1.716v-1.513h1.716c.986 0 1.083 1.513 0 1.513z" fill="#FFF" fill-rule="nonzero"/></g></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-maestro"><title id="pi-maestro">Maestro</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><circle fill="#EB001B" cx="15" cy="12" r="7"/><circle fill="#00A2E5" cx="23" cy="12" r="7"/><path fill="#7375CF" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><circle fill="#EB001B" cx="15" cy="12" r="7"/><circle fill="#F79E1B" cx="23" cy="12" r="7"/><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="38" height="24" role="img" aria-labelledby="pi-mobikwik"><title id="pi-mobikwik">MobiKwik</title><rect x=".5" y=".5" width="37" height="23" rx="3" ry="3" fill="#fff" stroke="#000" stroke-opacity=".07"/><path d="M31.15 8.52a3.33 3.33 0 0 0-1 .1c-.25.05-.49.17-.75.23a5.29 5.29 0 0 1-.65.07c.07-1 .12-2 .2-3a1 1 0 0 0-.87-1.15 7.37 7.37 0 0 0-1.07 0v-.41a.75.75 0 0 0-.94-.82l-.7.11-7 1.17v7.08a3.94 3.94 0 0 1-.2.91c-.08.31-.17.63-.26 1a.16.16 0 0 0 0 .14l3.75-7.33A1.07 1.07 0 0 1 22.91 6a1.06 1.06 0 0 1 .84 1.07v9.7a1.09 1.09 0 0 1-2.17 0v-5h-.08l-2.92 5.6q-.17.33-.36.63a1.09 1.09 0 0 1-1.21.45 1 1 0 0 1-.75-1V8.84h-.13l-5.42 10.29a1.12 1.12 0 1 1-2-1c.62-1.13 1.21-2.24 1.79-3.34l4.92-9.47-6.32 1a1.42 1.42 0 0 0-1.1.94v13.08A1 1 0 0 0 9 21h15.29a1.12 1.12 0 0 0 1.2-.92l.06-.23h1.1a.81.81 0 0 0 .75-.39 2.05 2.05 0 0 0 .27-.67c.08-.44.11-.9.16-1.35q.26-2.42.51-4.85a.19.19 0 0 1 .19-.2c.26 0 .5-.09.75-.14a4.5 4.5 0 0 0 1.86-.75A2 2 0 0 0 32 9.7a1.08 1.08 0 0 0-.85-1.18zm-3.37-2.6c-.1.67-.14 1.36-.21 2-.12 1.18-.23 2.36-.35 3.55L26.86 15q-.16 1.5-.33 3a.63.63 0 0 1-.87.53L27 4.78a6 6 0 0 1 .55.45.75.75 0 0 1 .23.68zm2.47 5a.86.86 0 0 1-.84-.92.85.85 0 0 1 .85-.85.86.86 0 0 1-.01 1.73zm.56-.92a.55.55 0 0 1-.54.54.54.54 0 1 1 .54-.54z" fill="#26bcbc"/><path d="M18 13.89zm-8.64 6a1.12 1.12 0 0 1-.57-1.74c.54-1.15 1.13-2.26 1.71-3.36l5.75-11.05a1.12 1.12 0 0 1 1.44-.61 1.13 1.13 0 0 0-1.49.57l-5.91 11.16c-.6 1.14-1.2 2.26-1.78 3.39a1.13 1.13 0 0 0 1.43 1.63 1.11 1.11 0 0 1-.62 0zM21.71 6.57A1.06 1.06 0 0 1 22.79 6a1.07 1.07 0 0 0-1.15.55c-.81 1.57-2.11 4.22-2.92 5.88zm1 11.28a1.09 1.09 0 0 1-1.09-1.09v-5h-.12.06v5.07a1.1 1.1 0 0 0 2.2 0v-.1a1.09 1.09 0 0 1-1.1 1.12zM23.73 7a1 1 0 0 1 0 .11V7zM17 18.44a1 1 0 0 1-.75-1v-8.6h-.12v8.7a1.06 1.06 0 0 0 .79 1 1.1 1.1 0 0 0 1.08-.3 1.09 1.09 0 0 1-1 .2z" fill="#00aaa8"/></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="38" height="24" role="img" aria-labelledby="pi-netbanking"><title id="pi-netbanking">NetBanking</title><rect x=".5" y=".5" width="37" height="23" rx="3" ry="3" fill="#fff" stroke="#000" stroke-opacity=".07"/><path d="M19 4.5l-7.5 5.63h15L19 4.5zm6.56 13.13H12.44a.94.94 0 0 0-.94.94v.93h15v-.94a.94.94 0 0 0-.94-.93zm-5.62-6.57h1.88v5.63h-1.88zm3.75 0h1.88v5.63h-1.88zm-7.5 0h1.88v5.63h-1.88zm-3.75 0h1.88v5.63h-1.88z"/></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" height="24" width="38" role="img" aria-labelledby="pi-ola_money"><title id="pi-ola_money">Ola Money</title><g fill-rule="evenodd" fill="none"><path fill="#EDEDED" d="M34.5 24h-31C1.6 24 0 22.4 0 20.5v-17C0 1.6 1.6 0 3.5 0h31C36.4 0 38 1.6 38 3.5v17c0 1.9-1.6 3.5-3.5 3.5z"/><path fill="#fff" d="M3.5 1C2.1 1 1 2.1 1 3.5v17C1 21.9 2.1 23 3.5 23h31c1.4 0 2.5-1.1 2.5-2.5v-17C37 2.1 35.9 1 34.5 1h-31z"/><ellipse rx="8.8" ry="9" cy="12" cx="19" fill="#378F43"/><path fill="#8BC249" d="M19.1 8.8L17 15.4h-2.2l2.1-6.6zm4.1 0l-2.1 6.5h-2.3l2.1-6.6z"/><path fill="#fff" d="M12.7 8.8l2.1 6.6H17l-2-6.6h-2.3zm4.2 0l2.1 6.6h2.3l-2.1-6.6h-2.3zm4.1 0l2.1 6.6h2.3l-2.1-6.6H21z"/></g></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="38" height="24" role="img" aria-labelledby="pi-payzapp"><title id="pi-payzapp">PayZapp</title><rect x=".5" y=".5" width="37" height="23" rx="3" ry="3" fill="#fff" stroke="#000" stroke-opacity=".07"/><path d="M18.3 4.92H12v6.37h2.45V7.4h3.85V4.92zm1.4 0V7.4h3.86v3.89H26V4.92h-6.3zm3.85 7.78v3.9H19.7v2.47H26v-6.36h-2.45zm-9.1 3.9v-3.89H12v6.36h6.3V16.6h-3.85z" fill="#ed232a"/><path d="M16.91 9.88h4.19v4.24H17z" fill="#004c8f"/></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-rupay"><title id="pi-rupay">RuPay</title><g fill="none" fill-rule="evenodd"><rect stroke-opacity=".07" stroke="#000" fill="#FFF" x=".5" y=".5" width="37" height="23" rx="3"/><path fill="#097A44" d="M32 15.77l2-7.41 2 3.82z"/><path fill="#F46F20" d="M30.76 15.79l2-7.4 2 3.82z"/><path d="M20.67 8.2a2 2 0 0 0-1.56-.56h-3l-1.95 6.81h1.75l.66-2.31h1.23a3.4 3.4 0 0 0 1.9-.5 2.93 2.93 0 0 0 1.12-1.72 1.77 1.77 0 0 0-.15-1.72zm-3.21.94h1.12a.76.76 0 0 1 .55.15c.11.11.07.35 0 .53a1.08 1.08 0 0 1-.4.62 1.21 1.21 0 0 1-.7.2H17l.46-1.5zM9.14 9a1.64 1.64 0 0 0-.2-.61 1.3 1.3 0 0 0-.58-.53 2.75 2.75 0 0 0-1.08-.18H4l-2 6.75h1.73l.72-2.52H5.7c.47 0 .58.1.6.13.02.03.09.15 0 .65l-.16.6a3.35 3.35 0 0 0-.11.59v.55h1.79l.12-.43-.11-.08s-.07-.05-.06-.2c.027-.19.07-.377.13-.56l.1-.42a2.14 2.14 0 0 0 .1-1.11.88.88 0 0 0-.26-.41 2 2 0 0 0 .68-.54 2.79 2.79 0 0 0 .53-1c.07-.22.101-.45.09-.68zm-1.86.83a.84.84 0 0 1-.5.6 1.79 1.79 0 0 1-.64.09H4.86l.38-1.33h1.43a1.1 1.1 0 0 1 .53.09c.05 0 .21.07.08.5v.05zm4.9 2.17a2.11 2.11 0 0 1-.3.67 1 1 0 0 1-.87.43c-.34 0-.36-.14-.38-.2a1.24 1.24 0 0 1 .07-.52l.89-3.11H9.9l-.86 3a3 3 0 0 0-.15 1.32c.08.42.4.91 1.41.91.247.004.493-.03.73-.1a2.51 2.51 0 0 0 .6-.29l-.08.3h1.62l1.47-5.13H13L12.18 12zm12.93 1.1l.63-2.18c.24-.83-.07-1.21-.37-1.39A2.75 2.75 0 0 0 24 9.2a2.87 2.87 0 0 0-2 .68 2.75 2.75 0 0 0-.69 1.1l-.09.26h1.61v-.11a1.15 1.15 0 0 1 .25-.37.84.84 0 0 1 .56-.17.89.89 0 0 1 .46.08v.18c0 .06 0 .15-.25.23a2.13 2.13 0 0 1-.48.1l-.44.05a4 4 0 0 0-1.25.32c-.57.271-.99.78-1.15 1.39a1.25 1.25 0 0 0 .17 1.22c.289.307.7.468 1.12.44a2.43 2.43 0 0 0 1.07-.25l.4-.23v.33H25l.13-.48-.13-.07a.61.61 0 0 1 0-.22c0-.25.07-.43.11-.58zm-2.92-.1a.62.62 0 0 1 .34-.4 2.17 2.17 0 0 1 .57-.15l.29-.05.3-.07v.07a1.24 1.24 0 0 1-.51.75 1.44 1.44 0 0 1-.72.21.34.34 0 0 1-.25-.08.55.55 0 0 1-.02-.28zm7.91-3.68l-1.69 3v-3h-1.8l.39 5.13-.12.19a.8.8 0 0 1-.23.25.64.64 0 0 1-.24.08h-.68l-.39 1.37h.83a2 2 0 0 0 1.29-.34 9.55 9.55 0 0 0 1.27-1.71l3.17-5-1.8.03z" fill="#302F82"/></g></svg>
        
          <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"/></svg>
        
       
        <img src="https://cdn.shopify.com/s/files/1/0191/2234/files/amazon_pay_logo.jpg?9221883402591214145" class="payment-icon2">
      <img src="https://cdn.shopify.com/s/files/1/0191/2234/files/paytm-512_1.png?7175440311922035152" class="payment-icon1">
      </span>
    </div>
  </div>
</div>



</div>

  </div>

  <script src="//cdn.shopify.com/s/files/1/0191/2234/t/38/assets/vendor.js?13577491605170241586" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/0191/2234/t/38/assets/theme.js?13577491605170241586" type="text/javascript"></script>

  

<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0191/2234/t/38/assets/jquery.currencies.min.js?13577491605170241586" type="text/javascript"></script>

<script>

  
  Currency.format = 'money_with_currency_format';
  

  var shopCurrency = 'INR';

  /* To do every time the currency is set */
  function onCurrencyChange(){
    jQuery('.selected-currency').text(Currency.currentCurrency);
    jQuery('.currency-different').toggle(Currency.currentCurrency != shopCurrency);
  }

  /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
  Currency.moneyFormats[shopCurrency].money_with_currency_format = "Rs. {{amount}} ";
  Currency.moneyFormats[shopCurrency].money_format = "Rs. {{amount}} ";

  /* Default currency */
  var defaultCurrency = "INR" || shopCurrency;

  /* Cookie currency */
  var cookieCurrency = Currency.cookie.read();

  /* Saving the current price */
  jQuery(theme.money_container).each(function() {
    jQuery(this).attr('data-currency-'+"INR", jQuery(this).html());
  });

  // If there's no cookie.
  if (cookieCurrency == null) {
    if (shopCurrency !== defaultCurrency) {
      Currency.convertAll(shopCurrency, defaultCurrency, theme.money_container);
    }
    else {
      Currency.currentCurrency = defaultCurrency;
    }
  }
  // If the cookie value does not correspond to any value in the currency dropdown.
  else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
    Currency.currentCurrency = shopCurrency;
    Currency.cookie.write(shopCurrency);
  }
  else if (cookieCurrency === shopCurrency) {
    Currency.currentCurrency = shopCurrency;
  }
  else {
    Currency.convertAll(shopCurrency, cookieCurrency, theme.money_container);
  }

  jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
    var newCurrency = jQuery(this).val();
    Currency.convertAll(Currency.currentCurrency, newCurrency, theme.money_container);
    onCurrencyChange();
  });

  var original_selectCallback = window.selectCallback;
  var selectCallback = function(variant, selector) {
    original_selectCallback(variant, selector);
    Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val(), theme.money_container);
    onCurrencyChange();
  };

  onCurrencyChange();

</script>


  <style>.mw-product-options .mw-init-spinner{width:100%;text-align:center}.mw-product-options .mw-init-spinner>div{width:18px;height:18px;background-color:#999;border-radius:100%;display:inline-block;-webkit-animation:sk-bouncedelay 1.4s infinite ease-in-out both;animation:sk-bouncedelay 1.4s infinite ease-in-out both}.mw-product-options .mw-init-spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.mw-product-options .mw-init-spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes sk-bouncedelay{0%,100%,80%{-webkit-transform:scale(0)}40%{-webkit-transform:scale(1)}}@keyframes sk-bouncedelay{0%,100%,80%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}</style>
<script type="text/javascript"></script>
<script type="text/javascript">
window.mwProductOptionsObjects = {
  product: null,
  cart: {"token":"134cee04cc0a38e6b10ae6ba83c646c9","note":null,"attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"INR"},
  template_name: "collection",
  shop: {
    domain: "saraf-furniture.myshopify.com",
    money_format : "\u003cspan class=money\u003eRs. {{amount}} \u003c\/span\u003e",
    money_with_currency_format : "\u003cspan class=money\u003eRs. {{amount}} \u003c\/span\u003e"
  }
};



function mwShowInitSpinner() {
  var opt = document.getElementsByClassName('mw-product-options');
  if (opt.length > 0) {
    var timeSpinner = 6000;
    opt[0].innerHTML = '<div id="mw-apo-init-spinner" class="mw-init-spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>';
    setTimeout(function(){ var spinner = document.getElementById('mw-apo-init-spinner'); spinner && spinner.parentNode.removeChild(spinner); }, timeSpinner);
  }
}
mwShowInitSpinner();
  
  window.onload = function() {
  
  function mwApoCustom() {
    if (typeof jQuery === "undefined") {
      return;
    }
    jQuery("body").on("mw_apo", function(event, action) {
      if (action === "end-initialize") {
      var qty = $('.quantadd')

      var button = $('#mwAddToCart');

      qty.prepend(button)
      }
    });
  }
  mwApoCustom();
};
</script>
  <script async type="text/javascript" data-api-key="" id="stamped-script-widget" src="https://cdn-stamped-io.azureedge.net/files/widget.min.js"></script>

  </body>
</html>