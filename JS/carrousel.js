(function(){

    let boite__carrousel = document.querySelector('.boite__carrousel')
    let boite__carrousel__fermer = document.querySelector('.boite__carrousel__fermer')
    let boite__carrousel__nav = document.querySelector('.boite__carrousel__nav')

    let img_galerie = document.querySelectorAll('.galerie img')
    let elemImg = document.createElement('img')
    boite__carrousel.append(elemImg)

    console.log('img_galerie = ' + img_galerie.length)
    let index = 0

    for(const image of img_galerie){
        let btn = document.createElement('button')
        btn.dataset.index = index++
        boite__carrousel__nav.append(btn)

        btn.addEventListener('mousedown', function(){
            elemImg.setAttribute('src', img_galerie[btn.dataset.index].getAttribute('src'))
        })

        image.addEventListener('mousedown', function(){
            console.log(this.tagName);
            boite__carrousel.classList.add('boite__carrousel__ouvrir')

            elemImg.setAttribute('src', this.getAttribute('src'))
        })
    }

    boite__carrousel__fermer.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })

})()