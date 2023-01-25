
const col_rec = document.getElementById("col-rec");
const latte_div = document.getElementById("latte_art");
const espresso_div = document.getElementById("espresso");
const kopsus_div = document.getElementById("kopsus");
const lime_div = document.getElementById("lime_lemon");
const sugar_div = document.getElementById("sugar_watermelon");
const manggo_div = document.getElementById("manggo_juice");
const strawberry_div = document.getElementById("starwberry");
const salad_div = document.getElementById("salad");
const toast_div = document.getElementById("toast");
const button_div = document.getElementById("button-rec");


function getpilihanbot() {
    let idMinuman = ['latte_art', 'espresso', 'kopsus', 'lime_lemon', 'sugar_watermelon', 'manggo_juice', 'strawberry', 'salad', 'toast'];
    let hargaMinuman = ['38.000', '25.000','23.000','25.000','20.000','28.000','35.000','20.000','40.000'];
    let namaMinuman = ['Latte Art Machiatto', 'Espresso', 'Kop-Sus', 'Lime Lemon', 'Sugar Watermelon', 'Manggo Juice', 'Strawberry Cheese Cake', 'Salad', 'Toast Creamy Brule with Egg'];
    let img = ['./assets/img/product/coffee1.jpg', './assets/img/product/coffee2.jpg', './assets/img/product/coffee3.jpg', './assets/img/product/coffee3.jpg', './assets/img/product/drink1.jpg', './assets/img/product/drink2.jpg', './assets/img/product/drink3.jpg', './assets/img/product/food3.jpg', './assets/img/product/food4.jpg', './assets/img/product/food5.jpg'];
    let dataList ='';
    let temp = [];
    //loop sampain pilihan habis
    for (let i = 0; i < 3; i++) {
        let norandom = Math.floor(Math.random() * 10);
        if (temp != norandom) { 
            console.log(norandom);
            if (norandom == 1) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/coffee1.jpg">
                    <div class="layer" id="latte_art">
                        <h3>Latte Art Machiatto <br><br><br><br> Rp 38.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 2) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/coffee2.jpg">
                    <div class="layer" id="espresso">
                        <h3>Espresso <br><br><br><br> Rp 25.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 3) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/coffee3.jpg">
                    <div class="layer" id="kopsus">
                        <h3>Kop-Sus <br><br><br><br> Rp 23.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 4) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/drink1.jpg">
                    <div class="layer" id="lime_lemon">
                        <h3>Lime Lemon <br><br><br><br> Rp 25.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 5) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/drink2.jpg">
                    <div class="layer" id="sugar_watermelon">
                        <h3>Sugar Watermelon <br><br><br><br> Rp 20.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 6) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product" id="col-product">
                    <img src="./assets/img/product/drink3.jpg">
                    <div class="layer" id="manggo_juice">
                        <h3>Manggo Juice <br><br><br><br> Rp 28.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 7) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/food3.jpg">
                    <div class="layer" id="strawberry">
                        <h3>Strawberry Cheese Cake <br><br><br><br> Rp 35.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 8) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/food4.jpg">
                    <div class="layer" id="salad">
                        <h3>Salad <br><br><br><br> Rp 20.000</h3>
                    </div>
                </div>`;
            }
            else if (norandom == 9) {
                temp = norandom;
                delete temp[-i];
                console.log(temp);

                dataList+= 
                `<div class="col-product">
                    <img src="./assets/img/product/food5.jpg">
                    <div class="layer" id="toast">
                        <h3>Toast Creamy Brule with Egg <br><br><br><br> Rp 40.000</h3>
                    </div>
                </div>`;
            }
            else {

            }
    }
    
    console.log(dataList);
    //dibawah bisa langsung return list of inner html
    document.querySelector('#listBeverages').innerHTML = dataList;
}
}

// idMinuman.length
// console.log(norandom);
//                 console.log(idMinuman[norandom]);
//                 console.log(norandom);
//                 console.log(img[norandom]);
//                 console.log(norandom);
//                 let id_minuman = idMinuman[norandom];
//                 let nama_minuman = namaMinuman[norandom];
//                 const harga_minuman = hargaMinuman[norandom];
//                 const image = img[norandom];
//                 temp = norandom;
//                 delete temp[-i];
//                 console.log(temp);

//                 dataList+= 
//                 `<div class="col-product">
//                     <img src="${image}">
//                     <div class="layer" id=${id_minuman}>
//                         <h3>${nama_minuman} <br><br><br><br> Rp ${harga_minuman}</h3>
//                     </div>
//                 </div>`;