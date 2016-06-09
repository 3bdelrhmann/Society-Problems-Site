  $(document).ready(function () {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal({
          dismissible: true
      });

      $('.dropdownToggle').click(function () {
          $('.dropdown').slideToggle();
      });

      $('.mobile-toggle').click(function () {
          $('.navbar').slideToggle();
          $('.dropdown').slideUp();
      });
  });