<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Hello Component 2</div>

                    <div class="panel-body">
                        Hello Component 2 {{name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Hello2 Component mounted.')
        },
        data(){
            return{
                name: "my name name variable from data function"
            }
        }
    }
</script>
<style type="text/css" scoped>
    /* scoped would work only for current */
</style>
