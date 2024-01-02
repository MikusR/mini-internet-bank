@foreach($currencies as $currency)
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3>{{ $currency->symbol }}</h3>
                <p>{{ $currency->rate }}</p>
            </div>
        </div>
    </div>
@endforeach
@foreach($cryptoCurrencies as $cryptoCurrency)
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3>{{ $cryptoCurrency->symbol }}</h3>
                <p>{{ $cryptoCurrency->rate }}</p>
            </div>
        </div>
    </div>
@endforeach
