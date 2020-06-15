$(".container-2").hide();
$(".container-3").hide();

jQuery(function() {
  document.getElementById('number').onchange = setOlimp;
})

function setOlimp() {
  var olimpName = $('#number').val();

  if (olimpName == 'Олімпіада 2018 №1') {
    $(".container-1").show();
    $(".container-2").hide();
    $(".container-3").hide();

  } else if (olimpName == 'Олімпіада 2018 №2') {
    $(".container-1").hide();
    $(".container-2").show();
    $(".container-3").hide();
  } else if (olimpName == 'Олімпіада 2018 №3') {
    $(".container-1").hide();
    $(".container-2").hide();
    $(".container-3").show();
  }
}
