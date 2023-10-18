document.addEventListener("DOMContentLoaded", function () {
    const elemekSzamaSoronkent = 3; // Soronkénti elemek száma
    let sorSzam = 0;

    function updatePage() {
        const menhelyek = document.querySelectorAll(".menhely-card"); 

        menhelyek.forEach((menhely, index) => {
            if (index >= sorSzam * elemekSzamaSoronkent && index < (sorSzam + 1) * elemekSzamaSoronkent) {
                menhely.style.display = "block";
            } else {
                menhely.style.display = "none";
            }
        });

        sorSzam++;
        if (sorSzam * elemekSzamaSoronkent>= menhelyek.length) {
            sorSzam = 0;
        }
    }

    updatePage();

    const autoPaginationInterval = setInterval(updatePage, 10000); // 60000 milliszekundum = 1 perc
});
