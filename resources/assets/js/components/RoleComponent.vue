<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Chat</div>

                    <div class="panel-body">
                        <ul>
                            <li v-for="msg in messages">
                            @{{ msg.name }} </li>
                        </ul>

                    
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                messages: [],
            }
        },


        mounted(){
            Echo.private('role-channel')
                .listen('Event', (e) => {
                    
                    this.messages.push(e);
            });
        }
    }
</script>