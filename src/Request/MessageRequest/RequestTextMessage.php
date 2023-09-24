<?php

namespace JackieSource\WhatsAppCloudApi\Request\MessageRequest;

use JackieSource\WhatsAppCloudApi\Request\MessageRequest;

final class RequestTextMessage extends MessageRequest
{
    /**
    * {@inheritdoc}
    */
    public function body(): array
    {
        return [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            'text' => [
                'preview_url' => $this->message->previewUrl(),
                'body' => $this->message->text(),
            ],
        ];
    }
}
