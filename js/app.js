//limitar el alcance de la variables
(function () {
  const listElements = document.querySelectorAll(".menu_item-show");
  const list = document.querySelector(".menu_links");
  const menu = document.querySelector(".menu_flex");

  //aqui se determina el funcionamiento en el menu, al presionar click
  const addClick = () => {
    listElements.forEach((element) => {
      element.addEventListener("click", () => {
        let submenu = element.children[1];
        let height = 0;
        element.classList.toggle("menu_item-active");

        if (submenu.clientHeight === 0) {
          height = submenu.scrollHeight;
        }

        submenu.style.height = `${height}px`;
      });
    });
  };
//esta sirve para que el menu se pueda contraer sin problemas al abrir y cerrar mas la ventana 
  const deleteStyleHeight = ()=> {
      listElements.forEach(element => {
          
        if(element.children[1].getAttribute('style')){
            element.children[1].removeAttribute('style');
            element.classList.remove('menu_item-active');

        }
      });
  }
//esta hace que cuando la ventana baje de 800 px permitira que el menu se pueda esconder o mostrar
  window.addEventListener("resize", () => {

    if (window.innerWidth > 800) {
        deleteStyleHeight();
        console.log(list.classList)
        if(list.classList.contains('menu_links-show'))
            list.classList.remove('menu_links-show');

    } else {
      addClick();
    }

  });

  if (window.innerWidth <= 800) {
      addClick();
  }

  menu.addEventListener('click', ()=> list.classList.toggle('menu_links-show'));

})();
