<template>
    <div class="modal fade" id="add-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add new task</h4>
                </div>
                <div class="modal-body">
                    <p class="alert alert-success" v-if="record.length > 0">{{}}</p>
                    <label for="name">Enter task name</label>
                    <textarea name="name" class="form-control" id="name" placeholder="write task" v-model="record"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" v-on:click="addRecord">Save changes</button> <!-- @click or v-on:click -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                record: '',
                success :''
            }
        },
        methods:{
           
            addRecord(){
                axios.post('http://127.0.0.1:8000/tasks',{
                    'name' :this.record,
                })
                .then(data =>this.$emit('recordAdded', data))
                .catch(error=> console.log(error))
                console.log('test clicked')
                this.record = '';
            },
            testFunction: function (event) {
              console.log('test clicked')
            }
        }
    }
</script>
<style type="text/css" scoped>
    /* scoped would work only for current */
</style>
