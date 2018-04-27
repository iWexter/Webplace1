<script>
idp = 344806002657871;</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '247075529193088',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });
      
    FB.AppEvents.logPageView();
    
    FB.getLoginStatus(function(response) {
        console.log(response);
    });
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
          FB.api(
            '/me',
            'GET', {
              "fields": "accounts{name,access_token,id}"
            },
            function(response) {
              console.log(response.accounts.data);
              console.log(response.accounts.data.id);
              FB.api(
                '/' + idp,
                'GET', {
                  "fields": "id,access_token"
                },
                function(response) {
                  console.log(response);
                  console.log(response.access_token);
                  var at = response.access_token;
                  FB.api(
                    '/344806002657871/photos',
                    'POST', {
                      "message": "Churros :v",
                      "link": "https://www.rubios.com/sites/default/files/styles/menu_item_cropped/public/menu/churros.jpg?itok=GWFxLVTM",
                      "access_token": at
                    },
                    function(response) {
                      console.log(response);
                    }
                  );
                  // FB.api(
                  //   '/' + idp + '/feed',
                  //   'POST', {
                  //     "message": msg,
                  //     "link": link,
                  //     "access_token": at,
                  //     "fields": "created_time,from,id,message,permalink_url"
                  //   },
                  //   function(response) {
                  //     console.log(response);
                  //   }
                  // );

                }
              );
            }
          );

        } else {
          FB.login(function(response) {
            // handle the response
          }, {
            scope: 'manage_pages,pages_show_list,publish_pages'
          });
        }
    });
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>