document.addEventListener("DOMContentLoaded", () => {
    logo(img);
});

function logo(img){
    // adding base url and the image base names
    const url = "https://raw.githubusercontent.com/vibin2008/Shopsmart/main/company/logo/";

    for(let i=0;i<img.length;i++){
        //creating element button and setting a name
        let btn = document.createElement("button");
        btn.name = img[i];

        //creating a element image and appending it to button
        let image = document.createElement("img");
        image.src = url + img[i] + ".jpg";
        image.loading = "lazy"
        btn.append(image);

        //adding to html
        let a = document.getElementById("img");
        a.append(btn);


    }
}

function find(){
    var txt = document.getElementById('inp').value;
    console.log(txt);
    fetch("search.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "text=" + encodeURIComponent(txt)
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    });
}