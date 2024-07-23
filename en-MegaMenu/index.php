function custom_watch_brands_shortcode() {
    ob_start();
    ?>
    <style>
        .bodyBRAND {
            direction: ltr;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: left;
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
            flex-wrap: wrap;
        }
    
        .brand-column {
            width: 240px;
            padding: 10px;
            box-sizing: border-box;
        }
    
        .brands a {
            display: block;
            width: 100%;
        }
    
        .brands p {
            margin: 2px 0;
            text-align: left;
        }
    
        .letters {
            width: 250px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
            padding: 20px;
            float: left;
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
                <!-- start A -->
                <a href="https://watchino.shop/category/brand/ice-watch/" data-brand="A"><p>(Ice watch) Ice Watch</p></a>
                <a href="https://watchino.shop/category/brand/apple/" data-brand="A"><p>(APPLE) Apple</p></a>
                <a href="https://watchino.shop/category/brand/omega/" data-brand="A"><p>(Omega) Omega</p></a>
                <a href="https://watchino.shop/category/brand/orient/" data-brand="A"><p>(ORIENT) Orient</p></a>
                <a href="https://watchino.shop/category/brand/casio/edifice/" data-brand="A"><p>(Edifice) Edifice</p></a>
                <a href="https://watchino.shop/category/brand/audemars-piguet/" data-brand="A"><p>(AP) Audemars Piguet</p></a>
                <a href="https://watchino.shop/category/brand/skmei/" data-brand="A"><p>(SKMEI) SKMEI</p></a>
                <a href="https://watchino.shop/category/brand/olevs/" data-brand="A"><p>(Olevs) Olevs</p></a>
                <!-- start B -->
                <a href="https://watchino.shop/category/brand/breitling/" data-brand="B"><p>(Breitling) Breitling</p></a>
                <!-- start P -->
                <a href="https://watchino.shop/category/brand/panerai/" data-brand="P"><p>(Panerai) Panerai</p></a>
                <a href="https://watchino.shop/category/brand/patek-philippe/" data-brand="P"><p>(Patek-Philippe) Patek Philippe</p></a>
                <a href="https://watchino.shop/category/brand/casio/Protrek/" data-brand="P"><p>(Protrek) Protrek</p></a>
                <!-- start T -->
                <a href="https://watchino.shop/category/brand/tag-heuer/" data-brand="T"><p>(TAG-Heuer) TAG Heuer</p></a>
                <!-- start J -->
                <a href="https://watchino.shop/category/brand/casio/g-shock/" data-brand="J"><p>(G shock) G-Shock</p></a>
                <!-- start D -->
                <a href="https://watchino.shop/category/brand/daniel-wellington/" data-brand="D"><p>(DW) Daniel Wellington</p></a>
                <a href="https://watchino.shop/category/brand/diesel/" data-brand="D"><p>(DIESEL) Diesel</p></a>
                <!-- start R -->
                <a href="https://watchino.shop/category/brand/rolex/" data-brand="R"><p>(Rolex) Rolex</p></a>
                <!-- start S -->
                <a href="https://watchino.shop/category/brand/citizen/" data-brand="S"><p>(Citizen) Citizen</p></a>
                <a href="https://watchino.shop/category/brand/seiko/" data-brand="S"><p>(SEIKO) Seiko</p></a>
                <a href="https://watchino.shop/category/brand/samsung/" data-brand="S"><p>(SAMSUNG) Samsung</p></a>
                <!-- start Sh -->
                <a href="https://watchino.shop/category/brand/xiaomi/" data-brand="Sh"><p>(XIAOMI) Xiaomi</p></a>
                <!-- start F -->
                <a href="https://watchino.shop/category/brand/fossil/" data-brand="F"><p>(Fossil) Fossil</p></a>
                <!-- start K -->
                <a href="https://watchino.shop/category/brand/casio/" data-brand="K"><p>(CASIO) Casio</p></a>
                <a href="https://watchino.shop/category/brand/crest/" data-brand="K"><p>(Crest) Crest</p></a>
                <a href="https://watchino.shop/category/brand/cartier/" data-brand="K"><p>(Cartier) Cartier</p></a>
                <!-- start H -->
                <a href="https://watchino.shop/category/brand/hublot/" data-brand="H"><p>(Hublot) Hublot</p></a>
				
            </div>
            <div class="letters">
                <p data-letter="A">A</p>
                <p data-letter="B">B</p>
                <p data-letter="P">P</p>
                <p data-letter="T">T</p>
                <p data-letter="J">J</p>
                <p data-letter="D">D</p>
                <p data-letter="R">R</p>
                <p data-letter="S">S</p>
                <p data-letter="Sh">Sh</p>
                <p data-letter="F">F</p>
                <p data-letter="K">K</p>
                <p data-letter="H">H</p>
				
                <!-- Add other letters as needed -->
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const letters = document.querySelectorAll(".letters p");
            const brands = Array.from(document.querySelectorAll(".brands a"));
        
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
                const brandsPerColumn = 8; // Number of brands per column
                let count = 0;
        
                // Filter brands based on the selected letter
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
        
            const defaultLetter = document.querySelector('.letters p[data-letter="A"]');
            if (defaultLetter) {
                defaultLetter.classList.add("selected");
                filterBrands("A");
                arrangeBrands("A");
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
