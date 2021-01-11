jQuery(function($) {
  var loadMoreButton = $('#btn_load_more');

  if (loadMoreButton) {
    var loadPosts = function(page) {
      var theData, loadMoreContainer, errorStatus, errorMessage;

      $.ajax({
        url: 'http://localhost/unicorn/wp-json/wp/v2/posts',
        dataType: 'json',
        data: {
          'per_page': 4,
          'page': page,
          'orderby': 'title'
        },
        success: function(data) {
          if ( data.length < 1 ) {
            loadMoreButton.remove();
          }

          theData = [];

          for (i = 0; i < data.length; i++) {
            theData[i] = {};
            theData[i].id = data[i].id;
            theData[i].date = data[i].date;
            theData[i].slug = data[i].slug;
            theData[i].link = data[i].link;
            theData[i].title = data[i].title.rendered;
            theData[i].content = data[i].content.rendered;
            theData[i].author = data[i].author;
            theData[i].featured_media = data[i].featured_media;
          }

          loadMoreContainer = $('#load-more-div');

          $.each(theData, function(i) {
            loadMoreContainer.append('<article class="ajax-post">' + theData[i].author + theData[i].featured_media + theData[i].title + theData[i].date + theData[i].content + '</article>');
          });
        },
        error: function(jqXHR, textStatus, errorThrown) {
          errorStatus = jqXHR.status + ' ' + jqXHR.statusText + '\n';
          errorMessage = jqXHR.responseJSON.message;

          console.log(errorStatus + errorMessage);
        }
      });
    };

    var getPage = 2;

    loadMoreButton.on('click', function() {
      loadPosts(getPage);
      getPage++;
    });
  }
});