let navbar = document.querySelector('#navbarSupportedContent');
let content =document.querySelector('.sobre-mi');
let sticky =  navbar.offsetTop;
window.onscroll = () =>{

if (window.pageYOffset >= sticky){
    navbar.classList.add('sticky');

}else{


}
}

