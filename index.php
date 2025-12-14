<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-paper-plane"></i> Email Sender</h1>
            <p>Send emails quickly and securely with our simple form</p>
        </div>
        
        <form action="send.php" class="email-form" id="emailForm" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="sender"><i class="fas fa-user"></i> From</label>
                        <input type="email" class="form-control" id="sender" name="name" placeholder="Your email address" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="recipient"><i class="fas fa-users"></i> To</label>
                        <input type="email" class="form-control" id="recipient" name="email" placeholder="Recipient's email address" required>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="subject"><i class="fas fa-tag"></i> Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            
            <div class="form-group">
                <label for="message"><i class="fas fa-comment-alt"></i> Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Write your message here..." required></textarea>
            </div>
            
            <div class="attachment-area" id="attachmentArea">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Drag & drop files here or click to browse</p>
                <input type="file" id="fileInput" name="attachments[]" multiple style="display: none;">
                <button type="button" class="btn" style="width: auto; padding: 10px 20px; font-size: 0.95rem;" id="browseBtn">
                    <i class="fas fa-folder-open"></i> Browse Files
                </button>
                <ul class="file-list" id="fileList"></ul>
            </div>
            
            <button type="submit" class="btn" id="sendBtn" name="send">
                <i class="fas fa-paper-plane"></i> Send Email
            </button>
            
            <div class="status-message" id="statusMessage"></div>
        </form>
        
        <div class="footer">
            <p><i class="fas fa-shield-alt"></i> Your information is secure. This is a front-end demonstration form.</p>
            <p>No actual emails will be sent. Backend integration required for actual email delivery.</p>
        </div>
    </div>
</body>
</html>