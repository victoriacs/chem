var arraySolos = ['Fr','Ra','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og','He','Ne','Ar','Kr','Xe','Rn','At','Po','Pm','Ac','Pa','Np','Pu','Am','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];
document.getElementById("span2").hidden = true;
document.getElementById("elemento_2").hidden = true;
document.getElementById("span3").hidden = true;
document.getElementById("elemento_3").hidden = true;

$("#elemento_1").on('change',function() {
    let trobat = false;
    console.log($("#elemento_1").val());
    arraySolos.forEach(element => {
        if(element == $("#elemento_1").val()) {
            trobat = true;
            console.log("a");
        }});

        if(trobat) {
            $("#elemento_2").val(" ");
            $("#elemento_3").val(" ");
            document.getElementById("span2").hidden = true;
            document.getElementById("elemento_2").hidden = true;
            document.getElementById("span3").hidden = true;
            document.getElementById("elemento_3").hidden = true;
        } else {
            $("#elemento_3").val(" ");
            document.getElementById("span2").hidden = false;
            document.getElementById("elemento_2").hidden = false;
            document.getElementById("span3").hidden = true;
            document.getElementById("elemento_3").hidden = true;
        }
})

$("#elemento_2").on('change',function() {
    document.getElementById("span3").hidden = false;
    document.getElementById("elemento_3").hidden = false;
});