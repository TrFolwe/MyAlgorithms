const element = $(window);
const deltaMovementSpeed = {
    vertical: 75,
    horizontal: 75
};

$(window).mousewheel((event) => {
    const {vertical, horizontal} = deltaMovementSpeed;
    window.scrollBy(event.deltaX < 0 ? -(vertical) : vertical event.deltaY < 0 ? -(horizontal) : horizontal);
})