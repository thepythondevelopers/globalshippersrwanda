<div class="col-12 col-lg-6">
              <div class="srch-table chat-section1">
                <div class="itemhdr chatheader">
                  <h5 class="itemtitle mb-0">Messages</h5>
                </div>
                <ul class="chat-list">
             
                            <li class="chatli yourChat yourChat2">
                            </li>
                </ul>
                <div class="chatinput-sec">
                  <!-- <form action="<?php //echo base_url('Shopnship/international_insert_message')?>" method="post"> -->
                  <select class="chatselect" name="itemname" id="message_type">
                    <option selected="" disabled="">Select</option>
                    <option value="MOTOROLA G22 64GB 4GB">MOTOROLA G22 64GB 4GB</option>
                    <option value="All">All</option>
                  </select>
                  <textarea
                    name="message"
                    rows="4"
                    placeholder="Enter your message"
                    maxlength="250" id="message"
                  ></textarea>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <span class="attach-file">
                      <input
                        type="file"
                        name="attechment"
                        accept="image/png, image/jpeg"
                      />
                      <span class="attechicon">
                        <i class="fas fa-paperclip"></i>
                      </span>
                    </span>
                    <button type="button" name="submit" id="save" value="<?php //echo $order_id;?>">
                      <i class="fas fa-paper-plane"></i>Send
                    </button>
                  </div>
                <!-- </form> -->
                </div>
              </div>
            </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script>
<!-- <script src="assets/resource/tiny_mce.js"></script> -->


 <script>
  $(document).ready(function(){
            $("#save").on("click", function(){
                $value = $("#message").val();
                // alert($value)
                $message_type = $("#message_type").val();
                $order_id = $("#save").val();
                var dt = new Date();
                var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                $msg = ' <li class="chatli yourChat yourChat2"><div class="chatrep">' + $message_type + '</div> <div class="chat-cont"><p>'+$value+'</p> <span class="reptxt">Replied By : Admin </span> <span class="chattime">'+time+'</span></div></li>';
                $(".yourChat2").append($msg);
                $("#message").val('');
                $("#message_type").val();
                $msg = '';
                
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url().'Admin/Admin/admin_insert_message'?>',
                    type: 'POST',
                    data: 'textarea='+$value+'&message_type='+$message_type+'&created_date='+time+'&order_id='+$order_id,
                    success: function(result){
                        $replay = ' <li class="chatli yourChat yourChat2"><div class="chatrep">' + $result + '</div><div class="chat-cont"><p>'+$result+'</p> <span class="reptxt">Replied By : Admin </span> <span class="chattime">'+$result.created_date +'</span></div></li>';
                        $(".yourChat2").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".yourChat2").scrollTop($(".yourChat")[0].scrollHeight);
                    }
                });
            });
        });

</script>