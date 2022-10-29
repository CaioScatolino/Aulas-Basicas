<style>
    .container2 {
        display: flex;
        flex-direction: row;
    }
</style>

<div class="container2">
@foreach ($pessoas as $pessoa)
    

@component('components.exercicio1')
    @slot('image')
    {{$pessoa['image']}}
    @endslot
    @slot('nome')
    {{$pessoa['nome']}}
    @endslot
    @slot('idade')
    {{$pessoa['idade']}}
    @endslot
    @slot('birth')
    {{$pessoa['birth']}}
    @endslot
    
@endcomponent
@endforeach

</div>