// npm package: bootstrap-maxlength
// github link: https://github.com/mimo84/bootstrap-maxlength

'use strict';

(function () {

  $("#category_name_az").maxlength({
    warningClass: "badge mt-1 bg-success",
    limitReachedClass: "badge mt-1 bg-danger"
  });
  $('#category_name_en').maxlength({
    warningClass: "badge mt-1 bg-success",
    limitReachedClass: "badge mt-1 bg-danger"
  });
  $('#category_name_ru').maxlength({
    warningClass: "badge mt-1 bg-success",
    limitReachedClass: "badge mt-1 bg-danger"
  });

})();