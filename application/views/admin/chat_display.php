<div class="table">
        <table>
            <thead>
                <tr>
                    <th>Message</th>
                    <th>Message_type</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($msg_data as $message){?>
                <tr>
                    <td><?php echo $message->message;?></td>
                    <td><?php echo $message->message_type;?></td>
                    <td><?php echo $message->created_date;?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>