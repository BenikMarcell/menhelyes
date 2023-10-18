document.addEventListener("DOMContentLoaded", function () {
    const elemekSzamaSoronkent = 3; // Soronkénti elemek száma
    let sorSzam = 0;

    function updatePage() {
        const allatok = document.querySelectorAll(".allat-card");

        allatok.forEach((allat, index) => {
            if (index >= sorSzam * elemekSzamaSoronkent && index < (sorSzam + 1) * elemekSzamaSoronkent) {
                allat.style.display = "block";
            } else {
                allat.style.display = "none";
            }
        });

        sorSzam++;
        if (sorSzam * elemekSzamaSoronkent>= allatok.length) {
            sorSzam = 0;
        }
    }

    updatePage();

    const autoPaginationInterval = setInterval(updatePage, 5000); // 60000 milliszekundum = 1 perc
});
