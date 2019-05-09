var input = document.querySelector("#phone");
window.intlTelInput(input, {
  initialCountry: "auto",
  geoIpLookup: function(callback) {
    $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
  utilsScript: 'js/utils.js',// just for formatting/placeholders etc
});



var iti = window.intlTelInput(input, {
  nationalMode: true,
  utilsScript: "/js/utils.js" // just for formatting/placeholders etc
});

var handleChange = function() {
  var text = (iti.isValidNumber()) ?   iti.getNumber() : "Please enter a number below";
  if(iti.isValidNumber())
  $('#phone').val(text);
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
input.addEventListener('keyup', handleChange);