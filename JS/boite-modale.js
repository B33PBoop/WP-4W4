(function(){

    let boite__modale = document.querySelector('.boite__modale')
    let boite__modale__fermer = document.querySelector('.boite__modale__fermer')
    let boite__modale__texte = document.querySelector('.boite__modale__texte')
    let cours__desc__complet = document.querySelector('.cours__desc__complet')
    let collection_bouton_suite = document.querySelectorAll('.cours__desc__suite')

    console.log('collection_bouton_suite = ' + collection_bouton_suite.length)

    for(const bouton of collection_bouton_suite){
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName);
            boite__modale.classList.add('boite__modale__ouvrir')

            boite__modale__texte.innerHTML = (this.parentNode.parentNode.children[0].innerHTML)
        })
    }

    boite__modale__fermer.addEventListener('mousedown', function(){
        boite__modale.classList.remove('boite__modale__ouvrir')
    })

})()