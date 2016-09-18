$(function() { // Wait for page to load

  console.log("TESTING TESTING");
  var container1 = $('.image-container')[0];
  var container2 = $('.image-container')[1];
  var container3 = $('.image-container')[2];

  $(container1).nextUntil(container2).wrapAll( "<div class='ftf-container-01'><div class='ftf-text'</div></div>" );
  $(container1).appendTo('.ftf-container-01');
  $(container2).nextUntil(container3).wrapAll( "<div class='ftf-container-02'><div class='ftf-text'</div></div>" );
  $(container2).appendTo('.ftf-container-02');
  $(container3).nextUntil('footer').wrapAll( "<div class='ftf-container-03'><div class='ftf-text'</div></div>" );
  $(container3).appendTo('.ftf-container-03');
 
  var biggestHeight = "0";
  $(".ftf-container-01").children('.image-container, div').each(function() {
    // console.log(this);
    // console.log("This item is " + $(this).height());
    if ($(this).height() > biggestHeight ) {
      biggestHeight = $(this).outerHeight();
      // console.log("Biggest height: " + biggestHeight);
    }
  });
  console.log("Setting 01 to " + biggestHeight);
  $(".ftf-container-01").height(biggestHeight);

  biggestHeight = "0";
  $(".ftf-container-02").children('.image-container, div').each(function() {
    // console.log(this);
    // console.log("This item is " + $(this).height());
    if ($(this).height() > biggestHeight ) {
      biggestHeight = $(this).outerHeight();
      // console.log("Biggest height: " + biggestHeight);
    }
  });
  console.log("Setting 02 to " + biggestHeight);
  $(".ftf-container-02").height(biggestHeight);

  biggestHeight = "0";
  $(".ftf-container-03").children('.image-container, div').each(function() {
    // console.log(this);
    // console.log("This item is " + $(this).height());
    if ($(this).height() > biggestHeight ) {
      biggestHeight = $(this).outerHeight();
      // console.log("Biggest height: " + biggestHeight);
    }
  });
  console.log("Setting 03 to " + biggestHeight);
  $(".ftf-container-03").height(biggestHeight);

});
