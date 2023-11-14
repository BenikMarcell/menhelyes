// Állatokra vonatkozó JavaScript kód 
// addig lapozható vissza, amíg az elejére nem érünk
// jQuery csak az egyszerűség kedvéért 
// Online jQuery betöltése master.balde

const elemekSzamaSoronkentAllatok = 4;
let jelenlegiOldalAllatok = 0;
const jsAllatok = $(".allat-card");

function updatePageAllatok() {
    jsAllatok.each(function (index) {
        if (index >= jelenlegiOldalAllatok * elemekSzamaSoronkentAllatok && index < (jelenlegiOldalAllatok + 1) * elemekSzamaSoronkentAllatok) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

updatePageAllatok();

const autoPaginationIntervalAllatok = setInterval(function () {
    if (jelenlegiOldalAllatok < Math.ceil(jsAllatok.length / elemekSzamaSoronkentAllatok) - 1) {
        jelenlegiOldalAllatok++;
    } else {
        jelenlegiOldalAllatok = 0;
    }
    updatePageAllatok();
}, 5000);

$(".vissza").click(function () {
    if (jelenlegiOldalAllatok > 0) {
        jelenlegiOldalAllatok--;
        updatePageAllatok();
        console.log("Vissza gombra kattintás történt állatoknál.");
    }
});

