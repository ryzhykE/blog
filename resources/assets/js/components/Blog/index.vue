<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: {
            dataFetch: [],
            editData: {}
        },
        methods: {
            fetchPost(){
                let self = this;
                axios.get('api/blog').then(function (response) {
                    self.dataFetch = response.data
                }).catch(function (error) {
                    console.log(error)
                })
            }
        },
        mounted() {
            let vm = this;
            vm.fetchPost();
        }
    }
</script>
