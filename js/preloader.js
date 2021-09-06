function preload(){
    document.getElementById("onload").remove("#onload");
    $('body').removeClass('hidden');
}

window.onload = preload;