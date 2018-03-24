function killScroll() {
    document.addEventListener('touchstart', function(e) {
        startX = e.changedTouches[0].pageX;
        startY = e.changedTouches[0].pageY;
    }, { passive: false });
    document.addEventListener('touchmove', function() {
        if ( event.touches.length === 1 ) {
            curX = event.touches[0].pageX;
            curY = event.touches[0].pageY;
            if(Math.abs((curX-startX))>10 || Math.abs((curY-startY))>10){
                event.preventDefault();
            }
        }
    }, { passive: false });
}