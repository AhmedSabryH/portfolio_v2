import './bootstrap';

import Alpine from 'alpinejs';
import SplitTextJS from 'split-text-js';
import gsap from 'gsap';

window.Alpine = Alpine;

Alpine.start();

const menu = document.getElementById('burger')
const menu1 = document.getElementById('burger1')
const menu2 = document.getElementById('burger2')
const menu3 = document.getElementById('burger3')
const burger = document.querySelector('ul');
if (burger!=null) {
    document.addEventListener("click", (e) => {
        if (e.target == menu|| e.target == menu1 || e.target == menu2 || e.target == menu3) {
            if (burger.classList.contains('hidden')) {
                burger.classList.remove("hidden")
            } else {
                burger.classList.add("hidden")
            }
        } else {
            if (e.target != burger) {
                if (burger.classList.contains("hidden") == false) {
                    burger.classList.add("hidden")
                }
            }
        }
    });
}
const title = gsap.utils.toArray('.text-content')
const tl = gsap.timeline({ repeat: -1 })
title.forEach(t => {
    const split = new SplitTextJS(t);
    tl
        .from(split.chars, {
            opacity: 0,
            y: 30,
            rotateX: -90,
            stagger: .05
        }, "<")
        .to(split.chars, {
            opacity: 0,
            y: -30,
            rotateX: 90,
            stagger: .05
        }, "<2")
});
const ar = ["ذ", "ض", "ص", "ث", "ق", "ف", "غ", "ع", "ه", "خ", "ح", "ج", "د", "ش", "س", "ي", "ب", "ل", "لأ", "ا", "أ", "ت", "ن", "م", "ك", "ط", "ئ", "ء", "ؤ", "ر", "لا", "لآ", "ى", "آ", "ة", "و", "ز", "ز", "ظ"]
document.addEventListener('input', (e) => {
    if (e.target.tagName.toLowerCase() == 'input' || e.target.tagName.toLowerCase() == 'textarea') {
        let len = e.target.value.split("");
        if (ar.includes(len[0])) {
            e.target.setAttribute("dir", "rtl");
        }
        else {
            e.target.setAttribute("dir", "ltr");
        }
    }
})
const preview = document.getElementById('img');
if (preview!=null){
    preview.onchange= function (e) {
        const view = document.getElementById('preview');
        image = URL.createObjectURL(e.target.files[0])
        var image
        view.src = image;
        view.classList.remove('hidden')
    }
}

const selecttools = document.getElementById('selecttools')
const viewtools = document.getElementById('viewtools')
const tools = document.getElementById('tools')
if (selecttools!=null){
selecttools.onchange = function(){

        if (selecttools.value!=''){   
            viewtools.innerHTML+=`
            <span class="px-3 py-1 m-3 bg-green-700 rounded-lg text-gray-50">`
            + selecttools.value + `
            </span>
            `;
            if (tools.value!='') {   
                tools.value+=','+selecttools.value;
            }else{
                tools.value=selecttools.value;
            }
    }
}
}

const search = document.getElementById('search')

search.addEventListener('input',()=>{
    const list= document.getElementById('res');
    if (search.value!='') {
        const x = new XMLHttpRequest();
        x.onreadystatechange = function () {
            if (x.readyState == 4 && x.status == 200) {
                if (x.responseText!='[]') {
                    const res = JSON.parse(x.responseText);
                    list.innerHTML = '';
                    list.classList.remove('hidden');
                    for (var i =0; i < res.length; i++ ) {
                        list.innerHTML += `<a href="/project/`+res[i].id+`">
                        <li class="p-2 my-3 text-gray-200 bg-gray-700 rounded-lg cursor-pointer hover:ring-2">`+res[i].name+`</li>
                        </a>`;
                    }
                }else{
                    list.classList.add('hidden');
                }
            }
        }
        const s=search.value;
        x.open("GET", "https://ahmedsabry.free.nf/search/"+s+"");
        x.send();
    }else{
        list.classList.add('hidden');
    }
})

const filter = document.getElementById('filter')
const ftext = document.getElementById('ftext')
const flines = document.getElementById('flines')
const f_list = document.querySelector('#f_list');
if (f_list!=null) {
    document.addEventListener("click", (e) => {
        if (e.target == filter || e.target == ftext || e.target == flines) {
            if (f_list.classList.contains('hidden')) {
                f_list.classList.remove("hidden")
            } else {
                f_list.classList.add("hidden")
            }
        } else {
            if (e.target != f_list) {
                if (f_list.classList.contains("hidden") == false) {
                    f_list.classList.add("hidden")
                }
            }
        }
    });
}