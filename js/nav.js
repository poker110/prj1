const createNav = () =>{
    let nav = document.querySelector('.navbar');

            nav.innerHTML =` <div class="nav">
            <img src="img/Dataextraction.svg" class="brand-logo" alt="">
            <div class="nav-item">
                <div class="search">
                    <input type="text" class="search-box" placeholder="جست وجو در بین کالا و سازنده">
                    <button class="search-btn">جست و جو</button>
                </div>
                <a href=""><i class="fas fa-user"></i></a>
                <a href=""><i class="fas fa-shopping-cart"></i></a>

            </div>
        </div>
        <ul class="Links-container">
            <li class="Link-item"><a href="" class="Link">خانه</a></li>
            <li class="Link-item"><a href="" class="Link">مردانه</a></li>
            <li class="Link-item"><a href="" class="Link">زنانه</a></li>
            <li class="Link-item"><a href="" class="Link">بچه گانه</a></li>
            <li class="Link-item"><a href="" class="Link">ساخت</a></li>

        </ul>
    `;
}
createNav('')