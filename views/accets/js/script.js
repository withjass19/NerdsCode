

let link1 = document.getElementById('link1');
let link2 = document.getElementById('link2');
let link3 = document.getElementById('link3');
let link4 = document.getElementById('link4');

let section1 = document.getElementById('Tutorial')
let section2 = document.getElementById('Questions')
let section3 = document.getElementById('Notes')
let section4 = document.getElementById('Query')

// default
section2.style.display = "none"
section3.style.display = "none"
section4.style.display = "none"
section1.style.display = "block"

// onlink click show or hidden

link1.onclick = () => {
    hiddensection();
    section1.style.display = "block"
}
link2.onclick = () => {
    hiddensection();
    section2.style.display = "block"
}
link3.onclick = () => {
    hiddensection();
    section3.style.display = "block"
}
link4.onclick = () => {
    hiddensection();
    section4.style.display = "block"
}

let sec = document.getElementsByClassName('section')

function hiddensection()
{
    for (let i = 0; i < 4; i++) {
        sec[i].style.display = "none"
    }
}