function appPropagation() {
    "use strict";

    $.ajax({
		type: 'POST',
        url: 'action/facebook_process.php',
        dataType: 'json',
        success: function (data) {
            console.log(data);
                // do whatever you want.
                // data.status: bool, true => login
                // [data.message: string]
                // [data.more: string]
        }
    });
}

function login() {
    "use strict";

    document.cookie = 'fb_token=' + FB.getAuthResponse().accessToken;
    appPropagation();
}

function logout() {
    "use strict";

    document.cookie = 'fb_token=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    appPropagation();
}

function loginStatusChangeCallback(response) {
    "use strict";

    if (response.status === 'connected') {
        login();
    } else {
        logout();
    }
}

function checkLoginState() {
    "use strict";

    FB.getLoginStatus(function (response) {
        loginStatusChangeCallback(response);
    });
}

window.fbAsyncInit = function () {
    "use strict";

    FB.init({
        appId      : '830496170354322',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.0'
    });

    checkLoginState();

};

(function (d, s, id) {
    "use strict";

    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

