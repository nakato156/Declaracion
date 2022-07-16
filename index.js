window.onload = init
const KANT ="U2FsdGVkX1+kG6FOr8FguG1o3i5cxCeLdRxdmFQYjuw=";
var pregunta, block = null;
var FINAL = 1;
var actual = 1;
const enunciado = document.getElementById("enunciado");

function nextQ(){
    actual++;
    block.style.color = "#000";
    localStorage.setItem("pregunta",`${actual}`)
    if(actual==2) {
        pregunta.style.display = "none"
        enunciado.style.display = "None";
    }
    else pregunta.parentNode.style.display = "none"
    pregunta = document.getElementById(`serie${actual}`).parentNode
    pregunta.style.display = "block"
}

function max_length(inputs, length){
    for(let i = 0; i < inputs.length; i++){
        inputs[i].addEventListener("keydown", (e)=>{
            let elemento = e.target
            if(elemento.value.length >= length){
                elemento.value = ""
            } 
        })
    }
}

function blockListener(e){
    if(localStorage.getItem("pregunta") == "1") check(pregunta.children["serie1"].children)
    else if(localStorage.getItem("pregunta") == "2") check2(pregunta.children["serie2"].children)
    else if(localStorage.getItem("pregunta") == "3") check3(pregunta.children["serie3"].children)
    else if(actual == "0") check_final1(pregunta.children["final"].children)
    else if(actual == "9") check_final2(pregunta.children["final"].children)
}

function init() {
    if(document.cookie == "" || document.cookie.split(";")[0].split("=")[1].trim() != "true"){
        document.cookie = "first=true;expires=Thu, 20 Dec 2022 12:00:00 UTC; path=/;";
        localStorage.setItem("pregunta", "1")
    }else if(localStorage.getItem("pregunta")!="1") enunciado.style.display = "none";
    if(localStorage.getItem("pregunta")){
        let num = localStorage.getItem("pregunta")
        if(num == 0 || num == 9){
            pregunta = document.getElementById("final").parentNode;
            if(num == 0) final1();
            else final2();
        } 
        else pregunta = document.getElementById(`serie${num}`).parentNode;
        pregunta.style.display = "block";
        actual = num;
    }

    block = document.getElementById("verificar");
    block.addEventListener("click", blockListener)

    const inputs_letras = document.querySelectorAll(".letras")
    let parent = inputs_letras[0].parentNode.parentNode
    max_length(parent.children, 1)
    for(let i = 1; i < inputs_letras.length; i++){
        if(parent != inputs_letras[i].parentNode.parentNode){
            parent = inputs_letras[i].parentNode.parentNode
            max_length(parent.children, 1)
        }
    }
}

function check(pregunta_){
    let serie = ""
    let musa = 0
    for (const el of pregunta_) {
        const input = el.children[0]
        serie += `${input.value}-`
        musa+=input.value
    }
    const Serie = `${musa}${serie}${pregunta_[0].children[0].value}`
    const result = CryptoJS.AES.decrypt(KANT, Serie).toString(CryptoJS.enc.Utf8);
    if(result == "Todo Va Bienn"){
        nextQ();
    }else block.style.color = "red";
}

function check2(pregunta_){
    let serie = ""
    for (const el of pregunta_) {
        const input = el.children[0]
        serie += `${input.value}`
    }
    serie = serie.toLowerCase()
    if (serie == document.getElementById("sumaryCode").value){
        pregunta = pregunta_[0].parentNode
        return nextQ();
    }else block.style.color = "red";
}

function check3(pregunta_){
    let serie = ""
    for (const el of pregunta_) {
        const input = el.children[0]
        serie += `${input.value}`
    }
    serie = serie.toLowerCase()
    if (serie[0] == "m"){
        const CODESPROPERTY = document.getElementById("codecs").value
        if(serie[1] == serie[2] &&  CODESPROPERTY.split("$").includes(serie.slice(1))){
            pregunta = pregunta_[0].parentNode
            console.log(pregunta)
            pregunta.parentNode.style.display = "none"
            pregunta = document.getElementById("final").parentNode
            pregunta.style.display = "block"
            if(CODESPROPERTY.split("$")[1] != serie.slice(1)) {
                FINAL = 2;
                document.cookie =`NUMERO_ALEATORIO=${FINAL}`
                return final2();
            }
            return final1();
        }
    }else block.style.color = "red";
}

