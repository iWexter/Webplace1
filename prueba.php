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
        if (response.status === 'connected') {
            FB.api(
                    '/344806002657871/photos',
                    'POST', {
                        "url":"https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Ship_diagram-numbers.svg/341px-Ship_diagram-numbers.svg.png", 
                        "access_token": "EAADgtsEmdoABAD3fZASrQhUDtr7abwZBzxJbHnHctt78fuAGpGCFRAlmukaS6Ryn33FlMEHI79nF41e3uba0HiSp8rqrMK2cJbmuAA4o98i7mtcD5pg8Rexvf0LF7uI1N7BvjpCjYuIjjfojZCl1jOr8NpS0m8yzRYHqExOzOlZCmbaHvVRrcmh4gipD9iiLDHpPuXVn7wZDZD"
                    },
                    function(response) {
                      console.log(response);
                    }
            );

        } else {
            FB.login(function(response) {
                console.log(response);
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
