
// Template tabeli w ofercie

class Template {
    constructor(top_name, top_name2, download, upload, router_price, installation_price, price) {
        this.html = `
            <div class="col-lg-4 mb-4">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-body pricing-card-body">
                        <div class="pricing-card-wrapper pcw-blue">
                            <h6 class="card-title text-muted text-uppercase text-center">${top_name}</h5>
                            <h4 class="card-price text-center">${top_name2}</span></h6>
                        </div>
                        <div class="pricing-card-wrapper2">
                            <hr class="mt-0">
                            <ul class="fa-ul pricing-list">
                                <li>
                                    <p><i class='bx bx-arrow-to-bottom'></i> Pobieranie</p>
                                    <p>${download}</p>
                                </li>
                                <li>
                                    <p><i class='bx bx-arrow-to-top' ></i> Wysyłanie</p>
                                    <p>${upload}</p>
                                </li>
                                <li>
                                    <p><i class='bx bx-station'></i> Router</p>
                                    <p>${router_price}</p>
                                </li>
                                <li>
                                    <p><i class='bx bx-wrench'></i> Montaż</p>
                                    <p>${installation_price}</p>
                                </li>
                                
                            </ul>
                            <a href="#" class="btn btn-block pricing-card-button">${price}</a>
                        </div>
                    </div>
                </div>
            </div>
        `
    }
}

function insertOffers(data) {
    if (typeof data !== 'undefined') {
        let holder = document.querySelector('#pricing_holder');

        data.forEach(element => {
            holder.innerHTML += element;
        });
    } else {
        console.error("Błąd: nie podano danych ofert w pliku strony")
    }
}




