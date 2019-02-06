<template>
    <div class="container">
        <div class="row">
            <spinner-component v-show='loading'></spinner-component>
            <div class="col-sm" v-for="pokemon in pokemons">
                <div class="card text-center" style="width: 18rem; margin-top:50px">
                    <img style="height:100px; width:100px; background-color: #EFEFEF; margin:20px;" 
                    class="card-img-top rounded-circle mx-auto d-block" v-bind:src="pokemon.picture" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ pokemon.name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                        <a href="/trainers/" class="btn btn-primary">Ver más...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {
        data() {
            return {
              /*   pokemons: [
                    { id:1, name: "Pikachu"},
                    { id:2, name: "Squirtle"},
                    { id:3, name: "Charizard"}
                ] */

                pokemons: [],
                loading: true
            }
        },
        mounted() {
            // console.log('Component Pokemons mounted.')

            axios
                .get('http://127.0.0.1:8000/pokemons')
                .then((res) => {
                    this.pokemons = res.data
                    this.loading = false
                })
                
            
        }
    }
</script>