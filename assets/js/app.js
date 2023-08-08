$(document).ready(function () {
  M.AutoInit();

  $(".dropdown-trigger").dropdown({
    hover: true,
    coverTrigger: false,
    constrainWidth: false,
  });

  // Progress
  ToxProgress.create();
  ToxProgress.animate();
  // smooth
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      // On-page links
      if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000,
            function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              // $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                //$target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });

  // resposive owl
  $(".workflow").owlCarousel({
    loop: true,
    margin: 10,
    //responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1.1,
      },
      600: {
        items: 3.1,
      },
      1000: {
        items: 4.2,
      },
    },
  });
});

function saveContactInfo(form, event) {
  event.preventDefault();

  const email = form.email.value;
  const name = form.name.value;
  const message = form.msg.value;

  if (!email || !name || !message) {
    M.toast({ html: "Please fill all the fields" });
    return;
  }

  const data = {
    email,
    name,
    message,
  };

  // SEND POST REQUEST TO SERVER WITH DATA USING AJAX
  $.ajax({
    type: "POST",
    url: "/contactus.php",
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.success) {
        M.toast({ html: `${response.message}`, classes: "green white-text" });
      } else {
        M.toast({ html: `${response.message}`, classes: "red white-text" });
      }
    },
    error: function (error) {
      M.toast({ html: "Something went wrong" } , "red white-text");
    },
  });
}
