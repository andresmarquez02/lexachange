let datos = document.querySelectorAll(".lxlaunch23 div"), info = [];
document.querySelector("body").innerHTML += `
<div class="lxmodal23 no-scale" id="Lexachange12#er">
    <div class="lxdialogo23">
        <div class="lxcontainer23">
            <div class="lxcabecera23">
                <h2 class="lxtitulo23">Lexachange</h2>
                    <button type="button" class="lxclose23">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="lxbody23">
                <form action="" method="post" id="lxformsub23">
                    <div class="lxcmpos23">
                        <input type="text" maxlenght=25 minlenght=25 name="mi_ip" placeholder="Ip de su cartera">
                        <small class="lxerror23"></small>
                    </div>
                    <div class="lxcmpos23">
                        <input type="email" maxlenght=200 name="email" placeholder="Email">
                        <small class="lxerror23"></small>
                    </div>
                    <div class="lxbutton23">
                        <button type="submit" class="lxsubmit23">Pagar</button>
                    </div>
                    <div class="lxcmpos23">
                        <small class="lxgeneralerror23"></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="lxloader23 lxnone-preload">
    <div class="lxpreloader23"></div>
</div>
`;
let c = null, r = null;
let button = document.querySelector(".lxlaunch23 button"), i = 0, close = document.querySelector(".lxclose23"),
modal = document.querySelector(".lxmodal23"),
container = document.querySelector(".lxdialogo23"),
formulario = document.querySelector("#lxformsub23"), div = null;
button.addEventListener("click", () => show());
close.addEventListener("click", () => show());
modal.addEventListener("click", () => show());
container.addEventListener("click", (event) => event.stopPropagation());
const show = () => {
    if(i === 0){
        modal.style.display="flex";
        i = 1;
        setTimeout(()=>{
            modal.classList.add("scale");
            modal.classList.remove("no-scale");
        },200);
    }
    else {
        i = 0;
        modal.classList.add("no-scale");
        modal.classList.remove("scale");
        setTimeout(()=>{
            modal.style.display = "none";
        },605);
    }
    formulario = document.querySelector("#lxformsub23");
}
formulario.addEventListener("submit", (event) => {
    event.preventDefault();
    datos.forEach((el,i) => {
        info[i] = el.textContent;
        el.textContent = "";
    });
    div = document.querySelector(".lxloader23");
    div.classList.remove("lxnone-preload");
    const regular = {
        ip: /^.{25,25}$/,
        email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/,
    }
    if(regular.ip.test(formulario.elements[0].value) &&
    regular.email.test(formulario.elements[1].value)){
        sender();
    }
    else{
        console.log("error", regular.ip.test(formulario.elements[0].value));
        let error = document.querySelectorAll(".lxerror23");
        if(!regular.ip.test(formulario.elements[0].value)){
            error.forEach((el,i)=> i === 0 ? el.textContent = "Su ip es invalida" : el.textContent = "");
        }
        else if(!regular.email.test(formulario.elements[1].value)){
            error.forEach((el,i)=> i === 1 ? el.textContent = "Su direcion de correo es invalida" : el.textContent = "");
        }
        else{
            error.forEach(el=> el.textContent = "Sus datos son incorrectos");
        }
        div.classList.add("lxnone-preload")
    }
});
const sender = async () => {
    let form = new FormData();
    form.append("api_key",info[0]);
    form.append("ip",info[1]);
    form.append("monto",info[2]);
    form.append("mi_ip",formulario.elements[0].value);
    form.append("email",formulario.elements[1].value);
    c = await fetch("https://lexachange.herokuapp.com/api/transferencia/lexa",
    {
        method: "POST",
        body: form,
    });
    r = await c.text();
    if(c.status === 403){
        document.querySelector(".lxgeneralerror23").style.color = "red";
        document.querySelector(".lxgeneralerror23").textContent = r.mensaje;
    }
    else if(c.status === 200){
        document.querySelector(".lxgeneralerror23").style.color = "green";
        document.querySelector(".lxgeneralerror23").textContent = r.mensaje;
        if(document.getElementById('lxR'))
        {
            let redirect = document.getElementById('lxR');
            location.href = redirect;
        }
    }
    else{
        document.querySelector(".lxgeneralerror23").style.color = "red";
        document.querySelector(".lxgeneralerror23").textContent = "Error inseperado, vuelva a intentar. (Si el error persiste contacte con la empresa a cargo)";
    }
    let error = document.querySelectorAll(".lxerror23");
    error.forEach(el=> el.textContent = "");
    div.classList.add("lxnone-preload");
}
