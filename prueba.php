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
                '/me/photos',
                'POST',
                {"url":"https://upload.wikimedia.org/wikipedia/commons/6/6f/Churros_Madrid.jpg"},
                function(response) {
                    console.log(response);
                }
            );

        } else {
          FB.login(function(response) {
            // handle the response
          }, {
            scope: 'ads_management, pages_manage_instant_articles, publish_pages, ads_read, pages_messaging, read_page_mailboxes, business_management, pages_messaging_phone_number, user_events, manage_pages, pages_messaging_subscriptions, user_managed_groups, pages_manage_cta, pages_show_list,publish_actions '
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
