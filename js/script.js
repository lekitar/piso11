//Slider
$(document).ready(function(){
  $('.slider-home').slick({
    dots: false,
    arrows: false,
  });


});
$(document).ready(function(){
  $('.slider-home-movil').slick({
    dots: false,
    arrows: false,
  });


});


//Modal Registro
$('#modal-registro').on('shown.bs.modal', function () {
  $('#modal-registro').focus()
})
//Modal confirmacion
$('#modal-confirmacion').on('shown.bs.modal', function () {
  $('#modal-confirmacion').focus()
})

//Modal Informacion hotel  

$('#mapa-hotel').on('shown.bs.modal', function () {
  $('#mapa-hotel').focus()
})
$('#descripcion-hotel').on('shown.bs.modal', function () {
  $('#descripcion-hotel').focus()
})
// Open the Modal
function openModal() {
  $("#fotos-modal").fadeIn("slow").css("display","block");


}

// Close the Modal
function closeModal() {
  $("#fotos-modal").fadeOut("slow");

}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }

      $(slides[slideIndex-1]).fadeToggle("slow");
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }


// Informacion hotel  


 //external js: masonry.pkgd.js, imagesloaded.pkgd.js

 //init Masonry after all images have loaded

$('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  // use element for option
  columnWidth: '.grid-sizer',
  percentPosition: true,
  gutter: 10
})

$('.grid-interno').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item2',
  // use element for option
  columnWidth: '.grid-sizer2',
  percentPosition: true,
  gutter: 10
})




$("[data-toggle=popover]").each(function(i, obj) {

  $(this).popover({
    html: true,
    content: function() {
      var id = $(this).attr('id')
      return $('#popover-content-' + id).html();

    }
  });

});



$("[data-toggle=popover2]").each(function(i, obj) {

  $(this).popover({
    html: true,
    trigger: 'click',
    template: '<div class="popover awesome-popover-class"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>',

    content: function() {
      var id = $(this).attr('id')
      return $('#popover-content-' + id).html();
    }
  });
  
});




$(function () {
  $('#datetimepicker6').datetimepicker({

    minDate: new Date(),
    format: 'YYYY-MM-DD',

  });
  $('#datetimepicker7').datetimepicker({
    format: 'YYYY-MM-DD',
    useCurrent: false //Important! See issue #1075
  });
  $("#datetimepicker6").on("dp.change", function (e) {
    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
  });
  $("#datetimepicker7").on("dp.change", function (e) {
    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
  });
});

$(function () {
  $('#datetimepicker6-mv').datetimepicker({

    minDate: new Date(),
    format: 'YYYY-MM-DD',

  });
  $('#datetimepicker7-mv').datetimepicker({
    format: 'YYYY-MM-DD',
    useCurrent: false //Important! See issue #1075
  });
  $("#datetimepicker6-mv").on("dp.change", function (e) {
    $('#datetimepicker7-mv').data("DateTimePicker").minDate(e.date);
  });
  $("#datetimepicker7-mv").on("dp.change", function (e) {
    $('#datetimepicker6-mv').data("DateTimePicker").maxDate(e.date);
  });
});






var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
      datasets: [{
        label: "Usuarios Registrados",
        backgroundColor: 'rgb(69, 150, 132)',
        borderColor: 'rgb(80, 227, 194)',
        data: [0, 10, 5, 2, 20,3, 45],
      }]
    },

    // Configuration options go here
    options: {}
  });


// For a pie chart
var ctx = document.getElementById('myPie').getContext('2d');
var myPieChart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
      labels: ["Pagado","Pendiente"],
      datasets: [{
        label: " ",
        data: [3,25],
        backgroundColor: ['rgb(74, 144, 226)','rgb(253, 178, 58)'],
      }]
    },

    // Configuration options go here
    options: {}
  });

$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

myDropzone.on("complete", function(file) {
  myDropzone.removeFile(file);
});


 $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
          $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
          $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
          $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });