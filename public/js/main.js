let contenedor_menu;
let menu_items = [];
let paginas = [];
var iniciarLogin = undefined, iniciarRegistro = undefined;
const menu_html = `<li>
<a href="javascript:void(0);" id="item_1">Home</a>
</li>
<li class="active">
<a href="javascript:void(0);" id="item_2">About Us</a>
</li>
<li>
<!-- First Tier Drop Down -->
<label for="drop-2" class="toggle">
Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
</label>
<a href="#">Dropdown 
<span class="fa fa-angle-down" aria-hidden="true"></span>
</a>
<input type="checkbox" id="drop-2" />
<ul>
    <li><a href="javascript:void(0);" id="item_3" class="drop-text">Services</a></li>
    <li><a href="javascript:void(0);" id="item_4" class="drop-text">Single Page</a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);" id="item_5">Collections</a>
</li>
<li>
<a href="javascript:void(0);" id="item_6">Contact</a>
</li>`;

window.onload = function(){
    //contenedor_menu = document.querySelector(".menu");
    //contenedor_menu.innerHTML = menu_html;
    setTimeout(hideURLbar, 0);

    if(iniciarLogin)
    {
        iniciarLogin();
    }

    if(iniciarRegistro)
    {
        iniciarRegistro();
    }

    asignarNavegacion();
}

function asignarNavegacion(){
    menu_items.push(document.getElementById("item_1"));
    menu_items.push(document.getElementById("item_2"));
    menu_items.push(document.getElementById("item_3"));
    menu_items.push(document.getElementById("item_4"));
    menu_items.push(document.getElementById("item_5"));
    menu_items.push(document.getElementById("item_6"));

    paginas["item_1"] = "index.html";
    paginas["item_2"] = "about.html";
    paginas["item_3"] = "coming.html";
    paginas["item_4"] = "single.html";
    paginas["item_5"] = "shop.html";
    paginas["item_6"] = "contact.html";

    for(var i of menu_items)
    {
        i.addEventListener("click",abrirPagina);
    }
}

function hideURLbar() {
    window.scrollTo(0, 1);
}

function abrirPagina(evento){
    location.href = paginas[evento.target.id];
}