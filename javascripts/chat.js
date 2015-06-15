//submit-a-login
 
 
//submit-a-line
$("#submit_chat").click(function(form){
   form.preventDefault();
   var chat = $("#chat").val();
   var chatuser = $('#chatuser').val();
   $.post("scripts/postchat.php", { chat: chat, chatuser:chatuser, submit:'submit' });
 
   $("form#chatForm")[0].reset();
   var objDiv = document.getElementById("centerbox");
   objDiv.scrollTop = objDiv.scrollHeight;   
   return false;
});
 
 
 
 
var i=0;
setInterval(
   function(){
      last = $('#timecontainer').text();
      $.get('scripts/getchat.php?last='+last, function(bmsJsonComment) {
      var bmsCommentData = JSON.parse(bmsJsonComment);
            if(bmsCommentData!==null){
               $.each(bmsCommentData, function(){
                  i=i+1;
                     var insideComment = '<div id="isi"><div class="isi_username">'+this.username+'</div><div class="isi_time">('+this.chatTime+')</div><div class="isi_isi"> - '+this.chat+' </div><div style="clear:both;"></div></div>';
 
                  $("#centerbox").append(insideComment).children(':last').hide().fadeIn(1000);
                  var lastBmsComment = document.getElementById('timecontainer');
                  lastBmsComment.innerHTML = this.timeres;
                  var objDiv = document.getElementById("centerbox");
                  objDiv.scrollTop = objDiv.scrollHeight;   
                  $("#chat").focus();
               });
            };
      });
   var ts = document.getElementById('timecontainer');
   s = ts.innerHTML;
 
   },500);
   
 
//get-user
 
setInterval(
   function(){
   
      $.get('scripts/chat_userlist.php', function(bmsJsonUserList) {
         var bmsJsonUserData = JSON.parse(bmsJsonUserList);
            if(bmsJsonUserData!==null){
            var userList='';
               $.each(bmsJsonUserData,function(){
               
                 userList = userList + '<div class="user_username">&nbsp;&nbsp;<img src="'+this.gravatar+'"> - '+this.username+'</div><div style="clear:both;"></div>';
                
               });
               $("#chat_userlist").html(userList);
             }
      });
 
   },3000);
   