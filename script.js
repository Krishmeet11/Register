$(document).ready(function () {
  $("#regForm").on("submit", function () {
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let phone = $("#phone").val().trim();

    if (name === "" || email === "" || phone === "") {
      alert("Please fill in all required fields.");
      return false;
    }

    // small animation on submit
    $("button").text("Submitting...").css("background", "#22c55e");
    return true;
  });
});
