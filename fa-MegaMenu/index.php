function custom_watch_brands_shortcode() {
    ob_start();
    ?>
    <style>
        .bodyBRAND {
            direction: rtl;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: right;
            align-items: center;
        }
    
        .containerBRAND {
            height: 240px;
            display: flex;
            flex-direction: row-reverse;
            overflow: hidden;
        }
    
        .brands {
            padding: 20px;
            display: flex;
            flex-wrap: wrap; /* اجازه به ردیف‌های جدید برای برندها */
        }
    
        .brand-column {
            width: 240px;
            padding: 10px;
            box-sizing: border-box;
        }
    
        .brands p {
            margin: 2px 0;
            text-align: right;
        }
    
        .letters {
            width: 250px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 20px;
            float: right;
            max-width: 300px;
        }
    
        .letters p {
            width: 25%;
            margin: 5px 0;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }
    
        .letters p:hover {
            transform: scale(1.1);
        }
    
        .letters p.selected {
            margin: 0 auto !important;
            border: 1px solid black;
            color: black;
            background-color: rgb(231, 236, 236);
            border-radius: 45px !important;
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 0 !important;
            text-align: -webkit-center;
            padding-top: 3px !important;
        }
    
        a {
            color: black;
            text-decoration: none;
            transition: color 0.3s;
        }
    
        a:hover {
            color: orange;
            transition: all;
        }
    </style>
    
    
    
    
    <div class="bodyBRAND">
        <div class="containerBRAND">
            <div class="brands">
                <!-- start الف -->
                <a href="https://watchino.shop/category/brand/ice-watch/"><p data-brand="الف">(Ice watch) آیس واچ</p></a>
                <a href="https://watchino.shop/category/brand/ice-watch/"><p data-brand="الف">(Ice watch) آیس واچ</p></a>
                <a href="https://watchino.shop/category/brand/ice-watch/"><p data-brand="الف">(Ice watch) آیس واچ</p></a>
                <a href="https://watchino.shop/category/brand/ice-watch/"><p data-brand="الف">(Ice watch) آیس واچ</p></a>
                <a href="https://watchino.shop/category/brand/apple/"><p data-brand="الف">(APPLE) اپل</p></a>
                <a href="https://watchino.shop/category/brand/omega/"><p data-brand="الف">(Omega) امگا</p></a>
                <a href="https://watchino.shop/category/brand/orient/"><p data-brand="الف">(ORIENT) اورینت</p></a>
                <a href="https://watchino.shop/category/brand/casio/edifice/"><p data-brand="الف">(Edifice) ادیفایس</p></a>
                <a href="https://watchino.shop/category/brand/audemars-piguet/"><p data-brand="الف">(AP) آدامارس پیگه</p></a>
                <a href="https://watchino.shop/category/brand/skmei/"><p data-brand="الف">(SKMEI) اسکمی</p></a>
                <a href="https://watchino.shop/category/brand/olevs/"><p data-brand="الف">(Olevs) الوز</p></a>
                <a href="https://watchino.shop/category/brand/olevs/"><p data-brand="الف">(Olevs) الوز</p></a>
                <a href="https://watchino.shop/category/brand/olevs/"><p data-brand="الف">(Olevs) الوز</p></a>
                <a href="https://watchino.shop/category/brand/olevs/"><p data-brand="الف">(Olevs) الوز</p></a>
				
                <!-- start ب -->
                <a href="https://watchino.shop/category/brand/breitling/"><p data-brand="ب">(Breitling) برایتلینگ</p></a>
                <!-- start پ -->
                <a href="https://watchino.shop/category/brand/panerai/"><p data-brand="پ">(Panerai) پنرای </p></a>
                <a href="https://watchino.shop/category/brand/patek-philippe/"><p data-brand="پ">(Patek-Philippe) پتک فیلیپ</p></a>
                <a href="https://watchino.shop/category/brand/casio/Protrek/"><p data-brand="پ">(Protrek) پروترک</p></a>
                <!-- start ت -->
                <a href="https://watchino.shop/category/brand/tag-heuer/"><p data-brand="ت">(TAG-Heuer) تگ هویر</p></a>
                <!-- start ج -->
                <a href="https://watchino.shop/category/brand/casio/g-shock/"></a>
                <p data-brand="ج">(G shock) جی شاک</p>
                <!-- start د -->
                <a href="https://watchino.shop/category/brand/daniel-wellington/"><p data-brand="د">(DW) دنیل ولینگتون</p></a>
                <a href="https://watchino.shop/category/brand/diesel/"><p data-brand="د">(DIESEL) دیزل</p></a>
                <!-- start ر -->
                <a href="https://watchino.shop/category/brand/rolex/"><p data-brand="ر">(Rolex) رولکس</p></a>
                <!-- start س -->
                <a href="https://watchino.shop/category/brand/citizen/"><p data-brand="س">(Citizen) سیتیزن</p></a>
                <a href="https://watchino.shop/category/brand/seiko/"><p data-brand="س">(SEIKO) سیکو</p></a>
                <a href="https://watchino.shop/category/brand/samsung/"><p data-brand="س">(SAMSUNG) سامسونگ</p></a>
                <!-- start ش -->
                <a href="https://watchino.shop/category/brand/xiaomi/"><p data-brand="ش"> (XIAOMI) شیائومی</p></a>
                <!-- start ف -->
                <a href="https://watchino.shop/category/brand/fossil/"><p data-brand="ف">(Fossil) فسیل</p></a>
                <!-- start ک -->
                <a href="https://watchino.shop/category/brand/casio/"><p data-brand="ک">(CASIO) کاسیو</p></a>
                <a href="https://watchino.shop/category/brand/crest/"><p data-brand="ک">(Crest) کرست</p></a>
                <a href="https://watchino.shop/category/brand/cartier/"><p data-brand="ک">(Cartier) کارتیر</p></a>
                <!-- start ه -->
                <a href="https://watchino.shop/category/brand/hublot/"><p data-brand="ه">(Hublot) هابلوت</p></a>
            </div>
            <div class="letters">
                <p data-letter="الف">الف</p>
                <p data-letter="ب">ب</p>
                <p data-letter="پ">پ</p>
                <p data-letter="ت">ت</p>
                <p data-letter="ج">ج</p>
                <p data-letter="د">د</p>
                <p data-letter="ر">ر</p>
                <p data-letter="س">س</p>
                <p data-letter="ش">ش</p>
                <p data-letter="ف">ف</p>
                <p data-letter="ف">ف</p>
                <p data-letter="ک">ک</p>
                <p data-letter="ه">ه</p>
                <!-- Add other letters as needed -->
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const letters = document.querySelectorAll(".letters p");
            const brands = Array.from(document.querySelectorAll(".brands p"));
        
            function filterBrands(selectedLetter) {
                brands.forEach(brand => {
                    const brandLetter = brand.getAttribute("data-brand");
                    brand.style.display = (brandLetter === selectedLetter) ? "block" : "none";
                });
            }
        
            function arrangeBrands(selectedLetter) {
                const columns = document.querySelectorAll(".brand-column");
                columns.forEach(column => column.remove());
        
                let brandColumn = null;
                const brandsPerColumn = 8; // تعداد برندهایی که در هر ستون می‌خواهید
                let count = 0;
        
                // فیلتر کردن برندها بر اساس حرف انتخاب شده
                const filteredBrands = brands.filter(brand => brand.getAttribute("data-brand") === selectedLetter);
        
                if (filteredBrands.length > brandsPerColumn) {
                    filteredBrands.forEach(brand => {
                        if (count % brandsPerColumn === 0) {
                            brandColumn = document.createElement("div");
                            brandColumn.classList.add("brand-column");
                            document.querySelector(".brands").appendChild(brandColumn);
                        }
                        brandColumn.appendChild(brand);
                        count++;
                    });
                } else {
                    const singleColumn = document.createElement("div");
                    singleColumn.classList.add("brand-column");
                    filteredBrands.forEach(brand => {
                        singleColumn.appendChild(brand);
                    });
                    document.querySelector(".brands").appendChild(singleColumn);
                }
            }
        
            const defaultLetter = document.querySelector('.letters p[data-letter="الف"]');
            if (defaultLetter) {
                defaultLetter.classList.add("selected");
                filterBrands("الف");
                arrangeBrands("الف");
            }
        
            letters.forEach(letter => {
                letter.addEventListener("click", () => {
                    const selectedLetter = letter.getAttribute("data-letter");
                    letters.forEach(l => l.classList.remove("selected"));
                    letter.classList.add("selected");
                    filterBrands(selectedLetter);
                    arrangeBrands(selectedLetter); 
                });
            });
        });
        </script>
        
        

    <?php
    return ob_get_clean();
}
add_shortcode('custom_watch_brands', 'custom_watch_brands_shortcode');
