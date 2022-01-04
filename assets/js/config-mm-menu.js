jQuery(document).ready(function( $ ) {
  $("nav#menu").mmenu({
     "extensions": [
        "pagedim-black",
        "shadow-page"
     ],
     "offCanvas": {
        zposition   : "front"
     },
     "searchfield" : {
     "placeholder" : 'Looking for any product..?'
    },
    "navbar" : {
            title : 'RR Foods Products'
          },
     "navbars": [
        {
           "position": "top",
           "content": [
             '<img src="./assets/images/logo.png" class="img-responsive" style="height: 35px;" alt="Image">'
           ]
        },
        {
          "position"  : 'top',
          "content"   : [ 'searchfield' ]
        }, {
          "position"  : 'top',
          "content"   : [ 'breadcrumbs' ]
        },
        {
           "position": "bottom",
           "content": [
              "<a class='fa fa-envelope' href='#/'></a>",
              "<a class='fa fa-twitter' href='#/'></a>",
              "<a class='fa fa-facebook' href='#/'></a>"
           ]
        }
     ]
  });
});