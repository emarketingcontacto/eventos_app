
 @if ($negocio->negocio_map_code)
    <div class="map-container" style="width: 100%; height:450px">
        <style>
            .map-container iframe{
                width: 100% !important;
                height:100% !important;
                border:0;
            }
        </style>
        {!! $negocio->negocio_map_code !!}
    </div>
 @endif



