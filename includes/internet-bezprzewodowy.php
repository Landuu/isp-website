<div class="container mt-5">
    <span class="text-muted">Internet bezprzewodowy AirMax</span>
    <hr class="mt-0">

    <div class="row">
        <div class="col text-center">
            <h4 class="text-center pb-4 pt-2 m-0"><b></b>Długość umowy: 24 miesiące</h4>
        </div>
    </div>

    <div class="row" id="pricing_holder">
        <!-- Tutaj wskakują dane ze skryptu -->
    </div>
</div>


<script src="js/pricingLoader.js"></script>
<script>
    let offers = [];

    //Oferta 1
    offers.push(new Template(
        'AIRMAX', // Górny napis w ofercie np. FTTH, AIRMAX
        '12 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '12 Mb/s', // Prędkość pobierania
        '2 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 99zł', // Cena instalacji
        '45zł / msc' // Cena pakietu
    ).html);

    //Oferta 2
    offers.push(new Template(
        'AIRMAX', // Górny napis w ofercie np. FTTH, AIRMAX
        '24 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '24 Mb/s', // Prędkość pobierania
        '4 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 99zł', // Cena instalacji
        '55zł / msc' // Cena pakietu
    ).html);

    //Oferta 3
    offers.push(new Template(
        'AIRMAX', // Górny napis w ofercie np. FTTH, AIRMAX
        '32 Mbps', // Nazwa oferty np. 8 Mbps, 16 Mbps
        '32 Mb/s', // Prędkość pobierania
        '6 Mb/s', // Prędkość wysyłania
        'od 99zł', // Cena routera
        'od 99zł', // Cena instalacji
        '70zł / msc' // Cena pakietu
    ).html);


    //Do not touch
    insertOffers(offers);
</script>