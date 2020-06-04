<div class="container mt-5">
    <span class="text-muted">Internet światłowodowy FTTH</span>
    <hr class="mt-0">

    <div class="row">
        <div class="col text-center">
            <h4 class="text-center pb-4 pt-2 m-0"><b></b>Długość umowy: 24 miesiące</h4>
        </div>
    </div>

    <div class="row d-flex justify-content-center" id="pricing_holder">
        <!-- Tutaj wskakują dane ze skryptu -->
    </div>
</div>


<script src="js/pricingLoader.js"></script>
<script>
    let offers = [];

    //Oferta 1
    offers.push(new Template(
        'FTTH GPON', // Górny napis w ofercie np. FTTH, AIRMAX
        '200 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '200 Mb/s', // Prędkość pobierania
        '20 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 1zł', // Cena instalacji
        '60zł / msc' // Cena pakietu
    ).html);

    //Oferta 2
    offers.push(new Template(
        'FTTH GPON', // Górny napis w ofercie np. FTTH, AIRMAX
        '400 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '400 Mb/s', // Prędkość pobierania
        '40 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 1zł', // Cena instalacji
        '70zł / msc' // Cena pakietu
    ).html);

    //Oferta 3
    offers.push(new Template(
        'FTTH GPON', // Górny napis w ofercie np. FTTH, AIRMAX
        '600 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '600 Mb/s', // Prędkość pobierania
        '60 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 1zł', // Cena instalacji
        '80zł / msc' // Cena pakietu
    ).html);

    //Oferta 4
    offers.push(new Template(
        'FTTH GPON', // Górny napis w ofercie np. FTTH, AIRMAX
        '800 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '800 Mb/s', // Prędkość pobierania
        '80 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 1zł', // Cena instalacji
        '90zł / msc' // Cena pakietu
    ).html);

    //Oferta 5
    offers.push(new Template(
        'FTTH GPON', // Górny napis w ofercie np. FTTH, AIRMAX
        '1000 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '1000 Mb/s', // Prędkość pobierania
        '100 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 1zł', // Cena instalacji
        '100zł / msc' // Cena pakietu
    ).html);


    //Do not touch
    insertOffers(offers);
</script>