'use strict';

(function () {

  const body = document.body;

  //-------------------------------------------------------------------------------------------------------------
  // Buy Now & Doc buttons [only for server] 
  const buyNowWrapper  = document.createElement('div'),
        viewDemosLink        = document.createElement('a'),
        viewDemosLinkIcon    = document.createElement('i'),
        buyNowLink     = document.createElement('a'),
        buyNowLinkIcon = document.createElement('i'),
        viewDemosLinkHref    = 'https://nobleui.com/html/#demos',
        buyNowLinkHref = 'https://1.envato.market/nobleui_admin';

  buyNowWrapper.classList.add('buy-now-wrapper');
  
  buyNowLink.classList.add('btn', 'btn-primary');
  buyNowLink.innerText = 'Buy Now';
  buyNowLink.setAttribute('href', buyNowLinkHref);
  buyNowLink.setAttribute('target', '_blank');
  buyNowLinkIcon.classList.add('icon-lg', 'me-2');
  buyNowLinkIcon.setAttribute('data-feather', 'shopping-cart');

  viewDemosLink.classList.add('btn', 'btn-danger', 'ms-2');
  viewDemosLink.innerText = 'View Demos'
  viewDemosLink.setAttribute('href', viewDemosLinkHref);
  viewDemosLink.setAttribute('target', '_blank');
  viewDemosLinkIcon.classList.add('icon-lg', 'ms-1')
  viewDemosLinkIcon.setAttribute('data-feather', 'arrow-right');

  buyNowLink.prepend(buyNowLinkIcon);
  viewDemosLink.append(viewDemosLinkIcon);
  buyNowWrapper.append(buyNowLink, viewDemosLink);
  body.append(buyNowWrapper);



  //-------------------------------------------------------------------------------------------------------------
  // Initializing scrollspy
  var scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#sidebarNav'
  });



  //-------------------------------------------------------------------------------------------------------------
  // Codemirror
  document.querySelectorAll(".code-non-editable").forEach(function (editorEl) {
    CodeMirror.fromTextArea(editorEl, {
      mode: "javascript",
      theme: "xq-light",
      lineNumbers: false,
      readOnly: true,
      maxHighlightLength: 0,
      workDelay: 0
    });
  });
  
  
  
  // Enable feather-icons with SVG markup
  //-------------------------------------------------------------------------------------------------------------
  feather.replace();
  
})();    