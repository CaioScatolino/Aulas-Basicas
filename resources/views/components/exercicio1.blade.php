<style>

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #eeeeee;
        width: 200px;
        height: 400px;
        margin: 20px;
        padding: 20px;

    }

</style>

<div class="container">

    <img src="{{$image}}" alt="">
    <h3>{{$nome}}</h3>
    <h4>{{$idade}} Anos</h4>
    <span>{{$birth}}</span>

</div>