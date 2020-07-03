      $(document).ready(function() {
              function setHeight() {
                windowHeight = $(window).innerHeight();
                $('#dynamicHeight').css('min-height', windowHeight);
              };
            setHeight();
              $(window).resize(function() {
                setHeight();
              });
        });
