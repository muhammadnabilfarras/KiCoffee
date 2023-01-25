
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
        let norandom = Math.floor(Math.random() * idMinuman.length);
        if (temp != norandom) { 
            
            console.log(norandom);
            console.log(idMinuman[norandom]);
            console.log(img[norandom]);
            let id_minuman = idMinuman[norandom];
            let nama_minuman = namaMinuman[norandom];
            let harga_minuman = hargaMinuman[norandom];
            let image = img[norandom];
            temp = norandom;
            delete temp[-i];
            console.log(temp);
            // delete idMinuman[norandom];
            // delete namaMinuman[norandom];
            // delete hargaMinuman[norandom];
            // delete img[norandom];

            dataList+= 
            // `
            // <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            //     <div class="portfolio-wrap">
            //     <img src="assets/img/product/coffee1.jpg" class="img-fluid" alt="">
            //     <div class="portfolio-info">
            //         <h4>${namaMinuman}</h4><!-- Nama Product -->
            //         ini deskripsi
            //         <p><i>Rp ${hargaMinuman}</i></p><!-- Harga Product -->
            //         <div class="portfolio-links">
            //         <a href="assets/img/product/coffee1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Espresso with latte"><i class="bx bx-plus"></i></a>
            //         <a href="#" title="More Details"><i class="bx bx-link"></i></a>
            //         </div>
            //     </div>
            //     </div>
            // </div>
            // `
            `
            <style>
                .col-product img {
                    margin: 1rem;
                    width: 80%;
                    height: 80%;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: 0.3s;
                    box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;
                }
            
                .col-product img:hover {
                    opacity: 0.7;
                }

                .layer{
                    height: 80.5%;
                    width: 80%;
                    position: absolute;
                    top: 14px;
                    left: 16px;
                    transition: 0.5s;
                    border-radius: 5px;
                    cursor: pointer;
                }
                .layer:hover{
                    background: rgba(0,0,0,0.7);;
                }
                .layer h3{
                    width: 45%;
                    font-weight: 450;
                    color: #fff;
                    font-size: 26px;
                    bottom: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    position: absolute;
                    opacity: 0;
                    transition: 0.5s;
                    text-align: center;
                }
                .layer:hover h3{
                    bottom: 10%;
                    opacity: 0.7;
                }
            </style>

            <div class="col-product">
                <img src="${image}">
                <div class="layer" id=${id_minuman}>
                    <h3>${nama_minuman} <br><br><br><br> Rp ${harga_minuman}</h3>
                </div>
            </div>`;
        }
    }
    
    console.log(dataList);
    //dibawah bisa langsung return list of inner html
    document.querySelector('#listBeverages').innerHTML = dataList;
}



