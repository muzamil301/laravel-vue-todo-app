<template>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">All todo tasks <a href="#add-modal" data-toggle="modal" class="btn btn-primary pull-right">Add new</a></div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item clearfix" v-for="task in tasks.data">
                                {{task.id}} - {{task.name}}
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary">View</button>
                                    <button type="button" class="btn btn-success">Update</button>
                                    <button type="button" class="btn btn-warning">Delete</button>
                                </div>
                            </li>
                        </ul>
                        <pagination :data="tasks" @pagination-change-page="getResults"></pagination>
                    </div>
                    <div class="panel-footer">
                        Footer
                    </div>
                </div>
            </div>
        </div>
        <div id="modal">
            <addTask @recordAdded="refreshRecord"></addTask>
        </div>
    </div>
</template>

<script>
    //<!-- register component in pagination
    Vue.component('pagination', require('laravel-vue-pagination'));
    Vue.component('addTask', require('./AddModalComponent.vue'));

    export default {
        data(){
            return{
                tasks:{},
            }
        },
        methods:{
            // Our method to GET results from a Laravel endpoint
        getResults(page = 1) {
            axios.get('http://127.0.0.1:8000/tasks?page=' + page)
                .then(response => this.tasks = response.data)
                .catch(error=>consol.log(error));
            },
            refreshRecord(record){
                this.tasks = record.data
            }
        },

        created() { /*mounted or created*/
            axios.get('http://127.0.0.1:8000/tasks')
            .then((response)=>this.tasks = response.data)
            .catch((error)=>console.log(error))
            console.log('task component created.');
        }
    }
</script>
<style type="text/css" scoped>
    /* scoped would work only for current */
</style>
