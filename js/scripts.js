$(document).ready(function() {
  // Log In button
  $('#login-button').click(function() {
    $('#register-form').css('visibility','hidden');
    $('#login-form').css('visibility', 'visible');
  })
  $('#register-button').click(function() {
    $('#register-form').css('visibility','visible');
    $('#login-form').css('visibility', 'hidden');
  })
})
