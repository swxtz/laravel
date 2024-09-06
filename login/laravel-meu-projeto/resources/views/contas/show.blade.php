{{-- Verificar se existe a sessão success e imprimir o valor --}}
@if (session('success'))
    <span style="color: #082;">
        {{ session('success') }}
    </span>
@endif