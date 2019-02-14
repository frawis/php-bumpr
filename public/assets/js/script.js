document.addEventListener('DOMContentLoaded', () => {

    // get navburger elements
    const $navBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // check if any navburgers
    if($navBurgers.length>0){
        $navBurgers.forEach(el => {
            el.addEventListener('click', () => {
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }

    // Back to Top button
    let lastKnownScrollY = 0;
    let currentScrollY = 0;
    let ticking = false;
    let idOfButton = 'backtotop';
    let eleButton = null;

    const classes = {
        visible: 'visible',
        unvisible: 'unvisible',
    };

    function onScroll() {
        currentScrollY = window.pageYOffset;
        requestTick();
    }

    function requestTick() {
        if(!ticking) {
            requestAnimationFrame(update);
        }
        ticking = true;
    }

    function update() {
        if(currentScrollY > lastKnownScrollY) {
            pin();
        } else if (currentScrollY < lastKnownScrollY){
            unpin();
        }
        lastKnownScrollY = currentScrollY;
        ticking = false;
    }

    function pin() {
        if(eleButton.classList.contains(classes.unvisible)){
            eleButton.classList.remove(classes.unvisible);
            eleButton.classList.add(classes.visible);
        }
    }

    function unpin() {
        if(eleButton.classList.contains(classes.visible) || !eleButton.classList.contains(classes.unvisible)){
            eleButton.classList.remove(classes.visible);
            eleButton.classList.add(classes.unvisible);
        }
    }

    window.onload = function () {
        eleButton = document.getElementById(idOfButton);
        console.log(eleButton);
        document.addEventListener('scroll', onScroll, false);
    }

});

function checkPasswort() {
    let passwort_1 = document.getElementById('passwort1');
    let passwort_2 = document.getElementById('passwort2');
    let nachricht = document.getElementById('fehlerNachricht');

    if(passwort_1.value === passwort_2.value){
        nachricht.style.color = "green";
        nachricht.innerHTML = "Passwort ist gleich";
    } else {
        nachricht.style.color = "red";
        nachricht.innerHTML = "Passwort ist nicht gleich";
    }
}