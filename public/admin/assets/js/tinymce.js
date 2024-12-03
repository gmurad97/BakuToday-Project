// npm package: tinymce
// github link: https://github.com/tinymce/tinymce

'use strict';

(function () {

  const tinymceExample = document.querySelector('#tinymceExample');

  if (tinymceExample) {
    const options = {
      selector: '#tinymceExample',
      min_height: 350,
      default_text_color: 'red',
      plugins: [
        'advlist', 'autoresize', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons | codesample help',
      image_advtab: true,
      templates: [{
          title: 'Test template 1',
          content: 'Test 1'
        },
        {
          title: 'Test template 2',
          content: 'Test 2'
        }
      ],
      promotion: false,
    };

    const theme = localStorage.getItem('theme');
    if (theme === 'dark') {
      options["content_css"] = "dark";
      options["content_style"] = `body{background: ${getComputedStyle(document.documentElement).getPropertyValue('--bs-body-bg')}}`
    } else if (theme === 'light') {
      options["content_css"] = "default";
    }


    tinymce.init(options);
  }

})();