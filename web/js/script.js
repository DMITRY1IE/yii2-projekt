function q() {
    alert('Вы нажали кнопку')
}


$("ul li a").click(function (e) {
    // Первое - отменить переход по ссылке 
    e.preventDefault();
    // Получаем ссылку на id элемента 
    const href = $(this).attr("href");
    // Останавливаем прошлую анимацию 
    $("html, body").stop();
    // Далее прокручиваем либо <html> либо <body> 
    // (универсально - оба: и <html> и <body>) 
    // методом $.animate(), 
    // первый параметр - вертикальное смещение элемента, 
    // второй параметр - это время в мс (2 сек). 
    $("html, body").animate({ scrollTop: $(href).offset().top }, 2000);
});
// Останавливаем анимацию при ручном скролле 
$('html, body').on('wheel', function (e) {
    $('html, body').stop();
    document.documentElement.scrollTop -= e.originalEvent.wheelDeltaY / 20;
});
let touches = [];
$('body')
    .on('touchstart', function (e) {
        const newTouches = [...e.originalEvent.changedTouches];
        for (let touch of newTouches) {
            touches.push(copyTouch(touch));
        }
        return false;
    })
    .on('touchmove', function (e) {
        const curTouches = [...e.originalEvent.changedTouches];
        let touchOffset = 0;
        for (let touch of curTouches) {
            const prevTouchIdx =
                touches.findIndex(prevTouch =>
                    prevTouch.identifier == touch.identifier);
            const prevPageY = touches[prevTouchIdx].pageY;
            Object.assign(touches[prevTouchIdx],
                copyTouch(touch));
            touchOffset += touch.pageY - prevPageY;
        }
        /*console.log(document.documentElement.scrollTop, 
        -touchOffset-(curScrollTop-scrollOffset))*/
        document.documentElement.scrollTop += -touchOffset / 2;
        return false;
    })
    .on('touchend', function (e) {
        const endTouches =
            [...e.originalEvent.changedTouches];
        for (let touch of endTouches) {
            touches.splice(touches.findIndex(prevTouch =>
                prevTouch.identifier == touch.identifier), 1);
        }
        return false;
    })
    .on('touchcancel', function (e) {
        const cancelTouches = [...e.originalEvent.changedTouches];
        for (let touch of cancelTouches) {
            touches.splice(touches.findIndex(prevTouch => prevTouch.identifier == touch.identifier), 1);
        }
        return false;
    });

function copyTouch({ identifier, pageX, pageY }) {
    return { identifier, pageX, pageY };
}




