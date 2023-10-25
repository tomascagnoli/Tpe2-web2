document.addEventListener("DOMContentLoaded", function () {
    
    async function nav_paises() {
        const url = "home/paises";
        const lista_paises = document.querySelector("#paises");
        try {
            const response = await fetch(url);
            if (response.ok) {
                const data = await response.text();
                lista_paises.innerHTML = data;
                const click_paises = document.querySelectorAll(".paises");
                for (let i = 0; i < click_paises.length; i++) {
                    click_paises[i].addEventListener('click', async function () {
                    const pais = click_paises[i].innerHTML;
                    albumesContainer.innerHTML = "";
                    await showArtistas(pais);
                    });
                }
            } else {
                lista_paises.innerHTML = "Sitio en mantenimiento, disculpe las molestias";
            } 
        } catch (error) {
            lista_paises.innerHTML = "Error al obtener datos:" + error;
        }
        
        async function showArtistas(pais) {
            const url2 = `home/paises/${decodeURIComponent(pais)}`;
            const artistasContainer = document.querySelector("#artistasContainer");
            try {
                const response = await fetch(url2);
                if (response.ok) {
                    const data = await response.text();
                    artistasContainer.innerHTML = data;
                    const click_id_artistas = document.querySelectorAll(".id_artistas");
                    for (let i = 0; i < click_id_artistas.length; i++) {
                        click_id_artistas[i].addEventListener('click', async function () {
                            const id = click_id_artistas[i].innerHTML;
                            await showAlbumes(id);
                        });
                    }
                } else {
                    artistasContainer.innerHTML = "Sitio en mantenimiento, disculpe las molestias";
                } 
            } catch (error) {
                console.log("Error al obtener datos:", error);
            }
        }

        async function showAlbumes(id) {
            console.log(id);
            const url3 = `home/paises/album/${id}`;
            const albumesContainer = document.querySelector("#albumesContainer");
            try {
                const response = await fetch(url3);
                if (response.ok) {
                    const data = await response.text();
                    albumesContainer.innerHTML = data;
                }else {
                    albumesContainer.innerHTML = "Sitio en mantenimiento, disculpe las molestias";
                } 
            } catch (error) {
                console.log("Error al obtener datos:", error);
            }
        }
    }

    nav_paises(); 
    
});


    