"use strict";

var login = "";
var pass = "";

$("#login").on("input", function() {
  login = $("#login").val();
});

$("#password").on("input", function() {
  pass = $("#password").val();
});

$("form").on("input", function() {
  if (pass.length > 4 && login.length > 4) {
    $("#submit").removeAttr("disabled");
  } else {
    $("#submit").attr("disabled", true);
  }
});
