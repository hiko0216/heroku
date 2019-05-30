<style scoped>
    .container{
        flex-direction: column;

    }
    .chat{
        width: 100%;
        padding: 20px;
        background: #fff !important;
        border: 3px solid #ccc;
        border-radius: 5px;
        max-height: 600px;
        overflow-x: auto;
        margin-top: 20px;
    }
    .chat .chat-right, .chat .chat-left{
        max-width: 70%;
       border-radius: 7px;
        padding: 8px;
        margin-left: 4px;
    }
    .chat-right{
        float: right;
        border: 1px solid #e64343;
        margin-top: 5px;
        color:white;
        background: #e64343;
    }
    .chat-left{
        float: left;
        border: 1px solid #2d40f0;
        margin-top: 5px;
        color:white;
        background: #2d40f0;
    }
    .no-message{
        height: 200px;
        display: flex;
        align-items: center;
    }
</style>


<template>
    <div class="container">
        <div class="chat" v-if="chats.length !=0">
            <div v-for="chat in chats" style="overflow:auto;">
                <div class="chat-right" v-if="chat.user_id == userid">
                    {{chat.chat}}
                </div>
                <div class="chat-left" v-else>
                    {{chat.chat}}
                </div>
            </div>
        </div>
        <div v-else class="no-message">
            ホームステイ留学に関する質問をしてみましょう。
        </div>
        <chat-composer v-bind:userid="userid" v-bind:chats="chats" v-bind:friendid="friendid"></chat-composer>
    </div>
</template>

<script>
    export default {
        props:['chats', 'userid','friendid'],
        
    }
</script>
