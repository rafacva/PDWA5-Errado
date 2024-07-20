<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
    <Condição_Metereológica>
        <Temperatura_Mínima>{{ $item->tempMin }}</Temperatura_Mínima>
        <Temperatura_Máxima>{{ $item->tempMax }}</Temperatura_Máxima>
        <Umidade_Mínima>{{ $item->umidMin }}</Umidade_Mínima>
        <Umidade_Máxima>{{ $item->umidMax }}</Umidade_Máxima>
        <Precipitação>{{ $item->precipitacao }}</Precipitação>
    </Condição_Metereológica>
    @endforeach
</data>
