console.log('Cargando Acordeón');

const dataAcordion = [
    {
        "tittle": "Nuevos Lanzamientos",
        "desc": "Ofrecemos lo último en videojuegos.",
    },
    {
        tittle: "Juegos retro",
        desc: "contamos con una gran existencia", 
    }
];

(function () {
    let ACORDION = {
        init: function () {
            let _self = this;
            this.insertData(_self);
            this.eventHandler(_self);
            this.hideAllDescriptions(); // Asegurarnos de que las descripciones están ocultas al inicio
        },

        insertData: function (_self) {
            dataAcordion.map(function (item) {
                document.querySelector('.main-accordion-container').insertAdjacentHTML('beforeend', _self.tplAcordionItem(item));
            });
        },

        eventHandler: function (_self) {
            let arrayRefs = document.querySelectorAll('.acordion-title');
            for (let x = 0; x < arrayRefs.length; x++) {
                arrayRefs[x].addEventListener('click', function (event) {
                    console.log('Event:', event);
                    _self.showTab(event.target);
                });
            }
        },

        tplAcordionItem: function (item) {
            return `
                <div class='acordion-item'>
                    <div class='acordion-title'><p>${item.tittle}</p></div>
                    <div class='acordion-desc'><p>${item.desc}</p></div>
                </div>
            `;
        },

        showTab: function (refItem) {
            let activeTab = refItem.nextElementSibling; // Obtiene la descripción relacionada

            if (activeTab.style.display === "flex") {
                activeTab.style.display = "none"; // Si ya está visible, se oculta
            } else {
                activeTab.style.display = "flex"; // Si no está visible, se muestra
            }
        },

        hideAllDescriptions: function() {
            let allDescriptions = document.querySelectorAll('.acordion-desc');
            allDescriptions.forEach(function(desc) {
                desc.style.display = "none"; // Oculta todas las descripciones al cargar la página
            });
        }
    };

    ACORDION.init();
})();
