
const config = {
    apiKey: "AIzaSyBusP2l58G95J518C_9gKznVSv4j5DqHCs",
    authDomain: "AtmoDrive-65292.firebaseapp.com",
    projectId: "AtmoDrive-65292",
    storageBucket: "https://AtmoDrive-65292-default-rtdb.firebaseio.com/",
    databaseURL: "https://AtmoDrive-65292-default-rtdb.firebaseio.com/",
    messagingSenderId: "488929727501",
    appId: "1:488929727501:web:d158c4aad7935709ec7144",
    measurementId: "G-GSTBXCY04K"
};
firebase.initializeApp(config);

database = firebase.database();
var ref = database.ref('LiveChat');

// ref.once('value',init);

// var messageContainerRef = firebase.database().ref('/');

// this event will be triggered when a new object will be added in the database...
ref.on('child_added', function (data) {
    console.log(data);
    this.addChatContainer(data.val(), data.key);
});

ref.on('child_removed', function (data) {
    storeChat(data.val());
    this.removeMessageContainer(data.key, true);
});

ref.on('child_changed', function (data) {
    this.removeMessageContainer(data.key);
    this.addChatContainer(data.val(), data.key);
    if (data.key == $('#chatMessageId').val()) {
        getChat('', data.key, data.val().senderInfo.name, true);
    }
});

function removeChat() {
    $('#messageTxt').val('تم انهاء المحادثة نسعد بتحدثك الينا مجدداً في أي وقت \n Conversation ended, we are happy to talk to you again anytime');
    $('#btn_send').click();
    setTimeout(function () {
        let chatId = $('#chat_id_end').val();
        if (chatId != '') {
            let chatRef = this.database.ref('LiveChat/' + chatId);
            chatRef.remove()
            $('#model_end_chat').modal('hide');
        }
    }, 5000);
}

function sendMessage(path = null) {

    var today = new Date();
    //var date=today.toLocaleString();
    var date = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2) + ' ' + ('0' + today.getHours()).slice(-2) + ":" + ('0' + today.getMinutes()).slice(-2) + ":" + ('0' + today.getSeconds()).slice(-2);
    var chatIndex = $('#chatMessageId').val(); // get the chat index
    // if(chatIndex != "0"){
    if (path == null) {
        messageTxt = $('#messageTxt').val();
        msgType = 'string';
    } else {
        messageTxt = path;
        msgType = 'media';
    }
    if (messageTxt != '') {
        const messageRef = ref.child(chatIndex + '/messages');

        this.pushMessage(messageRef, messageTxt, date, msgType);  // this function to push message to firbase

        $('#messageTxt').val('');       //empty message box
    } else {
        alert('pleae type a message first');
    }
    let senderName = $('#head-chat-name').text();
    getChat('', chatIndex, senderName);
    // }
}

//this function called once when fire the page chat
// function init(data)
// {
//     var chats = data.val();
//     for(var index in chats){
//         this.addChatContainer(chats[index], index);
//     }
// }

function addMessage(message, index, sender) {
    var messageObj = this.getMessageObject(message.msg, message.msgType);

    if (message.senderType == "passenger" || message.senderType == "captain") {
        $('#messagesBody_' + index).append('<div class="d-flex flex-column mb-5 align-items-start">'
            + ' <div class="d-flex align-items-center">'
            + '<div class="symbol symbol-circle symbol-40 mr-3">'
            + '  <img alt="Pic" src="' + sender.img + '">'
            + '</div>'
            + '<div>'
            + ' <a href="#"'
            + 'class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">' + sender.name
            + ' </a> <br> <span class="text-muted font-size-sm">' + message.date + '</span>'
            + '</div>'
            + '</div>'
            + '<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px massage" >' + messageObj
            + '</div>'
            + '</div>');
    }

    else {
        $('#messagesBody_' + index).append('<div class="d-flex flex-column mb-5 align-items-end">'
            + ' <div class="d-flex align-items-center">'
            + '<div class="text-right">'
            + ' <a href="#"'
            + 'class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">' + message.senderType + '</a>'
            + ' <br> <span class="text-muted font-size-sm">' + message.date + '</span>'
            + '</div>'
            + '<div class="symbol symbol-circle symbol-40 mr-3">'
            + '<img alt="Pic" src="../assets/images/logo.png">'
            + '</div>'
            + '</div>'
            + '<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">' + messageObj
            + '</div>'
            + '</div>');
    }
}