function final1(){
    actual = 0;
    localStorage.setItem("pregunta", `${actual}`)
    pregunta.style.width ="100%"
    pregunta.innerHTML = `
    <h3 style="text-align:center;width=100vw;display:flex;">
        <a style="margin:auto;" target="_blank" href="https://wordle.danielfrg.com/personalizada/?p=U2FsdGVkX1%2F2RVihwP5vx%2BetbxO2JsADqqnpTGGNubY%3D&t=false">Juega</a> <br>
        <i class='bx bx-help-circle' data-bs-toggle="modal" data-bs-target="#infoFinal" style="font-size:15px;"></i>
    </h3>
    <div class="row tobe" id="final" style="width: 100%;">
        <div class="col"><input class="letras maxi form-control" type="text"></div>
        <div class="col"><input class="letras maxi form-control" type="text"></div>
        <div class="col"><input class="letras maxi form-control" type="text"></div>
        <div class="col"><input class="letras maxi form-control" type="text"></div>
        <div class="col"><input class="letras maxi form-control" type="text"></div>
    </div>
    `
    max_length(pregunta.children["final"].children, 1)
}

function check_final1(pregunta_){
    serie = ""
    for (const el of pregunta_) {
        serie+= `${el.children[0].value}`.toLowerCase();
    }
    let result = CryptoJS.AES.decrypt("U2FsdGVkX19VNn2PPb720g1Iv9WDjvitGTRQUgZZIjUj5b0xSaJYaWl1Wk7ERv1O", serie).toString(CryptoJS.enc.Utf8)
    result = result ? result : CryptoJS.AES.decrypt("U2FsdGVkX19pSlgFi1vz53eXw7zN7gQNU7QDrRLrzFKn3wtZqGap5GrDeFP3fSs4", serie).toString(CryptoJS.enc.Utf8)
    const this_pregunta = pregunta_[0].parentNode
    let configTyped = {
        typeSpeed: 75,
        startDelay: 200,
        backSpeed: 20,
        backDelay: 1500,
        loopCount: false,
        showCursor: true,
        cursorChar: "|"
    }
    if(result){
        this_pregunta.parentNode.innerHTML = `
        <div class="container final">
            <h3><span class="typed"></span></h3>
        </div>`
        block.removeEventListener("click", blockListener)

        if(result[0] == "<"){
            configTyped["strings"] = ['Lo has logrado', 'Bien', 'Ahora la pregunta', result];
            const typed = new Typed(".typed", configTyped)
            setTimeout(()=>{
                block.setAttribute("class", "bx bxs-heart")
                block.style.color = "#F5599F"
                block.addEventListener("click", (e)=>{
                    const nuevo_el = `<button id="clickme" style="display:none" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#question"></button>`
                    const lugar = document.getElementById("serie1")
                    lugar.innerHTML+= nuevo_el
                    document.getElementById("clickme").click()
                })
            }, 11500)
        } else{
            configTyped["strings"] = ['Bien hecho.', 'Espero te hayas divrtido', 'Ahora.... no sé', result];
            const typed = new Typed(".typed", configTyped)
        }
    }else{
        block.style.color = "red";
    }
}

function final2(){
    actual = 9;
    pregunta.innerHTML = `
    <div class="container final">
        <h3><span class="typed"></span></h3>
    </div>`
    localStorage.setItem("pregunta", `${actual}`)
    try {
        block.removeEventListener("click", blockListener)
    } catch (error) {}
    const typed = new Typed(".typed", {
        strings: ["Es el tercer final :)", "Felicidades!"],
        typeSpeed: 75,
        shuffle: true,
        startDelay: 200,
        backSpeed: 20,
        backDelay: 1500,
        loopCount: false,
        showCursor: true,
        cursorChar: "|"
    })
}

function check_final2(pregunta_){
    
}
