let iframe = document.querySelector('iframe');
let srcLink = localStorage.getItem("preview");
let downBtn =  document.querySelector("#downlink");
let downLink = localStorage.getItem("download");
iframe.setAttribute('src',srcLink );
downBtn.setAttribute('href',downLink);
