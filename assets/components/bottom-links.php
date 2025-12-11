<script>
    const phoneInputField = document.querySelector(".mobile_code");
    const countryCodeInput = document.querySelector(".country_code");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "in",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        separateDialCode: false,
        nationalMode: false,
        preferredCountries: ["in"]
    });

    phoneInputField.addEventListener('countrychange', function() {
        countryCodeInput.value = phoneInput.getSelectedCountryData().dialCode;
    });
</script>


  




<!-- jquery js -->
<script src="assets/js/plugins/jquery.min.js"></script>
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!-- magnific-popup js -->
<script src="assets/js/plugins/magnific-popup.js"></script>
<!-- onepage js -->
<script src="assets/js/plugins/onepage.js"></script>
<!-- swiper js -->
<script src="assets/js/plugins/swiper.min.js"></script>
<!-- isotope js -->
<script src="assets/js/plugins/isotope.min.js"></script>

<!-- treto js -->
<script src="assets/js/main.js"></script>
<script type='text/javascript'>
    //<![CDATA[
    var uri = window.location.toString();
        if (uri.indexOf("%3D","%3D") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("%3D"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    var uri = window.location.toString();
        if (uri.indexOf("%3D%3D","%3D%3D") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("%3D%3D"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    var uri = window.location.toString();
        if (uri.indexOf("&i=1","&i=1") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("&i=1"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    var uri = window.location.toString();
        if (uri.indexOf("?i=1","?i=1") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?i=1"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    //]]>
    </script>