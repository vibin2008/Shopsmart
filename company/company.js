function logo(){
    // adding base url and the image base names
    const url = "https://raw.githubusercontent.com/vibin2008/Shopsmart/main/company/logo/";
    const img = [
        "aashirvaad",
        "amul",
        "britania",
        "dabur",
        "himalaya",
        "itc",
        "mtr",
        "tata",
        "uniliver"
    ];

    console.log(img[0]+".jpg");

    for(let i=0;i<img.length;i++){
        //creating element button and setting a name
        let btn = document.createElement("button");
        btn.name = img[i];

        //creating a element image and appending it to button
        let image = document.createElement("img");
        image.src = url + img[i] + ".jpg";
        btn.append(image);

        //adding to html
        let a = document.getElementById("img");
        a.append(btn);


    }
}