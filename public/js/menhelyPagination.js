// Menhelyekre vonatkozó JavaScript kód
// addig lapozható vissza, amíg az elejére nem érünk
// jQuery csak az egyszerűség kedvéért 
// Online jQuery betöltése master.balde
const elemekSzamaSoronkentMenhelyek = 3;
let jelenlegiOldalMenhelyek = 0;
const jsMenhelyek = $(".menhely-card");

function updatePageMenhelyek() {
    jsMenhelyek.each(function (index) {
        if (index >= jelenlegiOldalMenhelyek * elemekSzamaSoronkentMenhelyek && index < (jelenlegiOldalMenhelyek + 1) * elemekSzamaSoronkentMenhelyek) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

updatePageMenhelyek();

const autoPaginationIntervalMenhelyek = setInterval(function () {
    if (jelenlegiOldalMenhelyek < Math.ceil(jsMenhelyek.length / elemekSzamaSoronkentMenhelyek) - 1) {
        jelenlegiOldalMenhelyek++;
    } else {
        jelenlegiOldalMenhelyek = 0;
    }
    updatePageMenhelyek();
}, 5000);

$(".menhelyVissza").click(function () {
    if (jelenlegiOldalMenhelyek > 0) {
        jelenlegiOldalMenhelyek--;
        updatePageMenhelyek();
        console.log("Vissza gombra kattintás történt menhelyeknél.");
    }
});
