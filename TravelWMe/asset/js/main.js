var t=0,text;
text = "Kami sangat mengutamanakan dalam kenyamanan dan keamanan anda dalam berwisata. Anda akan ditemani oleh tim kami yang sudah Profesional dan anda akan disuguhkan tempat-tempat wisata menarik dan transportasi lengkap dan nyaman. Anda juga akan mengalami perjalanan paling berkesan dan tak terlupakan. Dijamin tidak akan menyesal dan ketagihan dengan jasa kami. TravelWme siap mengantarkan anda ketempat wisata favorite anda!.";
window.onload = function() {
    typingtext();
    function typingtext(){
    if (t < text.length){
    document.getElementById('aboutus').innerHTML += text.charAt(t);
    t++
    setTimeout(typingtext, 50);
}
};
}

