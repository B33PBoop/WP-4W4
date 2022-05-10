(function(){

    let boite__carrousel = document.querySelector('.boite__carrousel')
    let boite__carrousel__fermer = document.querySelector('.boite__carrousel__fermer')
    let boite__carrousel__nav = document.querySelector('.boite__carrousel__nav')
    let boite__carrousel__img = document.querySelector('.boite__carrousel__img')

    let img_galerie = document.querySelectorAll('.galerie img')
    

    console.log('img_galerie = ' + img_galerie.length)
    let index = 0

    for(const image of img_galerie){
        let btn = document.createElement('input')
        btn.setAttribute('type', 'radio')
        btn.setAttribute('checked', '')
        btn.setAttribute('name', 'btn' )
        btn.setAttribute('class', 'btn')
        btn.dataset.index = index++
        boite__carrousel__nav.append(btn)

        let elemImg = document.createElement('img')
        elemImg.setAttribute('src', image.getAttribute('src'))
        boite__carrousel__img.append(elemImg)
        

        btn.addEventListener('change', function(e){
            e.preventDefault
            console.log(this.getAttribute('checked'))
            boite__carrousel__img.children[this.dataset.index].classList.remove('img--ouvrir')
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')

            // elemImg.setAttribute('src', img_galerie[btn.dataset.index].getAttribute('src'))
        })

        image.addEventListener('mousedown', function(){
            console.log(this.tagName);
            boite__carrousel.classList.add('boite__carrousel__ouvrir')
            boite__carrousel__img.children[0].classList.add('img--ouvrir')

            // elemImg.setAttribute('src', this.getAttribute('src'))
        })
    }

    boite__carrousel__fermer.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })

})()