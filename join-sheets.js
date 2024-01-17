document.getElementById("email-form").addEventListener("submit", function (e) {
  e.preventDefault();
  var userEmail = document.getElementById("user-email").value;
  var url =
    "https://script.google.com/macros/s/AKfycbz_FlL5yxZ8HSvXQsWYPArid0aGzfbcIs7XOl9Izz3Cokw2DOU5MrjEbgQYxpHsh1ZH/exec";
  fetch(url, {
    method: "POST",
    mode: "no-cors",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "email=" + encodeURIComponent(userEmail),
  });
});