// this function called when user click side chat head & called when chat changed after send message



function removeMessageContainer(index, permenantRemove = false) {
    $('#side-chat-icon-' + index).remove();
    $('#messagesContainer_' + index).remove();
    $('#chat-boot-choices-' + index).remove();
    $('#head-chat-name').text('');
    $('#ticket_user').html('');
    if (permenantRemove) {
        $('.card-footer').hide();
    }
}

// this function get message object and check if message is media(image or audio) or just a string and return the element of html that display
function getMessageObject(messageObj = '', messageType = '') {
    if (messageType == 'media') {
        var extension = this.getExtension(messageObj); // get extension of url to know the type of this url
        if (extension == 'jpg' || extension == 'png' || extension == 'jpeg' || extension == 'svg') {
            messageObj = '<img src="' + messageObj + '" style="width:300px; height:400px">';
        } else if (extension == 'mp3') {
            messageObj = '<audio controls>'
                + '<source src="' + messageObj + '" type="audio/mpeg">'
                + '</audio>';
        }
    }
    return messageObj;
}

//get extension of url to check the type of this url
function getExtension(messageUrl) {
    let imageUrl = messageUrl.substr(1 + messageUrl.lastIndexOf("/"));
    let extension = imageUrl.split('.').pop();
    return extension;
}






/* function addChatContainer(chat,index){

//     let sender = chat.senderInfo;

//     // check if sender is passenger or captain to re direct to its route if admin want to see his info
//     let userRoute = "users/"+sender.id;
//     if(sender.type == 'passenger'){
//         userRoute = "passengers/"+sender.id;
//     }else if(sender.type == 'captain'){
//         userRoute = "cpatains/"+sender.id;
//     }

//     // add side head chat section
//     $('#side-chat-container').prepend('<div class="d-flex align-items-center justify-content-between mb-5 side-chat-icon" id="side-chat-icon-'+index+'"'
//                                 +'onclick="getChat('+index+','+'\''+sender.name+''+'\''+')">'
//                                 +'<div class="d-flex align-items-center">'
//                                     +'<div class="symbol symbol-circle symbol-50 mr-3">'
//                                     +' <img alt="Pic" src="'+  sender.img +'">'//"{{asset('/')}}/"+
//                                 +' </div>'
//                                     +'<div class="d-flex flex-column">'
//                                         // +'<a href="'+"{{url('dashboard/users/')}}/"+sender.id+'"'
//                                         // +'  class="text-dark-75 text-hover-primary font-weight-bold font-size-lg"></a>'
//                                         +' '+ sender.name
//                                     +'</div>'
//                                 +'</div>'
//                             +' <div class="d-flex flex-column align-items-end">'
//                                 +'<span class=" font-weight-bold font-size-sm"><li class="fa fa-dot-circle mr-2" style="color:red" id="icon-'+index+'"></li>'
//                                 +sender.type+'<a class="svg-icon svg-icon-md svg-icon-primary ml-2" href="'+"{{url('dashboard')}}/"+userRoute+'">'
//                                 +'<i class="fa far fa-eye"></i>'
//                             +'</a></span>'
//                             +' </div>'
//                             +'</div>');
//     // add chat container that contain the messages
//     $('#card-messages').prepend('<div class="scroll scroll-pull messagesContainer" data-mobile-height="350" id="messagesContainer_'+index+'"'
//                     +'style="height: 371px; overflow-y: scroll; display:none">'
//                     +'<div class="messages" id="messagesBody_'+index+'">'
//                         +'</div>'
//                         +'<div class="ps__rail-x" style="left: 0px; bottom: -5px;">'
//                             +'  <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>'
//                             +'</div>'
//                             +'<div class="ps__rail-y" style="top: 5px; height: 171px; right: -2px;">'
//                             +' <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>'
//                         +' </div>'
//                     +'</div>');

//     messages = chat.messages;
//     //    this.addMessages(messages, index, sender);

//     //add messages of chat
//     for(var iteration in messages){
//         let message = messages[iteration];
//         this.addMessage(message, index, sender);
//     }
// }
*/
