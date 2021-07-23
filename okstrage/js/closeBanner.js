//20210209追加 「閉じる」ボタンを押すと消える追尾バナーのjs
$(function() {
    var topBtn = $('.closeBanner');
    var closeButtonClicked = false;

    topBtn.hide();
    //スクロールが300に達したらバナー表示
    $(window).scroll(function () {
        if (closeButtonClicked) return; // クリックされていたら以下を実行しない。
        if ($(this).scrollTop() > 300) {
        //バナーの表示方法
            topBtn.fadeIn();
        } else {
        //バナーの非表示方法
            topBtn.fadeOut();
        }
    });
    // 閉じるボタン
    topBtn.click(function () {
        $(this).css("display","none");
        closeButtonClicked = true;
    });
});

// pageTopを滑らかに移動させるjs
$(function () {
    var topBtn = $('#pagetop');
    topBtn.hide();
    //スクロールが300に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールでトップへもどる
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});