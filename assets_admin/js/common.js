$(function() {

    app.modules.api.isAuth(function(err, data){
        if(!data) {
            window.location = config.languages[app.modules.global.currentLang].url_landing;
        } else {
            app.modules.api.me(function(err, data) {
                app.modules.user.init(data, function() {
                    if(app.modules.user.isConfirmedEmail()) {
                        app.modules.global.init();
                        app.modules.global.changePage(PAGES.index,function() {
                            app.modules.user.checkIsWinnerLottery();
                        });
                    } else {
                        app.modules.global.initVerifyAccount();
                    }
                    app.modules.global.loadingGlobal.hide();
                });
            });
        }
    })
});