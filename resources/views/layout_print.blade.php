<style>
    @page {
        margin: 0.4cm 0 0;
    }
    .barcode {
        font-size: 11px;
        text-align: center;
    }
    .barcode > div {
        margin: auto;
    }
    .space {
        display: block;
        height: 13px;
    }
</style>

@foreach($barcodes as $key => $barcode)

    <div class="barcode">
        {!! DNS1D::getBarcodeHTML($barcode, "C128", 1, 20) !!}
        {{ $barcode }}
    </div>

    @if ($key%2 == 0)
        <div class="space"></div>
    @endif

@endforeach