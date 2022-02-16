<?php
    $errors = [];
    if($exception) {
        $message = [
            'type' => 'error',
            'message' => $exception->getMessage()
        ];
     
        if(get_class($exception) === 'ValidationException') {
            $errors = $exception->getErrors();
        }
    }
     
    $alertType = '';
     
    if($message['type'] === 'error') {
        $alertType = 'danger';
    } else {
        $alertType = 'success';
    }
    ?>
     
    <?php if(!empty($message)): ?>
        <div role="alert"
            class="my-3 alert alert-<?php echo $alertType ?>">
            <?php echo $message['message'] ?>
        </div>
    <?php endif ?>