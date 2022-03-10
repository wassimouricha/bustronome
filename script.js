window.addEventListener("load", () => {
    autoSlide();
} )

function autoSlide(){
    setInterval(() => {
        slide(getItemActiveIndex() + 1);
    }, 2000 ); //vitesse de la slide = 2s
}

function slide(toIndex){
    const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
    const itemActive = document.querySelector(" .carousel_item_active");

    if(toIndex >= itemsArray.length ){
        toIndex = 0 ;
    }

        const newItemActive = itemsArray[ toIndex];

        newItemActive.classList.add("carousel_item_pos_next");
        setTimeout(() => {
            newItemActive.classList.add("carousel_item_next");
            itemActive.classList.add("carousel_item_next");
        },20);

        newItemActive.addEventListener("transitionend" , () => {

            itemActive.className = "carousel_item";
            newItemActive.className = "carousel_item carousel_item_active";
        }, {
            once: true
        });
}

function getItemActiveIndex(){ 
    const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
    const itemActive = document.querySelector(" .carousel_item_active");
    const itemActiveIndex = itemsArray.indexOf(itemActive);
    return itemActiveIndex;
}

//button paris londres
