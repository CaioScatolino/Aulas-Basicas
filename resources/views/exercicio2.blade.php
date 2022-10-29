<style>
    .container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>

<div class="container">
@for ($i= 1; $i <= 50; $i++)
    
    @component('components.exercicio2')

    @slot('url')
    {{$url.$i}}
    @endslot
        
    @endcomponent

@endfor

</div>