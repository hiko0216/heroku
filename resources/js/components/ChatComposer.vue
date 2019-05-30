<template>
    <div class="container-fluid chat-box">
        <div class="textcontrol">
            <input type="text" class="input typetext" v-on:keyup.enter="sendChat" v-model="chat">
        
        
            <input type="button" class="sendbtn" value="Send" v-on:click="sendChat">
        </div>
    </div>
</template>

<script>
export default {
    props:['chats','userid','friendid'],
    data(){
        return{
            chat:''
        }
    },
    methods:{
        sendChat:function(e){
            if(this.chat !=''){
                var data = {
                    chat:this.chat,
                    friend_id:this.friendid,
                    user_id:this.userid
                }
                this.chat = '';
                axios.post('/chat/sendChat',data).then((response)=>{
                    this.chats.push(data)
                })
            }
        }
    }
    
}
</script>

<style>

.typetext{
    margin-top: 5px;
    width: 100%;
    height: 30px;
    float: left;
    border-radius: 10px;
    border: 1px solid #ccc;
    position: relative;
}

.chat-box{
    padding-left: 0 !important;
    padding-right: 0 !important;
}
.sendbtn{
    margin-top: 5px;
    width: 10%;
    background: #53df47ea;
    color :white;
    border:2px solid #53df47ea;
    border-radius: 10px;
    position:absolute;
    right: 30px;
}

</style>


