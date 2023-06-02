<div class="card">
  <div class="card-body">
    <h3 class="pb-3">One step closer to <span class="underline-3 style-3 green">become the best</span></h3>
    <form>
      <div class="form-floating mb-4">
        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
        <label for="textInputExample">Full Name</label>
      </div>
      <div class="form-floating mb-4">
        <input id="textInputExample" type="email" required class="form-control" placeholder="Text Input">
        <label for="textInputExample">Email Address</label>
      </div>
      <div class="form-floating mb-4">
        <input id="phone" name="phone" type="tel" class="form-control">
        <!-- <label for="textInputExample">Phone Number</label> -->
      </div>
      <div class="mb-4">
        <span class="badge bg-yellow rounded fs-15 w-100 p-2">Do you have a manuscript that is ready to be published?</span>
      </div>
      <div class="form-select-wrapper mb-4">
        <select class="form-select" aria-label="Default select example">
          <option selected>Select...</option>
          <option value="1">Ghostwriting</option>
          <option value="2">Editing</option>
          <option value="3">Ebook</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary rounded w-100">Send Request</button>
    </form>
  </div>
</div>
<script src="assets/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
    utilsScript: "assets/js/utils.js",
  });
</script>