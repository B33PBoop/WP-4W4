(function(){

    let boite__modale = document.querySelector('.boite__modale')
    let boite__modale__fermer = document.querySelector('.boite__modale__fermer')
    let boite__modale__texte = document.querySelector('.boite__modale__texte')

    let collection_img_galerie = document.querySelectorAll('.galerie img')
    let elemImg = document.createElement('img')
    boite__modale__texte.appendChild(elemImg)

    console.log('collection_img_galerie = ' + collection_img_galerie.length)


    for(const image of collection_img_galerie){
        image.addEventListener('mousedown', function(){
            console.log(this.tagName);
            boite__modale.classList.add('boite__modale__ouvrir')

            elemImg.setAttribute('src', this.getAttribute('src'))
        })
    }

    boite__modale__fermer.addEventListener('mousedown', function(){
        boite__modale.classList.remove('boite__modale__ouvrir')
    })

})()