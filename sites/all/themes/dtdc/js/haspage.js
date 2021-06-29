jQuery(window).on('hashchange', function() {
  //.. work ..
  var titles = document.getElementsByClassName('services-email-title');
  console.log(titles)
  var titleObj = {
    "crossborder" : "Cross Border Management",
    "integrated" : "Integrated Technology Platform",
    "multivendor" : "Multi-Vendor Management",
    "warehousing" : "Warehousing & E-Fulfilment",
    "lastmile" : "Last Mile Delivery"
  }
  var selectedTitle = window.location.href.split('#')[1];
  var selectedTitleValue = titleObj[selectedTitle];
  console.log(selectedTitleValue);

  var titleInput = document.querySelector('.service-title-email input');
  titleInput.value = selectedTitleValue;

  console.log(titleInput.value);
});
