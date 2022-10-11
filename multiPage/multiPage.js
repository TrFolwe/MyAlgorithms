const mainElementName = 'container';
const pageElementName = "wrapper"

function align() {
    const direction = $(mainElementName).css("flex-direction");
    const wrapperCount = $(`.${mainElementName} .${pageElementName}`).length;
    if(direction === "row") $(mainElementName).css({width: wrapperCount*100+"%", height: "100%"});
    else if(direction === "column") $(mainElementName).css({width: "100%", height: wrapperCount*100+"%"});
}

align();