@props(['stok'])
@if ($stok > 0)
 <span>Tersedia ({{ $stok }})</span>
@else
 <span>Habis</span>
@endif

{{-- Pemakaian di dalam loop --}}
<x-status-stok :stok="$item['stok']" />
