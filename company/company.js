document.addEventListener("DOMContentLoaded", () => {
    logo(img);
});

//if the mouse clicks outside the search bos the values clears
document.addEventListener("click", function(event) {
    // If the click is NOT inside the input
    if (!inp.contains(event.target)) {
        clear();
    }
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
    const result = document.getElementById('result');
    fetch("search.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "text=" + encodeURIComponent(txt)
    })
    .then(response => response.json())
    .then(data => {
        result.innerHTML = '';
        for(let i=0;i<data.length;i++){
            let btn = document.createElement('a');
            btn.textContent = data[i];

            let br = document.createElement('br');

            result.append(btn);
            result.append(br);
        }
    });
}

function clear(){
    const result = document.getElementById('result');
    result.innerHTML = '';
}